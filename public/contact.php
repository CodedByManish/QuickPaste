<?php 
$pageTitle = "Contact Us - QuickPaste";
$pageDescription = "Contact QuickPaste for support, feedback, or partnership inquiries. We're here to help you with fast and secure text sharing.";
$canonicalUrl = "https://quickpaste.in/contact";
$ogTitle = $pageTitle;
$ogDescription = $pageDescription;
$ogUrl = $canonicalUrl;
$twitterTitle = $pageTitle;
$twitterDesc = $pageDescription;
include('includes/header.php'); 
?>

<main class="container mx-auto px-4 py-8 flex-grow" itemscope itemtype="https://schema.org/ContactPage">

    <div class="glassmorphism bg-gray-800 rounded-lg shadow-lg p-6 mb-8">
        <h2 class="text-2xl font-semibold mb-6 text-gray-200 border-b border-gray-700 pb-3" itemprop="name">
            <i class="fas fa-envelope mr-2 text-blue-400"></i> Contact QuickPaste
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <section class="space-y-6 text-gray-300" aria-labelledby="contact-info">
                <p id="contact-info" class="mb-4">
                    QuickPaste is a privacy-first platform designed for developers, students, and professionals to share text, code, and notes securely and efficiently. Whether you have a question, feedback, or want to discuss a potential partnership, we’re here to help!
                </p>
                <div class="space-y-4 mt-8">
                    <div class="flex items-start">
                        <div class="text-blue-400 text-xl mt-1 mr-4">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-white">Email</h3>
                            <p class="text-gray-400">
                                <a href="mailto:support@quickpaste.in" class="hover:text-blue-400 transition-colors" itemprop="email">support@quickpaste.in</a>
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="text-blue-400 text-xl mt-1 mr-4">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-white">Website</h3>
                            <p class="text-gray-400">
                                <a href="https://quickpaste.in" class="hover:text-blue-400 transition-colors" itemprop="url">https://quickpaste.in</a>
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="text-blue-400 text-xl mt-1 mr-4">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-white">Support Hours</h3>
                            <p class="text-gray-400">Monday - Friday: 9AM - 6PM IST<br>Saturday - Sunday: Email Support Only</p>
                        </div>
                    </div>
                </div>
                <div class="pt-6 mt-6 border-t border-gray-700">
                    <h3 class="font-semibold text-white mb-4">Our Commitment</h3>
                    <p class="text-gray-400">
                        We value speed, security, and user privacy. QuickPaste is committed to delivering a distraction-free experience—no tracking, no intrusive ads, and no sign-ups needed. Reach out to us anytime; we’d love to hear from you!
                    </p>
                </div>
                <div class="pt-6 mt-6 border-t border-gray-700">
                    <h3 class="font-semibold text-white mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="https://github.com/quickpaste" class="text-gray-400 hover:text-blue-400 transition-colors text-2xl" aria-label="GitHub" rel="noopener" target="_blank">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://twitter.com/quickpaste" class="text-gray-400 hover:text-blue-400 transition-colors text-2xl" aria-label="Twitter" rel="noopener" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://linkedin.com/company/quickpaste" class="text-gray-400 hover:text-blue-400 transition-colors text-2xl" aria-label="LinkedIn" rel="noopener" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </section>
            <section class="bg-gray-700 p-6 rounded-lg" aria-labelledby="contact-form">
                <h3 class="text-xl font-semibold mb-4 text-white" id="contact-form">Send Us a Message</h3>
                <form class="space-y-4" method="post" action="/send-message.php" autocomplete="on">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-300 mb-1">Your Name</label>
                        <input type="text" id="name" name="name" required maxlength="50" class="w-full p-3 bg-gray-800 border border-gray-600 rounded-lg text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all" placeholder="Your Name" autocomplete="name">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-300 mb-1">Email Address</label>
                        <input type="email" id="email" name="email" required maxlength="100" class="w-full p-3 bg-gray-800 border border-gray-600 rounded-lg text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all" placeholder="you@example.com" autocomplete="email">
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-300 mb-1">Subject</label>
                        <input type="text" id="subject" name="subject" required maxlength="100" class="w-full p-3 bg-gray-800 border border-gray-600 rounded-lg text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all" placeholder="How can we help?" autocomplete="off">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-300 mb-1">Message</label>
                        <textarea id="message" name="message" rows="5" required maxlength="1000" class="w-full p-3 bg-gray-800 border border-gray-600 rounded-lg text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all" placeholder="Your message here..."></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-md transition-colors relative overflow-hidden pulse-btn" aria-label="Send Message">
                        <span class="relative z-10 flex items-center justify-center">
                            <i class="fas fa-paper-plane mr-2"></i>
                            Send Message
                        </span>
                    </button>
                </form>
            </section>
        </div>
        <div class="text-center mt-8">
            <p class="text-gray-400">We value your feedback and will get back to you as soon as possible.</p>
        </div>
    </div>

