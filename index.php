<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="description" content="I'm Mohiuddin from Bangladesh. I code, I build, I ship. This is my little corner of the internet.">
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
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://mohiuddin.mojumderit.com">
    <meta property="og:title" content="Mohiuddin — My little corner of the internet">
    <meta property="og:description" content="I'm Mohiuddin from Bangladesh. I code, I build, I ship. Take a look around.">
    <meta property="og:image" content="https://mohiuddin.mojumderit.com/assets/images/og-image.png">
    <meta property="og:image:alt" content="MD Mohiuddin">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Mohiuddin">
    <meta property="og:locale" content="en_US">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Mohiuddin — My little corner of the internet">
    <meta name="twitter:description" content="I'm Mohiuddin from Bangladesh. I code, I build, I ship. Take a look around.">
    <meta name="twitter:image" content="https://mohiuddin.mojumderit.com/assets/images/og-image.png">
    <meta name="twitter:image:alt" content="MD Mohiuddin">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://mohiuddin.mojumderit.com">
    <link rel="sitemap" type="application/xml" href="/sitemap.xml">

    <title>Mohiuddin — I build things for the web</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/og-image.png">
    <link rel="apple-touch-icon" href="assets/images/og-image.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Preload critical resources -->
    <link rel="preload" href="assets/images/mohiuddin.webp" as="image" fetchpriority="high">

    <link rel="stylesheet" href="tailwind.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"></noscript>
    <link rel="stylesheet" href="styles.css" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="styles.css"></noscript>

    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "MD Mohiuddin",
        "url": "https://mohiuddin.mojumderit.com",
        "image": "https://mohiuddin.mojumderit.com/assets/images/mohiuddin.webp",
        "jobTitle": "Full Stack Web Developer",
        "description": "I code, I build, I ship. Full stack developer from Bangladesh.",
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
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Mohiuddin",
        "url": "https://mohiuddin.mojumderit.com",
        "description": "I'm Mohiuddin from Bangladesh. I code, I build, I ship.",
        "publisher": {
            "@type": "Person",
            "name": "MD Mohiuddin"
        }
    }
    </script>
