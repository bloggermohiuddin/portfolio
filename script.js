/* ========================================
   MD Mohiuddin Portfolio - Premium Scripts
   ======================================== */

(function() {
    'use strict';

    // ===== Detect Device =====
    const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    const isTouch = 'ontouchstart' in window || navigator.maxTouchPoints > 0;
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // ===== Preloader =====
    const preloader = document.getElementById('preloader');
    let heroAnimated = false;

    function hidePreloader() {
        if (preloader && !preloader.classList.contains('loaded')) {
            preloader.classList.add('loaded');
            document.body.style.opacity = '1';
            if (!heroAnimated) {
                heroAnimated = true;
                setTimeout(initHeroAnimations, 100);
            }
        }
    }

    window.addEventListener('load', () => setTimeout(hidePreloader, 600));
    setTimeout(hidePreloader, 2500);

    // ===== Cursor Glow Effect (Desktop Only) =====
    const cursorGlow = document.getElementById('cursor-glow');
    const cursorDot = document.getElementById('cursor-dot');
    const cursorRing = document.getElementById('cursor-ring');
    let mouseX = -100, mouseY = -100;
    let glowX = -100, glowY = -100;
    let ringX = -100, ringY = -100;
    let cursorRafId = null;

    if (!isTouch) {
        // Cursor dot tracking (instant)
        document.addEventListener('mousemove', (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
            if (cursorDot) {
                cursorDot.style.left = mouseX + 'px';
                cursorDot.style.top = mouseY + 'px';
            }
        }, { passive: true });

        // Cursor ring tracking (smooth follow)
        function animateCursorRing() {
            ringX += (mouseX - ringX) * 0.15;
            ringY += (mouseY - ringY) * 0.15;
            if (cursorRing) {
                cursorRing.style.left = ringX + 'px';
                cursorRing.style.top = ringY + 'px';
            }
            cursorRafId = requestAnimationFrame(animateCursorRing);
        }
        animateCursorRing();

        // Cursor glow tracking (slow follow)
        if (cursorGlow) {
            function animateCursorGlow() {
                glowX += (mouseX - glowX) * 0.08;
                glowY += (mouseY - glowY) * 0.08;
                cursorGlow.style.left = glowX + 'px';
                cursorGlow.style.top = glowY + 'px';
                requestAnimationFrame(animateCursorGlow);
            }
            animateCursorGlow();
        }

        // Hover effects on interactive elements
        const hoverTargets = 'a, button, .tech-card, .project-card, .service-card, .mobile-nav-link, .nav-link, input, textarea';
        document.querySelectorAll(hoverTargets).forEach(el => {
            el.addEventListener('mouseenter', () => {
                cursorDot?.classList.add('hovering');
                cursorRing?.classList.add('hovering');
            });
            el.addEventListener('mouseleave', () => {
                cursorDot?.classList.remove('hovering');
                cursorRing?.classList.remove('hovering');
            });
        });

        // Click animation
        document.addEventListener('mousedown', () => {
            cursorDot?.classList.add('clicking');
            cursorRing?.classList.add('clicking');
        });
        document.addEventListener('mouseup', () => {
            cursorDot?.classList.remove('clicking');
            cursorRing?.classList.remove('clicking');
        });

        // Hide cursor when leaving window
        document.addEventListener('mouseleave', () => {
            if (cursorDot) cursorDot.style.opacity = '0';
            if (cursorRing) cursorRing.style.opacity = '0';
            if (cursorGlow) cursorGlow.style.opacity = '0';
        });
        document.addEventListener('mouseenter', () => {
            if (cursorDot) cursorDot.style.opacity = '1';
            if (cursorRing) cursorRing.style.opacity = '1';
            if (cursorGlow) cursorGlow.style.opacity = '0.2';
        });
    } else {
        if (cursorGlow) cursorGlow.style.display = 'none';
        if (cursorDot) cursorDot.style.display = 'none';
        if (cursorRing) cursorRing.style.display = 'none';
    }

    // ===== Scroll Progress Indicator =====
    const scrollProgress = document.getElementById('scroll-progress');
    let lastScrollY = 0;
    let ticking = false;

    function updateScrollProgress() {
        const scrollTop = window.scrollY;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const progress = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
        scrollProgress.style.width = progress + '%';
        ticking = false;
    }

    // ===== Navbar & Back to Top =====
    const navbar = document.getElementById('navbar');
    const backToTop = document.getElementById('back-to-top');
    const scrollIndicator = document.getElementById('scroll-indicator');

    function updateNavbar() {
        const scrollY = window.scrollY;

        if (scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }

        if (scrollY > 400) {
            backToTop.classList.add('visible');
        } else {
            backToTop.classList.remove('visible');
        }

        // Hide scroll indicator on scroll
        if (scrollIndicator) {
            if (scrollY > 100) {
                scrollIndicator.style.opacity = '0';
                scrollIndicator.style.pointerEvents = 'none';
            } else {
                scrollIndicator.style.opacity = '';
                scrollIndicator.style.pointerEvents = '';
            }
        }

        ticking = false;
    }

    // Throttled scroll handler
    function onScroll() {
        lastScrollY = window.scrollY;
        if (!ticking) {
            requestAnimationFrame(() => {
                updateScrollProgress();
                updateNavbar();
                updateActiveNav();
                revealOnScroll();
            });
            ticking = true;
        }
    }

    window.addEventListener('scroll', onScroll, { passive: true });

    // Back to top
    backToTop.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // ===== Active Navigation Link =====
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link[data-section]');

    function updateActiveNav() {
        const scrollPos = window.scrollY + 150;

        sections.forEach(section => {
            const top = section.offsetTop;
            const height = section.offsetHeight;
            const id = section.getAttribute('id');

            if (scrollPos >= top && scrollPos < top + height) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('data-section') === id) {
                        link.classList.add('active');
                    }
                });
            }
        });
    }

    // ===== Mobile Menu =====
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
    const hamburger = mobileMenuBtn ? mobileMenuBtn.querySelector('.hamburger') : null;

    function openMobileMenu() {
        mobileMenu.classList.remove('hidden');
        hamburger.classList.add('active');
        document.body.style.overflow = 'hidden';
        requestAnimationFrame(() => {
            mobileMenu.style.opacity = '1';
            mobileMenu.classList.add('open');
        });
    }

    function closeMobileMenu() {
        mobileMenu.classList.remove('open');
        mobileMenu.style.opacity = '0';
        hamburger.classList.remove('active');
        document.body.style.overflow = '';
        setTimeout(() => {
            mobileMenu.classList.add('hidden');
        }, 300);
    }

    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', () => {
            if (mobileMenu.classList.contains('hidden')) {
                openMobileMenu();
            } else {
                closeMobileMenu();
            }
        });
    }

    // Mobile close button
    const mobileCloseBtn = document.getElementById('mobile-close-btn');
    if (mobileCloseBtn) {
        mobileCloseBtn.addEventListener('click', () => {
            closeMobileMenu();
        });
    }

    mobileNavLinks.forEach(link => {
        link.addEventListener('click', () => {
            closeMobileMenu();
        });
    });

    // ===== Typewriter Effect =====
    const typedTextEl = document.getElementById('typed-text');
    const phrases = ['build things for the web', 'write code that scales', 'make UIs feel right', 'ship products people use', 'break things and fix them'];
    let phraseIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    let typeSpeed = 100;

    function typeWriter() {
        if (!typedTextEl) return;

        const currentPhrase = phrases[phraseIndex];

        if (isDeleting) {
            typedTextEl.textContent = currentPhrase.substring(0, charIndex - 1);
            charIndex--;
            typeSpeed = 40;
        } else {
            typedTextEl.textContent = currentPhrase.substring(0, charIndex + 1);
            charIndex++;
            typeSpeed = 80;
        }

        if (!isDeleting && charIndex === currentPhrase.length) {
            typeSpeed = 2000;
            isDeleting = true;
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            phraseIndex = (phraseIndex + 1) % phrases.length;
            typeSpeed = 400;
        }

        setTimeout(typeWriter, typeSpeed);
    }

    typeWriter();

    // ===== Scroll Reveal Animation =====
    const scrollRevealElements = document.querySelectorAll('.scroll-reveal');

    function revealOnScroll() {
        scrollRevealElements.forEach(el => {
            const rect = el.getBoundingClientRect();
            const windowHeight = window.innerHeight;

            if (rect.top < windowHeight * 0.88) {
                el.classList.add('revealed');
            }
        });
    }

    // Use IntersectionObserver for better performance
    if ('IntersectionObserver' in window) {
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.05,
            rootMargin: '50px 0px 0px 0px'
        });

        scrollRevealElements.forEach(el => revealObserver.observe(el));
    } else {
        window.addEventListener('scroll', revealOnScroll, { passive: true });
        revealOnScroll();
    }

    // ===== Counter Animation =====
    const counters = document.querySelectorAll('.counter');
    let countersAnimated = false;

    function animateCounters() {
        if (countersAnimated) return;

        const firstCounter = counters[0];
        if (!firstCounter) return;

        const rect = firstCounter.getBoundingClientRect();
        if (rect.top > window.innerHeight) return;

        countersAnimated = true;

        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'));
            const duration = 2000;
            const startTime = performance.now();

            function updateCounter(currentTime) {
                const elapsed = currentTime - startTime;
                const progress = Math.min(elapsed / duration, 1);
                const eased = 1 - Math.pow(1 - progress, 4);
                counter.textContent = Math.floor(eased * target) + '+';

                if (progress < 1) {
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target + '+';
                }
            }

            requestAnimationFrame(updateCounter);
        });
    }

    if ('IntersectionObserver' in window) {
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(counter => counterObserver.observe(counter));
    } else {
        window.addEventListener('scroll', animateCounters, { passive: true });
    }

    // ===== GSAP Animations =====

    // ===== Contact Form =====
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            const btn = contactForm.querySelector('button[type="submit"]');
            const originalText = btn.innerHTML;
            btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            btn.disabled = true;

            try {
                const formData = new FormData(contactForm);
                const response = await fetch('send_telegram.php', {
                    method: 'POST',
                    body: formData,
                });
                const result = await response.json();

                if (result.ok) {
                    btn.innerHTML = '<i class="fas fa-check"></i> Sent!';
                    btn.classList.add('bg-green-500');
                    contactForm.reset();
                } else {
                    btn.innerHTML = '<i class="fas fa-exclamation-triangle"></i> Failed';
                    btn.classList.add('bg-red-500');
                }
            } catch {
                btn.innerHTML = '<i class="fas fa-exclamation-triangle"></i> Error';
                btn.classList.add('bg-red-500');
            }

            setTimeout(() => {
                btn.innerHTML = originalText;
                btn.classList.remove('bg-green-500', 'bg-red-500');
                btn.disabled = false;
            }, 3000);
        });
    }

    // ===== GSAP Animations =====
    function initHeroAnimations() {
        if (prefersReducedMotion) {
            document.querySelectorAll('#hero .opacity-0').forEach(el => {
                el.style.opacity = '1';
                el.style.transform = 'translateY(0)';
                el.style.transition = 'none';
            });
            return;
        }

        if (typeof gsap === 'undefined') {
            document.querySelectorAll('#hero .opacity-0').forEach((el, i) => {
                setTimeout(() => {
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                    el.style.transition = 'opacity 1s cubic-bezier(0.23, 1, 0.32, 1), transform 1s cubic-bezier(0.23, 1, 0.32, 1)';
                }, i * 120);
            });
            return;
        }

        gsap.registerPlugin(ScrollTrigger);

        // Hero elements animation
        const heroTimeline = gsap.timeline({ delay: 0.3 });

        heroTimeline
            .to('#hero h1', {
                opacity: 1,
                y: 0,
                duration: 1,
                ease: 'power3.out'
            })
            .to('#hero .max-w-lg', {
                opacity: 1,
                y: 0,
                duration: 0.9,
                ease: 'power3.out'
            }, '-=0.6')
            .to('.h-10.mb-10', {
                opacity: 1,
                y: 0,
                duration: 0.9,
                ease: 'power3.out'
            }, '-=0.5')
            .to('#hero .flex.flex-col', {
                opacity: 1,
                y: 0,
                duration: 0.9,
                ease: 'power3.out'
            }, '-=0.5')
            .to('#hero .flex.items-center.gap-6', {
                opacity: 1,
                y: 0,
                duration: 0.8,
                ease: 'power3.out'
            }, '-=0.4')
            .to('#hero .flex-shrink-0', {
                opacity: 1,
                y: 0,
                duration: 1.1,
                ease: 'power3.out'
            }, '-=0.8')
            .to('#scroll-indicator', {
                opacity: 1,
                y: 0,
                duration: 0.8,
                ease: 'power3.out'
            }, '-=0.4');

        // Scroll-triggered animations with stagger
        gsap.utils.toArray('.scroll-reveal').forEach(el => {
            gsap.fromTo(el,
                { opacity: 0, y: 35 },
                {
                    opacity: 1,
                    y: 0,
                    duration: 1,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: el,
                        start: 'top 95%',
                        once: true
                    }
                }
            );
        });

        // Tech cards with stagger
        const techCards = gsap.utils.toArray('.tech-card');
        if (techCards.length > 0) {
            ScrollTrigger.batch(techCards, {
                start: 'top 98%',
                once: true,
                onEnter: (batch) => {
                    gsap.fromTo(batch,
                        { opacity: 0, y: 25, scale: 0.97 },
                        {
                            opacity: 1,
                            y: 0,
                            scale: 1,
                            duration: 0.6,
                            stagger: 0.05,
                            ease: 'power3.out'
                        }
                    );
                }
            });
        }

        // Project cards with stagger
        const projectCards = gsap.utils.toArray('.project-card');
        if (projectCards.length > 0) {
            ScrollTrigger.batch(projectCards, {
                start: 'top 88%',
                once: true,
                onEnter: (batch) => {
                    gsap.fromTo(batch,
                        { opacity: 0, y: 35 },
                        {
                            opacity: 1,
                            y: 0,
                            duration: 0.8,
                            stagger: 0.15,
                            ease: 'power3.out'
                        }
                    );
                }
            });
        }

        // Service cards with stagger
        const serviceCards = gsap.utils.toArray('.service-card');
        if (serviceCards.length > 0) {
            ScrollTrigger.batch(serviceCards, {
                start: 'top 92%',
                once: true,
                onEnter: (batch) => {
                    gsap.fromTo(batch,
                        { opacity: 0, y: 25, scale: 0.97 },
                        {
                            opacity: 1,
                            y: 0,
                            scale: 1,
                            duration: 0.7,
                            stagger: 0.08,
                            ease: 'power3.out'
                        }
                    );
                }
            });
        }

    }

    // ===== Particle Background =====
    const canvas = document.getElementById('particles');
    const ctx = canvas ? canvas.getContext('2d') : null;
    let particles = [];
    let animationId = null;
    let canvasWidth = 0;
    let canvasHeight = 0;

    function resizeCanvas() {
        if (!canvas) return;
        const dpr = Math.min(window.devicePixelRatio || 1, 2);
        canvasWidth = window.innerWidth;
        canvasHeight = window.innerHeight;
        canvas.width = canvasWidth * dpr;
        canvas.height = canvasHeight * dpr;
        canvas.style.width = canvasWidth + 'px';
        canvas.style.height = canvasHeight + 'px';
        ctx.scale(dpr, dpr);
    }

    class Particle {
        constructor() {
            this.reset();
        }

        reset() {
            this.x = Math.random() * canvasWidth;
            this.y = Math.random() * canvasHeight;
            this.size = Math.random() * 1.5 + 0.5;
            this.speedX = (Math.random() - 0.5) * (isMobile ? 0.3 : 0.5);
            this.speedY = (Math.random() - 0.5) * (isMobile ? 0.3 : 0.5);
            this.opacity = Math.random() * 0.4 + 0.1;
            this.color = ['#3B82F6', '#06B6D4', '#8B5CF6'][Math.floor(Math.random() * 3)];
        }

        update() {
            this.x += this.speedX;
            this.y += this.speedY;

            if (this.x < 0 || this.x > canvasWidth) this.speedX *= -1;
            if (this.y < 0 || this.y > canvasHeight) this.speedY *= -1;
        }

        draw() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fillStyle = this.color;
            ctx.globalAlpha = this.opacity;
            ctx.fill();
            ctx.globalAlpha = 1;
        }
    }

    function initParticles() {
        if (!canvas || !ctx) return;
        const count = isMobile
            ? Math.min(30, Math.floor((canvasWidth * canvasHeight) / 25000))
            : Math.min(60, Math.floor((canvasWidth * canvasHeight) / 18000));
        particles = [];
        for (let i = 0; i < count; i++) {
            particles.push(new Particle());
        }
    }

    function drawConnections() {
        const maxDist = isMobile ? 80 : 100;
        for (let i = 0; i < particles.length; i++) {
            for (let j = i + 1; j < particles.length; j++) {
                const dx = particles[i].x - particles[j].x;
                const dy = particles[i].y - particles[j].y;
                const distance = dx * dx + dy * dy;

                if (distance < maxDist * maxDist) {
                    const alpha = 0.08 * (1 - Math.sqrt(distance) / maxDist);
                    ctx.beginPath();
                    ctx.moveTo(particles[i].x, particles[i].y);
                    ctx.lineTo(particles[j].x, particles[j].y);
                    ctx.strokeStyle = `rgba(59, 130, 246, ${alpha})`;
                    ctx.lineWidth = 0.5;
                    ctx.stroke();
                }
            }
        }
    }

    function animateParticles() {
        ctx.clearRect(0, 0, canvasWidth, canvasHeight);

        particles.forEach(p => {
            p.update();
            p.draw();
        });

        drawConnections();
        animationId = requestAnimationFrame(animateParticles);
    }

    resizeCanvas();
    initParticles();

    // Pause particles when hero not visible
    const heroSection = document.getElementById('hero');
    if (heroSection) {
        const heroObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    if (!animationId) animateParticles();
                } else {
                    if (animationId) {
                        cancelAnimationFrame(animationId);
                        animationId = null;
                    }
                }
            });
        }, { threshold: 0.05 });

        heroObserver.observe(heroSection);
    }

    // ===== Hero Avatar Mouse Follow =====
    if (!isTouch) {
        const heroAvatar = document.querySelector('.hero-avatar-wrapper');
        if (heroAvatar) {
            document.addEventListener('mousemove', (e) => {
                const rect = heroAvatar.getBoundingClientRect();
                const centerX = rect.left + rect.width / 2;
                const centerY = rect.top + rect.height / 2;
                const distX = (e.clientX - centerX) / rect.width;
                const distY = (e.clientY - centerY) / rect.height;
                const maxMove = 12;
                const moveX = distX * maxMove;
                const moveY = distY * maxMove;
                heroAvatar.style.transform = `translate(${moveX}px, ${moveY}px)`;
            }, { passive: true });

            document.addEventListener('mouseleave', () => {
                heroAvatar.style.transform = 'translate(0, 0)';
            });
        }
    }

    // ===== Smooth Scroll for Anchor Links =====
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            const target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                const navHeight = navbar ? navbar.offsetHeight : 80;
                const offsetTop = target.offsetTop - navHeight;
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
                history.pushState(null, null, targetId);
            }
        });
    });

    // ===== Keyboard Navigation =====
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            if (!mobileMenu.classList.contains('hidden')) {
                closeMobileMenu();
            }
        }
    });

    // ===== Window Resize Handler =====
    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            resizeCanvas();
            initParticles();
        }, 200);
    }, { passive: true });

    // ===== Lazy load images with blur-up =====
    if ('IntersectionObserver' in window) {
        const lazyImages = document.querySelectorAll('img[data-src]');
        const imageObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                    img.addEventListener('load', () => {
                        img.classList.add('loaded');
                    });
                    imageObserver.unobserve(img);
                }
            });
        }, { rootMargin: '100px' });

        lazyImages.forEach(img => imageObserver.observe(img));
    }

    // ===== Touch Ripple for Mobile =====
    if (isTouch) {
        const rippleTargets = document.querySelectorAll('.tech-card, .project-card, .service-card, .nav-link, #back-to-top');
        rippleTargets.forEach(el => {
            el.style.position = 'relative';
            el.style.overflow = 'hidden';
            el.addEventListener('touchstart', (e) => {
                const rect = el.getBoundingClientRect();
                const touch = e.touches[0];
                const x = touch.clientX - rect.left;
                const y = touch.clientY - rect.top;
                const size = Math.max(rect.width, rect.height) * 2;

                const ripple = document.createElement('span');
                ripple.className = 'ripple-effect';
                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.left = (x - size / 2) + 'px';
                ripple.style.top = (y - size / 2) + 'px';
                el.appendChild(ripple);

                setTimeout(() => ripple.remove(), 600);
            }, { passive: true });
        });
    }

    // ===== Prevent Flash of Unstyled Content =====
    document.documentElement.classList.add('js-loaded');

})();