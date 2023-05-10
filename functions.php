<?php
/**
 * laza functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Laza
 */

 define('THEME_DIR', get_template_directory_uri());

 require_once( __DIR__ . '/core/core.php');
 
// SVG support
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function my_scripts_method(){
    /*style */
    
    wp_enqueue_style( 'slick_style', get_stylesheet_directory_uri().'/src/slick/slick.css');
    wp_enqueue_style( 'slick_min_style', get_stylesheet_directory_uri().'/src/slick/slick-theme.css');
    wp_enqueue_style( 'main_style', get_stylesheet_directory_uri().'/build/style.css');

    /* js */
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_stylesheet_directory_uri().'/src/js/jquery-3.6.0.min.js', array(), NULL, false);
    wp_enqueue_script( 'jquery' );

    
    wp_localize_script( 'main-js', 'ajax',
		array(
			'url' => admin_url('admin-ajax.php')
		)
	);
    wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri().'/src/slick/slick.js', array('jquery'), false, false);
    wp_enqueue_script( 'slick-min-js', get_stylesheet_directory_uri().'/src/slick/slick.min.js', array('jquery'), false, false);

    wp_enqueue_script( 'main-js', get_stylesheet_directory_uri().'/src/js/main.js', array('jquery'), false, false);
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

function add_support(){
    add_theme_support( 'menus');
}
add_action( 'after_setup_theme', 'add_support' );

//show_admin_bar(false);