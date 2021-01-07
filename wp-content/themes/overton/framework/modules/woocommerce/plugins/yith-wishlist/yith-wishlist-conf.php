<?php

/*************** YITH WISHLIST FILTERS - begin ***************/

//Change yith wishlist button position on single product page
//add_filter( 'yith_wcwl_positions', 'overton_mikado_woocommerce_wishlist_position', 10 );

//Add yith wishlist button
add_action( 'overton_mikado_action_woo_pl_info_below_image', 'overton_mikado_woocommerce_wishlist_shortcode', 1 );
add_action('overton_mikado_woocommerce_info_below_image_hover', 'overton_mikado_woocommerce_wishlist_shortcode', 12);
add_action( 'overton_mikado_action_woo_pl_info_on_image_hover', 'overton_mikado_woocommerce_wishlist_shortcode', 12 );
add_action('overton_mikado_action_woo_pl_info_on_image_hover', 'overton_mikado_woocommerce_wishlist_shortcode', 12);

//Remove quick view button from wishlist
remove_all_actions('yith_wcwl_table_after_product_name');


/*************** YITH WISHLIST FILTERS - end ***************/

