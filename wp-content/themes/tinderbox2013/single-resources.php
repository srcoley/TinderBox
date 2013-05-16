<?php include (TEMPLATEPATH . '/inc/header.php' ); ?>

	<div class="container">
			
		<?php include (TEMPLATEPATH . '/inc/resources-sidebar.php' ); ?>
				
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		<div class="content">
	
			<div class="title-background"></div>
		
			<h2 class="page-title">
				<?php
				$term_list = wp_get_post_terms($post->ID, 'type', array("fields" => "names"));
				echo $term_list[0];
				?>
			</h2>

			<article>
			
				<h1 class="post-title"><?php the_title(); ?></h1>
	
				<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

				<?php the_content(); ?>

			</article>
									
			<?php if(get_field('include_cta')) {
				
				echo '<div class="page-bottom-cta clearfix"><figure><img src="' . get_field('cta_image') . '" alt="" /></figure><p class="cta-lead-in">' . get_field('cta_lead_in') . '</p><a class="cta" href="' . get_field('cta_link') . '">' . get_field('cta_button_text') . '</a></div>';
				
			} ?>
			
		</div>
		
		<?php endwhile; ?>

	</div>
			
<script charset="utf-8" type="text/javascript">var switchTo5x=true;</script><script charset="utf-8" type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script><script type="text/javascript">stLight.options({publisher:'wp.9401703c-c69f-48b5-bd49-f18e27a6e135'});var st_type='wordpress3.5.1';</script>
			
<?php include (TEMPLATEPATH . '/inc/footer.php' ); ?>