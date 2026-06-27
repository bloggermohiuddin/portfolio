# MD Mohiuddin

Personal portfolio website.

Hey, I'm Mohiuddin — a web developer from Shibchar, Madaripur, Bangladesh. Built with **HTML, CSS, JavaScript**, and **PHP**. No frameworks.

🔗 **Live:** [mohiuddin.mojumderit.com](https://mohiuddin.mojumderit.com)

## Quick Start

```bash
# Install dependencies
npm install

# Build Tailwind CSS (run after HTML changes)
npm run build:css

# Start dev server
php -S localhost:8000
```

## File Structure

```
portfolio/
├── index.php            # Main page
├── send_telegram.php    # Contact form → Telegram
├── config.php           # Credentials (gitignored)
├── config.php.example   # Config template
├── script.js            # Scripts
├── styles.css           # Custom styles
├── tailwind.css         # Built CSS (generated)
├── src.css              # Tailwind source
├── tailwind.config.js   # Tailwind config
├── package.json         # npm scripts
├── assets/
│   ├── images/          # Photos & screenshots
│   └── files/           # Resume PDF
├── .htaccess            # Apache config
└── README.md
```

## Contact Form (Telegram)

1. Create a bot via [@BotFather](https://t.me/BotFather)
2. Copy the bot token
3. Message your bot, then visit `https://api.telegram.org/bot<TOKEN>/getUpdates` to get your chat ID
4. Copy `config.php.example` to `config.php` and fill in your values

```php
define('TELEGRAM_BOT_TOKEN', 'your_token');
define('TELEGRAM_CHAT_ID', 'your_chat_id');
```

## License

MIT
