<?php
/**
 * The template to display the page title and breadcrumbs
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0
 */

// Page (category, tag, archive, author) title

if ( blabber_need_page_title() ) {
	blabber_sc_layouts_showed( 'title', true );
	blabber_sc_layouts_showed( 'postmeta', true );
	?>
	<div class="top_panel_title sc_layouts_row sc_layouts_row_type_normal sc_layouts_row_delimiter">
		<div class="content_wrap">
			<div class="sc_layouts_column sc_layouts_column_align_center">
				<div class="sc_layouts_item">
					<div class="sc_layouts_title sc_align_center">
						<?php
						// Post meta on the single post
						if ( is_single() ) {
							?>
							<div class="sc_layouts_title_meta">
							<?php
								blabber_show_post_meta(
									apply_filters(
										'blabber_filter_post_meta_args', array(
											'components' => blabber_array_get_keys_by_value( blabber_get_theme_option( 'meta_parts' ) ),
											'counters'   => blabber_array_get_keys_by_value( blabber_get_theme_option( 'counters' ) ),
											'seo'        => blabber_is_on( blabber_get_theme_option( 'seo_snippets' ) ),
										), 'header', 1
									)
								);
							?>
							</div>
							<?php
						}

						// Blog/Post title
						?>
						<div class="sc_layouts_title_title">
							<?php
							$blabber_blog_title           = blabber_get_blog_title();
							$blabber_blog_title_text      = '';
							$blabber_blog_title_class     = '';
							$blabber_blog_title_link      = '';
							$blabber_blog_title_link_text = '';
							if ( is_array( $blabber_blog_title ) ) {
								$blabber_blog_title_text      = $blabber_blog_title['text'];
								$blabber_blog_title_class     = ! empty( $blabber_blog_title['class'] ) ? ' ' . $blabber_blog_title['class'] : '';
								$blabber_blog_title_link      = ! empty( $blabber_blog_title['link'] ) ? $blabber_blog_title['link'] : '';
								$blabber_blog_title_link_text = ! empty( $blabber_blog_title['link_text'] ) ? $blabber_blog_title['link_text'] : '';
							} else {
								$blabber_blog_title_text = $blabber_blog_title;
							}
							?>
							<h1 itemprop="headline" class="sc_layouts_title_caption<?php echo esc_attr( $blabber_blog_title_class ); ?>">
								<?php
								$blabber_top_icon = blabber_get_term_image_small();
								if ( ! empty( $blabber_top_icon ) ) {
									$blabber_attr = blabber_getimagesize( $blabber_top_icon );
									?>
									<img src="<?php echo esc_url( $blabber_top_icon ); ?>" alt="<?php esc_attr_e( 'Site icon', 'blabber' ); ?>"
										<?php
										if ( ! empty( $blabber_attr[3] ) ) {
											blabber_show_layout( $blabber_attr[3] );
										}
										?>
									>
									<?php
								}
								echo wp_kses_data( $blabber_blog_title_text );
								?>
							</h1>
							<?php
							if ( ! empty( $blabber_blog_title_link ) && ! empty( $blabber_blog_title_link_text ) ) {
								?>
								<a href="<?php echo esc_url( $blabber_blog_title_link ); ?>" class="theme_button theme_button_small sc_layouts_title_link"><?php echo esc_html( $blabber_blog_title_link_text ); ?></a>
								<?php
							}

							// Category/Tag description
							if ( is_category() || is_tag() || is_tax() ) {
								the_archive_description( '<div class="sc_layouts_title_description">', '</div>' );
							}

							?>
						</div>
						<?php
                        // Breadcrumbs
                        ob_start();
                        do_action( 'blabber_action_breadcrumbs' );
                        $blabber_breadcrumbs = ob_get_contents();
                        ob_end_clean();
                        blabber_show_layout( $blabber_breadcrumbs, '<div class="sc_layouts_title_breadcrumbs">', '</div>' );
                        ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
