<?php include (TEMPLATEPATH . '/inc/header.php' ); ?>

	<div class="container">
			
		<?php include (TEMPLATEPATH . '/inc/sidebar.php' ); ?>
		
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		<div class="content">

			<article>
		
				<div class="title-background"></div>
			
				<h1><?php the_title(); ?></h1>
				
				<p class="large-intro"><?php the_field('large_intro'); ?></p>
			
				<p class="small-intro"><?php the_field('small_intro'); ?></p>
						
				<?php the_content(); ?>			
				
				<?php if(get_field('include_cta')) {
					
					echo '<div class="page-bottom-cta clearfix"><figure><img src="' . get_field('cta_image') . '" alt="" /></figure><p class="cta-lead-in">' . get_field('cta_lead_in') . '</p><a class="cta" href="' . get_field('cta_link') . '">' . get_field('cta_button_text') . '</a></div>';
					
				} ?>
				
			</article>
			
		</div>
		
		<?php endwhile; ?>

	</div>
			
<?php include (TEMPLATEPATH . '/inc/footer.php' ); ?>