<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="description" content="MD Mohiuddin — Full Stack Web Developer from Bangladesh. I build fast, clean web applications using PHP, JavaScript, MySQL, and Tailwind CSS.">
    <meta name="keywords" content="MD Mohiuddin, Mohiuddin, Full Stack Developer, PHP Developer, JavaScript Developer, MySQL, Tailwind CSS, Frontend Developer, Backend Developer, Bangladesh, Web Developer, SaaS Developer, Portfolio">
    <meta name="author" content="MD Mohiuddin">
    <meta name="theme-color" content="#0A0A0A">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
    <meta name="language" content="English">
    <meta name="revisit-after" content="3 days">
    <meta name="googlebot" content="index, follow">
    <meta name="application-name" content="MD Mohiuddin">
    <meta name="apple-mobile-web-app-title" content="MD Mohiuddin">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://mohiuddin.mojumderit.com">
    <meta property="og:title" content="MD Mohiuddin — Full Stack Web Developer">
    <meta property="og:description" content="I build fast, clean web applications using PHP, JavaScript, MySQL, and Tailwind CSS. View my projects and get in touch.">
    <meta property="og:image" content="https://mohiuddin.mojumderit.com/assets/images/mohiuddin.webp">
    <meta property="og:image:alt" content="MD Mohiuddin — Full Stack Developer">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="MD Mohiuddin">
    <meta property="og:locale" content="en_US">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="MD Mohiuddin — Full Stack Web Developer">
    <meta name="twitter:description" content="I build fast, clean web applications using PHP, JavaScript, MySQL, and Tailwind CSS.">
    <meta name="twitter:image" content="https://mohiuddin.mojumderit.com/assets/images/mohiuddin.webp">
    <meta name="twitter:image:alt" content="MD Mohiuddin — Full Stack Developer">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://mohiuddin.mojumderit.com">
    <link rel="sitemap" type="application/xml" href="/sitemap.xml">

    <title>MD Mohiuddin — Full Stack Web Developer | PHP, JavaScript, MySQL</title>

    <!-- Favicon -->
    <link rel="icon" type="image/webp" href="assets/images/logo.webp">
    <link rel="apple-touch-icon" href="assets/images/logo.webp">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="tailwind.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"></noscript>
    <link rel="stylesheet" href="styles.css">

    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "MD Mohiuddin",
        "url": "https://mohiuddin.mojumderit.com",
        "image": "https://mohiuddin.mojumderit.com/assets/images/mohiuddin.webp",
        "jobTitle": "Full Stack Web Developer",
        "description": "Full Stack Web Developer from Bangladesh specializing in PHP, JavaScript, MySQL, and modern web technologies.",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "BD"
        },
        "knowsAbout": ["PHP", "JavaScript", "MySQL", "HTML5", "CSS3", "Tailwind CSS", "REST API", "jQuery", "Bootstrap", "SaaS Development"],
        "sameAs": [
            "https://fb.me/bloggermohiuddin",
            "https://github.com/mdmohiuddin",
            "https://linkedin.com/in/mdmohiuddin"
        ]
    }
    </script>
