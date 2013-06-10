<?php include (TEMPLATEPATH . '/inc/header.php' ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="hero">
	<div class="container">
		
		<p class="hero-intro"><?php the_field('hero_text_small'); ?><br/>
		<b><?php the_field('hero_text_large'); ?></b></p>
		<a href="<?php the_field('hero_cta_link'); ?>" class="cta" onClick="_gaq.push(['_trackEvent', 'CTA', 'Home', 'Get to Yes']);"><?php the_field('hero_cta_text'); ?></a>
		
	</div>		
</div>

<?php 
$rows = get_field('home_buckets');
if($rows)
{
	echo '<div class="container">';
	$bucketnumber = 0; 
	foreach($rows as $row)
	{
		$bucketnumber++;
		echo '<a href="' . $row['home_bucket_cta_link'] . '" ';
		echo 'onClick="_gaq.push([\'_trackEvent\', \'Home CTA\', \'For\', \'' . $row['home_bucket_for'] . '\']);" >';
		echo '<div class="for-bucket bucket' . $bucketnumber . '">';
		echo '<img src="' . $row['home_bucket_image'] . '"/>';
		echo '<h2>' . $row['home_bucket_for'] . '</h2>';
		echo '<p>' . $row['home_bucket_lead_in'] .'</p>';
		echo '<p class="bucket-cta">' . $row['home_bucket_cta_text'] . ' &raquo;</p>';
		echo '</div></a>';
	}
	echo '</div>';
}
?>

<div class="clearfix"></div>

<?php if(get_field('check_here_to_include_an_event_call_out')) {
	
	$post = get_field('featured_event');
	 
	        setup_postdata($post); 

				$eventmonth = get_field('event_date');
				$eventday = get_field('event_date');
				$eventmonth = substr($eventmonth, 0, 3);
				$eventday = substr($eventday, 4, 6);
				
				echo '<div class="container"><div class="upcoming-event clearfix"><p class="event-date"><span class="event-month">' . $eventmonth . '</span><span class="event-day">' . $eventday . '</span></p><p class="upcoming-event-tag">Upcoming Event</p><h2><a href="' . get_permalink() . '">' . get_the_title() . '</a></h2><div class="upcoming-event-description">' . get_the_excerpt() . '</div><a class="cta" href="' . get_permalink() . '">View Event</a></div></div>';

			wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
	
} ?>

<div class="home-resources">
	<div class="container">		
		<?php 
		$rows = get_field('home_resources');
		if($rows)
		{
			$resourcenumber = 0; 
			foreach($rows as $row)
			{
				$resourcenumber++;
				
				if ($row['home_resource_type'] == 'clientstories') {
					$homeresourcetype = 'Client Story';
				} else {
					$homeresourcetype = $row['home_resource_type'];
				}
				echo '<div class="home-resource home-resource-' . $resourcenumber . ' ' . $row['home_resource_type'] . '">';
				echo '<p class="home-resource-type">' . $homeresourcetype . '</p>';
				echo '<h3 class="home-resource-title">' . $row['home_resource_title'] . '</h3>';
				echo '<p class="home-resource-description">' . $row['home_resource_description'] . '<br><br>';
				echo '<a class="home-resource-link" href="' . $row['home_resource_link'] . '">Read More &raquo;</a></p>';
				echo '</div>';
			}
		}
		?>
		<a href="<?php the_field('home_manifesto_cta_link'); ?>">
			<div class="manifesto">
				<?php include (TEMPLATEPATH . '/images/tinderbox-flame.svg' ); ?>
				<h2><?php the_field('home_manifesto_title'); ?></h2>
				<p><?php the_field('home_manifesto_description'); ?><br/><br/>
				<span class="cta"><?php the_field('home_manifesto_cta_text'); ?> &raquo;</span></p>
			</div>
		</a>
	</div>
</div>		

<div class="home-clients">
	<div class="container">
	
		<?php 
		$rows = get_field('home_client_logos');
		if($rows)
		{
			echo '<h2>' . get_field('home_clients_headline') . '</h2>';
			echo '<ul class="home-client-logos">';
			$clientnumber = 0; 
			foreach($rows as $row)
			{
				$clientnumber++;
				echo '<li class="home-client-logo home-client-logo-' . $clientnumber . '"><div class="client-logo"><a href="' . $row['home_client_story_link'] . '">';
				echo '<img src="' . $row['home_client_logo'] . '" alt="Client Story" />';
				echo '</a></div></li>';
			}
			echo '</ul>';
		}
		?>

	</div>
</div>

<?php endwhile; ?>

<?php include (TEMPLATEPATH . '/inc/footer.php' ); ?>