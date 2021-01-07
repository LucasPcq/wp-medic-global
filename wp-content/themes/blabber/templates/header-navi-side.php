<?php
/**
 * The template to display the side menu
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0
 */
?>
<div class="menu_side_wrap
<?php
echo ' menu_side_' . esc_attr( blabber_get_theme_option( 'menu_side_icons' ) > 0 ? 'icons' : 'dots' );
$blabber_menu_scheme = blabber_get_theme_option( 'menu_scheme' );
$blabber_header_scheme = blabber_get_theme_option( 'header_scheme' );
if ( ! empty( $blabber_menu_scheme ) && ! blabber_is_inherit( $blabber_menu_scheme  ) ) {
	echo ' scheme_' . esc_attr( $blabber_menu_scheme );
} elseif ( ! empty( $blabber_header_scheme ) && ! blabber_is_inherit( $blabber_header_scheme ) ) {
	echo ' scheme_' . esc_attr( $blabber_header_scheme );
}
?>
				">
	<span class="menu_side_button icon-menu-2"></span>

	<div class="menu_side_inner">
		<?php
		// Logo
		set_query_var( 'blabber_logo_args', array( 'type' => 'side' ) );
		get_template_part( apply_filters( 'blabber_filter_get_template_part', 'templates/header-logo' ) );
		set_query_var( 'blabber_logo_args', array() );
		// Main menu button
		?>
		<div class="toc_menu_item">
			<a href="#" class="toc_menu_description menu_mobile_description"><span class="toc_menu_description_title"><?php esc_html_e( 'Main menu', 'blabber' ); ?></span></a>
			<a class="menu_mobile_button toc_menu_icon icon-menu-2" href="#"></a>
		</div>		
	</div>

</div><!-- /.menu_side_wrap -->
