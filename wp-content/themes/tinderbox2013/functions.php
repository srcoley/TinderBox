<?php
	
// Add RSS links to <head> section
automatic_feed_links();

// Load jQuery
if ( !function_exists(core_mods) ) {
	function core_mods() {
		if ( !is_admin() ) {
			wp_deregister_script('jquery');
			wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"), false);
			wp_enqueue_script('jquery');			
		}
	}
	core_mods();
}

// Clean up the <head>
function removeHeadLinks() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

// Register Sidebar
if ( function_exists('register_sidebar') ) {
	register_sidebar(array('name'=>'Blog Sidebar',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}

// Set up Post Thumbnails
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 65, 65, true );	
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'blog-thumb', 672, 363, false ); //(not cropped)
	add_image_size( 'client-thumb', 240, 120, false ); //(not cropped)
	add_image_size( 'media-thumb', 200, 105, false ); //(not cropped)
	add_image_size( 'library-thumb', 230, 150, true ); //(cropped)
	add_image_size( 'resource-thumb', 300, 150, true ); //(cropped)	
}

// Register Menus
register_nav_menu( 'primary', __( 'Primary Menu', 'tinderbox' ) );
register_nav_menu( 'footer', __( 'Footer Menu', 'tinderbox' ) );

// Add Custom Post Types
require_once(TEMPLATEPATH . '/custom-post-types/client-stories.php');
require_once(TEMPLATEPATH . '/custom-post-types/careers.php');
require_once(TEMPLATEPATH . '/custom-post-types/resources.php');
require_once(TEMPLATEPATH . '/custom-post-types/pressreleases.php');

// Custom Excerpt Length
if ( ! function_exists( 'custom_excerpt_length' ) ) :
function custom_excerpt_length( $length ) {
	return 48;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
endif;

function new_excerpt_more($more) {
    global $post;
	return '&hellip;</p>';
}
add_filter('excerpt_more', 'new_excerpt_more');