document.addEventListener('DOMContentLoaded', () => {
    // 1. Mobile Navigation Toggle & Dropdowns
    const navToggle = document.querySelector('.mobile-nav-toggle');
    const primaryNav = document.querySelector('.primary-navigation');

    if (navToggle && primaryNav) {
        navToggle.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            const isVisible = primaryNav.getAttribute('data-visible');
            
            if (isVisible === "false" || !isVisible) {
                primaryNav.setAttribute('data-visible', "true");
                navToggle.setAttribute('aria-expanded', "true");
                document.body.style.overflow = 'hidden';
            } else {
                primaryNav.setAttribute('data-visible', "false");
                navToggle.setAttribute('aria-expanded', "false");
                document.body.style.overflow = '';
            }
        });

        // Handle Services dropdown toggle in mobile drawer
        const dropdownToggles = document.querySelectorAll('.primary-navigation .dropdown-toggle');
        dropdownToggles.forEach(toggle => {
            toggle.addEventListener('click', (e) => {
                if (window.innerWidth <= 992) {
                    e.preventDefault();
                    e.stopPropagation();
                    const parentDropdown = toggle.closest('.nav-item.dropdown');
                    if (parentDropdown) {
                        parentDropdown.classList.toggle('active');
                    }
                }
            });
        });

        // Close nav when a normal link is clicked (excluding dropdown toggles)
        const navLinks = document.querySelectorAll('.primary-navigation a:not(.dropdown-toggle)');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                primaryNav.setAttribute('data-visible', "false");
                navToggle.setAttribute('aria-expanded', "false");
                document.body.style.overflow = '';
            });
        });
    }

    // 2. Sticky Header styling on scroll
    const header = document.getElementById('header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // 3. Intersection Observer for Scroll Animations
    const faders = document.querySelectorAll('.fade-in, .fade-in-up, .fade-in-right');

    const appearOptions = {
        threshold: 0.15,
        rootMargin: "0px 0px -50px 0px"
    };

    const appearOnScroll = new IntersectionObserver(function(entries, observer) {
        entries.forEach(entry => {
            if (!entry.isIntersecting) {
                return;
            } else {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, appearOptions);

    faders.forEach(fader => {
        appearOnScroll.observe(fader);
    });
    // 4. Gallery Lightbox
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxClose = document.querySelector('.lightbox-close');
    const galleryImages = document.querySelectorAll('.gallery-img');

    if (lightbox && lightboxImg && galleryImages.length > 0) {
        galleryImages.forEach(img => {
            img.addEventListener('click', (e) => {
                if (img.closest('.gallery-card')) return;
                e.preventDefault();
                e.stopPropagation();
                lightbox.style.display = 'flex';
                lightboxImg.src = img.src;
            });
        });

        lightboxClose.addEventListener('click', () => {
            lightbox.style.display = 'none';
        });

        // Close when clicking outside the image
        lightbox.addEventListener('click', (e) => {
            if (e.target !== lightboxImg) {
                lightbox.style.display = 'none';
            }
        });
    }

    // 5. Testimonials Carousel (Responsive: 2 items on laptop/tablet, 1 item on mobile)
    const carouselWrappers = document.querySelectorAll('.testimonials-carousel-wrapper');
    carouselWrappers.forEach(wrapper => {
        const track = wrapper.querySelector('.carousel-track');
        if (!track) return;
        
        const slides = Array.from(track.children);
        const nextButton = wrapper.querySelector('.next-btn');
        const prevButton = wrapper.querySelector('.prev-btn');
        const dotsNav = wrapper.querySelector('.carousel-nav');
        let currentIndex = 0;
        let dots = [];

        const getItemsPerView = () => window.innerWidth >= 768 ? 2 : 1;
        const getMaxIndex = () => Math.max(0, slides.length - getItemsPerView());

        const setupDots = () => {
            if (!dotsNav) return;
            const maxIdx = getMaxIndex();
            dotsNav.innerHTML = '';
            dots = [];
            for (let i = 0; i <= maxIdx; i++) {
                const dot = document.createElement('button');
                dot.setAttribute('aria-label', `Go to slide ${i + 1}`);
                if (i === currentIndex) dot.classList.add('current-indicator');
                dot.addEventListener('click', () => {
                    currentIndex = i;
                    updateCarousel();
                });
                dotsNav.appendChild(dot);
                dots.push(dot);
            }
        };

        const updateCarousel = () => {
            const maxIdx = getMaxIndex();
            if (currentIndex > maxIdx) currentIndex = maxIdx;
            if (currentIndex < 0) currentIndex = 0;

            const slide = slides[0];
            if (!slide) return;
            const slideWidth = slide.getBoundingClientRect().width;
            const trackStyle = window.getComputedStyle(track);
            const gap = parseFloat(trackStyle.gap) || 0;
            const moveDistance = currentIndex * (slideWidth + gap);
            
            track.style.transform = `translateX(-${moveDistance}px)`;

            // Update dots
            if (dots.length > 0) {
                dots.forEach((dot, idx) => {
                    dot.classList.toggle('current-indicator', idx === currentIndex);
                });
            }
        };

        setupDots();
        setTimeout(updateCarousel, 50);

        let resizeTimer;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                setupDots();
                updateCarousel();
            }, 100);
        });

        if (nextButton) {
            nextButton.addEventListener('click', () => {
                const maxIdx = getMaxIndex();
                currentIndex = (currentIndex >= maxIdx) ? 0 : currentIndex + 1;
                updateCarousel();
            });
        }

        if (prevButton) {
            prevButton.addEventListener('click', () => {
                const maxIdx = getMaxIndex();
                currentIndex = (currentIndex <= 0) ? maxIdx : currentIndex - 1;
                updateCarousel();
            });
        }

        // Touch swipe support
        let startX = 0;
        let diffX = 0;
        track.addEventListener('touchstart', e => {
            startX = e.touches[0].clientX;
        }, { passive: true });
        track.addEventListener('touchmove', e => {
            diffX = e.touches[0].clientX - startX;
        }, { passive: true });
        track.addEventListener('touchend', () => {
            if (Math.abs(diffX) > 40) {
                const maxIdx = getMaxIndex();
                if (diffX < 0) {
                    currentIndex = (currentIndex >= maxIdx) ? 0 : currentIndex + 1;
                } else {
                    currentIndex = (currentIndex <= 0) ? maxIdx : currentIndex - 1;
                }
                updateCarousel();
            }
            diffX = 0;
        });

        // Auto-play with hover pause
        let autoPlayInterval = setInterval(() => {
            const maxIdx = getMaxIndex();
            currentIndex = (currentIndex >= maxIdx) ? 0 : currentIndex + 1;
            updateCarousel();
        }, 6000);

        wrapper.addEventListener('mouseenter', () => clearInterval(autoPlayInterval));
        wrapper.addEventListener('mouseleave', () => {
            clearInterval(autoPlayInterval);
            autoPlayInterval = setInterval(() => {
                const maxIdx = getMaxIndex();
                currentIndex = (currentIndex >= maxIdx) ? 0 : currentIndex + 1;
                updateCarousel();
            }, 6000);
        });
    });


    // 7. AI Virtual Patient Concierge Chat Widget Logic
    const aiLauncher = document.getElementById('aiLauncher');
    const aiWindow = document.getElementById('aiWindow');
    const aiClose = document.getElementById('aiClose');
    const aiChatBody = document.getElementById('aiChatBody');
    const aiInput = document.getElementById('aiInput');
    const aiSendBtn = document.getElementById('aiSendBtn');
    const quickChips = document.querySelectorAll('.quick-chip');

    const toggleChat = (show) => {
        if (!aiWindow) return;
        if (show === undefined) {
            aiWindow.classList.toggle('active');
        } else if (show) {
            aiWindow.classList.add('active');
        } else {
            aiWindow.classList.remove('active');
        }
        if (aiWindow.classList.contains('active')) {
            const badge = aiLauncher ? aiLauncher.querySelector('.launcher-badge') : null;
            if (badge) badge.style.display = 'none';
            if (aiInput) setTimeout(() => aiInput.focus(), 300);
            scrollToBottom();
        }
    };

    if (aiLauncher) aiLauncher.addEventListener('click', () => toggleChat());
    if (aiClose) aiClose.addEventListener('click', () => toggleChat(false));

    const scrollToBottom = () => {
        if (aiChatBody) aiChatBody.scrollTop = aiChatBody.scrollHeight;
    };

    const addMessage = (text, sender = 'assistant', isHtml = false) => {
        if (!aiChatBody) return;
        const msgDiv = document.createElement('div');
        msgDiv.className = `ai-msg ${sender}`;
        
        const timeStr = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
        
        msgDiv.innerHTML = `
            <div class="ai-msg-content">${isHtml ? text : text}</div>
            <span class="ai-time">${timeStr}</span>
        `;
        aiChatBody.appendChild(msgDiv);
        scrollToBottom();
    };

    const addTypingIndicator = () => {
        if (!aiChatBody) return null;
        const typingDiv = document.createElement('div');
        typingDiv.className = 'ai-msg assistant typing-msg';
        typingDiv.innerHTML = `
            <div class="ai-msg-content">
                <div class="typing-dots"><span></span><span></span><span></span></div>
            </div>
        `;
        aiChatBody.appendChild(typingDiv);
        scrollToBottom();
        return typingDiv;
    };

    const getAIResponse = (userQuery) => {
        const query = userQuery.toLowerCase();
        
        if (query.includes('toothache') || query.includes('pain') || query.includes('sensitivity')) {
            return "At Dr. Gaurav Mathpal's clinic, our foremost philosophy is **100% Painless Dentistry**. For acute tooth pain or sensitivity, we specialize in single-sitting Microscopic Root Canal treatments that give instant relief without any discomfort. Would you like to schedule an urgent consultation today?";
        } else if (query.includes('implant') || query.includes('missing')) {
            return "Dr. Gaurav Mathpal is a celebrated **Professional Mentor for Implants** with over 3,500+ successful implant surgeries. We use computer-guided 3D placement for pinpoint, painless precision and rapid healing. Would you like to book an implant assessment scan?";
        } else if (query.includes('smile') || query.includes('whitening') || query.includes('hollywood')) {
            return "Our digital Hollywood Smile Designing maps your unique facial proportions to give you a natural, radiant, and confident smile. You can even preview your future smile digitally before treatment starts! Can we book a Smile Makeover consultation for you?";
        } else if (query.includes('appointment') || query.includes('book') || query.includes('visit')) {
            return "We would love to welcome you! You can call us directly at **(+91)-8079791010** or fill out the appointment booking form on our Contact page. Our clinic hours are Mon-Sat 10:30 AM - 8:00 PM.";
        } else {
            return "Thank you for reaching out! Led by Dr. Gaurav Mathpal, we provide top-tier, painless dental care in New Delhi. Please let me know if you have questions about Implants, Root Canals, Smile Designing, or booking a visit!";
        }
    };

    const handleSendMessage = (text) => {
        if (!text || !text.trim()) return;
        addMessage(text, 'user');
        if (aiInput) aiInput.value = '';

        const typingDiv = addTypingIndicator();
        
        setTimeout(() => {
            if (typingDiv && typingDiv.parentNode) {
                typingDiv.parentNode.removeChild(typingDiv);
            }
            const reply = getAIResponse(text);
            const formattedReply = reply.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');
            addMessage(formattedReply + `<br><br><a href="contact.php" style="display:inline-flex;align-items:center;gap:4px;margin-top:6px;background:#10B981;color:#fff;padding:6px 14px;border-radius:12px;font-size:0.8rem;font-weight:600;text-decoration:none;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> Book Appointment</a>`, 'assistant', true);
        }, 1200);
    };

    if (aiSendBtn) {
        aiSendBtn.addEventListener('click', () => {
            if (aiInput) handleSendMessage(aiInput.value);
        });
    }

    if (aiInput) {
        aiInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') handleSendMessage(aiInput.value);
        });
    }

    quickChips.forEach(chip => {
        chip.addEventListener('click', () => {
            const queryText = chip.innerText.replace(/^[^\s]+\s/, '');
            handleSendMessage(queryText);
        });
    });

    // Global helper function accessible from onclick attributes
    window.openAIChat = (customMessage) => {
        toggleChat(true);
        if (customMessage) {
            setTimeout(() => {
                handleSendMessage(customMessage);
            }, 400);
        }
    };

    // 8. FAQ Accordions
    const faqQuestions = document.querySelectorAll('.faq-question');
    faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
            const item = question.parentElement;
            const isActive = item.classList.contains('active');
            
            // Close other active FAQs if desired or let multiple open
            document.querySelectorAll('.faq-item').forEach(faq => faq.classList.remove('active'));
            
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });

    // 9. Why Choose Implants Interactive Showcase
    const showcaseItems = document.querySelectorAll('.showcase-nav-item');
    const stageImg = document.getElementById('showcase-stage-img');
    const badgeTopTitle = document.getElementById('stage-badge-top-title');
    const badgeTopSub = document.getElementById('stage-badge-top-sub');
    const badgeBottomTitle = document.getElementById('stage-badge-bottom-title');
    const badgeBottomSub = document.getElementById('stage-badge-bottom-sub');

    if (showcaseItems.length > 0 && stageImg) {
        const updateShowcaseStage = (item) => {
            if (item.classList.contains('active')) return;
            showcaseItems.forEach(i => i.classList.remove('active'));
            item.classList.add('active');

            const imgSrc = item.getAttribute('data-img');
            const topTitle = item.getAttribute('data-top-title');
            const topSub = item.getAttribute('data-top-sub');
            const bottomTitle = item.getAttribute('data-bottom-title');
            const bottomSub = item.getAttribute('data-bottom-sub');

            stageImg.classList.add('fade-out');
            setTimeout(() => {
                stageImg.src = imgSrc;
                if (badgeTopTitle) badgeTopTitle.textContent = topTitle;
                if (badgeTopSub) badgeTopSub.textContent = topSub;
                if (badgeBottomTitle) badgeBottomTitle.textContent = bottomTitle;
                if (badgeBottomSub) badgeBottomSub.textContent = bottomSub;
                stageImg.classList.remove('fade-out');
            }, 200);
        };

        showcaseItems.forEach((item) => {
            item.addEventListener('click', () => updateShowcaseStage(item));
            item.addEventListener('mouseenter', () => {
                if (window.innerWidth > 991) {
                    updateShowcaseStage(item);
                }
            });
        });
    }

});

