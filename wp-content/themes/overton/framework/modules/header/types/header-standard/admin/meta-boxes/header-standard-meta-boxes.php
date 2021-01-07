<?php

if ( ! function_exists( 'overton_mikado_get_hide_dep_for_header_standard_meta_boxes' ) ) {
	function overton_mikado_get_hide_dep_for_header_standard_meta_boxes() {
		$hide_dep_options = apply_filters( 'overton_mikado_filter_header_standard_hide_meta_boxes', $hide_dep_options = array() );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'overton_mikado_header_standard_meta_map' ) ) {
	function overton_mikado_header_standard_meta_map( $parent ) {
		$hide_dep_options = overton_mikado_get_hide_dep_for_header_standard_meta_boxes();
		
		overton_mikado_create_meta_box_field(
			array(
				'parent'          => $parent,
				'type'            => 'select',
				'name'            => 'mkdf_set_menu_area_position_meta',
				'default_value'   => '',
				'label'           => esc_html__( 'Choose Menu Area Position', 'overton' ),
				'description'     => esc_html__( 'Select menu area position in your header', 'overton' ),
				'options'         => array(
					''       => esc_html__( 'Default', 'overton' ),
					'left'   => esc_html__( 'Left', 'overton' ),
					'right'  => esc_html__( 'Right', 'overton' ),
					'center' => esc_html__( 'Center', 'overton' )
				),
				'dependency' => array(
					'hide' => array(
						'mkdf_header_type_meta'  => $hide_dep_options
					)
				)
			)
		);
	}
	
	add_action( 'overton_mikado_action_additional_header_area_meta_boxes_map', 'overton_mikado_header_standard_meta_map' );
}