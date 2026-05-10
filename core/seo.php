<?php
// Default SEO values
$siteName = "QuickPaste";
$baseUrl = "https://quickpaste.kesug.com/";

// Page-specific overrides or defaults
$pageTitle = $pageTitle ?? 'QuickPaste - Fast & Secure Text Sharing';
$pageDesc  = $pageDesc  ?? 'Share text, files, or URLs quickly and securely without registration.';
$canonical = $canonical ?? $baseUrl . basename($_SERVER['PHP_SELF']);
$ogImage   = $ogImage   ?? $baseUrl . "assets/images/og-image.png";


function render_seo_tags($title, $desc, $canonical, $ogImage, $siteName) {
    echo '' . PHP_EOL;
    echo '<title>' . htmlspecialchars($title) . '</title>' . PHP_EOL;
    echo '<meta name="description" content="' . htmlspecialchars($desc) . '">' . PHP_EOL;
    echo '<link rel="canonical" href="' . htmlspecialchars($canonical) . '">' . PHP_EOL;

    echo '' . PHP_EOL;
    echo '<meta property="og:type" content="website">' . PHP_EOL;
    echo '<meta property="og:url" content="' . htmlspecialchars($canonical) . '">' . PHP_EOL;
    echo '<meta property="og:title" content="' . htmlspecialchars($title) . '">' . PHP_EOL;
    echo '<meta property="og:description" content="' . htmlspecialchars($desc) . '">' . PHP_EOL;
    echo '<meta property="og:image" content="' . htmlspecialchars($ogImage) . '">' . PHP_EOL;

    echo '' . PHP_EOL;
    echo '<meta property="twitter:card" content="summary_large_image">' . PHP_EOL;
    echo '<meta property="twitter:url" content="' . htmlspecialchars($canonical) . '">' . PHP_EOL;
    echo '<meta property="twitter:title" content="' . htmlspecialchars($title) . '">' . PHP_EOL;
    echo '<meta property="twitter:description" content="' . htmlspecialchars($desc) . '">' . PHP_EOL;
    echo '<meta property="twitter:image" content="' . htmlspecialchars($ogImage) . '">' . PHP_EOL;
}
?>