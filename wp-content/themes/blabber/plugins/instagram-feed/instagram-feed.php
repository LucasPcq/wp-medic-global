<?php
/* Instagram Feed support functions
------------------------------------------------------------------------------- */

// Theme init priorities:
// 9 - register other filters (for installer, etc.)
if ( ! function_exists( 'blabber_instagram_feed_theme_setup9' ) ) {
	add_action( 'after_setup_theme', 'blabber_instagram_feed_theme_setup9', 9 );
	function blabber_instagram_feed_theme_setup9() {
		if ( blabber_exists_instagram_feed() ) {
			add_action( 'wp_enqueue_scripts', 'blabber_instagram_responsive_styles', 2000 );
			add_filter( 'blabber_filter_merge_styles_responsive', 'blabber_instagram_merge_styles_responsive' );
		}
		if ( is_admin() ) {
			add_filter( 'blabber_filter_tgmpa_required_plugins', 'blabber_instagram_feed_tgmpa_required_plugins' );
		}
	}
}

// Filter to add in the required plugins list
if ( ! function_exists( 'blabber_instagram_feed_tgmpa_required_plugins' ) ) {
	//Handler of the add_filter('blabber_filter_tgmpa_required_plugins',	'blabber_instagram_feed_tgmpa_required_plugins');
	function blabber_instagram_feed_tgmpa_required_plugins( $list = array() ) {
		if ( blabber_storage_isset( 'required_plugins', 'instagram-feed' ) && blabber_storage_get_array( 'required_plugins', 'instagram-feed', 'install' ) !== false ) {
			$list[] = array(
				'name'     => blabber_storage_get_array( 'required_plugins', 'instagram-feed', 'title' ),
				'slug'     => 'instagram-feed',
				'required' => false,
			);
		}
		return $list;
	}
}

// Check if Instagram Feed installed and activated
if ( ! function_exists( 'blabber_exists_instagram_feed' ) ) {
	function blabber_exists_instagram_feed() {
		return defined( 'SBIVER' );
	}
}

// Enqueue responsive styles for frontend
if ( ! function_exists( 'blabber_instagram_responsive_styles' ) ) {
	//Handler of the add_action( 'wp_enqueue_scripts', 'blabber_instagram_responsive_styles', 2000 );
	function blabber_instagram_responsive_styles() {
		if ( blabber_is_on( blabber_get_theme_option( 'debug_mode' ) ) ) {
			$blabber_url = blabber_get_file_url( 'plugins/instagram/instagram-responsive.css' );
			if ( '' != $blabber_url ) {
				wp_enqueue_style( 'blabber-instagram-responsive', $blabber_url, array(), null );
			}
		}
	}
}

// Merge responsive styles
if ( ! function_exists( 'blabber_instagram_merge_styles_responsive' ) ) {
	//Handler of the add_filter('blabber_filter_merge_styles_responsive', 'blabber_instagram_merge_styles_responsive');
	function blabber_instagram_merge_styles_responsive( $list ) {
		$list[] = 'plugins/instagram/instagram-responsive.css';
		return $list;
	}
}

