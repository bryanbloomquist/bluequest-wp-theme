<?php get_header(); ?>

<div class="container">
    <h2>Search Results</h2>
    <?php 
        if ( have_posts() ) {
            echo '<ul class="search-results">';
                while ( have_posts() ) { 
                    the_post();
                    echo '<li><h5><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h5></li>';
                }
            echo '</ul>';
        } else {
            echo '<p>No search results found.</p>';
        }; 
    ?>
</div>

<?php get_footer() ?>