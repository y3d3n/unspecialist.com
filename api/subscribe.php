<?php
require_once "../config.php";
// ---- 1. Honeypot (bot protection)
if (!empty($_POST['company'])) {
    http_response_code(403);
    exit(json_encode(['error' => 'Bot detected']));
}

// ---- 2. Get + normalize email
$email = trim($_POST['email'] ?? '');

if (!$email) {
    http_response_code(400);
    exit(json_encode(['error' => 'Email is required']));
}

// ---- 3. Email format validation
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    exit(json_encode(['error' => 'Invalid email format']));
}

// ---- 4. Domain & MX check
$domain = substr(strrchr($email, "@"), 1);

if (!$domain || !checkdnsrr($domain, 'MX')) {
    http_response_code(400);
    exit(json_encode(['error' => 'Invalid email domain']));
}

// ---- 5. Disposable email block
$disposableDomains = [
    'mailinator.com',
    'tempmail.com',
    '10minutemail.com',
    'guerrillamail.com',
    'yopmail.com',
    'trashmail.com',
    'fakeinbox.com'
];

if (in_array(strtolower($domain), $disposableDomains, true)) {
    http_response_code(400);
    exit(json_encode(['error' => 'Disposable emails are not allowed']));
}

// ---- 6. Beehiiv config
$api_key = getenv('BEEHIIV_API');
$publication_id = getenv('BEEHIIV_PUB_ID');
// exit($publication_id);
if (!$api_key || !$publication_id) {
    http_response_code(500);
    exit(json_encode(['error' => 'Server misconfiguration']));
}

$url = "https://api.beehiiv.com/v2/publications/$publication_id/subscriptions";

$data = [
    'email' => $email,
    'reactivate_existing' => true,
    'send_welcome_email' => true
];

// ---- 7. Send to beehiiv
$options = [
    'http' => [
        'header'  =>
            "Content-Type: application/json\r\n" .
            "Authorization: Bearer $api_key\r\n",
        'method'  => 'POST',
        'content' => json_encode($data),
        'timeout' => 10
    ]
];

$context = stream_context_create($options);
$result  = file_get_contents($url, false, $context);

if ($result === false) {
    http_response_code(502);
    exit(json_encode(['error' => 'Failed to subscribe']));
}

// ---- 8. Success
header('Content-Type: application/json');
echo $result;