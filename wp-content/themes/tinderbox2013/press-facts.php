<?php
/**
 * Template Name: Press - Fast Facts
 */
?>

<?php include (TEMPLATEPATH . '/inc/header.php' ); ?>

	<div class="container">
			
		<?php include (TEMPLATEPATH . '/inc/press-sidebar.php' ); ?>
		
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		<div class="content">
	
			<div class="title-background"></div>

			<h1><?php the_title(); ?></h1>

			<?php if(get_field('large_intro') || get_field('small_intro')) { ?>
				<p class="large-intro"><?php the_field('large_intro'); ?></p>
				<p class="small-intro"><?php the_field('small_intro'); ?></p>
				<hr class="fade-hr">
			<?php } ?>				

			<?php the_content(); ?>
			
			<!--
		
			<hr class="fade-hr">
		
			<?php
			$rows = get_field('timeline_year');
			if($rows) {
				echo '<h2 class="section-title">Timeline of Growths &amp; Achievements</h2><div class="timeline clearfix">';
				foreach($rows as $row) {
					echo '<div class="year y' . $row['year_number'] . '">';
					echo '<h2>' . $row['year_number'] . '</h2>';
					echo $row['year_content'];
					echo '</div>';
				}
				echo '</div>';
			}
			?>
		
			-->

		</div>
					
		<?php endwhile; ?>
		
	</div>	
			
<?php include (TEMPLATEPATH . '/inc/footer.php' ); ?>