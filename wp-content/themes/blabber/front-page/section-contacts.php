<div class="front_page_section front_page_section_contacts<?php
	$blabber_scheme = blabber_get_theme_option( 'front_page_contacts_scheme' );
	if ( ! empty( $blabber_scheme ) && ! blabber_is_inherit( $blabber_scheme ) ) {
		echo ' scheme_' . esc_attr( $blabber_scheme );
	}
	echo ' front_page_section_paddings_' . esc_attr( blabber_get_theme_option( 'front_page_contacts_paddings' ) );
	if ( blabber_get_theme_option( 'front_page_contacts_stack' ) ) {
		echo ' sc_stack_section_on';
	}
?>"
		<?php
		$blabber_css      = '';
		$blabber_bg_image = blabber_get_theme_option( 'front_page_contacts_bg_image' );
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
	$blabber_anchor_icon = blabber_get_theme_option( 'front_page_contacts_anchor_icon' );
	$blabber_anchor_text = blabber_get_theme_option( 'front_page_contacts_anchor_text' );
if ( ( ! empty( $blabber_anchor_icon ) || ! empty( $blabber_anchor_text ) ) && shortcode_exists( 'trx_sc_anchor' ) ) {
	echo do_shortcode(
		'[trx_sc_anchor id="front_page_section_contacts"'
									. ( ! empty( $blabber_anchor_icon ) ? ' icon="' . esc_attr( $blabber_anchor_icon ) . '"' : '' )
									. ( ! empty( $blabber_anchor_text ) ? ' title="' . esc_attr( $blabber_anchor_text ) . '"' : '' )
									. ']'
	);
}
?>
	<div class="front_page_section_inner front_page_section_contacts_inner
	<?php
	if ( blabber_get_theme_option( 'front_page_contacts_fullheight' ) ) {
		echo ' blabber-full-height sc_layouts_flex sc_layouts_columns_middle';
	}
	?>
			"
			<?php
			$blabber_css      = '';
			$blabber_bg_mask  = blabber_get_theme_option( 'front_page_contacts_bg_mask' );
			$blabber_bg_color_type = blabber_get_theme_option( 'front_page_contacts_bg_color_type' );
			if ( 'custom' == $blabber_bg_color_type ) {
				$blabber_bg_color = blabber_get_theme_option( 'front_page_contacts_bg_color' );
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
		<div class="front_page_section_content_wrap front_page_section_contacts_content_wrap content_wrap">
			<?php

			// Title and description
			$blabber_caption     = blabber_get_theme_option( 'front_page_contacts_caption' );
			$blabber_description = blabber_get_theme_option( 'front_page_contacts_description' );
			if ( ! empty( $blabber_caption ) || ! empty( $blabber_description ) || ( current_user_can( 'edit_theme_options' ) && is_customize_preview() ) ) {
				// Caption
				if ( ! empty( $blabber_caption ) || ( current_user_can( 'edit_theme_options' ) && is_customize_preview() ) ) {
					?>
					<h2 class="front_page_section_caption front_page_section_contacts_caption front_page_block_<?php echo ! empty( $blabber_caption ) ? 'filled' : 'empty'; ?>">
					<?php
						echo wp_kses_post( $blabber_caption );
					?>
					</h2>
					<?php
				}

				// Description
				if ( ! empty( $blabber_description ) || ( current_user_can( 'edit_theme_options' ) && is_customize_preview() ) ) {
					?>
					<div class="front_page_section_description front_page_section_contacts_description front_page_block_<?php echo ! empty( $blabber_description ) ? 'filled' : 'empty'; ?>">
					<?php
						echo wp_kses_post( wpautop( $blabber_description ) );
					?>
					</div>
					<?php
				}
			}

			// Content (text)
			$blabber_content = blabber_get_theme_option( 'front_page_contacts_content' );
			$blabber_layout  = blabber_get_theme_option( 'front_page_contacts_layout' );
			if ( 'columns' == $blabber_layout && ( ! empty( $blabber_content ) || ( current_user_can( 'edit_theme_options' ) && is_customize_preview() ) ) ) {
				?>
				<div class="front_page_section_columns front_page_section_contacts_columns columns_wrap">
					<div class="column-1_3">
				<?php
			}

			if ( ( ! empty( $blabber_content ) || ( current_user_can( 'edit_theme_options' ) && is_customize_preview() ) ) ) {
				?>
				<div class="front_page_section_content front_page_section_contacts_content front_page_block_<?php echo ! empty( $blabber_content ) ? 'filled' : 'empty'; ?>">
				<?php
					echo wp_kses_post( $blabber_content );
				?>
				</div>
				<?php
			}

			if ( 'columns' == $blabber_layout && ( ! empty( $blabber_content ) || ( current_user_can( 'edit_theme_options' ) && is_customize_preview() ) ) ) {
				?>
				</div><div class="column-2_3">
				<?php
			}

			// Shortcode output
			$blabber_sc = blabber_get_theme_option( 'front_page_contacts_shortcode' );
			if ( ! empty( $blabber_sc ) || ( current_user_can( 'edit_theme_options' ) && is_customize_preview() ) ) {
				?>
				<div class="front_page_section_output front_page_section_contacts_output front_page_block_<?php echo ! empty( $blabber_sc ) ? 'filled' : 'empty'; ?>">
				<?php
					blabber_show_layout( do_shortcode( $blabber_sc ) );
				?>
				</div>
				<?php
			}

			if ( 'columns' == $blabber_layout && ( ! empty( $blabber_content ) || ( current_user_can( 'edit_theme_options' ) && is_customize_preview() ) ) ) {
				?>
				</div></div>
				<?php
			}
			?>

		</div>
	</div>
</div>
