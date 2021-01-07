<?php

if ( ! function_exists( 'overton_mikado_get_hide_dep_for_header_centered_options' ) ) {
	function overton_mikado_get_hide_dep_for_header_centered_options() {
		$hide_dep_options = apply_filters( 'overton_mikado_filter_header_centered_hide_global_option', $hide_dep_options = array() );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'overton_mikado_header_centered_map' ) ) {
	function overton_mikado_header_centered_map( $parent ) {
		$hide_dep_options = overton_mikado_get_hide_dep_for_header_centered_options();
		
		overton_mikado_add_admin_field(
			array(
				'parent'          => $parent,
				'type'            => 'text',
				'name'            => 'logo_wrapper_padding_header_centered',
				'default_value'   => '',
				'label'           => esc_html__( 'Logo Padding', 'overton' ),
				'description'     => esc_html__( 'Insert padding in format: 0px 0px 1px 0px', 'overton' ),
				'args'            => array(
					'col_width' => 3
				),
				'dependency' => array(
					'hide' => array(
						'header_options'  => $hide_dep_options
					)
				)
			)
		);
	}
	
	add_action( 'overton_mikado_header_logo_area_additional_options', 'overton_mikado_header_centered_map' );
}