<?php
    /**
	 * The template for displaying 404 pages (not found).
     * @package BlueQuest
     */

    get_header(); 
?>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card my-5">
                    <div class="card-body">
                        <h5 class="mb-4"><?php _e( 'This is somewhat embarrassing, isn’t it?', 'bluequest' ); ?></h5>
                        <p><?php _e( 'It looks like nothing was found at this location.  Can you try this again or maybe visit our <a title="Our Site" href="/">Home Page</a> to start fresh.  We\'ll do better next time.', 'bluequest' ); ?></p>
                    </div>
                </div> 
            </div>
        </div>
    </div>

<?php get_footer(); ?>
