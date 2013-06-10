<?php
/**
 * Template Name: Careers
 */
?>
<?php include (TEMPLATEPATH . '/inc/header.php' ); ?>

	<div class="container">
			
		<?php include (TEMPLATEPATH . '/inc/sidebar.php' ); ?>
				
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<div class="content">
	
			<div class="title-background"></div>
		
			<h1><?php the_title(); ?></h1>

			<?php if (get_field('large_intro')) { ?>
				<p class="large-intro"><?php the_field('large_intro'); ?></p>
			<?php } ?>
			<?php if (get_field('small_intro')) { ?>
				<p class="small-intro"><?php the_field('small_intro'); ?></p>
			<?php } ?>
			<?php the_content(); ?>
			<hr class="fade-hr">
			
			<?php
			$args = array( 'post_type' => 'careers', 'posts_per_page' => 10, 'nopaging' => 'false'  );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			    echo '<article class="career"><h2><a href="';
			    the_permalink();
			    echo '">';
				the_title();
				echo '</a></h2>';
				the_excerpt();
				echo '<p class="readmore"><a href="'. get_permalink($post->ID) . '">View this Position &raquo;</a></p>';
				echo '</article><hr class="fade-hr">';
			endwhile;
			?>
			
		</div>

		<?php endwhile; ?>
		
	</div>
			
<?php include (TEMPLATEPATH . '/inc/footer.php' ); ?>