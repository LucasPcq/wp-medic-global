<?php
/* Mail Chimp support functions
------------------------------------------------------------------------------- */

// Theme init priorities:
// 9 - register other filters (for installer, etc.)
if ( ! function_exists( 'blabber_mailchimp_theme_setup9' ) ) {
	add_action( 'after_setup_theme', 'blabber_mailchimp_theme_setup9', 9 );
	function blabber_mailchimp_theme_setup9() {
		if ( blabber_exists_mailchimp() ) {
			add_action( 'wp_enqueue_scripts', 'blabber_mailchimp_frontend_scripts', 1100 );
			add_filter( 'blabber_filter_merge_styles', 'blabber_mailchimp_merge_styles' );
		}
		if ( is_admin() ) {
			add_filter( 'blabber_filter_tgmpa_required_plugins', 'blabber_mailchimp_tgmpa_required_plugins' );
		}
	}
}

// Filter to add in the required plugins list
if ( ! function_exists( 'blabber_mailchimp_tgmpa_required_plugins' ) ) {
	//Handler of the add_filter('blabber_filter_tgmpa_required_plugins',	'blabber_mailchimp_tgmpa_required_plugins');
	function blabber_mailchimp_tgmpa_required_plugins( $list = array() ) {
		if ( blabber_storage_isset( 'required_plugins', 'mailchimp-for-wp' ) && blabber_storage_get_array( 'required_plugins', 'mailchimp-for-wp', 'install' ) !== false ) {
			$list[] = array(
				'name'     => blabber_storage_get_array( 'required_plugins', 'mailchimp-for-wp', 'title' ),
				'slug'     => 'mailchimp-for-wp',
				'required' => false,
			);
		}
		return $list;
	}
}

// Check if plugin installed and activated
if ( ! function_exists( 'blabber_exists_mailchimp' ) ) {
	function blabber_exists_mailchimp() {
		return function_exists( '__mc4wp_load_plugin' ) || defined( 'MC4WP_VERSION' );
	}
}



// Custom styles and scripts
//------------------------------------------------------------------------

// Enqueue styles for frontend
if ( ! function_exists( 'blabber_mailchimp_frontend_scripts' ) ) {
	//Handler of the add_action( 'wp_enqueue_scripts', 'blabber_mailchimp_frontend_scripts', 1100 );
	function blabber_mailchimp_frontend_scripts() {
		if ( blabber_is_on( blabber_get_theme_option( 'debug_mode' ) ) ) {
			$blabber_url = blabber_get_file_url( 'plugins/mailchimp-for-wp/mailchimp-for-wp.css' );
			if ( '' != $blabber_url ) {
				wp_enqueue_style( 'blabber-mailchimp', $blabber_url, array(), null );
			}
		}
	}
}

// Merge custom styles
if ( ! function_exists( 'blabber_mailchimp_merge_styles' ) ) {
	//Handler of the add_filter( 'blabber_filter_merge_styles', 'blabber_mailchimp_merge_styles');
	function blabber_mailchimp_merge_styles( $list ) {
		$list[] = 'plugins/mailchimp-for-wp/mailchimp-for-wp.css';
		return $list;
	}
}


// Add plugin-specific colors and fonts to the custom CSS
if ( blabber_exists_mailchimp() ) {
	require_once BLABBER_THEME_DIR . 'plugins/mailchimp-for-wp/mailchimp-for-wp-styles.php'; }

