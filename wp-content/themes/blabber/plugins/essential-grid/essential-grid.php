<?php
/* Essential Grid support functions
------------------------------------------------------------------------------- */


// Theme init priorities:
// 9 - register other filters (for installer, etc.)
if ( ! function_exists( 'blabber_essential_grid_theme_setup9' ) ) {
	add_action( 'after_setup_theme', 'blabber_essential_grid_theme_setup9', 9 );
	function blabber_essential_grid_theme_setup9() {
		if ( blabber_exists_essential_grid() ) {
			add_action( 'wp_enqueue_scripts', 'blabber_essential_grid_frontend_scripts', 1100 );
			add_filter( 'blabber_filter_merge_styles', 'blabber_essential_grid_merge_styles' );
		}
		if ( is_admin() ) {
			add_filter( 'blabber_filter_tgmpa_required_plugins', 'blabber_essential_grid_tgmpa_required_plugins' );
		}
	}
}

// Filter to add in the required plugins list
if ( ! function_exists( 'blabber_essential_grid_tgmpa_required_plugins' ) ) {
	//Handler of the add_filter('blabber_filter_tgmpa_required_plugins',	'blabber_essential_grid_tgmpa_required_plugins');
	function blabber_essential_grid_tgmpa_required_plugins( $list = array() ) {
		if ( blabber_storage_isset( 'required_plugins', 'essential-grid' ) && blabber_storage_get_array( 'required_plugins', 'essential-grid', 'install' ) !== false && blabber_is_theme_activated() ) {
			$path = blabber_get_plugin_source_path( 'plugins/essential-grid/essential-grid.zip' );
			if ( ! empty( $path ) || blabber_get_theme_setting( 'tgmpa_upload' ) ) {
				$list[] = array(
					'name'     => blabber_storage_get_array( 'required_plugins', 'essential-grid', 'title' ),
					'slug'     => 'essential-grid',
					'source'   => ! empty( $path ) ? $path : 'upload://essential-grid.zip',
					'version'  => '2.2.4.2',
					'required' => false,
				);
			}
		}
		return $list;
	}
}

// Check if plugin installed and activated
if ( ! function_exists( 'blabber_exists_essential_grid' ) ) {
	function blabber_exists_essential_grid() {
		return defined( 'EG_PLUGIN_PATH' );
	}
}

// Enqueue styles for frontend
if ( ! function_exists( 'blabber_essential_grid_frontend_scripts' ) ) {
	//Handler of the add_action( 'wp_enqueue_scripts', 'blabber_essential_grid_frontend_scripts', 1100 );
	function blabber_essential_grid_frontend_scripts() {
		if ( blabber_is_on( blabber_get_theme_option( 'debug_mode' ) ) ) {
			$blabber_url = blabber_get_file_url( 'plugins/essential-grid/essential-grid.css' );
			if ( '' != $blabber_url ) {
				wp_enqueue_style( 'blabber-essential-grid', $blabber_url, array(), null );
			}
		}
	}
}

// Merge custom styles
if ( ! function_exists( 'blabber_essential_grid_merge_styles' ) ) {
	//Handler of the add_filter('blabber_filter_merge_styles', 'blabber_essential_grid_merge_styles');
	function blabber_essential_grid_merge_styles( $list ) {
		$list[] = 'plugins/essential-grid/essential-grid.css';
		return $list;
	}
}

