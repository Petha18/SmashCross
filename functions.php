<?php

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php'; 

function load_assets(){
	//carrgar bootstrap_css de primero
	wp_enqueue_style( 'bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css' );

	//cargar el style de segundo
	wp_enqueue_style('style', get_stylesheet_uri());

	//jquery de tercero
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.min.js');

	//bootstrap_js de cuarto
	wp_enqueue_script( 'bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js');

}

add_action('wp_enqueue_scripts', 'load_assets');

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'THEMENAME' ),
	) );



?>