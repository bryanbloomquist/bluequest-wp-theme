<?php

function creed_theme_custom_menus() {
    register_nav_menu('creed-theme-main-navigation', __( 'Main Navigation' ));
    register_nav_menu('creed-theme-footer-navigation', __( 'Footer Navigation' ));
}

add_action( 'init', 'creed_theme_custom_menus' );