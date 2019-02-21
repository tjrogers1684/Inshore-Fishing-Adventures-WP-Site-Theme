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

				<?php the_content(); ?>

			<?php endwhile; else: ?>

				<p><?php _e( 'Sorry, no content found' ); ?></p>

			<?php endif; ?>

			<br class="clearfloat" />

		</div>

		<br class="clearfloat" />

		<?php
			if ( is_active_sidebar( 'content_bottom' ) ) {
				echo '<div class="content-bottom">';
				dynamic_sidebar( 'content_bottom' );
				echo '</div>';
			}
		?>

	</div>

</div>

<?php get_footer(); ?>