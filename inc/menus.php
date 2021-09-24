<?php

function custom_theme_custom_menus() {
    register_nav_menu('custom-theme-main-navigation', __( 'Main Navigation' ));
    register_nav_menu('custom-theme-footer-navigation', __( 'Footer Navigation' ));
}

add_action( 'init', 'custom_theme_custom_menus' );