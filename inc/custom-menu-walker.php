<?php

class Custom_Walker extends Walker_Nav_Menu {

    function start_el( &$output, $item, $depth=0, $args=[], $id=0) {
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item' . $item->ID;
        $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );
        $class_names = implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ). '"' : '';

        $output .= '<li' . $class_names . '>';
        
        if( $item->url && $item->url != '#' ) {
            $output .= '<a href="' . $item->url . '" class="nav-link">';
        } else {
            $output .= '<span>';
        }

        $output .= $item->title;

        if( $item->url && $item->url != '#'  ) {
            $output .= '</a>';
        } else {
            $output .= '</span>';
        }

        if ( $args->show_carets && $args->walker->has_children) {
            $output .= '<i class-"caret fa fa-angle-down"></i>';
        }
    }
}

class Custom_Footer_Walker extends Walker_Nav_Menu {

    function start_el( &$output, $item, $depth=0, $args=array(), $id = 0) {
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item' . $item->ID;
        $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );
        $class_names = implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ). '"' : '';

        $output .= '<li' . $class_names . '>';
        
        if( $item->url && $item->url != '#' ) {
            $output .= '<a href="' . $item->url . '">';
        } else {
            $output .= '<span>';
        }

        $output .= $item->title;

        if( $item->url && $item->url != '#' ) {
            $output .= '</a>';
        } else {
            $output .= '</span>';
        }
    }
}