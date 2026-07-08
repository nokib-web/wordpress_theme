<?php
/**
 * Template Name: About
 */
get_header(); ?>

<main id="primary" class="site-main">

    <!-- HERO SECTION -->
    <section class="about-hero-section">
        <div class="about-hero-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Space-1_16-9_Side.webp" alt="Om Lamfuz">
            <div class="about-hero-overlay"></div>
        </div>
        <div class="about-container" style="width: 100%; position: relative; z-index: 10;">
            <div class="about-hero-content">
                <h1 class="about-hero-title">OM LAMFUZ</h1>
            </div>
        </div>
    </section>

    <!-- INTRO SECTION -->
    <section class="about-intro-section">
        <div class="about-container">
            <div class="about-intro-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Dish-3_16-9_Above.webp" alt="Lamfuz Table">
            </div>
            
            <div class="about-intro-text">
                <div class="about-intro-black">
                    <p>Hos Lamfuz handler det om mere end mad – det handler om oplevelsen.<br>
                    Vi bringer de autentiske nepalesiske smage til Danmark med kærlighed, krydderier og en dyb respekt for vores madkultur.<br>
                    Vores retter er inspireret af barndommens måltider i rismarkerne i Nepal, hvor dufte af hvidløg, ingefær og chili fyldte luften.</p>

                    <p>Vores køkken handler ikke kun om opskrifter – det handler om håndværk, tradition og den gastfrihed, der kendetegner Nepal. Hver ret bliver skabt med præcision og respekt for de råvarer, vi arbejder med. Fra de dybe, aromatiske krydderier til de friske grøntsager og langsomt tilberedte saucer gør vi os umage for at bringe dig den samme varme og autenticitet, som vi selv voksede op med.</p>

                    <p>Her i København deler vi den tradition med dig – serveret med moderne finesse, lokale råvarer og ægte varme.</p>
                </div>
                
                <div class="about-intro-orange">
                    <p>Lamfuz vil gerne introducere dig til det festfyrværkeri af smag, som vores barndoms nepalesiske køkken tilbyder. Vi tilbyder dine in og takeout, hvor vi inviterer dig ind i vores univers fuld af velsmagende og sund afslapning!</p>

                    <p>Spidskommen, gurkemeje, chili, koriander, hvidløg og ingefær vækker maden til live og giver dine smagsløg en rutsjebanetur – og så er det sundt! Lamfuz er til dig, der længes efter eksotisk mad og nye smage med vegetariske og veganske valgmuligheder. Og bare rolig, hvis du er dedikeret kødæder – vi har også menuer med lam, kylling og årstidens fisk.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- STORY SECTION -->
    <section class="about-story-section">
        <div class="about-container">
            <div class="about-split">
                <div class="about-split-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Dish-1_4-5_Side.webp" alt="Authentic Taste">
                </div>
                <div class="about-split-content">
                    <h2 class="about-section-title">OPLEV DEN AUTENTISKE SMAG<br>AF NEPAL I LAMFUZ</h2>
                    <p>Lamfuz betyder slendrian, men med et interior bygget af kokken selv i genbrugsmaterialer og med alle detaljer kælet for, fornemmer man tydeligt den kærlighed, Krishna lægger i sin restaurant. Fra det kompromisløse valg af specialvarer til de hjemmelavede og til perfektion ristede krydderiblandinger, er man ikke i tvivl om, at Krishnas ambition er at placere Nepal solidt på den københavnske spisescene som et unikum af en oplevelse.</p>
                    <p>På hylden står den nepalesiske te – kendt for sin særlige blødhed og umamismag – side om side med danskproducerede sodavand, og i vitualrummet finder man kun de bedste koldpressede rapsolier. Retterne designes med udgangspunkt i danske råvarer i sæson og formes med Krishnas fornemmelse for Nepal, fuld af historier. På tallerkenerne i Lamfuz introduceres man til en moderne fortælling om den nepalesiske smagspalet i varme og muntre omgivelser.</p>
                    <a href="<?php echo home_url('/book-et-bord'); ?>" class="btn-hero-red" style="margin-top: 1.5rem; text-transform: uppercase; font-size: 0.85rem; padding: 1rem 1.8rem; display: inline-block;">RESERVER ET BORD</a>
                </div>
            </div>
        </div>
    </section>

    <!-- BANNER SECTION -->
    <section class="about-banner-section">
        <div class="about-banner-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Dish-3_16-9_Above.webp" alt="Lamfuz Banner" style="object-position: left center;">
        </div>
        <div class="about-banner-content-wrapper">
            <div class="about-banner-content">
                <h2 class="about-section-title" style="color: #000;">OM LAMFUZ</h2>
                <p style="color: #000;">Lamfuz er mere end blot en restaurant; det er en portal til de pulserende markeder og gadekøkkener i Kathmandu. Hver ret, vi serverer, bærer på en historie, et minde fra vores hjemland.</p>
                <p style="color: #000;">Fra de dampende Momos, der vækker barndomsminder, til den rige, krydrede Dhal Bhat, som er rygraden i ethvert nepalesisk måltid, stræber vi efter at give dig en bid af Nepal, hver gang du besøger os. Det handler ikke kun om maden – det er en kulturel udveksling, en rejse i smag, der inviterer dig indenfor i vores verden.</p>
            </div>
        </div>
    </section>

    <!-- TEAM SECTION -->
    <section class="about-team-section">
        <div class="about-container">
            <div class="about-split">
                <div class="about-split-content">
                    <h2 class="about-section-title" style="margin-bottom: 1rem; color: #000;">VORES TEAM</h2>
                    <p class="about-team-subtitle" style="font-weight: 600; margin-bottom: 1.5rem; color: #000;">Bag Lamfuz står Krishna Adhikari og Badal Maharjan.</p>
                    <p style="color: #000;">Vi tilbragte begge hver vores barndom med at fjolle rundt i nepalesiske rismarker – og indimellem smage maden, urterne og krydderierne, der er særlige for vores hjemland. Det fulgte med os, og vi har ikke glemt det siden.</p>
                    <p style="color: #000;">Spol frem til Danmark: Gennem ni års arbejde på danske caféer og restauranter, hvor vi oparbejdede vores færdigheder i et køkken, fandt vi en fælles passion for nepalesisk mad og dets vilde smage. Vi begyndte at hænge ud sammen, drikke øl og have lange natlige samtaler – og en beruset nat tænkte vi: Lad os lave noget sammen!</p>
                    <p style="color: #000;">Det blev til det, der nu er Lamfuz. Suppleret med en kandidatgrad i ledelse, forretning og iværksætteri kan vi nu føre vores nepalesiske barndoms madkultur helt ud til danske køkkener og middagsborde.</p>
                </div>
                <div class="about-split-image about-team-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/LAMFUZ-team.webp" alt="Lamfuz Team">
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>




