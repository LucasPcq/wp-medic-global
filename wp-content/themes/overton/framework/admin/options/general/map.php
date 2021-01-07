<?php

if ( ! function_exists( 'overton_mikado_general_options_map' ) ) {
	/**
	 * General options page
	 */
	function overton_mikado_general_options_map() {
		
		overton_mikado_add_admin_page(
			array(
				'slug'  => '',
				'title' => esc_html__( 'General', 'overton' ),
				'icon'  => 'fa fa-institution'
			)
		);
		
		$panel_design_style = overton_mikado_add_admin_panel(
			array(
				'page'  => '',
				'name'  => 'panel_design_style',
				'title' => esc_html__( 'Design Style', 'overton' )
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'name'          => 'google_fonts',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Google Font Family', 'overton' ),
				'description'   => esc_html__( 'Choose a default Google font for your site', 'overton' ),
				'parent'        => $panel_design_style
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'name'          => 'additional_google_fonts',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Additional Google Fonts', 'overton' ),
				'parent'        => $panel_design_style
			)
		);
		
		$additional_google_fonts_container = overton_mikado_add_admin_container(
			array(
				'parent'          => $panel_design_style,
				'name'            => 'additional_google_fonts_container',
				'dependency' => array(
					'show' => array(
						'additional_google_fonts'  => 'yes'
					)
				)
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'name'          => 'additional_google_font1',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'overton' ),
				'description'   => esc_html__( 'Choose additional Google font for your site', 'overton' ),
				'parent'        => $additional_google_fonts_container
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'name'          => 'additional_google_font2',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'overton' ),
				'description'   => esc_html__( 'Choose additional Google font for your site', 'overton' ),
				'parent'        => $additional_google_fonts_container
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'name'          => 'additional_google_font3',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'overton' ),
				'description'   => esc_html__( 'Choose additional Google font for your site', 'overton' ),
				'parent'        => $additional_google_fonts_container
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'name'          => 'additional_google_font4',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'overton' ),
				'description'   => esc_html__( 'Choose additional Google font for your site', 'overton' ),
				'parent'        => $additional_google_fonts_container
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'name'          => 'additional_google_font5',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'overton' ),
				'description'   => esc_html__( 'Choose additional Google font for your site', 'overton' ),
				'parent'        => $additional_google_fonts_container
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'name'          => 'google_font_weight',
				'type'          => 'checkboxgroup',
				'default_value' => '',
				'label'         => esc_html__( 'Google Fonts Style & Weight', 'overton' ),
				'description'   => esc_html__( 'Choose a default Google font weights for your site. Impact on page load time', 'overton' ),
				'parent'        => $panel_design_style,
				'options'       => array(
					'100'  => esc_html__( '100 Thin', 'overton' ),
					'100i' => esc_html__( '100 Thin Italic', 'overton' ),
					'200'  => esc_html__( '200 Extra-Light', 'overton' ),
					'200i' => esc_html__( '200 Extra-Light Italic', 'overton' ),
					'300'  => esc_html__( '300 Light', 'overton' ),
					'300i' => esc_html__( '300 Light Italic', 'overton' ),
					'400'  => esc_html__( '400 Regular', 'overton' ),
					'400i' => esc_html__( '400 Regular Italic', 'overton' ),
					'500'  => esc_html__( '500 Medium', 'overton' ),
					'500i' => esc_html__( '500 Medium Italic', 'overton' ),
					'600'  => esc_html__( '600 Semi-Bold', 'overton' ),
					'600i' => esc_html__( '600 Semi-Bold Italic', 'overton' ),
					'700'  => esc_html__( '700 Bold', 'overton' ),
					'700i' => esc_html__( '700 Bold Italic', 'overton' ),
					'800'  => esc_html__( '800 Extra-Bold', 'overton' ),
					'800i' => esc_html__( '800 Extra-Bold Italic', 'overton' ),
					'900'  => esc_html__( '900 Ultra-Bold', 'overton' ),
					'900i' => esc_html__( '900 Ultra-Bold Italic', 'overton' )
				)
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'name'          => 'google_font_subset',
				'type'          => 'checkboxgroup',
				'default_value' => '',
				'label'         => esc_html__( 'Google Fonts Subset', 'overton' ),
				'description'   => esc_html__( 'Choose a default Google font subsets for your site', 'overton' ),
				'parent'        => $panel_design_style,
				'options'       => array(
					'latin'        => esc_html__( 'Latin', 'overton' ),
					'latin-ext'    => esc_html__( 'Latin Extended', 'overton' ),
					'cyrillic'     => esc_html__( 'Cyrillic', 'overton' ),
					'cyrillic-ext' => esc_html__( 'Cyrillic Extended', 'overton' ),
					'greek'        => esc_html__( 'Greek', 'overton' ),
					'greek-ext'    => esc_html__( 'Greek Extended', 'overton' ),
					'vietnamese'   => esc_html__( 'Vietnamese', 'overton' )
				)
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'name'        => 'first_color',
				'type'        => 'color',
				'label'       => esc_html__( 'First Main Color', 'overton' ),
				'description' => esc_html__( 'Choose the most dominant theme color. Default color is #00bbb3', 'overton' ),
				'parent'      => $panel_design_style
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'name'        => 'page_background_color',
				'type'        => 'color',
				'label'       => esc_html__( 'Page Background Color', 'overton' ),
				'description' => esc_html__( 'Choose the background color for page content. Default color is #ffffff', 'overton' ),
				'parent'      => $panel_design_style
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'name'        => 'page_background_image',
				'type'        => 'image',
				'label'       => esc_html__( 'Page Background Image', 'overton' ),
				'description' => esc_html__( 'Choose the background image for page content', 'overton' ),
				'parent'      => $panel_design_style
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'name'          => 'page_background_image_repeat',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Page Background Image Repeat', 'overton' ),
				'description'   => esc_html__( 'Enabling this option will set the background image as a repeating pattern throughout the page, otherwise the image will appear as the cover background image', 'overton' ),
				'parent'        => $panel_design_style
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'name'        => 'selection_color',
				'type'        => 'color',
				'label'       => esc_html__( 'Text Selection Color', 'overton' ),
				'description' => esc_html__( 'Choose the color users see when selecting text', 'overton' ),
				'parent'      => $panel_design_style
			)
		);
		
		/***************** Passepartout Layout - begin **********************/
		
		overton_mikado_add_admin_field(
			array(
				'name'          => 'boxed',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Boxed Layout', 'overton' ),
				'parent'        => $panel_design_style
			)
		);
		
			$boxed_container = overton_mikado_add_admin_container(
				array(
					'parent'          => $panel_design_style,
					'name'            => 'boxed_container',
					'dependency' => array(
						'show' => array(
							'boxed'  => 'yes'
						)
					)
				)
			);
		
				overton_mikado_add_admin_field(
					array(
						'name'        => 'page_background_color_in_box',
						'type'        => 'color',
						'label'       => esc_html__( 'Page Background Color', 'overton' ),
						'description' => esc_html__( 'Choose the page background color outside box', 'overton' ),
						'parent'      => $boxed_container
					)
				);
				
				overton_mikado_add_admin_field(
					array(
						'name'        => 'boxed_background_image',
						'type'        => 'image',
						'label'       => esc_html__( 'Background Image', 'overton' ),
						'description' => esc_html__( 'Choose an image to be displayed in background', 'overton' ),
						'parent'      => $boxed_container
					)
				);
				
				overton_mikado_add_admin_field(
					array(
						'name'        => 'boxed_pattern_background_image',
						'type'        => 'image',
						'label'       => esc_html__( 'Background Pattern', 'overton' ),
						'description' => esc_html__( 'Choose an image to be used as background pattern', 'overton' ),
						'parent'      => $boxed_container
					)
				);
				
				overton_mikado_add_admin_field(
					array(
						'name'          => 'boxed_background_image_attachment',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Background Image Attachment', 'overton' ),
						'description'   => esc_html__( 'Choose background image attachment', 'overton' ),
						'parent'        => $boxed_container,
						'options'       => array(
							''       => esc_html__( 'Default', 'overton' ),
							'fixed'  => esc_html__( 'Fixed', 'overton' ),
							'scroll' => esc_html__( 'Scroll', 'overton' )
						)
					)
				);
		
		/***************** Boxed Layout - end **********************/
		
		/***************** Passepartout Layout - begin **********************/
		
		overton_mikado_add_admin_field(
			array(
				'name'          => 'paspartu',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Passepartout', 'overton' ),
				'description'   => esc_html__( 'Enabling this option will display passepartout around site content', 'overton' ),
				'parent'        => $panel_design_style
			)
		);
		
			$paspartu_container = overton_mikado_add_admin_container(
				array(
					'parent'          => $panel_design_style,
					'name'            => 'paspartu_container',
					'dependency' => array(
						'show' => array(
							'paspartu'  => 'yes'
						)
					)
				)
			);
		
				overton_mikado_add_admin_field(
					array(
						'name'        => 'paspartu_color',
						'type'        => 'color',
						'label'       => esc_html__( 'Passepartout Color', 'overton' ),
						'description' => esc_html__( 'Choose passepartout color, default value is #ffffff', 'overton' ),
						'parent'      => $paspartu_container
					)
				);
				
				overton_mikado_add_admin_field(
					array(
						'name'        => 'paspartu_width',
						'type'        => 'text',
						'label'       => esc_html__( 'Passepartout Size', 'overton' ),
						'description' => esc_html__( 'Enter size amount for passepartout', 'overton' ),
						'parent'      => $paspartu_container,
						'args'        => array(
							'col_width' => 2,
							'suffix'    => 'px or %'
						)
					)
				);
		
				overton_mikado_add_admin_field(
					array(
						'name'        => 'paspartu_responsive_width',
						'type'        => 'text',
						'label'       => esc_html__( 'Responsive Passepartout Size', 'overton' ),
						'description' => esc_html__( 'Enter size amount for passepartout for smaller screens (tablets and mobiles view)', 'overton' ),
						'parent'      => $paspartu_container,
						'args'        => array(
							'col_width' => 2,
							'suffix'    => 'px or %'
						)
					)
				);
				
				overton_mikado_add_admin_field(
					array(
						'parent'        => $paspartu_container,
						'type'          => 'yesno',
						'default_value' => 'no',
						'name'          => 'disable_top_paspartu',
						'label'         => esc_html__( 'Disable Top Passepartout', 'overton' )
					)
				);
		
				overton_mikado_add_admin_field(
					array(
						'parent'        => $paspartu_container,
						'type'          => 'yesno',
						'default_value' => 'no',
						'name'          => 'enable_fixed_paspartu',
						'label'         => esc_html__( 'Enable Fixed Passepartout', 'overton' ),
						'description' => esc_html__( 'Enabling this option will set fixed passepartout for your screens', 'overton' )
					)
				);
		
		/***************** Passepartout Layout - end **********************/
		
		/***************** Content Layout - begin **********************/
		
		overton_mikado_add_admin_field(
			array(
				'name'          => 'initial_content_width',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Initial Width of Content', 'overton' ),
				'description'   => esc_html__( 'Choose the initial width of content which is in grid (Applies to pages set to "Default Template" and rows set to "In Grid")', 'overton' ),
				'parent'        => $panel_design_style,
				'options'       => array(
					'mkdf-grid-1100' => esc_html__( '1100px - default', 'overton' ),
					'mkdf-grid-1300' => esc_html__( '1300px', 'overton' ),
					'mkdf-grid-1200' => esc_html__( '1200px', 'overton' ),
					'mkdf-grid-1000' => esc_html__( '1000px', 'overton' ),
					'mkdf-grid-800'  => esc_html__( '800px', 'overton' )
				)
			)
		);

        overton_mikado_add_admin_field(
            array(
                'name'          => 'content_grid_lines',
                'type'          => 'yesno',
                'default_value' => 'no',
                'label'         => esc_html__( 'Display lines in contentn background', 'overton' ),
                'parent'        => $panel_design_style
            )
        );
		
		overton_mikado_add_admin_field(
			array(
				'name'          => 'preload_pattern_image',
				'type'          => 'image',
				'label'         => esc_html__( 'Preload Pattern Image', 'overton' ),
				'description'   => esc_html__( 'Choose preload pattern image to be displayed until images are loaded', 'overton' ),
				'parent'        => $panel_design_style
			)
		);
		
		/***************** Content Layout - end **********************/
		
		$panel_settings = overton_mikado_add_admin_panel(
			array(
				'page'  => '',
				'name'  => 'panel_settings',
				'title' => esc_html__( 'Settings', 'overton' )
			)
		);
		
		/***************** Smooth Scroll Layout - begin **********************/
		
		overton_mikado_add_admin_field(
			array(
				'name'          => 'page_smooth_scroll',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Smooth Scroll', 'overton' ),
				'description'   => esc_html__( 'Enabling this option will perform a smooth scrolling effect on every page (except on Mac and touch devices)', 'overton' ),
				'parent'        => $panel_settings
			)
		);
		
		/***************** Smooth Scroll Layout - end **********************/
		
		/***************** Smooth Page Transitions Layout - begin **********************/
		
		overton_mikado_add_admin_field(
			array(
				'name'          => 'smooth_page_transitions',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Smooth Page Transitions', 'overton' ),
				'description'   => esc_html__( 'Enabling this option will perform a smooth transition between pages when clicking on links', 'overton' ),
				'parent'        => $panel_settings
			)
		);
		
			$page_transitions_container = overton_mikado_add_admin_container(
				array(
					'parent'          => $panel_settings,
					'name'            => 'page_transitions_container',
					'dependency' => array(
						'show' => array(
							'smooth_page_transitions'  => 'yes'
						)
					)
				)
			);
		
				overton_mikado_add_admin_field(
					array(
						'name'          => 'page_transition_preloader',
						'type'          => 'yesno',
						'default_value' => 'no',
						'label'         => esc_html__( 'Enable Preloading Animation', 'overton' ),
						'description'   => esc_html__( 'Enabling this option will display an animated preloader while the page content is loading', 'overton' ),
						'parent'        => $page_transitions_container
					)
				);
				
				$page_transition_preloader_container = overton_mikado_add_admin_container(
					array(
						'parent'          => $page_transitions_container,
						'name'            => 'page_transition_preloader_container',
						'dependency' => array(
							'show' => array(
								'page_transition_preloader'  => 'yes'
							)
						)
					)
				);
				
					overton_mikado_add_admin_field(
						array(
							'name'   => 'smooth_pt_bgnd_color',
							'type'   => 'color',
							'label'  => esc_html__( 'Page Loader Background Color', 'overton' ),
							'parent' => $page_transition_preloader_container
						)
					);
					
					$group_pt_spinner_animation = overton_mikado_add_admin_group(
						array(
							'name'        => 'group_pt_spinner_animation',
							'title'       => esc_html__( 'Loader Style', 'overton' ),
							'description' => esc_html__( 'Define styles for loader spinner animation', 'overton' ),
							'parent'      => $page_transition_preloader_container
						)
					);
					
					$row_pt_spinner_animation = overton_mikado_add_admin_row(
						array(
							'name'   => 'row_pt_spinner_animation',
							'parent' => $group_pt_spinner_animation
						)
					);
					
					overton_mikado_add_admin_field(
						array(
							'type'          => 'selectsimple',
							'name'          => 'smooth_pt_spinner_type',
							'default_value' => '',
							'label'         => esc_html__( 'Spinner Type', 'overton' ),
							'parent'        => $row_pt_spinner_animation,
							'options'       => array(
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
					
					overton_mikado_add_admin_field(
						array(
							'type'          => 'colorsimple',
							'name'          => 'smooth_pt_spinner_color',
							'default_value' => '',
							'label'         => esc_html__( 'Spinner Color', 'overton' ),
							'parent'        => $row_pt_spinner_animation
						)
					);
					
					overton_mikado_add_admin_field(
						array(
							'name'          => 'page_transition_fadeout',
							'type'          => 'yesno',
							'default_value' => 'no',
							'label'         => esc_html__( 'Enable Fade Out Animation', 'overton' ),
							'description'   => esc_html__( 'Enabling this option will turn on fade out animation when leaving page', 'overton' ),
							'parent'        => $page_transitions_container
						)
					);
		
		/***************** Smooth Page Transitions Layout - end **********************/
		
		overton_mikado_add_admin_field(
			array(
				'name'          => 'show_back_button',
				'type'          => 'yesno',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Show "Back To Top Button"', 'overton' ),
				'description'   => esc_html__( 'Enabling this option will display a Back to Top button on every page', 'overton' ),
				'parent'        => $panel_settings
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'name'          => 'responsiveness',
				'type'          => 'yesno',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Responsiveness', 'overton' ),
				'description'   => esc_html__( 'Enabling this option will make all pages responsive', 'overton' ),
				'parent'        => $panel_settings
			)
		);
		
		$panel_custom_code = overton_mikado_add_admin_panel(
			array(
				'page'  => '',
				'name'  => 'panel_custom_code',
				'title' => esc_html__( 'Custom Code', 'overton' )
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'name'        => 'custom_js',
				'type'        => 'textarea',
				'label'       => esc_html__( 'Custom JS', 'overton' ),
				'description' => esc_html__( 'Enter your custom Javascript here', 'overton' ),
				'parent'      => $panel_custom_code
			)
		);
		
		$panel_google_api = overton_mikado_add_admin_panel(
			array(
				'page'  => '',
				'name'  => 'panel_google_api',
				'title' => esc_html__( 'Google API', 'overton' )
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'name'        => 'google_maps_api_key',
				'type'        => 'text',
				'label'       => esc_html__( 'Google Maps Api Key', 'overton' ),
				'description' => esc_html__( 'Insert your Google Maps API key here. For instructions on how to create a Google Maps API key, please refer to our to our documentation.', 'overton' ),
				'parent'      => $panel_google_api
			)
		);
	}
	
	add_action( 'overton_mikado_action_options_map', 'overton_mikado_general_options_map', overton_mikado_set_options_map_position( 'general' ) );
}

if ( ! function_exists( 'overton_mikado_page_general_style' ) ) {
	/**
	 * Function that prints page general inline styles
	 */
	function overton_mikado_page_general_style( $style ) {
		$current_style = '';
		$page_id       = overton_mikado_get_page_id();
		$class_prefix  = overton_mikado_get_unique_page_class( $page_id );
		
		$boxed_background_style = array();
		
		$boxed_page_background_color = overton_mikado_get_meta_field_intersect( 'page_background_color_in_box', $page_id );
		if ( ! empty( $boxed_page_background_color ) ) {
			$boxed_background_style['background-color'] = $boxed_page_background_color;
		}
		
		$boxed_page_background_image = overton_mikado_get_meta_field_intersect( 'boxed_background_image', $page_id );
		if ( ! empty( $boxed_page_background_image ) ) {
			$boxed_background_style['background-image']    = 'url(' . esc_url( $boxed_page_background_image ) . ')';
			$boxed_background_style['background-position'] = 'center 0px';
			$boxed_background_style['background-repeat']   = 'no-repeat';
		}
		
		$boxed_page_background_pattern_image = overton_mikado_get_meta_field_intersect( 'boxed_pattern_background_image', $page_id );
		if ( ! empty( $boxed_page_background_pattern_image ) ) {
			$boxed_background_style['background-image']    = 'url(' . esc_url( $boxed_page_background_pattern_image ) . ')';
			$boxed_background_style['background-position'] = '0px 0px';
			$boxed_background_style['background-repeat']   = 'repeat';
		}
		
		$boxed_page_background_attachment = overton_mikado_get_meta_field_intersect( 'boxed_background_image_attachment', $page_id );
		if ( ! empty( $boxed_page_background_attachment ) ) {
			$boxed_background_style['background-attachment'] = $boxed_page_background_attachment;
		}
		
		$boxed_background_selector = $class_prefix . '.mkdf-boxed .mkdf-wrapper';
		
		if ( ! empty( $boxed_background_style ) ) {
			$current_style .= overton_mikado_dynamic_css( $boxed_background_selector, $boxed_background_style );
		}
		
		$paspartu_style     = array();
		$paspartu_res_style = array();
		$paspartu_res_start = '@media only screen and (max-width: 1024px) {';
		$paspartu_res_end   = '}';
		
		$paspartu_header_selector                = array(
			'.mkdf-paspartu-enabled .mkdf-page-header .mkdf-fixed-wrapper.fixed',
			'.mkdf-paspartu-enabled .mkdf-sticky-header',
			'.mkdf-paspartu-enabled .mkdf-mobile-header.mobile-header-appear .mkdf-mobile-header-inner'
		);
		$paspartu_header_appear_selector         = array(
			'.mkdf-paspartu-enabled.mkdf-fixed-paspartu-enabled .mkdf-page-header .mkdf-fixed-wrapper.fixed',
			'.mkdf-paspartu-enabled.mkdf-fixed-paspartu-enabled .mkdf-sticky-header.header-appear',
			'.mkdf-paspartu-enabled.mkdf-fixed-paspartu-enabled .mkdf-mobile-header.mobile-header-appear .mkdf-mobile-header-inner'
		);
		
		$paspartu_header_style                   = array();
		$paspartu_header_appear_style            = array();
		$paspartu_header_responsive_style        = array();
		$paspartu_header_appear_responsive_style = array();
		
		$paspartu_color = overton_mikado_get_meta_field_intersect( 'paspartu_color', $page_id );
		if ( ! empty( $paspartu_color ) ) {
			$paspartu_style['background-color'] = $paspartu_color;
		}
		
		$paspartu_width = overton_mikado_get_meta_field_intersect( 'paspartu_width', $page_id );
		if ( $paspartu_width !== '' ) {
			if ( overton_mikado_string_ends_with( $paspartu_width, '%' ) || overton_mikado_string_ends_with( $paspartu_width, 'px' ) ) {
				$paspartu_style['padding'] = $paspartu_width;
				
				$paspartu_clean_width      = overton_mikado_string_ends_with( $paspartu_width, '%' ) ? overton_mikado_filter_suffix( $paspartu_width, '%' ) : overton_mikado_filter_suffix( $paspartu_width, 'px' );
				$paspartu_clean_width_mark = overton_mikado_string_ends_with( $paspartu_width, '%' ) ? '%' : 'px';
				
				$paspartu_header_style['left']              = $paspartu_width;
				$paspartu_header_style['width']             = 'calc(100% - ' . ( 2 * $paspartu_clean_width ) . $paspartu_clean_width_mark . ')';
				$paspartu_header_appear_style['margin-top'] = $paspartu_width;
			} else {
				$paspartu_style['padding'] = $paspartu_width . 'px';
				
				$paspartu_header_style['left']              = $paspartu_width . 'px';
				$paspartu_header_style['width']             = 'calc(100% - ' . ( 2 * $paspartu_width ) . 'px)';
				$paspartu_header_appear_style['margin-top'] = $paspartu_width . 'px';
			}
		}
		
		$paspartu_selector = $class_prefix . '.mkdf-paspartu-enabled .mkdf-wrapper';
		
		if ( ! empty( $paspartu_style ) ) {
			$current_style .= overton_mikado_dynamic_css( $paspartu_selector, $paspartu_style );
		}
		
		if ( ! empty( $paspartu_header_style ) ) {
			$current_style .= overton_mikado_dynamic_css( $paspartu_header_selector, $paspartu_header_style );
			$current_style .= overton_mikado_dynamic_css( $paspartu_header_appear_selector, $paspartu_header_appear_style );
		}
		
		$paspartu_responsive_width = overton_mikado_get_meta_field_intersect( 'paspartu_responsive_width', $page_id );
		if ( $paspartu_responsive_width !== '' ) {
			if ( overton_mikado_string_ends_with( $paspartu_responsive_width, '%' ) || overton_mikado_string_ends_with( $paspartu_responsive_width, 'px' ) ) {
				$paspartu_res_style['padding'] = $paspartu_responsive_width;
				
				$paspartu_clean_width      = overton_mikado_string_ends_with( $paspartu_responsive_width, '%' ) ? overton_mikado_filter_suffix( $paspartu_responsive_width, '%' ) : overton_mikado_filter_suffix( $paspartu_responsive_width, 'px' );
				$paspartu_clean_width_mark = overton_mikado_string_ends_with( $paspartu_responsive_width, '%' ) ? '%' : 'px';
				
				$paspartu_header_responsive_style['left']              = $paspartu_responsive_width;
				$paspartu_header_responsive_style['width']             = 'calc(100% - ' . ( 2 * $paspartu_clean_width ) . $paspartu_clean_width_mark . ')';
				$paspartu_header_appear_responsive_style['margin-top'] = $paspartu_responsive_width;
			} else {
				$paspartu_res_style['padding'] = $paspartu_responsive_width . 'px';
				
				$paspartu_header_responsive_style['left']              = $paspartu_responsive_width . 'px';
				$paspartu_header_responsive_style['width']             = 'calc(100% - ' . ( 2 * $paspartu_responsive_width ) . 'px)';
				$paspartu_header_appear_responsive_style['margin-top'] = $paspartu_responsive_width . 'px';
			}
		}
		
		if ( ! empty( $paspartu_res_style ) ) {
			$current_style .= $paspartu_res_start . overton_mikado_dynamic_css( $paspartu_selector, $paspartu_res_style ) . $paspartu_res_end;
		}
		
		if ( ! empty( $paspartu_header_responsive_style ) ) {
			$current_style .= $paspartu_res_start . overton_mikado_dynamic_css( $paspartu_header_selector, $paspartu_header_responsive_style ) . $paspartu_res_end;
			$current_style .= $paspartu_res_start . overton_mikado_dynamic_css( $paspartu_header_appear_selector, $paspartu_header_appear_responsive_style ) . $paspartu_res_end;
		}
		
		$current_style = $current_style . $style;
		
		return $current_style;
	}
	
	add_filter( 'overton_mikado_filter_add_page_custom_style', 'overton_mikado_page_general_style' );
}