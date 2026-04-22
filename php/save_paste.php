<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['content'], $_POST['id'])) {
    $id = preg_replace('/[^a-zA-Z0-9]/', '', $_POST['id']); 
    $content = $_POST['content'];


    // Save in /DB/pastes/
    $dbDir = __DIR__ . '/../DB/pastes/';
    if (!is_dir($dbDir)) {
        mkdir($dbDir, 0777, true);
    }

    file_put_contents($dbDir . $id , $content);

    // Save in web root (htdocs/)
    $webRootFile = realpath(__DIR__ . '/../') . "/$id";
    if (file_exists($webRootFile)) {
        echo json_encode(['success' => false, 'error' => 'ID already exists']);
        exit;
    }
 
    // Escape HTML special chars so content shows as-is inside <code>
    $escapedContent = htmlspecialchars($content, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');

    $htmlTemplate = <<<HTML
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paste $id - QuickPaste</title>
    
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="/assets/images/icon.png">
    
    <style>
    body { background-color: #111827; }
    pre { white-space: pre-wrap; word-wrap: break-word; }
    </style>
    
    </head>
    <body class="text-gray-200">
    
    <header class="bg-gray-800 shadow-md sticky top-0 z-10">
        <div class="container mx-auto px-4 py-3 flex items-center">
            <img src="/assets/images/logo.png" class="h-10 mr-2">
            <h1 class="text-2xl font-bold text-blue-400">Quick<span class="text-gray-300">Paste</span></h1>
        </div>
    </header>
    
    <main class="container mx-auto px-4 py-8">
    
    <h2 class="text-xl text-blue-400 mb-4 text-center">Paste ID: $id</h2>
    
    <div class="max-w-4xl mx-auto bg-gray-800 rounded-lg shadow-lg overflow-hidden">
    
        <div class="bg-gray-700 px-4 py-2 flex gap-2">
            <div class="w-3 h-3 bg-red-500 rounded-full"></div>
            <div class="w-3 h-3 bg-yellow-400 rounded-full"></div>
            <div class="w-3 h-3 bg-green-500 rounded-full"></div>
        </div>
    
        <div class="p-5 bg-gray-900 overflow-x-auto">
            <pre>$content</pre>
        </div>
    
    </div>
    
    </main>
    
    <footer class="text-center text-gray-500 text-sm py-6">
        © 2026 QuickPaste
    </footer>
    
    </body>
    </html>
    HTML;

    file_put_contents($webRootFile, $htmlTemplate);


    echo json_encode([
        'success' => true,
        'url' => "quickpaste.kesug.com/$id"
    ]);
} else {
    echo json_encode(['success' => false, 'error' => 'Missing content or ID']);
}
?>
