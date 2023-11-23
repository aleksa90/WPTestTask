<?php

function widgets_init_list(){
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer col 1', 'testtask' ),
            'id'            => 'footer-1',
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer col 2', 'testtask' ),
            'id'            => 'footer-2',
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer col 3', 'testtask' ),
            'id'            => 'footer-3',
        )
    );    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer col 4', 'testtask' ),
            'id'            => 'footer-4',
        )
    );
}

add_action('widgets_init','widgets_init_list');