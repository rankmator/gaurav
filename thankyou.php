<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You | Dr. Gaurav Mathpal | Prosthodontist & Implantologist in New Delhi</title>
    <meta name="description" content="Thank you for contacting Dr. Gaurav Mathpal's dental clinic in New Delhi. Your appointment request has been received and our care coordination team will connect with you shortly.">

    <?php include 'nav-links.php'; ?>

    <!-- JSON-LD LocalBusiness Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Dentist",
      "name": "Dr. Gaurav Mathpal",
      "image": "img/Dr.-Gaurav-Mathpal-Gallery-16.jpg",
      "@id": "https://drgauravmathpal.com/",
      "url": "https://drgauravmathpal.com/",
      "telephone": "+918079791010",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Sector 12",
        "addressLocality": "New Delhi",
        "postalCode": "110075",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.6139,
        "longitude": 77.2090
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday",
          "Saturday"
        ],
        "opens": "09:00",
        "closes": "20:00"
      },
      "sameAs": [
        "https://www.facebook.com/panaceadental",
        "https://www.instagram.com/panacea_clinic_r/",
        "https://www.youtube.com/channel/UCWmA77bYwksKciQaOdCvr8w",
        "https://x.com/DrGauravMaiv",
        "https://www.linkedin.com/in/drgauravmathpal-panacea-68228341b/"
      ]
    }
    </script>
</head>

