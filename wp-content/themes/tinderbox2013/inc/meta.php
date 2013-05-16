<div class="meta dropdown">

	<a class="share dropdown-toggle" data-toggle="dropdown">
		<?php include (TEMPLATEPATH . '/images/share.svg' ); ?>
		Share
	</a>
	<?php if ( 'pressreleases' != get_post_type() && 'resources' != get_post_type() && 'careers' != get_post_type() ) { ?>
		Posted by <span class="author"><?php the_author_posts_link(); ?></span> on 
	<?php } ?>
	<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php echo get_the_date(); ?></time>

	<div class="sharebox-contain dropdown-menu">
		<div id="sharebox">
			<span class='st_twitter_buttons' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='twitter'></span><span class='st_linkedin_buttons' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='linkedin'></span><span class='st_facebook_buttons' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='facebook'></span><span class='st_stumbleupon_buttons' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='stumbleupon'></span><span class='st_plusone_buttons' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='plusone'></span>
		</div>
	</div>
	
</div>