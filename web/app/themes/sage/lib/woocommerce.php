<?php

remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_catalog_ordering', 30 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
add_action( 'woocommerce_after_main_content', 'sage_soliloquy_products_slider' );
add_action( 'woocommerce_after_main_content', 'woocommerce_add_post_navigation' );
//add_action( 'woocommerce_after_single_product_summary', 'sage_related_products_title' );
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );

if ( ! function_exists( 'woocommerce_template_loop_product_thumbnail' ) ) {

/**
 * Get the product thumbnail for the loop.
 *
 * @access public
 * @subpackage  Loop
 * @return void
 */
	function woocommerce_template_loop_product_thumbnail() {
	    echo woocommerce_get_product_thumbnail();
	}
}

function sage_related_products_title() {
	echo '<h3 class="related-products">Other Masks</h3>';
}

function woocommerce_add_post_navigation() {
	echo '<div class="post-navigation">';
	previous_post_link( '&Lang; %link', '%title', true, '', 'product_cat' );
	next_post_link( '%link &Rang;', '%title', true, '', 'product_cat' );
	echo '</div>';
}

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );      	// Remove the description tab
    unset( $tabs['reviews'] ); 			// Remove the reviews tab
    unset( $tabs['additional_information'] );  	// Remove the additional information tab

    return $tabs;

}

function sage_soliloquy_products_slider() {
	echo '<div class="wrap other-masks"><h3>Other Masks</h3>'.do_shortcode('[soliloquy slug="woocommerce-products"]').'</div>';
	//if ( function_exists( 'soliloquy' ) ) { 
		//soliloquy( '150' ); 
	//}
}

function wc_remove_related_products() {
	return array();
}
add_filter('woocommerce_related_products_args','wc_remove_related_products', 10);

//remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );

/*add_filter( 'woocommerce_output_related_products_args', 'sage_related_products_args' );
  function sage_related_products_args( $args ) {
	$args['posts_per_page'] = 4;
	$args['orderby'] = 'name';
	$args['order'] = 'ASC'; // arranged in 2 columns
	return $args;
}*/

?>