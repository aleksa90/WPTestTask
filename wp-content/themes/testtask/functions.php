<?php


/**
 * Add support for Block Styles.
 */
add_theme_support('wp-block-styles');

require get_template_directory() . '/customizer/customizer.php';
new AddCustomizer();

require get_template_directory() . '/parts/header-inc/logo.php';
require get_template_directory() . '/parts/header-inc/main-menu.php';
require get_template_directory() . '/parts/header-inc/search.php';

require get_template_directory() . '/parts/frontpage-inc/section-1-banner.php';
require get_template_directory() . '/parts/frontpage-inc/section-2-jewellery-store.php';
require get_template_directory() . '/parts/frontpage-inc/section-3-feature-products.php';
require get_template_directory() . '/parts/frontpage-inc/section-4-special-offer.php';
require get_template_directory() . '/parts/frontpage-inc/section-5-discount.php';
require get_template_directory() . '/parts/frontpage-inc/section-6-ad-feature-new.php';
require get_template_directory() . '/parts/frontpage-inc/section-7-posts.php';

require get_template_directory() . '/parts/woocommerce-inc/product-carousel-frontpage.php';
require get_template_directory() . '/parts/woocommerce-inc/product-list-frontpage.php';
require get_template_directory() . '/parts/widget-areas.php';

function testtask_styles()
{

    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), null, 'all');
    wp_enqueue_style('bootstrap-grid-style', get_template_directory_uri() . '/assets/css/bootstrap-grid.css', array(), null, 'all');

    wp_enqueue_style('owl-carousel-style', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), null, 'all');
    wp_enqueue_style('owl-theme-default-style', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), null, 'all');

    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'testtask_styles');

function testtask_scripts()
{
    wp_enqueue_script('jquery-script', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true);
    wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), null, true);
    wp_enqueue_script('owl-carousel-script', get_template_directory_uri() . '/assets/js/owl.carousel.js', array(), null, true);
    wp_enqueue_script('owl-settings-script', get_template_directory_uri() . '/assets/js/owl-settings.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'testtask_scripts');

add_image_size( 'frontpage-thumb', 65, 65, true );
add_image_size( 'frontpage-blog-thumb', 345, 261, true );
