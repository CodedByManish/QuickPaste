<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'], $_POST['id'])) {

    $id = preg_replace('/[^a-zA-Z0-9]/', '', $_POST['id']);
    $uploadDir = __DIR__ . '/../DB/file/';
    $rootDir = realpath(__DIR__ . '/../') . '/';

    $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    $filename = "$id.$ext";

    $targetPath = $uploadDir . $filename;
    $rootPath = $rootDir . $filename;

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    if (file_exists($targetPath) || file_exists($rootPath)) {
        echo json_encode(['success' => false, 'error' => 'ID already exists']);
        exit;
    }

    if (move_uploaded_file($_FILES['file']['tmp_name'], $targetPath)) {

        copy($targetPath, $rootPath);

        echo json_encode([
            'success' => true,
            'url' => "https://quickpaste.kesug.com/$filename"
        ]);

    } else {
        echo json_encode(['success' => false, 'error' => 'Upload failed']);
    }

} else {
    echo json_encode(['success' => false, 'error' => 'Missing file or ID']);
}
