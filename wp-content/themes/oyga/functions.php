<?php 
function wpo_theme_styles() {

	wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'owl_css', get_template_directory_uri() . '/css/owl.css' );
	wp_enqueue_style( 'animate_css', get_template_directory_uri() . '/css/animate.css' );
	wp_enqueue_style( 'awesome_fonts', get_template_directory_uri() . '/fonts/font-awesome-4.1.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'elegantsicons_fonts', get_template_directory_uri() . '/fonts/eleganticons/et-icons.css' );
	wp_enqueue_style( 'googlefont_fonts', 'http://fonts.googleapis.com/css?family=Roboto:300,400,500,700');

	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/oyga.css' );

}
add_action( 'wp_enqueue_scripts', 'wpo_theme_styles' );

function wpo_theme_scripts() {

	wp_enqueue_script('owl_js', get_template_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script('wow_js', get_template_directory_uri() . '/js/wow.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script('typewriter_js', get_template_directory_uri() . '/js/typewriter.js', array( 'jquery' ), '', true );
	wp_enqueue_script('jquery_onepage_js', get_template_directory_uri() . '/js/jquery.onepagenav.js', array( 'jquery' ), '', true );
	wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', array( 'jquery', 'owl_js', 'bootstrap_js', 'wow_js', 'typewriter_js', 'jquery_onepage_js'), '', true );

}
add_action( 'wp_enqueue_scripts', 'wpo_theme_scripts' );