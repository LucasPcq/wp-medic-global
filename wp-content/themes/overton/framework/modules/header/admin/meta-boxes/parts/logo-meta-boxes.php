<?php

if ( ! function_exists( 'overton_mikado_logo_meta_box_map' ) ) {
	function overton_mikado_logo_meta_box_map() {
		
		$logo_meta_box = overton_mikado_create_meta_box(
			array(
				'scope' => apply_filters( 'overton_mikado_filter_set_scope_for_meta_boxes', array( 'page', 'post' ), 'logo_meta' ),
				'title' => esc_html__( 'Logo', 'overton' ),
				'name'  => 'logo_meta'
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_logo_image_meta',
				'type'        => 'image',
				'label'       => esc_html__( 'Logo Image - Default', 'overton' ),
				'description' => esc_html__( 'Choose a default logo image to display ', 'overton' ),
				'parent'      => $logo_meta_box
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_logo_image_dark_meta',
				'type'        => 'image',
				'label'       => esc_html__( 'Logo Image - Dark', 'overton' ),
				'description' => esc_html__( 'Choose a default logo image to display ', 'overton' ),
				'parent'      => $logo_meta_box
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_logo_image_light_meta',
				'type'        => 'image',
				'label'       => esc_html__( 'Logo Image - Light', 'overton' ),
				'description' => esc_html__( 'Choose a default logo image to display ', 'overton' ),
				'parent'      => $logo_meta_box
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_logo_image_sticky_meta',
				'type'        => 'image',
				'label'       => esc_html__( 'Logo Image - Sticky', 'overton' ),
				'description' => esc_html__( 'Choose a default logo image to display ', 'overton' ),
				'parent'      => $logo_meta_box
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_logo_image_mobile_meta',
				'type'        => 'image',
				'label'       => esc_html__( 'Logo Image - Mobile', 'overton' ),
				'description' => esc_html__( 'Choose a default logo image to display ', 'overton' ),
				'parent'      => $logo_meta_box
			)
		);
	}
	
	add_action( 'overton_mikado_action_meta_boxes_map', 'overton_mikado_logo_meta_box_map', 47 );
}