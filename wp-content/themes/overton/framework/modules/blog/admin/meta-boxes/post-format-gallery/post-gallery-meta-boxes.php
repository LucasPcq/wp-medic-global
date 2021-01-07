<?php

if ( ! function_exists( 'overton_mikado_map_post_gallery_meta' ) ) {
	
	function overton_mikado_map_post_gallery_meta() {
		$gallery_post_format_meta_box = overton_mikado_create_meta_box(
			array(
				'scope' => array( 'post' ),
				'title' => esc_html__( 'Gallery Post Format', 'overton' ),
				'name'  => 'post_format_gallery_meta'
			)
		);
		
		overton_mikado_add_multiple_images_field(
			array(
				'name'        => 'mkdf_post_gallery_images_meta',
				'label'       => esc_html__( 'Gallery Images', 'overton' ),
				'description' => esc_html__( 'Choose your gallery images', 'overton' ),
				'parent'      => $gallery_post_format_meta_box,
			)
		);
	}
	
	add_action( 'overton_mikado_action_meta_boxes_map', 'overton_mikado_map_post_gallery_meta', 21 );
}
