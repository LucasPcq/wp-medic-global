<?php

class OvertonMikadoClassSeparatorWidget extends OvertonMikadoClassWidget {
	public function __construct() {
		parent::__construct(
			'mkdf_separator_widget',
			esc_html__( 'Overton Separator Widget', 'overton' ),
			array( 'description' => esc_html__( 'Add a separator element to your widget areas', 'overton' ) )
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
					'normal'     => esc_html__( 'Normal', 'overton' ),
					'full-width' => esc_html__( 'Full Width', 'overton' )
				)
			),
			array(
				'type'    => 'dropdown',
				'name'    => 'position',
				'title'   => esc_html__( 'Position', 'overton' ),
				'options' => array(
					'center' => esc_html__( 'Center', 'overton' ),
					'left'   => esc_html__( 'Left', 'overton' ),
					'right'  => esc_html__( 'Right', 'overton' )
				)
			),
			array(
				'type'    => 'dropdown',
				'name'    => 'border_style',
				'title'   => esc_html__( 'Style', 'overton' ),
				'options' => array(
					'solid'  => esc_html__( 'Solid', 'overton' ),
					'dashed' => esc_html__( 'Dashed', 'overton' ),
					'dotted' => esc_html__( 'Dotted', 'overton' )
				)
			),
			array(
				'type'  => 'colorpicker',
				'name'  => 'color',
				'title' => esc_html__( 'Color', 'overton' )
			),
			array(
				'type'  => 'textfield',
				'name'  => 'width',
				'title' => esc_html__( 'Width (px or %)', 'overton' )
			),
			array(
				'type'  => 'textfield',
				'name'  => 'thickness',
				'title' => esc_html__( 'Thickness (px)', 'overton' )
			),
			array(
				'type'  => 'textfield',
				'name'  => 'top_margin',
				'title' => esc_html__( 'Top Margin (px or %)', 'overton' )
			),
			array(
				'type'  => 'textfield',
				'name'  => 'bottom_margin',
				'title' => esc_html__( 'Bottom Margin (px or %)', 'overton' )
			)
		);
	}
	
	public function widget( $args, $instance ) {
		if ( ! is_array( $instance ) ) {
			$instance = array();
		}
		
		//prepare variables
		$params = '';
		
		//is instance empty?
		if ( is_array( $instance ) && count( $instance ) ) {
			//generate shortcode params
			foreach ( $instance as $key => $value ) {
				$params .= " $key='$value' ";
			}
		}
		
		echo '<div class="widget mkdf-separator-widget">';
			echo do_shortcode( "[mkdf_separator $params]" ); // XSS OK
		echo '</div>';
	}
}