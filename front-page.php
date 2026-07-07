<?php
get_header();
?>
<!-- Top Header Navigation -->
<header class="hero-header">
    <a href="#" class="hero-logo">
        <span class="hero-logo-title">LAMFUZ</span>
        <span class="hero-logo-subtitle">NEPALI CUISINE</span>
    </a>

    <nav class="hero-nav">
        <a href="#" class="hero-nav-link">FORSIDE</a>
        <a href="#menu" class="hero-nav-link">MENU</a>
        <a href="#about" class="hero-nav-link">OM LAMFUZ</a>
        <a href="#kontakt" class="hero-nav-link">KONTAKT</a>
    </nav>

    <div class="hero-header-right">
        <div class="lang-selector">
            <span class="active">DA</span>
            <span>EN</span>
        </div>
        <a href="#book" class="btn-header-book">BOOK ET BORD</a>
        <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle Menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>

<!-- Mobile Navigation Drawer Overlay -->
<div class="mobile-nav-overlay" id="mobileNavOverlay">
    <!-- Top bar inside overlay -->
    <div class="mobile-nav-header">
        <a href="#" class="hero-logo">
            <span class="hero-logo-title">LAMFUZ</span>
            <span class="hero-logo-subtitle">NEPALI CUISINE</span>
        </a>
        <button class="mobile-menu-close" id="mobileMenuClose" aria-label="Close Menu">
            <svg viewBox="0 0 24 24" width="24" height="24">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
    </div>

    <!-- Navigation Links -->
    <div class="mobile-nav-links">
        <a href="#" class="mobile-nav-link">FORSIDE</a>
        <a href="#menu" class="mobile-nav-link">MENU</a>
        <a href="#about" class="mobile-nav-link">OM LAMFUZ</a>
        <a href="#kontakt" class="mobile-nav-link">KONTAKT</a>
    </div>

    <!-- Bottom elements of overlay -->
    <div class="mobile-nav-footer">
        <div class="mobile-lang-selector">
            <span class="active">DA</span>
            <span>EN</span>
        </div>
        <a href="#book" class="btn-mobile-book">BOOK ET BORD</a>
    </div>
</div>

<main id="primary" class="site-main">
    <!-- Hero Section with Background Video -->
    <section class="hero-section">
        <!-- Video Background Wrapper -->
        <div class="hero-video-wrapper">
            <video autoplay muted loop playsinline id="hero-bg-video">
                <source src="https://lamfuz.inkbytestudio.ink/wp-content/uploads/2026/07/hero-bg.mp4" type="video/mp4">
            </video>
        </div>

        <!-- Dark Overlay Vignette -->
        <div class="hero-overlay"></div>


        <!-- Vertical Sidebar Scroll Indicator (Right Side) -->
        <a href="#about" class="hero-scroll-side">
            <span class="hero-vertical-text">OPDAG LAMFUZ</span>
            <div class="hero-scroll-arrow">
                <svg viewBox="0 0 24 24">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <polyline points="19 12 12 19 5 12"></polyline>
                </svg>
            </div>
        </a>

        <!-- Bottom Action Buttons (Left Side on Desktop / Stacked on Mobile) -->
        <div class="hero-bottom-actions">
            <a href="#book" class="btn-hero-red">BOOK ET BORD</a>
            <a href="#menu" class="btn-hero-outline">VORES MENU</a>
        </div>
    </section>

    <!-- Booking Section -->
    <section class="booking-section" id="book">
        <div class="booking-container">
            <div class="booking-widget">
                <iframe src="https://booking.favouritetable.com/?SiteCode=2125&skin=lamfuz" width="100%" height="680" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="booking-content">
                <h4 class="booking-subtitle">NEPALI KØKKEN MED SJÆL</h4>
                <h2 class="booking-title">EN SMAG AF NEPAL – SKABT<br>MED KÆRLIGHED OG<br>TRADITION</h2>
                <p class="booking-text">Hos Lamfuz mødes autentiske opskrifter, friskristede krydderier og lokale råvarer i en oplevelse, der bringer Nepal varme smage til hjertet af København.</p>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();

