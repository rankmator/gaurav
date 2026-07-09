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
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <?php include 'includes/header.php'; ?>

    <main id="main-content">
        <!-- Gallery Hero Section -->
        <section class="about-hero section-padding">
            <div class="container text-center">
                <span class="badge fade-in-up">✨ CLINIC & ACADEMIC SHOWCASE</span>
                <h1 class="fade-in-up ut-delay-1">Our World-Class <span class="highlight">Gallery</span></h1>
                <p class="fade-in-up ut-delay-2 ut-style-44">
                    Explore our ultra-modern clinic facilities in New Delhi, state-of-the-art dental navigation suites, international academic lectures, IIT Delhi workshops, and patient care moments led by Dr. Gaurav Mathpal.
                </p>
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

                <!-- Showcase Grid -->
                <div class="gallery-showcase-grid" id="galleryGrid">
                    
                    <!-- Clinic Item 1 -->
                    <div class="gallery-card fade-in-up" data-category="clinic">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/Dr.-Gaurav-Mathpal-Gallery-16.jpg" alt="Clinic Reception & Lounge" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                        <div class="gallery-card-info">
                            <div class="gallery-card-header-row">
                                <h4>Reception & Patient Lounge</h4>
                                <span class="gallery-category-tag">Clinic</span>
                            </div>
                            <p class="gallery-card-desc">Welcome to our serene, ultra-modern dental center lounge designed for relaxation and comfort.</p>
                        </div>
                    </div>

                    <!-- Events Item 1 -->
                    <div class="gallery-card fade-in-up" data-category="events">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/Dr.-Gaurav-Mathpal-1152x1536.jpeg" alt="Dr. Mathpal Clinical Excellence" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                        <div class="gallery-card-info">
                            <div class="gallery-card-header-row">
                                <h4>Keynote Lecture & Symposium</h4>
                                <span class="gallery-category-tag">Events</span>
                            </div>
                            <p class="gallery-card-desc">Dr. Mathpal presenting advanced prosthodontic protocols and implant innovations at national congress.</p>
                        </div>
                    </div>

                    <!-- Clinic Item 2 -->
                    <div class="gallery-card fade-in-up" data-category="clinic">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/Dr.-Gaurav-Mathpal-Gallery-11.jpg" alt="3D Guided Implant Suite" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                        <div class="gallery-card-info">
                            <div class="gallery-card-header-row">
                                <h4>3D Guided Implant Suite</h4>
                                <span class="gallery-category-tag">Clinic</span>
                            </div>
                            <p class="gallery-card-desc">Equipped with cutting-edge navigation systems and surgical lighting for precision implantology.</p>
                        </div>
                    </div>

                    <!-- Events Item 2 -->
                    <div class="gallery-card fade-in-up" data-category="events">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/dentist-examining-patient-s-teeth.jpg" alt="Comprehensive Clinical Assessment" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                        <div class="gallery-card-info">
                            <div class="gallery-card-header-row">
                                <h4>Clinical Assessment Session</h4>
                                <span class="gallery-category-tag">Events</span>
                            </div>
                            <p class="gallery-card-desc">Detailed one-on-one diagnostic evaluation and digital bite alignment consultation.</p>
                        </div>
                    </div>

                    <!-- Clinic Item 3 -->
                    <div class="gallery-card fade-in-up" data-category="clinic">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/Dr.-Gaurav-Mathpal-Gallery-9.jpg" alt="Sterilization & Hygiene Suite" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                        <div class="gallery-card-info">
                            <div class="gallery-card-header-row">
                                <h4>Sterilization & Hygiene Center</h4>
                                <span class="gallery-category-tag">Clinic</span>
                            </div>
                            <p class="gallery-card-desc">Hospital-grade 4-step autoclave sterilization protocols ensuring 100% germ-free patient safety.</p>
                        </div>
                    </div>

                    <!-- Events Item 3 -->
                    <div class="gallery-card fade-in-up" data-category="events">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/happy-smiling-teeth.jpg" alt="Smile Transformation Showcase" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                        <div class="gallery-card-info">
                            <div class="gallery-card-header-row">
                                <h4>Smile Makeover Showcase</h4>
                                <span class="gallery-category-tag">Events</span>
                            </div>
                            <p class="gallery-card-desc">Celebrating life-changing patient confidence and aesthetic harmony after full-arch rehabilitation.</p>
                        </div>
                    </div>

                    <!-- Clinic Item 4 -->
                    <div class="gallery-card fade-in-up" data-category="clinic">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/Dr.-Gaurav-Mathpal-Gallery-4.jpg" alt="Prosthodontic Consultation Suite" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                        <div class="gallery-card-info">
                            <div class="gallery-card-header-row">
                                <h4>Prosthodontic Consultation Room</h4>
                                <span class="gallery-category-tag">Clinic</span>
                            </div>
                            <p class="gallery-card-desc">Dedicated consultation environment for comprehensive smile treatment planning and case reviews.</p>
                        </div>
                    </div>

                    <!-- Events Item 4 -->
                    <div class="gallery-card fade-in-up" data-category="events">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/692ec865453c7be79f9e646e_implants.png" alt="Implantology Masterclass Workshop" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                        <div class="gallery-card-info">
                            <div class="gallery-card-header-row">
                                <h4>Implantology Masterclass</h4>
                                <span class="gallery-category-tag">Events</span>
                            </div>
                            <p class="gallery-card-desc">Live clinical workshop demonstrating immediate-load titanium implant placement techniques.</p>
                        </div>
                    </div>

                    <!-- Clinic Item 5 -->
                    <div class="gallery-card fade-in-up" data-category="clinic">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/hero-img.webp" alt="State of the Art Dental Clinic" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                        <div class="gallery-card-info">
                            <div class="gallery-card-header-row">
                                <h4>Advanced Dental Operatory</h4>
                                <span class="gallery-category-tag">Clinic</span>
                            </div>
                            <p class="gallery-card-desc">Ergonomically designed treatment chairs equipped with fiber-optic lighting and digital monitors.</p>
                        </div>
                    </div>

                    <!-- Events Item 5 -->
                    <div class="gallery-card fade-in-up" data-category="events">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/692ec865d15415f676a9c438_crowns.png" alt="Digital Workflow Workshop" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                        <div class="gallery-card-info">
                            <div class="gallery-card-header-row">
                                <h4>Digital Workflow Seminar</h4>
                                <span class="gallery-category-tag">Events</span>
                            </div>
                            <p class="gallery-card-desc">Academic session highlighting same-day CAD/CAM ceramic milling and 3D printing precision.</p>
                        </div>
                    </div>

                    <!-- Clinic Item 6 -->
                    <div class="gallery-card fade-in-up" data-category="clinic">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/2.webp" alt="Digital Smile Designing Studio" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                        <div class="gallery-card-info">
                            <div class="gallery-card-header-row">
                                <h4>Smile Designing Studio</h4>
                                <span class="gallery-category-tag">Clinic</span>
                            </div>
                            <p class="gallery-card-desc">High-precision facial scanner and digital smile architecture laboratory for custom makeovers.</p>
                        </div>
                    </div>

                    <!-- Events Item 6 -->
                    <div class="gallery-card fade-in-up" data-category="events">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/692ec86508118395a85753f9_whitening (1).png" alt="Laser Aesthetics Symposium" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                        <div class="gallery-card-info">
                            <div class="gallery-card-header-row">
                                <h4>Laser Aesthetics Conference</h4>
                                <span class="gallery-category-tag">Events</span>
                            </div>
                            <p class="gallery-card-desc">International symposium discussing bio-compatible laser teeth whitening and gum recontouring.</p>
                        </div>
                    </div>

                    <!-- Clinic Item 7 -->
                    <div class="gallery-card fade-in-up" data-category="clinic">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/3.webp" alt="Full Mouth Rehabilitation Suite" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                        <div class="gallery-card-info">
                            <div class="gallery-card-header-row">
                                <h4>Rehabilitation Suite</h4>
                                <span class="gallery-category-tag">Clinic</span>
                            </div>
                            <p class="gallery-card-desc">Specialized prosthetic treatment environment engineered for complex full-mouth bite reconstructions.</p>
                        </div>
                    </div>

                    <!-- Events Item 7 -->
                    <div class="gallery-card fade-in-up" data-category="events">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/5.webp" alt="Sinus Elevation Surgical Workshop" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                        <div class="gallery-card-info">
                            <div class="gallery-card-header-row">
                                <h4>Sinus Grafting Workshop</h4>
                                <span class="gallery-category-tag">Events</span>
                            </div>
                            <p class="gallery-card-desc">Specialized surgical training session on vertical ridge augmentation and piezoelectric sinus lifts.</p>
                        </div>
                    </div>

                    <!-- Clinic Item 8 -->
                    <div class="gallery-card fade-in-up" data-category="clinic">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/4.webp" alt="Maxillofacial Surgery Theater" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                        <div class="gallery-card-info">
                            <div class="gallery-card-header-row">
                                <h4>Surgical Theater Suite</h4>
                                <span class="gallery-category-tag">Clinic</span>
                            </div>
                            <p class="gallery-card-desc">Advanced surgical theater for atraumatic wisdom tooth removals and bone scaffolding procedures.</p>
                        </div>
                    </div>

                    <!-- Events Item 8 -->
                    <div class="gallery-card fade-in-up" data-category="events">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/1.webp" alt="Patient Celebration Milestone" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                        <div class="gallery-card-info">
                            <div class="gallery-card-header-row">
                                <h4>Patient Success Milestone</h4>
                                <span class="gallery-category-tag">Events</span>
                            </div>
                            <p class="gallery-card-desc">Documenting exceptional aesthetic harmony and long-term functional success with happy patients.</p>
                        </div>
                    </div>

                    <!-- Clinic Item 9 -->
                    <div class="gallery-card fade-in-up" data-category="clinic">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/6.webp" alt="Laser Periodontal Suite" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                        <div class="gallery-card-info">
                            <div class="gallery-card-header-row">
                                <h4>Laser Periodontal Suite</h4>
                                <span class="gallery-category-tag">Clinic</span>
                            </div>
                            <p class="gallery-card-desc">Non-invasive laser gum therapy suite engineered for rapid tissue healing and zero bleeding.</p>
                        </div>
                    </div>

                    <!-- Events Item 9 -->
                    <div class="gallery-card fade-in-up" data-category="events">
                        <div class="gallery-card-img-wrapper">
                            <img src="img/Dr.-Gaurav-Mathpal-Gallery-16.jpg" alt="Global Oral Health Summit Reception" class="gallery-img">
                            <div class="gallery-card-overlay">
                                <div class="gallery-zoom-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
                                    Click to Expand
                                </div>
                            </div>
                        </div>
                        <div class="gallery-card-info">
                            <div class="gallery-card-header-row">
                                <h4>Global Oral Health Summit</h4>
                                <span class="gallery-category-tag">Events</span>
                            </div>
                            <p class="gallery-card-desc">Hosting international dental faculty and researchers for collaborative prosthodontic advancements.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script src="js/scripts.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const filterButtons = document.querySelectorAll('.gallery-filter-btn');
            const galleryCards = document.querySelectorAll('.gallery-card');

            filterButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    // Remove active class from all buttons
                    filterButtons.forEach(b => b.classList.remove('active'));
                    // Add active class to clicked button
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
