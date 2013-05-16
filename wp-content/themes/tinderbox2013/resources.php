<?php
/**
 * Template Name: Resources
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
			<?php } ?>				
					
			<?php
			
			if ('Whitepapers' == get_the_title()) {
				$type = 'whitepaper';		
			}
			if ('Infographics' == get_the_title()) {
				$type = 'infographic';		
			}
			if ('Webinars' == get_the_title()) {
				$type = 'webinar';		
			}
			
			$args = array( 'post_type' => 'resources', 'type' => $type );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
					if ( 'clientstories' != get_post_type() ) { 
						$term_list = wp_get_post_terms($post->ID, 'type', array("fields" => "names"));
						$resourcetype = $term_list[0];
					} else {
						$resourcetype = 'Client Story';
					}
				?>
				<article class="resource <?php if ( 'clientstories' == get_post_type() ) { echo 'clientstories'; } else { echo $term_list[0]; } ?>">																	
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
							
			<?php endwhile; ?>

			<?php include (TEMPLATEPATH . '/inc/pager.php' ); ?>

			
			<?php if(get_field('include_cta')) {
				
				echo '<div class="page-bottom-cta clearfix"><figure><img src="' . get_field('cta_image') . '" alt="" /></figure><p class="cta-lead-in">' . get_field('cta_lead_in') . '</p><a class="cta" href="' . get_field('cta_link') . '">' . get_field('cta_button_text') . '</a></div>';
				
			} ?>
			
		</div>
		
		<?php endwhile; ?>

	</div>
			
<?php include (TEMPLATEPATH . '/inc/footer.php' ); ?>