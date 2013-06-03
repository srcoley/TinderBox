<aside class="sidebar blog-sidebar">

<?php
if (intval($optioncount) == 1) {
$link .= ' ('.intval($category_posts["$category->cat_ID"]).')';
}
?>

	<?php if ( !function_exists('dynamic_sidebar') ||
           !dynamic_sidebar('Blog Sidebar') ) : ?>
  			<!-- This will be displayed if the sidebar is empty -->
	<?php endif; ?>

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Default Sidebar') ) : ?>
	<?php endif; ?>
	
</aside>
