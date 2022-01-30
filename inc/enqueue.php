<?php

$theme_version = '1.0.0';

// Enq styles and scripts.
function bluequest_styles_and_scripts() {
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', null, $theme_version );
    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', null, $theme_version );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', null, $theme_version );
    wp_enqueue_style( 'bluequest', get_template_directory_uri() . '/assets/css/main.css', null, $theme_version );

    wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js', [ 'jquery' ], $theme_version );
    wp_enqueue_script( 'slick', get_stylesheet_directory_uri() . '/assets/js/slick.min.js', [ 'jquery' ], $theme_version );
    wp_enqueue_script( 'bluequest', get_stylesheet_directory_uri() . '/assets/js/main.js', [ 'jquery' ], $theme_version );
}

add_action( 'wp_enqueue_scripts', 'bluequest_styles_and_scripts' );

// Add Logo Support
function logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => false, 
    );
    add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'logo_setup' );