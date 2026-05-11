<?php
require_once '../core/database.php';

// Sanitize the ID from the URL [cite: 334]
$id = preg_replace('/[^a-zA-Z0-9]/', '', $_GET['id'] ?? '');

// Fetch the entry from SQLite [cite: 334, 337]
$stmt = $db->prepare("SELECT * FROM entries WHERE id = ?");
$stmt->execute([$id]);
$item = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$item) {
    http_response_code(404);
    die("Paste or Link not found.");
}

// Handle URL Shortener Redirection
if ($item['type'] === 'url') {
    header("Location: " . $item['content'], true, 301);
    exit;
}

// SEO Variables for the header [cite: 235]
$pageTitle = "QuickPaste - " . ($item['type'] == 'text' ? "Note $id" : "File $id");
require_once 'includes/header.php'; 
?>

<main class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto bg-gray-800 rounded-lg shadow-lg overflow-hidden">
        
        <div class="bg-gray-700 px-4 py-2 flex justify-between items-center">
            <div class="flex gap-2">
                <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                <div class="w-3 h-3 bg-yellow-400 rounded-full"></div>
                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
            </div>
            <?php if ($item['type'] === 'file'): ?>
                <a href="/DB/uploads/<?= $item['file_path'] ?>" download class="text-blue-400 hover:text-white">
                    <i class="fas fa-download"></i> Download
                </a>
            <?php endif; ?>
        </div>

        <div class="p-6 bg-gray-900">
            <?php if ($item['type'] === 'text'): ?>
                <pre class="text-gray-200 whitespace-pre-wrap font-mono"><?= htmlspecialchars($item['content']) ?></pre>
            <?php elseif ($item['type'] === 'file'): ?>
                <?php 
                $ext = strtolower($item['file_ext']);
                $path = "/DB/uploads/" . $item['file_path'];
                
                if (in_array($ext, ['jpg','jpeg','png','gif','webp'])): ?>
                    <img src="<?= $path ?>" class="max-h-[600px] mx-auto rounded-lg shadow-lg">
                <?php elseif ($ext === 'pdf'): ?>
                    <iframe src="<?= $path ?>" class="w-full h-screen rounded"></iframe>
                <?php else: ?>
                    <div class="text-center py-10">
                        <p class="text-gray-400">Preview not supported for .<?= $ext ?> files.</p>
                        <a href="<?= $path ?>" class="text-blue-400 underline">Download instead</a>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>