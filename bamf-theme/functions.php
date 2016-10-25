<?php 
/**
 * functions.php
 * 
 */



/**
 * theme setup
 *
 * declare theme supports
 * 
 */
if ( ! function_exists( 'tvs_theme_setup' ) ) :
	function tvs_theme_setup() {

		// add RSS feed support 
		add_theme_support( 'automatic-feed-links' );

		// Removed need for the title tag in theme template files.
		add_theme_support( 'title-tag' );

	}
endif;
add_action( 'after_setup_theme', 'tvs_theme_setup' );


/**
 * theme style and scripts
 *
 * add css and javascripts
 * 
 */
if ( ! function_exists( 'tvs_theme_scripts' ) ) :
	function tvs_theme_scripts() {
		
		wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/style.css' );

		wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.1', 'all' );

		wp_enqueue_style( 'main-style', 
			get_template_directory_uri() . '/css/main.css', 
			array( 'bootstrap-style' ), 
			'1.1', 
			'all' 
		);

		wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array( 'jQuery' ), '1.1', true );

		wp_enqueue_script( 'modernizr-script', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js', array(), '1.1', true );
	}
endif;
add_action( 'wp_enqueue_scripts', 'tvs_theme_scripts' );


/**
 * 
 */


// eod
 ?>