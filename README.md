# 📝 BCAPaste

A lightweight and powerful web app built using **HTML**, **Tailwind CSS**, **JavaScript**, and **PHP**. BCAPaste enables users to:

* ✍️ Paste and share formatted text
* 📤 Upload files (max 100MB)
* 🔗 Shorten URLs with custom expiry settings

---

## 📁 Folder Structure

```bash
BCAPaste/
├── index.html
├── style.css
├── script.js
├── php/
│   ├── save_paste.php
│   ├── shorten_url.php
│   ├── upload.php
│   ├── s/
│   │   ├── .htaccess
│   │   └── index.php
├── image/
```

---

## ⚙️ Requirements

* 🆓 Free PHP Hosting (e.g., [InfinityFree](https://www.infinityfree.net))
* 🐘 PHP 7.0+

---

## 🧩 Key Features

* 🖋️ **Rich Text Editor**: Bold, Italic, Underline formatting
* 📂 **File Uploads**: Upload files up to 100MB
* 🔗 **URL Shortener**: Short links with expiry settings
* ⏳ **Expiry Options**:

  * Never
  * 1 Day
  * 1 Week
  * 1 Month

---

## 🚀 Setup Instructions

1. **Upload all files** to your hosting root directory.
2. Ensure the following folders are **writable** (set permissions to `0777` if necessary):

   ```bash
   /pastes/
   /uploads/
   php/shorten_url.php
   ```
3. Update the base URL in the following PHP files:

   ```php
   // Example in save_paste.php
   $baseUrl = 'https://niggapaste.kesug.com';
   ```
4. Launch `index.html` in your browser and test the app.

---

## 🔒 Security Notes

* ✅ All inputs are sanitized to prevent **XSS** attacks
* 🔐 Unique paste IDs are generated using PHP's `random_bytes()` for enhanced security

---

## 🔗 Example Links

* 📄 Paste: [`https://niggapaste.kesug.com/textid`](https://niggapaste.kesug.com/textid)
* 📁 File: [`https://niggapaste.kesug.com/filename`](https://niggapaste.kesug.com/filename)
* 🔗 Short URL: [`https://niggapaste.kesug.com/shortlink`](https://niggapaste.kesug.com/shortlink)

---

## 📜 License & Usage

> This project is **public for viewing only**.
>
> * ❌ Do not rehost, redistribute, or use this project commercially without explicit permission.
> * ✅ Allowed for personal and educational exploration.
> * 🔒 Only authorized contributors may modify the codebase.

---

Built  for the BCA-Nigga-Team.
