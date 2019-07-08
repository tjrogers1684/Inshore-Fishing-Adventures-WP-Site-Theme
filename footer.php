<!-- CALL NOW SECTION -->
<div class="call-now-booking-callout">
	<p>Call <?php echo get_theme_mod('fgc_guide_phone_number'); ?> <span>or <a class="btn btn-lg" href="/reservations">Book Now</a></span></p>
</div>

<?php


	$sponsors_args = [
		'post_type' => 'sponsor',
		'posts_per_page' => 3,
		'order' => 'DESC',
		'orderby' => 'title',
	];

	// The Query
	$sponsors_query = new WP_Query( $sponsors_args );
?>

<!-- SPONSORS SECTION -->
<div class="sponsors-listing-hp-container">
	<h2><span>Our Great</span> Sponsors</h2>
	<div class="sponsors-listing-hp">

		<?php if ( $sponsors_query->have_posts() ) : while ($sponsors_query->have_posts() ) : $sponsors_query->the_post(); ?>

			<?php
				$title  = get_the_title();

				$sponsor_meta = get_post_meta( $post->ID );
				$sponsor_website = $sponsor_meta['sponsor_website']['0'];
				$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');

				//echo 'Sponsor Website: '. $sponsor_website;
			?>

			<div class="sponsor-item">
				<p class="sponsor-item-logo"><a href="<?php echo $sponsor_website; ?>"><img class="sponsor-logo" src="<?php echo $featured_img_url; ?>" alt=""></a></p>
			</div>

		<?php endwhile; else : ?>
		<?php wp_reset_postdata() ?>
		<?php endif; ?>

	</div>
</div>

<p class="wave-overlay-footer"><img src="/wp-content/themes/inshorefishing/images/footer-wavy-swirl.png" alt=""></p>

<div class="footer-wrap-outer">

	<div class="footer-wrap">

		<div class="footer-section footer-address-container">
			<p class="site-logo-footer"><a href="<?php echo bloginfo( 'url' ); ?>"><img src="/wp-content/themes/inshorefishing/images/logo-header.png" alt=""></a></p>

			<?php include("includes/social-nav-footer.inc.php"); ?>
		</div>

		<div class="footer-section footer-nav">
			<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
		</div>

		<div class="footer-section footer-review-contact">

			<p class="footer-review">
				<a href="https://www.yelp.com/biz/capt-mark-wright-titusville?osq=capt+mark+wright"><img class="footer-review-site review-yelp" src="/wp-content/themes/inshorefishing/images/icon-yelp.svg" alt=""></a>
				<a href="https://www.google.com/search?q=capt+mark+wright+google+reviews&oq=capt+mark+wright+google+reviews&aqs=chrome..69i57.4032j0j4&sourceid=chrome&ie=UTF-8#lrd=0x88e0aa3f39bb1755:0xcfbe9cf36314f9e6,1,,,"><img class="footer-review-site review-google" src="/wp-content/themes/inshorefishing/images/icon-google-logo-black.svg" alt=""></a>
				<a href="https://www.tripadvisor.com/Attraction_Review-g60751-d8098820-Reviews-Florida_East_Coast_Fishing_Adventures-Titusville_Brevard_County_Florida.html"><img class="footer-review-site review-trip-advisor" src="/wp-content/themes/inshorefishing/images/tripadvisor-black.svg" alt=""></a>
			</p>
			<p class="footer-contact">Call <?php echo get_theme_mod('fgc_guide_phone_number'); ?> <span>or <a href="/reservations" class="btn book">Book Now</a></span></p>
		</div>

		<div class="footer-site-info">
			<p class="site-info">&copy;<?php echo date("Y"); ?> Captain Mark Wright | Website by <a href="http://www.thrivecreativelabs.com/">Thrive Creative Labs</a></p>
		</div>

	</div><!-- end of footerWrap -->

</div><!-- end of footerWrapOuter -->

<?php wp_footer(); ?>

</body>
</html>