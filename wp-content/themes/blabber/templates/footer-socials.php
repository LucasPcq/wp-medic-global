<?php
/**
 * The template to display the socials in the footer
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0.10
 */


// Socials
if ( blabber_is_on( blabber_get_theme_option( 'socials_in_footer' ) ) ) {
	$blabber_output = blabber_get_socials_links();
	if ( '' != $blabber_output ) {
		?>
		<div class="footer_socials_wrap socials_wrap">
			<div class="footer_socials_inner">
				<?php blabber_show_layout( $blabber_output ); ?>
			</div>
		</div>
		<?php
	}
}
