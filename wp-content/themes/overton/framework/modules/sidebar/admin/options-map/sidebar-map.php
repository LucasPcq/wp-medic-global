<?php

if ( ! function_exists( 'overton_mikado_sidebar_options_map' ) ) {
	function overton_mikado_sidebar_options_map() {
		
		overton_mikado_add_admin_page(
			array(
				'slug'  => '_sidebar_page',
				'title' => esc_html__( 'Sidebar Area', 'overton' ),
				'icon'  => 'fa fa-indent'
			)
		);
		
		$sidebar_panel = overton_mikado_add_admin_panel(
			array(
				'title' => esc_html__( 'Sidebar Area', 'overton' ),
				'name'  => 'sidebar',
				'page'  => '_sidebar_page'
			)
		);
		
		overton_mikado_add_admin_field( array(
			'name'          => 'sidebar_layout',
			'type'          => 'select',
			'label'         => esc_html__( 'Sidebar Layout', 'overton' ),
			'description'   => esc_html__( 'Choose a sidebar layout for pages', 'overton' ),
			'parent'        => $sidebar_panel,
			'default_value' => 'no-sidebar',
            'options'       => overton_mikado_get_custom_sidebars_options()
		) );
		
		$overton_custom_sidebars = overton_mikado_get_custom_sidebars();
		if ( count( $overton_custom_sidebars ) > 0 ) {
			overton_mikado_add_admin_field( array(
				'name'        => 'custom_sidebar_area',
				'type'        => 'selectblank',
				'label'       => esc_html__( 'Sidebar to Display', 'overton' ),
				'description' => esc_html__( 'Choose a sidebar to display on pages. Default sidebar is "Sidebar"', 'overton' ),
				'parent'      => $sidebar_panel,
				'options'     => $overton_custom_sidebars,
				'args'        => array(
					'select2' => true
				)
			) );
		}
	}
	
	add_action( 'overton_mikado_action_options_map', 'overton_mikado_sidebar_options_map', overton_mikado_set_options_map_position( 'sidebar' ) );
}