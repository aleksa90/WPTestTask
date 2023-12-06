<?php function wpdocs_after_setup_theme() {
add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );


function custom_search_form( $form ) {
$form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <div class="custom-form">
      <div class="search-form-button"> 1</div>  <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Search for products"" />
                    <a class="close"> <div class="close-form-button"> 1</div> </a>
    </div>
</form>';

return $form;
}
add_filter( 'get_search_form', 'custom_search_form', 40 );
