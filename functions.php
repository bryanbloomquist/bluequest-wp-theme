<?php
    /**
     * Theme functions
     * @package CustomTheme
     */

ob_start();

include 'inc/enqueue.php';
include 'inc/custom-post-types.php';
include 'inc/taxonomies.php';
include 'inc/theme-support.php';
include 'inc/custom-menu-walker.php';