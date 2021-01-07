<?php

if ( ! function_exists( 'overton_mikado_get_hide_dep_for_header_vertical_area_meta_boxes' ) ) {
	function overton_mikado_get_hide_dep_for_header_vertical_area_meta_boxes() {
		$hide_dep_options = apply_filters( 'overton_mikado_filter_header_vertical_hide_meta_boxes', $hide_dep_options = array( '' => '' ) );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'overton_mikado_header_vertical_area_meta_options_map' ) ) {
	function overton_mikado_header_vertical_area_meta_options_map( $header_meta_box ) {
		$hide_dep_options = overton_mikado_get_hide_dep_for_header_vertical_area_meta_boxes();
		
		$header_vertical_area_meta_container = overton_mikado_add_admin_container(
			array(
				'parent'          => $header_meta_box,
				'name'            => 'header_vertical_area_container',
				'dependency' => array(
					'hide' => array(
						'mkdf_header_type_meta' => $hide_dep_options
					)
				)
			)
		);
		
		overton_mikado_add_admin_section_title(
			array(
				'parent' => $header_vertical_area_meta_container,
				'name'   => 'vertical_area_style',
				'title'  => esc_html__( 'Vertical Area Style', 'overton' )
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_vertical_header_background_color_meta',
				'type'        => 'color',
				'label'       => esc_html__( 'Background Color', 'overton' ),
				'description' => esc_html__( 'Set background color for vertical menu', 'overton' ),
				'parent'      => $header_vertical_area_meta_container
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_vertical_header_background_image_meta',
				'type'          => 'image',
				'default_value' => '',
				'label'         => esc_html__( 'Background Image', 'overton' ),
				'description'   => esc_html__( 'Set background image for vertical menu', 'overton' ),
				'parent'        => $header_vertical_area_meta_container
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_disable_vertical_header_background_image_meta',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Disable Background Image', 'overton' ),
				'description'   => esc_html__( 'Enabling this option will hide background image in Vertical Menu', 'overton' ),
				'parent'        => $header_vertical_area_meta_container
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_vertical_header_shadow_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Shadow', 'overton' ),
				'description'   => esc_html__( 'Set shadow on vertical menu', 'overton' ),
				'parent'        => $header_vertical_area_meta_container,
				'default_value' => '',
				'options'       => overton_mikado_get_yes_no_select_array()
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_vertical_header_border_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Vertical Area Border', 'overton' ),
				'description'   => esc_html__( 'Set border on vertical area', 'overton' ),
				'parent'        => $header_vertical_area_meta_container,
				'default_value' => '',
				'options'       => overton_mikado_get_yes_no_select_array()
			)
		);
		
		$vertical_header_border_container = overton_mikado_add_admin_container(
			array(
				'type'            => 'container',
				'name'            => 'vertical_header_border_container',
				'parent'          => $header_vertical_area_meta_container,
				'dependency' => array(
					'show' => array(
						'mkdf_vertical_header_border_meta'  => 'yes'
					)
				)
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_vertical_header_border_color_meta',
				'type'        => 'color',
				'label'       => esc_html__( 'Border Color', 'overton' ),
				'description' => esc_html__( 'Choose color of border', 'overton' ),
				'parent'      => $vertical_header_border_container
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_vertical_header_center_content_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Center Content', 'overton' ),
				'description'   => esc_html__( 'Set content in vertical center', 'overton' ),
				'parent'        => $header_vertical_area_meta_container,
				'default_value' => '',
				'options'       => overton_mikado_get_yes_no_select_array()
			)
		);
	}
	
	add_action( 'overton_mikado_action_additional_header_area_meta_boxes_map', 'overton_mikado_header_vertical_area_meta_options_map', 10, 1 );
}