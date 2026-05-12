<?php 
require_once __DIR__ . '/../../core/seo.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <?php get_seo_metadata($pageType ?? 'website', $seoData ?? []); ?>

    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/quickpaste/public/assets/css/style.css">
    <link rel="icon" href="/quickpaste/public/assets/images/icon.png" type="image/png">
</head>
<body class="bg-gray-900 text-gray-100 flex flex-col min-h-screen">
    <header class="bg-gray-800 shadow-md sticky top-0 z-10 border-b border-gray-700">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <img src="/quickpaste/public/assets/images/logo.png" alt="QuickPaste" class="h-10 mr-2">

                <h1 class="text-2xl font-bold text-blue-400">
                    Quick<span class="text-gray-300">Paste</span>
                </h1>
            </div>
        </div>
    </header>
    <main class="flex-grow container mx-auto px-4 py-8">