<body>

    <?php include 'header.php'; ?>

    <?php
    $patient_name = isset($_REQUEST['name']) && !empty(trim($_REQUEST['name'])) ? htmlspecialchars(trim($_REQUEST['name'])) : '';
    $selected_service = isset($_REQUEST['service']) && !empty(trim($_REQUEST['service'])) ? htmlspecialchars(trim($_REQUEST['service'])) : '';
    
    $service_labels = [
        'implants' => 'Dental Implants',
        'smile' => 'Smile Designing',
        'root-canal' => 'Root Canal Treatment',
        'rehabilitation' => 'Full Mouth Rehabilitation',
        'surgery' => 'Oral Surgery & Extractions',
        'other' => 'General Consultation'
    ];
    
    $service_display = '';
    if (!empty($selected_service)) {
        $service_display = isset($service_labels[$selected_service]) ? $service_labels[$selected_service] : ucwords(str_replace('-', ' ', $selected_service));
    }
    ?>

    <main>
        <!-- Page Header / Hero Section -->
        <section class="page-header thankyou-hero-section">
            <div class="container thankyou-hero-container">
                <!-- Success Animated Icon -->
                <div class="fade-in thankyou-check-circle">
                    <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                </div>

                <span class="badge fade-in thankyou-status-badge">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                    Appointment Request Received
                </span>

                <h1 class="page-title fade-in-up thankyou-heading">
                    Thank You<?php echo !empty($patient_name) ? ', <span class="highlight">' . $patient_name . '</span>' : ''; ?>!
                </h1>

                <p class="page-subtitle fade-in-up thankyou-subheading">
                    Your consultation inquiry has been securely transmitted to Dr. Gaurav Mathpal's specialized clinical coordination team in Sector 12, New Delhi.
                </p>

                <?php if (!empty($service_display)): ?>
                <div class="fade-in-up thankyou-service-box">
                    <span class="thankyou-service-lbl">Requested Treatment:</span>
                    <strong class="thankyou-service-val"><?php echo $service_display; ?></strong>
                </div>
                <?php endif; ?>
            </div>
        </section>

        <!-- What Happens Next Section -->
        <section class="section-padding ut-bg-white-upper">
            <div class="container">
                <div class="section-header text-center fade-in ut-mb-3-5rem">
                    <span class="badge ut-mb12-inblock">Clear Communication</span>
                    <h2 class="ut-style-87">What Happens <span class="highlight">Next?</span></h2>
                    <p class="ut-style-33">We strive to provide a seamless, stress-free experience from your very first interaction.</p>
                </div>

                <div class="ut-style-58">
                    <!-- Step 1 -->
                    <div class="contact-card fade-in-up ut-style-3">
                        <div class="ut-style-134">
                            01
                        </div>
                        <h3 class="ut-style-81">Clinical Review</h3>
                        <p class="ut-style-34">
                            Our patient care coordinator reviews your inquiry and coordinates with Dr. Mathpal's operatory schedule to reserve the ideal consultation slot.
                        </p>
                    </div>

                    <!-- Step 2 -->
                    <div class="contact-card fade-in-up ut-style-4">
                        <div class="ut-style-134">
                            02
                        </div>
                        <h3 class="ut-style-81">Prompt Confirmation</h3>
                        <p class="ut-style-34">
                            Within 2 to 4 business hours, our team will connect with you via phone or WhatsApp to finalize your preferred time and answer any preliminary questions.
                        </p>
                    </div>

                    <!-- Step 3 -->
                    <div class="contact-card fade-in-up ut-style-5">
                        <div class="ut-style-134">
                            03
                        </div>
                        <h3 class="ut-style-81">Precision Consultation</h3>
                        <p class="ut-style-34">
                            Visit our cutting-edge dental clinic in Sector 12, New Delhi for a comprehensive, 100% painless diagnostic assessment and tailored treatment plan.
                        </p>
                    </div>
                </div>

                <!-- Emergency & Immediate Assistance Banner -->
                <div class="fade-in-up ut-style-17">
                    <div class="ut-flex-1-1-450px">
                        <div class="ut-style-61">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                            Urgent Dental Care Available
                        </div>
                        <h3 class="ut-style-85">
                            Need Immediate Dental Assistance?
                        </h3>
                        <p class="ut-style-39">
                            If you are experiencing severe dental pain, a damaged restoration, or acute trauma, don't wait. Contact our front desk directly for priority same-day emergency triage.
                        </p>
                    </div>
                    <div class="ut-flex-wrap-gap1">
                        <a href="tel:+918079791010" class="btn ut-style-10">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            Call (+91)-8079791010
                        </a>
                        <a href="https://wa.me/918079791010" target="_blank" class="btn ut-style-20">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.289.072.39-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12z"></path></svg>
                            WhatsApp Us
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Explore While You Wait Section -->
        <section class="section-padding bg-soft-teal ut-style-22">
            <div class="container">
                <div class="section-header text-center fade-in ut-margin-bottom-3rem">
                    <h2>Explore Our <span class="highlight">Clinical Excellence</span></h2>
                    <p class="ut-style-33">Learn more about Dr. Mathpal's research, specialized treatments, and clinical philosophy.</p>
                </div>

                <div class="ut-style-59">
                    <!-- Card 1 -->
                    <div class="contact-card fade-in-up ut-style-7">
                        <div>
                            <div class="ut-style-133">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10v6"></path><path d="M20 20a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v14Z"></path><path d="M12 12v6"></path><path d="M8 12v6"></path><path d="M16 12v6"></path></svg>
                            </div>
                            <h3 class="ut-style-80">Meet Dr. Gaurav Mathpal</h3>
                            <p class="ut-style-32">
                                PhD, MDS, BDS, CEP (IIT Delhi). Discover our international UK patents, biomedical research publications, and over 10+ years of Prosthodontic leadership.
                            </p>
                        </div>
                        <a class="ut-style-28" href="about.php">
                            Read Full Profile <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>

                    <!-- Card 2 -->
                    <div class="contact-card fade-in-up ut-style-8">
                        <div>
                            <div class="ut-style-133">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20"></path><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                            </div>
                            <h3 class="ut-style-80">Specialised Treatments</h3>
                            <p class="ut-style-32">
                                From computer-guided 3D Dental Implants to Full Mouth Rehabilitation and Hollywood Smile Designing, explore our painless clinical procedures.
                            </p>
                        </div>
                        <a class="ut-style-28" href="rehabilitation.php">
                            Explore Treatments <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>

                    <!-- Card 3 -->
                    <div class="contact-card fade-in-up ut-style-9">
                        <div>
                            <div class="ut-style-133">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            </div>
                            <h3 class="ut-style-80">Clinic Location</h3>
                            <p class="ut-style-32">
                                Conveniently situated in Sector 12, New Delhi. Get interactive driving directions and view our operating hours and patient amenities.
                            </p>
                        </div>
                        <a class="ut-style-28" href="contact.php">
                            Get Directions <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </div>

                <div class="ut-style-119">
                    <a href="index.php" class="btn btn-primary ut-style-114">
                        Return to Homepage
                    </a>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
