<?php

function dt_enqueue_styles() {

	wp_enqueue_style( 'divi-style', get_template_directory_uri() . '/style.css', );
	wp_enqueue_style('custom-style',get_stylesheet_directory_uri(). '/css/custom.css', array(), time());
}
add_action( 'wp_enqueue_scripts', 'dt_enqueue_styles' );
