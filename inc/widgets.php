<?php

function bq_widgets() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'bluequest' ),
        'id'            => 'bq_sidebar',
        'description'   => __( 'Sidebar for the theme BlueQuest', 'bluequest' ),
        'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
        'after_widget'  => '</div>',
    ) );
}