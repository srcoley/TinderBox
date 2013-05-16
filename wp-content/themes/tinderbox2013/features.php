<?php
/**
 * Template Name: Features
 */
?>
<?php include (TEMPLATEPATH . '/inc/header.php' ); ?>

	<div class="container">
			
		<?php include (TEMPLATEPATH . '/inc/sidebar.php' ); ?>
				
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<div class="content">
	
			<div class="title-background"></div>
		
			<h1><?php the_title(); ?></h1>

			<?php if (get_field('large_intro')) { ?>
				<p class="large-intro"><?php the_field('large_intro'); ?></p>
			<?php } ?>
			<?php if (get_field('small_intro')) { ?>
				<p class="small-intro"><?php the_field('small_intro'); ?></p>
			<?php } ?>
			<?php the_content(); ?>
			<hr class="fade-hr">
			
			<?php
			$rows = get_field('features');
			if($rows) {
				foreach($rows as $row) {
					echo '<div class="feature">';
					echo '<figure><img src="' . $row['feature_image'] . '" alt="' . $row['feature_name'] . '"/></figure>';
					echo '<h2>' . $row['feature_name'] . '</h2>';
					echo '<div class="feature-description">' . $row['feature_description'] . '</div>';
					echo '</div><hr class="fade-hr">';
				}
			}
			?>
			
		</div>

		<?php endwhile; ?>
		
	</div>
			
<?php include (TEMPLATEPATH . '/inc/footer.php' ); ?>