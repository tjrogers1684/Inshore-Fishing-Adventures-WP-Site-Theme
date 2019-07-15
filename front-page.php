<?php get_header( 'front' ); ?>

<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

	<div class="page-wrap">

		<div class="content-wrap">

			<div class="content-area">

				<div class="hp-about-section-container">
					<div class="hp-about-section about-content">

						<?php the_content(); ?>

						<p class="about-content-links">
							<a href="/about" class="btn">About Captain Mark</a>
							<a href="/gallery" class="btn">Gallery</a>
							<a href="/locations" class="btn">Locations</a>
						</p>
					</div>
					<div class="hp-about-section about-image-container"><img src="/wp-content/themes/inshorefishing/images/img-hp-about-captain-mark.jpg" alt=""></div>
				</div>

				<div class="hp-perks-section-container">
					<div class="hp-perk-item family-friendly">
						<p class="hp-perk-item-icon"><img src="/wp-content/themes/inshorefishing/images/icon-family-friendly.svg" alt=""></p>
						<p class="hp-perk-item-description">Family-friendly charters available for kids ages 8 and up and their parents.</p>
					</div>

					<div class="hp-perk-item fulltime-guide">
						<p class="hp-perk-item-icon"><img src="/wp-content/themes/inshorefishing/images/icon-fulltime-guide.svg" alt=""></p>
						<p class="hp-perk-item-description">Capt. Mark is a full-time Ft. Pierce fishing guide who provides enjoyable angling.</p>
					</div>

					<div class="hp-perk-item booking">
						<p class="hp-perk-item-icon"><img src="/wp-content/themes/inshorefishing/images/icon-booking.svg" alt=""></p>
						<p class="hp-perk-item-description">Convenient online booking available to reserve your spot or see availability.</p>
					</div>

					<div class="hp-perk-item boats">
						<p class="hp-perk-item-icon"><img src="/wp-content/themes/inshorefishing/images/icon-boats.svg" alt=""></p>
						<p class="hp-perk-item-description">Multi-boat trips are available, upon request, for larger group charters.</p>
					</div>

					<div class="hp-perk-item locations">
						<p class="hp-perk-item-icon"><img src="/wp-content/themes/inshorefishing/images/icon-locations.svg" alt=""></p>
						<p class="hp-perk-item-description">About 48 hours before your trip, Capt. Mark will contact you with details and launch location.</p>
					</div>

					<div class="hp-perk-item welcome">
						<p class="hp-perk-item-icon"><img src="/wp-content/themes/inshorefishing/images/icon-welcome.svg" alt=""></p>
						<p class="hp-perk-item-description">I bid you welcome; to my world and to my office! I’ve got the best office in the world…</p>
					</div>
				</div>

			</div><!-- END CONTENT AREA -->

			<br class="clearfloat" />

		</div>

	</div>

	<div class="prefooter-booking-callout-wrap">
		<div class="prefooter-booking-callout">
			<div class="prefooter-booking-callout-section prefooter-booking-callout-image-container">
				<img src="/wp-content/themes/inshorefishing/images/prefooter-callout-photo.jpg" alt="">
			</div>

			<div class="prefooter-booking-callout-section prefooter-booking-callout-content">
				<div class="prefooter-booking-callout-content-section prefooter-booking-callout-details">
					<p><strong>Rates starting as low as $325.</strong></p>
					<p>Multi-boat trips are available. Call Capt. Mark for details. Online booking is available for your convenience.</p>
				</div>

				<div class="prefooter-booking-callout-content-section prefooter-booking-callout-contact">
					<p class="prefooter-booking-callout-contact-phone">Call <strong><?php echo get_theme_mod('fgc_guide_phone_number'); ?></strong> <span>or <a class="btn btn-white" href="/booking">Book Now</a></span></p>
				</div>
			</div>
		</div>

	</div>

	<div class="testimonials-listing-hp-wrap">
		<div class="testimonials-listing-hp">
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

				<p class="more-testimonials-link"><a href="/testimonials">Read More Testimonials &raquo;</a></p>

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
						<p class="more-articles-link"><a href="/blog">Read More &raquo;</a></p>
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

								<p class="species-more-link"><a href="/charters/" class="btn">...and <?php echo $more_species; ?> more &raquo;</a></p>

							<?php } else { ?>

								<p class="species-more-link"><a href="/charters/" class="btn">Learn more &raquo;</a></p>

							<?php } ?>

						</div>

					</div>
			</div>

		</div>
	</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>