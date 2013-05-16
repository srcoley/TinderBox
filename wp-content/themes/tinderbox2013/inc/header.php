<?php include (TEMPLATEPATH . '/inc/head.php' ); ?>
	
<header role="banner" class="clearfix">
	
	<div class="container">

		<div class="header-top">
		
			<?php if ( is_page_template('homepage.php') ) { ?>
			  	<h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php } else { ?>
			  	<h2 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>	
			<?php } ?>
		
			<?php get_search_form(); ?>
	
			<div class="menu-toggle">
				<span class="menu-icon">
					<?php include (TEMPLATEPATH . '/images/menu-icon.svg' ); ?>
				</span>
				<span class="x-icon">&times;</span>
			</div>
		
		</div>

		<nav id="headernav" role="navigation">
		    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
			<?php get_search_form(); ?>
		</nav>
		
	</div>
		
</header>

<div class="main clearfix" role="main">