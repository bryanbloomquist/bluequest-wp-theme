<?php

class CreedTheme_Walker extends Walker_Nav_Menu {

    function start_el( &$output, $item, $depth=0, $args=[], $id=0) {
        $title = $item->title;
        $permalink = $item->url;
        
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item' . $item->ID;
        $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );
        $class_names = implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ). '"' : '';

        $output .= '<li' . $class_names . '>';
        // $output .= "<li class='nav-item'>";
        
        if( $permalink && $permalink != '#' ) {
            $output .= '<a href="' . $permalink . '" class="nav-link">';
        } else {
            $output .= '<span>';
        }

        $output .= $title;

        if( $permalink && $permalink != '#'  ) {
            $output .= '</a>';
        } else {
            $output .= '</span>';
        }
    }
}

class CreedTheme_Footer_Walker extends Walker_Nav_Menu {

    function start_el( &$output, $item, $depth=0, $args=array(), $id = 0) {
        $title = $item->title;
        $permalink = $item->url;

        $output .= "<li class='nav-item'>";
        
        if( $permalink && $permalink != '#' ) {
            $output .= '<a href="' . $permalink . '">';
        } else {
            $output .= '<span>';
        }

        $output .= $title;

        if( $permalink && $permalink != '#' ) {
            $output .= '</a>';
        } else {
            $output .= '</span>';
        }
    }
}