<?php get_header(); ?>

<?php if( isset($_GET['pid']) ){ $posttype = get_post( $_GET['pid'] )->post_type; } ?>

<div class="page-wrap <?php if( isset($posttype) ){ echo 'posttype-'.$posttype; } ?>">

	<?php
		$categories = wp_get_object_terms( $post->ID, 'category' );
		$post_meta = get_post_meta( $post->ID );
		$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
		$article_snippet = wp_trim_words( get_the_content(), 15, '...' );

		if ( has_term( 'fishing-report', 'category', $post->ID ) ) {
			$article_type = '<i class="fas fa-file-invoice"></i> Fishing Report';
		} else {
			$article_type = '<i class="fas fa-newspaper"></i> Blog';
		}

	?>

	<h1 class="page-title"><?php the_title(); ?> <span class="blog-article-node-meta">Posted on <?php echo get_the_time( "F j, Y" ); ?> &bull; <?php echo $article_type; ?></span></h1>

	<div class="content-wrap">

		<div class="content-area <?php if ( is_active_sidebar( 'right_sidebar' ) ) { echo 'has-sidebar'; } ?>">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php if ( has_post_thumbnail() ) : ?>
				    <div class="blog-article-node-section blog-article-image">
				    	<?php the_post_thumbnail( 'medium' ); ?>
				    </div>
				<?php endif; ?>

				<div class="blog-article-node-section blog-article-content <?php if ( has_post_thumbnail() ) { echo 'has-blog-image'; } ?>">
						<?php the_content(); ?>

						<div class="blog-article-node-social-share">
							<?php

								$post_meta = get_post_meta( $post->ID );
								$site_url = get_site_url();
								$article_url = get_permalink();
								$article_title = $post->post_title;
								//echo $siteurl;
								//echo '<p></p>';
								//echo $articleurl;
								//echo '<p></p>';

							?>

							<div class="social-share-content">
								<a class="social-share share-facebook" href="http://www.facebook.com/sharer.php?u=<?php echo $article_url; ?>"><i class="fab fa-facebook-square"></i><span>Share on Facebook</span></a>
								<a class="social-share share-twitter" href="http://twitter.com/intent/tweet?text=<?php echo $article_title . ' ' . $article_url; ?>"><i class="fab fa-twitter-square"></i><span>Tweet This Article</span></a>
							</div>
						</div>
				</div>

		</div>

			<?php endwhile; else: ?>

				<p><?php _e( 'Sorry, no content found' ); ?></p>

			<?php endif; ?>

		<?php get_sidebar(); ?>

	</div>

	<br class="clearfloat" />

</div>

<?php get_footer(); ?>