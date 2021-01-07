<?php

if ( ! function_exists( 'overton_mikado_map_post_quote_meta' ) ) {
	function overton_mikado_map_post_quote_meta() {
		$quote_post_format_meta_box = overton_mikado_create_meta_box(
			array(
				'scope' => array( 'post' ),
				'title' => esc_html__( 'Quote Post Format', 'overton' ),
				'name'  => 'post_format_quote_meta'
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_post_quote_text_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Quote Text', 'overton' ),
				'description' => esc_html__( 'Enter Quote text', 'overton' ),
				'parent'      => $quote_post_format_meta_box
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_post_quote_author_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Quote Author', 'overton' ),
				'description' => esc_html__( 'Enter Quote author', 'overton' ),
				'parent'      => $quote_post_format_meta_box
			)
		);
	}
	
	add_action( 'overton_mikado_action_meta_boxes_map', 'overton_mikado_map_post_quote_meta', 25 );
}