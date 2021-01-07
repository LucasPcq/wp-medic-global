<?php
/**
 * The template to display the site logo in the footer
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0.10
 */

// Logo
if ( blabber_is_on( blabber_get_theme_option( 'logo_in_footer' ) ) ) {
	$blabber_logo_image = blabber_get_logo_image( 'footer' );
	$blabber_logo_text  = get_bloginfo( 'name' );
	if ( ! empty( $blabber_logo_image['logo'] ) || ! empty( $blabber_logo_text ) ) {
		?>
		<div class="footer_logo_wrap">
			<div class="footer_logo_inner">
				<?php
				if ( ! empty( $blabber_logo_image['logo'] ) ) {
					$blabber_attr = blabber_getimagesize( $blabber_logo_image['logo'] );
					echo '<a href="' . esc_url( home_url( '/' ) ) . '">'
							. '<img src="' . esc_url( $blabber_logo_image['logo'] ) . '"'
								. ( ! empty( $blabber_logo_image['logo_retina'] ) ? ' srcset="' . esc_url( $blabber_logo_image['logo_retina'] ) . ' 2x"' : '' )
								. ' class="logo_footer_image"'
								. ' alt="' . esc_attr__( 'Site logo', 'blabber' ) . '"'
								. ( ! empty( $blabber_attr[3] ) ? ' ' . wp_kses_data( $blabber_attr[3] ) : '' )
							. '>'
						. '</a>';
				} elseif ( ! empty( $blabber_logo_text ) ) {
					echo '<h1 class="logo_footer_text">'
							. '<a href="' . esc_url( home_url( '/' ) ) . '">'
								. esc_html( $blabber_logo_text )
							. '</a>'
						. '</h1>';
				}
				?>
			</div>
		</div>
		<?php
	}
}
