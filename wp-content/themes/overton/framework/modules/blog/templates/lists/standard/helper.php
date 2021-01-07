<?php

if ( ! function_exists( 'overton_mikado_get_blog_holder_params' ) ) {
	/**
	 * Function that generates params for holders on blog templates
	 */
	function overton_mikado_get_blog_holder_params( $params ) {
		$params_list = array();
		
		$params_list['holder'] = 'mkdf-container';
		$params_list['inner']  = 'mkdf-container-inner clearfix';
		
		return $params_list;
	}
	
	add_filter( 'overton_mikado_filter_blog_holder_params', 'overton_mikado_get_blog_holder_params' );
}

if ( ! function_exists( 'overton_mikado_blog_part_params' ) ) {
	function overton_mikado_blog_part_params( $params ) {
		
		$part_params              = array();
		$part_params['title_tag'] = 'h3';
		$part_params['link_tag']  = 'h3';
		$part_params['quote_tag'] = 'h3';
		
		return array_merge( $params, $part_params );
	}
	
	add_filter( 'overton_mikado_filter_blog_part_params', 'overton_mikado_blog_part_params' );
}