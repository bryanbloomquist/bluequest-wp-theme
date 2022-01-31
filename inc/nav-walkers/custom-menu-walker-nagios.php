<?php

    class Nagios_Primary_Walker extends Walker_Nav_Menu {

        public function start_lvl( &$output, $depth = 0, $args = null ) {
            if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
                $t = '';
                $n = '';
            } else {
                $t = "\t";
                $n = "\n";
            }
            $indent = str_repeat( $t, $depth );
            $classes = array( 'dropdown-menu' );
            $class_names = join( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
            $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
            $labelledby = '';
            preg_match_all( '/(<a.*?id=\"|\')(.*?)\"|\'.*?>/im', $output, $matches );
            if ( end( $matches[2] ) ) {
                $labelledby = 'aria-labelledby="' . esc_attr( end( $matches[2] ) ) . '"';
            }
            $output .= "{$n}{$indent}<ul$class_names $labelledby>{$n}";
        }

        public function start_el( &$output, $item, $depth=0, $args=[], $id=0) {
            // Get Classes
            $classes = [];
            if ( $this->has_children ) {
                $classes[] = 'dropdown';
            }
            if ( in_array( 'current-menu-item', $item->classes, true ) || in_array( 'current-menu-parent', $item->classes, true ) ) {
                $classes[] = 'active';
            }
            $classes[] = 'nav-item';
            $class_names = join( ' ', $classes );
            $class_names = $class_names ? ' class="' . esc_attr( $class_names ). '"' : '';

            $output .= '<li id="menu-item-' . $item->ID . '" ' . $class_names . '>';

            // Get Link Attributes
            $atts = '';
            if ( $this->has_children && 0 === $depth ) {
                $atts = 'href="#" data-bs-toggle="dropdown" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-' . $item->ID . '"';
            } else {
                $href = ! empty( $item->url ) ? $item->url : '#';
                if ( $depth > 0 ) {
                    $atts = 'href="' . $href . '" class="dropdown-item"';
                } else {
                    $atts = 'href="' . $href . '" class="nav-link"';
                }
            }
            if ( $item->current ) {
                $atts .= ' aria-current="page"';
            }
            if ( $item->target ) {
                $atts .= ' target="' . $item->target . '"';
            }
            if ($item->target === '_blank' ) {
                $atts .= ' rel="noopener noreferrer"';
            }
            
            $output .= '<a ' . $atts . '>';

            $output .=  $item->title;

            if ( $args->walker->has_children ) {
                $output .= '<i class="icon-chevron-down"></i>';
            }

            $output .= '</a>';
        }

    }

    class Nagios_Simple_Walker extends Walker_Nav_Menu {

        function start_el( &$output, $item, $depth=0, $args=array(), $id = 0) {
            $title = $item->title;
            $permalink = $item->url;
            $target = $item->target ? ' target="' . $item->target . '"' : null;
            $rel = '_blank' === $item->target ? ' rel="noopener noreferrer"' : null;

            $output .= "<li class='nav-link'>";

            $output .= '<a href="' . $permalink . '" ' . $target . $rel . '>';

            if ( $rel ) {
                $output .= $title . '<i class="icon-link"></i>';
            } else {
                $output .= $title;
            }

            $output .= '</a>';
        }
    }