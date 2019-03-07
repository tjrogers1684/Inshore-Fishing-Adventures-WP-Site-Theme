<?php get_header(); ?>

<div class="page-wrap">

	<div class="content-wrap">

		<div class="content-area <?php if ( is_active_sidebar( 'right_sidebar' ) ) { echo 'has-sidebar'; } ?>">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<h1><?php the_title(); ?></h1>

				<?php //the_content(); ?>

				<div class="rates-pricing-table">

					<div class="pricing-table-block inshore-three-hours">
						<p class="table-block-title">Inshore flats</p>
						<p class="table-block-time-icon"><img src="/wp-content/themes/inshorefishing/images/img-trip-3-hrs.svg" alt=""></p>
						<p class="table-block-price">$325 <span>usd</span></p>
						<p class="table-block-trip-time">3 hours</p>
						<p class="table-block-boat-type-icon"><img src="/wp-content/themes/inshorefishing/images/img-flats-boat.svg" alt=""></p>
						<p class="table-block-boat-type">Flats boat</p>
						<p class="table-block-passenger-count-icon"><img src="/wp-content/themes/inshorefishing/images/img-2-passengers.svg" alt=""></p>
						<p class="table-block-passenger-count"><span>up to</span> 2 anglers</p>

						<div class="table-block-fish-types-container">
							<p class="table-block-fish-types-title">Fish species</p>

							<ul class="table-block-fish-types">
								<li>Redfish</li>
								<li>Trout</li>
								<li>Black drum</li>
								<li>and more...</li>
							</ul>
						</div>
					</div>

					<div class="pricing-table-block inshore-four-hours">
						<p class="table-block-title">Inshore flats</p>
						<p class="table-block-time-icon"><img src="/wp-content/themes/inshorefishing/images/img-trip-4-hrs.svg" alt=""></p>
						<p class="table-block-price">$375 <span>usd</span></p>
						<p class="table-block-trip-time">4 hours</p>
						<p class="table-block-boat-type-icon"><img src="/wp-content/themes/inshorefishing/images/img-flats-boat.svg" alt=""></p>
						<p class="table-block-boat-type">Flats boat</p>
						<p class="table-block-passenger-count-icon"><img src="/wp-content/themes/inshorefishing/images/img-2-passengers.svg" alt=""></p>
						<p class="table-block-passenger-count"><span>up to</span> 2 anglers</p>

						<div class="table-block-fish-types-container">
							<p class="table-block-fish-types-title">Fish species</p>

							<ul class="table-block-fish-types">
								<li>Redfish</li>
								<li>Trout</li>
								<li>Black drum</li>
								<li>and more...</li>
							</ul>
						</div>
					</div>

					<div class="pricing-table-block inshore-five-hours">
						<p class="table-block-title">Inshore flats</p>
						<p class="table-block-time-icon"><img src="/wp-content/themes/inshorefishing/images/img-trip-5-hrs.svg" alt=""></p>
						<p class="table-block-price">$425 <span>usd</span></p>
						<p class="table-block-trip-time">5 hours</p>
						<p class="table-block-boat-type-icon"><img src="/wp-content/themes/inshorefishing/images/img-flats-boat.svg" alt=""></p>
						<p class="table-block-boat-type">Flats boat</p>
						<p class="table-block-passenger-count-icon"><img src="/wp-content/themes/inshorefishing/images/img-2-passengers.svg" alt=""></p>
						<p class="table-block-passenger-count"><span>up to</span> 2 anglers</p>

						<div class="table-block-fish-types-container">
							<p class="table-block-fish-types-title">Fish species</p>

							<ul class="table-block-fish-types">
								<li>Redfish</li>
								<li>Trout</li>
								<li>Black drum</li>
								<li>and more...</li>
							</ul>
						</div>
					</div>

					<div class="pricing-table-block inshore-six-hours">
						<p class="table-block-title">Inshore flats</p>
						<p class="table-block-time-icon"><img src="/wp-content/themes/inshorefishing/images/img-trip-6-hrs.svg" alt=""></p>
						<p class="table-block-price">$475 <span>usd</span></p>
						<p class="table-block-trip-time">6 hours</p>
						<p class="table-block-boat-type-icon"><img src="/wp-content/themes/inshorefishing/images/img-flats-boat.svg" alt=""></p>
						<p class="table-block-boat-type">Flats boat</p>
						<p class="table-block-passenger-count-icon"><img src="/wp-content/themes/inshorefishing/images/img-2-passengers.svg" alt=""></p>
						<p class="table-block-passenger-count"><span>up to</span> 2 anglers</p>

						<div class="table-block-fish-types-container">
							<p class="table-block-fish-types-title">Fish species</p>

							<ul class="table-block-fish-types">
								<li>Redfish</li>
								<li>Trout</li>
								<li>Black drum</li>
								<li>and more...</li>
							</ul>
						</div>
					</div>

					<div class="pricing-table-block inshore-three-hours">
						<p class="table-block-title">Inshore flats</p>
						<p class="table-block-time-icon"><img src="/wp-content/themes/inshorefishing/images/img-trip-3-hrs.svg" alt=""></p>
						<p class="table-block-price">$450 <span>usd</span></p>
						<p class="table-block-trip-time">3 hours</p>
						<p class="table-block-boat-type-icon"><img src="/wp-content/themes/inshorefishing/images/img-bay-boat.svg" alt=""></p>
						<p class="table-block-boat-type">Bay boat</p>
						<p class="table-block-passenger-count-icon"><img src="/wp-content/themes/inshorefishing/images/img-4-passengers.svg" alt=""></p>
						<p class="table-block-passenger-count"><span>up to</span> 4 anglers</p>

						<div class="table-block-fish-types-container">
							<p class="table-block-fish-types-title">Fish species</p>

							<ul class="table-block-fish-types">
								<li>Redfish</li>
								<li>Trout</li>
								<li>Black drum</li>
								<li>and more...</li>
							</ul>
						</div>
					</div>

					<div class="pricing-table-block inshore-four-hours">
						<p class="table-block-title">Inshore flats</p>
						<p class="table-block-time-icon"><img src="/wp-content/themes/inshorefishing/images/img-trip-4-hrs.svg" alt=""></p>
						<p class="table-block-price">$500 <span>usd</span></p>
						<p class="table-block-trip-time">4 hours</p>
						<p class="table-block-boat-type-icon"><img src="/wp-content/themes/inshorefishing/images/img-bay-boat.svg" alt=""></p>
						<p class="table-block-boat-type">Bay boat</p>
						<p class="table-block-passenger-count-icon"><img src="/wp-content/themes/inshorefishing/images/img-4-passengers.svg" alt=""></p>
						<p class="table-block-passenger-count"><span>up to</span> 4 anglers</p>

						<div class="table-block-fish-types-container">
							<p class="table-block-fish-types-title">Fish species</p>

							<ul class="table-block-fish-types">
								<li>Redfish</li>
								<li>Trout</li>
								<li>Black drum</li>
								<li>and more...</li>
							</ul>
						</div>
					</div>

					<div class="pricing-table-block inshore-five-hours">
						<p class="table-block-title">Inshore flats</p>
						<p class="table-block-time-icon"><img src="/wp-content/themes/inshorefishing/images/img-trip-5-hrs.svg" alt=""></p>
						<p class="table-block-price">$550 <span>usd</span></p>
						<p class="table-block-trip-time">5 hours</p>
						<p class="table-block-boat-type-icon"><img src="/wp-content/themes/inshorefishing/images/img-bay-boat.svg" alt=""></p>
						<p class="table-block-boat-type">Bay boat</p>
						<p class="table-block-passenger-count-icon"><img src="/wp-content/themes/inshorefishing/images/img-4-passengers.svg" alt=""></p>
						<p class="table-block-passenger-count"><span>up to</span> 4 anglers</p>

						<div class="table-block-fish-types-container">
							<p class="table-block-fish-types-title">Fish species</p>

							<ul class="table-block-fish-types">
								<li>Redfish</li>
								<li>Trout</li>
								<li>Black drum</li>
								<li>and more...</li>
							</ul>
						</div>
					</div>

					<div class="pricing-table-block inshore-six-hours">
						<p class="table-block-title">Inshore flats</p>
						<p class="table-block-time-icon"><img src="/wp-content/themes/inshorefishing/images/img-trip-6-hrs.svg" alt=""></p>
						<p class="table-block-price">$600 <span>usd</span></p>
						<p class="table-block-trip-time">6 hours</p>
						<p class="table-block-boat-type-icon"><img src="/wp-content/themes/inshorefishing/images/img-bay-boat.svg" alt=""></p>
						<p class="table-block-boat-type">Bay boat</p>
						<p class="table-block-passenger-count-icon"><img src="/wp-content/themes/inshorefishing/images/img-4-passengers.svg" alt=""></p>
						<p class="table-block-passenger-count"><span>up to</span> 4 anglers</p>

						<div class="table-block-fish-types-container">
							<p class="table-block-fish-types-title">Fish species</p>

							<ul class="table-block-fish-types">
								<li>Redfish</li>
								<li>Trout</li>
								<li>Black drum</li>
								<li>and more...</li>
							</ul>
						</div>
					</div>

					<div class="pricing-table-block nearshore-five-hours">
						<p class="table-block-title">Near shore</p>
						<p class="table-block-time-icon"><img src="/wp-content/themes/inshorefishing/images/img-trip-5-hrs.svg" alt=""></p>
						<p class="table-block-price">$550 <span>usd</span></p>
						<p class="table-block-trip-time">5 hours</p>
						<p class="table-block-boat-type-icon"><img src="/wp-content/themes/inshorefishing/images/img-bay-boat.svg" alt=""></p>
						<p class="table-block-boat-type">Bay boat</p>
						<p class="table-block-passenger-count-icon"><img src="/wp-content/themes/inshorefishing/images/img-3-passengers.svg" alt=""></p>
						<p class="table-block-passenger-count"><span>up to</span> 3 anglers <span class="fourth-angler">(4th angler + $75)</span></p>

						<div class="table-block-fish-types-container">
							<p class="table-block-fish-types-title">Fish species</p>

							<ul class="table-block-fish-types">
								<li>Redfish</li>
								<li>Trout</li>
								<li>Black drum</li>
								<li>and more...</li>
							</ul>
						</div>
					</div>

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