</head>
<body class="bg-dark text-white font-sans overflow-x-hidden">

    <!-- Noise Texture Overlay -->
    <div class="noise-overlay"></div>

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
                    <h1 class="text-5xl sm:text-6xl lg:text-8xl font-black mb-8 leading-[1.05] opacity-0 translate-y-10">
                        <span class="text-white">Hi, I'm</span><br>
                        <span class="bg-gradient-to-r from-primary via-secondary to-accent bg-clip-text text-transparent">Mohiuddin</span>
                    </h1>

                    <div class="h-10 mb-10 flex items-center justify-center lg:justify-start opacity-0 translate-y-10">
                        <span class="text-gray-500 font-medium text-base">I&nbsp;</span>
                        <span id="typed-text" class="text-primary font-mono font-semibold text-base"></span>
                        <span id="typed-cursor" class="w-[3px] h-5 bg-primary ml-1 animate-blink"></span>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center gap-4 justify-center lg:justify-start opacity-0 translate-y-10">
                        <a href="#projects" class="group relative px-8 py-4 bg-gradient-to-r from-primary to-blue-600 rounded-2xl font-semibold text-white overflow-hidden transition-all duration-300 hover:shadow-[0_0_40px_rgba(59,130,246,0.4)] hover:scale-105">
                            <span class="relative z-10 flex items-center gap-2">
                                <i class="fas fa-rocket"></i> See My Work
                            </span>
                        </a>
                        <a href="assets/files/resume.pdf" target="_blank" class="group px-8 py-4 rounded-2xl font-semibold bg-dark-surface border border-white/10 hover:border-primary/50 hover:bg-primary/10 transition-all duration-300 hover:scale-105 flex items-center gap-2">
                            <i class="fas fa-file-arrow-down"></i> Download Resume
                        </a>
                    </div>

                    <!-- Quick Stats -->
                    <div class="flex items-center gap-6 sm:gap-8 mt-12 justify-center lg:justify-start opacity-0 translate-y-10">
                        <div class="text-center lg:text-left">
                            <div class="text-2xl font-black text-primary">3+</div>
                            <div class="text-gray-500 text-xs">Years Coding</div>
                        </div>
                        <div class="w-px h-8 bg-white/10"></div>
                        <div class="text-center lg:text-left">
                            <div class="text-2xl font-black text-secondary">15+</div>
                            <div class="text-gray-500 text-xs">Projects Shipped</div>
                        </div>
                        <div class="w-px h-8 bg-white/10"></div>
                        <div class="text-center lg:text-left">
                            <div class="text-2xl font-black text-accent">10+</div>
                            <div class="text-gray-500 text-xs">Technologies</div>
                        </div>
                    </div>
                </div>

                <!-- Right Avatar -->
                <div class="flex-shrink-0 relative opacity-0 translate-y-10">
                    <!-- Floating Tech Icons -->
                    <div class="absolute -top-4 -left-4 w-12 h-12 rounded-xl bg-dark-card border border-white/10 flex items-center justify-center animate-float shadow-lg" style="animation-delay: 0s;">
                        <i class="fab fa-php text-lg" style="color:#777BB4"></i>
                    </div>
                    <div class="absolute -top-2 -right-6 w-12 h-12 rounded-xl bg-dark-card border border-white/10 flex items-center justify-center animate-float shadow-lg" style="animation-delay: 0.5s;">
                        <i class="fab fa-js text-lg" style="color:#F7DF1E"></i>
                    </div>
                    <div class="absolute -bottom-4 -left-6 w-12 h-12 rounded-xl bg-dark-card border border-white/10 flex items-center justify-center animate-float shadow-lg" style="animation-delay: 1s;">
                        <i class="fas fa-database text-lg" style="color:#4479A1"></i>
                    </div>
                    <div class="absolute -bottom-2 -right-4 w-12 h-12 rounded-xl bg-dark-card border border-white/10 flex items-center justify-center animate-float shadow-lg" style="animation-delay: 1.5s;">
                        <i class="fas fa-wind text-lg" style="color:#06B6D4"></i>
                    </div>

                    <div class="hero-avatar-wrapper">
                        <div class="hero-avatar-border">
                            <img src="assets/images/mohiuddin.webp" alt="MD Mohiuddin - Full Stack Developer" class="hero-avatar-img" loading="eager" fetchpriority="high" width="320" height="320">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 opacity-0 translate-y-10" id="scroll-indicator">
            <span class="text-gray-500 text-xs font-mono tracking-widest">SCROLL</span>
            <div class="w-5 h-8 rounded-full border-2 border-gray-500/30 flex justify-center pt-1.5">
                <div class="w-1 h-2 rounded-full bg-primary animate-bounce"></div>
            </div>
        </div>

    </section>

    <!-- About Section -->
    <section id="about" class="py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-20 scroll-reveal">
                <span class="text-primary font-mono text-sm tracking-widest uppercase">The Person Behind the Code</span>
                <h2 class="text-4xl sm:text-5xl font-black mt-4 mb-6">About <span class="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">Me</span></h2>
                <div class="w-20 h-1 bg-gradient-to-r from-primary to-accent mx-auto rounded-full mb-6"></div>
                <p class="text-gray-500 max-w-xl mx-auto text-sm leading-relaxed">A bit about who I am and what drives me to build things.</p>
            </div>

            <!-- Bento Grid -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5 auto-rows-auto">

                <!-- Photo Card (spans 2 cols, 2 rows) -->
                <div class="col-span-2 row-span-2 scroll-reveal">
                    <div class="relative h-full rounded-3xl overflow-hidden bg-gradient-to-br from-dark-card to-dark-surface border border-white/5 p-2 group">
                        <div class="rounded-2xl overflow-hidden bg-dark-surface h-full min-h-[300px] sm:min-h-[400px]">
                            <img src="data:image/webp;base64,UklGRiIAAABXRUJQVlA4IBYAAAAwAQCdASoBAAEADsD+JaQAA3AAAAAA" data-src="assets/images/mohiuddin.webp" alt="MD Mohiuddin" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 blur-load" width="600" height="600">
                        </div>
                    </div>
                </div>

                <!-- Bio Card -->
                <div class="col-span-2 scroll-reveal">
                    <div class="h-full p-6 sm:p-8 rounded-3xl bg-dark-card border border-white/5">
                        <h3 class="text-xl sm:text-2xl font-bold mb-4">
                            Hey, I'm <span class="text-primary">Mohiuddin</span> <span class="inline-block animate-wave">&#128075;</span>
                        </h3>
                        <p class="text-gray-400 leading-relaxed text-sm sm:text-base">
                            Full stack developer from Bangladesh. I'm obsessed with building things on the web — there's something about writing code and watching it come to life as a real product that people use. That never gets old.
                        </p>
                    </div>
                </div>

                <!-- Education Card -->
                <div class="col-span-1 scroll-reveal">
                    <div class="h-full p-5 sm:p-6 rounded-3xl bg-dark-card border border-white/5">
                        <div class="w-10 h-10 rounded-xl bg-blue-400/10 flex items-center justify-center mb-4">
                            <i class="fas fa-graduation-cap text-blue-400"></i>
                        </div>
                        <h4 class="font-bold text-sm mb-3">Education</h4>
                        <div class="space-y-3">
                            <div>
                                <p class="text-white text-xs font-semibold">Govt. Borhamganj College</p>
                                <p class="text-gray-500 text-[11px]">2025 — Present</p>
                            </div>
                            <div>
                                <p class="text-white text-xs font-semibold">Rahmania Dakhil Madrasha</p>
                                <p class="text-gray-500 text-[11px]">2023 — 2025</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats Card -->
                <div class="col-span-1 scroll-reveal">
                    <div class="h-full p-5 sm:p-6 rounded-3xl bg-dark-card border border-white/5">
                        <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
                            <i class="fas fa-chart-line text-primary"></i>
                        </div>
                        <h4 class="font-bold text-sm mb-4">By the Numbers</h4>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="text-gray-400 text-xs">Years Coding</span>
                                <span class="text-primary font-bold text-sm counter" data-target="3">0</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-400 text-xs">Projects Shipped</span>
                                <span class="text-secondary font-bold text-sm counter" data-target="15">0</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-400 text-xs">Technologies</span>
                                <span class="text-accent font-bold text-sm counter" data-target="10">0</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- What I Enjoy Card -->
                <div class="col-span-1 scroll-reveal">
                    <div class="h-full p-5 sm:p-6 rounded-3xl bg-dark-card border border-white/5">
                        <div class="w-10 h-10 rounded-xl bg-accent/10 flex items-center justify-center mb-4">
                            <i class="fas fa-heart text-accent"></i>
                        </div>
                        <h4 class="font-bold text-sm mb-3">What I Enjoy</h4>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2 text-gray-400 text-xs">
                                <span class="w-1 h-1 rounded-full bg-accent"></span> Solving real problems
                            </li>
                            <li class="flex items-center gap-2 text-gray-400 text-xs">
                                <span class="w-1 h-1 rounded-full bg-accent"></span> Clean, simple UIs
                            </li>
                            <li class="flex items-center gap-2 text-gray-400 text-xs">
                                <span class="w-1 h-1 rounded-full bg-accent"></span> Making things faster
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- CTA Card -->
                <div class="col-span-2 scroll-reveal">
                    <div class="h-full p-6 sm:p-8 rounded-3xl bg-gradient-to-br from-primary/10 to-accent/10 border border-primary/10 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <div>
                            <h4 class="font-bold text-lg mb-1">Want to work together?</h4>
                            <p class="text-gray-400 text-sm">I'm always open to interesting projects and conversations.</p>
                        </div>
                        <a href="#contact" class="px-6 py-3 rounded-xl bg-gradient-to-r from-primary to-blue-600 font-semibold text-sm hover:shadow-[0_0_30px_rgba(59,130,246,0.4)] hover:scale-105 transition-all duration-300 whitespace-nowrap flex items-center gap-2">
                            <i class="fas fa-comments"></i> Say Hi
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Tech Stack Section -->
    <section id="techstack" class="py-24 relative bg-dark-surface/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-20 scroll-reveal">
                <span class="text-primary font-mono text-sm tracking-widest uppercase">Technologies I Use Daily</span>
                <h2 class="text-4xl sm:text-5xl font-black mt-4 mb-6">Tech <span class="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">Stack</span></h2>
                <div class="w-20 h-1 bg-gradient-to-r from-primary to-accent mx-auto rounded-full mb-6"></div>
                <p class="text-gray-500 max-w-xl mx-auto text-sm leading-relaxed">The tools and technologies I use to build, test, and ship web applications.</p>
            </div>

            <!-- Frontend -->
            <div class="mb-16 scroll-reveal">
                <h3 class="text-xl font-bold mb-8 flex items-center gap-3">
                    <span class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary"><i class="fas fa-palette"></i></span>
                    Frontend
                </h3>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
                    <div class="tech-card group p-6 rounded-2xl bg-dark-card border border-white/5 hover:border-primary/30 transition-all duration-500 hover:scale-105 hover:shadow-[0_0_30px_rgba(59,130,246,0.1)] cursor-pointer text-center">
                        <div class="text-4xl mb-3 group-hover:scale-110 transition-transform duration-300" style="color:#E34F26"><i class="fab fa-html5"></i></div>
                        <p class="font-semibold text-sm">HTML5</p>
                    </div>
                    <div class="tech-card group p-6 rounded-2xl bg-dark-card border border-white/5 hover:border-secondary/30 transition-all duration-500 hover:scale-105 hover:shadow-[0_0_30px_rgba(6,182,212,0.1)] cursor-pointer text-center">
                        <div class="text-4xl mb-3 group-hover:scale-110 transition-transform duration-300" style="color:#1572B6"><i class="fab fa-css3-alt"></i></div>
                        <p class="font-semibold text-sm">CSS3</p>
                    </div>
                    <div class="tech-card group p-6 rounded-2xl bg-dark-card border border-white/5 hover:border-cyan-400/30 transition-all duration-500 hover:scale-105 hover:shadow-[0_0_30px_rgba(34,211,238,0.1)] cursor-pointer text-center">
                        <div class="text-4xl mb-3 group-hover:scale-110 transition-transform duration-300" style="color:#06B6D4"><i class="fas fa-wind"></i></div>
                        <p class="font-semibold text-sm">Tailwind CSS</p>
                    </div>
                    <div class="tech-card group p-6 rounded-2xl bg-dark-card border border-white/5 hover:border-purple-400/30 transition-all duration-500 hover:scale-105 hover:shadow-[0_0_30px_rgba(168,85,247,0.1)] cursor-pointer text-center">
                        <div class="text-4xl mb-3 group-hover:scale-110 transition-transform duration-300" style="color:#7952B3"><i class="fab fa-bootstrap"></i></div>
                        <p class="font-semibold text-sm">Bootstrap</p>
                    </div>
                    <div class="tech-card group p-6 rounded-2xl bg-dark-card border border-white/5 hover:border-yellow-400/30 transition-all duration-500 hover:scale-105 hover:shadow-[0_0_30px_rgba(250,204,21,0.1)] cursor-pointer text-center">
                        <div class="text-4xl mb-3 group-hover:scale-110 transition-transform duration-300" style="color:#F7DF1E"><i class="fab fa-js"></i></div>
                        <p class="font-semibold text-sm">JavaScript</p>
                    </div>
                    <div class="tech-card group p-6 rounded-2xl bg-dark-card border border-white/5 hover:border-blue-400/30 transition-all duration-500 hover:scale-105 hover:shadow-[0_0_30px_rgba(96,165,250,0.1)] cursor-pointer text-center">
                        <div class="text-4xl mb-3 group-hover:scale-110 transition-transform duration-300" style="color:#0769AD"><i class="fab fa-node-js"></i></div>
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
                        <div class="text-4xl mb-3 group-hover:scale-110 transition-transform duration-300" style="color:#777BB4"><i class="fab fa-php"></i></div>
                        <p class="font-semibold text-sm">PHP</p>
                    </div>
                    <div class="tech-card group p-6 rounded-2xl bg-dark-card border border-white/5 hover:border-orange-400/30 transition-all duration-500 hover:scale-105 hover:shadow-[0_0_30px_rgba(251,146,60,0.1)] cursor-pointer text-center">
                        <div class="text-4xl mb-3 group-hover:scale-110 transition-transform duration-300" style="color:#4479A1"><i class="fas fa-database"></i></div>
                        <p class="font-semibold text-sm">MySQL</p>
                    </div>
                    <div class="tech-card group p-6 rounded-2xl bg-dark-card border border-white/5 hover:border-green-400/30 transition-all duration-500 hover:scale-105 hover:shadow-[0_0_30px_rgba(74,222,128,0.1)] cursor-pointer text-center">
                        <div class="text-4xl mb-3 group-hover:scale-110 transition-transform duration-300" style="color:#4ADE80"><i class="fas fa-plug"></i></div>
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
                        <div class="text-3xl mb-2 group-hover:scale-110 transition-transform duration-300" style="color:#F05032"><i class="fab fa-git-alt"></i></div>
                        <p class="font-semibold text-sm">Git</p>
                    </div>
                    <div class="tech-card group p-5 rounded-2xl bg-dark-card border border-white/5 hover:border-gray-300/30 transition-all duration-500 hover:scale-105 cursor-pointer text-center">
                        <div class="text-3xl mb-2 group-hover:scale-110 transition-transform duration-300" style="color:#fff"><i class="fab fa-github"></i></div>
                        <p class="font-semibold text-sm">GitHub</p>
                    </div>
                    <div class="tech-card group p-5 rounded-2xl bg-dark-card border border-white/5 hover:border-blue-400/30 transition-all duration-500 hover:scale-105 cursor-pointer text-center">
                        <div class="text-3xl mb-2 group-hover:scale-110 transition-transform duration-300" style="color:#007ACC"><i class="fas fa-code"></i></div>
                        <p class="font-semibold text-sm">VS Code</p>
                    </div>
                    <div class="tech-card group p-5 rounded-2xl bg-dark-card border border-white/5 hover:border-orange-400/30 transition-all duration-500 hover:scale-105 cursor-pointer text-center">
                        <div class="text-3xl mb-2 group-hover:scale-110 transition-transform duration-300" style="color:#FF6C37"><i class="fas fa-paper-plane"></i></div>
                        <p class="font-semibold text-sm">Postman</p>
                    </div>
                    <div class="tech-card group p-5 rounded-2xl bg-dark-card border border-white/5 hover:border-blue-400/30 transition-all duration-500 hover:scale-105 cursor-pointer text-center">
                        <div class="text-3xl mb-2 group-hover:scale-110 transition-transform duration-300" style="color:#FF6C37"><i class="fas fa-server"></i></div>
                        <p class="font-semibold text-sm">cPanel</p>
                    </div>
                    <div class="tech-card group p-5 rounded-2xl bg-dark-card border border-white/5 hover:border-red-400/30 transition-all duration-500 hover:scale-105 cursor-pointer text-center">
                        <div class="text-3xl mb-2 group-hover:scale-110 transition-transform duration-300" style="color:#FCC624"><i class="fab fa-linux"></i></div>
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
            <!-- Section Header -->
            <div class="text-center mb-20 scroll-reveal">
                <span class="text-primary font-mono text-sm tracking-widest uppercase">Things I've Made</span>
                <h2 class="text-4xl sm:text-5xl font-black mt-4 mb-6">Featured <span class="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">Projects</span></h2>
                <div class="w-20 h-1 bg-gradient-to-r from-primary to-accent mx-auto rounded-full mb-6"></div>
                <p class="text-gray-500 max-w-xl mx-auto text-sm leading-relaxed">A selection of projects I've built from scratch. Each one solved a real problem.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <a href="https://dentdock.xyz" target="_blank" class="project-card group scroll-reveal rounded-3xl bg-dark-card border border-white/5 overflow-hidden hover:border-primary/20 transition-all duration-500 hover:shadow-[0_20px_60px_rgba(59,130,246,0.1)] block">
                    <div class="relative overflow-hidden aspect-video bg-gradient-to-br from-primary/20 to-accent/20">
                        <img src="data:image/webp;base64,UklGRiIAAABXRUJQVlA4IBYAAAAwAQCdASoBAAEADsD+JaQAA3AAAAAA" data-src="assets/images/dentcare-dashboard.webp" alt="DentDock SaaS Dashboard" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 blur-load" width="800" height="450">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors duration-300">DentDock SaaS</h3>
                        <p class="text-gray-400 text-sm mb-4 leading-relaxed">Dental clinic management platform used by multiple clinics daily. Handles appointments, patient records, billing, and revenue tracking — all in one place.</p>
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
                        <img src="data:image/webp;base64,UklGRiIAAABXRUJQVlA4IBYAAAAwAQCdASoBAAEADsD+JaQAA3AAAAAA" data-src="assets/images/ems-dashboard.webp" alt="EMS Dashboard" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 blur-load" width="800" height="450">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-secondary transition-colors duration-300">Education Management System</h3>
                        <p class="text-gray-400 text-sm mb-4 leading-relaxed">School management system managing 200+ student records with attendance tracking, exam management, and automated SMS notifications for parents.</p>
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
                        <img src="data:image/webp;base64,UklGRiIAAABXRUJQVlA4IBYAAAAwAQCdASoBAAEADsD+JaQAA3AAAAAA" data-src="assets/images/bsp-cover.webp" alt="Bondhon Sonchoy Prokolpo App" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 blur-load" width="800" height="450">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-accent transition-colors duration-300">Bondhon Sonchoy Prokolpo</h3>
                        <p class="text-gray-400 text-sm mb-4 leading-relaxed">A savings and fund collection platform for managing group contributions, tracking deposits, and handling disbursements — built for real community use.</p>
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
                <span class="text-primary font-mono text-sm tracking-widest uppercase">What I Can Do For You</span>
                <h2 class="text-4xl sm:text-5xl font-black mt-4 mb-6">What I Can <span class="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">Build</span></h2>
                <div class="w-20 h-1 bg-gradient-to-r from-primary to-accent mx-auto rounded-full mb-6"></div>
                <p class="text-gray-500 max-w-xl mx-auto text-sm leading-relaxed">Full stack services from concept to deployment. No half measures.</p>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
                <!-- Service 1 -->
                <div class="service-card group p-6 sm:p-8 rounded-3xl bg-dark-card border border-white/5 hover:border-primary/20 transition-all duration-500 hover:scale-105 hover:shadow-[0_20px_60px_rgba(59,130,246,0.08)] scroll-reveal cursor-pointer">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-2xl bg-gradient-to-br from-primary/20 to-primary/5 flex items-center justify-center mb-5 sm:mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                        <i class="fas fa-code text-xl sm:text-2xl text-primary"></i>
                    </div>
                    <h3 class="text-base sm:text-lg font-bold mb-2 sm:mb-3 group-hover:text-primary transition-colors duration-300">Frontend Development</h3>
                    <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">Clean, fast interfaces that work on every device. I obsess over load times and accessibility because that's what users actually notice.</p>
                </div>

                <!-- Service 2 -->
                <div class="service-card group p-6 sm:p-8 rounded-3xl bg-dark-card border border-white/5 hover:border-secondary/20 transition-all duration-500 hover:scale-105 hover:shadow-[0_20px_60px_rgba(6,182,212,0.08)] scroll-reveal cursor-pointer">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-2xl bg-gradient-to-br from-secondary/20 to-secondary/5 flex items-center justify-center mb-5 sm:mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                        <i class="fas fa-server text-xl sm:text-2xl text-secondary"></i>
                    </div>
                    <h3 class="text-base sm:text-lg font-bold mb-2 sm:mb-3 group-hover:text-secondary transition-colors duration-300">Backend Development</h3>
                    <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">PHP and MySQL backends that handle real traffic. Clean code, proper error handling, and no shortcuts that break in production.</p>
                </div>

                <!-- Service 3 -->
                <div class="service-card group p-6 sm:p-8 rounded-3xl bg-dark-card border border-white/5 hover:border-accent/20 transition-all duration-500 hover:scale-105 hover:shadow-[0_20px_60px_rgba(139,92,246,0.08)] scroll-reveal cursor-pointer">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-2xl bg-gradient-to-br from-accent/20 to-accent/5 flex items-center justify-center mb-5 sm:mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                        <i class="fas fa-plug text-xl sm:text-2xl text-accent"></i>
                    </div>
                    <h3 class="text-base sm:text-lg font-bold mb-2 sm:mb-3 group-hover:text-accent transition-colors duration-300">API Development</h3>
                    <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">REST APIs with authentication, validation, and documentation. Built for apps that need to talk to each other reliably.</p>
                </div>

                <!-- Service 4 -->
                <div class="service-card group p-6 sm:p-8 rounded-3xl bg-dark-card border border-white/5 hover:border-orange-400/20 transition-all duration-500 hover:scale-105 hover:shadow-[0_20px_60px_rgba(251,146,60,0.08)] scroll-reveal cursor-pointer">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-2xl bg-gradient-to-br from-orange-400/20 to-orange-400/5 flex items-center justify-center mb-5 sm:mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                        <i class="fas fa-database text-xl sm:text-2xl text-orange-400"></i>
                    </div>
                    <h3 class="text-base sm:text-lg font-bold mb-2 sm:mb-3 group-hover:text-orange-400 transition-colors duration-300">Database Design</h3>
                    <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">MySQL schemas that are normalized, indexed, and built to scale. Data architecture that doesn't slow down when your app grows.</p>
                </div>

                <!-- Service 5 -->
                <div class="service-card group p-6 sm:p-8 rounded-3xl bg-dark-card border border-white/5 hover:border-green-400/20 transition-all duration-500 hover:scale-105 hover:shadow-[0_20px_60px_rgba(74,222,128,0.08)] scroll-reveal cursor-pointer">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-2xl bg-gradient-to-br from-green-400/20 to-green-400/5 flex items-center justify-center mb-5 sm:mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                        <i class="fas fa-cloud text-xl sm:text-2xl text-green-400"></i>
                    </div>
                    <h3 class="text-base sm:text-lg font-bold mb-2 sm:mb-3 group-hover:text-green-400 transition-colors duration-300">SaaS Development</h3>
                    <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">Full SaaS products from idea to deployment. Multi-tenancy, auth, subscriptions — the whole thing, built right.</p>
                </div>

                <!-- Service 6 -->
                <div class="service-card group p-6 sm:p-8 rounded-3xl bg-dark-card border border-white/5 hover:border-pink-400/20 transition-all duration-500 hover:scale-105 hover:shadow-[0_20px_60px_rgba(236,72,153,0.08)] scroll-reveal cursor-pointer">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-2xl bg-gradient-to-br from-pink-400/20 to-pink-400/5 flex items-center justify-center mb-5 sm:mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                        <i class="fas fa-rocket text-xl sm:text-2xl text-pink-400"></i>
                    </div>
                    <h3 class="text-base sm:text-lg font-bold mb-2 sm:mb-3 group-hover:text-pink-400 transition-colors duration-300">Performance Optimization</h3>
                    <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">Speed matters. I optimize load times, reduce bundle sizes, and make sure your app feels fast on every connection.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20 scroll-reveal">
                <span class="text-primary font-mono text-sm tracking-widest uppercase">Let's Talk</span>
                <h2 class="text-4xl sm:text-5xl font-black mt-4 mb-6">Contact <span class="bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">Me</span></h2>
                <div class="w-20 h-1 bg-gradient-to-r from-primary to-accent mx-auto rounded-full mb-6"></div>
                <p class="text-gray-500 max-w-xl mx-auto text-sm leading-relaxed">Have a project in mind? I'd love to hear about it. Drop me a message.</p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
                <!-- Contact Info -->
                <div class="scroll-reveal">
                    <h3 class="text-2xl font-bold mb-6">Got a project? <span class="text-primary">Let's build it.</span></h3>
                    <p class="text-gray-400 leading-relaxed mb-8">I'm always open to new opportunities and interesting projects. Whether you have a question or just want to say hi, I'll try my best to get back to you.</p>

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