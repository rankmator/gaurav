document.addEventListener('DOMContentLoaded', () => {
    // 1. Mobile Navigation Toggle
    const navToggle = document.querySelector('.mobile-nav-toggle');
    const primaryNav = document.querySelector('.primary-navigation');

    navToggle.addEventListener('click', () => {
        const isVisible = primaryNav.getAttribute('data-visible');
        
        if (isVisible === "false") {
            primaryNav.setAttribute('data-visible', "true");
            navToggle.setAttribute('aria-expanded', "true");
        } else {
            primaryNav.setAttribute('data-visible', "false");
            navToggle.setAttribute('aria-expanded', "false");
        }
    });

    // Close nav when a link is clicked
    const navLinks = document.querySelectorAll('.primary-navigation a');
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            primaryNav.setAttribute('data-visible', "false");
            navToggle.setAttribute('aria-expanded', "false");
        });
    });

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
            img.addEventListener('click', () => {
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

    // 5. Testimonials Carousel
    const track = document.querySelector('.carousel-track');
    if (track) {
        const slides = Array.from(track.children);
        const nextButton = document.querySelector('.next-btn');
        const prevButton = document.querySelector('.prev-btn');
        const dotsNav = document.querySelector('.carousel-nav');
        const dots = Array.from(dotsNav.children);
        let currentIndex = 0;

        const updateCarousel = (index) => {
            track.style.transform = `translateX(-${index * 100}%)`;
            
            // Update dots
            dotsNav.querySelector('.current-indicator').classList.remove('current-indicator');
            dots[index].classList.add('current-indicator');
            
            // Update current slide class
            track.querySelector('.current-slide').classList.remove('current-slide');
            slides[index].classList.add('current-slide');
        };

        nextButton.addEventListener('click', () => {
            currentIndex = (currentIndex === slides.length - 1) ? 0 : currentIndex + 1;
            updateCarousel(currentIndex);
        });

        prevButton.addEventListener('click', () => {
            currentIndex = (currentIndex === 0) ? slides.length - 1 : currentIndex - 1;
            updateCarousel(currentIndex);
        });

        dotsNav.addEventListener('click', e => {
            const targetDot = e.target.closest('button');
            if (!targetDot) return;
            currentIndex = dots.findIndex(dot => dot === targetDot);
            updateCarousel(currentIndex);
        });
        
        // Auto-play
        setInterval(() => {
            currentIndex = (currentIndex === slides.length - 1) ? 0 : currentIndex + 1;
            updateCarousel(currentIndex);
        }, 6000);
    }
});
