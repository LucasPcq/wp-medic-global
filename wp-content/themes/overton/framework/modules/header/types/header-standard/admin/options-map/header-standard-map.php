<?php

if ( ! function_exists( 'overton_mikado_get_hide_dep_for_header_standard_options' ) ) {
	function overton_mikado_get_hide_dep_for_header_standard_options() {
		$hide_dep_options = apply_filters( 'overton_mikado_filter_header_standard_hide_global_option', $hide_dep_options = array() );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'overton_mikado_header_standard_map' ) ) {
	function overton_mikado_header_standard_map( $parent ) {
		$hide_dep_options = overton_mikado_get_hide_dep_for_header_standard_options();
		
		overton_mikado_add_admin_field(
			array(
				'parent'          => $parent,
				'type'            => 'select',
				'name'            => 'set_menu_area_position',
				'default_value'   => 'center',
				'label'           => esc_html__( 'Choose Menu Area Position', 'overton' ),
				'description'     => esc_html__( 'Select menu area position in your header', 'overton' ),
				'options'         => array(
                    'center' => esc_html__( 'Center', 'overton' ),
					'right'  => esc_html__( 'Right', 'overton' ),
					'left'   => esc_html__( 'Left', 'overton' ),
				),
				'dependency' => array(
					'hide' => array(
						'header_options'  => $hide_dep_options
					)
				)
			)
		);
	}
	
	add_action( 'overton_mikado_action_additional_header_menu_area_options_map', 'overton_mikado_header_standard_map' );
}