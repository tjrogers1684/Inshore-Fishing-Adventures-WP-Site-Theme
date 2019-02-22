<?php wp_footer(); ?>

<div class="prefooter-booking-callout-wrap">
	<div class="prefooter-booking-callout">
		<div class="prefooter-booking-callout-section prefooter-booking-callout-image-container">
			<p class="prefooter-booking-callout-image-captain-mark">
				<img class="captain-mark" src="/wp-content/themes/inshorefishing/images/img-prefooter-booking-callout-mark.png" alt="">
			</p>

			<p class="prefooter-booking-callout-image-background">
				<img class="background" src="/wp-content/themes/inshorefishing/images/img-prefooter-booking-callout-mark-bkd.jpg" alt="">
			</p>
		</div>

		<div class="prefooter-booking-callout-section prefooter-booking-callout-details">
			<p>Rates starting as low as $325.</p>
			<p>Multi-boat trips are available. Call Capt. Mark for details. Online booking is available for your convenience.</p>
		</div>

		<div class="prefooter-booking-callout-section prefooter-booking-callout-contact">
			<p>Call 321-302-3474 <span>or <a class="btn btn-alt" href="/booking">Book now</a></span></p>
		</div>
	</div>

</div>







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