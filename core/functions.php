<?php
require_once 'db.php';

// Function to handle Text/Paste creation
function createPaste($pdo, $unique_id, $content) {
    $stmt = $pdo->prepare("INSERT INTO pastes (unique_id, content) VALUES (?, ?)");
    return $stmt->execute([$unique_id, $content]);
}

// Function to handle URL Shortening
function createShortUrl($pdo, $unique_id, $original_url) {
    $stmt = $pdo->prepare("INSERT INTO short_urls (unique_id, original_url) VALUES (?, ?)");
    return $stmt->execute([$unique_id, $original_url]);
}

// Function to handle File Upload Metadata
function registerFile($pdo, $unique_id, $name, $path, $size, $type) {
    $stmt = $pdo->prepare("INSERT INTO files (unique_id, file_name, file_path, file_size, file_type) VALUES (?, ?, ?, ?, ?)");
    return $stmt->execute([$unique_id, $name, $path, $size, $type]);
}