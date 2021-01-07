<?php

if ( overton_mikado_contact_form_7_installed() ) {
	include_once MIKADO_FRAMEWORK_MODULES_ROOT_DIR . '/widgets/contact-form-7/contact-form-7.php';
	
	add_filter( 'overton_mikado_filter_register_widgets', 'overton_mikado_register_cf7_widget' );
}

if ( ! function_exists( 'overton_mikado_register_cf7_widget' ) ) {
	/**
	 * Function that register cf7 widget
	 */
	function overton_mikado_register_cf7_widget( $widgets ) {
		$widgets[] = 'OvertonMikadoClassContactForm7Widget';
		
		return $widgets;
	}
}