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



/**
* Enqueue scripts and styles.
>>> REPLACE "theme" with namespace for this theme <<<
*/
function theme_styles_scripts() {

	// Theme stylesheet.
	wp_enqueue_style( 'theme-main', get_theme_file_uri( '/style.css' ) );
	wp_enqueue_style( 'theme-all', get_theme_file_uri( '/css/all.css' ) );

	if( is_front_page() ){
		wp_enqueue_style( 'theme-homepage', get_theme_file_uri( '/css/home.css' ) );
	}

	//wp_enqueue_script( 'theme-fontawesome', 'https://use.fontawesome.com/releases/v5.5.0/js/all.js' );
	//wp_enqueue_style( 'theme-animatecss', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css' );
	wp_enqueue_script( 'theme-global', get_theme_file_uri( '/js/theme.js' ), array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'theme_styles_scripts' );



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