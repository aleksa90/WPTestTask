<?php
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<?php wp_body_open(); ?>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#"><?php
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }?></a>
        <div class="collapse navbar-collapse" id="navbarNav">

                <?php testtask_main_menu(); ?>

        </div>
        <?php get_search_form(); ?>


    </div>
</nav>
