<?php
// Get the message from the form
$name = $_POST['name'] ?? '';
$OrderName = $_POST['OrderName'] ?? '';

// Get the Telegram chat ID and API token from environment variables
$chatID = getenv("6467892872");
$token = getenv("6522593595:AAEqosZe7xeSWhRgvY9cKF00dC4HZAFVzSA");

// Send the message to Telegram
$data = [
    'text' => $message,
    'chat_id' => $chatID
];

file_get_contents("https://api.telegram.org/bot{$token}/sendMessage?" . http_build_query($data));
?>
