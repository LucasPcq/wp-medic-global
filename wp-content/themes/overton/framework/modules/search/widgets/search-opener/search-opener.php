<?php

class OvertonMikadoClassSearchOpener extends OvertonMikadoClassWidget {
	public function __construct() {
		parent::__construct(
			'mkdf_search_opener',
			esc_html__( 'Overton Search Opener', 'overton' ),
			array( 'description' => esc_html__( 'Display a "search" icon that opens the search form', 'overton' ) )
		);
		
		$this->setParams();
	}
	
	protected function setParams() {

		$search_icon_params = array(
			array(
				'type'        => 'colorpicker',
				'name'        => 'search_icon_color',
				'title'       => esc_html__( 'Icon Color', 'overton' ),
				'description' => esc_html__( 'Define color for search icon', 'overton' )
			),
			array(
				'type'        => 'colorpicker',
				'name'        => 'search_icon_hover_color',
				'title'       => esc_html__( 'Icon Hover Color', 'overton' ),
				'description' => esc_html__( 'Define hover color for search icon', 'overton' )
			),
			array(
				'type'        => 'textfield',
				'name'        => 'search_icon_margin',
				'title'       => esc_html__( 'Icon Margin', 'overton' ),
				'description' => esc_html__( 'Insert margin in format: top right bottom left (e.g. 10px 5px 10px 5px)', 'overton' )
			),
			array(
				'type'        => 'dropdown',
				'name'        => 'show_label',
				'title'       => esc_html__( 'Enable Search Icon Text', 'overton' ),
				'description' => esc_html__( 'Enable this option to show search text next to search icon in header', 'overton' ),
				'options'     => overton_mikado_get_yes_no_select_array()
			)
		);

		$search_icon_pack_params = array(
			array(
				'type'        => 'textfield',
				'name'        => 'search_icon_size',
				'title'       => esc_html__( 'Icon Size (px)', 'overton' ),
				'description' => esc_html__( 'Define size for search icon', 'overton' )
			)
		);

		if ( overton_mikado_options()->getOptionValue( 'search_icon_pack' ) == 'icon_pack' ) {
			$this->params = array_merge( $search_icon_pack_params, $search_icon_params );
		} else {
			$this->params = $search_icon_params;
		}

	}
	
	public function widget( $args, $instance ) {
		$enable_search_icon_text = overton_mikado_options()->getOptionValue( 'enable_search_icon_text' );
		
		$classes = array(
			'mkdf-search-opener',
			'mkdf-icon-has-hover'
		);
		
		$classes[] = overton_mikado_get_icon_sources_class( 'search', 'mkdf-search-opener' );
		
		$styles           = array();
		$show_search_text = $instance['show_label'] == 'yes' || $enable_search_icon_text == 'yes' ? true : false;
		
		if ( ! empty( $instance['search_icon_size'] ) ) {
			$styles[] = 'font-size: ' . intval( $instance['search_icon_size'] ) . 'px';
		}
		
		if ( ! empty( $instance['search_icon_color'] ) ) {
			$styles[] = 'color: ' . $instance['search_icon_color'] . ';';
		}
		
		if ( ! empty( $instance['search_icon_margin'] ) ) {
			$styles[] = 'margin: ' . $instance['search_icon_margin'] . ';';
		}
		?>
		<div class="mkdf-search-opener-holder">
            <a <?php overton_mikado_inline_attr( $instance['search_icon_hover_color'], 'data-hover-color' ); ?> <?php overton_mikado_inline_style( $styles ); ?> <?php overton_mikado_class_attribute( $classes ); ?> href="javascript:void(0)">
            <span class="mkdf-search-opener-wrapper">
	            <?php echo overton_mikado_get_icon_sources_html( 'search', false, array( 'search' => 'yes' ) ); ?>
                <?php if ( $show_search_text ) { ?>
                    <span class="mkdf-search-icon-text"><?php esc_html_e( 'Search', 'overton' ); ?></span>
                <?php } ?>
            </span>
            </a>
            <?php do_action('overton_mikado_action_after_search_opener'); ?>
        </div>
	<?php }
}