<!-- FAQ Section with improved glassmorphism, toggles, and enhanced content -->
<div class="mt-10">
  <button onclick="toggleFAQ()" class="inline-flex items-center px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-md transition">
    <i class="fas fa-question-circle mr-2"></i> View FAQs
  </button>
</div>

<section class="mt-6 hidden transition-all duration-300 ease-in-out glassmorphism bg-gray-800 rounded-lg shadow-lg p-6 mb-8" id="faqSection" aria-labelledby="faq">
  <h3 class="text-xl font-semibold mb-4 text-white" id="faq">Frequently Asked Questions</h3>
  <div itemscope itemtype="https://schema.org/FAQPage" class="space-y-4">

    <!-- FAQ Item 1 -->
    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="border-b border-gray-700 pb-4">
      <button onclick="toggleAnswer(this)" class="w-full text-left flex justify-between items-center text-gray-200 font-semibold focus:outline-none">
        <span itemprop="name">What is QuickPaste and who is it for?</span>
        <i class="fas fa-chevron-down"></i>
      </button>
      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="hidden mt-2 text-gray-400" itemprop="text">
        <p>QuickPaste is a secure, privacy-first platform designed for developers, students, and professionals to share formatted text, code snippets, and files effortlessly. Established in 2025, it prioritizes speed, simplicity, and data security for all users.</p>
      </div>
    </div>

    <!-- FAQ Item 2 -->
    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="border-b border-gray-700 pb-4">
      <button onclick="toggleAnswer(this)" class="w-full text-left flex justify-between items-center text-gray-200 font-semibold focus:outline-none">
        <span itemprop="name">Is QuickPaste free to use?</span>
        <i class="fas fa-chevron-down"></i>
      </button>
      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="hidden mt-2 text-gray-400" itemprop="text">
        <p>Yes! QuickPaste is completely free for everyone. No sign-ups, no tracking, just easy and secure sharing.</p>
      </div>
    </div>

    <!-- FAQ Item 3 -->
    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="border-b border-gray-700 pb-4">
      <button onclick="toggleAnswer(this)" class="w-full text-left flex justify-between items-center text-gray-200 font-semibold focus:outline-none">
        <span itemprop="name">How does QuickPaste protect my privacy?</span>
        <i class="fas fa-chevron-down"></i>
      </button>
      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="hidden mt-2 text-gray-400" itemprop="text">
        <p>QuickPaste never tracks users or stores personal data. Your pastes and files are shared securely, with optional expiration and password protection for added privacy.</p>
      </div>
    </div>

    <!-- FAQ Item 4 -->
    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="border-b border-gray-700 pb-4">
      <button onclick="toggleAnswer(this)" class="w-full text-left flex justify-between items-center text-gray-200 font-semibold focus:outline-none">
        <span itemprop="name">What are some of the key features?</span>
        <i class="fas fa-chevron-down"></i>
      </button>
      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="hidden mt-2 text-gray-400" itemprop="text">
        <ul class="list-disc list-inside space-y-1">
          <li>Syntax highlighting for multiple programming languages</li>
          <li>Secure file sharing up to 100MB</li>
          <li>Short, shareable links</li>
          <li>Optional expiry and password protection</li>
          <li>No registration or intrusive ads</li>
        </ul>
      </div>
    </div>

    <!-- FAQ Item 5 -->
    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="border-b border-gray-700 pb-4">
      <button onclick="toggleAnswer(this)" class="w-full text-left flex justify-between items-center text-gray-200 font-semibold focus:outline-none">
        <span itemprop="name">How can I get support or share feedback?</span>
        <i class="fas fa-chevron-down"></i>
      </button>
      <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="hidden mt-2 text-gray-400" itemprop="text">
        <p>You can use the contact form above or directly email us at <a href="mailto:support@quickpaste.in" class="text-blue-400">support@quickpaste.in</a>. We aim to respond within 24 hours on weekdays.</p>
      </div>
    </div>

  </div>
    <div class="mt-12 text-center">
        <a href="index.php" class="inline-flex items-center px-5 py-2.5 border border-blue-400 text-blue-400 hover:bg-blue-500 hover:text-white transition-colors duration-300 rounded-md">
            <i class="fas fa-arrow-left mr-2"></i> Back to Home
        </a>
    </div>
</section>



<script>
  function toggleFAQ() {
    const faqSection = document.getElementById('faqSection');
    faqSection.classList.toggle('hidden');
    if (!faqSection.classList.contains('hidden')) {
      faqSection.scrollIntoView({ behavior: 'smooth' });
    }
  }

  function toggleAnswer(button) {
    const answer = button.nextElementSibling;
    answer.classList.toggle('hidden');
    const icon = button.querySelector('i');
    icon.classList.toggle('fa-chevron-down');
    icon.classList.toggle('fa-chevron-up');
  }
</script>

<script src="assets/js/visual-effects.js"></script>
<?php include('includes/footer.php'); ?>
