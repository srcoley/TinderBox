<aside class="sidebar page-sidebar">

	<div class="subnav-toggle">
		<span></span>
	</div>

	<nav class="subnav">

		<?php
		
		add_filter( 'wp_nav_menu_objects', 'submenu_limit', 10, 2 );
		
		function submenu_limit( $items, $args ) {
		
		    if ( empty($args->submenu) )
		        return $items;
		
		    $parent_id = array_pop( wp_filter_object_list( $items, array( 'title' => $args->submenu ), 'and', 'ID' ) );
		    $children  = submenu_get_children_ids( $parent_id, $items );
		
		    foreach ( $items as $key => $item ) {
		
		        if ( ! in_array( $item->ID, $children ) )
		            unset($items[$key]);
		    }
		
		    return $items;
		}
		
		function submenu_get_children_ids( $id, $items ) {
		
		    $ids = wp_filter_object_list( $items, array( 'menu_item_parent' => $id ), 'and', 'ID' );
		
		    foreach ( $ids as $id ) {
		
		        $ids = array_merge( $ids, submenu_get_children_ids( $id, $items ) );
		    }
		
		    return $ids;
		}
		
		// Usage:
		
		$postparent = empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent );
		$postparentlink = get_permalink($post->post_parent);		
		
		
		$children = get_pages('child_of='.$post->ID);
		
	    if ( is_page() && $post->post_parent || ( count( $children ) != 0 ) ) {
			echo '<h2 class="parent-title"><a href="' . $postparentlink . '">' . $postparent . '</a></h2>';
			$args = array(
			    'menu'    => 'Footer Nav',
			    'submenu' => $postparent,
			);
	    } else {
			echo '<h2 class="parent-title"><a href="' . site_url() . '">' . Home . '</a></h2>';	    
			$args = array(
			    'menu'    => '',
			    'depth' => 1,
			);		    
	    }
			wp_nav_menu( $args );

		
		?>

	</nav>

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Default Sidebar') ) : ?>
	<?php endif; ?>
	
</aside>
