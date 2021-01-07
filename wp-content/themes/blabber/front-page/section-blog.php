<div class="front_page_section front_page_section_blog<?php
	$blabber_scheme = blabber_get_theme_option( 'front_page_blog_scheme' );
	if ( ! empty( $blabber_scheme ) && ! blabber_is_inherit( $blabber_scheme ) ) {
		echo ' scheme_' . esc_attr( $blabber_scheme );
	}
	echo ' front_page_section_paddings_' . esc_attr( blabber_get_theme_option( 'front_page_blog_paddings' ) );
	if ( blabber_get_theme_option( 'front_page_blog_stack' ) ) {
		echo ' sc_stack_section_on';
	}
?>"
		<?php
		$blabber_css      = '';
		$blabber_bg_image = blabber_get_theme_option( 'front_page_blog_bg_image' );
		if ( ! empty( $blabber_bg_image ) ) {
			$blabber_css .= 'background-image: url(' . esc_url( blabber_get_attachment_url( $blabber_bg_image ) ) . ');';
		}
		if ( ! empty( $blabber_css ) ) {
			echo ' style="' . esc_attr( $blabber_css ) . '"';
		}
		?>
>
<?php
	// Add anchor
	$blabber_anchor_icon = blabber_get_theme_option( 'front_page_blog_anchor_icon' );
	$blabber_anchor_text = blabber_get_theme_option( 'front_page_blog_anchor_text' );
if ( ( ! empty( $blabber_anchor_icon ) || ! empty( $blabber_anchor_text ) ) && shortcode_exists( 'trx_sc_anchor' ) ) {
	echo do_shortcode(
		'[trx_sc_anchor id="front_page_section_blog"'
									. ( ! empty( $blabber_anchor_icon ) ? ' icon="' . esc_attr( $blabber_anchor_icon ) . '"' : '' )
									. ( ! empty( $blabber_anchor_text ) ? ' title="' . esc_attr( $blabber_anchor_text ) . '"' : '' )
									. ']'
	);
}
?>
	<div class="front_page_section_inner front_page_section_blog_inner
	<?php
	if ( blabber_get_theme_option( 'front_page_blog_fullheight' ) ) {
		echo ' blabber-full-height sc_layouts_flex sc_layouts_columns_middle';
	}
	?>
			"
			<?php
			$blabber_css      = '';
			$blabber_bg_mask  = blabber_get_theme_option( 'front_page_blog_bg_mask' );
			$blabber_bg_color_type = blabber_get_theme_option( 'front_page_blog_bg_color_type' );
			if ( 'custom' == $blabber_bg_color_type ) {
				$blabber_bg_color = blabber_get_theme_option( 'front_page_blog_bg_color' );
			} elseif ( 'scheme_bg_color' == $blabber_bg_color_type ) {
				$blabber_bg_color = blabber_get_scheme_color( 'bg_color', $blabber_scheme );
			} else {
				$blabber_bg_color = '';
			}
			if ( ! empty( $blabber_bg_color ) && $blabber_bg_mask > 0 ) {
				$blabber_css .= 'background-color: ' . esc_attr(
					1 == $blabber_bg_mask ? $blabber_bg_color : blabber_hex2rgba( $blabber_bg_color, $blabber_bg_mask )
				) . ';';
			}
			if ( ! empty( $blabber_css ) ) {
				echo ' style="' . esc_attr( $blabber_css ) . '"';
			}
			?>
	>
		<div class="front_page_section_content_wrap front_page_section_blog_content_wrap content_wrap">
			<?php
			// Caption
			$blabber_caption = blabber_get_theme_option( 'front_page_blog_caption' );
			if ( ! empty( $blabber_caption ) || ( current_user_can( 'edit_theme_options' ) && is_customize_preview() ) ) {
				?>
				<h2 class="front_page_section_caption front_page_section_blog_caption front_page_block_<?php echo ! empty( $blabber_caption ) ? 'filled' : 'empty'; ?>"><?php echo wp_kses_post( $blabber_caption ); ?></h2>
				<?php
			}

			// Description (text)
			$blabber_description = blabber_get_theme_option( 'front_page_blog_description' );
			if ( ! empty( $blabber_description ) || ( current_user_can( 'edit_theme_options' ) && is_customize_preview() ) ) {
				?>
				<div class="front_page_section_description front_page_section_blog_description front_page_block_<?php echo ! empty( $blabber_description ) ? 'filled' : 'empty'; ?>"><?php echo wp_kses_post( wpautop( $blabber_description ) ); ?></div>
				<?php
			}

			// Content (widgets)
			?>
			<div class="front_page_section_output front_page_section_blog_output">
			<?php
			if ( is_active_sidebar( 'front_page_blog_widgets' ) ) {
				dynamic_sidebar( 'front_page_blog_widgets' );
			} elseif ( current_user_can( 'edit_theme_options' ) ) {
				if ( ! blabber_exists_trx_addons() ) {
					blabber_customizer_need_trx_addons_message();
				} else {
					blabber_customizer_need_widgets_message( 'front_page_blog_caption', 'ThemeREX Addons - Blogger' );
				}
			}
			?>
			</div>
		</div>
	</div>
</div>
