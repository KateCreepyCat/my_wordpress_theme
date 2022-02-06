<?php
add_action( 'wp_enqueue_scripts', 'bootstrap_css' );
add_action( 'wp_footer', 'bootstrap_js' );
add_action('after_setup_theme', 'nav_menu');

function bootstrap_css() {
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_register_style( 'bootstrap.min.css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap.min.css' );
}

function bootstrap_js() {
	wp_register_script( 'bootstrap.min.js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' );
	wp_enqueue_script( 'bootstrap.min.js' );
}

function nav_menu(){
	register_nav_menu('header_menu', 'Header menu');
	register_nav_menu('footer_menu', 'Footer menu');
}
