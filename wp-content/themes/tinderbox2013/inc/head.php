<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

	<head>
	
		<meta charset="utf-8">
	
		<title><?php wp_title(''); ?></title>
				
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
				
		<script type="text/javascript" src="//use.typekit.net/gkw2pdd.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/font/ss-social.css" rel="stylesheet" />
		<!-- Uncomment to use Modernizr
		<script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
		-->
				
		<!--[if lt IE 9]>
			<script src="<?php bloginfo('template_directory'); ?>/js/vendor/html5shiv.js"></script>
    	<![endif]-->
    	
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">    	

		<!--[if lt IE 9]>
			<script src="<?php bloginfo('template_directory'); ?>/js/vendor/selectivizr-min.js"></script>
			<script src="<?php bloginfo('template_directory'); ?>/js/vendor/borderBoxModel-min.js" type="text/javascript"></script>
			<script src="<?php bloginfo('template_directory'); ?>/js/vendor/respond.min.js" type="text/javascript"></script>
    	<![endif]-->
			
		<?php wp_head(); ?>
		
	</head>

	<body <?php body_class(); ?>>