<?php function wpdocs_after_setup_theme() {
add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );


function custom_search_form( $form ) {
$form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <div class="custom-form"><label class="screen-reader-text" for="s">' . __( 'Search:' ) . '</label>
        <input type="text" value="' . get_search_query() . '" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search1' ) .'" />
    </div>
</form>';

return $form;
}
add_filter( 'get_search_form', 'custom_search_form', 40 );
