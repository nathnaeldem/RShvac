<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Content-Type: application/json");

// Handle preflight OPTIONS request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    
    // Validate
    if (empty($data['name']) || empty($data['email']) || empty($data['phone'])) {
        echo json_encode(['success' => false, 'message' => 'Missing required fields']);
        http_response_code(400);
        exit;
    }
    
    // Save to a JSON file as a mock database
    $file = __DIR__ . '/quotes.json';
    $current = file_exists($file) ? json_decode(file_get_contents($file), true) : [];
    $data['date'] = date('Y-m-d H:i:s');
    $current[] = $data;
    file_put_contents($file, json_encode($current, JSON_PRETTY_PRINT));
    
    // In a real application, you might send an email here using mail() or PHPMailer
    
    echo json_encode(['success' => true, 'message' => 'Quote request received successfully']);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    http_response_code(405);
}
?>
