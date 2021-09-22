<?php

$theme_version = '1.0.0';

// Enq styles and scripts.
function creed_app_styles_scripts() {
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&family=Ubuntu&display=swap', null, $theme_version );
    wp_enqueue_style( 'creed-app-styles', get_template_directory_uri() . '/assets/css/app.css', null, $theme_version );

    wp_enqueue_script( 'popper', get_stylesheet_directory_uri() . '/assets/js/popper.min.js', [ 'jquery' ], $theme_version );
    wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', [ 'jquery' ], $theme_version );
    wp_enqueue_script( 'creed-scripts', get_stylesheet_directory_uri() . '/assets/js/main.min.js', [ 'jquery' ], $theme_version );
}

add_action( 'wp_enqueue_scripts', 'creed_app_styles_scripts' );

// Add Custom Logo Support

function themename_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );

    add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'themename_custom_logo_setup' );