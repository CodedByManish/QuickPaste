    </main>

    <!-- Footer -->
    <footer class="glassmorphism text-gray-400 shadow-inner py-8 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <div class="flex items-center mb-4 gap-4">
                        <img src="assets/images/logo.png" alt="QuickPaste Logo" class="h-11 w-11">
                        <h1 class="text-2xl font-bold">
                            <span class="text-blue-400">Quick</span><span class="text-gray-300">Paste</span>
                        </h1>
                    </div>
                    <p class="text-sm">
                        A fast and minimalist way to share code snippets. <br>
                        Secure, lightweight, and built for developers by developers.
                    </p>
                </div>

                <div>
                    <h3 class="text-white text-sm font-semibold mb-4 text-blue-400">Quick Links</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="about.php" class="hover:text-blue-400">About</a></li>
                        <li><a href="privacy.php" class="hover:text-blue-400">Privacy Policy</a></li>
                        <li><a href="terms.php" class="hover:text-blue-400">Terms of Service</a></li>
                        <li><a href="contact.php" class="hover:text-blue-400">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-white text-sm font-semibold mb-4 text-blue-400">Connect</h3>
                    <div class="flex space-x-6 text-lg">
                        <a href="https://linkedin.com/company/example" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="https://x.com/example" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="mailto:contact@example.com"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            <div class="mt-10 border-t border-gray-700 pt-6 text-center text-xs text-gray-500">
                &copy; <?= date('Y') ?> QuickPaste. All rights reserved.
            </div>
        </div>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>
