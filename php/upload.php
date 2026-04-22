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
    $viewerPath = $rootDir . $id;

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    if (file_exists($targetPath) || file_exists($rootPath) || file_exists($viewerPath)) {
        echo json_encode(['success' => false, 'error' => 'ID already exists']);
        exit;
    }

    if (move_uploaded_file($_FILES['file']['tmp_name'], $targetPath)) {

        copy($targetPath, $rootPath);

        $lowerExt = strtolower($ext);

        $htmlTemplate = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>File $id - QuickPaste</title>

<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
body {
    background-color: #111827;
    background-image: url('/assets/images/bg-pattern.png');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}
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

<h2 class="text-xl text-blue-400 mb-4 text-center">File ID: $id</h2>

<div class="max-w-4xl mx-auto bg-gray-800 rounded-lg shadow-lg overflow-hidden relative">

    <div class="bg-gray-700 px-4 py-2 flex justify-between items-center">
        <div class="flex gap-2">
            <div class="w-3 h-3 bg-red-500 rounded-full"></div>
            <div class="w-3 h-3 bg-yellow-400 rounded-full"></div>
            <div class="w-3 h-3 bg-green-500 rounded-full"></div>
        </div>

        <a href="/$filename" download class="text-white hover:text-blue-400">
            <i class="fas fa-download"></i>
        </a>
    </div>

    <div class="p-6 flex justify-center items-center min-h-[300px]">

HTML;

        // ===== PREVIEW LOGIC =====
        if (in_array($lowerExt, ['jpg','jpeg','png','gif','webp'])) {

            $htmlTemplate .= "<img src='/$filename' class='max-h-[500px] rounded-lg shadow-lg'>";

        } elseif (in_array($lowerExt, ['txt','html','css','js','json','md'])) {

            $fileContent = htmlspecialchars(file_get_contents($targetPath));
            $htmlTemplate .= "<pre class='bg-gray-900 p-4 rounded text-sm max-h-[500px] overflow-auto w-full'>$fileContent</pre>";

        } elseif ($lowerExt === 'pdf') {

            $htmlTemplate .= "<iframe src='/$filename' class='w-full h-[500px] rounded'></iframe>";

        } elseif (in_array($lowerExt, ['mp4','webm'])) {

            $htmlTemplate .= "<video controls class='max-h-[500px] rounded'><source src='/$filename'></video>";

        } elseif (in_array($lowerExt, ['mp3','wav'])) {

            $htmlTemplate .= "<audio controls class='w-full'><source src='/$filename'></audio>";

        } else {

            $htmlTemplate .= "
            <div class='text-center'>
                <p class='text-lg text-gray-300 mb-2'>Preview not supported</p>
                <p class='text-sm text-gray-400'>$filename</p>
                <p class='text-xs text-gray-500 mt-2'>Use download button above</p>
            </div>";
        }

        // ===== END TEMPLATE =====
        $htmlTemplate .= <<<HTML

    </div>

</div>

</main>

<footer class="text-center text-gray-500 text-sm py-6">
    © 2026 QuickPaste
</footer>

</body>
</html>
HTML;

        file_put_contents($viewerPath, $htmlTemplate);

        echo json_encode([
            'success' => true,
            'url' => "https://quickpaste.kesug.com/$id"
        ]);

    } else {
        echo json_encode(['success' => false, 'error' => 'Upload failed']);
    }

} else {
    echo json_encode(['success' => false, 'error' => 'Missing file or ID']);
}
?>
