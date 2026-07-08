<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#b2512b">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Top Header Navigation -->
    <header class="hero-header" id="siteHeader">
        <div class="header-container">
            <div class="header-left">
                <a href="<?php echo home_url('/'); ?>" class="hero-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Lamfuz-Logo-Tagline-White-RGB-copy (2) - Copy.webp" class="logo-white" alt="Lamfuz Nepali Cuisine">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/output-onlinepngtools (1) - Copy.webp" class="logo-color" alt="Lamfuz Nepali Cuisine">
                </a>
                <nav class="hero-nav">
                    <?php
                    if ( has_nav_menu( 'primary-menu' ) ) {
                        wp_nav_menu( array(
                            'theme_location' => 'primary-menu',
                            'container'      => false,
                            'items_wrap'     => '%3$s', // removes the <ul> wrapper
                        ) );
                    } else {
                    ?>
                        <a href="<?php echo home_url('/'); ?>" class="hero-nav-link">FORSIDE</a>
                        <a href="<?php echo home_url('/#menu'); ?>" class="hero-nav-link">MENU</a>
                        <a href="<?php echo home_url('/about'); ?>" class="hero-nav-link">OM LAMFUZ</a>
                        <a href="<?php echo home_url('/contact'); ?>" class="hero-nav-link">KONTAKT</a>
                    <?php } ?>
                </nav>
            </div>

            <div class="hero-header-right">
                <div class="lang-selector notranslate">
                    <span class="active">DA</span>
                    <span>EN</span>
                </div>
                <a href="<?php echo home_url('/#book'); ?>" class="btn-header-book">BOOK ET BORD</a>

                <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle Menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Navigation Drawer Overlay -->
    <div class="mobile-nav-overlay" id="mobileNavOverlay">
        <div class="mobile-nav-header">
            <a href="<?php echo home_url('/'); ?>" class="hero-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Lamfuz-Logo-Tagline-White-RGB-copy (2) - Copy.webp" class="logo-white" alt="Lamfuz Nepali Cuisine">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/output-onlinepngtools (1) - Copy.webp" class="logo-color" alt="Lamfuz Nepali Cuisine">
            </a>
            <button class="mobile-menu-close" id="mobileMenuClose" aria-label="Close Menu">
                <svg viewBox="0 0 24 24" width="24" height="24">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>

        <div class="mobile-nav-links">
            <?php
            if ( has_nav_menu( 'mobile-menu' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'mobile-menu',
                    'container'      => false,
                    'items_wrap'     => '%3$s', // removes the <ul> wrapper
                ) );
            } else {
            ?>
                <a href="<?php echo home_url('/'); ?>" class="mobile-nav-link">FORSIDE</a>
                <a href="<?php echo home_url('/#menu'); ?>" class="mobile-nav-link">MENU</a>
                <a href="<?php echo home_url('/about'); ?>" class="mobile-nav-link">OM LAMFUZ</a>
                <a href="<?php echo home_url('/contact'); ?>" class="mobile-nav-link">KONTAKT</a>
            <?php } ?>
        </div>

        <div class="mobile-nav-footer">
            <div class="mobile-lang-selector">
                <span class="active">DA</span>
                <span>EN</span>
            </div>
            <a href="<?php echo home_url('/#book'); ?>" class="btn-mobile-book">BOOK ET BORD</a>
        </div>
    </div>

    <!-- Google Translate widget is loaded in footer.php -->
