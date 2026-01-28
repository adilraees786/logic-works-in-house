<?php
// backend/chat-stream.php

require_once 'config.php';
require_once 'knowledge-base.php';

// Set headers for Server-Sent Events BEFORE including config
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
header('X-Accel-Buffering: no');
header('Connection: keep-alive');

// Handle CORS for streaming
$allowedOrigins = explode(',', $_ENV['ALLOWED_ORIGINS'] ?? '*');
$origin = $_SERVER['HTTP_ORIGIN'] ?? '';

if (in_array($origin, $allowedOrigins) || $allowedOrigins[0] === '*') {
    header("Access-Control-Allow-Origin: $origin");
}

// Disable output buffering
if (ob_get_level()) ob_end_clean();

// Check request method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "data: " . json_encode(['type' => 'error', 'message' => 'Invalid request method']) . "\n\n";
    flush();
    exit();
}

// Load environment
loadEnv(__DIR__ . '/.env');

// Rate limiting
if (!checkRateLimit()) {
    echo "data: " . json_encode(['type' => 'error', 'message' => 'Too many requests. Please try again later.']) . "\n\n";
    flush();
    exit();
}

// Get POST data
$input = json_decode(file_get_contents('php://input'), true);

if (!isset($input['message']) || empty(trim($input['message']))) {
    echo "data: " . json_encode(['type' => 'error', 'message' => 'Message is required']) . "\n\n";
    flush();
    exit();
}

$userMessage = trim($input['message']);
$conversationHistory = $input['history'] ?? [];

// Initialize knowledge base
$kb = new KnowledgeBase();

// Search knowledge base
$searchResults = $kb->search($userMessage);
$context = $kb->buildContext($searchResults);

// Build system prompt
$systemPrompt = "You are " . CHATBOT_NAME . ", a professional, helpful AI assistant for Logic Works, a leading digital solutions company.

Core behavior:
- Represent Logic Works clearly, professionally, and confidently
- Keep responses focused, concise, and directly relevant to the user's question
- Do NOT provide unnecessary explanations, opinions, or extra suggestions
- Do NOT go beyond the scope of Logic Works services
- Avoid casual chit-chat, speculation, or promotional exaggeration

Response guidelines:
- Answer only what is asked, nothing more
- Use a calm, friendly, and business-appropriate tone
- Keep responses under 150 words whenever possible
- Use bullet points only when they improve clarity
- Never invent details or assumptions

Contact rule (STRICT):
- If the user asks about contact details, email, support, help, reach out, or communication:
  - Respond ONLY with the following email address:
    info@logicworks.ae
  - Do NOT add phone numbers, links, explanations, or extra text
  
Information rules:
- Use ONLY the verified information provided in the knowledge base
- If information is missing or unclear, politely suggest contacting the Logic Works team
- For pricing inquiries, always recommend requesting a custom quote
- Encourage a free consultation only when relevant and appropriate

Strict limitation:
- If a question is not related to Logic Works services, politely redirect or decline
- Do NOT answer general, unrelated, or hypothetical questions

" . ($context ? "Use this verified information to answer accurately:\n\n$context" : "");


// Prepare messages for OpenAI
$messages = [
    ['role' => 'system', 'content' => $systemPrompt]
];

// Add conversation history (limit to last 6 messages)
$historyLimit = min(count($conversationHistory), 6);
for ($i = count($conversationHistory) - $historyLimit; $i < count($conversationHistory); $i++) {
    $messages[] = $conversationHistory[$i];
}

// Add current user message
$messages[] = ['role' => 'user', 'content' => $userMessage];

// Prepare OpenAI API request with streaming
$requestData = [
    'model' => GPT_MODEL,
    'messages' => $messages,
    'max_tokens' => MAX_TOKENS,
    // 'temperature' => TEMPERATURE,
    // 'top_p' => 1,
    // 'frequency_penalty' => 0.3,
    // 'presence_penalty' => 0.3,
    'stream' => true
];

// Initialize cURL for streaming
$ch = curl_init(OPENAI_API_URL);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($requestData));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . OPENAI_API_KEY
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 0);

// Buffer for incomplete JSON chunks
$buffer = '';
$fullResponse = '';

// Callback function to process streaming data
curl_setopt($ch, CURLOPT_WRITEFUNCTION, function($ch, $data) use (&$buffer, &$fullResponse) {
    $buffer .= $data;
    $lines = explode("\n", $buffer);
    
    // Keep the last incomplete line in buffer
    $buffer = array_pop($lines);
    
    foreach ($lines as $line) {
        $line = trim($line);
        
        if (empty($line)) {
            continue;
        }
        
        if ($line === 'data: [DONE]') {
            continue;
        }
        
        // Remove "data: " prefix
        if (strpos($line, 'data: ') === 0) {
            $line = substr($line, 6);
        }
        
        // Parse JSON
        $decoded = json_decode($line, true);
        
        if (json_last_error() === JSON_ERROR_NONE) {
            // Check for content
            if (isset($decoded['choices'][0]['delta']['content'])) {
                $content = $decoded['choices'][0]['delta']['content'];
                $fullResponse .= $content;
                
                // Send SSE event
                echo "data: " . json_encode([
                    'type' => 'content',
                    'content' => $content
                ]) . "\n\n";
                
                // Flush output immediately
                if (ob_get_level()) ob_flush();
                flush();
            }
            
            // Check for errors
            if (isset($decoded['error'])) {
                echo "data: " . json_encode([
                    'type' => 'error',
                    'message' => $decoded['error']['message'] ?? 'Unknown error'
                ]) . "\n\n";
                
                if (ob_get_level()) ob_flush();
                flush();
                return -1; // Stop processing
            }
        }
    }
    
    return strlen($data);
});

// Execute request
$success = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);
curl_close($ch);

// Handle errors
if ($curlError || !$success) {
    echo "data: " . json_encode([
        'type' => 'error',
        'message' => $curlError ?: 'Connection failed'
    ]) . "\n\n";
} elseif ($httpCode !== 200) {
    echo "data: " . json_encode([
        'type' => 'error',
        'message' => 'API error (HTTP ' . $httpCode . ')'
    ]) . "\n\n";
} else {
    // Send completion event
    echo "data: " . json_encode([
        'type' => 'done',
        'fullMessage' => $fullResponse
    ]) . "\n\n";
}

if (ob_get_level()) ob_flush();
flush();
?>