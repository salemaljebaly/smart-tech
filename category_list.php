<?php

/**
* This creates the [my_cat_list] shortcode and calls the
* my_list_categories_shortcode() function.
*/
add_shortcode( 'my_cat_list', 'my_list_categories_shortcode' );

/**
* this function outputs your category list where you
* use the [my_cat_list] shortcode.
*/
function my_list_categories_shortcode() {
$args = array( 'echo'=>false );
return wp_list_categories( $args );
}

?>