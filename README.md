# MD Mohiuddin Portfolio

A modern personal portfolio website built with **HTML, Tailwind CSS, JavaScript, and PHP**. The project includes a smart contact form that sends messages directly to your **Facebook Page Inbox** using the **Messenger API**.

---

## ✨ Live Features

* Clean, responsive UI with Tailwind CSS
* No database required (static + PHP form handler)
* Facebook Messenger API contact form
* Easy configuration with a single `config.php`
* Optimized for shared hosting

---

## 📁 Project Structure

```
portfolio/
├── assets/
│   ├── css/
│   └── js/
├── config.php.example
├── index.php
└── README.md
```

---

## ⚙ Installation

### Step 1: Clone the Repository

```bash
git clone https://github.com/bloggermohiuddin/portfolio.git
```

### Step 2: Create `config.php`

```bash
cp config.php.example config.php
```

Open `config.php` and add:

```php
<?php
define('SITE_URL', (empty($_SERVER['HTTPS']) ? 'http' : 'https') . '://' . $_SERVER['HTTP_HOST']);
define('PAGE_ACCESS_TOKEN', 'YOUR_PAGE_ACCESS_TOKEN');
// After first user sends a message to your Facebook Page, collect sender PSID (recipient ID)
define('recipientId', 'FIRST_USER_PSID');
```

---

### Step 3: Upload to Server

Upload all files to your PHP hosting. And See Results

---

### Step 4: Test Contact Form

Send a test message – it will arrive in your Facebook Profile inbox.

---

## 🔐 Important Token Note

⚠ You must generate a **Permanent Page Access Token**. Temporary tokens expire and will cause message delivery failures.

Recommended method:

* Use Facebook System User token or long‑lived Page token.
* Never use short‑lived developer tokens in production.

---

## 🔐 How to Get Facebook Page Access Token

1. Go to Facebook Developers
2. Create App → Business Type
3. Add Messenger Product
4. Generate Page Access Token
5. Send a test message to your Page and collect the sender PSID (recipient ID) from Webhook / Inbox API logs
6. Paste into `config.php`

---

## 🤝 Contributing

* Fork the repository
* Create your branch
* Commit changes
* Open a Pull Request

---

## 📜 License

MIT License
