<?php
/**
 * Proper way to enqueue styles
 * See http://codex.wordpress.org/Function_Reference/wp_enqueue_style
 */
function theme_name_scripts() {
    wp_enqueue_style( 'mcb-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',array(),'3.1.1');
	wp_enqueue_style( 'mcb-style', get_stylesheet_uri(),array(),'0.0.1' );
    wp_enqueue_script( 'mcb-jquery', 'http://code.jquery.com/jquery-1.11.0.min.js', array(), '3.1.1' );
    wp_enqueue_script( 'mcb-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.1.1' );
    wp_enqueue_script( 'mcb-mansory', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array(), '3.1.4' );
    wp_enqueue_script( 'mcb-script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0' );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );