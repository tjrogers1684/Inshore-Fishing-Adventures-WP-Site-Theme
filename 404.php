<?php get_header(); ?>

<?php
	if ( is_active_sidebar( 'subnav_tabs' ) ) {
		echo '<div class="subnav-tabs">';
		dynamic_sidebar( 'subnav_tabs' );
		echo '</div>';
	}
?>

<div class="page-wrap">

	<div class="content-wrap">

		<?php
			if ( is_active_sidebar( 'left_sidebar' ) ) {
				echo '<div class="sidebar-area">';
				dynamic_sidebar( 'left_sidebar' );
				echo '</div>';
			}
		?>

		<div class="content-area <?php if ( is_active_sidebar( 'subnav_sidebar' ) ) { echo 'has-sidebar'; } ?>">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<p>We're afraid the page you're looking for does not exist. We apologize for the inconvenience.</p>

			<?php endwhile; else: ?>

				<p><?php _e( 'Sorry, no content found' ); ?></p>

			<?php endif; ?>

		<br class="clearfloat" />

	</div>

</div>

<?php
if ( is_active_sidebar( 'content_bottom' ) ) {
	echo '<div class="content-bottom">';
	dynamic_sidebar( 'content_bottom' );
	echo '</div>';
}
?>

<?php get_footer(); ?>