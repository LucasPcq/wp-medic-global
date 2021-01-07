<?php
// Add plugin-specific colors and fonts to the custom CSS
if ( ! function_exists( 'blabber_wpml_get_css' ) ) {
	add_filter( 'blabber_filter_get_css', 'blabber_wpml_get_css', 10, 2 );
	function blabber_wpml_get_css( $css, $args ) {
		return $css;
	}
}

