<?php

if ( ! function_exists( 'overton_mikado_map_post_link_meta' ) ) {
	function overton_mikado_map_post_link_meta() {
		$link_post_format_meta_box = overton_mikado_create_meta_box(
			array(
				'scope' => array( 'post' ),
				'title' => esc_html__( 'Link Post Format', 'overton' ),
				'name'  => 'post_format_link_meta'
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_post_link_link_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Link', 'overton' ),
				'description' => esc_html__( 'Enter link', 'overton' ),
				'parent'      => $link_post_format_meta_box
			)
		);
	}
	
	add_action( 'overton_mikado_action_meta_boxes_map', 'overton_mikado_map_post_link_meta', 24 );
}