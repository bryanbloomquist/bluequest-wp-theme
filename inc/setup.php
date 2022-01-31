<?php

function bq_setup_theme() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    // add_theme_support( 'custom-logo' );

    register_nav_menus( array(
        'bq-main-nav'   => __( 'Main Navigation' ),
        'bq-footer-nav' => __( 'Footer Navigation' )
    ) );

    add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );

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