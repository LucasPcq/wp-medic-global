<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0
 */

if ( blabber_sidebar_present() ) {
	ob_start();
	$blabber_sidebar_name = blabber_get_theme_option( 'sidebar_widgets' );
	blabber_storage_set( 'current_sidebar', 'sidebar' );
	if ( is_active_sidebar( $blabber_sidebar_name ) ) {
		dynamic_sidebar( $blabber_sidebar_name );
	}
	$blabber_out = trim( ob_get_contents() );
	ob_end_clean();
	if ( ! empty( $blabber_out ) ) {
		$blabber_sidebar_position    = blabber_get_theme_option( 'sidebar_position' );
		$blabber_sidebar_position_ss = blabber_get_theme_option( 'sidebar_position_ss' );
		?>
		<div class="sidebar widget_area
			<?php
			echo ' ' . esc_attr( $blabber_sidebar_position );
			echo ' sidebar_' . esc_attr( $blabber_sidebar_position_ss );

			if ( 'float' == $blabber_sidebar_position_ss ) {
				echo ' sidebar_float';
			}
			$blabber_sidebar_scheme = blabber_get_theme_option( 'sidebar_scheme' );
			if ( ! empty( $blabber_sidebar_scheme ) && ! blabber_is_inherit( $blabber_sidebar_scheme ) ) {
				echo ' scheme_' . esc_attr( $blabber_sidebar_scheme );
			}
			?>
		" role="complementary">
			<?php
			// Skip link anchor to fast access to the sidebar from keyboard
			?>
			<a id="sidebar_skip_link_anchor" class="blabber_skip_link_anchor" href="#"></a>
			<?php
			// Single posts banner before sidebar
			blabber_show_post_banner( 'sidebar' );
			// Button to show/hide sidebar on mobile
			if ( in_array( $blabber_sidebar_position_ss, array( 'above', 'float' ) ) ) {
				$blabber_title = apply_filters( 'blabber_filter_sidebar_control_title', 'float' == $blabber_sidebar_position_ss ? __( 'Show Sidebar', 'blabber' ) : '' );
				$blabber_text  = apply_filters( 'blabber_filter_sidebar_control_text', 'above' == $blabber_sidebar_position_ss ? __( 'Show Sidebar', 'blabber' ) : '' );
				?>
				<a href="#" class="sidebar_control" title="<?php echo esc_html( $blabber_title ); ?>"><?php echo esc_html( $blabber_text ); ?></a>
				<?php
			}
			?>
			<div class="sidebar_inner">
				<?php
				do_action( 'blabber_action_before_sidebar' );
				blabber_show_layout( preg_replace( "/<\/aside>[\r\n\s]*<aside/", '</aside><aside', $blabber_out ) );
				do_action( 'blabber_action_after_sidebar' );
				?>
			</div><!-- /.sidebar_inner -->
		</div><!-- /.sidebar -->
		<div class="clearfix"></div>
		<?php
	}
}
