<?php get_header(); ?>

<?php if( isset($_GET['pid']) ){ $posttype = get_post( $_GET['pid'] )->post_type; } ?>

<div class="page-wrap <?php if( isset($posttype) ){ echo 'posttype-'.$posttype; } ?>">

	<div class="content-wrap">

		<div class="content-area <?php if ( is_active_sidebar( 'right_sidebar' ) ) { echo 'has-sidebar'; } ?>">

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

		<?php get_sidebar(); ?>

	</div>

	<br class="clearfloat" />

</div>

<?php get_footer(); ?>