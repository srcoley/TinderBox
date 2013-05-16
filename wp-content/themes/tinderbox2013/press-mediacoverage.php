<?php
/**
 * Template Name: Press - Media Coverage
 */
?>

<?php include (TEMPLATEPATH . '/inc/header.php' ); ?>

	<div class="container">
			
		<?php include (TEMPLATEPATH . '/inc/press-sidebar.php' ); ?>
		
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		<div class="content">
	
			<div class="title-background"></div>

			<h1><?php the_title(); ?></h1>

			<?php if(get_field('large_intro') || get_field('small_intro')) { ?>
				<p class="large-intro"><?php the_field('large_intro'); ?></p>
				<p class="small-intro"><?php the_field('small_intro'); ?></p>
				<hr class="fade-hr">
			<?php } ?>						
		
			<?php
			$bookmarks = get_bookmarks( array(
							'orderby'        => 'name',
							'order'          => 'ASC'
			                          ));
			
			// Loop through each bookmark and print formatted output
			foreach ( $bookmarks as $bm ) { 
			    printf( '<article class="media-item clearfix"><a target="_blank" href="%s"><figure class="mediathumb"><img src="%s" alt="%s" /></figure></a><h2><a target="_blank" href="%s">%s</a></h2></article><hr class="fade-hr">', $bm->link_url, $bm->link_image, __($bm->link_name), $bm->link_url, __($bm->link_name) );
			}
			?>	

		</div>
					
		<?php endwhile; ?>
		
	</div>	
			
<?php include (TEMPLATEPATH . '/inc/footer.php' ); ?>