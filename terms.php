<?php 
$pageTitle = "Terms of Service - QuickPaste";
$pageDescription = "Read the Terms of Service for QuickPaste, the fast and secure platform for sharing text, files, and URLs. Learn about user responsibilities, content policies, and more.";
$canonicalUrl = "https://quickpaste.in/terms";
include('includes/header.php'); 
?>

<main class="container mx-auto px-4 py-8 flex-grow">
    <article class="glassmorphism bg-gray-800 rounded-lg shadow-lg p-6 mb-8" itemscope itemtype="https://schema.org/Article">
        <header>
            <h1 class="text-2xl font-semibold mb-6 text-gray-200 border-b border-gray-700 pb-3" itemprop="headline">
                <i class="fas fa-gavel mr-2 text-blue-400"></i> Terms of Service
            </h1>
            <p class="italic text-gray-400" itemprop="dateModified">Last updated: June 1, 2024</p>
        </header>
        <section class="space-y-6 text-gray-300" itemprop="articleBody">
            <p>
                Welcome to QuickPaste (<a href="https://quickpaste.in" class="text-blue-400 hover:underline">https://quickpaste.in</a>), your trusted platform for fast, secure, and private sharing of text, code snippets, files, and URLs. By using our service, you agree to the following Terms of Service. Please review them carefully.
            </p>

            <section>
                <h2 class="text-xl font-semibold mb-3 text-blue-400">1. Acceptance of Terms</h2>
                <p>
                    By accessing or using QuickPaste, you agree to comply with these Terms of Service and all applicable laws. If you do not agree, please do not use our platform.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-semibold mb-3 text-blue-400">2. Service Overview</h2>
                <p>
                    QuickPaste enables users to share text, code, files, and URLs instantly and securely. No registration is required, and your privacy is our priority. We do not sell or misuse your data.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-semibold mb-3 text-blue-400">3. User Responsibilities</h2>
                <ul class="list-disc pl-5 space-y-2">
                    <li>Do not upload or share illegal, harmful, or offensive content.</li>
                    <li>Respect intellectual property rights; only share content you own or have permission to distribute.</li>
                    <li>Do not use QuickPaste for spam, phishing, or distributing malware.</li>
                    <li>Do not attempt to disrupt or abuse the service or its users.</li>
                </ul>
            </section>

            <section>
                <h2 class="text-xl font-semibold mb-3 text-blue-400">4. Content Moderation & Removal</h2>
                <p>
                    We reserve the right to remove any content that violates these terms or is reported as inappropriate. Repeated violations may result in permanent bans.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-semibold mb-3 text-blue-400">5. Privacy & Data Security</h2>
                <p>
                    QuickPaste values your privacy. We do not require personal information for basic use. Uploaded content is stored securely and is not indexed by search engines. For more details, see our <a href="/privacy" class="text-blue-400 hover:underline">Privacy Policy</a>.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-semibold mb-3 text-blue-400">6. Copyright & Intellectual Property</h2>
                <p>
                    All content uploaded remains the property of its respective owners. By sharing, you grant QuickPaste a non-exclusive license to display and distribute your content as part of the service.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-semibold mb-3 text-blue-400">7. Limitation of Liability</h2>
                <p>
                    QuickPaste is provided "as is" without warranties. We are not liable for any damages resulting from the use or inability to use our service.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-semibold mb-3 text-blue-400">8. Changes to Terms</h2>
                <p>
                    We may update these Terms of Service at any time. Significant changes will be announced on our website. Continued use of QuickPaste after changes means you accept the new terms.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-semibold mb-3 text-blue-400">9. Contact Us</h2>
                <p>
                    For questions or concerns about these Terms of Service, please email us at <a href="mailto:support@quickpaste.in" class="text-blue-400 hover:underline">support@quickpaste.in</a>.
                </p>
            </section>
        </section>
    </article>
    <div class="mt-12 text-center">
        <a href="index.php" class="inline-flex items-center px-5 py-2.5 border border-blue-400 text-blue-400 hover:bg-blue-500 hover:text-white transition-colors duration-300 rounded-md">
            <i class="fas fa-arrow-left mr-2"></i> Back to Home
        </a>
    </div>
</main>

<script src="assets/js/visual-effects.js"></script>

<?php include('includes/footer.php'); ?>
