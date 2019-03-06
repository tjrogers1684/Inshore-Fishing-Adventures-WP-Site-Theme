<?php get_header(); ?>

<div class="page-wrap">

	<!-- SINGLE RANDOM TESTIMONIAL -->
	<div class="testimonials-page-listing-single-container">
		<h1>What our Clients are Saying</h1>

		<div class="testimonials-listing random single">
			<?php

				$hp_testimonials_args = [
					'post_type' => 'testimonials',
					'posts_per_page' => '1',
					'orderby'   => 'rand',
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

				<p class="more-testimonials-link"><a href="#testimonialsgrid">Read More Testimonials</a></p>

			<?php endwhile; else : ?>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>

		</div>
	</div>

	<!-- REVIEW [OTHER PLATFORMS] CALLOUT -->
	<div class="review-platforms-conatiner">

		<h2>We'd love to here from you! <span> Review Inshore Fishing on these platforms</span></h2>

		<p class="review-platforms">
			<a href="https://www.yelp.com/biz/capt-mark-wright-titusville?osq=capt+mark+wright"><img class="footer-review-site review-yelp" src="/wp-content/themes/inshorefishing/images/footer-logo-yelp.png" alt=""></a>
			<a href="https://www.google.com/search?q=capt+mark+wright+google+reviews&oq=capt+mark+wright+google+reviews&aqs=chrome..69i57.4032j0j4&sourceid=chrome&ie=UTF-8#lrd=0x88e0aa3f39bb1755:0xcfbe9cf36314f9e6,1,,,"><img class="footer-review-site review-google" src="/wp-content/themes/inshorefishing/images/footer-logo-google.png" alt=""></a>
			<a href="https://www.tripadvisor.com/Attraction_Review-g60751-d8098820-Reviews-Florida_East_Coast_Fishing_Adventures-Titusville_Brevard_County_Florida.html"><img class="footer-review-site review-trip-advisor" src="/wp-content/themes/inshorefishing/images/footer-logo-trip-advisor.png" alt=""></a>
		</p>
		<p class="footer-contact">Call <?php echo get_theme_mod('fgc_guide_phone_number'); ?> <span>or <a href="/#" class="btn book">Book Now</a></span></p>
	</div>

	<div class="content-wrap">

		<div class="content-area">

			<!-- TESTIMONIALS GRID -->
			<a name="testimonialsgrid"></a>
			<div class="tesimonial-page-listing-container">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php
						$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'thumbnail');

						//echo $featured_img_url;
					?>

					<div class="tesimonial-page-listing-item">
						<div class="tesimonial-page-listing-item-section tesimonial-details">
							<div class="testimonial-quote"><?php the_content(); ?></div>
						</div>

						<div class="tesimonial-page-listing-item-section tesimonial-author-info">
							<?php if ( $featured_img_url ) { ?>
								<div class="tesimonial-page-listing-item-section testimonial-image" style="background-image: url(<?php echo $featured_img_url; ?>)">
								</div>
							<?php } ?>
							<p class="testimonial-author"><?php the_title(); ?></p>
						</div>
					</div>


				<?php endwhile; else: ?>

					<p><?php _e( 'Sorry, no content found' ); ?></p>

				<?php endif; ?>

				<br class="clearfloat" />

			</div>

		</div>

		<br class="clearfloat" />

		<?php get_sidebar(); ?>

	</div>

</div>

<?php get_footer(); ?>