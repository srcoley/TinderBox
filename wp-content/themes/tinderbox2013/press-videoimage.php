<?php
/**
 * Template Name: Press - Video/Image Library
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
			$rows = get_field('logos');
			if($rows) {
				echo '<h2>Logos</h2><div class="logos-contain">';
				foreach($rows as $row) {
					echo '<div class="logo-thumb vid-img"><figure><img src="' . $row['logo_thumbnail'] . '" alt="Logo Thumbnail" /></figure><p><a href="' . $row['logo_eps'] . '">EPS</a> &nbsp;|&nbsp; <a href="' . $row['logo_jpg'] . '">JPG</a> &nbsp;|&nbsp; <a href="' . $row['logo_png'] . '">PNG</a></p></div>';
				}
				echo '</div><p class="expand">View All Logos &raquo;</p><p class="collapse">View Less Logos</p>';
			}
			
			echo '<div class="clearfix"></div>';
		
			$rows = get_field('images');
			if($rows) {
				echo '<h2>Images</h2><div class="images-contain">';
				foreach($rows as $row) {
				
					$attachment_id = $row['images_image'];
					$size = "library-thumb";
					$image = wp_get_attachment_image_src( $attachment_id, $size );
					$medsize = "medium";
					$medimage = wp_get_attachment_image_src( $attachment_id, $medsize );
					$fullsize = "full";
					$fullimage = wp_get_attachment_image_src( $attachment_id, $fullsize );
		 
						echo '<div class="image vid-img"><figure><img src="' . $image[0] . '" alt="Image Thumbnail" /></figure><p><a href="' . $fullimage[0] . '">High-Res</a> &nbsp;|&nbsp; <a href="' . $medimage[0] . '">Low-Res</a></p><p>' . $row['image_caption'] . '</p></div>';
				}
				echo '</div><p class="expand">View All Images &raquo;</p><p class="collapse">View Less Images</p>';
			}
			
			echo '<div class="clearfix"></div>';
		
			$rows = get_field('videos');
			if($rows) {
				echo '<h2>Videos</h2><div class="videos-contain">';
				foreach($rows as $row) {
		
					$attachment_id = $row['video_thumbnail'];
					$size = "library-thumb";
					$image = wp_get_attachment_image_src( $attachment_id, $size );
		 		
					echo '<div class="videos vid-img"><a target="_blank" href="' . $row['link_to_video'] . '"><figure><img src="' . $image[0] . '" alt="Video Thumbnail" /></figure></a><p>' . $row['video_caption'] . '</p><p><b>Embed Code:</b></p><p class="embed" contenteditable>' . $row['video_embed_code'] . '</p></div>';
				}
				echo '</div><p class="expand">View All Videos &raquo;</p><p class="collapse">View Less Videos</p>';
			}
			?>

		</div>
					
		<?php endwhile; ?>
		
	</div>	
			
<?php include (TEMPLATEPATH . '/inc/footer.php' ); ?>