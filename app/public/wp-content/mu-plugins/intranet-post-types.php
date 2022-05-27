<?php

function intranet_post_types() {
    register_post_type('event', array(
        'show_in_rest' => true, //setting to modern block editor
        'supports' => array('title', 'editor', 'excerpt'), //settings editor screen 
        'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
          'name' => 'Events',
          'add_new_item' => 'Add New Event',
          'edit_item' => 'Edit Event',
          'all_items' => 'All Events',
          'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar'
      ));
    }
    

add_action('init', 'intranet_post_types');