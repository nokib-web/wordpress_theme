<?php
/**
 * Template Name: Front Page
 */
get_header();
?>

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
        <a href="<?php echo home_url('/about'); ?>" class="hero-scroll-side">
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

    <!-- Gallery Section -->
    <section class="gallery-section" id="gallery">
        <div class="gallery-container">
            <div class="gallery-content">
                <h4 class="gallery-subtitle">OUR GALLERY</h4>
                <h2 class="gallery-title">GIVE YOUR TASTE BUDS A ROLLER COASTER RIDE!</h2>
                <p class="gallery-text">Are you looking for exotic and tasty food? Would you like to challenge yourself with a rollercoaster ride for your taste buds?</p>
                <p class="gallery-text">Then Lamfuz is for you!</p>
                <p class="gallery-text">At lamfuz we are passionate about cooking inspired by the explosion of flavors that Nepalese cuisine offers. We offer DINE IN, takeout and catering for those of you who long for exotic food and new flavors - in a healthy way and without emptying your wallet!</p>
                <a href="<?php echo home_url('/about'); ?>" class="btn-hero-red" style="margin-top: 1.5rem; text-transform: uppercase; font-size: 0.85rem; padding: 1rem 1.8rem;">READ MORE ABOUT US</a>
            </div>
            <!-- Swiper Slider -->
            <div class="swiper mySwiper gallery-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/DhalBhatPlatter_9-16_Above.webp" alt="Dhal Bhat Platter" class="gallery-img"></div>
                    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/JholMoMo_9-16_Above.webp" alt="Jhol MoMo" class="gallery-img"></div>
                    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ChickenChoila_9-16_Above.webp" alt="Chicken Choila" class="gallery-img"></div>
                    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ChowMein_9-16_Above.webp" alt="Chow Mein" class="gallery-img"></div>
                    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/FriedRice_9-16_Above.webp" alt="Fried Rice" class="gallery-img"></div>
                    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/SaladBowl_9-16_Above.webp" alt="Salad Bowl" class="gallery-img"></div>
                </div>
            </div>
        </div>
    </section>


    <!-- Menu Section -->
    <section class="menu-section" id="menu">
        <div class="menu-container">
            <h2 class="menu-title">OUR MENU</h2>
            <div class="menu-accordion">
                <div class="menu-accordion-item">
                    <div class="menu-accordion-header">
                        <h3>APPETIZERS & SKEWERS</h3>
                        <span class="menu-accordion-icon">+</span>
                    </div>
                    <div class="menu-accordion-content">
                        <div class="menu-item"><span class="menu-item-name">Lamb Sekuwa</span><span class="menu-item-price">99 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Chicken Sekuwa</span><span class="menu-item-price">79 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Chicken Choila</span><span class="menu-item-price">79 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Spicy King Prawn</span><span class="menu-item-price">89 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Spicy Mushroom</span><span class="menu-item-price">79 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Salad Bowl</span><span class="menu-item-price">59 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Papad</span><span class="menu-item-price">20 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Cucumber bites</span><span class="menu-item-price">59 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Chicken MoMo</span><span class="menu-item-price">75 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Vegan MoMo</span><span class="menu-item-price">75 kr.</span></div>
                    </div>
                </div>
                <div class="menu-accordion-item">
                    <div class="menu-accordion-header">
                        <h3>MAINS</h3>
                        <span class="menu-accordion-icon">+</span>
                    </div>
                    <div class="menu-accordion-content">
                        <div class="menu-item"><span class="menu-item-name">Daal Bhat Platter</span><span class="menu-item-price">169 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Lamb Platter</span><span class="menu-item-price">250 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Chicken Platter</span><span class="menu-item-price">230 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Vegan Platter</span><span class="menu-item-price">220 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">MoMo Big Bowl</span><span class="menu-item-price">149 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Jhol MoMo</span><span class="menu-item-price">149 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Chow Mein</span><span class="menu-item-price">129-145 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Fried Rice</span><span class="menu-item-price">129-145 kr.</span></div>
                    </div>
                </div>
                <div class="menu-accordion-item">
                    <div class="menu-accordion-header">
                        <h3>PAGES</h3>
                        <span class="menu-accordion-icon">+</span>
                    </div>
                    <div class="menu-accordion-content">
                        <div class="menu-item"><span class="menu-item-name">Lamb Gravy</span><span class="menu-item-price">99 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Chicken Gravy</span><span class="menu-item-price">79 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Rice</span><span class="menu-item-price">39 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Jimbu, garlic & ginger Tempered Daal</span><span class="menu-item-price">69 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Stir-fried greens</span><span class="menu-item-price">69 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Wok Fired Rayo Saag</span><span class="menu-item-price">69 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Fermented Greens</span><span class="menu-item-price">29 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Dips</span><span class="menu-item-price">20 kr.</span></div>
                    </div>
                </div>
                <div class="menu-accordion-item">
                    <div class="menu-accordion-header">
                        <h3>CHILDREN'S MENU</h3>
                        <span class="menu-accordion-icon">+</span>
                    </div>
                    <div class="menu-accordion-content">
                        <div class="menu-item"><span class="menu-item-name">Chicken Curry</span><span class="menu-item-price">79 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Daal, Rice & Veggies</span><span class="menu-item-price">79 kr.</span></div>
                    </div>
                </div>
                <div class="menu-accordion-item">
                    <div class="menu-accordion-header">
                        <h3>DESSERTS</h3>
                        <span class="menu-accordion-icon">+</span>
                    </div>
                    <div class="menu-accordion-content">
                        <div class="menu-item"><span class="menu-item-name">Ice Cream</span><span class="menu-item-price">69 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Dessert of the Day</span><span class="menu-item-price">69 kr.</span></div>
                    </div>
                </div>
                <div class="menu-accordion-item">
                    <div class="menu-accordion-header">
                        <h3>BEVERAGES</h3>
                        <span class="menu-accordion-icon">+</span>
                    </div>
                    <div class="menu-accordion-content">
                        <div class="menu-item"><span class="menu-item-name">Organic Pilsner</span><span class="menu-item-price">45/65 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Organic IPA</span><span class="menu-item-price">50/70 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Barahsinghe Pilsner</span><span class="menu-item-price">59 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Non-alcoholic Beers</span><span class="menu-item-price">59 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Wine: Red/White/Sparkling/Rose</span><span class="menu-item-price">From 70 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Temple Ginger Twist</span><span class="menu-item-price">99 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Pink Raspberry Gin</span><span class="menu-item-price">89 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Terai Cooler</span><span class="menu-item-price">89 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Nepali Punch</span><span class="menu-item-price">99 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Organic Homemade Mocktails</span><span class="menu-item-price">59 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Tea (golden/ white/ green/ black)</span><span class="menu-item-price">39 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Teapot</span><span class="menu-item-price">135 kr.</span></div>
                        <div class="menu-item"><span class="menu-item-name">Nepali Chiya Tea</span><span class="menu-item-price">45 kr.</span></div>
                    </div>
                </div>
            </div>
            <div class="menu-actions">
                <a href="#full-menu" class="btn-hero-red" style="text-transform: uppercase; font-size: 0.85rem; padding: 1rem 2.5rem; letter-spacing: 0.05em;">SEE THE FULL MENU</a>
            </div>
        </div>
    </section>

    <!-- Experience Text Section -->
    <section class="experience-section">
        <div class="experience-container">
            <h4 class="experience-subtitle">EXPERIENCE LAMFUZ</h4>
            <h2 class="experience-title">THE TASTE OF NEPAL &ndash; IN THE MIDDLE OF COPENHAGEN</h2>
        </div>
    </section>
</main>
<?php
get_footer();







