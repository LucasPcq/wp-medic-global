<?php
/**
 * Plugin support: WP Recipe Maker (Importer support)
 *
 * @package WordPress
 * @subpackage ThemeREX Addons
 * @since v1.5
 */

// Don't load directly
if ( ! defined( 'TRX_ADDONS_VERSION' ) ) {
	die( '-1' );
}

// Check plugin in the required plugins
if ( !function_exists( 'trx_addons_wp_recipe_maker_importer_required_plugins' ) ) {
	add_filter( 'trx_addons_filter_importer_required_plugins',	'trx_addons_wp_recipe_maker_importer_required_plugins', 10, 2 );
	function trx_addons_wp_recipe_maker_importer_required_plugins($not_installed='', $list='') {
		if (strpos($list, 'wp-recipe-maker')!==false && !trx_addons_exists_wp_recipe_maker() )
			$not_installed .= '<br>' . esc_html__('WP Recipe Maker', 'blabber');
		return $not_installed;

	}
}

// Set plugin's specific importer options
if ( !function_exists( 'trx_addons_wp_recipe_maker_importer_set_options' ) ) {
	add_filter( 'trx_addons_filter_importer_options',	'trx_addons_wp_recipe_maker_importer_set_options' );
	function trx_addons_wp_recipe_maker_importer_set_options($options=array()) {
		if ( trx_addons_exists_wp_recipe_maker() && in_array('wp-recipe-maker', $options['required_plugins']) ) {
			$options['additional_options'][]	= 'wprm_%';					// Add slugs to export options for this plugin
		}
		return $options;
	}
}