<?php get_header(); ?>

<div class="page-wrap">

	<div class="content-wrap">

		<div class="content-area blog-listing has-sidebar">

			<h1>Inshore Fishing Adventures Blog</h1>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php
					$categories = wp_get_object_terms( $post->ID, 'category' );
					$post_meta = get_post_meta( $post->ID );
					$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');

					if ( has_term( 'fishing-report', 'category', $post->ID ) ) {
						$article_type = '<i class="fas fa-file-invoice"></i> Fishing Report';
					} else {
						$article_type = '<i class="fas fa-newspaper"></i> Blog';
					}

					//echo 'ARTICLE META<br/><pre>'.print_r( $categories, true ).'</pre>';
				?>

				<div class="blog-item">

					<?php if ( has_post_thumbnail() ) : ?>
					    <div class="blog-item-section blog-item-image">
						    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="blog-item-teaser-image" style="background-image: url(<?php echo $featured_img_url; ?>)">
						    </a>
					    </div>
					<?php endif; ?>

					<div class="blog-item-section blog-item-content <?php if ( has_post_thumbnail() ) { echo 'has-blog-image'; } ?>">
						<h2><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p class="blog-article-meta"><?php echo get_the_time( "F j, Y" ); ?> &bull; <?php echo $article_type; ?> </p>

						<?php the_excerpt(); ?>

						<p><a class="btn btn-small" href="<?php echo get_the_permalink(); ?>">Read Article <i class="fas fa-angle-double-right"></i></a></p>
					</div>

				</div>

			<?php endwhile;

			the_posts_pagination( array(
				'mid_size' => 2,
				'prev_text' => '<i class="fa fa-angle-left"></i> ' . __( 'Previous page', 'hillderm' ),
				'next_text' => __( 'Next page', 'hillderm' ) . ' <i class="fa fa-angle-right"></i>',
			) );

			else: ?>

				<p><?php _e( 'Sorry, no content found' ); ?></p>

			<?php endif; ?>

		</div>

		<?php get_sidebar(); ?>

		<br class="clearfloat" />

	</div>

</div>

<?php get_footer(); ?>