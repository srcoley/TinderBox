<?php include (TEMPLATEPATH . '/inc/header.php' ); ?>

	<div class="container">
				
		<div class="content">
		
			<?php if ( have_posts() ): ?>
			
				<div class="title-background"></div>

				<h1>Search Results for &ldquo;<?php echo get_search_query(); ?>&rdquo;</h1>	

				<?php while ( have_posts() ) : the_post(); ?>
		
					<article>
						<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
						
						<div class="excerpt-contain">
							<a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark">
								<?php if ( has_post_thumbnail() ) { ?>
									<figure>
										<?php the_post_thumbnail('blog-thumb'); ?>
									</figure>
								<?php } ?>
							</a>													
							<?php the_excerpt(); ?>
							<?php echo '<p class="readmore">Continue reading <a href="'. get_permalink($post->ID) . '">'.get_the_title($post->ID).' &raquo;</a></p>'; ?>
						</div>
					</article>
		
				<?php endwhile; ?>
			
				<?php include (TEMPLATEPATH . '/inc/pager.php' ); ?>
			
			<?php else: ?>
		
				<h1>No Results for '<?php echo get_search_query(); ?>'</h1>	
		
			<?php endif; ?>
			
		</div>

		<?php include (TEMPLATEPATH . '/inc/blog-sidebar.php' ); ?>

	</div>
			
<script charset="utf-8" type="text/javascript">var switchTo5x=true;</script><script charset="utf-8" type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script><script type="text/javascript">stLight.options({publisher:'wp.9401703c-c69f-48b5-bd49-f18e27a6e135'});var st_type='wordpress3.5.1';</script>			
			
<?php include (TEMPLATEPATH . '/inc/footer.php' ); ?>