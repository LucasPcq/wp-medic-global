<?php

/*** Post Settings ***/

if ( ! function_exists( 'overton_mikado_map_post_meta' ) ) {
	function overton_mikado_map_post_meta() {
		
		$post_meta_box = overton_mikado_create_meta_box(
			array(
				'scope' => array( 'post' ),
				'title' => esc_html__( 'Post', 'overton' ),
				'name'  => 'post-meta'
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_show_title_area_blog_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Show Title Area', 'overton' ),
				'description'   => esc_html__( 'Enabling this option will show title area on your single post page', 'overton' ),
				'parent'        => $post_meta_box,
				'options'       => overton_mikado_get_yes_no_select_array()
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_blog_single_sidebar_layout_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Sidebar Layout', 'overton' ),
				'description'   => esc_html__( 'Choose a sidebar layout for Blog single page', 'overton' ),
				'default_value' => '',
				'parent'        => $post_meta_box,
                'options'       => overton_mikado_get_custom_sidebars_options( true )
			)
		);
		
		$overton_custom_sidebars = overton_mikado_get_custom_sidebars();
		if ( count( $overton_custom_sidebars ) > 0 ) {
			overton_mikado_create_meta_box_field( array(
				'name'        => 'mkdf_blog_single_custom_sidebar_area_meta',
				'type'        => 'selectblank',
				'label'       => esc_html__( 'Sidebar to Display', 'overton' ),
				'description' => esc_html__( 'Choose a sidebar to display on Blog single page. Default sidebar is "Sidebar"', 'overton' ),
				'parent'      => $post_meta_box,
				'options'     => overton_mikado_get_custom_sidebars(),
				'args' => array(
					'select2' => true
				)
			) );
		}
		
		overton_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_blog_list_featured_image_meta',
				'type'        => 'image',
				'label'       => esc_html__( 'Blog List Image', 'overton' ),
				'description' => esc_html__( 'Choose an Image for displaying in blog list. If not uploaded, featured image will be shown.', 'overton' ),
				'parent'      => $post_meta_box
			)
		);

		do_action('overton_mikado_action_blog_post_meta', $post_meta_box);
	}
	
	add_action( 'overton_mikado_action_meta_boxes_map', 'overton_mikado_map_post_meta', 20 );
}
