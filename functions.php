<?php
/**
 *  Theme Functions
 * 
 *  @package Aquila
 */

// echo '<pre>';
// print_r(AQUILA_DIR_PATH);
// wp_die();

if ( ! defined( 'AQUILA_DIR_PATH' ) ) {
	define( 'AQUILA_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'AQUILA_DIR_URI' ) ) {
	define( 'AQUILA_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'AQUILA_BUILD_URI' ) ) {
	define( 'AQUILA_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
}

if ( ! defined( 'AQUILA_BUILD_PATH' ) ) {
	define( 'AQUILA_BUILD_PATH', untrailingslashit( get_template_directory() ) . '/assets/build' );
}

if ( ! defined( 'AQUILA_BUILD_JS_URI' ) ) {
	define( 'AQUILA_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/js' );
}

if ( ! defined( 'AQUILA_BUILD_JS_DIR_PATH' ) ) {
	define( 'AQUILA_BUILD_JS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/js' );
}

if ( ! defined( 'AQUILA_BUILD_IMG_URI' ) ) {
	define( 'AQUILA_BUILD_IMG_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/src/img' );
}

if ( ! defined( 'AQUILA_BUILD_CSS_URI' ) ) {
	define( 'AQUILA_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/css' );
}

if ( ! defined( 'AQUILA_BUILD_CSS_DIR_PATH' ) ) {
	define( 'AQUILA_BUILD_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/css' );
}

if ( ! defined( 'AQUILA_BUILD_LIB_URI' ) ) {
	define( 'AQUILA_BUILD_LIB_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/library' );
}

require_once AQUILA_DIR_PATH . '/inc/helpers/autoloader.php';
require_once AQUILA_DIR_PATH . '/inc/helpers/template-tags.php';

function aquila_get_theme_instance() {
	\AQUILA_THEME\Inc\AQUILA_THEME::get_instance();
}

aquila_get_theme_instance();



require_once AQUILA_DIR_PATH . '/inc/helpers/autoloader.php';

 function aquila_enqueue_scripts(){
   
   //Register Styles
    wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css' ), 'all' );
    wp_register_style('bootstrap-css', get_template_directory_uri(). '/assets/src/library/css/bootstrap.min.css', [], false, 'all' );

    //Register Scripts
    wp_register_script('main-js', get_template_directory_uri(). '/assets/main.js', [], filemtime(get_template_directory() . '/style.css' ), true );
    wp_register_style('bootstrap-js', get_template_directory_uri(). '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, 'all' );
    
    //Enqueue Styles
    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');
    //Enqueue Scripts
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');
 }
 
 add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');

 ?>