<?php
/**
 * Template Name: Press - Awards
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
			
			<?php
			$rows = get_field('awards');
			if($rows) {
				foreach($rows as $row) {
					echo '<div class="award">';
					echo '<figure class="awardimg"><img src="' . $row['award_image'] . '" alt="' . $row['award_name'] . '"/></figure>';
					echo '<h2>' . $row['award_name'] . '</h2>';
					echo '<p>' . $row['award_summary'] . '</p>';
					echo '</div><hr class="fade-hr">';
				}
			}
			?>


		</div>
					
		<?php endwhile; ?>
		
	</div>	
			
<?php include (TEMPLATEPATH . '/inc/footer.php' ); ?>