<?php
function cmc_enqueue_scripts() {
    $theme_uri = set_url_scheme( get_template_directory_uri(), 'https' );
    $stylesheet_uri = set_url_scheme( get_stylesheet_uri(), 'https' );
    
    // Force cache bust to resolve persistent browser caching issues
    $cache_buster = time();

    wp_enqueue_style( 'cmc-main-style', $theme_uri . '/assets/css/main.css', array(), $cache_buster );
    wp_enqueue_style( 'cmc-style', $stylesheet_uri, array(), $cache_buster );
    wp_enqueue_script( 'cmc-main-js', $theme_uri . '/assets/js/main.js', array(), $cache_buster, true );
}
add_action( 'wp_enqueue_scripts', 'cmc_enqueue_scripts' );

function cmc_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    
    // Add support for Block Editor styles so Gutenberg looks like the front-end
    add_theme_support( 'editor-styles' );
    // Enqueue the main css to the editor
    add_editor_style( 'assets/css/main.css' );
}
add_action( 'after_setup_theme', 'cmc_theme_setup' );


function cmc_force_page_templates($template) {
    if (is_page('contact')) {
        $new_template = locate_template(array('page-contact.php'));
        if ('' != $new_template) {
            return $new_template;
        }
    }
    if (is_page('about')) {
        $new_template = locate_template(array('page-about.php'));
        if ('' != $new_template) {
            return $new_template;
        }
    }
    return $template;
}
add_filter('template_include', 'cmc_force_page_templates', 99);

function cmc_register_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu', 'lamfuz' ),
            'mobile-menu'  => __( 'Mobile Menu', 'lamfuz' ),
            'footer-menu'  => __( 'Footer Menu', 'lamfuz' )
        )
    );
}
add_action( 'init', 'cmc_register_menus' );

function add_menu_link_class( $atts, $item, $args ) {
    if ( $args->theme_location == 'primary-menu' ) {
        $atts['class'] = 'hero-nav-link';
    } elseif ( $args->theme_location == 'mobile-menu' ) {
        $atts['class'] = 'mobile-nav-link';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );
