<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>404 — Page Not Found</title>

    <link rel="icon" type="image/webp" href="assets/images/logo.webp">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800;900&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="tailwind.css">
    <link rel="stylesheet" href="styles.css">

    <style>
        body { background: #0a0a0a; font-family: 'Inter', sans-serif; }

        .error-code {
            font-size: clamp(8rem, 20vw, 16rem);
            font-weight: 900;
            line-height: 1;
            background: linear-gradient(135deg, #3B82F6, #06B6D4, #8B5CF6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: errorPulse 3s ease-in-out infinite;
        }

        @keyframes errorPulse {
            0%, 100% { opacity: 1; filter: brightness(1); }
            50% { opacity: 0.85; filter: brightness(1.2); }
        }

        .glitch {
            position: relative;
        }

        .glitch::before,
        .glitch::after {
            content: '404';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #3B82F6, #06B6D4, #8B5CF6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .glitch::before {
            animation: glitch1 2.5s infinite;
            clip-path: polygon(0 0, 100% 0, 100% 45%, 0 45%);
        }

        .glitch::after {
            animation: glitch2 2.5s infinite;
            clip-path: polygon(0 55%, 100% 55%, 100% 100%, 0 100%);
        }

        @keyframes glitch1 {
            0%, 90%, 100% { transform: translate(0); }
            92% { transform: translate(4px, -2px); }
            94% { transform: translate(-4px, 2px); }
            96% { transform: translate(2px, 0); }
        }

        @keyframes glitch2 {
            0%, 90%, 100% { transform: translate(0); }
            91% { transform: translate(-3px, 1px); }
            93% { transform: translate(3px, -1px); }
            95% { transform: translate(-1px, 2px); }
        }

        .ascii-art {
            font-family: 'JetBrains Mono', monospace;
            font-size: 0.55rem;
            line-height: 1.2;
            color: rgba(59, 130, 246, 0.25);
            white-space: pre;
            user-select: none;
        }

        @media (min-width: 640px) {
            .ascii-art { font-size: 0.7rem; }
        }

        .home-btn {
            background: linear-gradient(135deg, #3B82F6, #2563EB);
            transition: all 0.35s cubic-bezier(0.23, 1, 0.32, 1);
        }

        .home-btn:hover {
            box-shadow: 0 0 30px rgba(59, 130, 246, 0.4);
            transform: translateY(-2px);
        }

        .back-btn {
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.35s cubic-bezier(0.23, 1, 0.32, 1);
        }

        .back-btn:hover {
            border-color: rgba(59, 130, 246, 0.5);
            background: rgba(59, 130, 246, 0.1);
        }

        .floating-dot {
            position: absolute;
            width: 4px;
            height: 4px;
            border-radius: 50%;
            background: #3B82F6;
            opacity: 0.3;
            animation: floatDot 6s ease-in-out infinite;
        }

        @keyframes floatDot {
            0%, 100% { transform: translateY(0) translateX(0); }
            25% { transform: translateY(-20px) translateX(10px); }
            50% { transform: translateY(-10px) translateX(-5px); }
            75% { transform: translateY(-25px) translateX(8px); }
        }
    </style>
</head>
<body class="bg-dark text-white overflow-x-hidden min-h-screen flex items-center justify-center relative">

    <!-- Floating Dots -->
    <div class="floating-dot" style="top: 20%; left: 15%; animation-delay: 0s;"></div>
    <div class="floating-dot" style="top: 60%; left: 80%; animation-delay: 1s;"></div>
    <div class="floating-dot" style="top: 40%; left: 50%; animation-delay: 2s;"></div>
    <div class="floating-dot" style="top: 70%; left: 25%; animation-delay: 3s;"></div>
    <div class="floating-dot" style="top: 30%; left: 70%; animation-delay: 4s;"></div>

    <!-- Gradient Orbs -->
    <div class="absolute top-20 left-10 w-72 h-72 bg-primary/5 rounded-full blur-[120px]"></div>
    <div class="absolute bottom-20 right-10 w-96 h-96 bg-accent/5 rounded-full blur-[150px]"></div>

    <div class="relative z-10 text-center px-4 max-w-2xl mx-auto">
        <!-- ASCII Art -->
        <div class="ascii-art mb-6 select-none hidden sm:block">
    ╔═══════════════════════════════╗
    ║                               ║
    ║   ┌─────────┐                 ║
    ║   │  ◉   ◉  │   ?            ║
    ║   │    ▽    │                 ║
    ║   │  ╰───╯  │                 ║
    ║   └─────────┘                 ║
    ║                               ║
    ╚═══════════════════════════════╝
        </div>

        <!-- Error Code -->
        <div class="glitch error-code mb-6">404</div>

        <!-- Message -->
        <h1 class="text-2xl sm:text-3xl font-bold mb-4">Page Not Found</h1>
        <p class="text-gray-400 text-base sm:text-lg mb-3 leading-relaxed">
            Looks like this page packed its bags and left.
        </p>
        <p class="text-gray-500 text-sm mb-10">
            Either the URL is wrong, or the page never existed. No hard feelings.
        </p>

        <!-- Buttons -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="index.php" class="home-btn px-8 py-4 rounded-2xl font-semibold text-white flex items-center gap-2">
                <i class="fas fa-home"></i> Go Back Home
            </a>
            <button onclick="history.back()" class="back-btn px-8 py-4 rounded-2xl font-semibold text-gray-300 flex items-center gap-2 cursor-pointer">
                <i class="fas fa-arrow-left"></i> Go Back
            </button>
        </div>

        <!-- Easter Egg -->
        <p class="text-gray-600 text-xs mt-12 font-mono">
            error_code: LOST_IN_THE_VOID
        </p>
    </div>

    <script>
        // Fun console message
        console.log('%c Error 404 ', 'background: #3B82F6; color: white; border-radius: 4px; padding: 4px 8px; font-weight: bold;');
        console.log('%c This page doesn\'t exist. But you found the console. 🕵️', 'color: #9CA3AF;');
    </script>
</body>
</html>
