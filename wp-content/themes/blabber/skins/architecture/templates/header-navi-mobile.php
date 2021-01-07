<?php
/**
 * The template to show mobile menu
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0
 */
?>
<div class="menu_mobile_overlay"></div>
<div class="menu_mobile menu_mobile_<?php echo esc_attr( blabber_get_theme_option( 'menu_mobile_fullscreen' ) > 0 ? 'fullscreen' : 'narrow' ); ?> scheme_default">
	<div class="menu_mobile_inner">
		<a class="menu_mobile_close theme_button_close"><span class="theme_button_close_icon"></span></a>
		<?php

		// Logo
		set_query_var( 'blabber_logo_args', array( 'type' => 'mobile' ) );
		get_template_part( apply_filters( 'blabber_filter_get_template_part', 'templates/header-logo' ) );
		set_query_var( 'blabber_logo_args', array() );

		// Mobile menu
		$blabber_menu_mobile = blabber_get_nav_menu( 'menu_mobile' );
		if ( empty( $blabber_menu_mobile ) ) {
			$blabber_menu_mobile = apply_filters( 'blabber_filter_get_mobile_menu', '' );
			if ( empty( $blabber_menu_mobile ) ) {
				$blabber_menu_mobile = blabber_get_nav_menu( 'menu_main' );
				if ( empty( $blabber_menu_mobile ) ) {
					$blabber_menu_mobile = blabber_get_nav_menu();
				}
			}
		}
		if ( ! empty( $blabber_menu_mobile ) ) {
			$blabber_menu_mobile = str_replace(
				array( 'menu_main',   'id="menu-',        'sc_layouts_menu_nav', 'sc_layouts_menu ', 'sc_layouts_hide_on_mobile', 'hide_on_mobile' ),
				array( 'menu_mobile', 'id="menu_mobile-', '',                    ' ',                '',                          '' ),
				$blabber_menu_mobile
			);
			if ( strpos( $blabber_menu_mobile, '<nav ' ) === false ) {
				$blabber_menu_mobile = sprintf( '<nav class="menu_mobile_nav_area">%s</nav>', $blabber_menu_mobile );
			}
			blabber_show_layout( apply_filters( 'blabber_filter_menu_mobile_layout', $blabber_menu_mobile ) );
		}

		// Social icons
		blabber_show_layout( blabber_get_socials_links(), '<div class="socials_mobile">', '</div>' );
		?>
	</div>
</div>