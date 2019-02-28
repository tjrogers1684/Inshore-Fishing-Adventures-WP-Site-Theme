<?php wp_footer(); ?>

<!-- CALL NOW SECTION -->
<div class="call-now-booking-callout">
	<p>Call <?php echo get_theme_mod('fgc_guide_phone_number'); ?> <span>or <a class="btn btn-lg" href="/booking">Book now</a></span></p>
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
	<h2>Our great <span>sponsors</span></h2>
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
			<p class="site-logo-footer"><a href="<?php echo bloginfo( 'url' ); ?>"><img src="/wp-content/themes/inshorefishing/images/logo-footer.png" alt=""></a></p>
			<p class="footer-address"><?php echo get_theme_mod( 'fgc_guide_address_1' ); ?><br/><?php echo get_theme_mod( 'fgc_guide_city' ); ?>, <?php echo get_theme_mod( 'fgc_guide_state' ); ?> <?php echo get_theme_mod( 'fgc_guide_zip_code' ); ?></p>

			<?php include("includes/social-nav-footer.inc.php"); ?>
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
			<p class="footer-contact">Call <?php echo get_theme_mod('fgc_guide_phone_number'); ?> <span>or <a href="/#" class="btn book">Book now</a></span></p>
		</div>

		<div class="footer-site-info">
			<p class="site-info">&copy; <?php echo date("Y"); ?> Captain Mark Wright | Web Design by <a href="http://www.thrivecreativelabs.com/">Thrive Creative Labs</a></p>
		</div>

	</div><!-- end of footerWrap -->

</div><!-- end of footerWrapOuter -->

</body>
</html>