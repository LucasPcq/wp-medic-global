<?php
/**
 * The template to display the logo or the site name and the slogan in the Header
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0
 */

$blabber_args = get_query_var( 'blabber_logo_args' );

// Site logo
$blabber_logo_type   = isset( $blabber_args['type'] ) ? $blabber_args['type'] : '';
$blabber_logo_image  = blabber_get_logo_image( $blabber_logo_type );
$blabber_logo_text   = blabber_is_on( blabber_get_theme_option( 'logo_text' ) ) ? get_bloginfo( 'name' ) : '';
$blabber_logo_slogan = get_bloginfo( 'description', 'display' );
if ( ! empty( $blabber_logo_image['logo'] ) || ! empty( $blabber_logo_text ) ) {
	?><a class="sc_layouts_logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
		<?php
		if ( ! empty( $blabber_logo_image['logo'] ) ) {
			if ( empty( $blabber_logo_type ) && function_exists( 'the_custom_logo' ) && (int) $blabber_logo_image['logo'] > 0 ) {
				the_custom_logo();
			} else {
				$blabber_attr = blabber_getimagesize( $blabber_logo_image['logo'] );
				echo '<img src="' . esc_url( $blabber_logo_image['logo'] ) . '"'
						. ( ! empty( $blabber_logo_image['logo_retina'] ) ? ' srcset="' . esc_url( $blabber_logo_image['logo_retina'] ) . ' 2x"' : '' )
						. ' alt="' . esc_attr( $blabber_logo_text ) . '"'
						. ( ! empty( $blabber_attr[3] ) ? ' ' . wp_kses_data( $blabber_attr[3] ) : '' )
						. '>';
			}
		} else {
			blabber_show_layout( blabber_prepare_macros( $blabber_logo_text ), '<span class="logo_text">', '</span>' );
			blabber_show_layout( blabber_prepare_macros( $blabber_logo_slogan ), '<span class="logo_slogan">', '</span>' );
		}
		?>
	</a>
	<?php
}