</head>
<body class="bg-dark text-white font-sans overflow-x-hidden">

    <!-- Preloader -->
    <div id="preloader" class="fixed inset-0 z-[9999] bg-dark flex items-center justify-center">
        <div class="text-center">
            <div class="preloader-logo mb-6">
                <img src="assets/images/logo.webp" alt="M" class="w-20 h-20 rounded-2xl object-cover mx-auto preloader-logo-inner">
            </div>
            <div class="preloader-bar w-48 h-1 bg-dark-surface rounded-full mx-auto overflow-hidden">
                <div class="preloader-bar-fill h-full bg-gradient-to-r from-primary to-accent rounded-full"></div>
            </div>
            <p class="text-gray-500 font-mono text-xs tracking-widest mt-4">LOADING</p>
        </div>
    </div>

    <!-- Custom Cursor -->
    <div id="cursor-dot" class="cursor-dot"></div>
    <div id="cursor-ring" class="cursor-ring"></div>

    <!-- Cursor Glow -->
    <div id="cursor-glow" class="pointer-events-none fixed w-[400px] h-[400px] rounded-full opacity-20 z-[9998] transition-opacity duration-300" style="background: radial-gradient(circle, rgba(59,130,246,0.15) 0%, transparent 70%); transform: translate(-50%, -50%);"></div>

    <!-- Scroll Progress -->
    <div id="scroll-progress" class="fixed top-0 left-0 h-[3px] bg-gradient-to-r from-primary via-secondary to-accent z-[9999] transition-all duration-15"></div>

    <!-- Navigation -->
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-[9990] transition-all duration-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="nav-container flex items-center justify-between h-16 px-2 sm:px-5 rounded-2xl transition-all duration-500">
                <a href="#hero" class="flex items-center gap-3 group">
                    <img src="assets/images/logo.webp" alt="M" class="w-10 h-10 rounded-xl object-cover group-hover:scale-110 transition-transform duration-300">
                    <span class="font-bold text-lg hidden sm:block">Mohiuddin</span>
                </a>

                <div class="hidden md:flex items-center gap-1">
                    <a href="#hero" class="nav-link active" data-section="hero">Home</a>
                    <a href="#about" class="nav-link" data-section="about">About</a>
                    <a href="#techstack" class="nav-link" data-section="techstack">Skills</a>
                    <a href="#projects" class="nav-link" data-section="projects">Projects</a>
                    <a href="#services" class="nav-link" data-section="services">Services</a>
                    <a href="#contact" class="nav-link" data-section="contact">Contact</a>
                </div>

                <div class="flex items-center gap-3">
                    <button id="mobile-menu-btn" class="md:hidden w-10 h-10 rounded-xl bg-dark-surface border border-white/10 flex items-center justify-center hover:border-primary/50 transition-all duration-300">
                        <div class="hamburger">
                            <span></span><span></span><span></span>
                        </div>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden fixed inset-0 z-[9989] hidden opacity-0" style="background: rgba(5, 5, 15, 0.97); backdrop-filter: blur(24px);">
            <button id="mobile-close-btn" class="mobile-close" aria-label="Close menu">
                <i class="fas fa-times"></i>
            </button>
            <div class="flex flex-col items-center justify-center h-full gap-8">
                <a href="#hero" class="mobile-nav-link text-2xl"><span class="text-primary font-mono text-sm mr-3">01.</span>Home</a>
                <a href="#about" class="mobile-nav-link text-2xl"><span class="text-primary font-mono text-sm mr-3">02.</span>About</a>
                <a href="#techstack" class="mobile-nav-link text-2xl"><span class="text-primary font-mono text-sm mr-3">03.</span>Skills</a>
                <a href="#projects" class="mobile-nav-link text-2xl"><span class="text-primary font-mono text-sm mr-3">04.</span>Projects</a>
                <a href="#services" class="mobile-nav-link text-2xl"><span class="text-primary font-mono text-sm mr-3">05.</span>Services</a>
                <a href="#contact" class="mobile-nav-link text-2xl"><span class="text-primary font-mono text-sm mr-3">06.</span>Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Particles Canvas -->
        <canvas id="particles" class="absolute inset-0 z-0"></canvas>

        <!-- Grid Background -->
        <div class="absolute inset-0 z-0 grid-bg opacity-20"></div>

        <!-- Gradient Orbs -->
        <div class="absolute top-20 left-10 w-72 h-72 bg-primary/10 rounded-full blur-[120px] animate-pulse-slow"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-accent/10 rounded-full blur-[150px] animate-pulse-slow animation-delay-2000"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-secondary/5 rounded-full blur-[200px]"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
                <!-- Left Content -->
                <div class="flex-1 text-center lg:text-left">
                    <h1 class="text-4xl sm:text-5xl lg:text-7xl font-black mb-6 leading-tight opacity-0 translate-y-10">
                        Hi, I'm<br>
                        <span class="bg-gradient-to-r from-primary via-secondary to-accent bg-clip-text text-transparent">MD Mohiuddin</span>
                    </h1>

                    <div class="h-10 mb-10 flex items-center justify-center lg:justify-start opacity-0 translate-y-10">
                        <span class="text-white font-semibold text-lg">I&nbsp;</span>
                        <span id="typed-text" class="text-primary font-mono font-semibold text-lg"></span>
                        <span id="typed-cursor" class="w-[3px] h-6 bg-primary ml-1 animate-blink"></span>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center gap-4 justify-center lg:justify-start opacity-0 translate-y-10">
                        <a href="#projects" class="group relative px-8 py-4 bg-gradient-to-r from-primary to-blue-600 rounded-2xl font-semibold text-white overflow-hidden transition-all duration-300 hover:shadow-[0_0_30px_rgba(59,130,246,0.4)] hover:scale-105">
                            <span class="relative z-10 flex items-center gap-2">
                                <i class="fas fa-rocket"></i> View Projects
                            </span>
                        </a>
                        <a href="assets/files/resume.pdf" target="_blank" class="group px-8 py-4 rounded-2xl font-semibold bg-dark-surface border border-white/10 hover:border-primary/50 hover:bg-primary/10 transition-all duration-300 hover:scale-105 flex items-center gap-2">
                            <i class="fas fa-file-arrow-down"></i> Download Resume
                        </a>
                    </div>
                </div>

                <!-- Right Avatar -->
                <div class="flex-shrink-0 relative opacity-0 translate-y-10">
                    <div class="hero-avatar-wrapper">
                        <div class="hero-avatar-border">
                            <img src="assets/images/mohiuddin.webp" alt="MD Mohiuddin - Full Stack Developer" class="hero-avatar-img" loading="eager">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- About Section -->
    <section id="about" class="py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-20 scroll-reveal">
                <span class="text-primary font-mono text-sm tracking-widest uppercase">Get To Know Me</span>
                <h2 class="text-4xl sm:text-5xl font-black mt-4 mb-6">About <span class="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">Me</span></h2>
                <div class="w-20 h-1 bg-gradient-to-r from-primary to-accent mx-auto rounded-full"></div>
            </div>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Left - Image -->
                <div class="relative scroll-reveal">
                    <div class="relative rounded-3xl overflow-hidden bg-gradient-to-br from-dark-card to-dark-surface border border-white/5 p-2">
                        <div class="rounded-2xl overflow-hidden bg-dark-surface aspect-square">
                            <img src="assets/images/mohiuddin.webp" alt="MD Mohiuddin" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <!-- Floating Stats Card -->
                    <div class="absolute -bottom-6 -right-6 bg-dark-card/90 backdrop-blur-xl border border-white/10 rounded-2xl p-6 shadow-2xl animate-float">
                        <div class="text-3xl font-black bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent">3+</div>
                        <div class="text-gray-400 text-sm">Years of Learning</div>
                    </div>
                </div>

                <!-- Right - Content -->
                <div class="scroll-reveal">
                    <h3 class="text-2xl sm:text-3xl font-bold mb-6">
                        Hi, I'm <span class="text-primary">Mohiuddin</span>
                    </h3>
                    <p class="text-gray-400 leading-relaxed mb-6">
                        I'm a full stack developer from Bangladesh. I build web applications using PHP, JavaScript, MySQL, and Tailwind CSS. I enjoy turning ideas into products that people actually use.
                    </p>
                    <p class="text-gray-400 leading-relaxed mb-8">
                        Currently focused on building SaaS platforms and learning new technologies every day. I like clean code, simple UIs, and solving problems that matter.
                    </p>

                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-6 mb-8">
                        <div class="text-center p-4 rounded-2xl bg-dark-surface border border-white/5">
                            <div class="text-3xl font-black text-primary counter" data-target="3">0</div>
                            <div class="text-gray-500 text-sm mt-1">Years Experience</div>
                        </div>
                        <div class="text-center p-4 rounded-2xl bg-dark-surface border border-white/5">
                            <div class="text-3xl font-black text-secondary counter" data-target="15">0</div>
                            <div class="text-gray-500 text-sm mt-1">Projects Built</div>
                        </div>
                        <div class="text-center p-4 rounded-2xl bg-dark-surface border border-white/5">
                            <div class="text-3xl font-black text-accent counter" data-target="10">0</div>
                            <div class="text-gray-500 text-sm mt-1">Technologies</div>
                        </div>
                    </div>

                    <a href="#contact" class="inline-flex items-center gap-2 px-8 py-4 bg-gradient-to-r from-primary to-blue-600 rounded-2xl font-semibold hover:shadow-[0_0_30px_rgba(59,130,246,0.4)] hover:scale-105 transition-all duration-300">
                        <i class="fas fa-comments"></i> Get In Touch
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack Section -->
    <section id="techstack" class="py-24 relative bg-dark-surface/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-20 scroll-reveal">
                <span class="text-primary font-mono text-sm tracking-widest uppercase">My Skills</span>
                <h2 class="text-4xl sm:text-5xl font-black mt-4 mb-6">Tech <span class="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">Stack</span></h2>
                <div class="w-20 h-1 bg-gradient-to-r from-primary to-accent mx-auto rounded-full"></div>
            </div>

            <!-- Frontend -->
            <div class="mb-16 scroll-reveal">
                <h3 class="text-xl font-bold mb-8 flex items-center gap-3">
                    <span class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary"><i class="fas fa-palette"></i></span>
                    Frontend
                </h3>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
                    <div class="tech-card group p-6 rounded-2xl bg-dark-card border border-white/5 hover:border-primary/30 transition-all duration-500 hover:scale-105 hover:shadow-[0_0_30px_rgba(59,130,246,0.1)] cursor-pointer text-center">
                        <div class="text-4xl mb-3 group-hover:scale-110 transition-transform duration-300">🌐</div>
                        <p class="font-semibold text-sm">HTML5</p>
                    </div>
                    <div class="tech-card group p-6 rounded-2xl bg-dark-card border border-white/5 hover:border-secondary/30 transition-all duration-500 hover:scale-105 hover:shadow-[0_0_30px_rgba(6,182,212,0.1)] cursor-pointer text-center">
                        <div class="text-4xl mb-3 group-hover:scale-110 transition-transform duration-300">🎨</div>
                        <p class="font-semibold text-sm">CSS3</p>
                    </div>
                    <div class="tech-card group p-6 rounded-2xl bg-dark-card border border-white/5 hover:border-cyan-400/30 transition-all duration-500 hover:scale-105 hover:shadow-[0_0_30px_rgba(34,211,238,0.1)] cursor-pointer text-center">
                        <div class="text-4xl mb-3 group-hover:scale-110 transition-transform duration-300">🌊</div>
                        <p class="font-semibold text-sm">Tailwind CSS</p>
                    </div>
                    <div class="tech-card group p-6 rounded-2xl bg-dark-card border border-white/5 hover:border-purple-400/30 transition-all duration-500 hover:scale-105 hover:shadow-[0_0_30px_rgba(168,85,247,0.1)] cursor-pointer text-center">
                        <div class="text-4xl mb-3 group-hover:scale-110 transition-transform duration-300">🅱️</div>
                        <p class="font-semibold text-sm">Bootstrap</p>
                    </div>
                    <div class="tech-card group p-6 rounded-2xl bg-dark-card border border-white/5 hover:border-yellow-400/30 transition-all duration-500 hover:scale-105 hover:shadow-[0_0_30px_rgba(250,204,21,0.1)] cursor-pointer text-center">
                        <div class="text-4xl mb-3 group-hover:scale-110 transition-transform duration-300">⚡</div>
                        <p class="font-semibold text-sm">JavaScript</p>
                    </div>
                    <div class="tech-card group p-6 rounded-2xl bg-dark-card border border-white/5 hover:border-blue-400/30 transition-all duration-500 hover:scale-105 hover:shadow-[0_0_30px_rgba(96,165,250,0.1)] cursor-pointer text-center">
                        <div class="text-4xl mb-3 group-hover:scale-110 transition-transform duration-300">📦</div>
                        <p class="font-semibold text-sm">jQuery</p>
                    </div>
                </div>
            </div>

            <!-- Backend -->
            <div class="mb-16 scroll-reveal">
                <h3 class="text-xl font-bold mb-8 flex items-center gap-3">
                    <span class="w-10 h-10 rounded-xl bg-accent/10 flex items-center justify-center text-accent"><i class="fas fa-server"></i></span>
                    Backend
                </h3>
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                    <div class="tech-card group p-6 rounded-2xl bg-dark-card border border-white/5 hover:border-indigo-400/30 transition-all duration-500 hover:scale-105 hover:shadow-[0_0_30px_rgba(129,140,248,0.1)] cursor-pointer text-center">
                        <div class="text-4xl mb-3 group-hover:scale-110 transition-transform duration-300">🐘</div>
                        <p class="font-semibold text-sm">PHP</p>
                    </div>
                    <div class="tech-card group p-6 rounded-2xl bg-dark-card border border-white/5 hover:border-orange-400/30 transition-all duration-500 hover:scale-105 hover:shadow-[0_0_30px_rgba(251,146,60,0.1)] cursor-pointer text-center">
                        <div class="text-4xl mb-3 group-hover:scale-110 transition-transform duration-300">🗄️</div>
                        <p class="font-semibold text-sm">MySQL</p>
                    </div>
                    <div class="tech-card group p-6 rounded-2xl bg-dark-card border border-white/5 hover:border-green-400/30 transition-all duration-500 hover:scale-105 hover:shadow-[0_0_30px_rgba(74,222,128,0.1)] cursor-pointer text-center">
                        <div class="text-4xl mb-3 group-hover:scale-110 transition-transform duration-300">🔗</div>
                        <p class="font-semibold text-sm">REST API</p>
                    </div>
                </div>
            </div>

            <!-- Tools -->
            <div class="scroll-reveal">
                <h3 class="text-xl font-bold mb-8 flex items-center gap-3">
                    <span class="w-10 h-10 rounded-xl bg-secondary/10 flex items-center justify-center text-secondary"><i class="fas fa-tools"></i></span>
                    Tools & More
                </h3>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
                    <div class="tech-card group p-5 rounded-2xl bg-dark-card border border-white/5 hover:border-orange-400/30 transition-all duration-500 hover:scale-105 cursor-pointer text-center">
                        <div class="text-3xl mb-2 group-hover:scale-110 transition-transform duration-300">🔀</div>
                        <p class="font-semibold text-sm">Git</p>
                    </div>
                    <div class="tech-card group p-5 rounded-2xl bg-dark-card border border-white/5 hover:border-gray-300/30 transition-all duration-500 hover:scale-105 cursor-pointer text-center">
                        <div class="text-3xl mb-2 group-hover:scale-110 transition-transform duration-300">🐙</div>
                        <p class="font-semibold text-sm">GitHub</p>
                    </div>
                    <div class="tech-card group p-5 rounded-2xl bg-dark-card border border-white/5 hover:border-blue-400/30 transition-all duration-500 hover:scale-105 cursor-pointer text-center">
                        <div class="text-3xl mb-2 group-hover:scale-110 transition-transform duration-300">📝</div>
                        <p class="font-semibold text-sm">VS Code</p>
                    </div>
                    <div class="tech-card group p-5 rounded-2xl bg-dark-card border border-white/5 hover:border-orange-400/30 transition-all duration-500 hover:scale-105 cursor-pointer text-center">
                        <div class="text-3xl mb-2 group-hover:scale-110 transition-transform duration-300">📮</div>
                        <p class="font-semibold text-sm">Postman</p>
                    </div>
                    <div class="tech-card group p-5 rounded-2xl bg-dark-card border border-white/5 hover:border-blue-400/30 transition-all duration-500 hover:scale-105 cursor-pointer text-center">
                        <div class="text-3xl mb-2 group-hover:scale-110 transition-transform duration-300">🖥️</div>
                        <p class="font-semibold text-sm">cPanel</p>
                    </div>
                    <div class="tech-card group p-5 rounded-2xl bg-dark-card border border-white/5 hover:border-red-400/30 transition-all duration-500 hover:scale-105 cursor-pointer text-center">
                        <div class="text-3xl mb-2 group-hover:scale-110 transition-transform duration-300">🐧</div>
                        <p class="font-semibold text-sm">Linux</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-20 scroll-reveal">
                <span class="text-primary font-mono text-sm tracking-widest uppercase">What I Built</span>
                <h2 class="text-4xl sm:text-5xl font-black mt-4 mb-6">Featured <span class="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">Projects</span></h2>
                <div class="w-20 h-1 bg-gradient-to-r from-primary to-accent mx-auto rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <a href="https://dentdock.xyz" target="_blank" class="project-card group scroll-reveal rounded-3xl bg-dark-card border border-white/5 overflow-hidden hover:border-primary/20 transition-all duration-500 hover:shadow-[0_20px_60px_rgba(59,130,246,0.1)] block">
                    <div class="relative overflow-hidden aspect-video bg-gradient-to-br from-primary/20 to-accent/20">
                        <img src="assets/images/dentcare-dashboard.webp" alt="DentDock SaaS Dashboard" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" loading="lazy">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors duration-300">DentDock SaaS</h3>
                        <p class="text-gray-400 text-sm mb-4 leading-relaxed">Dental clinic management platform used by multiple clinics. Handles appointments, patient records, and revenue tracking.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-medium">PHP</span>
                            <span class="px-3 py-1 rounded-full bg-secondary/10 text-secondary text-xs font-medium">MySQL</span>
                            <span class="px-3 py-1 rounded-full bg-accent/10 text-accent text-xs font-medium">JavaScript</span>
                            <span class="px-3 py-1 rounded-full bg-yellow-400/10 text-yellow-400 text-xs font-medium">jQuery</span>
                        </div>
                    </div>
                </a>

                <!-- Project 2 -->
                <a href="#" class="project-card group scroll-reveal rounded-3xl bg-dark-card border border-white/5 overflow-hidden hover:border-secondary/20 transition-all duration-500 hover:shadow-[0_20px_60px_rgba(6,182,212,0.1)] block" style="animation-delay: 0.1s;">
                    <div class="relative overflow-hidden aspect-video bg-gradient-to-br from-secondary/20 to-green-500/20">
                        <img src="assets/images/ems-dashboard.webp" alt="EMS Dashboard" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" loading="lazy">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-secondary transition-colors duration-300">Education Management System</h3>
                        <p class="text-gray-400 text-sm mb-4 leading-relaxed">School management system managing 200+ student records with attendance, exams, and SMS notifications.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-medium">PHP</span>
                            <span class="px-3 py-1 rounded-full bg-secondary/10 text-secondary text-xs font-medium">MySQL</span>
                            <span class="px-3 py-1 rounded-full bg-green-400/10 text-green-400 text-xs font-medium">Bootstrap</span>
                            <span class="px-3 py-1 rounded-full bg-yellow-400/10 text-yellow-400 text-xs font-medium">jQuery</span>
                        </div>
                    </div>
                </a>

                <!-- Project 3 -->
                <a href="#" class="project-card group scroll-reveal rounded-3xl bg-dark-card border border-white/5 overflow-hidden hover:border-accent/20 transition-all duration-500 hover:shadow-[0_20px_60px_rgba(139,92,246,0.1)] block" style="animation-delay: 0.2s;">
                    <div class="relative overflow-hidden aspect-video bg-gradient-to-br from-accent/20 to-pink-500/20">
                        <img src="assets/images/bsp-cover.webp" alt="Bondhon Sonchoy Prokolpo App" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" loading="lazy">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-accent transition-colors duration-300">Bondhon Sonchoy Prokolpo App</h3>
                        <p class="text-gray-400 text-sm mb-4 leading-relaxed">A savings and fund collection platform for managing group contributions, tracking deposits, and handling taka disbursements.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 rounded-full bg-cyan-400/10 text-cyan-400 text-xs font-medium">Tailwind CSS</span>
                            <span class="px-3 py-1 rounded-full bg-yellow-400/10 text-yellow-400 text-xs font-medium">JavaScript</span>
                            <span class="px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-medium">PHP</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20 scroll-reveal">
                <span class="text-primary font-mono text-sm tracking-widest uppercase">What I Work With</span>
                <h2 class="text-4xl sm:text-5xl font-black mt-4 mb-6">What I Can <span class="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">Build</span></h2>
                <div class="w-20 h-1 bg-gradient-to-r from-primary to-accent mx-auto rounded-full"></div>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Service 1 -->
                <div class="service-card group p-8 rounded-3xl bg-dark-card border border-white/5 hover:border-primary/20 transition-all duration-500 hover:scale-105 hover:shadow-[0_20px_60px_rgba(59,130,246,0.08)] scroll-reveal cursor-pointer">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-primary/20 to-primary/5 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                        <i class="fas fa-code text-2xl text-primary"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-3 group-hover:text-primary transition-colors duration-300">Frontend Development</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Fast, accessible interfaces that work on every device. I focus on performance, not just making things pretty.</p>
                </div>

                <!-- Service 2 -->
                <div class="service-card group p-8 rounded-3xl bg-dark-card border border-white/5 hover:border-secondary/20 transition-all duration-500 hover:scale-105 hover:shadow-[0_20px_60px_rgba(6,182,212,0.08)] scroll-reveal cursor-pointer" style="animation-delay: 0.05s;">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-secondary/20 to-secondary/5 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                        <i class="fas fa-server text-2xl text-secondary"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-3 group-hover:text-secondary transition-colors duration-300">Backend Development</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">PHP and MySQL backends that handle real traffic. Clean code, proper error handling, no shortcuts.</p>
                </div>

                <!-- Service 3 -->
                <div class="service-card group p-8 rounded-3xl bg-dark-card border border-white/5 hover:border-accent/20 transition-all duration-500 hover:scale-105 hover:shadow-[0_20px_60px_rgba(139,92,246,0.08)] scroll-reveal cursor-pointer" style="animation-delay: 0.1s;">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-accent/20 to-accent/5 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                        <i class="fas fa-plug text-2xl text-accent"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-3 group-hover:text-accent transition-colors duration-300">API Development</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">REST APIs with authentication, validation, and documentation. Built for apps that need to talk to each other.</p>
                </div>

                <!-- Service 4 -->
                <div class="service-card group p-8 rounded-3xl bg-dark-card border border-white/5 hover:border-orange-400/20 transition-all duration-500 hover:scale-105 hover:shadow-[0_20px_60px_rgba(251,146,60,0.08)] scroll-reveal cursor-pointer" style="animation-delay: 0.15s;">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-orange-400/20 to-orange-400/5 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                        <i class="fas fa-database text-2xl text-orange-400"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-3 group-hover:text-orange-400 transition-colors duration-300">Database Design</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">MySQL schemas that are normalized, indexed, and built to scale. Data architecture that doesn't break at 10k rows.</p>
                </div>

                <!-- Service 5 -->
                <div class="service-card group p-8 rounded-3xl bg-dark-card border border-white/5 hover:border-green-400/20 transition-all duration-500 hover:scale-105 hover:shadow-[0_20px_60px_rgba(74,222,128,0.08)] scroll-reveal cursor-pointer sm:col-span-2 lg:col-span-1" style="animation-delay: 0.2s;">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-green-400/20 to-green-400/5 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                        <i class="fas fa-cloud text-2xl text-green-400"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-3 group-hover:text-green-400 transition-colors duration-300">SaaS Development</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Full SaaS products from idea to deployment. Multi-tenancy, auth, subscriptions — the works.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20 scroll-reveal">
                <span class="text-primary font-mono text-sm tracking-widest uppercase">Get In Touch</span>
                <h2 class="text-4xl sm:text-5xl font-black mt-4 mb-6">Contact <span class="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">Me</span></h2>
                <div class="w-20 h-1 bg-gradient-to-r from-primary to-accent mx-auto rounded-full"></div>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
                <!-- Contact Info -->
                <div class="scroll-reveal">
                    <h3 class="text-2xl font-bold mb-6">Get In <span class="text-primary">Touch</span></h3>
                    <p class="text-gray-400 leading-relaxed mb-8">Have a project in mind? Let's talk.</p>

                    <div class="space-y-4 mb-8">
                        <a href="mailto:bloggermahim@gmail.com" class="flex items-center gap-4 p-4 rounded-2xl bg-dark-card border border-white/5 hover:border-primary/20 transition-all duration-300 group">
                            <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-envelope text-primary"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Email</p>
                                <p class="font-medium">bloggermahim@gmail.com</p>
                            </div>
                        </a>

                        <a href="https://github.com/mdmohiuddin" target="_blank" class="flex items-center gap-4 p-4 rounded-2xl bg-dark-card border border-white/5 hover:border-gray-400/20 transition-all duration-300 group">
                            <div class="w-12 h-12 rounded-xl bg-gray-500/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <i class="fab fa-github text-gray-300"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">GitHub</p>
                                <p class="font-medium">github.com/mdmohiuddin</p>
                            </div>
                        </a>

                        <a href="https://linkedin.com/in/mdmohiuddin" target="_blank" class="flex items-center gap-4 p-4 rounded-2xl bg-dark-card border border-white/5 hover:border-blue-400/20 transition-all duration-300 group">
                            <div class="w-12 h-12 rounded-xl bg-blue-500/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <i class="fab fa-linkedin-in text-blue-400"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">LinkedIn</p>
                                <p class="font-medium">linkedin.com/in/mdmohiuddin</p>
                            </div>
                        </a>

                        <a href="https://fb.me/bloggermohiuddin" target="_blank" class="flex items-center gap-4 p-4 rounded-2xl bg-dark-card border border-white/5 hover:border-blue-500/20 transition-all duration-300 group">
                            <div class="w-12 h-12 rounded-xl bg-blue-500/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <i class="fab fa-facebook-f text-blue-500"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Facebook</p>
                                <p class="font-medium">fb.me/bloggermohiuddin</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="scroll-reveal">
                    <form id="contact-form" class="p-8 rounded-3xl bg-dark-card border border-white/5">
                        <div class="grid sm:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block text-sm font-medium mb-2 text-gray-400">Name</label>
                                <input type="text" name="name" required class="w-full px-4 py-3 rounded-xl bg-dark-surface border border-white/10 focus:border-primary/50 focus:outline-none focus:ring-2 focus:ring-primary/20 transition-all duration-300 placeholder-gray-600" placeholder="Your name">
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-2 text-gray-400">Email</label>
                                <input type="email" name="email" required class="w-full px-4 py-3 rounded-xl bg-dark-surface border border-white/10 focus:border-primary/50 focus:outline-none focus:ring-2 focus:ring-primary/20 transition-all duration-300 placeholder-gray-600" placeholder="your@email.com">
                            </div>
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2 text-gray-400">Message</label>
                            <textarea name="message" rows="5" required class="w-full px-4 py-3 rounded-xl bg-dark-surface border border-white/10 focus:border-primary/50 focus:outline-none focus:ring-2 focus:ring-primary/20 transition-all duration-300 resize-none placeholder-gray-600" placeholder="Tell me about your project..."></textarea>
                        </div>
                        <button type="submit" class="w-full py-4 rounded-xl bg-gradient-to-r from-primary to-blue-600 font-semibold hover:shadow-[0_0_30px_rgba(59,130,246,0.4)] hover:scale-[1.02] transition-all duration-300 flex items-center justify-center gap-2">
                            <i class="fas fa-paper-plane"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="flex items-center gap-3">
                    <img src="assets/images/logo.webp" alt="M" class="w-10 h-10 rounded-xl object-cover">
                    <div>
                        <p class="font-bold">MD Mohiuddin</p>
                        <p class="text-gray-500 text-sm">Full Stack Developer</p>
                    </div>
                </div>

                <p class="text-gray-500 text-sm">&copy; 2026 MD Mohiuddin. All rights reserved.</p>

                <div class="flex items-center gap-4">
                    <a href="https://github.com/mdmohiuddin" target="_blank" class="w-10 h-10 rounded-xl bg-dark-card border border-white/10 flex items-center justify-center hover:border-primary/50 hover:bg-primary/10 transition-all duration-300 hover:scale-110">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://linkedin.com/in/mdmohiuddin" target="_blank" class="w-10 h-10 rounded-xl bg-dark-card border border-white/10 flex items-center justify-center hover:border-blue-400/50 hover:bg-blue-400/10 transition-all duration-300 hover:scale-110">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://fb.me/bloggermohiuddin" target="_blank" class="w-10 h-10 rounded-xl bg-dark-card border border-white/10 flex items-center justify-center hover:border-blue-500/50 hover:bg-blue-500/10 transition-all duration-300 hover:scale-110">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="mailto:bloggermahim@gmail.com" class="w-10 h-10 rounded-xl bg-dark-card border border-white/10 flex items-center justify-center hover:border-primary/50 hover:bg-primary/10 transition-all duration-300 hover:scale-110">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top -->
    <button id="back-to-top" class="fixed bottom-8 right-8 w-12 h-12 rounded-full bg-primary/80 backdrop-blur-sm flex items-center justify-center opacity-0 pointer-events-none transition-all duration-300 hover:scale-110 hover:bg-primary z-[9990] shadow-[0_0_20px_rgba(59,130,246,0.3)]">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="script.js"></script>
</body>
</html>