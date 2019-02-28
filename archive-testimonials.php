<?php get_header(); ?>

<div class="page-wrap">

	<div class="content-wrap">

		<div class="content-area <?php if ( is_active_sidebar( 'subnav_sidebar' ) ) { echo 'has-sidebar'; } ?>">

			<h1>What our Clients are Saying</h1>

			<div class="tesimonial-page-listing-container">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php
						$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');

						//echo $featured_img_url;
					?>

					<div class="tesimonial-page-listing-item">

						<?php if ( $featured_img_url ) { ?>

							<div class="tesimonial-page-listing-item-section testimonial-image" style="background-image: url(<?php echo $featured_img_url; ?>)"></div>

						<?php } ?>

						<div class="tesimonial-page-listing-item-section tesimonial-details">
							<div class="testimonial-quote"><?php the_content(); ?></div>
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