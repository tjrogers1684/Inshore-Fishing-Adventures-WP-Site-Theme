<?php wp_footer(); ?>

<div class="prefooter-booking-callout-wrap">
	<div class="prefooter-booking-callout">
		<div class="prefooter-booking-callout-section prefooter-booking-callout-image-container">
			<p class="prefooter-booking-callout-image-captain-mark">
				<img class="captain-mark" src="/wp-content/themes/inshorefishing/images/img-prefooter-booking-callout-mark.png" alt="">
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

<div class="testimonials-listing-hp-wrap">
	<div class="testimonials-listing-hp">
		<?php

			$hp_testimonials_args = [
				'post_type' => 'testimonials',
				'posts_per_page' => '1',
				'order' => 'DESC',
				'orderby' => 'date',
			];

			// The Query
			$hp_testimonials_query = new WP_Query( $hp_testimonials_args ); 

		?>

		<?php if ( $hp_testimonials_query->have_posts() ) : while ($hp_testimonials_query->have_posts() ) : $hp_testimonials_query->the_post(); ?>

			<?php
				$testimonial_author = $post->post_title;
				$post_meta = get_post_meta( $post->ID );
				//$job_type = $post_meta['position_type']['0'];

			?>

			<div class="testimonial-item">
				<img class="testimonial-item-quote quote-start" src="/wp-content/themes/inshorefishing/images/icn-quotes-start.png" alt="">

				<p class="tesitmonial-item-author"><?php echo $testimonial_author; ?></p>
				<div class="tesitmonial-item-quote-text">
					<?php the_content(); ?>
				</div>

				<img class="testimonial-item-quote quote-end" src="/wp-content/themes/inshorefishing/images/icn-quotes-end.png" alt="">

				<?php // echo '<pre>'.print_r( $post_meta, true ).'</pre>'; ?>

			</div>

			<p class="more-testimonials-link"><a href="</testimonials">Read More Testimonials »</a></p>

		<?php endwhile; else : ?>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>

	</div>
</div>

<!-- NEWS & SPECIES SECTION -->
<div class="blog-species-section-container-wrap">

	<div class="blog-species-section-container">

		<div class="blog-listing-hp-wrap">

				<div class="blog-listing-hp-heading-section">
					<h2>Fishing Reports & Blogs</h2>
					<p class="more-articles-link"><a href="</blog">Read More »</a></p>
				</div>

				<div class="blog-listing-hp">

				<?php

					$hp_blog_args = [
						'post_type' => 'post',
						'posts_per_page' => '2',
						'order' => 'DESC',
						'orderby' => 'date',
					];

					// The Query
					$hp_blog_query = new WP_Query( $hp_blog_args ); 

				?>

				<?php if ( $hp_blog_query->have_posts() ) : while ($hp_blog_query->have_posts() ) : $hp_blog_query->the_post(); ?>

					<?php
						$article_title = $post->post_title;
						$post_meta = get_post_meta( $post->ID );

						if ( has_term( 'fishing-report', 'category', $post->ID ) ) {
							$article_type = 'Fishing Report';
						} else {
							$article_type = 'Blog';
						}

					?>

					<div class="blog-listing-item" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
						<div class="blog-listing-item-content">
							<p class="blog-article-meta"><?php echo get_the_time( "F j, Y" ); ?> &bull; <?php echo $article_type; ?> </p>
							<p class="blog-item-title"><?php echo $article_title; ?></p>
						</div>
					</div>

				<?php endwhile; else : ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>

			</div>
		</div>

		<div class="species-listing-hp-wrap">
			<div class="species-listing-hp">
				<p><img src="/wp-content/themes/inshorefishing/images/ph-species.jpg" alt=""></p>
			</div>
		</div>

	</div>
</div>

<!-- CALL NOW SECTION -->
<div class="call-now-booking-callout">
	<p>Call 321-302-3474 <span>or <a class="btn btn-lg" href="/booking">Book now</a></span></p>
</div>

<!-- SPONSORS SECTION -->
<div class="sponsors-listing-hp-container">
	<h2>Our great <span>sponsors</span></h2>
	<div class="sponsors-listing-hp">
		<img src="/wp-content/themes/inshorefishing/images/ph-sponsors-logos.jpg" alt="">
	</div>
</div>

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