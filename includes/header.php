<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'QuickPaste - Fast & Secure Text Sharing' ?></title>
    <meta name="description" content="<?= $pageDescription ?? 'Share text, files, or URLs quickly and securely.' ?>">
    <meta name="keywords" content="quick paste, text sharing, file upload, URL shortener, developer tool,paste code online, private text sharing">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?= $canonicalUrl ?? 'https://quickpaste.kesug.com/' ?>">
    
    <!-- Open Graph and Twitter (can also be made dynamic with PHP vars) -->
    <meta property="og:title" content="<?= $ogTitle ?? 'QuickPaste - Fast & Secure Text Sharing' ?>">
    <meta property="og:description" content="<?= $ogDescription ?? 'Share notes, files, or links instantly.' ?>">
    <meta property="og:image" content="assets/images/og-image.png">
    <meta property="og:url" content="<?= $ogUrl ?? 'https://quickpaste.in' ?>">
    <meta property="og:type" content="website">
    
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $twitterTitle ?? 'QuickPaste - Share Instantly' ?>">
    <meta name="twitter:description" content="<?= $twitterDesc ?? 'Fast and secure paste sharing with no login required.' ?>">

    <!-- Styles & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="assets/images/icon.png" type="image/png">

    <!-- JSON-LD -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "QuickPaste",
        "url": "https://quickpaste.kesug.com/"
    }
    </script>
</head>
<body class="bg-gray-900 transition-colors duration-300">
    <!-- Header -->
    <header class="bg-gray-800 shadow-md sticky top-0 z-10">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <img src="assets/images/logo.png" alt="QuickPaste" class="h-10 mr-2">
                <h1 class="text-2xl font-bold text-blue-400">Quick<span class="text-gray-300">Paste</span></h1>
            </div>
        </div>
    </header>

