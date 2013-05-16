<?php
/**
 * Template Name: Featured Resources
 */
?>

<?php include (TEMPLATEPATH . '/inc/header.php' ); ?>

	<div class="container">
			
		<?php include (TEMPLATEPATH . '/inc/sidebar.php' ); ?>
		
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
			$post_object = get_field('primary_featured_resource');
			if( $post_object ): 
				$post = $post_object;
				setup_postdata( $post ); 			 
					if ( 'clientstories' != get_post_type() ) { 
						$term_list = wp_get_post_terms($post->ID, 'type', array("fields" => "names"));
						$resourcetype = $term_list[0];
					} else {
						$resourcetype = 'Client Story';
					}				?>
				<article class="resource primary-featured-resource <?php if ( 'clientstories' == get_post_type() ) { echo 'clientstories'; } else { echo $term_list[0]; } ?>">																	
					<?php if ( has_post_thumbnail() ) { ?>
						<a href="<?php the_permalink(); ?>"><figure>
							<?php echo '<p class="resource-type">Featured '; ?>
								<?php if ( 'clientstories' == get_post_type() ) { echo 'Client Story'; } else { echo $term_list[0]; } ?>
							<?php echo '</p>'; ?>
							<?php the_post_thumbnail('blog-thumb'); ?>
						</figure></a>
					<?php } ?>

					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

					<?php the_excerpt(); ?>
					<p class="view-resource"><a href="<?php the_permalink(); ?>">View <?php echo $resourcetype; ?> &raquo;</a></p>
					
				</article>
			    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>
			
			<div class="clearfix"></div>
			
			<?php
			$post_object = get_field('secondary_featured_resource_1');
			if( $post_object ): 
				$post = $post_object;
				setup_postdata( $post ); 			 
					if ( 'clientstories' != get_post_type() ) { 
						$term_list = wp_get_post_terms($post->ID, 'type', array("fields" => "names"));
						$resourcetype = $term_list[0];
					} else {
						$resourcetype = 'Client Story';
					}				?>
				<article class="resource secondary-featured-resource <?php if ( 'clientstories' == get_post_type() ) { echo 'clientstories'; } else { echo $term_list[0]; } ?>">																						
					<?php if ( has_post_thumbnail() ) { ?>
						<a href="<?php the_permalink(); ?>"><figure>
							<?php echo '<p class="resource-type">'; ?>
								<?php if ( 'clientstories' == get_post_type() ) { echo 'Client Story'; } else { echo $term_list[0]; } ?>
							<?php echo '</p>'; ?>
							<?php the_post_thumbnail('resource-thumb'); ?>
						</figure></a>
					<?php } ?>

					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					
					<?php the_excerpt(); ?>
					<p class="view-resource"><a href="<?php the_permalink(); ?>">View <?php echo $resourcetype; ?> &raquo;</a></p>

				</article>
			    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>
						
						
			<?php
			$post_object = get_field('secondary_featured_resource_2');
			if( $post_object ): 
				$post = $post_object;
				setup_postdata( $post ); 		
					if ( 'clientstories' != get_post_type() ) { 
						$term_list = wp_get_post_terms($post->ID, 'type', array("fields" => "names"));
						$resourcetype = $term_list[0];
					} else {
						$resourcetype = 'Client Story';
					}				?>
				<article class="resource secondary-featured-resource <?php if ( 'clientstories' == get_post_type() ) { echo 'clientstories'; } else { echo $term_list[0]; } ?>">																	
					<?php if ( has_post_thumbnail() ) { ?>
						<a href="<?php the_permalink(); ?>"><figure>
							<?php echo '<p class="resource-type">'; ?>
								<?php if ( 'clientstories' == get_post_type() ) { echo 'Client Story'; } else { echo $term_list[0]; } ?>
							<?php echo '</p>'; ?>
							<?php the_post_thumbnail('resource-thumb'); ?>
						</figure></a>
					<?php } ?>											

					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

					<?php the_excerpt(); ?>
					<p class="view-resource"><a href="<?php the_permalink(); ?>">View <?php echo $resourcetype; ?> &raquo;</a></p>

				</article>
			    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>
						
			
			<?php if(get_field('include_cta')) {
				
				echo '<div class="page-bottom-cta clearfix"><figure><img src="' . get_field('cta_image') . '" alt="" /></figure><p class="cta-lead-in">' . get_field('cta_lead_in') . '</p><a class="cta" href="' . get_field('cta_link') . '">' . get_field('cta_button_text') . '</a></div>';
				
			} ?>
			
		</div>
		
		<?php endwhile; ?>

	</div>
			
<?php include (TEMPLATEPATH . '/inc/footer.php' ); ?>