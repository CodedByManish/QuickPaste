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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>BCANiggaPaste</title>
    <link rel="icon" href="images/logo.png" type="image/png" sizes="20*20">
    <style>
        body {
        background-color: #0a0a0a;
        color: #0ff;
        font-family: 'Consolas', monospace;
        padding: 20px;
        margin: 0;
        }

       .logo-container {
        display: flex;
        flex-direction: row;
        gap: 10px;
        margin-bottom: 20px;
        }

        .logo-container img {
        width: 64px;
        height: 64px;
        filter: drop-shadow(0 0 5px #0ff);
        }

        .brand-title {
        color: #0ff;
        background: linear-gradient(90deg, #ff0000, #0000ff, #00ff00);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-family: 'Fira Code', 'Courier New', Courier, monospace;
        font-size: 1.8rem;
        text-shadow: 0 0 2px #0ff;
        margin-top: 14px;
        margin-left:3px;
        display: flex;
        gap: 4px;
        }

        .editor-frame {
        max-width: 900px;
        margin: 30px auto;
        border-radius: 10px;
        box-shadow: 0 0 15px #0ff;
        overflow: hidden;
        }

        .editor-header {
        background-color: #2d2d2d;
        padding: 10px;
        display: flex;
        gap: 8px;
        }

        .circle {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        }

        .red { background-color: #ff5f56; }
        .yellow { background-color: #ffbd2e; }
        .green { background-color: #27c93f; }

        .container {
        position: relative;
        background: #1e1e1e;
        border-top: none;
        padding: 20px;
        padding-right: 30px;
        color: #d4d4d4;
        white-space: nowrap;
        overflow-x: auto;
        }

        .container::before {
        content: "";
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background-color: rgba(30, 30, 30, 0.85); /* dark overlay for readability */
        z-index: 0;
        }

        pre {
        position: relative;
        z-index: 1;
        }
    </style>
    </head>
    <body>

    <div class="logo-container">
        <img src="../images/logo.png" alt="Logo" />
        <h1 class="brand-title">
            <span class="bca">BCA</span><span class="nigga">Nigga</span><span class="paste">Paste</span>
        </h1>
    </div>
    <h3 style="text-align:center; margin:0;  text-shadow: 0 0 4px #0ff; ">Paste ID: $id</h3>

    <div class="editor-frame">
        <div class="editor-header">
        <div class="circle red"></div>
        <div class="circle yellow"></div>
        <div class="circle green"></div>
        </div>

        <div class="container">
        <pre>$content</pre>
        </div>
    </div>
    </body>
    </html>
    HTML;

    file_put_contents($webRootFile, $htmlTemplate);


    echo json_encode([
        'success' => true,
        'url' => "niggapaste.kesug.com/$id"
    ]);
} else {
    echo json_encode(['success' => false, 'error' => 'Missing content or ID']);
}
?>
