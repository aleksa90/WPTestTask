<?php


/**
 * Add support for Block Styles.
 */
add_theme_support( 'wp-block-styles' );


require get_template_directory() . '/parts/header-inc/logo.php';
require get_template_directory() . '/parts/header-inc/main-menu.php';
require get_template_directory() . '/parts/header-inc/search.php';
require get_template_directory() . '/parts/widget-areas.php';

function testtask_styles() {

wp_enqueue_style('bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap.css', array(), null, 'all');
wp_enqueue_style('bootstrap-grid-style', get_template_directory_uri().'/assets/css/bootstrap.css', array(), null, 'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'testtask_styles' );

function testtask_scripts() {
    wp_enqueue_script('bootstrap-script',get_template_directory_uri().'/assets/js/bootstrap.js',array('jquery'),null,true);
}

add_action( 'wp_enqueue_scripts', 'testtask_scripts' );

