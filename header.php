<?php
    /**
     * Theme header
     * @package BlueQuest
     */

    get_template_part('parts/global/meta', 'meta'); 
?>

<header id="masthead" class="header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
    <nav class="navbar" role="navigation" id="navbar-main">
		<div class="container">
            <!-- Custom Logo -->
            <?php if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            } ?>
            <!-- Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".header__nav" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler__icon">MENU <span class="icon-menu"></span></span>
            </button>
            <!-- Menu -->
            <?php
                wp_nav_menu([
                    'theme_location'    => 'custom-theme-main-navigation',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'navbar-collapse collapse',
                    'container_id'      => 'main-menu',
                    'menu_class'        => 'navbar-nav ml-auto',
                    'walker'            => new Custom_Walker(),
                    'show_carets'       => true
                ]);
            ?>
            <!-- Search Toggle Button -->
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-search" aria-expanded="false" aria-label="Toggle Search">
                <i class="fas fa-search"></i>
            </button>
            <!-- Search Form -->
            <form method="get" class="navbar-search collapse" role="search" action="<?php echo home_url(); ?>">
                <div class="input-group">
                    <label for="navbar-search" class="sr-only"><?php _e('Search', 'textdomain'); ?></label>
                    <input name="s" value="" type="text" id="navbar-search" placeholder="Search"/>
                    <button class="navbar-search__button"><i class="fas fa-search"></i></button>
                </div>
            </form>   
        </div>
    </nav>
</header><!-- #masthead -->

<main id="main" class="site-main" role="main">
    <div class="site-main__content container-fluid">