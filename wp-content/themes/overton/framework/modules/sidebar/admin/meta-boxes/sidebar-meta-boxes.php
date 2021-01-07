<?php

if ( ! function_exists( 'overton_mikado_map_sidebar_meta' ) ) {
	function overton_mikado_map_sidebar_meta() {
		$mkdf_sidebar_meta_box = overton_mikado_create_meta_box(
			array(
				'scope' => apply_filters( 'overton_mikado_filter_set_scope_for_meta_boxes', array( 'page' ), 'sidebar_meta' ),
				'title' => esc_html__( 'Sidebar', 'overton' ),
				'name'  => 'sidebar_meta'
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_sidebar_layout_meta',
				'type'        => 'select',
				'label'       => esc_html__( 'Sidebar Layout', 'overton' ),
				'description' => esc_html__( 'Choose the sidebar layout', 'overton' ),
				'parent'      => $mkdf_sidebar_meta_box,
                'options'       => overton_mikado_get_custom_sidebars_options( true )
			)
		);
		
		$mkdf_custom_sidebars = overton_mikado_get_custom_sidebars();
		if ( count( $mkdf_custom_sidebars ) > 0 ) {
			overton_mikado_create_meta_box_field(
				array(
					'name'        => 'mkdf_custom_sidebar_area_meta',
					'type'        => 'selectblank',
					'label'       => esc_html__( 'Choose Widget Area in Sidebar', 'overton' ),
					'description' => esc_html__( 'Choose Custom Widget area to display in Sidebar"', 'overton' ),
					'parent'      => $mkdf_sidebar_meta_box,
					'options'     => $mkdf_custom_sidebars,
					'args'        => array(
						'select2' => true
					)
				)
			);
		}
	}
	
	add_action( 'overton_mikado_action_meta_boxes_map', 'overton_mikado_map_sidebar_meta', 31 );
}