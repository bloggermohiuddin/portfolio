# MD Mohiuddin — Portfolio

Personal developer portfolio. Dark mode only, no frameworks, no BS.

🔗 **Live:** [mohiuddin.mojumderit.com](https://mohiuddin.mojumderit.com)

## What's Inside

- **Hero** — gradient name, typing effect, floating tech icons, scroll indicator
- **About** — bento grid layout with photo, bio, stats, currently learning, and CTA
- **Tech Stack** — categorized cards (Frontend, Backend, Tools) with hover glow
- **Projects** — DentDock SaaS, Education Management System, Bondhon Sonchoy Prokolpo
- **Services** — 6 cards with specific descriptions
- **Contact** — form that sends messages to Telegram
- **404 page** — glitch effect, personality, console easter egg
- **Custom cursor** — dot + ring with hover/click effects (desktop only)
- **Preloader** — branded "M" logo with progress bar
- **Noise overlay** — subtle grain texture for depth
- **Lazy load blur-up** — placeholder blur → sharp image on load

## Quick Start

```bash
# Install dependencies
npm install

# Build Tailwind CSS (run after HTML/CSS changes)
npm run build:css

# Start dev server
php -S localhost:8000
```

## File Structure

```
portfolio/
├── index.php              # Main page
├── 404.php                # Custom 404 page
├── send_telegram.php      # Contact form → Telegram
├── config.php             # Credentials (gitignored)
├── config.php.example     # Config template
├── script.js              # All JavaScript
├── styles.css             # Custom CSS (cursor, animations, bento grid, blur-up)
├── tailwind.css           # Built Tailwind CSS (generated)
├── src.css                # Tailwind source
├── tailwind.config.js     # Tailwind config
├── package.json           # npm scripts
├── .htaccess              # Apache config (HTTPS, security headers, caching, 404)
├── sitemap.xml            # XML sitemap
├── robots.txt             # Robots config
├── assets/
│   ├── images/            # Logo, profile photo, project screenshots
│   └── files/             # Resume PDF
└── .gitignore             # Ignores config.php, node_modules/, package-lock.json
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

## Tech Stack

- **Frontend:** HTML5, CSS3, Tailwind CSS, JavaScript, Font Awesome
- **Backend:** PHP, MySQL
- **Tools:** Git, GitHub, VS Code, Postman, cPanel, Linux
- **Build:** npm + Tailwind CLI

## Key Decisions

- **No frameworks** — hand-coded HTML/CSS/JS for full control
- **Tailwind built locally** — 29KB vs ~300KB from CDN
- **Dark mode only** — removed light mode entirely
- **Telegram for contact** — no email spam, instant delivery
- **Noise overlay** — SVG-based, no image files needed
- **Blur-up lazy load** — CSS-only approach, no library

## License

MIT
