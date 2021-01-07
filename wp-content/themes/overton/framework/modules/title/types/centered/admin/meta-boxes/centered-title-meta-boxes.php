<?php

if ( ! function_exists( 'overton_mikado_centered_title_type_options_meta_boxes' ) ) {
	function overton_mikado_centered_title_type_options_meta_boxes( $show_title_area_meta_container ) {
		
		overton_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_subtitle_side_padding_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Subtitle Side Padding', 'overton' ),
				'description' => esc_html__( 'Set left/right padding for subtitle area', 'overton' ),
				'parent'      => $show_title_area_meta_container,
				'args'        => array(
					'col_width' => 2,
					'suffix'    => 'px or %'
				)
			)
		);
	}
	
	add_action( 'overton_mikado_action_additional_title_area_meta_boxes', 'overton_mikado_centered_title_type_options_meta_boxes', 5 );
}