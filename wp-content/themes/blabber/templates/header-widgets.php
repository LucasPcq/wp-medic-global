<?php
/**
 * The template to display the widgets area in the header
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0
 */

// Header sidebar
$blabber_header_name    = blabber_get_theme_option( 'header_widgets' );
$blabber_header_present = ! blabber_is_off( $blabber_header_name ) && is_active_sidebar( $blabber_header_name );
if ( $blabber_header_present ) {
	blabber_storage_set( 'current_sidebar', 'header' );
	$blabber_header_wide = blabber_get_theme_option( 'header_wide' );
	ob_start();
	if ( is_active_sidebar( $blabber_header_name ) ) {
		dynamic_sidebar( $blabber_header_name );
	}
	$blabber_widgets_output = ob_get_contents();
	ob_end_clean();
	if ( ! empty( $blabber_widgets_output ) ) {
		$blabber_widgets_output = preg_replace( "/<\/aside>[\r\n\s]*<aside/", '</aside><aside', $blabber_widgets_output );
		$blabber_need_columns   = strpos( $blabber_widgets_output, 'columns_wrap' ) === false;
		if ( $blabber_need_columns ) {
			$blabber_columns = max( 0, (int) blabber_get_theme_option( 'header_columns' ) );
			if ( 0 == $blabber_columns ) {
				$blabber_columns = min( 6, max( 1, blabber_tags_count( $blabber_widgets_output, 'aside' ) ) );
			}
			if ( $blabber_columns > 1 ) {
				$blabber_widgets_output = preg_replace( '/<aside([^>]*)class="widget/', '<aside$1class="column-1_' . esc_attr( $blabber_columns ) . ' widget', $blabber_widgets_output );
			} else {
				$blabber_need_columns = false;
			}
		}
		?>
		<div class="header_widgets_wrap widget_area<?php echo ! empty( $blabber_header_wide ) ? ' header_fullwidth' : ' header_boxed'; ?>">
			<div class="header_widgets_inner widget_area_inner">
				<?php
				if ( ! $blabber_header_wide ) {
					?>
					<div class="content_wrap">
					<?php
				}
				if ( $blabber_need_columns ) {
					?>
					<div class="columns_wrap">
					<?php
				}
				do_action( 'blabber_action_before_sidebar' );
				blabber_show_layout( $blabber_widgets_output );
				do_action( 'blabber_action_after_sidebar' );
				if ( $blabber_need_columns ) {
					?>
					</div>	<!-- /.columns_wrap -->
					<?php
				}
				if ( ! $blabber_header_wide ) {
					?>
					</div>	<!-- /.content_wrap -->
					<?php
				}
				?>
			</div>	<!-- /.header_widgets_inner -->
		</div>	<!-- /.header_widgets_wrap -->
		<?php
	}
}
