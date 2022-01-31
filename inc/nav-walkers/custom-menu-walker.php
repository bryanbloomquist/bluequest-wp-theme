<?php

class Custom_Walker extends Walker_Nav_Menu {

    function start_el( &$output, $item, $depth=0, $args=[], $id=0) {
        $title = $item->title;
        $permalink = $item->url;
        
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item' . $item->ID;
        $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );
        $class_names = implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ). '"' : '';
        $target = $item->target ? 'target="' . $item->target . '"' : null;

        $output .= '<li' . $class_names . '>';
        
        // if( $permalink && $permalink != '#' ) {
        if( $permalink ) {
            $output .= '<a href="' . $permalink . '" class="nav-link" ' . $target . '>';
        } else {
            $output .= '<span class="nav-item">';
        }

        $output .= $title;

        // if( $permalink && $permalink != '#' ) {
        if( $permalink ) {
            $output .= '</a>';
        } else {
            $output .= '</span>';
        }

        if ( ( 0 == $item->menu_item_parent ) && ( $args->walker->has_children ) ) {
            $output .= '<i class="fas fa-chevron-right"></i>';
        }
    }
}

class Custom_Footer_Walker extends Walker_Nav_Menu {

    function start_el( &$output, $item, $depth=0, $args=array(), $id = 0) {
        $title = $item->title;
        $permalink = $item->url;
        $target = $item->target ? 'target="' . $item->target . '"' : null;

        $output .= "<li class='nav-item'>";
        // if( $permalink && $permalink != '#' ) {
        if( $permalink ) {
            $output .= '<a href="' . $permalink . '" ' . $target . '>' . $title . '</a>';
        } else {
            $output .= '<span>' . $title . '</span>';
        }
    }
}