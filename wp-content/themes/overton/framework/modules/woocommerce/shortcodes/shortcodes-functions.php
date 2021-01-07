<?php

if ( ! function_exists( 'overton_mikado_include_woocommerce_shortcodes' ) ) {
	function overton_mikado_include_woocommerce_shortcodes() {
		foreach ( glob( MIKADO_FRAMEWORK_MODULES_ROOT_DIR . '/woocommerce/shortcodes/*/load.php' ) as $shortcode_load ) {
			include_once $shortcode_load;
		}
	}
	
	if ( overton_mikado_core_plugin_installed() ) {
		add_action( 'overton_core_action_include_shortcodes_file', 'overton_mikado_include_woocommerce_shortcodes' );
	}
}
