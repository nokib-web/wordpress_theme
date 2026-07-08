<?php
function cmc_register_patterns() {
    $hero_bg = get_template_directory_uri() . '/assets/images/hero-bg.png';
    $street_bg = get_template_directory_uri() . '/assets/images/charleston-street.png';
    $support_bg = get_template_directory_uri() . '/assets/images/support-gate.png';
    
    $content = '
<!-- wp:cover {"url":"' . esc_url($hero_bg) . '","dimRatio":60,"overlayColor":"black","align":"full","className":"hero-section animate-on-scroll","style":{"spacing":{"padding":{"top":"8rem","right":"4rem","bottom":"8rem","left":"4rem"}}}} -->
<div class="wp-block-cover alignfull hero-section animate-on-scroll" style="padding-top:8rem;padding-right:4rem;padding-bottom:8rem;padding-left:4rem"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . esc_url($hero_bg) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":1,"className":"hero-title"} -->
<h1 class="wp-block-heading hero-title">Extraordinary Music.<br>Timeless Tradition.</h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"hero-text"} -->
<p class="hero-text">Preserving the art of men\'s choral music<br>in the heart of Charleston since 1938.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"hero-button"} -->
<div class="wp-block-button hero-button"><a class="wp-block-button__link wp-element-button" href="#upcoming">UPCOMING CONCERTS</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"full","className":"welcome-section","style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem","left":"4rem","right":"4rem"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull welcome-section has-base-background-color has-background" id="about" style="padding-top:8rem;padding-right:4rem;padding-bottom:8rem;padding-left:4rem">
<!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"welcome-container"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center welcome-container">
<!-- wp:column {"verticalAlignment":"center","width":"50%","className":"welcome-content animate-on-scroll"} -->
<div class="wp-block-column is-vertically-aligned-center welcome-content animate-on-scroll" style="flex-basis:50%">
<!-- wp:paragraph {"className":"welcome-icon"} -->
<p class="welcome-icon">❦</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"welcome-subtitle"} -->
<h3 class="wp-block-heading welcome-subtitle">WELCOME</h3>
<!-- /wp:heading -->
<!-- wp:heading {"className":"welcome-title"} -->
<h2 class="wp-block-heading welcome-title">The Sound<br>of Charleston</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"welcome-text"} -->
<p class="welcome-text">The Charleston Men\'s Chorus is one of the Lowcountry\'s most treasured cultural institutions. Through excellence in performance and a commitment to community, we inspire, entertain, and enrich the lives of our audiences.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline welcome-button"} -->
<div class="wp-block-button is-style-outline welcome-button"><a class="wp-block-button__link wp-element-button" href="<?php echo home_url('/about'); ?>">LEARN MORE ABOUT US</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center","width":"50%","className":"welcome-image animate-on-scroll"} -->
<div class="wp-block-column is-vertically-aligned-center welcome-image animate-on-scroll" style="flex-basis:50%">
<!-- wp:image {"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="' . esc_url($street_bg) . '" alt="Charleston Street"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:cover {"url":"' . esc_url($hero_bg) . '","dimRatio":90,"overlayColor":"black","align":"full","className":"concerts-section","style":{"spacing":{"padding":{"top":"8rem","right":"4rem","bottom":"8rem","left":"4rem"}}}} -->
<div class="wp-block-cover alignfull concerts-section" id="upcoming" style="padding-top:8rem;padding-right:4rem;padding-bottom:8rem;padding-left:4rem"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . esc_url($hero_bg) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"textAlign":"center","className":"concerts-subtitle animate-on-scroll"} -->
<h4 class="wp-block-heading has-text-align-center concerts-subtitle animate-on-scroll">UPCOMING CONCERTS</h4>
<!-- /wp:heading -->
<!-- wp:heading {"textAlign":"center","className":"concerts-title animate-on-scroll"} -->
<h2 class="wp-block-heading has-text-align-center concerts-title animate-on-scroll">Experience the Power of Song</h2>
<!-- /wp:heading -->
<!-- wp:spacer {"height":"4rem"} -->
<div style="height:4rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:columns {"align":"wide","className":"concerts-grid"} -->
<div class="wp-block-columns alignwide concerts-grid">
<!-- wp:column {"className":"concert-card animate-on-scroll"} -->
<div class="wp-block-column concert-card animate-on-scroll">
<!-- wp:html -->
<div class="concert-icon" style="text-align: center;"><svg viewBox="0 0 24 24" width="40" height="40" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round" style="display:inline-block"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path><path d="M12 18a6 6 0 100-12 6 6 0 000 12z"></path></svg></div>
<!-- /wp:html -->
<!-- wp:heading {"level":3,"textAlign":"center","className":"concert-name"} -->
<h3 class="wp-block-heading has-text-align-center concert-name">Christmas Concert</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"concert-date"} -->
<p class="has-text-align-center concert-date">DECEMBER 14, 2025</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"concert-location"} -->
<p class="has-text-align-center concert-location">Grace Cathedral<br>Charleston, SC</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><a href="#" class="concert-link">LEARN MORE &rarr;</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"className":"concert-card animate-on-scroll"} -->
<div class="wp-block-column concert-card animate-on-scroll">
<!-- wp:html -->
<div class="concert-icon" style="text-align: center;"><svg viewBox="0 0 24 24" width="40" height="40" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round" style="display:inline-block"><path d="M12 2v20"></path><path d="M12 12c-3-3-6-3-6-3s0 3 6 6"></path><path d="M12 12c3-3 6-3 6-3s0 3-6 6"></path><path d="M12 6c-2-2-4-2-4-2s0 2 4 4"></path><path d="M12 6c2-2 4-2 4-2s0 2-4 4"></path></svg></div>
<!-- /wp:html -->
<!-- wp:heading {"level":3,"textAlign":"center","className":"concert-name"} -->
<h3 class="wp-block-heading has-text-align-center concert-name">Spring Concert</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"concert-date"} -->
<p class="has-text-align-center concert-date">MARCH 22, 2026</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"concert-location"} -->
<p class="has-text-align-center concert-location">Dock Street Theatre<br>Charleston, SC</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><a href="#" class="concert-link">LEARN MORE &rarr;</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"className":"concert-card animate-on-scroll"} -->
<div class="wp-block-column concert-card animate-on-scroll">
<!-- wp:html -->
<div class="concert-icon" style="text-align: center;"><svg viewBox="0 0 24 24" width="40" height="40" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round" style="display:inline-block"><path d="M12 22V8"></path><path d="M12 8c-2 0-4 1-5 3"></path><path d="M12 8c2 0 4 1 5 3"></path><path d="M12 8c-3-3-6-3-6-3s0 3 6 6"></path><path d="M12 8c3-3 6-3 6-3s0 3-6 6"></path></svg></div>
<!-- /wp:html -->
<!-- wp:heading {"level":3,"textAlign":"center","className":"concert-name"} -->
<h3 class="wp-block-heading has-text-align-center concert-name">Memorial Day Concert</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"concert-date"} -->
<p class="has-text-align-center concert-date">MAY 25, 2026</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"concert-location"} -->
<p class="has-text-align-center concert-location">Grace Cathedral<br>Charleston, SC</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><a href="#" class="concert-link">LEARN MORE &rarr;</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"' . esc_url($support_bg) . '","dimRatio":80,"overlayColor":"black","align":"full","className":"support-section","style":{"spacing":{"padding":{"top":"8rem","right":"4rem","bottom":"8rem","left":"4rem"}}}} -->
<div class="wp-block-cover alignfull support-section" id="donate" style="padding-top:8rem;padding-right:4rem;padding-bottom:8rem;padding-left:4rem"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . esc_url($support_bg) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
<!-- wp:column {"width":"50%","className":"support-content animate-on-scroll"} -->
<div class="wp-block-column support-content animate-on-scroll" style="flex-basis:50%">
<!-- wp:heading {"className":"support-title"} -->
<h2 class="wp-block-heading support-title">Support the Music</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"support-text"} -->
<p class="support-text">Your generosity ensures the future of exceptional<br>performances, education, and community outreach.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"support-button"} -->
<div class="wp-block-button support-button"><a class="wp-block-button__link wp-element-button" href="#donate">DONATE TODAY</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"></div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div></div>
<!-- /wp:cover -->
';

    register_block_pattern(
        'cmc/homepage',
        array(
            'title'       => __( 'CMC Homepage', 'cmc' ),
            'content'     => $content,
        )
    );
}
add_action( 'init', 'cmc_register_patterns' );

function cmc_create_homepage() {
    $page = get_page_by_title( 'Home' );
    $pattern_content = '<!-- wp:pattern {"slug":"cmc/homepage"} /-->';
    
    if ( ! $page ) {
        $page_id = wp_insert_post( array(
            'post_title'     => 'Home',
            'post_content'   => $pattern_content,
            'post_status'    => 'publish',
            'post_type'      => 'page',
        ) );
        if ( $page_id ) {
            update_option( 'page_on_front', $page_id );
            update_option( 'show_on_front', 'page' );
        }
    } else {
        // Force update the content to apply the new perfectly native Gutenberg pattern!
        if ( get_option('cmc_homepage_updated_v3') !== 'yes' ) {
            wp_update_post( array(
                'ID' => $page->ID,
                'post_content' => $pattern_content
            ));
            update_option('cmc_homepage_updated_v3', 'yes');
        }
        update_option( 'page_on_front', $page->ID );
        update_option( 'show_on_front', 'page' );
    }
}
add_action( 'after_setup_theme', 'cmc_create_homepage' );
