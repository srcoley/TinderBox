</div>

<footer role="contentinfo" class="clearfix">
	<div class="container">
		<nav id="footnav">
			<?php wp_nav_menu(array('theme_location' => 'footer')); ?>
			<ul class="search-signup">
				<li>Site Search
				<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<p><label for="s" class="assistive-text"><?php _e( 'Search', 'tinderbox' ); ?></label></p>
					<input type="text" class="field" name="s" id="s" placeholder="Search the site..." />
					<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'tinderbox' ); ?>" />
				</form>				
				<div class="clearfix"></div>
				<hr class="foot-hr">
				Newsletter Sign Up	
				<iframe src="http://go.gettinderbox.com/l/18292/2013-04-29/8dww7" width="100%" height="30" type="text/html" frameborder="0" allowTransparency="true" style="border: 0" scrolling="no"></iframe>
				<hr class="foot-hr">
				<p class="foot-social">
					<a href="https://twitter.com/GetTinderBox" target="_blank"><span class="ss-icon">&#xF611;</span></a>
					<a href="http://www.facebook.com/GetTinderBox" target="_blank"><span class="ss-icon">&#xF610;</span></a>
					<a href="https://plus.google.com/110025256256488674344/posts" target="_blank"><span class="ss-icon">&#xF613;</span></a>
					<a href="http://www.linkedin.com/company/964447" target="_blank"><span class="ss-icon">&#xF612;</span></a>
				</p>
			</ul>
		</nav>
		<div class="sub-footer">
		  	<h2 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>		
			<p class="copyright">&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.<br>
			5255 Winthrop Ave, Indianapolis IN 46220 &nbsp; | &nbsp; 317.550.0148<br>
			<a href="/privacy-policy/">Privacy</a> &nbsp; | &nbsp; <a href="/terms-conditions/">Terms &amp; Conditions</a></p>
		</div>
	</div>
</footer>
		
<!-- jQuery is called via the Wordpress-friendly way via functions.php -->

<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-dropdown.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/site.js"></script>

<?php wp_footer(); ?>		

</body>

</html>