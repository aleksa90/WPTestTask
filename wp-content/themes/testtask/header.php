<?php
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<?php wp_body_open(); ?>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="menu container">
        <ul>
            <li>
                <a class="navbar-brand" href="#"><?php
                    if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    } ?></a>
            </li>
            <li class="menu-item">
                <nav id="menu" class="mobile-menu">
                    <?php testtask_main_menu(); ?>
                </nav>

                <a href="#menu" class="mobile-menu__opener" id="mobile-menu__opener" role="button" tabindex="0"><span>Menu</span></a>
                <div class="mobile-menu__screen"></div>

            </li>
            <li class="menu-item header-link">
                <a href="#"> Login </a> / <a href="#"> Register </a>
            </li>
            <li class="cart-search-menu">
                <a href="#" id="search">
                    <div class="search-form-button">search</div>
                </a>
                <a href="#" id="cart">
                    <span class="cart-button">cart</span>
                    <span class="cart-count"> <?php echo WC()->cart->get_cart_contents_count(); ?></span>
                    <span class="cart-subtotal"> <?php echo WC()->cart->get_cart_subtotal(); ?></span>
                </a></li>

        </ul>



        <div class="search-form">
            <form>
                <?php get_search_form(); ?>
            </form>
        </div>

    </div>
</nav>
