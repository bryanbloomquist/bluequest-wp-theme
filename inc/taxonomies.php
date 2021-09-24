<?php

add_action( 'init', 'register_custom_taxonomies', 0 );

function register_custom_taxonomies() {
    // register_taxonomy( 
    //     'custom_condition', 
    //     [ 'custom_resource' ], 
    //     [
    //         'hierarchical'      => true, // make it hierarchical (like categories)
    //         'labels'            => [
    //             'name'              => _x( 'Conditions', 'taxonomy general name' ),
    //             'singular_name'     => _x( 'Condition', 'taxonomy singular name' ),
    //             'search_items'      => __( 'Search Conditions' ),
    //             'all_items'         => __( 'All Conditions' ),
    //             'parent_item'       => __( 'Parent Condition' ),
    //             'parent_item_colon' => __( 'Parent Condition:' ),
    //             'edit_item'         => __( 'Edit Condition' ),
    //             'update_item'       => __( 'Update Condition' ),
    //             'add_new_item'      => __( 'Add New Condition' ),
    //             'new_item_name'     => __( 'New Condition Name' ),
    //             'menu_name'         => __( 'Conditions' ),
    //         ],
    //         'show_ui'           => true,
    //         'show_admin_column' => true,
    //     ]   
    // );
}