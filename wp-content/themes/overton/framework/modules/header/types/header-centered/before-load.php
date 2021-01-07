<?php

if ( ! function_exists( 'overton_mikado_set_header_centered_type_global_option' ) ) {
	/**
	 * This function set header type value for global header option map
	 */
	function overton_mikado_set_header_centered_type_global_option( $header_types ) {
		$header_types['header-centered'] = array(
			'image' => MIKADO_FRAMEWORK_HEADER_TYPES_ROOT . '/header-centered/assets/img/header-centered.png',
			'label' => esc_html__( 'Centered', 'overton' )
		);
		
		return $header_types;
	}
	
	add_filter( 'overton_mikado_filter_header_type_global_option', 'overton_mikado_set_header_centered_type_global_option' );
}

if ( ! function_exists( 'overton_mikado_set_header_centered_type_meta_boxes_option' ) ) {
	/**
	 * This function set header type value for header meta boxes map
	 */
	function overton_mikado_set_header_centered_type_meta_boxes_option( $header_type_options ) {
		$header_type_options['header-centered'] = esc_html__( 'Centered', 'overton' );
		
		return $header_type_options;
	}
	
	add_filter( 'overton_mikado_filter_header_type_meta_boxes', 'overton_mikado_set_header_centered_type_meta_boxes_option' );
}

if ( ! function_exists( 'overton_mikado_set_hide_dep_options_header_centered' ) ) {
	/**
	 * This function is used to hide all containers/panels for admin options when this header type is selected
	 */
	function overton_mikado_set_hide_dep_options_header_centered( $hide_dep_options ) {
		$hide_dep_options[] = 'header-centered';
		
		return $hide_dep_options;
	}
	
	// header types panel options
	add_filter( 'overton_mikado_filter_full_screen_menu_hide_global_option', 'overton_mikado_set_hide_dep_options_header_centered' );
	add_filter( 'overton_mikado_filter_header_standard_hide_global_option', 'overton_mikado_set_hide_dep_options_header_centered' );
	add_filter( 'overton_mikado_filter_header_vertical_hide_global_option', 'overton_mikado_set_hide_dep_options_header_centered' );
	add_filter( 'overton_mikado_filter_header_vertical_menu_hide_global_option', 'overton_mikado_set_hide_dep_options_header_centered' );
	add_filter( 'overton_mikado_filter_header_vertical_closed_hide_global_option', 'overton_mikado_set_hide_dep_options_header_centered' );
	add_filter( 'overton_mikado_filter_header_vertical_sliding_hide_global_option', 'overton_mikado_set_hide_dep_options_header_centered' );
	
	// header types panel meta boxes
	add_filter( 'overton_mikado_filter_header_standard_hide_meta_boxes', 'overton_mikado_set_hide_dep_options_header_centered' );
	add_filter( 'overton_mikado_filter_header_vertical_hide_meta_boxes', 'overton_mikado_set_hide_dep_options_header_centered' );
}