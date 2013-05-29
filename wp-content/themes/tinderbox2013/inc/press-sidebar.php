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
				
		echo '<h2 class="parent-title"><a href="' . site_url() . '/press-section">Recent Press</a></h2>';
		
		$args = array(
		    'menu'    => 'Footer Nav',
		    'submenu' => 'Press',
		);
		
		wp_nav_menu( $args );
		
		?>

	</nav>
	
	<div class="press-sidebar">

		<div class="sidebar-form" id="press-kit-form">
			<h3>Get Your Press Kit</h3>
			<div class="form-body">
				<iframe src="http://go.gettinderbox.com/l/18292/2013-05-13/8sld9" width="100%" height="305" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe>
			</div>
		</div>
		
		<div class="sidebar-form" id="email-alerts-form">
			<h3>Email Alerts</h3>
			<div class="form-body">
				<iframe src="http://go.gettinderbox.com/l/18292/2013-05-13/8slf1" width="100%" height="155" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe>
			</div>
		</div>
	
		<h3>Media Relations</h3>
		<p>This contact information is for press and media use only.</p>
		<p><a href="mailto:MediaRelations@gettinderbox.com">MediaRelations@gettinderbox.com</a><br>
		317.806.1900 x115</p>
		<p class="social">
			<a href="https://twitter.com/GetTinderBox" target="_blank"><span class="ss-icon ss-social-circle">&#xF611;</span></a>
			<a href="http://www.facebook.com/GetTinderBox" target="_blank"><span class="ss-icon ss-social-circle">&#xF610;</span></a>
			<a href="https://plus.google.com/110025256256488674344/posts" target="_blank"><span class="ss-icon ss-social-circle">&#xF613;</span></a>
			<a href="http://www.linkedin.com/company/964447" target="_blank"><span class="ss-icon ss-social-circle">&#xF612;</span></a>
		</p>	
		
	</div>	
</aside>