<?php

if ( ! function_exists( 'overton_mikado_footer_options_map' ) ) {
	function overton_mikado_footer_options_map() {

		overton_mikado_add_admin_page(
			array(
				'slug'  => '_footer_page',
				'title' => esc_html__( 'Footer', 'overton' ),
				'icon'  => 'fa fa-sort-amount-asc'
			)
		);

		$footer_panel = overton_mikado_add_admin_panel(
			array(
				'title' => esc_html__( 'Footer', 'overton' ),
				'name'  => 'footer',
				'page'  => '_footer_page'
			)
		);

		overton_mikado_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'footer_in_grid',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Footer in Grid', 'overton' ),
				'description'   => esc_html__( 'Enabling this option will place Footer content in grid', 'overton' ),
				'parent'        => $footer_panel
			)
		);

        overton_mikado_add_admin_field(
            array(
                'type'          => 'yesno',
                'name'          => 'uncovering_footer',
                'default_value' => 'no',
                'label'         => esc_html__( 'Uncovering Footer', 'overton' ),
                'description'   => esc_html__( 'Enabling this option will make Footer gradually appear on scroll', 'overton' ),
                'parent'        => $footer_panel,
            )
        );

		overton_mikado_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'show_footer_top',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Show Footer Top', 'overton' ),
				'description'   => esc_html__( 'Enabling this option will show Footer Top area', 'overton' ),
				'parent'        => $footer_panel,
			)
		);
		
		$show_footer_top_container = overton_mikado_add_admin_container(
			array(
				'name'       => 'show_footer_top_container',
				'parent'     => $footer_panel,
				'dependency' => array(
					'show' => array(
						'show_footer_top' => 'yes'
					)
				)
			)
		);

		overton_mikado_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'footer_top_columns',
				'parent'        => $show_footer_top_container,
				'default_value' => '3 3 3 3',
				'label'         => esc_html__( 'Footer Top Columns', 'overton' ),
				'description'   => esc_html__( 'Choose number of columns for Footer Top area', 'overton' ),
				'options'       => array(
					'12' => '1',
					'6 6' => '2',
					'4 4 4' => '3',
                    '3 3 6' => '3 (25% + 25% + 50%)',
					'3 3 3 3' => '4'
				)
			)
		);

		overton_mikado_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'footer_top_columns_alignment',
				'default_value' => 'left',
				'label'         => esc_html__( 'Footer Top Columns Alignment', 'overton' ),
				'description'   => esc_html__( 'Text Alignment in Footer Columns', 'overton' ),
				'options'       => array(
					''       => esc_html__( 'Default', 'overton' ),
					'left'   => esc_html__( 'Left', 'overton' ),
					'center' => esc_html__( 'Center', 'overton' ),
					'right'  => esc_html__( 'Right', 'overton' )
				),
				'parent'        => $show_footer_top_container,
			)
		);

		overton_mikado_add_admin_field(
			array(
				'name'        => 'footer_top_background_color',
				'type'        => 'color',
				'label'       => esc_html__( 'Background Color', 'overton' ),
				'description' => esc_html__( 'Set background color for top footer area', 'overton' ),
				'parent'      => $show_footer_top_container
			)
		);

		overton_mikado_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'show_footer_bottom',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Show Footer Bottom', 'overton' ),
				'description'   => esc_html__( 'Enabling this option will show Footer Bottom area', 'overton' ),
				'parent'        => $footer_panel,
			)
		);

		$show_footer_bottom_container = overton_mikado_add_admin_container(
			array(
				'name'            => 'show_footer_bottom_container',
				'parent'          => $footer_panel,
				'dependency' => array(
					'show' => array(
						'show_footer_bottom'  => 'yes'
					)
				)
			)
		);

		overton_mikado_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'footer_bottom_columns',
				'default_value' => '6 6',
				'label'         => esc_html__( 'Footer Bottom Columns', 'overton' ),
				'description'   => esc_html__( 'Choose number of columns for Footer Bottom area', 'overton' ),
				'options'       => array(
					'12' => '1',
					'6 6' => '2',
					'4 4 4' => '3'
				),
				'parent'        => $show_footer_bottom_container,
			)
		);

		overton_mikado_add_admin_field(
			array(
				'name'        => 'footer_bottom_background_color',
				'type'        => 'color',
				'label'       => esc_html__( 'Background Color', 'overton' ),
				'description' => esc_html__( 'Set background color for bottom footer area', 'overton' ),
				'parent'      => $show_footer_bottom_container
			)
		);
	}

	add_action( 'overton_mikado_action_options_map', 'overton_mikado_footer_options_map', overton_mikado_set_options_map_position( 'footer' ) );
}