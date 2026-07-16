<?php
if (!isset($page_title)) {
    $page_title = "Dr. Gaurav Mathpal | Prosthodontist & Implantologist in New Delhi";
}
if (!isset($page_desc)) {
    $page_desc = "Dr. Gaurav Mathpal - Prosthodontist and Implantologist in New Delhi. Specializing in Implants, Smile Designing, Root Canal, and TMJ Disorders.";
}
$cur_script = basename($_SERVER['PHP_SELF']);
$is_services = in_array($cur_script, ['implants.php', 'smile-designing.php', 'rehabilitation.php', 'surgery.php']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/logo-dr-mathpal.png">
    <link rel="shortcut icon" href="img/logo-dr-mathpal.png" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="css/styles.css?v=<?php echo filemtime('css/styles.css'); ?>">

    <!-- JSON-LD LocalBusiness Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Dentist",
      "name": "Dr. Gaurav Mathpal",
      "image": "img/Dr.-Gaurav-Mathpal-Gallery-16.jpg",
      "@id": "https://drgauravmathpal.in/",
      "url": "https://drgauravmathpal.in/",
      "telephone": "+919811200054",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "1st Floor A-421, Market Road, Opp. A K Collection, Block A, New Ashok Nagar",
        "addressLocality": "New Delhi",
        "postalCode": "110096",
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
    <?php if (isset($extra_head)) echo $extra_head; ?>
</head>

<body>

    <!-- Topbar Section -->
    <div class="topbar">
        <div class="topbar-container">
            <div class="topbar-info">
                <a href="tel:+919811200054"><svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="ut-margin-right-4px-vertical-align-middle">
                        <path
                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                        </path>
                    </svg> (+91)-9811200054</a>
                <a href="mailto:Mathpalgaurav@gmail.com"><svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg> Mathpalgaurav@gmail.com</a>
                <span class="hours-text" style="opacity: 0.3;">|</span>
                <span class="hours-text" style="display:flex;align-items:center;gap:6px;"><svg width="14" height="14"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg> Mon - Sat: 10:30 AM - 8:00 PM</span>
            </div>
            <div class="topbar-socials">
                <span>Follow Us:</span>
                <a href="https://www.facebook.com/panaceadental" target="_blank" aria-label="Facebook"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>
                <a href="https://www.instagram.com/panacea_clinic_r/" target="_blank" aria-label="Instagram"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></a>
                <a href="https://www.youtube.com/channel/UCWmA77bYwksKciQaOdCvr8w" target="_blank" aria-label="YouTube"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02" fill="#fff"></polygon></svg></a>
                <a href="https://x.com/DrGauravMaiv" target="_blank" aria-label="X (Twitter)"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path></svg></a>
                <a href="https://www.linkedin.com/in/drgauravmathpal-panacea-68228341b/" target="_blank" aria-label="LinkedIn"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg></a>
            </div>
        </div>
    </div>

    <!-- Header / Navigation -->
    <header class="header" id="header">
        <div class="container nav-container">
            <a href="index.php" class="logo">
                <div class="logo-icon-box">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2C8 2 6 5 6 9v3c0 3.5 1.5 6 2.5 8 .5 1 1.5 2 2.5 2s1.5-1 2-3c.5 2 1 3 2 3s2-1 2.5-2C18.5 18 20 15.5 20 12V9c0-4-2-7-6-7z"></path></svg>
                </div>
                <span class="logo-text">Dr. Gaurav <span class="highlight">Mathpal</span></span>
            </a>

            <button class="mobile-nav-toggle" aria-controls="primary-navigation" aria-expanded="false">
                <span class="sr-only">Menu</span>
                <div class="hamburger">
                    <span></span><span></span><span></span>
                </div>
            </button>

            <nav>
                <ul id="primary-navigation" data-visible="false" class="primary-navigation">
                    <li><a href="index.php" class="<?php echo ($cur_script === 'index.php' || $cur_script === '') ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="about.php" class="<?php echo ($cur_script === 'about.php') ? 'active' : ''; ?>">About Doctor</a></li>
                    <li class="nav-item dropdown mega-dropdown">
                        <a href="index.php#services" class="dropdown-toggle <?php echo $is_services ? 'active' : ''; ?>">Services <svg width="12" height="12"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                style="margin-left:4px; vertical-align:middle; transition: transform 0.2s;">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg></a>
                        <div class="mega-menu glass-card">
                            <div class="mega-menu-grid">
                                <a href="implants.php" class="mega-item" <?php echo ($cur_script === 'implants.php') ? 'style="background: rgba(16, 185, 129, 0.08);"' : ''; ?>>
                                    <div class="mega-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                                    </div>
                                    <div class="mega-text">
                                        <h4>Dental Implants</h4>
                                        <p>Single, Multiple & Full Mouth Implants</p>
                                    </div>
                                </a>
                                <a href="smile-designing.php" class="mega-item" <?php echo ($cur_script === 'smile-designing.php') ? 'style="background: rgba(16, 185, 129, 0.08);"' : ''; ?>>
                                    <div class="mega-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"></path></svg>
                                    </div>
                                    <div class="mega-text">
                                        <h4>Smile Designing</h4>
                                        <p>Customized Hollywood Smile Makeovers</p>
                                    </div>
                                </a>
                                <a href="rehabilitation.php" class="mega-item" <?php echo ($cur_script === 'rehabilitation.php') ? 'style="background: rgba(16, 185, 129, 0.08);"' : ''; ?>>
                                    <div class="mega-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                                    </div>
                                    <div class="mega-text">
                                        <h4>Rehabilitation</h4>
                                        <p>Trauma & Restorative Care</p>
                                    </div>
                                </a>
                                <a href="surgery.php" class="mega-item" <?php echo ($cur_script === 'surgery.php') ? 'style="background: rgba(16, 185, 129, 0.08);"' : ''; ?>>
                                    <div class="mega-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
                                    </div>
                                    <div class="mega-text">
                                        <h4>Surgical Procedures</h4>
                                        <p>Painless Extractions & Surgery</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li><a href="index.php#gallery">Gallery</a></li>
                    <li><a href="blog.php" class="<?php echo ($cur_script === 'blog.php') ? 'active' : ''; ?>">Blog</a></li>
                    <li><a href="contact.php" class="btn btn-primary nav-btn"><svg width="16" height="16"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg> Book Appointment</a></li>
                </ul>
            </nav>
        </div>
    </header>
