<?php

if ( ! function_exists( 'overton_mikado_mobile_header_general_styles' ) ) {
	/**
	 * Generates general custom styles for mobile header
	 */
	function overton_mikado_mobile_header_general_styles() {
		$item_styles      = array();
		$height           = overton_mikado_options()->getOptionValue( 'mobile_header_height' );
		$background_color = overton_mikado_options()->getOptionValue( 'mobile_header_background_color' );
		$border_color     = overton_mikado_options()->getOptionValue( 'mobile_header_border_bottom_color' );
		
		if ( ! empty( $height ) ) {
			$item_styles['height'] = overton_mikado_filter_px( $height ) . 'px';
		}
		
		if ( ! empty( $background_color ) ) {
			$item_styles['background-color'] = $background_color;
		}
		
		if ( ! empty( $border_color ) ) {
			$item_styles['border-color'] = $border_color;
		}
		
		echo overton_mikado_dynamic_css( '.mkdf-mobile-header .mkdf-mobile-header-inner', $item_styles );
	}
	
	add_action( 'overton_mikado_action_style_dynamic', 'overton_mikado_mobile_header_general_styles' );
}

if ( ! function_exists( 'overton_mikado_mobile_navigation_styles' ) ) {
	/**
	 * Generates styles for mobile navigation
	 */
	function overton_mikado_mobile_navigation_styles() {
		$mobile_nav_styles = array();
		$background_color  = overton_mikado_options()->getOptionValue( 'mobile_menu_background_color' );
		$border_color      = overton_mikado_options()->getOptionValue( 'mobile_menu_border_bottom_color' );
		
		if ( ! empty( $background_color ) ) {
			$mobile_nav_styles['background-color'] = $background_color;
		}
		
		if ( ! empty( $border_color ) ) {
			$mobile_nav_styles['border-color'] = $border_color;
		}
		
		echo overton_mikado_dynamic_css( '.mkdf-mobile-header .mkdf-mobile-nav', $mobile_nav_styles );
		
		$nav_item_styles          = array();
		$nav_border_color         = overton_mikado_options()->getOptionValue( 'mobile_menu_separator_color' );
		$mobile_nav_item_selector = array(
			'.mkdf-mobile-header .mkdf-mobile-nav ul li a',
			'.mkdf-mobile-header .mkdf-mobile-nav ul li h6'
		);
		
		if ( ! empty( $nav_border_color ) ) {
			$nav_item_styles['border-bottom-color'] = $nav_border_color;
		}
		
		echo overton_mikado_dynamic_css( $mobile_nav_item_selector, $nav_item_styles );
		
		
		// mobile dropdown 1st level menu style
		
		$mobile_menu_style = overton_mikado_get_typography_styles( 'mobile_text' );
		
		$mobile_menu_selector = array(
			'.mkdf-mobile-header .mkdf-mobile-nav .mkdf-grid > ul > li > a',
			'.mkdf-mobile-header .mkdf-mobile-nav .mkdf-grid > ul > li > h6'
		);
		
		echo overton_mikado_dynamic_css( $mobile_menu_selector, $mobile_menu_style );
		
		
		$mobile_nav_item_hover_styles = array();
		$mobile_text_hover_color      = overton_mikado_options()->getOptionValue( 'mobile_text_hover_color' );
		
		if ( ! empty( $mobile_text_hover_color ) ) {
			$mobile_nav_item_hover_styles['color'] = $mobile_text_hover_color;
		}
		
		$mobile_nav_item_selector_hover = array(
			'.mkdf-mobile-header .mkdf-mobile-nav .mkdf-grid > ul > li.mkdf-active-item > a',
			'.mkdf-mobile-header .mkdf-mobile-nav .mkdf-grid > ul > li.mkdf-active-item > h6',
			'.mkdf-mobile-header .mkdf-mobile-nav .mkdf-grid > ul > li > a:hover',
			'.mkdf-mobile-header .mkdf-mobile-nav .mkdf-grid > ul > li > h6:hover'
		);
		
		echo overton_mikado_dynamic_css( $mobile_nav_item_selector_hover, $mobile_nav_item_hover_styles );
		
		// mobile dropdown deeper levels menu style
		
		$mobile_dropdown_style = overton_mikado_get_typography_styles( 'mobile_dropdown_text' );
		
		$mobile_dropdown_selector = array(
			'.mkdf-mobile-header .mkdf-mobile-nav ul ul li a',
			'.mkdf-mobile-header .mkdf-mobile-nav ul ul li h6'
		);
		
		echo overton_mikado_dynamic_css( $mobile_dropdown_selector, $mobile_dropdown_style );
		
		
		$mobile_nav_dropdown_item_hover_styles = array();
		$mobile_nav_dropdown_hover_color       = overton_mikado_options()->getOptionValue( 'mobile_dropdown_text_hover_color' );
		
		if ( ! empty( $mobile_nav_dropdown_hover_color ) ) {
			$mobile_nav_dropdown_item_hover_styles['color'] = $mobile_nav_dropdown_hover_color;
		}
		
		$mobile_nav_dropdown_item_selector_hover = array(
			'.mkdf-mobile-header .mkdf-mobile-nav ul ul li.current-menu-ancestor > a',
			'.mkdf-mobile-header .mkdf-mobile-nav ul ul li.current-menu-item > a',
			'.mkdf-mobile-header .mkdf-mobile-nav ul ul li.current-menu-ancestor > h6',
			'.mkdf-mobile-header .mkdf-mobile-nav ul ul li.current-menu-item > h6',
			'.mkdf-mobile-header .mkdf-mobile-nav ul ul li a:hover',
			'.mkdf-mobile-header .mkdf-mobile-nav ul ul li h6:hover'
		);
		
		echo overton_mikado_dynamic_css( $mobile_nav_dropdown_item_selector_hover, $mobile_nav_dropdown_item_hover_styles );
	}
	
	add_action( 'overton_mikado_action_style_dynamic', 'overton_mikado_mobile_navigation_styles' );
}

