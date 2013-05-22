<?php
/**
 * Template Name: Events
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
			$rows = get_field('events');
			if($rows)
			{
				foreach($rows as $row)
				{
					$eventmonth = $row['event_date'];
					$eventday = $row['event_date'];
					$eventmonth = substr($eventmonth, 0, 3);
					$eventday = substr($eventday, 4, 6);
					
					echo '<div class="upcoming-event events-list clearfix"><p class="event-date"><span class="event-month">' . $eventmonth . '</span><span class="event-day">' . $eventday . '</span></p><h2>' . $row['event_title'] . '</h2><p class="upcoming-event-description">' . $row['event_description'] . '</p>';
					
					if($row['event_cta_link']&&$row['event_cta_text']) {
						echo '<a href="' . $row['event_cta_link'] . '" class="cta">' . $row['event_cta_text'] . '</a>';
					}
					
					echo '</div>';
				}
			}
			?>

			
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