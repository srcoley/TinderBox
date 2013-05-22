<?php if ( 'page' != get_post_type() ) { ?>
	
	<div class="meta dropdown">
	
		<a class="share dropdown-toggle" data-toggle="dropdown">
			<?php include (TEMPLATEPATH . '/images/share.svg' ); ?>
			Share
		</a>
		<?php if ( 'post' == get_post_type() ) { ?>
			Posted by <span class="author"><?php the_author_posts_link(); ?></span> on 
		<?php } ?>
		<?php if ( 'events' == get_post_type() ) { ?>
			<?php echo $eventmonth . ' ' . $eventday; ?>
		<?php } elseif ( 'careers' == get_post_type() ) { ?>
			<span>Open Position</span>
		<?php } else { ?>
			<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php echo get_the_date(); ?></time>
		<?php } ?>
		<div class="sharebox-contain dropdown-menu">
			<div id="sharebox">
				<span class='st_twitter_buttons' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='twitter'></span><span class='st_linkedin_buttons' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='linkedin'></span><span class='st_facebook_buttons' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='facebook'></span><span class='st_stumbleupon_buttons' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='stumbleupon'></span><span class='st_plusone_buttons' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='plusone'></span>
			</div>
		</div>
		
	</div>
	
<?php } ?>