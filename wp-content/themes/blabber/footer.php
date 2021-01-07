<?php
/**
 * The Footer: widgets area, logo, footer menu and socials
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0
 */

							// Widgets area inside page content
							blabber_create_widgets_area( 'widgets_below_content' );
							?>
						</div><!-- </.content> -->
					<?php

					// Show main sidebar
					get_sidebar();

					$blabber_body_style = blabber_get_theme_option( 'body_style' );
					?>
					</div><!-- </.content_wrap> -->
					<?php

					// Widgets area below page content and related posts below page content
					$blabber_widgets_name = blabber_get_theme_option( 'widgets_below_page' );
					$blabber_show_widgets = ! blabber_is_off( $blabber_widgets_name ) && is_active_sidebar( $blabber_widgets_name );
					$blabber_show_related = is_single() && blabber_get_theme_option( 'related_position' ) == 'below_page';
					if ( $blabber_show_widgets || $blabber_show_related ) {
						if ( 'fullscreen' != $blabber_body_style ) {
							?>
							<div class="content_wrap">
							<?php
						}
						// Show related posts before footer
						if ( $blabber_show_related ) {
							do_action( 'blabber_action_related_posts' );
						}

						// Widgets area below page content
						if ( $blabber_show_widgets ) {
							blabber_create_widgets_area( 'widgets_below_page' );
						}
						if ( 'fullscreen' != $blabber_body_style ) {
							?>
							</div><!-- </.content_wrap> -->
							<?php
						}
					}
					?>
			</div><!-- </.page_content_wrap> -->

			<?php
			// Single posts banner before footer
			if ( is_singular( 'post' ) ) {
				blabber_show_post_banner('footer');
			}
			
			// Skip link anchor to fast access to the footer from keyboard
			?>
			<a id="footer_skip_link_anchor" class="blabber_skip_link_anchor" href="#"></a>
			<?php
			
			// Footer
			$blabber_footer_type = blabber_get_theme_option( 'footer_type' );
			if ( 'custom' == $blabber_footer_type && ! blabber_is_layouts_available() ) {
				$blabber_footer_type = 'default';
			}
			get_template_part( apply_filters( 'blabber_filter_get_template_part', "templates/footer-{$blabber_footer_type}" ) );
			?>

		</div><!-- /.page_wrap -->

	</div><!-- /.body_wrap -->

	<?php wp_footer(); ?>

</body>
</html>