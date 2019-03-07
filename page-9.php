<?php
//  RATES PAGE
?>


<?php get_header(); ?>

<div class="page-wrap">

	<div class="content-wrap">

		<div class="content-area <?php if ( is_active_sidebar( 'right_sidebar' ) ) { echo 'has-sidebar'; } ?>">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<h1><?php the_title(); ?></h1>

				<?php the_content(); ?>

				<?php

					$rates_listing_args = [
						'post_type' => 'rate',
						'posts_per_page' => '100',
						'orderby' => 'publsh',
					];

					// The Query
					$rates_listing_query = new WP_Query( $rates_listing_args );

				?>

				<div class="rates-pricing-table">

					<?php if ( $rates_listing_query->have_posts() ) : while ($rates_listing_query->have_posts() ) : $rates_listing_query->the_post(); ?>

						<?php
							$post_meta = get_post_meta( $post->ID );
							$trip_length = $post_meta['trip_length']['0'];
							$trip_price = $post_meta['trip_price']['0'];
							$trip_passenger_limit = $post_meta['passenger_limit']['0'];
							$trip_type = get_field_object('trip_type');
							$trip_type_value = $trip_type['value'];
							$trip_type_label = $trip_type['choices'][$trip_type_value];
							$trip_boat_type = get_field_object('boat_type');
							$trip_boat_type_value = $trip_boat_type['value'];
							$trip_boat_type_label = $trip_boat_type['choices'][$trip_boat_type_value];
							//$trip_additional_passengers = $post_meta['additional_passengers']['0'];

							$trip_fish_species = get_field_object('fish_species');

							//echo 'Rates Meta <br/><pre>' . print_r( $trip_fish_species["value"], true ) . '</pre>';

						?>

						<div class="pricing-table-block inshore-three-hours">
							<p class="table-block-title"><?php echo $trip_type_label; ?></p>
							<p class="table-block-time-icon"><img src="/wp-content/themes/inshorefishing/images/img-trip-3-hrs.svg" alt=""></p>
							<p class="table-block-price">$<?php echo $trip_price; ?> <span>usd</span></p>
							<p class="table-block-trip-time"><?php echo $trip_length; ?> hours</p>

							<?php if ( $trip_boat_type_label == 'Flats Boat' ) { ?>

								<p class="table-block-boat-type-icon"><img src="/wp-content/themes/inshorefishing/images/img-flats-boat.svg" alt=""></p>

							<?php } else { ?>
								<p class="table-block-boat-type-icon"><img src="/wp-content/themes/inshorefishing/images/img-bay-boat.svg" alt=""></p>

							<?php } ?>

							<p class="table-block-boat-type"><?php echo $trip_boat_type_label; ?></p>

							<?php if ( $trip_passenger_limit == '2' ) { ?>

								<p class="table-block-passenger-count-icon"><img src="/wp-content/themes/inshorefishing/images/img-2-passengers.svg" alt=""></p>

							<?php } else if ( $trip_passenger_limit == '3' ) { ?>

								<p class="table-block-passenger-count-icon"><img src="/wp-content/themes/inshorefishing/images/img-3-passengers.svg" alt=""></p>

							<?php } else { ?>

								<p class="table-block-passenger-count-icon"><img src="/wp-content/themes/inshorefishing/images/img-4-passengers.svg" alt=""></p>

							<?php } ?>

							<p class="table-block-passenger-count"><span>up to</span> <?php echo $trip_passenger_limit; ?> anglers</p>

							<?php if( $trip_fish_species['value'] ): ?>

							    <div class="table-block-fish-types-container">
									<p class="table-block-fish-types-title">Fish species</p>

									<ul class="table-block-fish-types">
								        <?php foreach( $trip_fish_species['value'] as $fish ): ?>
								            <li><?php echo $fish->post_title; ?></li>
								        <?php endforeach; ?>
								    </ul>
								</div>

							<?php endif; ?>

						</div>

					<?php endwhile; else : ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>

				</div>

				<div class="policies">
					<h2>Payment, Cancellation, & Bad Weather Policy</h2>

					<p>
						$100* per boat/per day deposit required to confirm a reservation. If you do not wish to bring cash or a check with you on the day of your trip you can choose to pay in full now. Your payment will be refunded in full (minus processing fee paid at time of booking) for any cancellation made prior to 7 days of the scheduled charter. All other cancellations are subject to forfeiture of deposit. If you pay in full and fail to cancel prior to 7 days, payment will be refunded minus the deposit amount. Unreturned deposits may be applied to another charter within 90 days of original charter date. The Captain reserves the right to cancel any charter due to unsafe weather conditions or factors beyond his control. In this event the your entire payment will be refunded in full (minus processing fee paid at time of booking). By rendering your payment you are agreeing to these terms and accept these conditions.
					</p>

					<p>
						If your captain determines that weather or ocean conditions are unsafe for a near shore trip he may, at his discretion, change your trip to an inshore flats trip.
					</p>

					<p class="processing-fee"><small>*online processing fee applied to all reservations</small></p>

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