<?php
/**
 * Template Name: Press
 */
?>

<?php include (TEMPLATEPATH . '/inc/header.php' ); ?>

	<div class="container">
			
		<?php include (TEMPLATEPATH . '/inc/press-sidebar.php' ); ?>
		
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		<div class="content">
	
			<div class="title-background"></div>
		
			<h1><?php the_title(); ?></h1>

			<?php include (TEMPLATEPATH . '/inc/page-cta.php' ); ?>
			
			<?php if(get_field('large_intro') || get_field('small_intro')) { ?>
				<p class="large-intro"><?php the_field('large_intro'); ?></p>
				<p class="small-intro"><?php the_field('small_intro'); ?></p>
				<hr class="fade-hr">
			<?php } ?>				

			<h2 class="section-title">Recent Press Releases</h2>
			<?php
			$args = array( 'post_type' => 'pressreleases', 'posts_per_page' => 2 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			    echo '<article class="press-release"><h2><a href="';
			    the_permalink();
			    echo '">';
				the_title();
				echo '</a></h2><p class="the-date">';
			    echo get_the_date();
			    echo '</p>';
				the_excerpt();
				echo '<p class="readmore">Continue reading <a href="'. get_permalink($post->ID) . '">'.get_the_title($post->ID).' &raquo;</a></p>';
				echo '</article><hr class="fade-hr">';
			endwhile;
			?>
			<p class="view-all"><a href="<?php echo site_url(); ?>/press-releases">View All Press Releases &raquo;</a></p>
			
			<hr class="fade-hr">
			
			<h2 class="section-title">Recent Media Coverage</h2>
		
			<?php
			$bookmarks = get_bookmarks( array(
							'orderby'        => 'link_id',
							'order'          => 'ASC',
							'limit'          => '3'
			                          ));
			
			// Loop through each bookmark and print formatted output
			foreach ( $bookmarks as $bm ) { 
			    printf( '<article class="media-item clearfix"><a target="_blank" href="%s"><figure class="mediathumb"><img src="%s" alt="%s" /></figure></a><h2><a target="_blank" href="%s">%s</a></h2></article><hr class="fade-hr">', $bm->link_url, $bm->link_image, __($bm->link_name), $bm->link_url, __($bm->link_name) );
			}
			?>
		
			<p class="view-all"><a href="<?php echo site_url(); ?>/media-coverage">View All Media Coverage &raquo;</a></p>
		
		</div>
		
		<?php endwhile; ?>

	</div>
			
<?php include (TEMPLATEPATH . '/inc/footer.php' ); ?>