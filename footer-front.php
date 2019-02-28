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
			<p>Call <?php echo get_theme_mod('fgc_guide_phone_number'); ?> <span>or <a class="btn btn-alt" href="/booking">Book now</a></span></p>
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
						<a href="<?php the_permalink(); ?>" class="blog-listing-item-link">&nbsp;</a>

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
			<?php

					$species_query_count = 4;

					$species_args = [
						'post_type' => 'species',
						'posts_per_page' => $species_query_count,
						'order' => 'DESC',
						'orderby' => 'date',
					];

					// The Query
					$species_query = new WP_Query( $species_args );
				?>

				<div class="species-listing-hp">

					<h2>Species you'll fish for...</h2>

					<div class="species-listing">

						<?php if ( $species_query->have_posts() ) : while ($species_query->have_posts() ) : $species_query->the_post(); ?>

							<?php
								$title  = get_the_title();
								$species_count = wp_count_posts( 'species' );
								$species_count = $species_count->publish;

								//echo 'Total Number of Species: ' . $species_count;

								$species_meta = get_post_meta( $post->ID );
								$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
							?>
								<div class="species-listing-item">
									<p class="species-item-image"><img class="species-image" src="<?php echo $featured_img_url; ?>" alt=""></p>
									<p class="species-item-name"><?php echo $title; ?></p>
								</div>

						<?php endwhile; else : ?>
						<?php wp_reset_postdata() ?>
						<?php endif; ?>

						<?php if ( $species_count > $species_query_count ) { ?>

						<?php $more_species = $species_count - $species_query_count; ?>

							<p class="species-more-link"><a href="/charters/" class="btn">...and <?php echo $more_species; ?> more »</a></p>

						<?php } else { ?>

							<p class="species-more-link"><a href="/charters/" class="btn">Learn more »</a></p>

						<?php } ?>

					</div>

				</div>
		</div>

	</div>
</div>

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