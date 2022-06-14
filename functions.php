<?php

/**
 * enqueue scripts and styles
 */

function greenfire_enqueue_scripts() {
    wp_enqueue_style( 'greenfire-variables-css', get_template_directory_uri() . '/assets/css/variables/variables.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'greenfire-header-css', get_template_directory_uri() . '/assets/css/header/header.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'greenfire-footer-css', get_template_directory_uri() . '/assets/css/footer/footer.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'greenfire-modal-css', get_template_directory_uri() . '/assets/css/modal/modal.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'greenfire-body-css', get_template_directory_uri() . '/assets/css/body/body.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'greenfire-icon-row-css', get_template_directory_uri() . '/assets/css/icon-row/icon-row.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'google-Rubik-font', 'https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:wght@400;700&display=swap', array() );
    wp_enqueue_style( 'bootstrap-5-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'greenfire-stylesheet', get_stylesheet_uri() );
    
    wp_enqueue_script( 'bootstrap-5-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array() );
    wp_enqueue_script( 'bootstrap-5', get_template_directory_uri() . '/assets/js/enable-bs-tooltips.js', array() );
    wp_enqueue_script( 'font-awesome-kit-js', 'https://kit.fontawesome.com/492d1a55c4.js', array() );

}
add_action( 'wp_enqueue_scripts', 'greenfire_enqueue_scripts' );

?>

