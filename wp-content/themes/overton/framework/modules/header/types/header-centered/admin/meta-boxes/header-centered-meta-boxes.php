<?php

if ( ! function_exists( 'overton_mikado_get_hide_dep_for_header_centered_meta_boxes' ) ) {
	function overton_mikado_get_hide_dep_for_header_centered_meta_boxes() {
		$hide_dep_options = apply_filters( 'overton_mikado_filter_header_centered_hide_meta_boxes', $hide_dep_options = array() );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'overton_mikado_header_centered_meta_map' ) ) {
	function overton_mikado_header_centered_meta_map( $parent ) {
		$hide_dep_options = overton_mikado_get_hide_dep_for_header_centered_meta_boxes();
		
		overton_mikado_create_meta_box_field(
			array(
				'parent'          => $parent,
				'type'            => 'text',
				'name'            => 'mkdf_logo_wrapper_padding_header_centered_meta',
				'default_value'   => '',
				'label'           => esc_html__( 'Logo Padding', 'overton' ),
				'description'     => esc_html__( 'Insert padding in format: 0px 0px 1px 0px', 'overton' ),
				'args'            => array(
					'col_width' => 3
				),
				'dependency' => array(
					'hide' => array(
						'mkdf_header_type_meta'  => $hide_dep_options
					)
				)
			)
		);
	}
	
	add_action( 'overton_mikado_action_header_logo_area_additional_meta_boxes_map', 'overton_mikado_header_centered_meta_map', 10, 1 );
}