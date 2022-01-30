<?php
    /**
	 * The main template file.
     * @package BlueQuest
     */

    get_header(); 
?>

    <h1 class="p-5 display-6"><?php echo the_title(); ?></h1>

    <div class="container">
        <?php if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        endif; ?>
    </div>

<?php get_footer(); ?>