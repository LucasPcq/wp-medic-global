<?php

if(!function_exists('overton_mikado_is_yith_wishlist_installed')) {
	function overton_mikado_is_yith_wishlist_installed() {
		return defined('YITH_WCWL');
	}
}

if(!function_exists('overton_mikado_woocommerce_wishlist_shortcode')) {
	function overton_mikado_woocommerce_wishlist_shortcode() {

		if(overton_mikado_is_yith_wishlist_installed()) {
			echo do_shortcode('[yith_wcwl_add_to_wishlist]');
		}
	}
}

if(!function_exists('mkdf_product_ajax_wishlist')) {
	function mkdf_product_ajax_wishlist(){

		$data = array(
			'wishlist_count_products' => class_exists('YITH_WCWL') ? yith_wcwl_count_products() : 0
		);
		wp_send_json($data); exit;
	}

	add_action('wp_ajax_mkdf_product_ajax_wishlist', 'mkdf_product_ajax_wishlist');
	add_action('wp_ajax_nopriv_mkdf_product_ajax_wishlist', 'mkdf_product_ajax_wishlist');
}

