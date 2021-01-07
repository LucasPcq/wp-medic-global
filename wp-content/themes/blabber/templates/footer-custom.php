<?php
/**
 * The template to display default site footer
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0.10
 */

$blabber_footer_id = blabber_get_custom_footer_id();
$blabber_footer_meta = get_post_meta( $blabber_footer_id, 'trx_addons_options', true );
if ( ! empty( $blabber_footer_meta['margin'] ) ) {
	blabber_add_inline_css( sprintf( '.page_content_wrap{padding-bottom:%s}', esc_attr( blabber_prepare_css_value( $blabber_footer_meta['margin'] ) ) ) );
}
?>
<footer class="footer_wrap footer_custom footer_custom_<?php echo esc_attr( $blabber_footer_id ); ?> footer_custom_<?php echo esc_attr( sanitize_title( get_the_title( $blabber_footer_id ) ) ); ?>
						<?php
						$blabber_footer_scheme = blabber_get_theme_option( 'footer_scheme' );
						if ( ! empty( $blabber_footer_scheme ) && ! blabber_is_inherit( $blabber_footer_scheme  ) ) {
							echo ' scheme_' . esc_attr( $blabber_footer_scheme );
						}
						?>
						">
	<?php
	// Custom footer's layout
	do_action( 'blabber_action_show_layout', $blabber_footer_id );
	?>
</footer><!-- /.footer_wrap -->
