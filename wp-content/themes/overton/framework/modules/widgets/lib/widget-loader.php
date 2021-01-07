<?php

if ( ! function_exists( 'overton_mikado_register_widgets' ) ) {
	function overton_mikado_register_widgets() {
		$widgets = apply_filters( 'overton_mikado_filter_register_widgets', $widgets = array() );
		
		foreach ( $widgets as $widget ) {
			register_widget( $widget );
		}
	}
	
	add_action( 'widgets_init', 'overton_mikado_register_widgets' );
}