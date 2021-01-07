<?php
/**
 * The template to display default site header
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0
 */

$blabber_header_css   = '';
$blabber_header_image = get_header_image();
$blabber_header_video = blabber_get_header_video();
if ( ! empty( $blabber_header_image ) && blabber_trx_addons_featured_image_override( is_singular() || blabber_storage_isset( 'blog_archive' ) || is_category() ) ) {
	$blabber_header_image = blabber_get_current_mode_image( $blabber_header_image );
}

?><header class="top_panel top_panel_default
	<?php
	echo ! empty( $blabber_header_image ) || ! empty( $blabber_header_video ) ? ' with_bg_image' : ' without_bg_image';
	if ( '' != $blabber_header_video ) {
		echo ' with_bg_video';
	}
	if ( '' != $blabber_header_image ) {
		echo ' ' . esc_attr( blabber_add_inline_css_class( 'background-image: url(' . esc_url( $blabber_header_image ) . ');' ) );
	}
	if ( is_single() && has_post_thumbnail() ) {
		echo ' with_featured_image';
	}
	if ( blabber_is_on( blabber_get_theme_option( 'header_fullheight' ) ) ) {
		echo ' header_fullheight blabber-full-height';
	}
	$blabber_header_scheme = blabber_get_theme_option( 'header_scheme' );
	if ( ! empty( $blabber_header_scheme ) && ! blabber_is_inherit( $blabber_header_scheme  ) ) {
		echo ' scheme_' . esc_attr( $blabber_header_scheme );
	}
	?>
">
	<?php

	// Background video
	if ( ! empty( $blabber_header_video ) ) {
		get_template_part( apply_filters( 'blabber_filter_get_template_part', 'templates/header-video' ) );
	}

	// Main menu
	if ( blabber_get_theme_option( 'menu_style' ) == 'top' ) {
		get_template_part( apply_filters( 'blabber_filter_get_template_part', 'templates/header-navi' ) );
	}

	// Mobile header
	if ( blabber_is_on( blabber_get_theme_option( 'header_mobile_enabled' ) ) ) {
		get_template_part( apply_filters( 'blabber_filter_get_template_part', 'templates/header-mobile' ) );
	}

		// Page title and breadcrumbs area
	if ( ! is_single() ) {
		get_template_part( apply_filters( 'blabber_filter_get_template_part', 'templates/header-title' ) );
	}

	// Header widgets area
	get_template_part( apply_filters( 'blabber_filter_get_template_part', 'templates/header-widgets' ) );
	?>
</header>
