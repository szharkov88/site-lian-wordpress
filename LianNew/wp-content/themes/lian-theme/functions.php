<?php

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' ); 
function theme_name_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap-grid.min.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
	wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css' );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );
function theme_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.js', array('jquery') , null, true );
	wp_enqueue_script( 'simslide', get_template_directory_uri() . '/js/simslide.js', array('jquery') , null, true );
	wp_enqueue_script( 'slidercarusel', get_template_directory_uri() . '/js/slidercarusel.js', array('jquery') , null, true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', array('jquery') , null, true ); 
	wp_enqueue_script( 'wow-set', get_template_directory_uri() . '/js/wow.settings.js', array('jquery') , null, true );
	wp_enqueue_script( 'menu', get_template_directory_uri() . '/js/menu.js', array('jquery'), null, true );
}

add_theme_support('custom-logo');
