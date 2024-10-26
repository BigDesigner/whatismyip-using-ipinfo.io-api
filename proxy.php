<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

require 'config.php';

// Get the token from the database
$query = "SELECT token FROM config WHERE id = 1";
$result = $pdo->query($query);

if ($result->rowCount() > 0) {
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $token = $row['token'];
} else {
    echo json_encode(["error" => "Token not found."]);
    exit;
}

// Get the user's IP address
$userIP = $_SERVER['REMOTE_ADDR'];
$url = "https://ipinfo.io/{$userIP}/json?token=" . $token;

// Make the API request and return the results
$response = file_get_contents($url);
if ($response === FALSE) {
    echo json_encode(["error" => "API request failed."]);
} else {
    echo $response;
}
?>
