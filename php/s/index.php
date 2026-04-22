<?php

$id = $_GET['id'] ?? '';
$id = preg_replace('/[^a-zA-Z0-9]/', '', $id);

$file = __DIR__ . '/../DB/s-url/' . $id . '.txt';

if (file_exists($file)) {

    $data = json_decode(file_get_contents($file), true);

    if (isset($data['original_url'])) {
        header("Location: " . $data['original_url'], true, 302);
        exit;
    }
}

http_response_code(404);
echo "Shortened URL not found.";
