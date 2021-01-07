<?php

if ( ! function_exists( 'overton_mikado_get_hide_dep_for_header_widget_areas_meta_boxes' ) ) {
	function overton_mikado_get_hide_dep_for_header_widget_areas_meta_boxes() {
		$hide_dep_options = apply_filters( 'overton_mikado_filter_header_widget_areas_hide_meta_boxes', $hide_dep_options = array() );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'overton_mikado_get_hide_dep_for_header_widget_area_two_meta_boxes' ) ) {
	function overton_mikado_get_hide_dep_for_header_widget_area_two_meta_boxes() {
		$hide_dep_options = apply_filters( 'overton_mikado_filter_header_widget_area_two_hide_meta_boxes', $hide_dep_options = array() );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'overton_mikado_header_widget_areas_meta_options_map' ) ) {
	function overton_mikado_header_widget_areas_meta_options_map( $header_meta_box ) {
		$hide_dep_widgets 			= overton_mikado_get_hide_dep_for_header_widget_areas_meta_boxes();
		$hide_dep_widget_area_two 	= overton_mikado_get_hide_dep_for_header_widget_area_two_meta_boxes();
		
		$header_widget_areas_container = overton_mikado_add_admin_container_no_style(
			array(
				'type'       => 'container',
				'name'       => 'header_widget_areas_container',
				'parent'     => $header_meta_box,
				'dependency' => array(
					'hide' => array(
						'mkdf_header_type_meta' => $hide_dep_widgets
					)
				),
				'args'       => array(
					'enable_panels_for_default_value' => true
				)
			)
		);
		
		overton_mikado_add_admin_section_title(
			array(
				'parent' => $header_widget_areas_container,
				'name'   => 'header_widget_areas',
				'title'  => esc_html__( 'Widget Areas', 'overton' )
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_disable_header_widget_areas_meta',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Disable Header Widget Areas', 'overton' ),
				'description'   => esc_html__( 'Enabling this option will hide widget areas from header', 'overton' ),
				'parent'        => $header_widget_areas_container,
			)
		);

		$header_custom_widget_areas_container = overton_mikado_add_admin_container_no_style(
			array(
				'type'       => 'container',
				'name'       => 'header_custom_widget_areas_container',
				'parent'     => $header_widget_areas_container,
				'dependency' => array(
					'hide' => array(
						'mkdf_disable_header_widget_areas_meta' => 'yes'
					)
				)
			)
		);
					
		$overton_custom_sidebars = overton_mikado_get_custom_sidebars();
		if ( count( $overton_custom_sidebars ) > 0 ) {
			overton_mikado_create_meta_box_field(
				array(
					'name'        => 'mkdf_custom_header_widget_area_one_meta',
					'type'        => 'selectblank',
					'label'       => esc_html__( 'Choose Custom Header Widget Area One', 'overton' ),
					'description' => esc_html__( 'Choose custom widget area to display in header widget area one', 'overton' ),
					'parent'      => $header_custom_widget_areas_container,
					'options'     => $overton_custom_sidebars
				)
			);
		}

		if ( count( $overton_custom_sidebars ) > 0 ) {
			overton_mikado_create_meta_box_field(
				array(
					'name'        => 'mkdf_custom_header_widget_area_two_meta',
					'type'        => 'selectblank',
					'label'       => esc_html__( 'Choose Custom Header Widget Area Two', 'overton' ),
					'description' => esc_html__( 'Choose custom widget area to display in header widget area two', 'overton' ),
					'parent'      => $header_custom_widget_areas_container,
					'options'     => $overton_custom_sidebars,
					'dependency' => array(
						'hide' => array(
							'mkdf_header_type_meta' => $hide_dep_widget_area_two
						)
					)
				)
			);
		}
		
		do_action( 'overton_mikado_header_widget_areas_additional_meta_boxes_map', $header_widget_areas_container );
	}
	
	add_action( 'overton_mikado_action_header_widget_areas_meta_boxes_map', 'overton_mikado_header_widget_areas_meta_options_map', 10, 1 );
}