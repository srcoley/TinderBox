<?php
/**
 * Template Name: Press - Leadership
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
			$rows = get_field('leader');
			if($rows) {
				foreach($rows as $row) {
					echo '<div class="leader">';
					echo '<div class="leader-avatar" style="background: url(' . $row['leader_image'] . '); background-size:cover"></div>';
					echo '<h2>' . $row['leader_name'] . '</h2>';
					echo '<h3>' . $row['leader_title'] . '</h3>';
					echo '<p class="social"><a class="ss-icon ss-social-circle" href="' . $row['leader_email'] . '">&#x2709;</a>';
					echo '<a class="ss-icon ss-social-circle" href="' . $row['leader_linkedin'] . '">&#xF612;</a>';
					echo '<a class="ss-icon ss-social-circle" href="' . $row['leader_twitter'] . '">&#xF611;</a></p>';
					echo '<p class="bio">' . $row['leader_bio'] . '</p>';
					echo '</div>';
				}
			}
			?>

		</div>
					
		<?php endwhile; ?>
		
	</div>	
			
<?php include (TEMPLATEPATH . '/inc/footer.php' ); ?>