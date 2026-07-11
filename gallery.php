<?php
$cur_script = 'gallery.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic & Events Gallery | Dr. Gaurav Mathpal - Prosthodontist & Implantologist</title>
    <meta name="description"
        content="Explore our world-class dental clinic in New Delhi, advanced laser and 3D implant technology, international academic conferences, and patient smile transformations led by Dr. Gaurav Mathpal.">
    
    <?php include 'nav-links.php'; ?>
</head>

<body>

    <?php include 'header.php'; ?>

    <main id="main-content">
        <!-- Gallery Hero Section (Breadcrumb area exactly like blog.php) -->
        <section class="about-hero">
            <div class="container ut-style-120">
                <div class="fade-in-up">
                    <span class="badge ut-style-97"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg> Clinic & Academic Showcase</span>
                    <h1 class="ut-style-89">
                        Our World-Class <span class="italic-green">Gallery</span>
                    </h1>
                    <p class="ut-style-78">
                        Explore our ultra-modern clinic facilities in New Delhi, state-of-the-art dental navigation suites, international academic lectures, IIT Delhi workshops, and patient care moments led by Dr. Gaurav Mathpal.
                    </p>
                </div>
            </div>
        </section>

        <!-- Gallery Showcase & Filter Section -->
        <section class="section-padding" style="background-color: #f8fafc; min-height: 80vh;">
            <div class="container">
                <!-- Filter Bar -->
                <div class="gallery-filter-bar fade-in-up">
                    <button class="gallery-filter-btn active" data-filter="all">All Photos (18)</button>
                    <button class="gallery-filter-btn" data-filter="events">Events & Lectures (9)</button>
                    <button class="gallery-filter-btn" data-filter="clinic">Clinic & Facilities (9)</button>
                </div>

                <!-- Showcase Grid (Collage Card View - Only Images, No Text) -->
                <div class="gallery-showcase-grid" id="galleryGrid">
                    
                    <!-- Clinic Item 1 -->
                    <div class="gallery-card fade-in-up" data-category="clinic" onclick="openGalleryModal('img/Dr.-Gaurav-Mathpal-Gallery-16.jpg')">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/Dr.-Gaurav-Mathpal-Gallery-16.jpg" alt="Clinic Reception & Lounge" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Events Item 1 -->
                    <div class="gallery-card fade-in-up" data-category="events" onclick="openGalleryModal('img/Dr.-Gaurav-Mathpal-1152x1536.jpeg')">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/Dr.-Gaurav-Mathpal-1152x1536.jpeg" alt="Dr. Mathpal Clinical Excellence" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Clinic Item 2 -->
                    <div class="gallery-card fade-in-up" data-category="clinic" onclick="openGalleryModal('img/Dr.-Gaurav-Mathpal-Gallery-11.jpg')">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/Dr.-Gaurav-Mathpal-Gallery-11.jpg" alt="3D Guided Implant Suite" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Events Item 2 -->
                    <div class="gallery-card fade-in-up" data-category="events" onclick="openGalleryModal('img/dentist-examining-patient-s-teeth.jpg')">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/dentist-examining-patient-s-teeth.jpg" alt="Comprehensive Clinical Assessment" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Clinic Item 3 -->
                    <div class="gallery-card fade-in-up" data-category="clinic" onclick="openGalleryModal('img/Dr.-Gaurav-Mathpal-Gallery-9.jpg')">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/Dr.-Gaurav-Mathpal-Gallery-9.jpg" alt="Sterilization & Hygiene Suite" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Events Item 3 -->
                    <div class="gallery-card fade-in-up" data-category="events" onclick="openGalleryModal('img/happy-smiling-teeth.jpg')">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/happy-smiling-teeth.jpg" alt="Smile Transformation Showcase" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Clinic Item 4 -->
                    <div class="gallery-card fade-in-up" data-category="clinic" onclick="openGalleryModal('img/Dr.-Gaurav-Mathpal-Gallery-4.jpg')">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/Dr.-Gaurav-Mathpal-Gallery-4.jpg" alt="Prosthodontic Consultation Suite" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Events Item 4 -->
                    <div class="gallery-card fade-in-up" data-category="events" onclick="openGalleryModal('img/692ec865453c7be79f9e646e_implants.png')">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/692ec865453c7be79f9e646e_implants.png" alt="Implantology Masterclass Workshop" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Clinic Item 5 -->
                    <div class="gallery-card fade-in-up" data-category="clinic" onclick="openGalleryModal('img/hero-img.webp')">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/hero-img.webp" alt="State of the Art Dental Clinic" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Events Item 5 -->
                    <div class="gallery-card fade-in-up" data-category="events" onclick="openGalleryModal('img/692ec865d15415f676a9c438_crowns.png')">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/692ec865d15415f676a9c438_crowns.png" alt="Digital Workflow Workshop" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Clinic Item 6 -->
                    <div class="gallery-card fade-in-up" data-category="clinic" onclick="openGalleryModal('img/2.webp')">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/2.webp" alt="Digital Smile Designing Studio" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Events Item 6 -->
                    <div class="gallery-card fade-in-up" data-category="events" onclick="openGalleryModal('img/692ec86508118395a85753f9_whitening (1).png')">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/692ec86508118395a85753f9_whitening (1).png" alt="Laser Aesthetics Symposium" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Clinic Item 7 -->
                    <div class="gallery-card fade-in-up" data-category="clinic" onclick="openGalleryModal('img/3.webp')">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/3.webp" alt="Full Mouth Rehabilitation Suite" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Events Item 7 -->
                    <div class="gallery-card fade-in-up" data-category="events" onclick="openGalleryModal('img/5.webp')">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/5.webp" alt="Sinus Elevation Surgical Workshop" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Clinic Item 8 -->
                    <div class="gallery-card fade-in-up" data-category="clinic" onclick="openGalleryModal('img/4.webp')">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/4.webp" alt="Maxillofacial Surgery Theater" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Events Item 8 -->
                    <div class="gallery-card fade-in-up" data-category="events" onclick="openGalleryModal('img/1.webp')">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/1.webp" alt="Patient Celebration Milestone" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Clinic Item 9 -->
                    <div class="gallery-card fade-in-up" data-category="clinic" onclick="openGalleryModal('img/6.webp')">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/6.webp" alt="Laser Periodontal Suite" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Events Item 9 -->
                    <div class="gallery-card fade-in-up" data-category="events" onclick="openGalleryModal('img/Dr.-Gaurav-Mathpal-Gallery-13.jpg')">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/Dr.-Gaurav-Mathpal-Gallery-13.jpg" alt="Global Oral Health Summit Reception" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Lightbox Modal -->
        <div id="galleryLightbox" class="gallery-lightbox-modal" onclick="closeGalleryModal(event)">
            <span class="gallery-lightbox-close" onclick="closeGalleryModal(event)">&times;</span>
            <button class="gallery-lightbox-nav gallery-lightbox-prev" onclick="changeGallerySlide(-1, event)" aria-label="Previous Photo">&#10094;</button>
            <div class="gallery-lightbox-img-wrapper">
                <img class="gallery-lightbox-content" id="galleryLightboxImg" alt="Expanded Photo">
                <div class="gallery-lightbox-counter" id="galleryLightboxCounter"></div>
            </div>
            <button class="gallery-lightbox-nav gallery-lightbox-next" onclick="changeGallerySlide(1, event)" aria-label="Next Photo">&#10095;</button>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script>
        let currentGalleryList = [];
        let currentSlideIndex = 0;

        function updateGalleryList() {
            const visibleCards = Array.from(document.querySelectorAll('.gallery-card')).filter(card => {
                const style = window.getComputedStyle(card);
                return style.display !== 'none' && card.style.opacity !== '0';
            });
            currentGalleryList = visibleCards.map(card => {
                const img = card.querySelector('img');
                return img ? img.getAttribute('src') : '';
            }).filter(src => Boolean(src));
        }

        function openGalleryModal(imgSrc, event) {
            const evt = event || window.event;
            if (evt) {
                evt.stopPropagation();
                evt.preventDefault();
            }
            updateGalleryList();
            currentSlideIndex = currentGalleryList.indexOf(imgSrc);
            if (currentSlideIndex === -1 && currentGalleryList.length > 0) {
                currentSlideIndex = 0;
            }

            const modal = document.getElementById('galleryLightbox');
            const modalImg = document.getElementById('galleryLightboxImg');
            const counter = document.getElementById('galleryLightboxCounter');

            if (modal && modalImg) {
                modalImg.src = imgSrc;
                if (counter && currentGalleryList.length > 0) {
                    counter.textContent = `${currentSlideIndex + 1} / ${currentGalleryList.length}`;
                }
                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        }

        function changeGallerySlide(direction, event) {
            const evt = event || window.event;
            if (evt) {
                evt.stopPropagation();
                evt.preventDefault();
            }
            if (currentGalleryList.length === 0) {
                updateGalleryList();
            }
            if (currentGalleryList.length <= 1) return;

            currentSlideIndex += direction;
            if (currentSlideIndex < 0) {
                currentSlideIndex = currentGalleryList.length - 1;
            } else if (currentSlideIndex >= currentGalleryList.length) {
                currentSlideIndex = 0;
            }

            const modalImg = document.getElementById('galleryLightboxImg');
            const counter = document.getElementById('galleryLightboxCounter');
            if (modalImg && currentGalleryList[currentSlideIndex]) {
                modalImg.src = currentGalleryList[currentSlideIndex];
                if (counter) {
                    counter.textContent = `${currentSlideIndex + 1} / ${currentGalleryList.length}`;
                }
            }
        }

        function closeGalleryModal(event) {
            const evt = event || window.event;
            if (evt && (evt.target.classList.contains('gallery-lightbox-nav') || evt.target.id === 'galleryLightboxImg')) {
                return;
            }
            const modal = document.getElementById('galleryLightbox');
            if (!evt || evt.target.id === 'galleryLightbox' || evt.target.classList.contains('gallery-lightbox-close')) {
                if (modal) {
                    modal.classList.remove('active');
                    document.body.style.overflow = '';
                }
            }
        }

        document.addEventListener('keydown', (e) => {
            const modal = document.getElementById('galleryLightbox');
            if (!modal || !modal.classList.contains('active')) return;

            if (e.key === 'Escape') {
                closeGalleryModal();
            } else if (e.key === 'ArrowRight') {
                changeGallerySlide(1, e);
            } else if (e.key === 'ArrowLeft') {
                changeGallerySlide(-1, e);
            }
        });

        // Touch Swipe Navigation on Mobile & Tablets
        let touchStartX = 0;
        let touchEndX = 0;
        document.addEventListener('touchstart', (e) => {
            const modal = document.getElementById('galleryLightbox');
            if (modal && modal.classList.contains('active')) {
                touchStartX = e.changedTouches[0].screenX;
            }
        }, { passive: true });

        document.addEventListener('touchend', (e) => {
            const modal = document.getElementById('galleryLightbox');
            if (modal && modal.classList.contains('active')) {
                touchEndX = e.changedTouches[0].screenX;
                if (touchEndX < touchStartX - 50) {
                    changeGallerySlide(1); // Swipe left -> next
                } else if (touchEndX > touchStartX + 50) {
                    changeGallerySlide(-1); // Swipe right -> previous
                }
            }
        }, { passive: true });

        document.addEventListener('DOMContentLoaded', () => {
            const filterButtons = document.querySelectorAll('.gallery-filter-btn');
            const galleryCards = document.querySelectorAll('.gallery-card');

            filterButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    filterButtons.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');

                    const filterValue = btn.getAttribute('data-filter');

                    galleryCards.forEach(card => {
                        if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                            card.style.display = 'flex';
                            setTimeout(() => {
                                card.style.opacity = '1';
                                card.style.transform = 'translateY(0)';
                            }, 50);
                        } else {
                            card.style.opacity = '0';
                            card.style.transform = 'translateY(15px)';
                            setTimeout(() => {
                                card.style.display = 'none';
                            }, 300);
                        }
                    });
                });
            });
        });
    </script>
</body>

</html>
