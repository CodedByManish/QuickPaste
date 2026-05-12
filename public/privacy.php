<?php
// SEO meta tags and structured data
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Privacy Policy | YourAppName</title>
    <meta name="description" content="Read the Privacy Policy for YourAppName. Learn how we collect, use, and protect your data.">
    <meta name="keywords" content="privacy policy, YourAppName, data protection, user data, cookies">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://yourdomain.com/privacy.php">
    <meta name="robots" content="index, follow">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebPage",
      "name": "Privacy Policy",
      "url": "https://yourdomain.com/privacy.php",
      "description": "Privacy Policy for YourAppName. Learn how we collect, use, and protect your data.",
      "publisher": {
        "@type": "Organization",
        "name": "YourAppName",
        "url": "https://yourdomain.com"
      }
    }
    </script>
    <?php include('includes/header.php'); ?>
</head>
<body>
<main class="container mx-auto px-4 py-8 flex-grow">
    <div class="glassmorphism bg-gray-800 rounded-lg shadow-lg p-6 mb-8">
        <h1 class="text-2xl font-semibold mb-6 text-gray-200 border-b border-gray-700 pb-3">
            <i class="fas fa-shield-alt mr-2 text-blue-400"></i> Privacy Policy
        </h1>
        <div class="space-y-6 text-gray-300">
            <p class="italic text-gray-400">Last updated: June 1, 2024</p>
            <p>
                At <strong>YourAppName</strong>, your privacy is our top priority. This Privacy Policy explains how we collect, use, and protect your information when you use our website and services.
            </p>
            <section>
                <h2 class="text-xl font-semibold mb-3 text-blue-400">Information We Collect</h2>
                <ul class="list-disc pl-5 space-y-2">
                    <li><strong>User Content:</strong> Any text, code, or files you upload or share using our platform.</li>
                    <li><strong>Usage Data:</strong> Information about your interactions with our website, such as pages visited and features used.</li>
                    <li><strong>Device Information:</strong> Data about your device, browser, and IP address for security and analytics.</li>
                    <li><strong>Cookies:</strong> We use cookies to enhance your experience and analyze site traffic. You can manage cookie preferences in your browser settings.</li>
                </ul>
            </section>
            <section>
                <h2 class="text-xl font-semibold mb-3 text-blue-400">How We Use Your Information</h2>
                <ul class="list-disc pl-5 space-y-2">
                    <li>To provide and maintain our services</li>
                    <li>To personalize your experience</li>
                    <li>To analyze usage and improve our platform</li>
                    <li>To detect and prevent fraud or abuse</li>
                    <li>To communicate important updates</li>
                </ul>
            </section>
            <section>
                <h2 class="text-xl font-semibold mb-3 text-blue-400">Data Retention</h2>
                <p>
                    Content you share on <strong>YourAppName</strong> is stored based on the expiration settings you select. Expired content is permanently deleted. For content set to "never expire," we may remove it after long periods of inactivity to maintain system performance.
                </p>
            </section>
            <section>
                <h2 class="text-xl font-semibold mb-3 text-blue-400">Third-Party Disclosure</h2>
                <p>
                    We do not sell or share your personal information with third parties except:
                </p>
                <ul class="list-disc pl-5 space-y-2">
                    <li><strong>Service Providers:</strong> Trusted partners who help us operate our website (e.g., hosting, analytics).</li>
                    <li><strong>Legal Requirements:</strong> When required by law or to protect our rights and users.</li>
                </ul>
            </section>
            <section>
                <h2 class="text-xl font-semibold mb-3 text-blue-400">Security</h2>
                <p>
                    We use industry-standard security measures to protect your data. However, no method of transmission over the Internet is 100% secure.
                </p>
            </section>
            <section>
                <h2 class="text-xl font-semibold mb-3 text-blue-400">Your Rights</h2>
                <ul class="list-disc pl-5 space-y-2">
                    <li>Access your personal information</li>
                    <li>Request corrections or deletion</li>
                    <li>Restrict or object to processing</li>
                </ul>
                <p>Contact us to exercise these rights.</p>
            </section>
            <section>
                <h2 class="text-xl font-semibold mb-3 text-blue-400">Changes to This Privacy Policy</h2>
                <p>
                    We may update this Privacy Policy. Changes will be posted on this page with an updated date.
                </p>
            </section>
            <section>
                <h2 class="text-xl font-semibold mb-3 text-blue-400">Contact Us</h2>
                <p>
                    For questions or concerns, email us at <a href="mailto:privacy@yourdomain.com" class="text-blue-400 hover:underline">privacy@yourdomain.com</a>.
                </p>
            </section>
        </div>
    </div>
    <div class="mt-12 text-center">
        <a href="index.php" class="inline-flex items-center px-5 py-2.5 border border-blue-400 text-blue-400 hover:bg-blue-500 hover:text-white transition-colors duration-300 rounded-md">
            <i class="fas fa-arrow-left mr-2"></i> Back to Home
        </a>
    </div>
</main>
<script src="assets/js/visual-effects.js"></script>
<?php include('includes/footer.php'); ?>
</body>
</html>
