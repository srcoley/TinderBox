<?php
/**
 * Template Name: Events
 */
?>

<?php include (TEMPLATEPATH . '/inc/header.php' ); ?>

	<div class="container">
			
		<?php include (TEMPLATEPATH . '/inc/resources-sidebar.php' ); ?>
		
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
			$args = array( 'post_type' => 'events', 'posts_per_page' => 10, 'nopaging' => 'false'  );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();

					$eventmonth = get_field('event_date');
					$eventday = get_field('event_date');
					$eventmonth = substr($eventmonth, 0, 3);
					$eventday = substr($eventday, 4, 6);
					
					echo '<div class="upcoming-event events-list clearfix"><p class="event-date"><span class="event-month">' . $eventmonth . '</span><span class="event-day">' . $eventday . '</span></p><h2><a href="' . get_permalink() . '">' . get_the_title() . '</a></h2><p class="upcoming-event-description">' . get_the_excerpt() . '</p></div>';
					
			endwhile;
			?>
			
		</div>
		
		<?php endwhile; ?>

	</div>
			
<?php include (TEMPLATEPATH . '/inc/footer.php' ); ?>