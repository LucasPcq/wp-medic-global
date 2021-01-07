<?php

if ( ! function_exists( 'overton_mikado_map_general_meta' ) ) {
	function overton_mikado_map_general_meta() {
		
		$general_meta_box = overton_mikado_create_meta_box(
			array(
				'scope' => apply_filters( 'overton_mikado_filter_set_scope_for_meta_boxes', array( 'page', 'post' ), 'general_meta' ),
				'title' => esc_html__( 'General', 'overton' ),
				'name'  => 'general_meta'
			)
		);
		
		/***************** Slider Layout - begin **********************/
		
		overton_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_page_slider_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Slider Shortcode', 'overton' ),
				'description' => esc_html__( 'Paste your slider shortcode here', 'overton' ),
				'parent'      => $general_meta_box
			)
		);
		
		/***************** Slider Layout - begin **********************/
		
		/***************** Content Layout - begin **********************/
		
		overton_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_page_content_behind_header_meta',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Always put content behind header', 'overton' ),
				'description'   => esc_html__( 'Enabling this option will put page content behind page header', 'overton' ),
				'parent'        => $general_meta_box
			)
		);
		
		$mkdf_content_padding_group = overton_mikado_add_admin_group(
			array(
				'name'        => 'content_padding_group',
				'title'       => esc_html__( 'Content Styles', 'overton' ),
				'description' => esc_html__( 'Define styles for Content area', 'overton' ),
				'parent'      => $general_meta_box
			)
		);
		
			$mkdf_content_padding_row = overton_mikado_add_admin_row(
				array(
					'name'   => 'mkdf_content_padding_row',
					'parent' => $mkdf_content_padding_group
				)
			);
			
				overton_mikado_create_meta_box_field(
					array(
						'name'        => 'mkdf_page_background_color_meta',
						'type'        => 'colorsimple',
						'label'       => esc_html__( 'Page Background Color', 'overton' ),
						'parent'      => $mkdf_content_padding_row
					)
				);
				
				overton_mikado_create_meta_box_field(
					array(
						'name'          => 'mkdf_page_background_image_meta',
						'type'          => 'imagesimple',
						'label'         => esc_html__( 'Page Background Image', 'overton' ),
						'parent'        => $mkdf_content_padding_row
					)
				);
				
				overton_mikado_create_meta_box_field(
					array(
						'name'          => 'mkdf_page_background_repeat_meta',
						'type'          => 'selectsimple',
						'default_value' => '',
						'label'         => esc_html__( 'Page Background Image Repeat', 'overton' ),
						'options'       => overton_mikado_get_yes_no_select_array(),
						'parent'        => $mkdf_content_padding_row
					)
				);
		
			$mkdf_content_padding_row_1 = overton_mikado_add_admin_row(
				array(
					'name'   => 'mkdf_content_padding_row_1',
					'next'   => true,
					'parent' => $mkdf_content_padding_group
				)
			);
		
				overton_mikado_create_meta_box_field(
					array(
						'name'   => 'mkdf_page_content_padding',
						'type'   => 'textsimple',
						'label'  => esc_html__( 'Content Padding (eg. 10px 5px 10px 5px)', 'overton' ),
						'parent' => $mkdf_content_padding_row_1,
						'args'        => array(
							'col_width' => 4
						)
					)
				);
				
				overton_mikado_create_meta_box_field(
					array(
						'name'    => 'mkdf_page_content_padding_mobile',
						'type'    => 'textsimple',
						'label'   => esc_html__( 'Content Padding for mobile (eg. 10px 5px 10px 5px)', 'overton' ),
						'parent'  => $mkdf_content_padding_row_1,
						'args'        => array(
							'col_width' => 4
						)
					)
				);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_initial_content_width_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Initial Width of Content', 'overton' ),
				'description'   => esc_html__( 'Choose the initial width of content which is in grid (Applies to pages set to "Default Template" and rows set to "In Grid")', 'overton' ),
				'parent'        => $general_meta_box,
				'options'       => array(
					''                => esc_html__( 'Default', 'overton' ),
					'mkdf-grid-1300' => esc_html__( '1300px', 'overton' ),
					'mkdf-grid-1200' => esc_html__( '1200px', 'overton' ),
					'mkdf-grid-1100' => esc_html__( '1100px', 'overton' ),
					'mkdf-grid-1000' => esc_html__( '1000px', 'overton' ),
					'mkdf-grid-800'  => esc_html__( '800px', 'overton' )
				)
			)
		);

        overton_mikado_create_meta_box_field(
            array(
                'name'    => 'mkdf_content_grid_lines_meta',
                'type'    => 'select',
                'label'   => esc_html__( 'Enable grid lines in background', 'overton' ),
                'parent'  => $general_meta_box,
                'options' => overton_mikado_get_yes_no_select_array()
            )
        );
		
		overton_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_page_grid_space_meta',
				'type'        => 'select',
				'default_value' => '',
				'label'       => esc_html__( 'Grid Layout Space', 'overton' ),
				'description' => esc_html__( 'Choose a space between content layout and sidebar layout for your page', 'overton' ),
				'options'     => overton_mikado_get_space_between_items_array( true ),
				'parent'      => $general_meta_box
			)
		);
		
		/***************** Content Layout - end **********************/
		
		/***************** Boxed Layout - begin **********************/
		
		overton_mikado_create_meta_box_field(
			array(
				'name'    => 'mkdf_boxed_meta',
				'type'    => 'select',
				'label'   => esc_html__( 'Boxed Layout', 'overton' ),
				'parent'  => $general_meta_box,
				'options' => overton_mikado_get_yes_no_select_array()
			)
		);
		
			$boxed_container_meta = overton_mikado_add_admin_container(
				array(
					'parent'          => $general_meta_box,
					'name'            => 'boxed_container_meta',
					'dependency' => array(
						'hide' => array(
							'mkdf_boxed_meta' => array( '', 'no' )
						)
					)
				)
			);
		
				overton_mikado_create_meta_box_field(
					array(
						'name'        => 'mkdf_page_background_color_in_box_meta',
						'type'        => 'color',
						'label'       => esc_html__( 'Page Background Color', 'overton' ),
						'description' => esc_html__( 'Choose the page background color outside box', 'overton' ),
						'parent'      => $boxed_container_meta
					)
				);
				
				overton_mikado_create_meta_box_field(
					array(
						'name'        => 'mkdf_boxed_background_image_meta',
						'type'        => 'image',
						'label'       => esc_html__( 'Background Image', 'overton' ),
						'description' => esc_html__( 'Choose an image to be displayed in background', 'overton' ),
						'parent'      => $boxed_container_meta
					)
				);
				
				overton_mikado_create_meta_box_field(
					array(
						'name'        => 'mkdf_boxed_pattern_background_image_meta',
						'type'        => 'image',
						'label'       => esc_html__( 'Background Pattern', 'overton' ),
						'description' => esc_html__( 'Choose an image to be used as background pattern', 'overton' ),
						'parent'      => $boxed_container_meta
					)
				);
				
				overton_mikado_create_meta_box_field(
					array(
						'name'          => 'mkdf_boxed_background_image_attachment_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Background Image Attachment', 'overton' ),
						'description'   => esc_html__( 'Choose background image attachment', 'overton' ),
						'parent'        => $boxed_container_meta,
						'options'       => array(
							''       => esc_html__( 'Default', 'overton' ),
							'fixed'  => esc_html__( 'Fixed', 'overton' ),
							'scroll' => esc_html__( 'Scroll', 'overton' )
						)
					)
				);
		
		/***************** Boxed Layout - end **********************/
		
		/***************** Passepartout Layout - begin **********************/
		
		overton_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_paspartu_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Passepartout', 'overton' ),
				'description'   => esc_html__( 'Enabling this option will display passepartout around site content', 'overton' ),
				'parent'        => $general_meta_box,
				'options'       => overton_mikado_get_yes_no_select_array(),
			)
		);
		
			$paspartu_container_meta = overton_mikado_add_admin_container(
				array(
					'parent'          => $general_meta_box,
					'name'            => 'mkdf_paspartu_container_meta',
					'dependency' => array(
						'hide' => array(
							'mkdf_paspartu_meta'  => array('','no')
						)
					)
				)
			);
		
				overton_mikado_create_meta_box_field(
					array(
						'name'        => 'mkdf_paspartu_color_meta',
						'type'        => 'color',
						'label'       => esc_html__( 'Passepartout Color', 'overton' ),
						'description' => esc_html__( 'Choose passepartout color, default value is #ffffff', 'overton' ),
						'parent'      => $paspartu_container_meta
					)
				);
				
				overton_mikado_create_meta_box_field(
					array(
						'name'        => 'mkdf_paspartu_width_meta',
						'type'        => 'text',
						'label'       => esc_html__( 'Passepartout Size', 'overton' ),
						'description' => esc_html__( 'Enter size amount for passepartout', 'overton' ),
						'parent'      => $paspartu_container_meta,
						'args'        => array(
							'col_width' => 2,
							'suffix'    => 'px or %'
						)
					)
				);
		
				overton_mikado_create_meta_box_field(
					array(
						'name'        => 'mkdf_paspartu_responsive_width_meta',
						'type'        => 'text',
						'label'       => esc_html__( 'Responsive Passepartout Size', 'overton' ),
						'description' => esc_html__( 'Enter size amount for passepartout for smaller screens (tablets and mobiles view)', 'overton' ),
						'parent'      => $paspartu_container_meta,
						'args'        => array(
							'col_width' => 2,
							'suffix'    => 'px or %'
						)
					)
				);
				
				overton_mikado_create_meta_box_field(
					array(
						'parent'        => $paspartu_container_meta,
						'type'          => 'select',
						'default_value' => '',
						'name'          => 'mkdf_disable_top_paspartu_meta',
						'label'         => esc_html__( 'Disable Top Passepartout', 'overton' ),
						'options'       => overton_mikado_get_yes_no_select_array(),
					)
				);
		
				overton_mikado_create_meta_box_field(
					array(
						'parent'        => $paspartu_container_meta,
						'type'          => 'select',
						'default_value' => '',
						'name'          => 'mkdf_enable_fixed_paspartu_meta',
						'label'         => esc_html__( 'Enable Fixed Passepartout', 'overton' ),
						'description'   => esc_html__( 'Enabling this option will set fixed passepartout for your screens', 'overton' ),
						'options'       => overton_mikado_get_yes_no_select_array(),
					)
				);
		
		/***************** Passepartout Layout - end **********************/
		
		/***************** Smooth Page Transitions Layout - begin **********************/
		
		overton_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_smooth_page_transitions_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Smooth Page Transitions', 'overton' ),
				'description'   => esc_html__( 'Enabling this option will perform a smooth transition between pages when clicking on links', 'overton' ),
				'parent'        => $general_meta_box,
				'options'       => overton_mikado_get_yes_no_select_array()
			)
		);
		
			$page_transitions_container_meta = overton_mikado_add_admin_container(
				array(
					'parent'     => $general_meta_box,
					'name'       => 'page_transitions_container_meta',
					'dependency' => array(
						'hide' => array(
							'mkdf_smooth_page_transitions_meta' => array( '', 'no' )
						)
					)
				)
			);
		
				overton_mikado_create_meta_box_field(
					array(
						'name'        => 'mkdf_page_transition_preloader_meta',
						'type'        => 'select',
						'label'       => esc_html__( 'Enable Preloading Animation', 'overton' ),
						'description' => esc_html__( 'Enabling this option will display an animated preloader while the page content is loading', 'overton' ),
						'parent'      => $page_transitions_container_meta,
						'options'     => overton_mikado_get_yes_no_select_array()
					)
				);
		
				$page_transition_preloader_container_meta = overton_mikado_add_admin_container(
					array(
						'parent'     => $page_transitions_container_meta,
						'name'       => 'page_transition_preloader_container_meta',
						'dependency' => array(
							'hide' => array(
								'mkdf_page_transition_preloader_meta' => array( '', 'no' )
							)
						)
					)
				);
				
					overton_mikado_create_meta_box_field(
						array(
							'name'   => 'mkdf_smooth_pt_bgnd_color_meta',
							'type'   => 'color',
							'label'  => esc_html__( 'Page Loader Background Color', 'overton' ),
							'parent' => $page_transition_preloader_container_meta
						)
					);
					
					$group_pt_spinner_animation_meta = overton_mikado_add_admin_group(
						array(
							'name'        => 'group_pt_spinner_animation_meta',
							'title'       => esc_html__( 'Loader Style', 'overton' ),
							'description' => esc_html__( 'Define styles for loader spinner animation', 'overton' ),
							'parent'      => $page_transition_preloader_container_meta
						)
					);
					
					$row_pt_spinner_animation_meta = overton_mikado_add_admin_row(
						array(
							'name'   => 'row_pt_spinner_animation_meta',
							'parent' => $group_pt_spinner_animation_meta
						)
					);
					
					overton_mikado_create_meta_box_field(
						array(
							'type'    => 'selectsimple',
							'name'    => 'mkdf_smooth_pt_spinner_type_meta',
							'label'   => esc_html__( 'Spinner Type', 'overton' ),
							'parent'  => $row_pt_spinner_animation_meta,
							'options' => array(
								''                      => esc_html__( 'Default', 'overton' ),
								'overton_spinner'       => esc_html__( 'Overton Spinner', 'overton' ),
								'rotate_circles'        => esc_html__( 'Rotate Circles', 'overton' ),
								'pulse'                 => esc_html__( 'Pulse', 'overton' ),
								'double_pulse'          => esc_html__( 'Double Pulse', 'overton' ),
								'cube'                  => esc_html__( 'Cube', 'overton' ),
								'rotating_cubes'        => esc_html__( 'Rotating Cubes', 'overton' ),
								'stripes'               => esc_html__( 'Stripes', 'overton' ),
								'wave'                  => esc_html__( 'Wave', 'overton' ),
								'two_rotating_circles'  => esc_html__( '2 Rotating Circles', 'overton' ),
								'five_rotating_circles' => esc_html__( '5 Rotating Circles', 'overton' ),
								'atom'                  => esc_html__( 'Atom', 'overton' ),
								'clock'                 => esc_html__( 'Clock', 'overton' ),
								'mitosis'               => esc_html__( 'Mitosis', 'overton' ),
								'lines'                 => esc_html__( 'Lines', 'overton' ),
								'fussion'               => esc_html__( 'Fussion', 'overton' ),
								'wave_circles'          => esc_html__( 'Wave Circles', 'overton' ),
								'pulse_circles'         => esc_html__( 'Pulse Circles', 'overton' )
							)
						)
					);
					
					overton_mikado_create_meta_box_field(
						array(
							'type'   => 'colorsimple',
							'name'   => 'mkdf_smooth_pt_spinner_color_meta',
							'label'  => esc_html__( 'Spinner Color', 'overton' ),
							'parent' => $row_pt_spinner_animation_meta
						)
					);
					
					overton_mikado_create_meta_box_field(
						array(
							'name'        => 'mkdf_page_transition_fadeout_meta',
							'type'        => 'select',
							'label'       => esc_html__( 'Enable Fade Out Animation', 'overton' ),
							'description' => esc_html__( 'Enabling this option will turn on fade out animation when leaving page', 'overton' ),
							'options'     => overton_mikado_get_yes_no_select_array(),
							'parent'      => $page_transitions_container_meta
						
						)
					);
		
		/***************** Smooth Page Transitions Layout - end **********************/
		
		/***************** Comments Layout - begin **********************/
		
		overton_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_page_comments_meta',
				'type'        => 'select',
				'label'       => esc_html__( 'Show Comments', 'overton' ),
				'description' => esc_html__( 'Enabling this option will show comments on your page', 'overton' ),
				'parent'      => $general_meta_box,
				'options'     => overton_mikado_get_yes_no_select_array()
			)
		);
		
		/***************** Comments Layout - end **********************/
	}
	
	add_action( 'overton_mikado_action_meta_boxes_map', 'overton_mikado_map_general_meta', 10 );
}

