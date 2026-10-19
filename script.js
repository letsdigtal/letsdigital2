document.addEventListener('DOMContentLoaded', () => {

    // --- 0. Dark / Light Mode ---
    const htmlEl = document.documentElement;
    const savedTheme = localStorage.getItem('theme');
    // Default to dark mode
    if (savedTheme === 'light') {
        htmlEl.classList.remove('dark');
    } else {
        htmlEl.classList.add('dark');
    }

    function applyThemeIcons() {
        const isDark = htmlEl.classList.contains('dark');
        const iconD = document.getElementById('theme-icon-desktop');
        const iconM = document.getElementById('theme-icon-mobile');
        if (iconD) iconD.className = isDark ? 'fa-solid fa-sun' : 'fa-solid fa-moon';
        if (iconM) iconM.className = isDark ? 'fa-solid fa-sun' : 'fa-solid fa-moon';
    }
    applyThemeIcons();

    const audioCtx = new (window.AudioContext || window.webkitAudioContext)();
    let scrollSoundTimer = null;

    function resumeAudio() {
        if (audioCtx.state === 'suspended') {
            audioCtx.resume();
        }
    }

    function playTone(frequency, duration = 0.04, type = 'sine') {
        const oscillator = audioCtx.createOscillator();
        const gainNode = audioCtx.createGain();

        oscillator.type = type;
        oscillator.frequency.value = frequency;
        oscillator.connect(gainNode);
        gainNode.connect(audioCtx.destination);

        gainNode.gain.setValueAtTime(0.0001, audioCtx.currentTime);
        gainNode.gain.exponentialRampToValueAtTime(0.18, audioCtx.currentTime + 0.01);
        oscillator.start(audioCtx.currentTime);
        gainNode.gain.exponentialRampToValueAtTime(0.0001, audioCtx.currentTime + duration);
        oscillator.stop(audioCtx.currentTime + duration + 0.01);
    }

    function playButtonSound() {
        resumeAudio();
        playTone(880, 0.04, 'triangle');
        setTimeout(() => playTone(1320, 0.02, 'square'), 30);
    }

    function playScrollSound() {
        resumeAudio();
        playTone(220, 0.03, 'sine');
    }

    let hasStartedScrollAudio = false;
    let isAudioEnabled = true;

    function bindInteractiveSounds() {
        const interactives = document.querySelectorAll('button, a, .hover-trigger');
        interactives.forEach(el => {
            el.addEventListener('click', () => playButtonSound());
        });

        const scrollAudio = document.getElementById('scroll-audio');
        const audioControl = document.getElementById('audio-control');
        const audioIcon = document.getElementById('audio-icon');
        const audioLabel = document.getElementById('audio-label');

        function updateAudioControl() {
            if (!audioControl || !audioIcon || !audioLabel) return;
            if (isAudioEnabled) {
                audioIcon.className = 'fa-solid fa-volume-high text-xl';
                audioLabel.textContent = hasStartedScrollAudio ? 'Audio On' : 'Scroll to Play';
            } else {
                audioIcon.className = 'fa-solid fa-volume-xmark text-xl';
                audioLabel.textContent = 'Audio Off';
            }
        }

        if (audioControl) {
            audioControl.addEventListener('click', () => {
                isAudioEnabled = !isAudioEnabled;
                if (scrollAudio) {
                    if (isAudioEnabled) {
                        scrollAudio.play().catch(() => {});
                        hasStartedScrollAudio = true;
                    } else {
                        scrollAudio.pause();
                    }
                }
                updateAudioControl();
            });
        }

        window.addEventListener('scroll', () => {
            if (scrollAudio && isAudioEnabled && !hasStartedScrollAudio) {
                hasStartedScrollAudio = true;
                const playPromise = scrollAudio.play();
                if (playPromise !== undefined) {
                    playPromise.catch(() => {});
                }
                updateAudioControl();
            }

            if (!scrollSoundTimer) {
                playScrollSound();
                scrollSoundTimer = setTimeout(() => {
                    scrollSoundTimer = null;
                }, 300);
            }
        }, { passive: true });

        updateAudioControl();
    }

    bindInteractiveSounds();

    const lazyVideos = document.querySelectorAll('video[data-video-src]');
    const lazyVideoObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            const video = entry.target;
            const src = video.dataset.videoSrc;
            if (src && !video.querySelector('source')) {
                const source = document.createElement('source');
                source.src = src;
                source.type = 'video/mp4';
                video.appendChild(source);
                video.load();
                if (video.autoplay) {
                    video.play().catch(() => {});
                }
            }
            observer.unobserve(video);
        });
    }, { threshold: 0.25 });
    lazyVideos.forEach(video => lazyVideoObserver.observe(video));

    function toggleTheme() {
        htmlEl.classList.toggle('dark');
        const isDark = htmlEl.classList.contains('dark');
        localStorage.setItem('theme', isDark ? 'dark' : 'light');
        applyThemeIcons();
    }

    const themeDesktop = document.getElementById('theme-toggle-desktop');
    const themeMobile  = document.getElementById('theme-toggle-mobile');
    if (themeDesktop) themeDesktop.addEventListener('click', toggleTheme);
    if (themeMobile)  themeMobile.addEventListener('click', toggleTheme);

    // --- 0b. Welcome Card ---
    const welcomeOverlay = document.getElementById('welcome-overlay');
    if (welcomeOverlay) {
        setTimeout(() => {
            welcomeOverlay.style.opacity = '0';
            welcomeOverlay.style.pointerEvents = 'none';
            setTimeout(() => welcomeOverlay.remove(), 700);
        }, 3000);
    }

    // --- 1. Custom Cursor ---
    const cursor = document.getElementById('cursor');
    const cursorGlow = document.getElementById('cursor-glow');
    let isHovering = false;

    if (window.innerWidth > 768) {
        document.addEventListener('mousemove', (e) => {
            if (!isHovering) {
                cursor.style.transform = `translate(${e.clientX - 12}px, ${e.clientY - 12}px)`;
            } else {
                cursor.style.transform = `translate(${e.clientX - 24}px, ${e.clientY - 24}px) scale(2)`;
            }
            cursorGlow.style.transform = `translate(${e.clientX - 64}px, ${e.clientY - 64}px)`;
        });

        const hoverElements = document.querySelectorAll('a, button, .hover-trigger');
        hoverElements.forEach(el => {
            el.addEventListener('mouseenter', () => {
                isHovering = true;
                cursor.style.backgroundColor = 'rgba(255, 214, 0, 0.2)';
            });
            el.addEventListener('mouseleave', () => {
                isHovering = false;
                cursor.style.backgroundColor = 'transparent';
            });
        });
    }

    // --- 2. Navbar & Mobile Menu ---
    const navbar = document.getElementById('navbar');
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    let menuOpen = false;

    window.addEventListener('scroll', () => {
        const isDark = document.documentElement.classList.contains('dark');
        if (window.scrollY > 50) {
            navbar.classList.add('shadow-lg');
            navbar.classList.add(isDark ? 'bg-dark/95' : 'bg-white/95');
            navbar.classList.remove('py-4');
            navbar.classList.add('py-2');
        } else {
            navbar.classList.remove('shadow-lg', 'bg-dark/95', 'bg-white/95');
            navbar.classList.add('py-4');
            navbar.classList.remove('py-2');
        }
    });

    mobileMenuBtn.addEventListener('click', () => {
        menuOpen = !menuOpen;
        if (menuOpen) {
            mobileMenu.classList.remove('translate-x-full');
            mobileMenuBtn.innerHTML = '<i class="fa-solid fa-xmark"></i>';
        } else {
            mobileMenu.classList.add('translate-x-full');
            mobileMenuBtn.innerHTML = '<i class="fa-solid fa-bars"></i>';
        }
    });
    
    document.querySelectorAll('.mobile-link').forEach(link => {
        link.addEventListener('click', () => {
            menuOpen = false;
            mobileMenu.classList.add('translate-x-full');
            mobileMenuBtn.innerHTML = '<i class="fa-solid fa-bars"></i>';
        });
    });

    // --- 3. Typewriter Effect (Looping Services) ---
    const typewriterEl = document.getElementById('typewriter');
    const servicesList = [
        "Shopify Store Developer",
        "Shopify Store Designer",
        "Shopify SEO Specialist",
        "Shopify Theme Developer",
        "Digital Marketing Expert",
        "WooCommerce Developer",
        "Speed Optimization Pro"
    ];
    let wordIndex = 0;
    let charIndex = 0;
    let isDeleting = false;

    function typeWriter() {
        if (!typewriterEl) return;
        const currentWord = servicesList[wordIndex];
        if (isDeleting) {
            typewriterEl.innerHTML = currentWord.substring(0, charIndex - 1);
            charIndex--;
        } else {
            typewriterEl.innerHTML = currentWord.substring(0, charIndex + 1);
            charIndex++;
        }

        let typeSpeed = isDeleting ? 40 : 80;

        if (!isDeleting && charIndex === currentWord.length) {
            typeSpeed = 1800; // Pause at the end of the word
            isDeleting = true;
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            wordIndex = (wordIndex + 1) % servicesList.length;
            typeSpeed = 400; // Pause before starting next word
        }

        setTimeout(typeWriter, typeSpeed);
    }
    setTimeout(typeWriter, 1200); // Start typing services

    // --- 4. Counter Animations (multi-stat grid) ---
    function animateCounter(el) {
        const target = parseInt(el.getAttribute('data-target'));
        let count = 0;
        const increment = Math.max(1, target / 80);
        function tick() {
            count += increment;
            if (count < target) {
                el.innerText = Math.ceil(count);
                setTimeout(tick, 20);
            } else {
                el.innerText = target;
            }
        }
        tick();
    }
    // Animate all .counter elements when they enter the viewport
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                counterObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    document.querySelectorAll('.counter').forEach(el => counterObserver.observe(el));

    // --- 5. Scroll Reveal ---
    const revealElements = document.querySelectorAll('.reveal');
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    revealElements.forEach(el => revealObserver.observe(el));

    // --- 6. Services Data & Injection ---
    const services = [
        { title: "Shopify Store Setup", icon: "fa-store", img: "assets/service_ecommerce_1780374376085.png" },
        { title: "Shopify Store Design", icon: "fa-palette", img: "assets/service_design_1780374411456.png" },
        { title: "Shopify Store SEO", icon: "fa-magnifying-glass-chart", img: "assets/service_marketing_1780374426410.png" },
        { title: "Shopify Theme Dev", icon: "fa-code", img: "assets/service_ecommerce_1780374376085.png" },
        { title: "Integration Services", icon: "fa-plug", img: "assets/service_marketing_1780374426410.png" },
        { title: "Digital Marketing", icon: "fa-bullhorn", img: "assets/service_marketing_1780374426410.png" },
        { title: "WooCommerce Dev", icon: "fa-wordpress", img: "assets/service_ecommerce_1780374376085.png" },
        { title: "Speed Optimization", icon: "fa-gauge-high", img: "assets/service_marketing_1780374426410.png" },
        { title: "Canva Design", icon: "fa-pen-nib", img: "assets/service_design_1780374411456.png" }
    ];

    const servicesGrid = document.getElementById('services-grid');
    services.forEach((service, index) => {
        const card = document.createElement('div');
        card.className = 'service-card bg-dark border-2 border-[#FFD600] rounded-xl overflow-hidden relative flex flex-col group cursor-pointer reveal';
        card.style.transitionDelay = `${index * 100}ms`;
        
        card.innerHTML = `
            <div class="h-40 w-full overflow-hidden relative">
                <div class="absolute inset-0 bg-gradient-to-t from-dark to-transparent z-10 pointer-events-none"></div>
                <img src="${service.img}" alt="${service.title}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 opacity-80">
                <div class="absolute top-4 left-4 z-20 w-10 h-10 bg-dark/80 backdrop-blur-sm rounded-full flex items-center justify-center border border-white/10">
                    <i class="fa-solid ${service.icon} text-primary"></i>
                </div>
            </div>
            <div class="p-8 text-center flex-1 flex flex-col items-center justify-center relative">
                <div class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-neon-pink rounded-tl-xl corner-accent -translate-x-2 -translate-y-2"></div>
                <div class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-neon-cyan rounded-br-xl corner-accent translate-x-2 translate-y-2"></div>
                
                <h3 class="text-xl font-bold mb-2 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-neon transition-all duration-300">${service.title}</h3>
                <p class="text-gray-400 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 transform translate-y-4 group-hover:translate-y-0">Premium quality and tailored specifically for your brand's unique needs.</p>
            </div>
        `;
        
        // Dynamic hover cursor and click handler
        card.addEventListener('mouseenter', () => {
            isHovering = true;
            if (cursor) cursor.style.backgroundColor = 'rgba(255, 214, 0, 0.2)';
        });
        card.addEventListener('mouseleave', () => {
            isHovering = false;
            if (cursor) cursor.style.backgroundColor = 'transparent';
        });
        card.addEventListener('click', () => {
            const waUrl = `https://wa.me/923159531434?text=Hi%20Shah%20Faisal%2C%20I%27m%20interested%20in%20your%20service%3A%20${encodeURIComponent(service.title)}!`;
            window.open(waUrl, '_blank');
        });

        servicesGrid.appendChild(card);
        revealObserver.observe(card);

        // 3D Tilt Effect
        if (window.innerWidth > 768) {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                const rotateX = ((y - centerY) / centerY) * -10;
                const rotateY = ((x - centerX) / centerX) * 10;
                
                card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.03, 1.03, 1.03) translateY(-8px)`;
            });

            card.addEventListener('mouseleave', () => {
                card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale3d(1, 1, 1) translateY(0)';
            });
        }
    });

    // --- 7. Portfolio Data & Injection ---
    const projects = [
        { name: "Really Well Made",    url: "https://reallywellmade.co.uk/",       img: "assets/screenshots/really%20well%20made.png" },
        { name: "Wigs.com",            url: "https://www.wigs.com/",               img: "assets/screenshots/wigs.com.png" },
        { name: "Wonder Noah",         url: "https://wondernoah.com/en-ww",        img: "assets/screenshots/wonder%20noah.png" },
        { name: "Audio Select",        url: "https://audioselect.de/",            img: "assets/screenshots/Audioselect-06-02-2026_10_33_AM.png" },
        { name: "Olivine",             url: "https://shopolivine.com/",            img: "assets/screenshots/Olivine.png" },
        { name: "Anson Belt & Buckle", url: "https://ansonbelt.com/",             img: "assets/screenshots/anson-belt.png" },
        { name: "Zorrata",             url: "https://www.zorrata.com/",            img: "assets/screenshots/zorrata.png" },
        { name: "Cellucor",            url: "https://cellucor.com/",              img: "assets/screenshots/Cellucor.png" },
        { name: "Tuckernuck",          url: "https://tnuck.com/",                 img: "assets/screenshots/tuckernuck.png" },
        { name: "Hyper",               url: "https://www.hypershop.com/",         img: "assets/screenshots/Hyper.png" },
        { name: "ULX Store",           url: "https://ulxstore.com/",              img: "assets/screenshots/ULX.png" },
        { name: "Vital Nutrients",     url: "https://vitalnutrients.co/",         img: "assets/screenshots/vital.png" },
        { name: "Ecofy",               url: "https://ecofy.com/",                 img: "assets/screenshots/ecofy.png" },
        { name: "Perfect Shaker",      url: "https://perfectshaker.com/",         img: "assets/screenshots/perfact%20shaker.png" },
        { name: "Lance210",            url: "https://lance210.com/",              img: "assets/screenshots/210.png" }
    ];

    const portfolioGrid = document.getElementById('portfolio-grid');
    projects.forEach((project, index) => {
        const rowDirection = Math.floor(index / 5) % 2 === 0 ? 'portfolio-row-left' : 'portfolio-row-right';
        const card = document.createElement('div');
        card.className = `group relative rounded-xl overflow-hidden aspect-[4/5] bg-dark dark:bg-dark bg-gray-100 reveal cursor-pointer border border-gray-200 dark:border-white/10 ${rowDirection}`;
        card.style.transitionDelay = `${(index % 5) * 100}ms`;
        
        // Fallback placeholder gradient if screenshot not yet available
        const fallbackStyle = `background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);`;
        
        card.innerHTML = `
            <img src="${project.img}" alt="${project.name}" loading="lazy"
                 class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-110"
                 onerror="this.style.display='none'; this.parentElement.querySelector('.fallback-bg').style.display='flex'">
            <div class="fallback-bg absolute inset-0 items-center justify-center hidden" style="${fallbackStyle}">
                <span class="text-white/30 text-4xl font-bold">${project.name.charAt(0)}</span>
            </div>
            <div class="absolute inset-0 bg-dark/80 translate-y-full group-hover:translate-y-0 transition-transform duration-500 flex flex-col items-center justify-center p-4 text-center z-10 gap-3">
                <h3 class="text-xl font-bold transform -translate-y-10 group-hover:translate-y-0 transition-transform duration-500 delay-100 text-white">${project.name}</h3>
                ${project.url ? `<a href="${project.url}" target="_blank" class="px-5 py-1.5 bg-primary text-dark text-sm rounded-full font-bold transform translate-y-10 group-hover:translate-y-0 transition-transform duration-500 delay-150 inline-block hover:scale-105">Visit Site ↗</a>` : ''}
                <a href="https://wa.me/923159531434?text=Hi%20Shah%20Faisal%2C%20I%20am%20interested%20in%20a%20store%20like%20${encodeURIComponent(project.name)}!" target="_blank" class="px-5 py-1.5 border border-white hover:bg-white hover:text-dark text-white text-sm transition-colors rounded-full font-medium transform translate-y-10 group-hover:translate-y-0 transition-transform duration-500 delay-200 inline-block hover-trigger">Discuss Project</a>
            </div>
            <div class="absolute bottom-0 left-0 w-full h-2 bg-red-600 z-20 flex justify-center pb-6">
                <i class="fa-solid fa-angles-up text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 animate-bounce"></i>
            </div>
        `;
        
        // Dynamic hover cursor trigger
        card.addEventListener('mouseenter', () => {
            isHovering = true;
            if (cursor) cursor.style.backgroundColor = 'rgba(255, 214, 0, 0.2)';
            card.style.transform = `rotate(${index % 2 === 0 ? '5deg' : '-5deg'})`;
        });
        card.addEventListener('mouseleave', () => {
            isHovering = false;
            if (cursor) cursor.style.backgroundColor = 'transparent';
            card.style.transform = 'rotate(0deg)';
        });
        
        portfolioGrid.appendChild(card);
        revealObserver.observe(card);
    });

    // --- 8. FAQ Accordion ---
    const faqs = [
        { q: "How long does it take to build a Shopify store?", a: "Depending on the complexity, a standard store takes 1-2 weeks, while custom themes might take 3-4 weeks." },
        { q: "Do you provide ongoing support?", a: "Yes, we offer maintenance and support packages to ensure your store runs smoothly post-launch." },
        { q: "Can you migrate my existing store to Shopify?", a: "Absolutely. We seamlessly migrate data, products, and designs from WooCommerce, Magento, or custom platforms." },
        { q: "Is SEO included in the development?", a: "Yes, basic technical SEO and speed optimization are included in all our builds to ensure you start strong." }
    ];

    const faqContainer = document.getElementById('faq-container');
    faqs.forEach((faq, i) => {
        const item = document.createElement('div');
        item.className = 'border-b border-gray-200 pb-4';
        item.innerHTML = `
            <button class="w-full flex justify-between items-center py-4 text-left font-bold text-xl hover:text-primary transition-colors faq-btn">
                ${faq.q}
                <i class="fa-solid fa-plus transition-transform duration-300 icon"></i>
            </button>
            <div class="overflow-hidden transition-all duration-500 max-h-0 faq-content">
                <p class="text-gray-600 pb-4">${faq.a}</p>
            </div>
        `;
        faqContainer.appendChild(item);

        const btn = item.querySelector('.faq-btn');
        const content = item.querySelector('.faq-content');
        const icon = item.querySelector('.icon');

        btn.addEventListener('click', () => {
            const isOpen = content.style.maxHeight;
            // Close all
            document.querySelectorAll('.faq-content').forEach(c => c.style.maxHeight = null);
            document.querySelectorAll('.faq-btn .icon').forEach(i => i.style.transform = 'rotate(0)');
            
            if (!isOpen) {
                content.style.maxHeight = content.scrollHeight + "px";
                icon.style.transform = 'rotate(45deg)';
            }
        });
    });

    // --- 9. Testimonial Carousel ---
    const testimonials = [
        { text: "Shah Faisal completely transformed our online presence. The new Shopify store is lightning fast and our conversion rate doubled in a month.", name: "Sarah Jenkins", role: "CEO, Allurebeauty", img: "https://i.pravatar.cc/150?img=5" },
        { text: "Incredible attention to detail. The 3D animations and seamless checkout process made our brand feel truly premium.", name: "Mark Thorne", role: "Founder, Rollie Nation", img: "https://i.pravatar.cc/150?img=11" },
        { text: "Fast delivery, exceptional code quality, and great communication. Highly recommend Let's Digital for any complex Shopify needs.", name: "Elena Rostova", role: "Manager, Saeed Ghani", img: "https://i.pravatar.cc/150?img=9" },
        { text: "Working with Shah Faisal was a game changer for Wood Action. He delivered our Shopify custom theme migration flawlessly and on time.", name: "Jameson Blake", role: "Co-Founder, Wood Action", img: "https://i.pravatar.cc/150?img=12" },
        { text: "Shah Faisal is by far the best Shopify developer we've worked with. Our page speed score went from 34 to 92! Highly professional work.", name: "Ayesha Khan", role: "Product Owner, Eshifa", img: "https://i.pravatar.cc/150?img=47" },
        { text: "The integration services he provided were seamless. Our inventory is now fully automated and synced perfectly. 10/10 developer.", name: "David Miller", role: "Owner, Fruits Sabzi", img: "https://i.pravatar.cc/150?img=33" },
        { text: "Incredible work on our store redesign. The sales skyrocketed immediately after launch. Faisal is extremely knowledgeable and responsive.", name: "Sophia Martinez", role: "Marketing Director, Apollo", img: "https://i.pravatar.cc/150?img=28" }
    ];

    const track = document.getElementById('testimonial-track');
    const dotsContainer = document.getElementById('testimonial-dots');
    
    testimonials.forEach((t, i) => {
        const card = document.createElement('div');
        card.className = 'w-full flex-shrink-0 px-4 md:px-12';
        card.innerHTML = `
            <div class="bg-gradient-to-br from-dark to-zinc-900 border border-white/10 p-8 md:p-12 rounded-3xl relative group hover:-translate-y-4 transition-transform duration-500">
                <div class="absolute top-0 left-0 w-full h-2 bg-primary rounded-t-3xl"></div>
                <div class="absolute bottom-0 left-0 w-full h-2 bg-neon-pink rounded-b-3xl"></div>
                
                <i class="fa-solid fa-quote-left text-4xl text-white/10 absolute top-8 left-8"></i>
                <div class="absolute top-4 right-8 opacity-0 group-hover:opacity-100 transition-opacity">
                    <i class="fa-solid fa-star text-primary animate-pulse"></i>
                    <i class="fa-solid fa-star text-primary animate-pulse" style="animation-delay: 0.2s"></i>
                </div>
                
                <p class="text-xl md:text-2xl leading-relaxed text-gray-300 mb-8 relative z-10 italic">"${t.text}"</p>
                <div class="flex items-center gap-4">
                    <img src="${t.img}" alt="${t.name}" class="w-16 h-16 rounded-full border-2 border-primary object-cover">
                    <div>
                        <h4 class="font-bold text-lg">${t.name}</h4>
                        <p class="text-sm text-primary">${t.role}</p>
                    </div>
                </div>
            </div>
        `;
        track.appendChild(card);
        
        const dot = document.createElement('button');
        dot.className = `w-3 h-3 rounded-full transition-colors hover-trigger ${i === 0 ? 'bg-primary' : 'bg-white/20'}`;
        dot.addEventListener('click', () => goToSlide(i));
        
        // Custom cursor hovering on dots
        dot.addEventListener('mouseenter', () => {
            isHovering = true;
            if (cursor) cursor.style.backgroundColor = 'rgba(255, 214, 0, 0.2)';
        });
        dot.addEventListener('mouseleave', () => {
            isHovering = false;
            if (cursor) cursor.style.backgroundColor = 'transparent';
        });

        dotsContainer.appendChild(dot);
    });

    let currentSlide = 0;
    function goToSlide(index) {
        currentSlide = index;
        track.style.transform = `translateX(-${index * 100}%)`;
        Array.from(dotsContainer.children).forEach((dot, i) => {
            dot.className = `w-3 h-3 rounded-full transition-colors ${i === index ? 'bg-primary' : 'bg-white/20'}`;
        });
    }

    setInterval(() => {
        currentSlide = (currentSlide + 1) % testimonials.length;
        goToSlide(currentSlide);
    }, 5000);

    // --- 10. Video Scroll Autoplay ---
    const promoVideo = document.getElementById('promo-video');
    const playPauseBtn = document.getElementById('play-pause-btn');
    
    if (promoVideo) {
        const videoObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    promoVideo.play().catch(e => console.log('Autoplay prevented:', e));
                    if (playPauseBtn) playPauseBtn.style.opacity = '0';
                } else {
                    promoVideo.pause();
                    if (playPauseBtn) playPauseBtn.style.opacity = '1';
                }
            });
        }, { threshold: 0.5 });
        
        videoObserver.observe(promoVideo);

        if (playPauseBtn) {
            playPauseBtn.addEventListener('click', () => {
                if (promoVideo.paused) {
                    promoVideo.play();
                    playPauseBtn.style.opacity = '0';
                } else {
                    promoVideo.pause();
                    playPauseBtn.style.opacity = '1';
                }
            });
            promoVideo.addEventListener('click', () => {
                if (!promoVideo.paused) {
                    promoVideo.pause();
                    playPauseBtn.style.opacity = '1';
                } else {
                    promoVideo.play();
                    playPauseBtn.style.opacity = '0';
                }
            });
        }
    }

    // --- 11. Review Popup Notification Badge ---
    const reviewPopup = document.getElementById('review-popup');
    let popupIndex = 0;
    let popupActive = true;

    function showReviewPopup() {
        if (!reviewPopup || !popupActive) return;

        const currentReview = testimonials[popupIndex];
        
        reviewPopup.innerHTML = `
            <button id="close-review-popup" class="absolute top-2 right-3 text-gray-500 hover:text-white transition-colors hover-trigger text-sm">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <img src="${currentReview.img}" alt="${currentReview.name}" class="w-12 h-12 rounded-full border border-primary flex-shrink-0 object-cover">
            <div class="flex-1 min-w-0">
                <div class="flex items-center justify-between mb-1">
                    <h5 class="font-bold text-sm text-white truncate">${currentReview.name}</h5>
                    <div class="flex text-xs text-primary ml-2 flex-shrink-0">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
                <p class="text-xs text-primary mb-1 font-medium">${currentReview.role}</p>
                <p class="text-xs text-gray-400 line-clamp-2 italic">"${currentReview.text}"</p>
            </div>
        `;

        // Bind events to popup elements
        const closeBtn = document.getElementById('close-review-popup');
        if (closeBtn) {
            closeBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                popupActive = false;
                reviewPopup.classList.add('translate-y-32', 'opacity-0');
                reviewPopup.classList.remove('translate-y-0', 'opacity-100');
            });
            closeBtn.addEventListener('mouseenter', () => {
                isHovering = true;
                if (cursor) cursor.style.backgroundColor = 'rgba(255, 214, 0, 0.2)';
            });
            closeBtn.addEventListener('mouseleave', () => {
                isHovering = false;
                if (cursor) cursor.style.backgroundColor = 'transparent';
            });
        }

        // Custom cursor hover on whole review popup
        reviewPopup.addEventListener('mouseenter', () => {
            isHovering = true;
            if (cursor) cursor.style.backgroundColor = 'rgba(255, 214, 0, 0.2)';
        });
        reviewPopup.addEventListener('mouseleave', () => {
            isHovering = false;
            if (cursor) cursor.style.backgroundColor = 'transparent';
        });

        // Click review to discuss on WhatsApp
        reviewPopup.addEventListener('click', () => {
            const waUrl = `https://wa.me/923159531434?text=Hi%20Shah%20Faisal%2C%20I%20saw%20${encodeURIComponent(currentReview.name)}%27s%20review%20and%20want%20to%20discuss%20a%20project!`;
            window.open(waUrl, '_blank');
        });

        // Slide in
        reviewPopup.classList.remove('translate-y-32', 'opacity-0');
        reviewPopup.classList.add('translate-y-0', 'opacity-100');

        // Wait 5.5 seconds, slide out
        setTimeout(() => {
            if (!popupActive) return;
            reviewPopup.classList.add('translate-y-32', 'opacity-0');
            reviewPopup.classList.remove('translate-y-0', 'opacity-100');
            
            // Queue next popup after 6 seconds of transition/downtime
            popupIndex = (popupIndex + 1) % testimonials.length;
            setTimeout(showReviewPopup, 6000);
        }, 5500);
    }

    // Start cycling popup reviews after 8 seconds
    setTimeout(showReviewPopup, 8000);

    // --- 12. Contact Form WhatsApp Redirection ---
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            const name = document.getElementById('contact-name').value;
            const email = document.getElementById('contact-email').value;
            const budget = document.getElementById('contact-budget').value;
            const message = document.getElementById('contact-message').value;
            
            const text = `Hello Shah Faisal, I would like to discuss a project with you!\n\n*Name:* ${name}\n*Email:* ${email}\n*Budget:* ${budget}\n*Project Details:* ${message}`;
            const encodedText = encodeURIComponent(text);
            const waUrl = `https://wa.me/923159531434?text=${encodedText}`;
            
            window.open(waUrl, '_blank');
            contactForm.reset();
        });
    }
});
