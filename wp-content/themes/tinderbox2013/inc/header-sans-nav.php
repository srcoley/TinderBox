<?php include (TEMPLATEPATH . '/inc/head.php' ); ?>
	
<header role="banner" class="clearfix">
	
	<div class="container">

		<div class="header-top">
		
			<?php if ( is_page_template('homepage.php') ) { ?>
			  	<h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php } else { ?>
			  	<h2 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>	
			<?php } ?>
			
		</div>
		
	</div>
		
</header>

<div class="main clearfix" role="main">