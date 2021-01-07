<?php

if ( ! function_exists( 'overton_mikado_header_minimal_full_screen_menu_body_class' ) ) {
	/**
	 * Function that adds body classes for different full screen menu types
	 *
	 * @param $classes array original array of body classes
	 *
	 * @return array modified array of classes
	 */
	function overton_mikado_header_minimal_full_screen_menu_body_class( $classes ) {
		$classes[] = 'mkdf-' . overton_mikado_options()->getOptionValue( 'fullscreen_menu_animation_style' );
		
		return $classes;
	}
	
	if ( overton_mikado_check_is_header_type_enabled( 'header-minimal', overton_mikado_get_page_id() ) ) {
		add_filter( 'body_class', 'overton_mikado_header_minimal_full_screen_menu_body_class' );
	}
}

if ( ! function_exists( 'overton_mikado_get_header_minimal_full_screen_menu' ) ) {
	/**
	 * Loads fullscreen menu HTML template
	 */
	function overton_mikado_get_header_minimal_full_screen_menu() {
		$parameters = array(
			'fullscreen_menu_in_grid' => overton_mikado_options()->getOptionValue( 'fullscreen_in_grid' ) === 'yes' ? true : false
		);
		
		overton_mikado_get_module_template_part( 'templates/full-screen-menu', 'header/types/header-minimal', '', $parameters );
	}
	
	if ( overton_mikado_check_is_header_type_enabled( 'header-minimal', overton_mikado_get_page_id() ) ) {
		add_action( 'overton_mikado_action_after_wrapper_inner', 'overton_mikado_get_header_minimal_full_screen_menu', 40 );
	}
}

if ( ! function_exists( 'overton_mikado_header_minimal_mobile_menu_module' ) ) {
    /**
     * Function that edits module for mobile menu
     *
     * @param $module - default module value
     *
     * @return string name of module
     */
    function overton_mikado_header_minimal_mobile_menu_module( $module ) {
        return 'header/types/header-minimal';
    }

    if ( overton_mikado_check_is_header_type_enabled( 'header-minimal', overton_mikado_get_page_id() ) ) {
        add_filter('overton_mikado_filter_mobile_menu_module', 'overton_mikado_header_minimal_mobile_menu_module');
    }
}

if ( ! function_exists( 'overton_mikado_header_minimal_mobile_menu_slug' ) ) {
    /**
     * Function that edits slug for mobile menu
     *
     * @param $slug - default slug value
     *
     * @return string name of slug
     */
    function overton_mikado_header_minimal_mobile_menu_slug( $slug ) {
        return 'minimal';
    }

    if ( overton_mikado_check_is_header_type_enabled( 'header-minimal', overton_mikado_get_page_id() ) ) {
        add_filter('overton_mikado_filter_mobile_menu_slug', 'overton_mikado_header_minimal_mobile_menu_slug');
    }
}

if ( ! function_exists( 'overton_mikado_header_minimal_mobile_menu_parameters' ) ) {
    /**
     * Function that edits parameters for mobile menu
     *
     * @param $parameters - default parameters array values
     *
     * @return array of default values and classes for minimal mobile header
     */
    function overton_mikado_header_minimal_mobile_menu_parameters( $parameters ) {

		$parameters['fullscreen_menu_icon_class'] = overton_mikado_get_fullscreen_menu_icon_class();

        return $parameters;
    }

    if ( overton_mikado_check_is_header_type_enabled( 'header-minimal', overton_mikado_get_page_id() ) ) {
        add_filter('overton_mikado_filter_mobile_menu_parameters', 'overton_mikado_header_minimal_mobile_menu_parameters');
    }
}