<?php

	// Add support for Client Story post type
	add_action('init', 'clientstories_register');
	 
	function clientstories_register() {
	 
		$labels = array(
			'name' => _x('Client Stories', 'post type general name'),
			'singular_name' => _x('Client Story', 'post type singular name'),
			'add_new' => _x('Add New', 'Client Story'),
			'add_new_item' => __('Add New Client Story'),
			'edit_item' => __('Edit Client Story'),
			'new_item' => __('New Client Story'),
			'view_item' => __('View Client Story'),
			'search_items' => __('Search Client Stories'),
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
			'rewrite' => array('slug' => 'client-stories'),
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title','editor','thumbnail','excerpt')
		  ); 
	 
		register_post_type( 'clientstories' , $args );
		
		add_action('init', 'demo_add_default_boxes');
		
	}