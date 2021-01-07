<?php

if ( ! function_exists( 'overton_mikado_get_title_types_meta_boxes' ) ) {
	function overton_mikado_get_title_types_meta_boxes() {
		$title_type_options = apply_filters( 'overton_mikado_filter_title_type_meta_boxes', $title_type_options = array( '' => esc_html__( 'Default', 'overton' ) ) );
		
		return $title_type_options;
	}
}

foreach ( glob( MIKADO_FRAMEWORK_MODULES_ROOT_DIR . '/title/types/*/admin/meta-boxes/*.php' ) as $meta_box_load ) {
	include_once $meta_box_load;
}

if ( ! function_exists( 'overton_mikado_map_title_meta' ) ) {
	function overton_mikado_map_title_meta() {
		$title_type_meta_boxes = overton_mikado_get_title_types_meta_boxes();
		
		$title_meta_box = overton_mikado_create_meta_box(
			array(
				'scope' => apply_filters( 'overton_mikado_filter_set_scope_for_meta_boxes', array( 'page', 'post' ), 'title_meta' ),
				'title' => esc_html__( 'Title', 'overton' ),
				'name'  => 'title_meta'
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_show_title_area_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Show Title Area', 'overton' ),
				'description'   => esc_html__( 'Disabling this option will turn off page title area', 'overton' ),
				'parent'        => $title_meta_box,
				'options'       => overton_mikado_get_yes_no_select_array()
			)
		);
		
			$show_title_area_meta_container = overton_mikado_add_admin_container(
				array(
					'parent'          => $title_meta_box,
					'name'            => 'mkdf_show_title_area_meta_container',
					'dependency' => array(
						'hide' => array(
							'mkdf_show_title_area_meta' => 'no'
						)
					)
				)
			);
		
				overton_mikado_create_meta_box_field(
					array(
						'name'          => 'mkdf_title_area_type_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Title Area Type', 'overton' ),
						'description'   => esc_html__( 'Choose title type', 'overton' ),
						'parent'        => $show_title_area_meta_container,
						'options'       => $title_type_meta_boxes
					)
				);
		
				overton_mikado_create_meta_box_field(
					array(
						'name'          => 'mkdf_title_area_in_grid_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Title Area In Grid', 'overton' ),
						'description'   => esc_html__( 'Set title area content to be in grid', 'overton' ),
						'options'       => overton_mikado_get_yes_no_select_array(),
						'parent'        => $show_title_area_meta_container
					)
				);
		
				overton_mikado_create_meta_box_field(
					array(
						'name'        => 'mkdf_title_area_height_meta',
						'type'        => 'text',
						'label'       => esc_html__( 'Height', 'overton' ),
						'description' => esc_html__( 'Set a height for Title Area', 'overton' ),
						'parent'      => $show_title_area_meta_container,
						'args'        => array(
							'col_width' => 2,
							'suffix'    => 'px'
						)
					)
				);
				
				overton_mikado_create_meta_box_field(
					array(
						'name'        => 'mkdf_title_area_background_color_meta',
						'type'        => 'color',
						'label'       => esc_html__( 'Background Color', 'overton' ),
						'description' => esc_html__( 'Choose a background color for title area', 'overton' ),
						'parent'      => $show_title_area_meta_container
					)
				);
		
				overton_mikado_create_meta_box_field(
					array(
						'name'        => 'mkdf_title_area_background_image_meta',
						'type'        => 'image',
						'label'       => esc_html__( 'Background Image', 'overton' ),
						'description' => esc_html__( 'Choose an Image for title area', 'overton' ),
						'parent'      => $show_title_area_meta_container
					)
				);
		
				overton_mikado_create_meta_box_field(
					array(
						'name'          => 'mkdf_title_area_background_image_behavior_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Background Image Behavior', 'overton' ),
						'description'   => esc_html__( 'Choose title area background image behavior', 'overton' ),
						'parent'        => $show_title_area_meta_container,
						'options'       => array(
							''                    => esc_html__( 'Default', 'overton' ),
							'hide'                => esc_html__( 'Hide Image', 'overton' ),
							'responsive'          => esc_html__( 'Enable Responsive Image', 'overton' ),
							'responsive-disabled' => esc_html__( 'Disable Responsive Image', 'overton' ),
							'parallax'            => esc_html__( 'Enable Parallax Image', 'overton' ),
							'parallax-zoom-out'   => esc_html__( 'Enable Parallax With Zoom Out Image', 'overton' ),
							'parallax-disabled'   => esc_html__( 'Disable Parallax Image', 'overton' )
						)
					)
				);
				
				overton_mikado_create_meta_box_field(
					array(
						'name'          => 'mkdf_title_area_vertical_alignment_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Vertical Alignment', 'overton' ),
						'description'   => esc_html__( 'Specify title area content vertical alignment', 'overton' ),
						'parent'        => $show_title_area_meta_container,
						'options'       => array(
							''              => esc_html__( 'Default', 'overton' ),
							'header-bottom' => esc_html__( 'From Bottom of Header', 'overton' ),
							'window-top'    => esc_html__( 'From Window Top', 'overton' )
						)
					)
				);
				
				overton_mikado_create_meta_box_field(
					array(
						'name'          => 'mkdf_title_area_title_tag_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Title Tag', 'overton' ),
						'options'       => overton_mikado_get_title_tag( true ),
						'parent'        => $show_title_area_meta_container
					)
				);
				
				overton_mikado_create_meta_box_field(
					array(
						'name'        => 'mkdf_title_text_color_meta',
						'type'        => 'color',
						'label'       => esc_html__( 'Title Color', 'overton' ),
						'description' => esc_html__( 'Choose a color for title text', 'overton' ),
						'parent'      => $show_title_area_meta_container
					)
				);
				
				overton_mikado_create_meta_box_field(
					array(
						'name'          => 'mkdf_title_area_subtitle_meta',
						'type'          => 'text',
						'default_value' => '',
						'label'         => esc_html__( 'Subtitle Text', 'overton' ),
						'description'   => esc_html__( 'Enter your subtitle text', 'overton' ),
						'parent'        => $show_title_area_meta_container,
						'args'          => array(
							'col_width' => 6
						)
					)
				);
		
				overton_mikado_create_meta_box_field(
					array(
						'name'          => 'mkdf_title_area_subtitle_tag_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Subtitle Tag', 'overton' ),
						'options'       => overton_mikado_get_title_tag( true, array( 'p' => 'p' ) ),
						'parent'        => $show_title_area_meta_container
					)
				);
				
				overton_mikado_create_meta_box_field(
					array(
						'name'        => 'mkdf_subtitle_color_meta',
						'type'        => 'color',
						'label'       => esc_html__( 'Subtitle Color', 'overton' ),
						'description' => esc_html__( 'Choose a color for subtitle text', 'overton' ),
						'parent'      => $show_title_area_meta_container
					)
				);
		
		/***************** Additional Title Area Layout - start *****************/
		
		do_action( 'overton_mikado_action_additional_title_area_meta_boxes', $show_title_area_meta_container );
		
		/***************** Additional Title Area Layout - end *****************/
		
	}
	
	add_action( 'overton_mikado_action_meta_boxes_map', 'overton_mikado_map_title_meta', 60 );
}