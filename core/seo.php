<?php

function get_seo_metadata($pageType = 'website', $data = [])
{
    $siteName   = "QuickPaste";
    $baseUrl    = "https://quickpaste.kesug.com";
    $currentUrl = $baseUrl . $_SERVER['REQUEST_URI'];

    $defaults = [
        'title'       => "QuickPaste - Fast, Secure Text Sharing & File Hosting",
        'description' => "QuickPaste is a fast and secure Pastebin alternative for sharing code snippets, text, files up to 100MB, and shortened URLs instantly.",
        'image'       => "https://quickpaste.kesug.com/assets/images/og-main.png",
        'keywords'    => "QuickPaste, pastebin alternative, share code online, secure paste, file hosting, url shortener, developer tools, online code sharing",
        'author'      => "QuickPaste",
        'robots'      => "index, follow",
        'theme_color' => "#0f172a"
    ];

    $meta = array_merge($defaults, $data);

    $title       = htmlspecialchars($meta['title'], ENT_QUOTES, 'UTF-8');
    $description = htmlspecialchars($meta['description'], ENT_QUOTES, 'UTF-8');
    $keywords    = htmlspecialchars($meta['keywords'], ENT_QUOTES, 'UTF-8');
    $image       = htmlspecialchars($meta['image'], ENT_QUOTES, 'UTF-8');

    echo PHP_EOL;

    echo "<title>{$title}</title>" . PHP_EOL;

    echo "<meta charset='UTF-8'>" . PHP_EOL;
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>" . PHP_EOL;

    echo "<meta name='title' content='{$title}'>" . PHP_EOL;
    echo "<meta name='description' content='{$description}'>" . PHP_EOL;
    echo "<meta name='keywords' content='{$keywords}'>" . PHP_EOL;
    echo "<meta name='author' content='{$meta['author']}'>" . PHP_EOL;
    echo "<meta name='robots' content='{$meta['robots']}'>" . PHP_EOL;
    echo "<meta name='theme-color' content='{$meta['theme_color']}'>" . PHP_EOL;

    echo "<link rel='canonical' href='{$currentUrl}'>" . PHP_EOL;

    echo "<meta property='og:type' content='{$pageType}'>" . PHP_EOL;
    echo "<meta property='og:site_name' content='{$siteName}'>" . PHP_EOL;
    echo "<meta property='og:url' content='{$currentUrl}'>" . PHP_EOL;
    echo "<meta property='og:title' content='{$title}'>" . PHP_EOL;
    echo "<meta property='og:description' content='{$description}'>" . PHP_EOL;
    echo "<meta property='og:image' content='{$image}'>" . PHP_EOL;
    echo "<meta property='og:image:alt' content='{$title}'>" . PHP_EOL;
    echo "<meta property='og:locale' content='en_US'>" . PHP_EOL;

    echo "<meta name='twitter:card' content='summary_large_image'>" . PHP_EOL;
    echo "<meta name='twitter:url' content='{$currentUrl}'>" . PHP_EOL;
    echo "<meta name='twitter:title' content='{$title}'>" . PHP_EOL;
    echo "<meta name='twitter:description' content='{$description}'>" . PHP_EOL;
    echo "<meta name='twitter:image' content='{$image}'>" . PHP_EOL;

    echo "<meta name='apple-mobile-web-app-capable' content='yes'>" . PHP_EOL;
    echo "<meta name='apple-mobile-web-app-status-bar-style' content='black-translucent'>" . PHP_EOL;
    echo "<meta http-equiv='X-UA-Compatible' content='IE=edge'>" . PHP_EOL;

    $schema = [
        "@context" => "https://schema.org",
        "@type" => "WebApplication",
        "name" => $siteName,
        "url" => $baseUrl,
        "description" => $meta['description'],
        "applicationCategory" => "DeveloperApplication",
        "operatingSystem" => "All",
        "browserRequirements" => "Requires JavaScript",
        "image" => $meta['image'],
        "author" => [
            "@type" => "Organization",
            "name" => "QuickPaste"
        ],
        "offers" => [
            "@type" => "Offer",
            "price" => "0",
            "priceCurrency" => "USD"
        ]
    ];

    echo "<script type='application/ld+json'>"
        . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)
        . "</script>" . PHP_EOL;
}