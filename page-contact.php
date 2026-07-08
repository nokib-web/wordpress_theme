<?php
/**
 * Template Name: Contact
 */
get_header();
?>
<main id="primary" class="site-main">
        
        <!-- Hero Banner -->
        <section class="hero-section hero-about" style="background-image: url('assets/images/Space-1_16-9_Side.webp'); height: 60vh; min-height: 400px; display: flex; align-items: flex-end; padding: 4rem 2rem;">
            <div class="hero-overlay"></div>
            <div class="about-hero-content" style="position: relative; z-index: 2; width: 100%; max-width: 1400px; margin: 0 auto;">
                <h1 style="color: #fff; font-family: var(--font-heading); font-size: 4rem; letter-spacing: 0.05em; text-transform: uppercase;">KONTAKT</h1>

            </div>
        </section>

        <!-- Contact Info Section -->
        <section class="contact-info-section" style="background-color: #fdfaf6; padding: 6rem 2rem;">
            <div class="contact-container" style="max-width: 1200px; margin: 0 auto; display: flex; gap: 4rem; flex-wrap: wrap;">
                
                <!-- Left Side Text -->
                <div class="contact-text-area" style="flex: 1; min-width: 300px; color: #b2512b;">
                    <h2 style="font-family: var(--font-heading); font-size: 2.5rem; margin-bottom: 2rem; font-weight: 400;">KONTAKT LAMFUZ – VI ER KLAR TIL AT HJÆLPE DIG</h2>
                    
                    <p style="margin-bottom: 1.5rem; font-family: var(--font-body); line-height: 1.8; font-size: 0.95rem;">Velkommen til Lamfuz – hvor smag, hygge og gæstfrihed går hånd i hånd.<br>Har du spørgsmål, vil du reservere bord, bestille take-away eller høre mere om vores catering?<br>Så er du altid velkommen til at tage fat i os – vi elsker at høre fra dig!</p>
                    <p style="margin-bottom: 3rem; font-family: var(--font-body); line-height: 1.8; font-size: 0.95rem;">Uanset om du skriver, ringer eller kigger forbi, står vi klar med åbne arme og duften af frisklavet nepalesisk mad.</p>

                    <a href="#book" class="btn-hero-red" style="font-size: 0.85rem; padding: 1rem 2.5rem; display: inline-block;">BOOK A TABLE</a>
                </div>

                <!-- Right Side Card -->
                <div class="contact-card-area" style="flex: 1; min-width: 300px;">
                    <div class="contact-card" style="background-color: #fff; padding: 3rem; margin-bottom: 1.5rem; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                        <div style="margin-bottom: 1.5rem; display: flex; align-items: center; gap: 1rem; color: #b2512b;">
                            <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            <span style="font-size: 0.9rem;">+45 70 60 56 57</span>
                        </div>
                        <div style="margin-bottom: 1.5rem; display: flex; align-items: center; gap: 1rem; color: #b2512b;">
                            <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            <a href="mailto:info@lamfuz.com" style="color: inherit; text-decoration: none; font-size: 0.9rem;">info@lamfuz.com</a>
                        </div>
                        <div style="margin-bottom: 3rem; display: flex; align-items: flex-start; gap: 1rem; color: #b2512b;">
                            <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" style="margin-top: 5px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            <span style="font-size: 0.9rem; line-height: 1.6;">Turesensgade 6,<br>1368 København K Denmark</span>
                        </div>
                        
                        <hr style="border: none; border-top: 2px solid #b2512b; margin-bottom: 2rem; opacity: 0.5;">
                        
                        <div style="color: #b2512b;">
                            <div style="font-family: var(--font-heading); font-size: 1.1rem; margin-bottom: 1rem; display: flex; align-items: center; gap: 0.5rem; font-weight: 700;">
                                <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                ÅBNINGSTIDER
                            </div>
                            <div style="font-size: 0.85rem; line-height: 1.8;">
                                Monday – Thursday: 16:00 – 23:00<br>
                                Friday – Saturday: 16:00 – 24:00<br>
                                Last arrival: 21:30<br>
                                Sunday: Closed
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Full-width Map inside container -->
                <div class="map-embed" style="width: 100%; height: 300px; margin-top: 2rem; background-color: #ddd;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2249.198305886987!2d12.56201387693952!3d55.68114499757657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4652531065e1bc35%3A0x6e88e894086e7a2b!2sTuresensgade%206%2C%201368%20K%C3%B8benhavn!5e0!3m2!1sen!2sdk!4v1700000000000!5m2!1sen!2sdk" width="100%" height="100%" style="border:0; filter: grayscale(30%) opacity(0.9);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>
        

    </section>

        <!-- Gallery Section -->
        <section class="gallery-section" id="gallery" style="background-color: #fdfaf6; padding-top: 2rem;">
            <div class="gallery-container">
                <div class="gallery-content">
                    <h4 class="gallery-subtitle">OUR GALLERY</h4>
                    <h2 class="gallery-title">GIVE YOUR TASTE BUDS A ROLLER COASTER RIDE!</h2>
                    <p class="gallery-text">Are you looking for exotic and tasty food? Would you like to challenge yourself with a rollercoaster ride for your taste buds?</p>
                    <p class="gallery-text">Then Lamfuz is for you!</p>
                    <p class="gallery-text">At lamfuz we are passionate about cooking inspired by the explosion of flavors that Nepalese cuisine offers. We offer DINE IN, takeout and catering for those of you who long for exotic food and new flavors - in a healthy way and without emptying your wallet!</p>
                    <a href="about.html" class="btn-hero-red" style="margin-top: 1.5rem; text-transform: uppercase; font-size: 0.85rem; padding: 1rem 1.8rem;">READ MORE</a>
                </div>
                <div class="swiper mySwiper gallery-images-container" style="overflow: hidden; flex: 1;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="width: auto;"><img src="assets/images/DhalBhatPlatter_9-16_Above.webp" alt="Dhal Bhat Platter" class="gallery-img"></div>
                        <div class="swiper-slide" style="width: auto;"><img src="assets/images/JholMoMo_9-16_Above.webp" alt="Jhol MoMo" class="gallery-img"></div>
                        <div class="swiper-slide" style="width: auto;"><img src="assets/images/ChickenChoila_9-16_Above.webp" alt="Chicken Choila" class="gallery-img"></div>
                        <div class="swiper-slide" style="width: auto;"><img src="assets/images/ChowMein_9-16_Above.webp" alt="Chow Mein" class="gallery-img"></div>
                        <div class="swiper-slide" style="width: auto;"><img src="assets/images/FriedRice_9-16_Above.webp" alt="Fried Rice" class="gallery-img"></div>
                        <div class="swiper-slide" style="width: auto;"><img src="assets/images/SaladBowl_9-16_Above.webp" alt="Salad Bowl" class="gallery-img"></div>
                    </div>
                </div>

            </div>
        </section>

    </main>
<?php get_footer(); ?>