if ( ! function_exists( 'overton_mikado_mobile_logo_styles' ) ) {
	/**
	 * Generates styles for mobile logo
	 */
	function overton_mikado_mobile_logo_styles() {
		$logo_height          = overton_mikado_options()->getOptionValue( 'mobile_logo_height' );
		$mobile_logo_height   = overton_mikado_options()->getOptionValue( 'mobile_logo_height_phones' );
		$mobile_header_height = overton_mikado_options()->getOptionValue( 'mobile_header_height' );
		
		if ( ! empty( $logo_height ) ) { ?>
			@media only screen and (max-width: 1024px) {
			<?php echo overton_mikado_dynamic_css(
				'.mkdf-mobile-header .mkdf-mobile-logo-wrapper a',
				array( 'height' => overton_mikado_filter_px( $logo_height ) . 'px !important' )
			); ?>
			}
		<?php }
		
		if ( ! empty( $mobile_logo_height ) ) { ?>
			@media only screen and (max-width: 480px) {
			<?php echo overton_mikado_dynamic_css(
				'.mkdf-mobile-header .mkdf-mobile-logo-wrapper a',
				array( 'height' => overton_mikado_filter_px( $mobile_logo_height ) . 'px !important' )
			); ?>
			}
		<?php }
		
		if ( ! empty( $mobile_header_height ) ) {
			echo overton_mikado_dynamic_css( '.mkdf-mobile-header .mkdf-mobile-logo-wrapper a', array( 'max-height' => overton_mikado_filter_px( $mobile_header_height ) . 'px' ) );
		}
	}
	
	add_action( 'overton_mikado_action_style_dynamic', 'overton_mikado_mobile_logo_styles' );
}

if ( ! function_exists( 'overton_mikado_mobile_icon_styles' ) ) {
	/**
	 * Generates styles for mobile icon opener
	 */
	function overton_mikado_mobile_icon_styles() {
		$icon_color       = overton_mikado_options()->getOptionValue( 'mobile_icon_color' );
		$icon_hover_color = overton_mikado_options()->getOptionValue( 'mobile_icon_hover_color' );
		
		if ( ! empty( $icon_color ) ) {
			echo overton_mikado_dynamic_css( '.mkdf-mobile-header .mkdf-mobile-menu-opener a', array( 'color' => $icon_color ) );
		}
		
		if ( ! empty( $icon_hover_color ) ) {
			echo overton_mikado_dynamic_css( '.mkdf-mobile-header .mkdf-mobile-menu-opener a:hover, .mkdf-mobile-header .mkdf-mobile-menu-opener.mkdf-mobile-menu-opened a', array( 'color' => $icon_hover_color ) );
		}
	}
	
	add_action( 'overton_mikado_action_style_dynamic', 'overton_mikado_mobile_icon_styles' );
}