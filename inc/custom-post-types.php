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