<?php
/**
 * Template Name: Client Stories
 */
?>
<?php include (TEMPLATEPATH . '/inc/header.php' ); ?>

	<div class="container">
			
		<?php include (TEMPLATEPATH . '/inc/resources-sidebar.php' ); ?>
		
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		<div class="content">

			<article>

				<div class="title-background"></div>
			
				<h1><?php the_title(); ?></h1>
				
				<p class="large-intro"><?php the_field('large_intro'); ?></p>
			
				<p class="small-intro"><?php the_field('small_intro'); ?></p>

				<div class="client-blocks">
	
					<?php
					$args = array( 'post_type' => 'clientstories', 'posts_per_page' => 15 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					    echo '<a class="client-block" href="';
					    the_permalink();
					    echo '"><div class="client-thumb"><figure>';
						if ( has_post_thumbnail() ) { the_post_thumbnail('client-thumb'); }
						echo '</figure></div><h2 class="organization-type">';
						the_field('organization_type');
					    echo '</h2></a>';
					endwhile;
					?>		

				</div>

			</article>
			
		</div>
		
		<?php endwhile; ?>

	</div>
			
<?php include (TEMPLATEPATH . '/inc/footer.php' ); ?>