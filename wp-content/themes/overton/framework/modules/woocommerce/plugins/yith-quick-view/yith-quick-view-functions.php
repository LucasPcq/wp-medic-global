<?php

if(!function_exists('overton_mikado_is_yith_quickview_installed')) {
	function overton_mikado_is_yith_quickview_installed() {
		return defined('YITH_WCQV');
	}
}

if(!function_exists('overton_mikado_woocommerce_quickview_link')) {
    /**
     * Function that returns quick view link
     */
    function overton_mikado_woocommerce_quickview_link(){
        global $product;

        $product_id = $product->get_id();

        print '<div class="mkdf-yith-wcqv-holder"><a href="#" class="yith-wcqv-button" data-product_id="'.$product_id.'">'
				. overton_mikado_icon_collections()->renderIcon( "dripicons-preview", "dripicons" ). '</a></div>';

    }
    add_action('mkdf_themename_woocommerce_info_below_image_hover', 'overton_mikado_woocommerce_quickview_link', 1);
}

if(!function_exists('overton_mikado_woocommerce_disable_yith_pretty_photo')) {
    /**
     * Function that disable YITH Quick View pretty photo style
     */
    function overton_mikado_woocommerce_disable_yith_pretty_photo() {
        //is woocommerce installed?
        if(overton_mikado_is_woocommerce_installed() && overton_mikado_is_yith_wcqv_installed()) {

            wp_deregister_style('woocommerce_prettyPhoto_css');
        }
    }

    add_action('wp_footer', 'overton_mikado_woocommerce_disable_yith_pretty_photo');
}