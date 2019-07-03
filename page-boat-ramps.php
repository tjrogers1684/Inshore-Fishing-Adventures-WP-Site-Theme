<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="page-wrap">

	<h1 class="page-title"><?php the_title(); ?></h1>

	<div class="content-wrap">

		<div class="content-area">

			<?php the_content(); ?>

			<div class="boat-ramp-listing">

				<?php

				$boat_ramp_args = [
					'post_type' => 'boat_ramp',
				];

				// The Query
				$boat_ramp_query = new WP_Query( $boat_ramp_args ); ?>

				<?php if ( $boat_ramp_query->have_posts() ) : while ($boat_ramp_query->have_posts() ) : $boat_ramp_query->the_post(); ?>

					<div class="boat-ramp-item">

						<?php
							$encoded_address = urlencode(get_field('boat_ramp_address_1').' '.get_field('boat_ramp_address_2').' '.get_field('boat_ramp_city').' '.get_field('boat_ramp_state').' '.get_field('boat_ramp_zip_code'));
						?>

						<a href="https://www.google.com/maps/search/<?php echo $encoded_address; ?>" target="_blank" class="boat-ramp-map-link">
							<img class="boat-ramp-map" src="https://maps.googleapis.com/maps/api/staticmap?center=<?php echo $encoded_address; ?>&zoom=11&scale=1&size=600x400&maptype=roadmap&key=AIzaSyDO41JDPZkwZCLbqi02ZhQhQGOtqaz3RYI&format=png&visual_refresh=true&markers=size:mid%7Ccolor:0xff9e14%7Clabel:%7C<?php echo $encoded_address; ?>" alt="Google Map of <?php echo $get_the_title; ?>">
						</a>

						<div class="boat-ramp-meta">

							<h2><?php the_title(); ?></h2>
							<p>
								<?php echo (get_field('boat_ramp_address_1')) ? get_field('boat_ramp_address_1').'<br>' : ''; ?>
								<?php echo (get_field('boat_ramp_address_2')) ? get_field('boat_ramp_address_2').'<br>' : ''; ?>
								<?php echo (get_field('boat_ramp_city')) ? get_field('boat_ramp_city').',' : ''; ?> <?php echo (get_field('boat_ramp_state')) ? get_field('boat_ramp_state') : ''; ?> <?php echo (get_field('boat_ramp_zip_code')) ? get_field('boat_ramp_zip_code') : ''; ?>
							</p>

						</div>

					</div>

					<?php wp_reset_postdata(); ?>

				<?php endwhile; endif; ?>

			</div>

		</div>

	</div>

</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>