<?php wp_footer(); ?>

<div class="footer-wrap-outer">

	<div class="footer-wrap">

		<div class="footer-section footer-address-container">
			<p class="foote-address">123 Here Street<br/>Anytown, FL 32780</p>

			<p class="footer-social">
				<a href="http://www.facebook.com/" class="home-header-social-link social-facebook"><i class="fab fa-facebook-square"></i></a>
				<a href="http://www.twitter.com/" class="home-header-social-link social-twitter"><i class="fab fa-twitter-square"></i></a>
				<a href="http://www.instagram.com/" class="home-header-social-link social-instagram"><i class="fab fa-instagram"></i></a>
				<a href="http://www.linkedin.com/" class="home-header-social-link social-linkedin"><i class="fab fa-linkedin"></i></a>
			</p>
		</div>

		<div class="footer-section footer-nav">
			<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
		</div>

		<div class="footer-section footer-review-contact">
			<p class="footer-review"></p>
			<p class="footer-contact">Call 321-302-3474 or <a href="/#" class="btn book">Book now</a></p>
		</div>

		<div class="footer-site-info">
			<p class="site-info">&copy; <?php echo date("Y"); ?> Captain Mark Wright | Web Design by <a href="http://www.thrivecreativelabs.com/">Thrive Creative Labs</a></p>
		</div>

	</div><!-- end of footerWrap -->

</div><!-- end of footerWrapOuter -->

</body>
</html>