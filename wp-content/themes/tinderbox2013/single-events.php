<?php include (TEMPLATEPATH . '/inc/header.php' ); ?>

	<div class="container">
			
		<?php include (TEMPLATEPATH . '/inc/resources-sidebar.php' ); ?>
				
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		<div class="content">
	
			<div class="title-background"></div>
							
			<h2 class="page-title">Upcoming Event</h2>

			<article>
			
				<?php
				$eventmonth = get_field('event_date');
				$eventday = get_field('event_date');
				$eventmonth = substr($eventmonth, 0, 3);
				$eventday = substr($eventday, 4, 6);
				?>

				<h1 class="post-title"><?php the_title(); ?></h1>
	
				<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

				<?php if (get_field('include_pardot_form')) {
					echo '<div class="two-col">';
					the_content();
					echo '</div><div class="two-col pardot-form"><h2>';
					the_field('pardot_form_title');
					echo '</h2><div class="form-contain">';
					the_field('pardot_form');
					echo '</div></div><div class="clearfix"></div>';
				} else {
					the_content();
				} ?>

			</article>
									
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
			
<script charset="utf-8" type="text/javascript">var switchTo5x=true;</script><script charset="utf-8" type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script><script type="text/javascript">stLight.options({publisher:'wp.9401703c-c69f-48b5-bd49-f18e27a6e135'});var st_type='wordpress3.5.1';</script>
			
<?php include (TEMPLATEPATH . '/inc/footer.php' ); ?>