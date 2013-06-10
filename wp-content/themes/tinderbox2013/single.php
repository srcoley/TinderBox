<?php include (TEMPLATEPATH . '/inc/header.php' ); ?>

	<div class="container">
				
		<div class="content">
		
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			
				<div class="title-background"></div>

				<h2 class="page-title">The TinderBox Blog</h2>	
		
				<article>
					<h1 class="post-title"><?php the_title(); ?></h1>
					<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
					
					<div class="excerpt-contain">

						<?php					
						$cutoffdate = '2013-03-28';
						$postdate = the_date('Y-m-d','','',false);
						if ($postdate < $cutoffdate && has_post_thumbnail() ) {					
						?>
							<figure>
								<?php the_post_thumbnail('blog-thumb'); ?>
							</figure>
						<?php } ?>
						<?php the_content(); ?>
					</div>
				</article>
	
				<div id="comments"></div>
				
			<?php endwhile; ?>
			
		</div>

		<?php include (TEMPLATEPATH . '/inc/blog-sidebar.php' ); ?>

	</div>
			
<script charset="utf-8" type="text/javascript">var switchTo5x=true;</script><script charset="utf-8" type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script><script type="text/javascript">stLight.options({publisher:'wp.9401703c-c69f-48b5-bd49-f18e27a6e135'});var st_type='wordpress3.5.1';</script>			
			
<?php include (TEMPLATEPATH . '/inc/footer.php' ); ?>