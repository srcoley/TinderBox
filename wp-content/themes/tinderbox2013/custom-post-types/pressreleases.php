<?php

	// Add support for Press Releases post type
	add_action('init', 'pressreleases_register');
	 
	function pressreleases_register() {
	 
		$labels = array(
			'name' => _x('Press Releases', 'post type general name'),
			'singular_name' => _x('Press Release', 'post type singular name'),
			'add_new' => _x('Add New', 'Press Release'),
			'add_new_item' => __('Add New Press Release'),
			'edit_item' => __('Edit Press Release'),
			'new_item' => __('New Press Release'),
			'view_item' => __('View Press Release'),
			'search_items' => __('Search Press Releases'),
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
			'rewrite' => array('slug' => 'press-releases'),
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => null,
			'has_archive' => true,
			'supports' => array('title','editor','thumbnail','excerpt')
		  ); 
	 
		register_post_type( 'pressreleases' , $args );
		
		add_action('init', 'demo_add_default_boxes');
		
	}
	
    // WP Menu Categories
	add_action( 'init', 'create_topics_taxonomy', 0 );
	
	function create_topics_taxonomy() {
    register_taxonomy(
        'press_topics',
        'pressreleases',
        array(
            'labels' => array(
                'name' => 'Topic',
                'add_new_item' => 'Add New Topic',
                'new_item_name' => "New Topic"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true
        )
    );
    }