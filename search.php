<?php get_header(); ?>

    <section class="page-content">
        <div class="page-content__container">
            <h2>Search results for query: "<?php the_search_query(); ?>"</h2>
            <?php if ( have_posts() ) : ?>
                <ul class="search-results">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <li>
                            <div>
                                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php else : ?>
                <p>No search results found.</p>
            <?php endif; ?>
        </div>
    </section>

<?php get_footer() ?>