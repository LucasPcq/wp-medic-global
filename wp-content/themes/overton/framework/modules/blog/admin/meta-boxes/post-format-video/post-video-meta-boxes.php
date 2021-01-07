<?php

if ( ! function_exists( 'overton_mikado_map_post_video_meta' ) ) {
	function overton_mikado_map_post_video_meta() {
		$video_post_format_meta_box = overton_mikado_create_meta_box(
			array(
				'scope' => array( 'post' ),
				'title' => esc_html__( 'Video Post Format', 'overton' ),
				'name'  => 'post_format_video_meta'
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_video_type_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Video Type', 'overton' ),
				'description'   => esc_html__( 'Choose video type', 'overton' ),
				'parent'        => $video_post_format_meta_box,
				'default_value' => 'social_networks',
				'options'       => array(
					'social_networks' => esc_html__( 'Video Service', 'overton' ),
					'self'            => esc_html__( 'Self Hosted', 'overton' )
				)
			)
		);
		
		$mkdf_video_embedded_container = overton_mikado_add_admin_container(
			array(
				'parent' => $video_post_format_meta_box,
				'name'   => 'mkdf_video_embedded_container'
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_post_video_link_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Video URL', 'overton' ),
				'description' => esc_html__( 'Enter Video URL', 'overton' ),
				'parent'      => $mkdf_video_embedded_container,
				'dependency' => array(
					'show' => array(
						'mkdf_video_type_meta' => 'social_networks'
					)
				)
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_post_video_custom_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Video MP4', 'overton' ),
				'description' => esc_html__( 'Enter video URL for MP4 format', 'overton' ),
				'parent'      => $mkdf_video_embedded_container,
				'dependency' => array(
					'show' => array(
						'mkdf_video_type_meta' => 'self'
					)
				)
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_post_video_image_meta',
				'type'        => 'image',
				'label'       => esc_html__( 'Video Image', 'overton' ),
				'description' => esc_html__( 'Enter video image', 'overton' ),
				'parent'      => $mkdf_video_embedded_container,
				'dependency' => array(
					'show' => array(
						'mkdf_video_type_meta' => 'self'
					)
				)
			)
		);
	}
	
	add_action( 'overton_mikado_action_meta_boxes_map', 'overton_mikado_map_post_video_meta', 22 );
}