<?php

function intranet_post_types() {
    register_post_type('event', array(
        'public' => true ,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add NEw Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar' 
    ));
}

add_action('init', 'intranet_post_types');