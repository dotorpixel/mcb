<?php
/**
 * Proper way to enqueue styles
 * See http://codex.wordpress.org/Function_Reference/wp_enqueue_style
 */
function theme_name_scripts() {
    wp_enqueue_style( 'mcb-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',array(),'3.1.1');
    wp_enqueue_style( 'mcb-awesome', get_template_directory_uri() . '/css/font-awesome.min.css',array(),'4.0.3' );
	wp_enqueue_style( 'mcb-style', get_stylesheet_uri(),array(),'0.0.1' );
    wp_enqueue_script( 'mcb-jquery', 'http://code.jquery.com/jquery-1.11.0.min.js', array(), '3.1.1' );
    wp_enqueue_script( 'mcb-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.1.1' );
    wp_enqueue_script( 'mcb-mansory', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array(), '3.1.4' );
    wp_enqueue_script( 'mcb-script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0' );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

$args = array(
	'width'         => 940,
	'height'        => 430,
	'default-image' => get_template_directory_uri() . '/img/header.jpg',
	'uploads'       => true,
);

/**
 * Custom Header
 * See https://codex.wordpress.org/Custom_Headers
 */
add_theme_support( 'custom-header', $args );

/*
 * Register for navigation menu
 * See http://codex.wordpress.org/Navigation_Menus
 */
function register_my_menu() {
    register_nav_menu( 'header', 'Header Menu' );
    register_nav_menu( 'sosmed', 'Sosial Media Menu' );
}
add_action( 'init', 'register_my_menu' );

/**
 * Custom Search
 * See https://codex.wordpress.org/Function_Reference/get_search_form
 */
function my_search_form( $form ) {
    $form = '
    <div class="search">
        <form name="SearchForm" role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
        <input type="text" class="form-control" value="' . get_search_query() . '" name="s" id="s" placeholder="Cari Artikel"/>
        </form>
        <i class="srch_btn fa fa-search" onclick="SearchForm.submit()"></i>
    </div>
    ';

    return $form;
}

add_filter( 'get_search_form', 'my_search_form' );