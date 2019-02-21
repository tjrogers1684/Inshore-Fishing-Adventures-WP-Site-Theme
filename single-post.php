<?php get_header(); ?>

<?php
	if ( is_active_sidebar( 'subnav_tabs' ) ) {
		echo '<div class="subnav-tabs">';
		dynamic_sidebar( 'subnav_tabs' );
		echo '</div>';
	}
?>

<?php if( isset($_GET['pid']) ){ $posttype = get_post( $_GET['pid'] )->post_type; } ?>

<div class="page-wrap <?php if( isset($posttype) ){ echo 'posttype-'.$posttype; } ?>">

	<div class="content-wrap">

		<div class="content-area">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="blog-article-section blog-article-content <?php if ( has_post_thumbnail() ) { echo 'has-blog-image'; } ?>">
						<?php the_content(); ?>
					</div>

					<?php if ( has_post_thumbnail() ) : ?>
						<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>

					    <div class="blog-article-section blog-article-image" style="background-image: url(<?php echo $featured_img_url; ?>)">
					    </div>
					<?php endif; ?>

				</div>

			<?php endwhile; else: ?>

				<p><?php _e( 'Sorry, no content found' ); ?></p>

			<?php endif; ?>

		</div>

		<div class="sidebar-area">
			<?php dynamic_sidebar( 'blog_sidebar' ); ?>
		</div>

		<br class="clearfloat" />

	</div>

</div>

<?php get_footer(); ?>