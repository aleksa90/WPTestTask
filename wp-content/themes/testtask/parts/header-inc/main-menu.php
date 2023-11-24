<?php
function register_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_menu' );

function testtask_main_menu(){
    wp_nav_menu(
        array(
            'menu_id'        => 'header-menu',
            'items_wrap'=> '<ul id="%1$s" class="navbar-nav"><li class="nav-item">%3$s</li></ul>',
        )
    );
}