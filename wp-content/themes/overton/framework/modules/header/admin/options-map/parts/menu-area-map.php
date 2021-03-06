<?php

if ( ! function_exists( 'overton_mikado_get_hide_dep_for_header_menu_area_options' ) ) {
	function overton_mikado_get_hide_dep_for_header_menu_area_options() {
		$hide_dep_options = apply_filters( 'overton_mikado_filter_header_menu_area_hide_global_option', $hide_dep_options = array() );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'overton_mikado_header_menu_area_options_map' ) ) {
	function overton_mikado_header_menu_area_options_map( $panel_header ) {
		$hide_dep_options = overton_mikado_get_hide_dep_for_header_menu_area_options();
		
		$menu_area_container = overton_mikado_add_admin_container_no_style(
			array(
				'parent'          => $panel_header,
				'name'            => 'menu_area_container',
				'dependency' => array(
					'hide' => array(
						'header_options'  => $hide_dep_options
					)
				),
			)
		);
		
		overton_mikado_add_admin_section_title(
			array(
				'parent' => $menu_area_container,
				'name'   => 'menu_area_style',
				'title'  => esc_html__( 'Menu Area Style', 'overton' )
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'parent'        => $menu_area_container,
				'type'          => 'yesno',
				'name'          => 'menu_area_in_grid',
				'default_value' => 'no',
				'label'         => esc_html__( 'Menu Area In Grid', 'overton' ),
				'description'   => esc_html__( 'Set menu area content to be in grid', 'overton' ),
			)
		);
		
		$menu_area_in_grid_container = overton_mikado_add_admin_container(
			array(
				'parent'          => $menu_area_container,
				'name'            => 'menu_area_in_grid_container',
				'dependency' => array(
					'hide' => array(
						'menu_area_in_grid'  => 'no'
					)
				)
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'parent'        => $menu_area_in_grid_container,
				'type'          => 'color',
				'name'          => 'menu_area_grid_background_color',
				'default_value' => '',
				'label'         => esc_html__( 'Grid Background Color', 'overton' ),
				'description'   => esc_html__( 'Set grid background color for menu area', 'overton' ),
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'parent'        => $menu_area_in_grid_container,
				'type'          => 'text',
				'name'          => 'menu_area_grid_background_transparency',
				'default_value' => '',
				'label'         => esc_html__( 'Grid Background Transparency', 'overton' ),
				'description'   => esc_html__( 'Set grid background transparency for menu area', 'overton' ),
				'args'          => array(
					'col_width' => 3
				)
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'parent'        => $menu_area_in_grid_container,
				'type'          => 'yesno',
				'name'          => 'menu_area_in_grid_shadow',
				'default_value' => 'no',
				'label'         => esc_html__( 'Grid Area Shadow', 'overton' ),
				'description'   => esc_html__( 'Set shadow on grid area', 'overton' )
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'parent'        => $menu_area_in_grid_container,
				'type'          => 'yesno',
				'name'          => 'menu_area_in_grid_border',
				'default_value' => 'no',
				'label'         => esc_html__( 'Grid Area Border', 'overton' ),
				'description'   => esc_html__( 'Set border on grid area', 'overton' )
			)
		);
		
		$menu_area_in_grid_border_container = overton_mikado_add_admin_container(
			array(
				'parent'          => $menu_area_in_grid_container,
				'name'            => 'menu_area_in_grid_border_container',
				'dependency' => array(
					'hide' => array(
						'menu_area_in_grid_border'  => 'no'
					)
				)
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'parent'        => $menu_area_in_grid_border_container,
				'type'          => 'color',
				'name'          => 'menu_area_in_grid_border_color',
				'default_value' => '',
				'label'         => esc_html__( 'Border Color', 'overton' ),
				'description'   => esc_html__( 'Set border color for menu area', 'overton' ),
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'parent'        => $menu_area_container,
				'type'          => 'color',
				'name'          => 'menu_area_background_color',
				'default_value' => '',
				'label'         => esc_html__( 'Background Color', 'overton' ),
				'description'   => esc_html__( 'Set background color for menu area', 'overton' )
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'parent'        => $menu_area_container,
				'type'          => 'text',
				'name'          => 'menu_area_background_transparency',
				'default_value' => '',
				'label'         => esc_html__( 'Background Transparency', 'overton' ),
				'description'   => esc_html__( 'Set background transparency for menu area', 'overton' ),
				'args'          => array(
					'col_width' => 3
				)
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'parent'        => $menu_area_container,
				'type'          => 'yesno',
				'name'          => 'menu_area_shadow',
				'default_value' => 'no',
				'label'         => esc_html__( 'Menu Area Shadow', 'overton' ),
				'description'   => esc_html__( 'Set shadow on menu area', 'overton' ),
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'menu_area_border',
				'default_value' => 'no',
				'label'         => esc_html__( 'Menu Area Border', 'overton' ),
				'description'   => esc_html__( 'Set border on menu area', 'overton' ),
				'parent'        => $menu_area_container
			)
		);
		
		$menu_area_border_container = overton_mikado_add_admin_container(
			array(
				'parent'          => $menu_area_container,
				'name'            => 'menu_area_border_container',
				'dependency' => array(
					'hide' => array(
						'menu_area_border'  => 'no'
					)
				)
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'type'        => 'color',
				'name'        => 'menu_area_border_color',
				'label'       => esc_html__( 'Border Color', 'overton' ),
				'description' => esc_html__( 'Set border color for menu area', 'overton' ),
				'parent'      => $menu_area_border_container
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'type'        => 'text',
				'name'        => 'menu_area_height',
				'label'       => esc_html__( 'Height', 'overton' ),
				'description' => esc_html__( 'Enter header height', 'overton' ),
				'parent'      => $menu_area_container,
				'args'        => array(
					'col_width' => 3,
					'suffix'    => 'px'
				)
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'type'   => 'text',
				'name'   => 'menu_area_side_padding',
				'label'  => esc_html__( 'Menu Area Side Padding', 'overton' ),
				'parent' => $menu_area_container,
				'args'   => array(
					'col_width' => 2,
					'suffix'    => esc_html__( 'px or %', 'overton' )
				)
			)
		);
		
		do_action( 'overton_mikado_header_menu_area_additional_options', $panel_header );
	}
	
	add_action( 'overton_mikado_action_header_menu_area_options_map', 'overton_mikado_header_menu_area_options_map', 10, 1 );
}