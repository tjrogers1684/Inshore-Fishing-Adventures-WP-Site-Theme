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
?>

<body <?php body_class( $addl_body_classes ); ?>>

	<div class="mobile-nav">
		<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
	</div>

	<div class="social-contact-nav-wrap-outer">
		<div class="social-contact-nav-wrap">
			<p class="social-contact-contact">Call 321-302-3474 or <a href="/#" class="btn book">Book now</a></p>
			<p class="social-contact-social">
				<a href="http://www.facebook.com/" class="home-header-social-link social-facebook"><i class="fab fa-facebook-square"></i></a>
				<a href="http://www.twitter.com/" class="home-header-social-link social-twitter"><i class="fab fa-twitter-square"></i></a>
				<a href="http://www.instagram.com/" class="home-header-social-link social-instagram"><i class="fab fa-instagram"></i></a>
				<a href="http://www.linkedin.com/" class="home-header-social-link social-linkedin"><i class="fab fa-linkedin"></i></a>
			</p>
		</div><!-- END NAV WRAP -->
	</div><!-- END NAV WRAP OUTER -->

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

			<div class="feature-wrap">
				<div class="booking-callout">
					<h1>Ft. Pierce Fishing Guide <span>and Family-Friendly Fishing Charter Captain</span></h1>
					<a href="/booking" class="btn">Book now</a>
				</div>
			</div>

		</div><!-- END HEADER WRAP -->

		<p class="wave-overlay-header"><img src="/wp-content/themes/inshorefishing/images/header-wavy-swirl.png" alt=""></p>

	</div><!-- END HEADER WRAP OUTER -->

	<?php
	if ( function_exists('yoast_breadcrumb') && !wp_is_mobile() ) {
		yoast_breadcrumb( '<div class="breadcrumb-wrap"><p id="breadcrumbs" class="breadcrumb-wrap-inner">','</p></div>' );
	}
	?>
