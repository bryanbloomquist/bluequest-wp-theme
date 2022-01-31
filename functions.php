<?php
    /**
     * Theme functions
     * @package Bluequest
     */

    // SETUP

    define( 'NE_DEV_MODE', true );

    // INCLUDES

    include( get_theme_file_path( '/inc/enqueue.php' ) );
    include( get_theme_file_path( '/inc/setup.php' ) );
    include( get_theme_file_path( '/inc/widgets.php' ) );
    include( get_theme_file_path( '/inc/bootstrap-nav-walker.php' ) );
    include( get_theme_file_path( '/inc/custom-post-types.php' ) );

    // HOOKS

    add_action( 'wp_enqueue_scripts', 'bq_enqueue' );
    add_action( 'after_setup_theme', 'bq_setup_theme' );
    add_action( 'widgets_init', 'bq_widgets' );

