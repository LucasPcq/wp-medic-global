<?php

if ( ! function_exists( 'overton_mikado_sidearea_options_map' ) ) {
	function overton_mikado_sidearea_options_map() {

        overton_mikado_add_admin_page(
            array(
                'slug'  => '_side_area_page',
                'title' => esc_html__('Side Area', 'overton'),
                'icon'  => 'fa fa-indent'
            )
        );

        $side_area_panel = overton_mikado_add_admin_panel(
            array(
                'title' => esc_html__('Side Area', 'overton'),
                'name'  => 'side_area',
                'page'  => '_side_area_page'
            )
        );

        overton_mikado_add_admin_field(
            array(
                'parent'        => $side_area_panel,
                'type'          => 'select',
                'name'          => 'side_area_type',
                'default_value' => 'side-menu-slide-from-right',
                'label'         => esc_html__('Side Area Type', 'overton'),
                'description'   => esc_html__('Choose a type of Side Area', 'overton'),
                'options'       => array(
                    'side-menu-slide-from-right'       => esc_html__('Slide from Right Over Content', 'overton'),
                    'side-menu-slide-with-content'     => esc_html__('Slide from Right With Content', 'overton'),
                    'side-area-uncovered-from-content' => esc_html__('Side Area Uncovered from Content', 'overton'),
                ),
            )
        );

        overton_mikado_add_admin_field(
            array(
                'parent'        => $side_area_panel,
                'type'          => 'text',
                'name'          => 'side_area_width',
                'default_value' => '',
                'label'         => esc_html__('Side Area Width', 'overton'),
                'description'   => esc_html__('Enter a width for Side Area (px or %). Default width: 405px.', 'overton'),
                'args'          => array(
                    'col_width' => 3,
                )
            )
        );

        $side_area_width_container = overton_mikado_add_admin_container(
            array(
                'parent'     => $side_area_panel,
                'name'       => 'side_area_width_container',
                'dependency' => array(
                    'show' => array(
                        'side_area_type' => 'side-menu-slide-from-right',
                    )
                )
            )
        );

        overton_mikado_add_admin_field(
            array(
                'parent'        => $side_area_width_container,
                'type'          => 'color',
                'name'          => 'side_area_content_overlay_color',
                'default_value' => '',
                'label'         => esc_html__('Content Overlay Background Color', 'overton'),
                'description'   => esc_html__('Choose a background color for a content overlay', 'overton'),
            )
        );

        overton_mikado_add_admin_field(
            array(
                'parent'        => $side_area_width_container,
                'type'          => 'text',
                'name'          => 'side_area_content_overlay_opacity',
                'default_value' => '',
                'label'         => esc_html__('Content Overlay Background Transparency', 'overton'),
                'description'   => esc_html__('Choose a transparency for the content overlay background color (0 = fully transparent, 1 = opaque)', 'overton'),
                'args'          => array(
                    'col_width' => 3
                )
            )
        );

        overton_mikado_add_admin_field(
            array(
                'parent'        => $side_area_panel,
                'type'          => 'select',
                'name'          => 'side_area_icon_source',
                'default_value' => 'icon_pack',
                'label'         => esc_html__('Select Side Area Icon Source', 'overton'),
                'description'   => esc_html__('Choose whether you would like to use icons from an icon pack or SVG icons', 'overton'),
                'options'       => overton_mikado_get_icon_sources_array()
            )
        );

        $side_area_icon_pack_container = overton_mikado_add_admin_container(
            array(
                'parent'     => $side_area_panel,
                'name'       => 'side_area_icon_pack_container',
                'dependency' => array(
                    'show' => array(
                        'side_area_icon_source' => 'icon_pack'
                    )
                )
            )
        );

        overton_mikado_add_admin_field(
            array(
                'parent'        => $side_area_icon_pack_container,
                'type'          => 'select',
                'name'          => 'side_area_icon_pack',
                'default_value' => 'font_elegant',
                'label'         => esc_html__('Side Area Icon Pack', 'overton'),
                'description'   => esc_html__('Choose icon pack for Side Area icon', 'overton'),
                'options'       => overton_mikado_icon_collections()->getIconCollectionsExclude(array('linea_icons', 'dripicons', 'simple_line_icons'))
            )
        );

        $side_area_svg_icons_container = overton_mikado_add_admin_container(
            array(
                'parent'     => $side_area_panel,
                'name'       => 'side_area_svg_icons_container',
                'dependency' => array(
                    'show' => array(
                        'side_area_icon_source' => 'svg_path'
                    )
                )
            )
        );

        overton_mikado_add_admin_field(
            array(
                'parent'      => $side_area_svg_icons_container,
                'type'        => 'textarea',
                'name'        => 'side_area_icon_svg_path',
                'label'       => esc_html__('Side Area Icon SVG Path', 'overton'),
                'description' => esc_html__('Enter your Side Area icon SVG path here. Please remove version and id attributes from your SVG path because of HTML validation', 'overton'),
            )
        );

        overton_mikado_add_admin_field(
            array(
                'parent'      => $side_area_svg_icons_container,
                'type'        => 'textarea',
                'name'        => 'side_area_close_icon_svg_path',
                'label'       => esc_html__('Side Area Close Icon SVG Path', 'overton'),
                'description' => esc_html__('Enter your Side Area close icon SVG path here. Please remove version and id attributes from your SVG path because of HTML validation', 'overton'),
            )
        );

        $side_area_icon_style_group = overton_mikado_add_admin_group(
            array(
                'parent'      => $side_area_panel,
                'name'        => 'side_area_icon_style_group',
                'title'       => esc_html__('Side Area Icon Style', 'overton'),
                'description' => esc_html__('Define styles for Side Area icon', 'overton')
            )
        );

        $side_area_icon_style_row1 = overton_mikado_add_admin_row(
            array(
                'parent' => $side_area_icon_style_group,
                'name'   => 'side_area_icon_style_row1'
            )
        );

        overton_mikado_add_admin_field(
            array(
                'parent' => $side_area_icon_style_row1,
                'type'   => 'colorsimple',
                'name'   => 'side_area_icon_color',
                'label'  => esc_html__('Color', 'overton')
            )
        );

        overton_mikado_add_admin_field(
            array(
                'parent' => $side_area_icon_style_row1,
                'type'   => 'colorsimple',
                'name'   => 'side_area_icon_hover_color',
                'label'  => esc_html__('Hover Color', 'overton')
            )
        );

        $side_area_icon_style_row2 = overton_mikado_add_admin_row(
            array(
                'parent' => $side_area_icon_style_group,
                'name'   => 'side_area_icon_style_row2',
                'next'   => true
            )
        );

        overton_mikado_add_admin_field(
            array(
                'parent' => $side_area_icon_style_row2,
                'type'   => 'colorsimple',
                'name'   => 'side_area_close_icon_color',
                'label'  => esc_html__('Close Icon Color', 'overton')
            )
        );

        overton_mikado_add_admin_field(
            array(
                'parent' => $side_area_icon_style_row2,
                'type'   => 'colorsimple',
                'name'   => 'side_area_close_icon_hover_color',
                'label'  => esc_html__('Close Icon Hover Color', 'overton')
            )
        );

        overton_mikado_add_admin_field(
            array(
                'parent'      => $side_area_panel,
                'type'        => 'color',
                'name'        => 'side_area_background_color',
                'label'       => esc_html__('Background Color', 'overton'),
                'description' => esc_html__('Choose a background color for Side Area', 'overton')
            )
        );

        overton_mikado_add_admin_field(
            array(
                'parent'      => $side_area_panel,
                'type'        => 'text',
                'name'        => 'side_area_padding',
                'label'       => esc_html__('Padding', 'overton'),
                'description' => esc_html__('Define padding for Side Area in format top right bottom left', 'overton'),
                'args'        => array(
                    'col_width' => 3
                )
            )
        );

        overton_mikado_add_admin_field(
            array(
                'parent'        => $side_area_panel,
                'type'          => 'selectblank',
                'name'          => 'side_area_aligment',
                'default_value' => '',
                'label'         => esc_html__('Text Alignment', 'overton'),
                'description'   => esc_html__('Choose text alignment for side area', 'overton'),
                'options'       => array(
                    ''       => esc_html__('Default', 'overton'),
                    'left'   => esc_html__('Left', 'overton'),
                    'center' => esc_html__('Center', 'overton'),
                    'right'  => esc_html__('Right', 'overton')
                )
            )
        );
    }

    add_action('overton_mikado_action_options_map', 'overton_mikado_sidearea_options_map', overton_mikado_set_options_map_position( 'sidearea' ) );
}