// submission-logic.js
document.addEventListener('DOMContentLoaded', function () {
    const {
        editor,
        selectedFile,
        urlInput,
        expirySelect,
        activeTab,
        resetForm
    } = window.appState;

    // Result Elements
    const submitBtn = document.getElementById('submit-btn');
    const resultContainer = document.getElementById('result-container');
    const resultUrl = document.getElementById('result-url');
    const copyBtn = document.getElementById('copy-btn');
    const newPasteBtn = document.getElementById('new-paste-btn');
    const loadingOverlay = document.getElementById('loading-overlay');
    const successSound = document.getElementById('success-sound');

    // Submit Button Event
    submitBtn.addEventListener('click', handleSubmit);

    // Copy to Clipboard
    copyBtn.addEventListener('click', function () {
        resultUrl.select();
        document.execCommand('copy');
        successSound.play();
        const originalHTML = this.innerHTML;
        this.innerHTML = '<i class="fas fa-check"></i>';
        setTimeout(() => (this.innerHTML = originalHTML), 2000);
    });

    // New Paste
    newPasteBtn.addEventListener('click', () => {
        resetForm();
        resultContainer.classList.add('hidden');
    });

    // Main Submit Logic
    async function handleSubmit() {
        loadingOverlay.classList.remove('hidden');

        try {
            let response;
            const tab = activeTab();

            // Switch based on current tab
            switch (tab) {
                case 'text':
                    const content = editor.innerHTML.trim();
                    if (!content) {
                        alert('Please enter some text to paste.');
                        return;
                    }
                    response = await saveText(content);
                    break;

                case 'file':
                    const file = selectedFile();
                    if (!file) {
                        alert('Please select a file to upload.');
                        return;
                    }
                    response = await uploadFile(file);
                    break;

                case 'url':
                    const url = urlInput.value.trim();
                    if (!url || !isValidURL(url)) {
                        alert('Please enter a valid URL to shorten.');
                        return;
                    }
                    response = await shortenURL(url);
                    break;

                default:
                    throw new Error('Unknown tab selected.');
            }

            if (response?.success && response.url) {
                showResult(response.url);
            } else {
                throw new Error(response?.error || 'Unexpected error occurred.');
            }

        } catch (error) {
            alert(`Error: ${error.message}`);
            console.error('Submission error:', error);
        } finally {
            loadingOverlay.classList.add('hidden');
        }
    }

    // Display Result
    function showResult(url) {
        resultUrl.value = url;
        resultContainer.classList.remove('hidden');
        successSound.play();
        setTimeout(() => resultUrl.focus(), 100);
    }

    // Generate Unique ID for Pastes
    function generateRandomId() {
        return Math.random().toString(36).substring(2, 8);
    }

    // Save Text Paste
    async function saveText(content) {
        const formData = new FormData();
        formData.append('content', content);
        formData.append('id', generateRandomId());
        formData.append('expiry', expirySelect.value);

        const response = await fetch('php/save_paste.php', {
            method: 'POST',
            body: formData
        });

        return await parseJsonResponse(response);
    }

    // Upload File
    async function uploadFile(file) {
        const formData = new FormData();
        formData.append('file', file);
        formData.append('id', generateRandomId());
        formData.append('expiry', expirySelect.value);

        const response = await fetch('php/upload.php', {
            method: 'POST',
            body: formData
        });

        return await parseJsonResponse(response);
    }

    // Shorten URL
    async function shortenURL(url) {
        const formData = new FormData();
        formData.append('url', url);
        formData.append('id', generateRandomId());
        formData.append('expiry', expirySelect.value);

        const response = await fetch('php/shorten_url.php', {
            method: 'POST',
            body: formData
        });

        return await parseJsonResponse(response);
    }

    // Validate URL
    function isValidURL(string) {
        try {
            new URL(string);
            return true;
        } catch (_) {
            return false;
        }
    }

    // Safely Parse JSON Responses
    async function parseJsonResponse(response) {
        const text = await response.text();
        try {
            return JSON.parse(text);
        } catch (err) {
            console.error('Invalid JSON response:', text);
            return { success: false, error: 'Invalid server response' };
        }
    }
});
