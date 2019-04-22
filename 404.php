<?php get_header(); ?>

<div class="page-wrap">

	<h1 class="page-title">Lost at Sea??</h1>

	<div class="content-wrap">

		<div class="content-area <?php if ( is_active_sidebar( 'right_sidebar' ) ) { echo 'has-sidebar'; } ?>">
			<p>Sorry page you're looking for does not exist. We apologize for the inconvenience. Feel free to check out the rates of our trips, contact us, or book a trip.</p>

			<div class="pagenotfound-ctas">
				<p class="pagenotfound-link-container">
					<a class="btn btn-large btn-alt btn-full-width booking" href="/rates/reservations/"><img src="/wp-content/themes/inshorefishing/images/icn-appointment.svg"><span>Book Now</span></a> 
					<a class="btn btn-large btn-alt btn-full-width fishing-reports" href="/blog/category/fishing-report"><img src="/wp-content/themes/inshorefishing/images/icn-newspaper.svg"><span>Fishing reports</span></a>
				</p>

				<p class="pagenotfound-link-container">
					<a class="btn btn-large btn-alt btn-full-width testimonials" href="/testimonials/"><img src="/wp-content/themes/inshorefishing/images/icn-testimonial.svg"><span>Testimonials</span></a>
					<a class="btn btn-large btn-alt btn-full-width inshore" href="/charters/inshore-flats/"><img src="/wp-content/themes/inshorefishing/images/img-flats-boat-white.svg"><span>Inshore Fishing Trips</span></a>
				</p>

				<p class="pagenotfound-link-container">
					<a class="btn btn-large btn-alt btn-full-width inlet" href="/charters/intracoastal-inlet-trips/"><img src="/wp-content/themes/inshorefishing/images/img-bay-boat-white.svg"><span>Inlet Fishing Trips</span></a>
					<a class="btn btn-large btn-alt btn-full-width family" href="/charters/family-friendly/"><img src="/wp-content/themes/inshorefishing/images/icon-family.svg"><span>Family-Freindly Trips</span></a>
				</p>
			</div>

		</div>

		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>