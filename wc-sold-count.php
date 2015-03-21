<?php
/*
Plugin Name: Woocommerce Sold Count
Plugin URI: http://www.www.progaming.co.th
Description: Super great plugin by ProGaming to display total item sold in Woocommerce
Version: 1.0
Author: Chatpong Suteesuksataporn
Author URI: http://www.www.progaming.co.thw
*/

// To show counting on archive page, uncomment the line below
//add_action( 'woocommerce_after_shop_loop_item_title', 'wc_product_sold_count', 11 );

add_action( 'woocommerce_single_product_summary', 'wc_product_sold_count', 11 );

function wc_product_sold_count() {
	global $product;
	$units_sold = get_post_meta( $product->id, 'total_sales', true );
	echo '<p>' . sprintf( __( 'Units Sold: %s', 'woocommerce' ), $units_sold ) . '</p>';
}

?>