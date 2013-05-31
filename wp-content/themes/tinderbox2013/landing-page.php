<?php
/**
 * Template Name: Landing Page
 */
?>

<?php include (TEMPLATEPATH . '/inc/header-sans-nav.php' ); ?>

	<div class="container">
					
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		<div class="content full-width">

			<article>
		
				<div class="title-background"></div>
			
				<h1><?php the_title(); ?></h1>
				
				<p class="large-intro"><?php the_field('large_intro'); ?></p>
			
				<p class="small-intro"><?php the_field('small_intro'); ?></p>
										
				<?php if (get_field('include_pardot_form')) {
					echo '<div class="two-col">';
					the_content();
					echo '</div><div class="two-col pardot-form"><h2>';
					the_field('pardot_form_title');
					echo '</h2><div class="form-contain">';
					the_field('pardot_form');
					echo '</div></div><div class="clearfix"></div>';
				} elseif (get_field('include_two_col')) {
					echo '<div class="two-col">';
					the_field('first_column');
					echo '</div><div class="two-col">';
					the_field('second_column');
					echo '</div><div class="clearfix"></div>';
				} else {
					the_content();
				} ?>


				
			<?php if(get_field('include_cta')) {
				
				echo '<div class="page-bottom-cta clearfix">';
				if(get_field('cta_image')) {
					echo '<figure><img src="' . get_field('cta_image') . '" alt="" /></figure>';
				}
				echo '<p class="cta-lead-in">' . get_field('cta_lead_in') . '</p><a class="cta" href="' . get_field('cta_link') . '">' . get_field('cta_button_text') . '</a></div>';
				
			} ?>
				
			</article>
			
		</div>
		
		<?php endwhile; ?>

	</div>
			
<?php include (TEMPLATEPATH . '/inc/footer.php' ); ?>