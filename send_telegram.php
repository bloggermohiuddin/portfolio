<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Method not allowed']);
    exit;
}

require_once __DIR__ . '/config.php';

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

if (empty($name) || empty($email) || empty($message)) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'All fields are required']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Invalid email address']);
    exit;
}

$botToken = TELEGRAM_BOT_TOKEN;
$chatId = TELEGRAM_CHAT_ID;

if ($botToken === 'YOUR_BOT_TOKEN_HERE' || $chatId === 'YOUR_CHAT_ID_HERE') {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'Telegram bot not configured yet']);
    exit;
}

$text = "━━━━━━━━━━━━━━━━━━━━━━\n";
$text .= "📩  *NEW PORTFOLIO MESSAGE*\n";
$text .= "━━━━━━━━━━━━━━━━━━━━━━\n\n";
$text .= "👤  *Name*\n    {$name}\n\n";
$text .= "📧  *Email*\n    {$email}\n\n";
$text .= "💬  *Message*\n    {$message}\n\n";
$text .= "━━━━━━━━━━━━━━━━━━━━━━\n";
$text .= "🌐  mohiuddin.mojumderit.com";
$text .= " |  " . date('M d, Y — h:i A');

$payload = [
    'chat_id' => $chatId,
    'text' => $text,
    'parse_mode' => 'Markdown',
];

$ch = curl_init("https://api.telegram.org/bot{$botToken}/sendMessage");
curl_setopt_array($ch, [
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query($payload),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 10,
    CURLOPT_SSL_VERIFYPEER => true,
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode === 200) {
    echo json_encode(['ok' => true, 'message' => 'Message sent successfully']);
} else {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'Failed to send message']);
}
