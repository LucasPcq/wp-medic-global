<?php
/* WP Recipe Maker support functions
------------------------------------------------------------------------------- */

// Theme init priorities:
// 9 - register other filters (for installer, etc.)
if ( ! function_exists( 'blabber_maker_theme_setup9' ) ) {
	add_action( 'after_setup_theme', 'blabber_maker_theme_setup9', 9 );
	function blabber_maker_theme_setup9() {
		if ( is_admin() ) {
			add_filter( 'blabber_filter_tgmpa_required_plugins', 'blabber_maker_tgmpa_required_plugins' );
		}
	}
}

// Filter to add in the required plugins list
if ( ! function_exists( 'blabber_maker_tgmpa_required_plugins' ) ) {
	//Handler of the add_filter('blabber_filter_tgmpa_required_plugins',	'blabber_maker_tgmpa_required_plugins');
	function blabber_maker_tgmpa_required_plugins( $list = array() ) {
		if ( blabber_storage_isset( 'required_plugins', 'wp-recipe-maker' ) && blabber_storage_get_array( 'required_plugins', 'wp-recipe-maker', 'install' ) !== false ) {
			$list[] = array(
				'name'     => blabber_storage_get_array( 'required_plugins', 'wp-recipe-maker', 'title' ),
				'slug'     => 'wp-recipe-maker',
				'required' => false,
			);
		}
		return $list;
	}
}

// Section: "OTHER"
if(isset($GLOBALS['BLABBER_STORAGE']['required_plugins'])) {
	$GLOBALS['BLABBER_STORAGE']['required_plugins']['wp-recipe-maker'] = array(
		'title' => esc_html__('WP Recipe Maker', 'blabber'),
		'description' => esc_html__("WP Recipe Maker is the easy recipe plugin that everyone can use.", 'blabber'),
		'required' => false,
		'logo' => blabber_get_file_url('plugins/wp-recipe-maker/logo.png'),
		'group' => esc_html__('Other', 'blabber'),
	);
}


// Check if plugin installed and activated
if ( !function_exists( 'trx_addons_exists_wp_recipe_maker' ) ) {

    function trx_addons_exists_wp_recipe_maker() {
        return  defined('WPRM_VERSION');
    }
}

// One-click import support
if ( is_admin() ) {
    require_once BLABBER_THEME_DIR . BLABBER_SKIN_DIR . 'plugins/wp-recipe-maker/wp-recipe-maker-demo-importer.php';
}

// OCDI support
if ( is_admin() && trx_addons_exists_wp_recipe_maker() && trx_addons_exists_ocdi() ) {
    require_once BLABBER_THEME_DIR . BLABBER_SKIN_DIR . 'plugins/wp-recipe-maker/wp-recipe-maker-demo-ocdi.php';
}