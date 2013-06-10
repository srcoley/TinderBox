<?php
/**
 * Template Name: How It Works
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
						
			<?php 
			$rows = get_field('how_it_works_item');
			if($rows)
			{
				foreach($rows as $row)
				{
					echo '<a href="' . $row['how_it_works_cta_link'] . '" />';
					echo '<div class="for-bucket">';
					echo '<img src="' . $row['how_it_works_image'] . '"/>';
					echo '<h2>' . $row['how_it_works_heading'] . '</h2>';
					echo '<p>' . $row['how_it_works_text'] .'</p>';
					echo '<p class="bucket-cta">' . $row['how_it_works_cta_text'] . ' &raquo;</p>';
					echo '</div></a>';
				}
			}
			?>
			
			<?php if(get_field('include_cta')) :
				
				echo '<div class="page-bottom-cta clearfix">';
				if(get_field('cta_image')) {
					echo '<figure><img src="' . get_field('cta_image') . '" alt="" /></figure>';
				}
				echo '<p class="cta-lead-in">' . get_field('cta_lead_in') . '</p><a class="cta" href="' . get_field('cta_link') . '">' . get_field('cta_button_text') . '</a></div>';
				
			endif; ?>
			
			
		</div>

		<?php endwhile; ?>
		
	</div>
			
<?php include (TEMPLATEPATH . '/inc/footer.php' ); ?>