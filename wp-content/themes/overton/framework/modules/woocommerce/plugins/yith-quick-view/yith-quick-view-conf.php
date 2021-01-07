<?php

/*************** YITH QUICK VIEW CONTENT FILTERS - begin ***************/

//Override product title
remove_action( 'yith_wcqv_product_summary', 'woocommerce_template_single_title', 5 );
add_action( 'yith_wcqv_product_summary', 'overton_mikado_woocommerce_yith_template_single_title', 5 );

//Remove add to cart
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

//Remove deafult actions for product image and add custom
remove_action('yith_wcqv_product_image', 'woocommerce_show_product_sale_flash', 10);
remove_action('yith_wcqv_product_image', 'woocommerce_show_product_images', 20);
add_action('yith_wcqv_product_image', 'overton_mikado_woocommerce_show_product_images', 9);

//Add yith quick view button
add_action( 'overton_mikado_action_woo_pl_info_below_image', 'overton_mikado_woocommerce_quickview_link', 1 );
add_action( 'overton_mikado_woocommerce_info_below_image_hover', 'overton_mikado_woocommerce_quickview_link', 12 );

//Change rating star position
remove_action( 'yith_wcqv_product_summary', 'woocommerce_template_single_rating', 10 );
add_action( 'yith_wcqv_product_summary', 'woocommerce_template_single_rating', 6 );

//Add additional html around single product summary
add_action('yith_wcqv_product_summary', 'overton_mikado_woocommerce_share_wish_tag_before', 30);
add_action('yith_wcqv_product_summary', 'overton_mikado_woocommerce_share_wish_tag_after', 35);

//Remove product meta
remove_action( 'yith_wcqv_product_summary', 'woocommerce_template_single_meta', 30 );


/*************** YITH QUICK VIEW CONTENT FILTERS - end ***************/

