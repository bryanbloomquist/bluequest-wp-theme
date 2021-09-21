<?php
    /**
     * The template for the homepage.
     * @package CreedTheme
     * Template Name: Homepage
     */

    get_header(); 
?>

<section class="page-hero">
    <h1 class="page-hero__title"><?php echo the_title(); ?></h1>
</section>

<section class="page-content">
    <div class="page-content__container">
        <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
                    the_content();
                }
            }
        ?>
    </div>
</section>

<?php get_footer(); ?>