if ( ! function_exists( 'overton_mikado_container_background_style' ) ) {
	/**
	 * Function that return container style
	 */
	function overton_mikado_container_background_style( $style ) {
		$page_id      = overton_mikado_get_page_id();
		$class_prefix = overton_mikado_get_unique_page_class( $page_id, true );
		
		$container_selector = array(
			$class_prefix . ' .mkdf-content'
		);
		
		$container_class        = array();
		$page_background_color  = get_post_meta( $page_id, 'mkdf_page_background_color_meta', true );
		$page_background_image  = get_post_meta( $page_id, 'mkdf_page_background_image_meta', true );
		$page_background_repeat = get_post_meta( $page_id, 'mkdf_page_background_repeat_meta', true );
		
		if ( ! empty( $page_background_color ) ) {
			$container_class['background-color'] = $page_background_color;
		}
		
		if ( ! empty( $page_background_image ) ) {
			$container_class['background-image'] = 'url(' . esc_url( $page_background_image ) . ')';
			
			if ( $page_background_repeat === 'yes' ) {
				$container_class['background-repeat']   = 'repeat';
				$container_class['background-position'] = '0 0';
			} else {
				$container_class['background-repeat']   = 'no-repeat';
				$container_class['background-position'] = 'center 0';
				$container_class['background-size']     = 'cover';
			}
		}
		
		$current_style = overton_mikado_dynamic_css( $container_selector, $container_class );
		$current_style = $current_style . $style;
		
		return $current_style;
	}
	
	add_filter( 'overton_mikado_filter_add_page_custom_style', 'overton_mikado_container_background_style' );
}