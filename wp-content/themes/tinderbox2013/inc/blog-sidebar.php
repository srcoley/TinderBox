<aside class="sidebar blog-sidebar">

	<?php if ( !function_exists('dynamic_sidebar') ||
           !dynamic_sidebar('Blog Sidebar') ) : ?>
  			<!-- This will be displayed if the sidebar is empty -->
	<?php endif; ?>
	
	<div class="innersidebar">
	
		<h3>Getting to &ldquo;Yes&rdquo; Faster</h3>
		<p>TinderBox, consensus, and the vision of a solution built for the way business works today.</p>
		<a class="cta" href="">Read More</a>

		<?php if ( !function_exists('dynamic_sidebar')
		|| !dynamic_sidebar('Default Sidebar') ) : ?>
		<?php endif; ?>

	</div>
	
</aside>