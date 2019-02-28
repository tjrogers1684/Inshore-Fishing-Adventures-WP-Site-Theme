<?php
/**
* Add theme supports
*/
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
add_theme_support( 'title-tag' );
add_post_type_support( 'page', 'excerpt' );

// add additional excerpt support by post type
// add_post_type_support( 'post_type' , 'excerpt' );

/**
Add theme support for WooCommerce (optional)
*/
// add_action( 'after_setup_theme', 'woocommerce_support' );
// function woocommerce_support() {
//     add_theme_support( 'woocommerce' );
// }


function register_theme_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' ),
		)
	);
}
add_action( 'init', 'register_theme_menus' );



/**
* Enqueue scripts and styles.
>>> REPLACE "theme" with namespace for this theme <<<
*/
function ifa_styles_scripts() {

	// Theme stylesheet.
	wp_enqueue_style( 'ifa-main', get_theme_file_uri( '/style.css' ) );
	wp_enqueue_style( 'ifa-all', get_theme_file_uri( '/css/all.css' ) );
	wp_enqueue_style( 'inwood-googlefonts', 'https://fonts.googleapis.com/css?family=Roboto:300,400,400i,700' );
	wp_enqueue_style( 'ifa-fontawesome', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css' );

	if( is_front_page() ){
		wp_enqueue_style( 'ifa-homepage', get_theme_file_uri( '/css/home.css' ) );
	}

	//wp_enqueue_script( 'ifa-fontawesome', 'https://use.fontawesome.com/releases/v5.5.0/js/all.js' );
	wp_enqueue_style( 'ifa-animatecss', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css' );
	wp_enqueue_script( 'ifa-global', get_theme_file_uri( '/js/inshorefishing.js' ), array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'ifa_styles_scripts' );



/**
* Register our sidebars and widgetized areas.
*/
function create_widget($name, $id, $description) {

    register_sidebar(array(
        'name' => __( $name ),
        'id' => $id,
        'description' => __( $description ),
        'before_widget' => '<div id="'.$id.'" class="widget %1$s %2$s">',
		'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));

}
// Create the actual widgets (ID is a unique string)
create_widget("Name", "id", "Description");



function my_cptui_change_posts_per_page( $query ) {
    if ( is_admin() || ! $query->is_main_query() ) {
       return;
    }

    if ( is_post_type_archive( 'testimonials' ) ) {
       $query->set( 'posts_per_page', 120 );
       $query->set( 'orderby', 'rand' );
    }
}
add_filter( 'pre_get_posts', 'my_cptui_change_posts_per_page' );

