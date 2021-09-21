<?php
/**
 * Theme functions
 *
 * @package CreedTheme
 */

ob_start();

include 'inc/enqueue.php';
include 'inc/custom-post-types.php';
include 'inc/taxonomies.php';
include 'inc/menus.php';
include 'inc/custom-menu-walker.php';