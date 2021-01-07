<?php

if ( ! function_exists( 'overton_mikado_disable_behaviors_for_header_vertical' ) ) {
	/**
	 * This function is used to disable sticky header functions that perform processing variables their used in js for this header type
	 */
	function overton_mikado_disable_behaviors_for_header_vertical( $allow_behavior ) {
		return false;
	}
	
	if ( overton_mikado_check_is_header_type_enabled( 'header-vertical', overton_mikado_get_page_id() ) ) {
		add_filter( 'overton_mikado_filter_allow_sticky_header_behavior', 'overton_mikado_disable_behaviors_for_header_vertical' );
		add_filter( 'overton_mikado_filter_allow_content_boxed_layout', 'overton_mikado_disable_behaviors_for_header_vertical' );
	}
}