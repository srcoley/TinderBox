<?php include (TEMPLATEPATH . '/inc/header.php' ); ?>

	<div class="container">
			
		<?php include (TEMPLATEPATH . '/inc/resources-sidebar.php' ); ?>

		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		<div class="content">

			<div class="title-background"></div>
		
			<h1><?php the_title(); ?></h1>
			
			<p class="large-intro"><?php the_field('client_intro_text'); ?></p>
		
			<?php if (get_field('rate_value')) { ?>	
				<div class="client-stats clearfix">

					<figure>
						<div class="client-stats-img-wrapper">
							<div class="client-stats-img-contain">
								<?php if ( has_post_thumbnail() ) { the_post_thumbnail('client-thumb'); } ?>
							</div>
						</div>
					</figure>
					
					<div class="client-stats-inner clearfix">
						<div class="donut-chart-contain">
							<div id="donutchart" data-percent="<?php the_field('rate_value'); ?>"></div>
							<div class="close-rate"><span><span class="fallback-rate"><?php the_field('rate_value'); ?></span></span><br> <?php the_field('rate_label'); ?></div>
						</div>
							
						<p class="client-stat">
							<b><?php the_field('first_metric_value'); ?></b><br>
							<?php the_field('first_metric_label'); ?><br><br>
							<b><?php the_field('second_metric_value'); ?></b><br>
							<?php the_field('second_metric_label'); ?>
						</p>
						
					</div>
				</div>
			<?php } ?>

			<article>
				<?php the_field('client_main_content'); ?>
			</article>
			
			<h2 class="more-clients">More Client Stories</h2>
			
			<div class="client-blocks">

				<?php
				
				$post_objects = get_field('featured_client_stories');
				 
				if( $post_objects ){ ?>
				    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
				        <?php setup_postdata($post); 
					    echo '<a class="client-block" href="';
					    the_permalink();
					    echo '"><div class="client-thumb"><figure>';
						if ( has_post_thumbnail() ) { the_post_thumbnail('client-thumb'); }
						echo '</figure></div><h2 class="organization-type">';
						the_field('organization_type');
					    echo '</h2></a>';
					endforeach; ?>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php } else {
				
				$args = array( 'post_type' => 'clientstories', 'posts_per_page' => 3 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				    echo '<a class="client-block" href="';
				    the_permalink();
				    echo '"><div class="client-thumb"><figure>';
					if ( has_post_thumbnail() ) { the_post_thumbnail('client-thumb'); }
					echo '</figure></div><h2 class="organization-type">';
					the_field('organization_type');
				    echo '</h2></a>';
				endwhile;
				
				}
				?>			  

			</div>
			
			<?php if(get_field('include_cta')) {
				
				echo '<div class="page-bottom-cta clearfix">';
				if(get_field('cta_image')) {
					echo '<figure><img src="' . get_field('cta_image') . '" alt="" /></figure>';
				}
				echo '<p class="cta-lead-in">' . get_field('cta_lead_in') . '</p><a class="cta" href="' . get_field('cta_link') . '">' . get_field('cta_button_text') . '</a></div>';
				
			} ?>
			
		</div>
		
		<?php endwhile; ?>

	</div>
			
<?php include (TEMPLATEPATH . '/inc/footer.php' ); ?>