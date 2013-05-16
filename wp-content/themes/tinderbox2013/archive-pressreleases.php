<?php include (TEMPLATEPATH . '/inc/header.php' ); ?>

	<div class="container">
			
		<?php include (TEMPLATEPATH . '/inc/press-sidebar.php' ); ?>
				
		<div class="content">
	
			<div class="title-background"></div>
		
			<h1>Press Releases</h1>
			
			<?php
			$args = array( 'post_type' => 'pressreleases', 'posts_per_page' => 10, 'nopaging' => 'false'  );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			    echo '<article><h2><a href="';
			    the_permalink();
			    echo '">';
				the_title();
				echo '</a></h2><p class="the-date">';
			    echo get_the_date();
			    echo '</p>';
				the_excerpt();
				echo '<p class="readmore">Continue reading <a href="'. get_permalink($post->ID) . '">'.get_the_title($post->ID).' &raquo;</a></p>';
				echo '</article><hr class="fade-hr">';
			endwhile;
			?>
			
		</div>
		
	</div>
			
<?php include (TEMPLATEPATH . '/inc/footer.php' ); ?>