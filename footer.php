<?php wp_footer(); ?>

<p class="wave-overlay-footer"><img src="/wp-content/themes/inshorefishing/images/footer-wavy-swirl.png" alt=""></p>

<div class="footer-wrap-outer">	

	<div class="footer-wrap">

		<div class="footer-section footer-address-container">
			<p class="site-logo-footer"><a href="<?php echo bloginfo( 'url' ); ?>"><img src="/wp-content/themes/inshorefishing/images/logo-footer.png" alt=""></a></p>
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

			<p class="footer-review">
				<a href="https://www.yelp.com/"><img class="footer-review-site review-yelp" src="/wp-content/themes/inshorefishing/images/footer-logo-yelp.png" alt=""></a>
				<a href="https://www.google.com/"><img class="footer-review-site review-google" src="/wp-content/themes/inshorefishing/images/footer-logo-google.png" alt=""></a>
				<a href="https://www.tripadvisor.com/"><img class="footer-review-site review-trip-advisor" src="/wp-content/themes/inshorefishing/images/footer-logo-trip-advisor.png" alt=""></a>
			</p>
			<p class="footer-contact">Call 321-302-3474 <span>or <a href="/#" class="btn book">Book now</a></span></p>
		</div>

		<div class="footer-site-info">
			<p class="site-info">&copy; <?php echo date("Y"); ?> Captain Mark Wright | Web Design by <a href="http://www.thrivecreativelabs.com/">Thrive Creative Labs</a></p>
		</div>

	</div><!-- end of footerWrap -->

</div><!-- end of footerWrapOuter -->

</body>
</html>