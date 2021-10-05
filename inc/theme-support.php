<?php

function custom_theme_setup() {

    add_theme_support( 'post-thumbnails' );

    register_nav_menus( array(
        'custom-theme-main-navigation'   => __( 'Main Navigation' ),
        'custom-theme-footer-navigation' => __( 'Footer Navigation' )
    ) );

    add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
}

add_action( 'after_setup_theme', 'custom_theme_setup' );