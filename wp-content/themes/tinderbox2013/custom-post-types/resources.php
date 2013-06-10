<?php

	// Add Resources Custom Post Type
	add_action( 'init', 'create_post_type' );
	function create_post_type() {
		register_post_type( 'resources',
			array(
				'labels' => array(
					'name' => __( 'Resources' ),
					'singular_name' => __( 'Resource' ),
					'add_new' => __( 'Add New' ),
					'add_new_item' => __( 'Add New Resource' ),
					'edit_item' => __( 'Edit Resource' ),
					'new_item' => __( 'New Resource' ),
					'all_items' => __( 'All Resources' ),
					'view_item' => __( 'View Resource' ),
					'search_items' => __( 'Search Resources' ),
					'not_found' => __( 'Resource Not Found' ),
					'not_found_in_trash' => __( 'No Resources in Trash' ),
					'parent_item_colon' => '',
					'menu_name' => __( 'Resources' )
				),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'resource'),
				'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
			)
		);
	}
	
	add_action( 'init', 'resource_category_init', 100 ); // 100 so the post type has been registered
	function resource_category_init()
	{
	    register_taxonomy( 
	    	'type', 
	    	'resources', 
	    	array(
	    	'labels' => array(
	    		'name' => 'Resource Type',
	    		'singular_name' => 'Resource Type',
	    		'search_items' => 'Search Resource Types',
	    		'popular_items' => 'Popular Resource Types',
	    		'all_items' => 'All Resource Types',
	    		'edit_item' => __( 'Edit Resource Type' ), 
	    		'update_item' => __( 'Update Resource Type' ),
	    		'add_new_item' => __( 'Add New Resource Type' ),
	    		'new_item_name' => __( 'New Resource Type' )
	    	),
	    	'hierarchical' => 'false',
	    	'label' => 'Resource Type' )
	    	);
	}