<?php
require_once("config.php");
function sendMessage($messageText)
{
    $url = "https://graph.facebook.com/v24.0/me/messages?access_token=" . PAGE_ACCESS_TOKEN;

    $jsonData = [
        "messaging_type" => "MESSAGE_TAG",    
        "tag" => "ACCOUNT_UPDATE",           

        "recipient" => [
            "id" => recipientId
        ],
        "message" => [
            "text" => $messageText
        ]
    ];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($jsonData));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: application/json');

    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';
    $subject = $_POST['subject'] ?? '';

    if (empty($name) || empty($email) || empty($message)) {
        echo json_encode([
            'success' => false,
            'message' => 'All fields are required.'
        ]);
        exit;
    }

    $message_text = "📩 New Contact Form Submission from Portfolio Website\n\n" .
        "Name: $name\n" .
        "Email: $email\n" .
        "Subject: $subject\n" .
        "Message: $message";

    sendMessage($message_text);
    echo json_encode([
        'success' => true,
        'message' => 'Message Sent Successfully!'
    ]);

    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio of MD Mohiuddin - Full Stack Web Developer. View projects, skills, and resume.">
    <meta name="keywords" content="Portfolio, Full Stack Web Developer, HTML, CSS, Bootstrap, Tailwind CSS, JavaScript, PHP, MySQL">
    <meta name="author" content="MD Mohiuddin">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= SITE_URL ?>">
    <meta property="og:title" content="MD Mohiuddin - Full Stack Web Developer">
    <meta property="og:description" content="Portfolio of MD Mohiuddin.">
    <meta property="og:image" content="<?= SITE_URL ?>/assets/images/mohiuddin.webp?v=<?= time(); ?>">

    <title>MD Mohiuddin | Full Stack Web Developer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Poppins:wght@500;700&display=swap" rel="stylesheet">

    <style>
        /* =========================================
           1. CSS Variables & Theme Setup
           ========================================= */
        :root {
            --primary-color: #4f46e5;
            --primary-hover: #4338ca;
            --secondary-color: #64748b;
            --bg-body: #f8f9fa;
            --bg-card: #ffffff;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.1);
            --timeline-line: #cbd5e1;
        }

        /* Dark Mode Overrides */
        [data-bs-theme="dark"] {
            --primary-color: #6366f1;
            --primary-hover: #818cf8;
            --secondary-color: #94a3b8;
            --bg-body: #0f172a;
            --bg-card: #1e293b;
            --text-main: #f1f5f9;
            --text-muted: #cbd5e1;
            --border-color: #334155;
            --shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.5);
            --timeline-line: #334155;
        }

        /* General Styles */
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-body);
            color: var(--text-main);
            transition: background-color 0.3s ease, color 0.3s ease;
            overflow-x: hidden;
            /* CRITICAL: Smooth scrolling implemented here */
            scroll-behavior: smooth;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
        }

        a {
            text-decoration: none;
        }

        section {
            padding: 80px 0;
            overflow: hidden;
        }

        /* =========================================
           2. Custom Scrollbar Styles
           ========================================= */
        /* Chrome, Edge, Safari */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: var(--bg-body);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-color);
            border-radius: 10px;
            border: 3px solid var(--bg-body);
            /* Creates padding effect */
            transition: background 0.3s;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-hover);
        }

        /* Firefox */
        body {
            scrollbar-color: var(--primary-color) var(--bg-body);
            scrollbar-width: thin;
        }


        /* =========================================
           3. Preloader
           ========================================= */
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: var(--bg-body);
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: opacity 0.5s ease-out, visibility 0.5s ease-out;
        }

        .spinner {
            width: 50px;
            height: 50px;
            border: 5px solid var(--secondary-color);
            border-top: 5px solid var(--primary-color);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* =========================================
           4. Navbar
           ========================================= */
        .navbar {
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        [data-bs-theme="dark"] .navbar {
            background-color: rgba(15, 23, 42, 0.95);
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.3);
        }

        .nav-link {
            color: var(--text-main) !important;
            font-weight: 500;
            position: relative;
            padding: 5px 0;
            margin: 0 10px;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--primary-color);
            transition: width 0.3s;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }

        .theme-toggle {
            cursor: pointer;
            padding: 8px;
            border-radius: 50%;
            transition: background 0.3s;
            color: var(--text-main);
        }

        .theme-toggle:hover {
            background-color: rgba(128, 128, 128, 0.1);
        }

        /* =========================================
           5. Hero Section
           ========================================= */
        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
        }

        .hero-img {
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            width: 100%;
            max-width: 300px;
            animation: morph 8s ease-in-out infinite;
            box-shadow: var(--shadow);
            border: 5px solid var(--primary-color);
        }

        @keyframes morph {
            0% {
                border-radius: 60% 40% 30% 70%/60% 30% 70% 40%;
            }

            50% {
                border-radius: 30% 60% 70% 40%/50% 60% 30% 60%;
            }

            100% {
                border-radius: 60% 40% 30% 70%/60% 30% 70% 40%;
            }
        }

        .btn-custom {
            background-color: var(--primary-color);
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            transition: all 0.3s;
            border: none;
        }

        .btn-custom:hover {
            background-color: var(--primary-hover);
            transform: translateY(-3px);
            color: white;
            box-shadow: 0 10px 20px rgba(79, 70, 229, 0.3);
        }

        /* =========================================
           6. Utility Classes & ANIMATION REFINEMENT
           ========================================= */
        .section-title {
            position: relative;
            margin-bottom: 40px;
            /* Reduced margin for download link */
            text-align: center;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--text-main);
            display: inline-block;
            position: relative;
            z-index: 1;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            width: 50px;
            height: 4px;
            background: var(--primary-color);
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .card-custom {
            background-color: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 15px;
            padding: 30px;
            transition: all 0.3s ease;
            height: 100%;
        }

        .card-custom:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow);
            border-color: var(--primary-color);
        }

        /* Scroll Animations - Smoother and Faster Transitions */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .reveal-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .reveal-right {
            opacity: 0;
            transform: translateX(50px);
            transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .reveal-zoom {
            opacity: 0;
            transform: scale(0.95);
            transition: all 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .reveal.active,
        .reveal-left.active,
        .reveal-right.active,
        .reveal-zoom.active {
            opacity: 1;
            transform: translateY(0) translateX(0) scale(1);
        }


        /* =========================================
           7. Skills Section
           ========================================= */
        .skill-list {
            list-style: none;
            padding-left: 0;
        }

        .skill-list li {
            margin-bottom: 10px;
            padding: 8px 0;
            border-bottom: 1px dashed var(--border-color);
            color: var(--text-main);
        }

        .skill-list li:last-child {
            border-bottom: none;
        }

        .skill-list i {
            color: var(--primary-color);
            margin-right: 10px;
        }

        /* =========================================
           8. Resume Timeline
           ========================================= */
        .timeline {
            position: relative;
            padding-left: 30px;
            border-left: 2px solid var(--timeline-line);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 40px;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -36px;
            top: 5px;
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: var(--primary-color);
            border: 2px solid var(--bg-body);
        }

        .timeline-date {
            font-size: 0.9rem;
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 5px;
        }

        .timeline-content h4 {
            color: var(--text-main);
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        .timeline-content p {
            color: var(--text-muted);
            font-size: 0.95rem;
            margin: 0;
        }

        /* =========================================
           9. Projects
           ========================================= */
        .project-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
            /* Subtle zoom on hover for better UX */
            transition: transform 0.4s ease;
        }

        .card-custom:hover .project-img {
            transform: scale(1.05);
        }

        .badge-tech {
            background: rgba(79, 70, 229, 0.1);
            color: var(--primary-color);
            font-size: 0.8rem;
            padding: 5px 10px;
            border-radius: 20px;
            margin-right: 5px;
            display: inline-block;
            margin-bottom: 5px;
        }

        /* =========================================
           10. Footer & Back to Top
           ========================================= */
        footer {
            background-color: var(--bg-card);
            padding: 40px 0;
            border-top: 1px solid var(--border-color);
            text-align: center;
            color: var(--text-muted);
        }

        .social-link {
            width: 40px;
            height: 40px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            background-color: var(--bg-body);
            color: var(--text-main);
            margin: 0 5px;
            transition: all 0.3s;
            border: 1px solid var(--border-color);
        }

        .social-link:hover {
            background-color: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }

        #backToTop {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: var(--primary-color);
            color: white;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s;
            z-index: 100;
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        #backToTop.show {
            opacity: 1;
            visibility: visible;
        }

        #backToTop:hover {
            transform: translateY(-3px);
            background-color: var(--primary-hover);
        }

        /* Form Control Overrides for Dark Mode */
        .form-control {
            background-color: var(--bg-body);
            border-color: var(--border-color);
            color: var(--text-main);
        }

        .form-control:focus {
            background-color: var(--bg-body);
            color: var(--text-main);
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(79, 70, 229, 0.25);
        }

        .downloadResumeBtn {
            color: var(--text-main);
            border: 2px solid var(--border-color);
            background-color: transparent;
            padding: 8px 25px;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .downloadResumeBtn:hover {
            color: var(--bg-body);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(79, 70, 229, 0.3);
            background-color: var(--primary-color);
        }
    </style>
    
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W6HSXKVD');</script>
<!-- End Google Tag Manager -->
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W6HSXKVD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    <header>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <!-- Logo Name: MohiUddinDev -->
            <a class="navbar-brand fs-5 fw-bold" href="#home" style="color: var(--text-main); letter-spacing: 1px;">
                <span style="color: var(--primary-color);">MD</span>Mohiuddin
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Toggle navigation">
                <span class="bi bi-list" style="color: var(--text-main);"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#resume">Resume</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item ms-lg-3">
                        <button class="theme-toggle btn btn-sm" id="themeToggle" aria-label="Toggle Dark Mode">
                            <i class="bi bi-moon-stars-fill"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </header>
   <main>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-1 order-2 reveal-left">
                    <h5 style="color: var(--primary-color); font-weight: 600;">Hello, I am</h5>
                    <h1 class="display-3 fw-bold mb-3" style="color: var(--text-main);">MD Mohiuddin</h1>
                    <p class="lead mb-4" style="color: var(--text-muted);">
                        <span style="color: var(--primary-color); font-weight: 600;">Full Stack Web Developer</span>
                        — Expert in Front-end and Back-end development with HTML, CSS, JavaScript, PHP, Bootstrap, Tailwind CSS, jQuery, and REST APIs.
                    </p>

                    <div class="d-flex flex-column flex-md-row gap-2">
                        <a href="#projects" class="btn btn-custom w-100 w-md-auto">View My Work</a>
                        <a href="/assets/files/resume.pdf" class="btn btn-primary rounded-pill px-4 py-2 downloadResumeBtn w-100 w-md-auto" download aria-label="Download Resume">
                            <i class="bi bi-download me-2"></i> Download Resume
                        </a>
                    </div>

                </div>
                <div class="col-lg-6 order-lg-2 order-1 mb-5 mb-lg-0 text-center reveal-right">
                <img src="/assets/images/mohiuddin.webp?v=<?= time(); ?>" 
     alt="MD Mohiuddin Photo" 
     class="hero-img" 
     width="500" height="300" 
     style="aspect-ratio:1/1;" 
     fetchpriority="high">

                </div>
            </div>
        </div>
    </section>

    <!-- About & Skills Section -->
    <section id="about">
        <div class="container">
            <!-- Section Title -->
            <div class="section-title reveal-zoom">
                <h2>About Me</h2>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 reveal-left">
                    <h3 style="color: var(--text-main);" class="mb-4">I build responsive and functional web
                        applications.</h3>
                    <p style="color: var(--text-muted);">
                        I am a Full Stack Web Developer skilled in HTML, CSS, Bootstrap, Tailwind CSS, JavaScript, jQuery, PHP, and
                        MySQL. I focus on creating responsive and user-friendly interfaces, working on both front-end
                        and back-end development.
                    </p>
                    <p style="color: var(--text-muted);">
                        My objective is to create maintainable, secure, and functional solutions that meet project
                        requirements. I constantly enjoy learning new technologies and applying them to improve web
                        development projects.
                    </p>
                    <div class="row mt-4">
                        <div class="col-6 mb-3">
                            <h2 class="fw-bold" style="color: var(--primary-color);">5+</h2>
                            <p style="color: var(--text-muted);">Years Experience</p>
                        </div>
                        <div class="col-6 mb-3">
                            <h2 class="fw-bold" style="color: var(--primary-color);">3+</h2>
                            <p style="color: var(--text-muted);">Major Projects</p>
                        </div>
                    </div>
                </div>

                <!-- Skills -->
                <div class="col-lg-6 reveal-right">
                    <h3 style="color: var(--text-main);" class="mb-4">Skills</h3>
                    <div class="card-custom">
                        <ul class="skill-list">
                            <li><i class="bi bi-code-slash"></i> **Languages:** HTML, CSS, JavaScript (ES6+), PHP, MySQL
                            </li>
                            <li><i class="bi bi-palette"></i> **Frameworks/Libraries:** Bootstrap, Tailwind CSS, jQuery
                            </li>
                            <li><i class="bi bi-layout-text-window-reverse"></i> **Design/Development:** Responsive Web
                                Design, Front-End & Back-End Development</li>
                            <li><i class="bi bi-app-indicator"></i> **Application Focus:** Web Application Development,
                                API Integration (RESTful APIs)</li>
                            <li><i class="bi bi-server"></i> **Database & Versioning:** Database Management, Version
                                Control (Git/GitHub)</li>
                            <li><i class="bi bi-shield-lock"></i> **Other Skills:** Debugging & Problem-Solving,
                                Attention to Functional Code</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" style="background-color: rgba(79, 70, 229, 0.03);">
        <div class="container">
            <div class="section-title reveal-zoom">
                <h2>Featured Projects</h2>
            </div>
            <div class="row g-4">

                <!-- Project 1: Student Management System -->
                <div class="col-md-6 col-lg-4 reveal">
                    <div class="card-custom p-0 overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img src="/assets/images/ems-dashboard.webp" class="project-img rounded-0 mb-0" alt="Student Management System Project" loading="lazy">
                        </div>
                        <div class="p-4">
                            <h3 style="color: var(--text-main);">Student Management System</h3>
                            <div class="mb-3">
                                <span class="badge-tech">PHP</span>
                                <span class="badge-tech">MySQL</span>
                                <span class="badge-tech">Bootsrap</span>
                                <span class="badge-tech">APIs</span>
                            </div>
                            <p style="color: var(--text-muted);">
                                Developed a system for Mojumder IT & Computer Training Center to manage student
                                information, attendance, and all institutional data. Ensures seamless front-end and
                                back-end performance.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Project 2: Bondhon Sonchoy Prokolpo (Savings App) -->
                <div class="col-md-6 col-lg-4 reveal">
                    <div class="card-custom p-0 overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img src="/assets/images/bsp-cover.webp" class="project-img rounded-0 mb-0" alt="Bondhon Sonchoy Prokolpo App" loading="lazy">
                        </div>
                        <div class="p-4">
                            <h3 style="color: var(--text-main);">Bondhon Sonchoy Prokolpo App</h3>
                            <div class="mb-3">
                                <span class="badge-tech">HTML

                                </span>
                                <span class="badge-tech">Bootstrap</span>
                                <span class="badge-tech">jQuery</span>
                                <span class="badge-tech">PHP</span>
                            </div>
                            <p style="color: var(--text-muted);">
                                A specialized system created to manage all financial operations and data efficiently for
                                Bondhon Sonchoy Prokolpo, featuring responsive and interactive web interfaces.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Project 3: Dent Care Application -->
                <div class="col-md-6 col-lg-4 reveal">
                    <div class="card-custom p-0 overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img src="/assets/images/dentcare-dashboard.webp" class="project-img rounded-0 mb-0" alt="Dent Care Application Project" loading="lazy">
                        </div>
                        <div class="p-4">
                            <h3 style="color: var(--text-main);">Dent Care Application</h3>
                            <div class="mb-3">
                                <span class="badge-tech">PHP</span>
                                <span class="badge-tech">MySQL</span>
                                <span class="badge-tech">Tailwind CSS</span>
                                <span class="badge-tech">jQuery</span>
                            </div>
                            <p style="color: var(--text-muted);">
                                Web-based application built to securely manage patient records, appointments, and dental
                                treatment history, focusing on usability and data integrity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resume Section -->
    <section id="resume">
        <div class="container">
            <div class="section-title reveal-zoom">
                <h2>Resume</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 reveal-left">
                    <h3 class="mb-4" style="color: var(--text-main);">Work Experience</h3>
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-date">2020 - Now</div>
                            <div class="timeline-content">
                                <h4>Mojumder IT & Computer Training Center</h4>
                                <p>Web Developer</p>
                                <p>Developed and maintain the Student Management System. Responsible for full-stack
                                    development using PHP/MySQL.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-date">Project</div>
                            <div class="timeline-content">
                                <h4>Dent Care Application Developer</h4>
                                <p>Front-End, Back-End Development</p>
                                <p>Developed a full-stack, secure web application for managing patient data and
                                    appointments for a dental practice using PHP and MySQL.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-date">Full Project</div>
                            <div class="timeline-content">
                                <h4>Bondhon Sonchoy Prokolpo</h4>
                                <p>Web Developer</p>
                                <p>Developed a complete data management and reporting system for the organization,
                                    collaborating to ensure the app met all project requirements.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 reveal-right">
                    <h3 class="mb-4" style="color: var(--text-main);">Education</h3>
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-date">Ongoing</div>
                            <div class="timeline-content">
                                <h4>Higher Education - Humanities</h4>
                                <p>GOVERNMENT BARHAMGANJ COLLEGE</p>
                                <p>Currently pursuing studies in the Humanities field.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-date">2023 - 24</div>
                            <div class="timeline-content">
                                <h4>Dakhil (SSC Equivalent)</h4>
                                <p>RAHMANIA DAKHIL MADRASHA</p>
                                <p>Completed Dakhil (equivalent to SSC/O-Levels).</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-date">2022</div>
                            <div class="timeline-content">
                                <h4>JDC (Junior Dakhil Certificate)</h4>
                                <p>TAMIRUL MILLAT KAMIL MADRASHA - DHAKA</p>
                                <p>Completed JDC (Junior Dakhil Certificate).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="section-title reveal-zoom">
                <h2>Get In Touch</h2>
            </div>
            <div class="row g-5">
                <div class="col-lg-5 reveal-left">
                    <h3 class="mb-4" style="color: var(--text-main);">Let's Connect</h3>
                    <p style="color: var(--text-muted);">I'm open to new full-stack opportunities and collaborations.
                        Send me a message, or connect with me using the details below.</p>

                    <div class="mt-4">
                    <div class="d-flex align-items-center mb-3">
    <div class="me-3 text-primary fs-4"><i class="bi bi-envelope" aria-hidden="true"></i></div>
    <div>
        <p class="mb-0" style="color: var(--text-main);"><strong>Email</strong></p>
        <p class="mb-0" style="color: var(--text-muted);">bloggermahim@gmail.com</p>
    </div>
</div>

<div class="d-flex align-items-center mb-3">
    <div class="me-3 text-primary fs-4"><i class="bi bi-geo-alt" aria-hidden="true"></i></div>
    <div>
        <p class="mb-0" style="color: var(--text-main);"><strong>Location</strong></p>
        <p class="mb-0" style="color: var(--text-muted);">Shibchar, Madaripur-7930, Dhaka, Bangladesh</p>
    </div>
</div>

<div class="d-flex align-items-center mb-3">
    <div class="me-3 text-primary fs-4"><i class="bi bi-linkedin" aria-hidden="true"></i></div>
    <div>
        <p class="mb-0" style="color: var(--text-main);"><strong>LinkedIn</strong></p>
        <p class="mb-0" style="color: var(--text-muted);">linkedin.com/in/mohiuddinmahim</p>
    </div>
</div>

                    </div>
                </div>

                <div class="col-lg-7 reveal-right">
                    <div class="card-custom">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" style="color: var(--text-main);">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" style="color: var(--text-main);">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="your@email.com" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" style="color: var(--text-main);">Subject</label>
                                    <input type="text" class="form-control" name="subject" placeholder="Opportunity or Project Discussion">
                                </div>
                                <div class="col-12">
                                    <label class="form-label" style="color: var(--text-main);">Message</label>
                                    <textarea class="form-control" rows="5" name="message" placeholder="Tell me about your project..."></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-custom w-100">Send Message</button>
                                </div>
                                <div class="col-12 mt-3">
                                    <div id="formMessage" class="alert d-none" role="alert"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


   </main>
    <!-- Footer -->
    <footer>
        <div class="container">
            <h4 class="fw-bold mb-3" style="color: var(--text-main);">MD Mohiuddin</h4>
            <div class="mb-4">
                <a href="https://www.linkedin.com/in/mohiuddinmahim" class="social-link" target="_blank" aria-label="LinkedIn Profile">
                    <i class="bi bi-linkedin" aria-hidden="true"></i>
                </a>

                <a href="https://www.mohiuddin.mojumderit.com" class="social-link" target="_blank" aria-label="Personal Website">
                    <i class="bi bi-globe" aria-hidden="true"></i>
                </a>

                <a href="mailto:bloggermahim@gmail.com" class="social-link" aria-label="Email">
                    <i class="bi bi-envelope" aria-hidden="true"></i>
                </a>

            </div>
            <p class="mb-0 small">&copy; 2023 MD Mohiuddin. All rights reserved.</p>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTop" aria-label="Back to Top">
        <i class="bi bi-arrow-up"></i>
    </button>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Main Script -->
    <script>
        // 1. Preloader
        window.addEventListener('load', function() {
            const preloader = document.getElementById('preloader');
            setTimeout(() => {
                preloader.style.opacity = '0';
                preloader.style.visibility = 'hidden';
            }, 300);
        });

        // 2. Dark Mode Toggle
        const themeToggle = document.getElementById('themeToggle');
        const icon = themeToggle.querySelector('i');
        const body = document.body;

        // Check local storage for preference
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme === 'dark') {
            enableDarkMode();
        } else {
            disableDarkMode();
        }

        themeToggle.addEventListener('click', () => {
            if (document.documentElement.getAttribute('data-bs-theme') === 'dark') {
                disableDarkMode();
            } else {
                enableDarkMode();
            }
        });

        function enableDarkMode() {
            document.documentElement.setAttribute('data-bs-theme', 'dark');
            icon.classList.remove('bi-moon-stars-fill');
            icon.classList.add('bi-sun-fill');
            localStorage.setItem('theme', 'dark');
        }

        function disableDarkMode() {
            document.documentElement.setAttribute('data-bs-theme', 'light');
            icon.classList.remove('bi-sun-fill');
            icon.classList.add('bi-moon-stars-fill');
            localStorage.setItem('theme', 'light');
        }

        // 3. Navbar Active State on Scroll (ScrollSpy Logic)
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('.nav-link');

        window.addEventListener('scroll', () => {
            let current = '';
            // Use a higher offset (e.g., 300px) for smoother active link changes
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                // Add a check to prevent error if the section has no height
                if (section.offsetHeight === 0) return;

                if (pageYOffset >= (sectionTop - 300)) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').includes(current)) {
                    link.classList.add('active');
                }
            });
        });

        // 4. Scroll Animations (Intersection Observer)
        const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-zoom');

        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target); // Only animate once
                }
            });
        }, {
            root: null,
            threshold: 0.15, // Trigger when 15% visible
        });

        revealElements.forEach(el => revealObserver.observe(el));

        // 5. Back to Top Button
        const backToTopBtn = document.getElementById('backToTop');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTopBtn.classList.add('show');
            } else {
                backToTopBtn.classList.remove('show');
            }
        });

        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        document.addEventListener('DOMContentLoaded', () => {
            const contactForm = document.querySelector('#contact form');
            const submitButton = contactForm ? contactForm.querySelector('button[type="submit"]') : null;
            const formMessage = document.getElementById('formMessage');

            if (contactForm && submitButton) {
                contactForm.addEventListener('submit', async function(e) {
                    e.preventDefault();
                    const originalButtonText = submitButton.innerHTML;
                    submitButton.disabled = true;
                    submitButton.classList.add('btn-loading');
                    submitButton.innerHTML = `
                <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
                Sending...
            `;
                    if (formMessage) {
                        formMessage.classList.add('d-none');
                    }

                    const formData = new FormData(this);

                    try {
                        const response = await fetch('', {
                            method: 'POST',
                            body: formData,
                        });
                        if (!response.ok) {
                            throw new Error(`HTTP error! status: ${response.status}`);
                        }
                        const data = await response.json();

                        if (data.success === true) {
                            console.log('Success:', data.message);
                            updateButtonState(submitButton, originalButtonText, 'Sent!', 'btn-success', formMessage, data.message, 'alert-success');
                            this.reset();

                        } else {
                            console.error('Submission Failed:', data.message);
                            updateButtonState(submitButton, originalButtonText, data.message || 'Failed 🙁', 'btn-danger', formMessage, data.message || 'An unknown error occurred.', 'alert-danger');
                        }

                    } catch (error) {
                        console.error('Fetch Error:', error);
                        updateButtonState(submitButton, originalButtonText, 'Error! Try Again', 'btn-danger', formMessage, 'A network error occurred. Please try again.', 'alert-danger');

                    } finally {}
                });
            }
        });

        function updateButtonState(button, originalText, finalMessage, tempClass, messageElement, persistentMessage, alertClass) {
            button.classList.remove('btn-loading');

            if (messageElement) {
                messageElement.classList.remove('d-none', 'alert-success', 'alert-danger');
                messageElement.classList.add(alertClass);
                messageElement.innerHTML = persistentMessage;
            }

            // 2. Update button for 3 seconds
            button.classList.remove('btn-custom');
            button.classList.add(tempClass);

            button.innerHTML = finalMessage;
            setTimeout(() => {
                button.classList.remove(tempClass);
                button.classList.add('btn-custom');

                button.innerHTML = originalText;
                button.disabled = false;

                if (messageElement) {
                    setTimeout(() => {
                        messageElement.classList.add('d-none');
                    }, 5000);
                }
            }, 3000);
        }
    </script>
</body>

</html>