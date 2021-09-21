<!DOCTYPE html>

<html <?php language_attributes(); ?> class="html">

    <head>
        <meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?>"/>
        <meta charset="<?php bloginfo( 'charset' ); ?>"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <?php wp_head(); ?>
        <title>
            <?php 
                $title = wp_title( '' );
                echo $title;
            ?>
        </title>
        <link rel="profile" href="http://gmpg.org/xfn/11"/>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
    </head>

    <body <?php body_class(); ?> >