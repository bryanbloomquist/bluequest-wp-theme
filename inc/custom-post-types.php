<?php

// Create custom post types.
add_action( 'init', 'create_custom_post_types' );
function create_custom_post_types() {
    // documentation => https://developer.wordpress.org/reference/functions/register_post_type/
    register_post_type( 'generic_posts',
        [
            'labels'            => [
                'name'          => __( 'Generic Posts' ),
                'singular_name' => __( 'Generic Post' ),
            ],
            'menu_icon'         => 'dashicons-admin-post', // => https://developer.wordpress.org/resource/dashicons/
            'public'            => TRUE,
            'has_archive'       => TRUE,
            'rewrite'           => array( 'slug' => 'generic_posts' ),
            'supports'          => array(   'title', 
                                            'editor',
                                            'author',
                                            'thumbnail',
                                            'excerpt',
                                            'trackbacks',
                                            'custom-fields',
                                            'comments',
                                            'revisions',
                                            'page-attributes',
                                            'post-formats',
            ),
            'hierarchical'      => false,
        ]
    );
};

//Add Sort by Order to Generic Posts
add_filter('manage_generic_posts_posts_columns', function ($columns) {
    $columns['menu_order'] = "Order";
    return $columns;
});
add_action( 'manage_generic_posts_posts_custom_column', function ($column_name, $post_id){
    if ($column_name == 'menu_order') {
        echo get_post($post_id)->menu_order;
    }
}, 10, 2);
$menu_order_sortable_on_screen = 'edit-generic_posts';
add_filter('manage_' . $menu_order_sortable_on_screen . '_sortable_columns', function ($columns){
    $columns['menu_order'] = 'menu_order';
    return $columns;
});

/**
 * Add featured image column to WP admin panel - posts AND pages
 * See: https://bloggerpilot.com/featured-image-admin/
 */

// Set thumbnail size
add_image_size( 'bq_admin-featured-image', 60, 60, false );

// Add the posts and pages columns filter. Same function for both.
add_filter('manage_posts_columns', 'bq_add_thumbnail_column', 2);
add_filter('manage_pages_columns', 'bq_add_thumbnail_column', 2);

function bq_add_thumbnail_column($bq_columns) {
    $bq_columns['bq_thumb'] = __('Image');
    return $bq_columns;
}

// Add featured image thumbnail to the WP Admin table.
add_action('manage_posts_custom_column', 'bq_show_thumbnail_column', 5, 2);
add_action('manage_pages_custom_column', 'bq_show_thumbnail_column', 5, 2);
function bq_show_thumbnail_column($bq_columns, $bq_id) {
    switch($bq_columns){
        case 'bq_thumb':
        if( function_exists('the_post_thumbnail') )
        echo the_post_thumbnail( 'bq_admin-featured-image' );
        break;
    }
}

// Move the new column at the first place.
add_filter('manage_posts_columns', 'bq_column_order');
function bq_column_order($columns) {
    $n_columns = array();
    $move = 'bq_thumb'; // which column to move
    $before = 'title'; // move before this column
    foreach($columns as $key => $value) {
        if ($key==$before){
            $n_columns[$move] = $move;
        }
        $n_columns[$key] = $value;
    }
    return $n_columns;
}

// Format the column width with CSS
add_action('admin_head', 'bq_add_admin_styles');
function bq_add_admin_styles() {
    echo '<style>.column-bq_thumb {width: 60px;}</style>';
}