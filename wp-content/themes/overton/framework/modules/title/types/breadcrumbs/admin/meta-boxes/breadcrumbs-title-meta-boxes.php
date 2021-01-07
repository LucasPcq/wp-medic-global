<?php

if ( ! function_exists( 'overton_mikado_breadcrumbs_title_type_options_meta_boxes' ) ) {
	function overton_mikado_breadcrumbs_title_type_options_meta_boxes( $show_title_area_meta_container ) {
		
		overton_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_breadcrumbs_color_meta',
				'type'        => 'color',
				'label'       => esc_html__( 'Breadcrumbs Color', 'overton' ),
				'description' => esc_html__( 'Choose a color for breadcrumbs text', 'overton' ),
				'parent'      => $show_title_area_meta_container
			)
		);
	}
	
	add_action( 'overton_mikado_action_additional_title_area_meta_boxes', 'overton_mikado_breadcrumbs_title_type_options_meta_boxes' );
}