<?php

foreach ( glob( MIKADO_FRAMEWORK_MODULES_ROOT_DIR . '/blog/admin/meta-boxes/*/*.php' ) as $meta_box_load ) {
	include_once $meta_box_load;
}

if ( ! function_exists( 'overton_mikado_map_blog_meta' ) ) {
	function overton_mikado_map_blog_meta() {
		$mkdf_blog_categories = array();
		$categories           = get_categories();
		foreach ( $categories as $category ) {
			$mkdf_blog_categories[ $category->slug ] = $category->name;
		}
		
		$blog_meta_box = overton_mikado_create_meta_box(
			array(
				'scope' => array( 'page' ),
				'title' => esc_html__( 'Blog', 'overton' ),
				'name'  => 'blog_meta'
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_blog_category_meta',
				'type'        => 'selectblank',
				'label'       => esc_html__( 'Blog Category', 'overton' ),
				'description' => esc_html__( 'Choose category of posts to display (leave empty to display all categories)', 'overton' ),
				'parent'      => $blog_meta_box,
				'options'     => $mkdf_blog_categories
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_show_posts_per_page_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Number of Posts', 'overton' ),
				'description' => esc_html__( 'Enter the number of posts to display', 'overton' ),
				'parent'      => $blog_meta_box,
				'options'     => $mkdf_blog_categories,
				'args'        => array(
					'col_width' => 3
				)
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_blog_masonry_layout_meta',
				'type'        => 'select',
				'label'       => esc_html__( 'Masonry - Layout', 'overton' ),
				'description' => esc_html__( 'Set masonry layout. Default is in grid.', 'overton' ),
				'parent'      => $blog_meta_box,
				'options'     => array(
					''           => esc_html__( 'Default', 'overton' ),
					'in-grid'    => esc_html__( 'In Grid', 'overton' ),
					'full-width' => esc_html__( 'Full Width', 'overton' )
				)
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_blog_masonry_number_of_columns_meta',
				'type'        => 'select',
				'label'       => esc_html__( 'Masonry - Number of Columns', 'overton' ),
				'description' => esc_html__( 'Set number of columns for your masonry blog lists', 'overton' ),
				'parent'      => $blog_meta_box,
				'options'     => overton_mikado_get_number_of_columns_array( true, array( 'one', 'six' ) )
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'        => 'mkdf_blog_masonry_space_between_items_meta',
				'type'        => 'select',
				'label'       => esc_html__( 'Masonry - Space Between Items', 'overton' ),
				'description' => esc_html__( 'Set space size between posts for your masonry blog lists', 'overton' ),
				'options'     => overton_mikado_get_space_between_items_array( true ),
				'parent'      => $blog_meta_box
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_blog_list_featured_image_proportion_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Masonry - Featured Image Proportion', 'overton' ),
				'description'   => esc_html__( 'Choose type of proportions you want to use for featured images on masonry blog lists', 'overton' ),
				'parent'        => $blog_meta_box,
				'default_value' => '',
				'options'       => array(
					''         => esc_html__( 'Default', 'overton' ),
					'fixed'    => esc_html__( 'Fixed', 'overton' ),
					'original' => esc_html__( 'Original', 'overton' )
				)
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'name'          => 'mkdf_blog_pagination_type_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Pagination Type', 'overton' ),
				'description'   => esc_html__( 'Choose a pagination layout for Blog Lists', 'overton' ),
				'parent'        => $blog_meta_box,
				'default_value' => '',
				'options'       => array(
					''                => esc_html__( 'Default', 'overton' ),
					'standard'        => esc_html__( 'Standard', 'overton' ),
					'load-more'       => esc_html__( 'Load More', 'overton' ),
					'infinite-scroll' => esc_html__( 'Infinite Scroll', 'overton' ),
					'no-pagination'   => esc_html__( 'No Pagination', 'overton' )
				)
			)
		);
		
		overton_mikado_create_meta_box_field(
			array(
				'type'          => 'text',
				'name'          => 'mkdf_number_of_chars_meta',
				'default_value' => '',
				'label'         => esc_html__( 'Number of Words in Excerpt', 'overton' ),
				'description'   => esc_html__( 'Enter a number of words in excerpt (article summary). Default value is 30', 'overton' ),
				'parent'        => $blog_meta_box,
				'args'          => array(
					'col_width' => 3
				)
			)
		);
	}
	
	add_action( 'overton_mikado_action_meta_boxes_map', 'overton_mikado_map_blog_meta', 30 );
}