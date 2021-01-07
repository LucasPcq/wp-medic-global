<?php
/**
 * The template to display default site footer
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0.10
 */

?>
<footer class="footer_wrap footer_default
<?php
$blabber_footer_scheme = blabber_get_theme_option( 'footer_scheme' );
if ( ! empty( $blabber_footer_scheme ) && ! blabber_is_inherit( $blabber_footer_scheme  ) ) {
	echo ' scheme_' . esc_attr( $blabber_footer_scheme );
}
?>
				">
	<?php

	// Footer widgets area
	get_template_part( apply_filters( 'blabber_filter_get_template_part', 'templates/footer-widgets' ) );

	// Logo
	get_template_part( apply_filters( 'blabber_filter_get_template_part', 'templates/footer-logo' ) );

	// Socials
	get_template_part( apply_filters( 'blabber_filter_get_template_part', 'templates/footer-socials' ) );

	// Copyright area
	get_template_part( apply_filters( 'blabber_filter_get_template_part', 'templates/footer-copyright' ) );

	?>
</footer><!-- /.footer_wrap -->
