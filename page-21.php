<?php get_header(); ?>

<div class="page-wrap">

	<div class="content-wrap">

		<div class="content-area <?php if ( is_active_sidebar( 'subnav_sidebar' ) ) { echo 'has-sidebar'; } ?>">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<h1><?php the_title(); ?></h1>

				<?php the_content(); ?>

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

				<div class="sponsors-listing">

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

			<?php endwhile; else: ?>

				<p><?php _e( 'Sorry, no content found' ); ?></p>

			<?php endif; ?>

			<br class="clearfloat" />

		</div>

		<br class="clearfloat" />

		<?php get_sidebar(); ?>

	</div>

</div>

<?php get_footer(); ?>