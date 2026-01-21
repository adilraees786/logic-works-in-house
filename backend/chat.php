<?php
// backend/chat.php

require_once 'config.php';
require_once 'knowledge-base.php';

// Check request method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    sendError('Invalid request method', 405);
}

// Rate limiting
if (!checkRateLimit()) {
    sendError('Too many requests. Please try again later.', 429);
}

// Get POST data
$input = json_decode(file_get_contents('php://input'), true);

if (!isset($input['message']) || empty(trim($input['message']))) {
    sendError('Message is required');
}

$userMessage = trim($input['message']);
$conversationHistory = $input['history'] ?? [];

// Initialize knowledge base
$kb = new KnowledgeBase();

// Search knowledge base
$searchResults = $kb->search($userMessage);
$context = $kb->buildContext($searchResults);

// Build system prompt
$systemPrompt = "You are " . CHATBOT_NAME . ", a helpful and friendly AI assistant for Logic Works, a leading digital solutions company.

Your role and guidelines:
- Answer questions about Logic Works services professionally, accurately, and conversatively
- Be warm, helpful, and concise in your responses
- If information isn't in the knowledge base, politely suggest contacting the team directly
- For pricing questions, always recommend getting a custom quote as prices vary by project
- Encourage users to start with a free consultation
- Keep responses under as relevant as possible and they must be related to Logic Works services
- Refrain from providing any information that is not related to Logic Works services

" . ($context ? "Use this verified information to answer accurately:\n\n$context" : "");

// Prepare messages for OpenAI
$messages = [
    ['role' => 'system', 'content' => $systemPrompt]
];

// Add conversation history (limit to last 6 messages for context)
$historyLimit = min(count($conversationHistory), 6);
for ($i = count($conversationHistory) - $historyLimit; $i < count($conversationHistory); $i++) {
    $messages[] = $conversationHistory[$i];
}

// Add current user message
$messages[] = ['role' => 'user', 'content' => $userMessage];

// Prepare OpenAI API request (non-streaming)
$requestData = [
    'model' => GPT_MODEL,
    'messages' => $messages,
    'max_tokens' => MAX_TOKENS,
    'temperature' => TEMPERATURE,
    'top_p' => 1,
    'frequency_penalty' => 0.3,
    'presence_penalty' => 0.3,
    'stream' => false
];

// Make API request
$ch = curl_init(OPENAI_API_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($requestData));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . OPENAI_API_KEY
]);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);
curl_close($ch);

// Handle errors
if ($curlError) {
    sendError('Connection error: ' . $curlError, 500);
}

if ($httpCode !== 200) {
    $errorData = json_decode($response, true);
    $errorMessage = $errorData['error']['message'] ?? 'Unknown error occurred';
    sendError('API error: ' . $errorMessage, $httpCode);
}

$responseData = json_decode($response, true);

if (!isset($responseData['choices'][0]['message']['content'])) {
    sendError('Invalid API response', 500);
}

$assistantMessage = $responseData['choices'][0]['message']['content'];

// Return response
echo json_encode([
    'success' => true,
    'message' => $assistantMessage,
    'timestamp' => time(),
    'usage' => $responseData['usage'] ?? null
]);
?>