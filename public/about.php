<?php 
// SEO meta tags for better ranking
$title = "About QuickPaste - Secure, Fast, and Private Code Sharing";
$description = "Learn about QuickPaste, a secure and privacy-focused platform for sharing code snippets, notes, and files. Discover our mission, features, and commitment to user privacy.";
?>
<?php include('includes/header.php'); ?>

<!-- SEO Meta Tags -->
<meta name="title" content="<?php echo htmlspecialchars($title); ?>">
<meta name="description" content="<?php echo htmlspecialchars($description); ?>">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://yourdomain.com/about.php">

<main class="container mx-auto px-4 py-8 flex-grow">
    <div class="glassmorphism bg-gray-800 rounded-lg shadow-lg p-6 mb-8">
        <h1 class="text-2xl font-semibold mb-6 border-b border-gray-700 pb-3 text-blue-400">
            <i class="fas fa-info-circle mr-2"></i> About QuickPaste
        </h1>

        <div class="space-y-6 text-gray-300">
            <p>
                <strong>QuickPaste</strong> is a secure, privacy-first platform designed for developers, students, and professionals to share code snippets, notes, and files efficiently. Our platform is built to ensure your data remains confidential, with no tracking or intrusive ads.
            </p>

            <p>
                Established in <strong>2025</strong>, QuickPaste was created to solve the need for a reliable, distraction-free tool for sharing formatted text and code. We prioritize speed, simplicity, and user privacy above all else.
            </p>

            <section>
                <h2 class="text-xl font-semibold mb-3 text-blue-400">Our Mission</h2>
                <p>
                    Our mission is to empower users to share information quickly and securely, without unnecessary barriers. We believe in transparency, accessibility, and giving users full control over their data.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-semibold mb-3 text-blue-400">Core Values</h2>
                <ul class="list-disc pl-5 space-y-2">
                    <li>Speed and efficiency in sharing content</li>
                    <li>Strong user privacy and data protection</li>
                    <li>Transparent and ethical practices</li>
                    <li>Accessible design for all users</li>
                </ul>
            </section>

            <section>
                <h2 class="text-xl font-semibold mt-8 mb-3 text-blue-400">Key Features</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="bg-gray-700 p-4 rounded-lg">
                        <div class="text-blue-400 text-2xl mb-2"><i class="fas fa-code"></i></div>
                        <h3 class="font-semibold mb-2">Syntax Highlighting</h3>
                        <p class="text-sm text-gray-400">Share code with automatic syntax highlighting for multiple programming languages, making it easy to read and collaborate.</p>
                    </div>
                    <div class="bg-gray-700 p-4 rounded-lg">
                        <div class="text-blue-400 text-2xl mb-2"><i class="fas fa-file-upload"></i></div>
                        <h3 class="font-semibold mb-2">Secure File Sharing</h3>
                        <p class="text-sm text-gray-400">Upload and share files up to 100MB with optional expiration and password protection for enhanced security.</p>
                    </div>
                    <div class="bg-gray-700 p-4 rounded-lg">
                        <div class="text-blue-400 text-2xl mb-2"><i class="fas fa-link"></i></div>
                        <h3 class="font-semibold mb-2">Short, Shareable Links</h3>
                        <p class="text-sm text-gray-400">Generate short URLs for your pastes and files, making sharing simple and efficient.</p>
                    </div>
                    <div class="bg-gray-700 p-4 rounded-lg">
                        <div class="text-blue-400 text-2xl mb-2"><i class="fas fa-lock"></i></div>
                        <h3 class="font-semibold mb-2">Privacy Protection</h3>
                        <p class="text-sm text-gray-400">No tracking cookies, no personal data collection. Your privacy is our top priority.</p>
                    </div>
                    <div class="bg-gray-700 p-4 rounded-lg">
                        <div class="text-blue-400 text-2xl mb-2"><i class="fas fa-rocket"></i></div>
                        <h3 class="font-semibold mb-2">No Registration Required</h3>
                        <p class="text-sm text-gray-400">Start sharing instantly—no sign-up or login needed. Focus on your content, not on forms.</p>
                    </div>
                    <div class="bg-gray-700 p-4 rounded-lg">
                        <div class="text-blue-400 text-2xl mb-2"><i class="fas fa-history"></i></div>
                        <h3 class="font-semibold mb-2">Automatic Expiry</h3>
                        <p class="text-sm text-gray-400">Set expiration times for your pastes and files to keep your data secure and temporary.</p>
                    </div>
                </div>
            </section>

            <section>
                <h2 class="text-xl font-semibold mt-8 mb-3 text-blue-400">Why Choose QuickPaste?</h2>
                <p>
                    QuickPaste is trusted by thousands for its simplicity, speed, and commitment to privacy. Whether you’re sharing code, notes, or files, our platform ensures your data is handled securely and efficiently.
                </p>
            </section>

            <div class="mt-8 text-center">
                <p class="italic text-gray-400">
                    “Simplicity is the ultimate sophistication.” — Leonardo da Vinci
                </p>
            </div>
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
