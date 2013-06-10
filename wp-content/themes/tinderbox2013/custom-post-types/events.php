<?php

	// Add support for events post type
	add_action('init', 'events_register');
	 
	function events_register() {
	 
		$labels = array(
			'name' => _x('Events', 'post type general name'),
			'singular_name' => _x('Event', 'post type singular name'),
			'add_new' => _x('Add New', 'Event'),
			'add_new_item' => __('Add New Event'),
			'edit_item' => __('Edit Event'),
			'new_item' => __('New Event'),
			'view_item' => __('View Event'),
			'search_items' => __('Search Events'),
			'not_found' =>  __('Nothing found'),
			'not_found_in_trash' => __('Nothing found in Trash'),
			'parent_item_colon' => ''
		);
	 
		$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'menu_icon' => false,
			'rewrite' => array('slug' => 'event'),
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title','editor','thumbnail','excerpt')
		  ); 
	 
		register_post_type( 'events' , $args );
		
		add_action('init', 'demo_add_default_boxes');
		
	}