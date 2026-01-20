<?php
// backend/config.php

header('Content-Type: application/json');

// CORS Headers
$allowedOrigins = explode(',', $_ENV['ALLOWED_ORIGINS'] ?? '*');
$origin = $_SERVER['HTTP_ORIGIN'] ?? '';

if (in_array($origin, $allowedOrigins) || $allowedOrigins[0] === '*') {
    header("Access-Control-Allow-Origin: $origin");
}
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');
header('Access-Control-Max-Age: 3600');

// Handle preflight requests
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Load environment variables from .env file
function loadEnv($path) {
    if (!file_exists($path)) {
        return;
    }
    
    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        // Skip comments
        if (strpos(trim($line), '#') === 0) {
            continue;
        }
        
        // Parse line
        if (strpos($line, '=') !== false) {
            list($name, $value) = explode('=', $line, 2);
            $name = trim($name);
            $value = trim($value);
            
            // Remove quotes if present
            if (preg_match('/^["\'](.*)["\']\s*$/', $value, $matches)) {
                $value = $matches[1];
            }
            
            if (!array_key_exists($name, $_ENV)) {
                $_ENV[$name] = $value;
                putenv("$name=$value");
            }
        }
    }
}

// Load .env file
loadEnv(__DIR__ . '/.env');

// Configuration constants
define('OPENAI_API_KEY', $_ENV['OPENAI_API_KEY'] ?? '');
define('OPENAI_API_URL', 'https://api.openai.com/v1/chat/completions');
define('GPT_MODEL', 'gpt-4o-mini');
define('CHATBOT_NAME', $_ENV['CHATBOT_NAME'] ?? 'AI Assistant');
define('MAX_COMPLETION_TOKENS', 1500);
define('MAX_TOKENS', 1500); 
define('TEMPERATURE', 0.7);
define('RATE_LIMIT_REQUESTS', $_ENV['RATE_LIMIT_REQUESTS'] ?? 20);
define('RATE_LIMIT_WINDOW', $_ENV['RATE_LIMIT_WINDOW'] ?? 60);

// Rate limiting (simple session-based)
function checkRateLimit() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    
    $currentTime = time();
    $timeWindow = RATE_LIMIT_WINDOW;
    $maxRequests = RATE_LIMIT_REQUESTS;
    
    if (!isset($_SESSION['rate_limit'])) {
        $_SESSION['rate_limit'] = [
            'count' => 1,
            'start_time' => $currentTime
        ];
        return true;
    }
    
    $timePassed = $currentTime - $_SESSION['rate_limit']['start_time'];
    
    if ($timePassed > $timeWindow) {
        $_SESSION['rate_limit'] = [
            'count' => 1,
            'start_time' => $currentTime
        ];
        return true;
    }
    
    if ($_SESSION['rate_limit']['count'] >= $maxRequests) {
        return false;
    }
    
    $_SESSION['rate_limit']['count']++;
    return true;
}

// Error handler
function sendError($message, $code = 400) {
    http_response_code($code);
    echo json_encode([
        'success' => false,
        'error' => $message
    ]);
    exit();
}

// Validation
if (empty(OPENAI_API_KEY)) {
    sendError('OpenAI API key not configured', 500);
}

// Check if cURL is available
if (!function_exists('curl_init')) {
    sendError('cURL extension is required', 500);
}
?>