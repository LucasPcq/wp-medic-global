<?php

if ( ! function_exists( 'overton_mikado_map_post_audio_meta' ) ) {
	function overton_mikado_map_post_audio_meta() {
		$audio_post_format_meta_box = overton_mikado_create_meta_box(
			array(
				'scope' => array( 'post' ),
				'title' => esc_html__( 'Audio Post Format', 'overton' ),
				'name'  => 'post_format_audio_meta'
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_audio_type_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Audio Type', 'overton' ),
				'description'   => esc_html__( 'Choose audio type', 'overton' ),
				'parent'        => $audio_post_format_meta_box,
				'default_value' => 'social_networks',
				'options'       => array(
					'social_networks' => esc_html__( 'Audio Service', 'overton' ),
					'self'            => esc_html__( 'Self Hosted', 'overton' )
				)
			)
		);
		
		$mkdf_audio_embedded_container = overton_mikado_add_admin_container(
			array(
				'parent' => $audio_post_format_meta_box,
				'name'   => 'mkdf_audio_embedded_container'
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_post_audio_link_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Audio URL', 'overton' ),
				'description' => esc_html__( 'Enter audio URL', 'overton' ),
				'parent'      => $mkdf_audio_embedded_container,
				'dependency' => array(
					'show' => array(
						'mkdf_audio_type_meta' => 'social_networks'
					)
				)
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_post_audio_custom_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Audio Link', 'overton' ),
				'description' => esc_html__( 'Enter audio link', 'overton' ),
				'parent'      => $mkdf_audio_embedded_container,
				'dependency' => array(
					'show' => array(
						'mkdf_audio_type_meta' => 'self'
					)
				)
			)
		);
	}
	
	add_action( 'overton_mikado_action_meta_boxes_map', 'overton_mikado_map_post_audio_meta', 23 );
}