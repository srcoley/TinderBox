<?php include (TEMPLATEPATH . '/inc/header.php' ); ?>

	<div class="container">
			
		<?php include (TEMPLATEPATH . '/inc/press-sidebar.php' ); ?>
		
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		<div class="content">
	
			<div class="title-background"></div>
		
			<h2 class="page-title">Press Releases</h2>
			
			<article>
	
				<h1 class="post-title"><?php the_title(); ?></h1>
				
				<p class="topics"><?php the_terms( $post->ID, 'press_topics', 'Topics: ', ' <span style="color:#000">/</span> ', '' ); ?></p>
				
				<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
				
				<?php the_content(); ?>
					
				<?php
				$rows = get_field('about_company');
				if($rows) {
					echo '<hr class="fade-hr">';
					foreach($rows as $row) {
						echo '<h2>' . $row['about_company_name'] . '</h2>' . $row['about_company_description'];
					}
				}
				
				$rows = get_field('media_contacts');
				if($rows) {
					echo '<hr class="fade-hr"><h2>Media Contacts</h2>';
					foreach($rows as $row) {
						echo '<p class="media-contact">';
						if($row['media_contact_name']) { echo $row['media_contact_name'] . '<br>'; }
						if($row['media_contact_organization']) { echo $row['media_contact_organization'] . '<br>'; }
						if($row['media_contact_email']) { echo '<a href="' . $row['media_contact_email'] . '">' . $row['media_contact_email'] . '</a><br>'; }
						if($row['media_contact_phone_number']) { echo $row['media_contact_phone_number']; }
						echo '</p>';
					}
					echo '<div class="clearfix"></div>';
				}
				?>
				
			</article>

		</div>
			
		<?php endwhile; ?>
		
	</div>

<script charset="utf-8" type="text/javascript">var switchTo5x=true;</script><script charset="utf-8" type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script><script type="text/javascript">stLight.options({publisher:'wp.9401703c-c69f-48b5-bd49-f18e27a6e135'});var st_type='wordpress3.5.1';</script>			
			
<?php include (TEMPLATEPATH . '/inc/footer.php' ); ?>