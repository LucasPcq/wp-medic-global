<?php

if ( ! function_exists( 'overton_mikado_disable_wpml_css' ) ) {
	function overton_mikado_disable_wpml_css() {
		define( 'ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true );
	}
	
	add_action( 'after_setup_theme', 'overton_mikado_disable_wpml_css' );
}