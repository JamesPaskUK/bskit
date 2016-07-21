<?php

// Register Custom Navigation Walker (allows the menu to have sub-menu's)
require_once('wp_bootstrap_navwalker.php');


// Register core style sheets for Bootstrap and the main Wordpress style.css
function akabakeneko_theme_styles() {
	
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'bskit_stylelibrary', get_template_directory_uri() . '/css/style-library-1.css' );
	wp_enqueue_style( 'bskit_header', get_template_directory_uri() . '/css/header-2.css' );
	wp_enqueue_style( 'bskit_basic', get_template_directory_uri() . '/css/basic.css' );
	wp_enqueue_style( 'bskit_footer', get_template_directory_uri() . '/css/footer-1.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
	
}
add_action( 'wp_enqueue_scripts', 'akabakeneko_theme_styles' );


// Register javascripts for Bootstrap
function theme_js() {
	
	global $wp_scripts;
	
	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false );

	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'bootstrap_hover_dropdown', get_template_directory_uri() . '/js/bootstrap-hover-dropdown.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.custom.js', array('jquery'), '', true );
	wp_enqueue_script( 'headroom', get_template_directory_uri() . '/js/headroom.js', array('jquery'), '', true );	
	wp_enqueue_script( 'jquery_headroom', get_template_directory_uri() . '/js/jquery.headroom.js', array('jquery'), '', true );

}
add_action( 'wp_enqueue_scripts', 'theme_js' );


// Featured Images

/**
 * Allow support for featured images and set the default size
*/

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 360, 240, array( 'center', 'center')  ); // 360 pixels wide by 240 pixels tall, crop from the center


// Menus and Navigation

add_theme_support( 'menus' );

function register_theme_menus() {
	register_nav_menus(
		array(
			'header-menu'	=>	__( 'Header Menu' ),
			'shortcuts'		=>  __( 'Shortcuts Menu' ),
			'legals'		=>	__( 'Legals Menu' )
		)
	);
}
add_action( 'init', 'register_theme_menus' );

// Customizations

function wpt_register_theme_customizer( $wp_customize ) {

// Display a 'Background Settings' menu item on the WP Customizer screens in the admin area
$wp_customize->get_section('background_image')->title = __('Background Styles', 'bskit');  
$wp_customize->get_control('background_color')->section = 'background_image'; 


// Add theme support for Custom Backgrounds and set default colours/images
	$defaults = array(
	  'default-color' => '#efefef',
	  'default-image' => get_template_directory_uri() . '/images/background.png',  
	);
}

add_theme_support( 'custom-background', $defaults );


?>