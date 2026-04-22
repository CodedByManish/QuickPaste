<?php

if (!isset($_GET['id'])) {
    http_response_code(400);
    echo "Invalid request";
    exit;
}

$id = preg_replace('/[^a-zA-Z0-9]/', '', $_GET['id']);

// FIXED PATH
$path = realpath(__DIR__ . '/../../DB/s-url/') . "/$id.txt";

if ($path && file_exists($path)) {

    $data = json_decode(file_get_contents($path), true);

    if (!empty($data['original_url'])) {
        header("Location: " . $data['original_url'], true, 301);
        exit;
    }
}

http_response_code(404);
echo "Shortened URL not found.";
