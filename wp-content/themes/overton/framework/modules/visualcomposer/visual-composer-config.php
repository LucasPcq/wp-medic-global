<?php

/**
 * Force Visual Composer to initialize as "built into the theme". This will hide certain tabs under the Settings->Visual Composer page
 */
if ( function_exists( 'vc_set_as_theme' ) ) {
	vc_set_as_theme( true );
}

/**
 * Change path for overridden templates
 */
if ( function_exists( 'vc_set_shortcodes_templates_dir' ) ) {
	$dir = MIKADO_ROOT_DIR . '/vc-templates';
	vc_set_shortcodes_templates_dir( $dir );
}

if ( ! function_exists( 'overton_mikado_configure_visual_composer_frontend_editor' ) ) {
	/**
	 * Configuration for Visual Composer FrontEnd Editor
	 * Hooks on vc_after_init action
	 */
	function overton_mikado_configure_visual_composer_frontend_editor() {
		/**
		 * Remove frontend editor
		 */
		if ( function_exists( 'vc_disable_frontend' ) ) {
			vc_disable_frontend();
		}
	}
	
	add_action( 'vc_after_init', 'overton_mikado_configure_visual_composer_frontend_editor' );
}

if ( ! function_exists( 'overton_mikado_vc_row_map' ) ) {
	/**
	 * Map VC Row shortcode
	 * Hooks on vc_after_init action
	 */
	function overton_mikado_vc_row_map() {
		
		/******* VC Row shortcode - begin *******/
		
		vc_add_param( 'vc_row',
			array(
				'type'       => 'dropdown',
				'param_name' => 'row_content_width',
				'heading'    => esc_html__( 'Mikado Row Content Width', 'overton' ),
				'value'      => array(
					esc_html__( 'Full Width', 'overton' ) => 'full-width',
					esc_html__( 'In Grid', 'overton' )    => 'grid'
				),
				'group'      => esc_html__( 'Mikado Settings', 'overton' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'        => 'textfield',
				'param_name'  => 'anchor',
				'heading'     => esc_html__( 'Mikado Anchor ID', 'overton' ),
				'description' => esc_html__( 'For example "home"', 'overton' ),
				'group'       => esc_html__( 'Mikado Settings', 'overton' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'       => 'colorpicker',
				'param_name' => 'simple_background_color',
				'heading'    => esc_html__( 'Mikado Background Color', 'overton' ),
				'group'      => esc_html__( 'Mikado Settings', 'overton' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'       => 'attach_image',
				'param_name' => 'simple_background_image',
				'heading'    => esc_html__( 'Mikado Background Image', 'overton' ),
				'group'      => esc_html__( 'Mikado Settings', 'overton' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'        => 'textfield',
				'param_name'  => 'background_image_position',
				'heading'     => esc_html__( 'Mikado Background Position', 'overton' ),
				'description' => esc_html__( 'Set the starting position of a background image, default value is top left', 'overton' ),
				'dependency'  => array( 'element' => 'simple_background_image', 'not_empty' => true ),
				'group'       => esc_html__( 'Mikado Settings', 'overton' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'        => 'dropdown',
				'param_name'  => 'disable_background_image',
				'heading'     => esc_html__( 'Mikado Disable Background Image', 'overton' ),
				'value'       => array(
					esc_html__( 'Never', 'overton' )        => '',
					esc_html__( 'Below 1280px', 'overton' ) => '1280',
					esc_html__( 'Below 1024px', 'overton' ) => '1024',
					esc_html__( 'Below 768px', 'overton' )  => '768',
					esc_html__( 'Below 680px', 'overton' )  => '680',
					esc_html__( 'Below 480px', 'overton' )  => '480'
				),
				'save_always' => true,
				'description' => esc_html__( 'Choose on which stage you hide row background image', 'overton' ),
				'dependency'  => array( 'element' => 'simple_background_image', 'not_empty' => true ),
				'group'       => esc_html__( 'Mikado Settings', 'overton' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'       => 'attach_image',
				'param_name' => 'parallax_background_image',
				'heading'    => esc_html__( 'Mikado Parallax Background Image', 'overton' ),
				'group'      => esc_html__( 'Mikado Settings', 'overton' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'        => 'textfield',
				'param_name'  => 'parallax_bg_speed',
				'heading'     => esc_html__( 'Mikado Parallax Speed', 'overton' ),
				'description' => esc_html__( 'Set your parallax speed. Default value is 1.', 'overton' ),
				'dependency'  => array( 'element' => 'parallax_background_image', 'not_empty' => true ),
				'group'       => esc_html__( 'Mikado Settings', 'overton' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'       => 'textfield',
				'param_name' => 'parallax_bg_height',
				'heading'    => esc_html__( 'Mikado Parallax Section Height (px)', 'overton' ),
				'dependency' => array( 'element' => 'parallax_background_image', 'not_empty' => true ),
				'group'      => esc_html__( 'Mikado Settings', 'overton' )
			)
		);

        vc_add_param( 'vc_row',
            array(
                'type'        => 'dropdown',
                'param_name'  => 'row_background_lines',
                'heading'     => esc_html__( 'Mikado Row Background Lines', 'overton' ),
                'value'       => array(
                    esc_html__( 'No', 'overton' )        => 'no',
                    esc_html__( 'Yes', 'overton' ) => 'yes',
                ),
                'save_always' => true,
                'description' => esc_html__( 'Display grid lines in row background?', 'overton' ),
                'group'       => esc_html__( 'Mikado Settings', 'overton' )
            )
        );
		
		vc_add_param( 'vc_row',
			array(
				'type'       => 'dropdown',
				'param_name' => 'content_text_aligment',
				'heading'    => esc_html__( 'Mikado Content Aligment', 'overton' ),
				'value'      => array(
					esc_html__( 'Default', 'overton' ) => '',
					esc_html__( 'Left', 'overton' )    => 'left',
					esc_html__( 'Center', 'overton' )  => 'center',
					esc_html__( 'Right', 'overton' )   => 'right'
				),
				'group'      => esc_html__( 'Mikado Settings', 'overton' )
			)
		);
		
		/******* VC Row shortcode - end *******/
		
		/******* VC Row Inner shortcode - begin *******/
		
		vc_add_param( 'vc_row_inner',
			array(
				'type'       => 'dropdown',
				'param_name' => 'row_content_width',
				'heading'    => esc_html__( 'Mikado Row Content Width', 'overton' ),
				'value'      => array(
					esc_html__( 'Full Width', 'overton' ) => 'full-width',
					esc_html__( 'In Grid', 'overton' )    => 'grid'
				),
				'group'      => esc_html__( 'Mikado Settings', 'overton' )
			)
		);
		
		vc_add_param( 'vc_row_inner',
			array(
				'type'       => 'colorpicker',
				'param_name' => 'simple_background_color',
				'heading'    => esc_html__( 'Mikado Background Color', 'overton' ),
				'group'      => esc_html__( 'Mikado Settings', 'overton' )
			)
		);
		
		vc_add_param( 'vc_row_inner',
			array(
				'type'       => 'attach_image',
				'param_name' => 'simple_background_image',
				'heading'    => esc_html__( 'Mikado Background Image', 'overton' ),
				'group'      => esc_html__( 'Mikado Settings', 'overton' )
			)
		);
		
		vc_add_param( 'vc_row_inner',
			array(
				'type'        => 'textfield',
				'param_name'  => 'background_image_position',
				'heading'     => esc_html__( 'Mikado Background Position', 'overton' ),
				'description' => esc_html__( 'Set the starting position of a background image, default value is top left', 'overton' ),
				'dependency'  => array( 'element' => 'simple_background_image', 'not_empty' => true ),
				'group'       => esc_html__( 'Mikado Settings', 'overton' )
			)
		);
		
		vc_add_param( 'vc_row_inner',
			array(
				'type'        => 'dropdown',
				'param_name'  => 'disable_background_image',
				'heading'     => esc_html__( 'Mikado Disable Background Image', 'overton' ),
				'value'       => array(
					esc_html__( 'Never', 'overton' )        => '',
					esc_html__( 'Below 1280px', 'overton' ) => '1280',
					esc_html__( 'Below 1024px', 'overton' ) => '1024',
					esc_html__( 'Below 768px', 'overton' )  => '768',
					esc_html__( 'Below 680px', 'overton' )  => '680',
					esc_html__( 'Below 480px', 'overton' )  => '480'
				),
				'save_always' => true,
				'description' => esc_html__( 'Choose on which stage you hide row background image', 'overton' ),
				'dependency'  => array( 'element' => 'simple_background_image', 'not_empty' => true ),
				'group'       => esc_html__( 'Mikado Settings', 'overton' )
			)
		);
		
		vc_add_param( 'vc_row_inner',
			array(
				'type'       => 'dropdown',
				'param_name' => 'content_text_aligment',
				'heading'    => esc_html__( 'Mikado Content Aligment', 'overton' ),
				'value'      => array(
					esc_html__( 'Default', 'overton' ) => '',
					esc_html__( 'Left', 'overton' )    => 'left',
					esc_html__( 'Center', 'overton' )  => 'center',
					esc_html__( 'Right', 'overton' )   => 'right'
				),
				'group'      => esc_html__( 'Mikado Settings', 'overton' )
			)
		);
		
		/******* VC Row Inner shortcode - end *******/
		
		/******* VC Revolution Slider shortcode - begin *******/
		
		if ( overton_mikado_revolution_slider_installed() ) {
			
			vc_add_param( 'rev_slider_vc',
				array(
					'type'        => 'dropdown',
					'param_name'  => 'enable_paspartu',
					'heading'     => esc_html__( 'Mikado Enable Passepartout', 'overton' ),
					'value'       => array_flip( overton_mikado_get_yes_no_select_array( false ) ),
					'save_always' => true,
					'group'       => esc_html__( 'Mikado Settings', 'overton' )
				)
			);
			
			vc_add_param( 'rev_slider_vc',
				array(
					'type'        => 'dropdown',
					'param_name'  => 'paspartu_size',
					'heading'     => esc_html__( 'Mikado Passepartout Size', 'overton' ),
					'value'       => array(
						esc_html__( 'Tiny', 'overton' )   => 'tiny',
						esc_html__( 'Small', 'overton' )  => 'small',
						esc_html__( 'Normal', 'overton' ) => 'normal',
						esc_html__( 'Large', 'overton' )  => 'large'
					),
					'save_always' => true,
					'dependency'  => array( 'element' => 'enable_paspartu', 'value' => array( 'yes' ) ),
					'group'       => esc_html__( 'Mikado Settings', 'overton' )
				)
			);
			
			vc_add_param( 'rev_slider_vc',
				array(
					'type'        => 'dropdown',
					'param_name'  => 'disable_side_paspartu',
					'heading'     => esc_html__( 'Mikado Disable Side Passepartout', 'overton' ),
					'value'       => array_flip( overton_mikado_get_yes_no_select_array( false ) ),
					'save_always' => true,
					'dependency'  => array( 'element' => 'enable_paspartu', 'value' => array( 'yes' ) ),
					'group'       => esc_html__( 'Mikado Settings', 'overton' )
				)
			);
			
			vc_add_param( 'rev_slider_vc',
				array(
					'type'        => 'dropdown',
					'param_name'  => 'disable_top_paspartu',
					'heading'     => esc_html__( 'Mikado Disable Top Passepartout', 'overton' ),
					'value'       => array_flip( overton_mikado_get_yes_no_select_array( false ) ),
					'save_always' => true,
					'dependency'  => array( 'element' => 'enable_paspartu', 'value' => array( 'yes' ) ),
					'group'       => esc_html__( 'Mikado Settings', 'overton' )
				)
			);
		}
		
		/******* VC Revolution Slider shortcode - end *******/
	}
	
	add_action( 'vc_after_init', 'overton_mikado_vc_row_map' );
}