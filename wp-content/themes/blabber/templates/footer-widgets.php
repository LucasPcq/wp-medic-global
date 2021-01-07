<?php
/**
 * The template to display the widgets area in the footer
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0.10
 */

// Footer sidebar
$blabber_footer_name    = blabber_get_theme_option( 'footer_widgets' );
$blabber_footer_present = ! blabber_is_off( $blabber_footer_name ) && is_active_sidebar( $blabber_footer_name );
if ( $blabber_footer_present ) {
	blabber_storage_set( 'current_sidebar', 'footer' );
	$blabber_footer_wide = blabber_get_theme_option( 'footer_wide' );
	ob_start();
	if ( is_active_sidebar( $blabber_footer_name ) ) {
		dynamic_sidebar( $blabber_footer_name );
	}
	$blabber_out = trim( ob_get_contents() );
	ob_end_clean();
	if ( ! empty( $blabber_out ) ) {
		$blabber_out          = preg_replace( "/<\\/aside>[\r\n\s]*<aside/", '</aside><aside', $blabber_out );
		$blabber_need_columns = true;   //or check: strpos($blabber_out, 'columns_wrap')===false;
		if ( $blabber_need_columns ) {
			$blabber_columns = max( 0, (int) blabber_get_theme_option( 'footer_columns' ) );			
			if ( 0 == $blabber_columns ) {
				$blabber_columns = min( 4, max( 1, blabber_tags_count( $blabber_out, 'aside' ) ) );
			}
			if ( $blabber_columns > 1 ) {
				$blabber_out = preg_replace( '/<aside([^>]*)class="widget/', '<aside$1class="column-1_' . esc_attr( $blabber_columns ) . ' widget', $blabber_out );
			} else {
				$blabber_need_columns = false;
			}
		}
		?>
		<div class="footer_widgets_wrap widget_area<?php echo ! empty( $blabber_footer_wide ) ? ' footer_fullwidth' : ''; ?> sc_layouts_row sc_layouts_row_type_normal">
			<div class="footer_widgets_inner widget_area_inner">
				<?php
				if ( ! $blabber_footer_wide ) {
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
				blabber_show_layout( $blabber_out );
				do_action( 'blabber_action_after_sidebar' );
				if ( $blabber_need_columns ) {
					?>
					</div><!-- /.columns_wrap -->
					<?php
				}
				if ( ! $blabber_footer_wide ) {
					?>
					</div><!-- /.content_wrap -->
					<?php
				}
				?>
			</div><!-- /.footer_widgets_inner -->
		</div><!-- /.footer_widgets_wrap -->
		<?php
	}
}
