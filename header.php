<?php
    /**
     * Theme header
     * @package CustomTheme
     */

    get_template_part('parts/global/meta', 'meta'); 
?>

<header id="masthead" class="header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
    <nav class="navbar" role="navigation" id="navbar-main">
		<div class="container">
            <?php if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            } ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".header__nav" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler__icon">MENU <span class="icon-menu"></span></span>
            </button>
            <div class="header__nav collapse navbar-collapse">
                <?php
                    wp_nav_menu([
                        'theme_location'  => 'custom-theme-main-navigation',
                        'container_class' => '',
                        'container_id'    => 'mainNavigation',
                        'menu_class'      => 'navbar-nav ml-auto',
                        'walker' => new Custom_Walker()
                    ]);
                ?>
            </div>
        </div>
    </nav>
</header><!-- #masthead -->

<main id="main" class="site-main" role="main">
    <div class="site-main__content container-fluid">