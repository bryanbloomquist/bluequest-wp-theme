<?php

function bq_enqueue() {
    $uri = get_template_directory_uri();
    $version = NE_DEV_MODE ? time() : '1.0.0';

    wp_register_style( 'bq_custom', $uri . '/assets/css/main.css', [], $version );

    wp_enqueue_style( 'bq_custom' );

    wp_register_script( 'bq_bootstrap', $uri . '/assets/js/bootstrap.bundle.min.js', ['jquery'], $version, true );
    wp_register_script( 'bq_slick', $uri . '/assets/js/slick.min.js', ['jquery'], $version, true );
    wp_register_script( 'bq_custom', $uri . '/assets/js/main.min.js', ['jquery'], $version, true );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bq_bootstrap' );
    wp_enqueue_script( 'bq_slick' );
    wp_enqueue_script( 'bq_custom' );
}
