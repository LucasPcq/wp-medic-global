<?php

if ( ! function_exists( 'overton_mikado_woocommerce_options_map' ) ) {
	
	/**
	 * Add Woocommerce options page
	 */
	function overton_mikado_woocommerce_options_map() {
		
		overton_mikado_add_admin_page(
			array(
				'slug'  => '_woocommerce_page',
				'title' => esc_html__( 'Woocommerce', 'overton' ),
				'icon'  => 'fa fa-shopping-cart'
			)
		);
		
		/**
		 * Product List Settings
		 */
		$panel_product_list = overton_mikado_add_admin_panel(
			array(
				'page'  => '_woocommerce_page',
				'name'  => 'panel_product_list',
				'title' => esc_html__( 'Product List', 'overton' )
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'name'        => 'woo_list_grid_space',
				'type'        => 'select',
				'label'       => esc_html__( 'Grid Layout Space', 'overton' ),
				'description' => esc_html__( 'Choose a space between content layout and sidebar layout for main shop page', 'overton' ),
				'options'     => overton_mikado_get_space_between_items_array( true ),
				'parent'      => $panel_product_list
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'mkdf_woo_product_list_columns',
				'label'         => esc_html__( 'Product List Columns', 'overton' ),
				'default_value' => 'mkdf-woocommerce-columns-3',
				'description'   => esc_html__( 'Choose number of columns for main shop page', 'overton' ),
				'options'       => array(
					'mkdf-woocommerce-columns-3' => esc_html__( '3 Columns', 'overton' ),
					'mkdf-woocommerce-columns-4' => esc_html__( '4 Columns', 'overton' )
				),
				'parent'        => $panel_product_list,
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'mkdf_woo_product_list_columns_space',
				'label'         => esc_html__( 'Space Between Items', 'overton' ),
				'description'   => esc_html__( 'Select space between items for product listing and related products on single product', 'overton' ),
				'default_value' => 'normal',
				'options'       => overton_mikado_get_space_between_items_array(),
				'parent'        => $panel_product_list,
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'mkdf_woo_product_list_info_position',
				'label'         => esc_html__( 'Product Info Position', 'overton' ),
				'default_value' => 'info_below_image',
				'description'   => esc_html__( 'Select product info position for product listing and related products on single product', 'overton' ),
				'options'       => array(
					'info_below_image'    => esc_html__( 'Info Below Image', 'overton' ),
					'info_on_image_hover' => esc_html__( 'Info On Image Hover', 'overton' )
				),
				'parent'        => $panel_product_list,
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'type'          => 'text',
				'name'          => 'mkdf_woo_products_per_page',
				'label'         => esc_html__( 'Number of products per page', 'overton' ),
				'description'   => esc_html__( 'Set number of products on shop page', 'overton' ),
				'parent'        => $panel_product_list,
				'args'          => array(
					'col_width' => 3
				)
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'mkdf_products_list_title_tag',
				'label'         => esc_html__( 'Products Title Tag', 'overton' ),
				'default_value' => 'h5',
				'options'       => overton_mikado_get_title_tag(),
				'parent'        => $panel_product_list,
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'woo_enable_percent_sign_value',
				'default_value' => 'no',
				'label'         => esc_html__( 'Enable Percent Sign', 'overton' ),
				'description'   => esc_html__( 'Enabling this option will show percent value mark instead of sale label on products', 'overton' ),
				'parent'        => $panel_product_list
			)
		);
		
		/**
		 * Single Product Settings
		 */
		$panel_single_product = overton_mikado_add_admin_panel(
			array(
				'page'  => '_woocommerce_page',
				'name'  => 'panel_single_product',
				'title' => esc_html__( 'Single Product', 'overton' )
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'show_title_area_woo',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Show Title Area', 'overton' ),
				'description'   => esc_html__( 'Enabling this option will show title area on single post pages', 'overton' ),
				'parent'        => $panel_single_product,
				'options'       => overton_mikado_get_yes_no_select_array(),
				'args'          => array(
					'col_width' => 3
				)
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'mkdf_single_product_title_tag',
				'default_value' => 'h3',
				'label'         => esc_html__( 'Single Product Title Tag', 'overton' ),
				'options'       => overton_mikado_get_title_tag(),
				'parent'        => $panel_single_product,
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'woo_number_of_thumb_images',
				'default_value' => '3',
				'label'         => esc_html__( 'Number of Thumbnail Images per Row', 'overton' ),
				'options'       => array(
					'4' => esc_html__( 'Four', 'overton' ),
					'3' => esc_html__( 'Three', 'overton' ),
					'2' => esc_html__( 'Two', 'overton' )
				),
				'parent'        => $panel_single_product
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'woo_set_thumb_images_position',
				'default_value' => 'on-left-side',
				'label'         => esc_html__( 'Set Thumbnail Images Position', 'overton' ),
				'options'       => array(
					'below-image'  => esc_html__( 'Below Featured Image', 'overton' ),
					'on-left-side' => esc_html__( 'On The Left Side Of Featured Image', 'overton' )
				),
				'parent'        => $panel_single_product
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'woo_enable_single_product_zoom_image',
				'default_value' => 'no',
				'label'         => esc_html__( 'Enable Zoom Maginfier', 'overton' ),
				'description'   => esc_html__( 'Enabling this option will show magnifier image on featured image hover', 'overton' ),
				'parent'        => $panel_single_product,
				'options'       => overton_mikado_get_yes_no_select_array( false ),
				'args'          => array(
					'col_width' => 3
				)
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'woo_set_single_images_behavior',
				'default_value' => 'pretty-photo',
				'label'         => esc_html__( 'Set Images Behavior', 'overton' ),
				'options'       => array(
					'pretty-photo' => esc_html__( 'Pretty Photo Lightbox', 'overton' ),
					'photo-swipe'  => esc_html__( 'Photo Swipe Lightbox', 'overton' )
				),
				'parent'        => $panel_single_product
			)
		);
		
		overton_mikado_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'mkdf_woo_related_products_columns',
				'label'         => esc_html__( 'Related Products Columns', 'overton' ),
				'default_value' => 'mkdf-woocommerce-columns-4',
				'description'   => esc_html__( 'Choose number of columns for related products on single product page', 'overton' ),
				'options'       => array(
					'mkdf-woocommerce-columns-3' => esc_html__( '3 Columns', 'overton' ),
					'mkdf-woocommerce-columns-4' => esc_html__( '4 Columns', 'overton' )
				),
				'parent'        => $panel_single_product,
			)
		);

		do_action('overton_mikado_woocommerce_additional_options_map');
	}
	
	add_action( 'overton_mikado_action_options_map', 'overton_mikado_woocommerce_options_map', overton_mikado_set_options_map_position( 'woocommerce' ) );
}