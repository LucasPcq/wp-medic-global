<?php
/**
 * The template to display custom header from the ThemeREX Addons Layouts
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0.06
 */

$blabber_header_css   = '';
$blabber_header_image = get_header_image();
$blabber_header_video = blabber_get_header_video();
if ( ! empty( $blabber_header_image ) && blabber_trx_addons_featured_image_override( is_singular() || blabber_storage_isset( 'blog_archive' ) || is_category() ) ) {
	$blabber_header_image = blabber_get_current_mode_image( $blabber_header_image );
}

$blabber_header_id = blabber_get_custom_header_id();
$blabber_header_meta = get_post_meta( $blabber_header_id, 'trx_addons_options', true );
if ( ! empty( $blabber_header_meta['margin'] ) ) {
	blabber_add_inline_css( sprintf( '.page_content_wrap{padding-top:%s}', esc_attr( blabber_prepare_css_value( $blabber_header_meta['margin'] ) ) ) );
}

?><header class="top_panel top_panel_custom top_panel_custom_<?php echo esc_attr( $blabber_header_id ); ?> top_panel_custom_<?php echo esc_attr( sanitize_title( get_the_title( $blabber_header_id ) ) ); ?>
				<?php
				echo ! empty( $blabber_header_image ) || ! empty( $blabber_header_video )
					? ' with_bg_image'
					: ' without_bg_image';
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

	// Custom header's layout
	do_action( 'blabber_action_show_layout', $blabber_header_id );

	// Header widgets area
	get_template_part( apply_filters( 'blabber_filter_get_template_part', 'templates/header-widgets' ) );

	?>
</header>
