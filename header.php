<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<?php
	$addl_body_classes = array();
	$addl_body_classes[] = 'section-'.explode('/', $_SERVER['REQUEST_URI'])[1];
	if( !empty(explode('/', $_SERVER['REQUEST_URI'])[2]) && !strstr(explode('/', $_SERVER['REQUEST_URI'])[2], '?') ){
		$addl_body_classes[] = 'section-'.explode('/', $_SERVER['REQUEST_URI'])[1].'-'.explode('/', $_SERVER['REQUEST_URI'])[2];
	}

	if ( !is_front_page() ) { 
		$addl_body_classes[] = 'not-front';
	}
?>

<body <?php body_class( $addl_body_classes ); ?>>

	<div class="mobile-nav">
		<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
	</div>

	<?php include("includes/social-nav.inc.php"); ?>

	<div class="header-wrap-outer">

		<div class="header-wrap">

			<div class="header-nav">
				<p class="site-logo"><a href="<?php echo bloginfo( 'url' ); ?>"><img src="/wp-content/themes/inshorefishing/images/logo-header.png" alt=""></a></p>

				<div class="top-nav">
					<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
				</div><!-- TOP NAV -->

				<p class="mobile-nav-icon"><a href="#"><i class="fas fa-bars"></i></a></p>
				<p class="mobile-nav-close"><a href="#"><i class="fas fa-times"></i></a></p>
			</div>

			<?php if ( is_singular( 'post' ) ) { ?>

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

		    	<div class="feature-wrap">
					<div class="article-node-meta-conatiner">
						<h1 class="page-title"><?php the_title(); ?></h1>
						<p class="blog-article-node-meta">Posted on <?php echo get_the_time( "F j, Y" ); ?> &bull; <?php echo $article_type; ?> </p>
					</div>
				</div>
	    	<?php } ?>

		</div><!-- END HEADER WRAP -->

		<p class="wave-overlay-header"><img src="/wp-content/themes/inshorefishing/images/header-wavy-swirl.png" alt=""></p>

	</div><!-- END HEADER WRAP OUTER -->

	<?php
	if ( function_exists('yoast_breadcrumb') && !wp_is_mobile() ) {
		yoast_breadcrumb( '<div class="breadcrumb-wrap"><p id="breadcrumbs" class="breadcrumb-wrap-inner">','</p></div>' );
	}
	?>
