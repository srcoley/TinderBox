<?php

	// Add support for Open Position post type
	add_action('init', 'careers_register');
	 
	function careers_register() {
	 
		$labels = array(
			'name' => _x('Open Positions', 'post type general name'),
			'singular_name' => _x('Open Position', 'post type singular name'),
			'add_new' => _x('Add New', 'Open Position'),
			'add_new_item' => __('Add New Open Position'),
			'edit_item' => __('Edit Open Position'),
			'new_item' => __('New Open Position'),
			'view_item' => __('View Open Position'),
			'search_items' => __('Search Open Positions'),
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
			'rewrite' => array('slug' => 'open-positions'),
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title','editor','thumbnail','excerpt')
		  ); 
	 
		register_post_type( 'careers' , $args );
		
		add_action('init', 'demo_add_default_boxes');
		
	}