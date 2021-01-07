<?php

class OvertonMikadoClassButtonWidget extends OvertonMikadoClassWidget {
	public function __construct() {
		parent::__construct(
			'mkdf_button_widget',
			esc_html__( 'Overton Button Widget', 'overton' ),
			array( 'description' => esc_html__( 'Add button element to widget areas', 'overton' ) )
		);
		
		$this->setParams();
	}
	
	protected function setParams() {
		$this->params = array(
			array(
				'type'    => 'dropdown',
				'name'    => 'type',
				'title'   => esc_html__( 'Type', 'overton' ),
				'options' => array(
					'solid'   => esc_html__( 'Solid', 'overton' ),
					'outline' => esc_html__( 'Outline', 'overton' ),
					'simple'  => esc_html__( 'Simple', 'overton' )
				)
			),
			array(
				'type'        => 'dropdown',
				'name'        => 'size',
				'title'       => esc_html__( 'Size', 'overton' ),
				'options'     => array(
					'small'  => esc_html__( 'Small', 'overton' ),
					'medium' => esc_html__( 'Medium', 'overton' ),
					'large'  => esc_html__( 'Large', 'overton' ),
					'huge'   => esc_html__( 'Huge', 'overton' )
				),
				'description' => esc_html__( 'This option is only available for solid and outline button type', 'overton' )
			),
			array(
				'type'    => 'textfield',
				'name'    => 'text',
				'title'   => esc_html__( 'Text', 'overton' ),
				'default' => esc_html__( 'Button Text', 'overton' )
			),
			array(
				'type'  => 'textfield',
				'name'  => 'link',
				'title' => esc_html__( 'Link', 'overton' )
			),
			array(
				'type'    => 'dropdown',
				'name'    => 'target',
				'title'   => esc_html__( 'Link Target', 'overton' ),
				'options' => overton_mikado_get_link_target_array()
			),
			array(
				'type'  => 'colorpicker',
				'name'  => 'color',
				'title' => esc_html__( 'Color', 'overton' )
			),
			array(
				'type'  => 'colorpicker',
				'name'  => 'hover_color',
				'title' => esc_html__( 'Hover Color', 'overton' )
			),
			array(
				'type'        => 'colorpicker',
				'name'        => 'background_color',
				'title'       => esc_html__( 'Background Color', 'overton' ),
				'description' => esc_html__( 'This option is only available for solid button type', 'overton' )
			),
			array(
				'type'        => 'colorpicker',
				'name'        => 'hover_background_color',
				'title'       => esc_html__( 'Hover Background Color', 'overton' ),
				'description' => esc_html__( 'This option is only available for solid button type', 'overton' )
			),
			array(
				'type'        => 'colorpicker',
				'name'        => 'border_color',
				'title'       => esc_html__( 'Border Color', 'overton' ),
				'description' => esc_html__( 'This option is only available for solid and outline button type', 'overton' )
			),
			array(
				'type'        => 'colorpicker',
				'name'        => 'hover_border_color',
				'title'       => esc_html__( 'Hover Border Color', 'overton' ),
				'description' => esc_html__( 'This option is only available for solid and outline button type', 'overton' )
			),
			array(
				'type'        => 'textfield',
				'name'        => 'margin',
				'title'       => esc_html__( 'Margin', 'overton' ),
				'description' => esc_html__( 'Insert margin in format: top right bottom left (e.g. 10px 5px 10px 5px)', 'overton' )
			)
		);
	}
	
	public function widget( $args, $instance ) {
		$params = '';
		
		if ( ! is_array( $instance ) ) {
			$instance = array();
		}
		
		// Filter out all empty params
		$instance = array_filter( $instance, function ( $array_value ) {
			return trim( $array_value ) != '';
		} );
		
		// Default values
		if ( ! isset( $instance['text'] ) ) {
			$instance['text'] = 'Button Text';
		}
		
		// Generate shortcode params
		foreach ( $instance as $key => $value ) {
			$params .= " $key='$value' ";
		}
		
		echo '<div class="widget mkdf-button-widget">';
			echo do_shortcode( "[mkdf_button $params]" ); // XSS OK
		echo '</div>';
	}
}