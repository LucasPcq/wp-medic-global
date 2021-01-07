<?php
/**
 * The Header: Logo and main menu
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js
									<?php
										// Class scheme_xxx need in the <html> as context for the <body>!
										echo ' scheme_' . esc_attr( blabber_get_theme_option( 'color_scheme' ) );
									?>
										">
<head>
	<?php wp_head(); ?>
</head>

<body <?php	body_class(); ?>>

	<?php
	if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	} else {
		do_action( 'wp_body_open' );
	}
	do_action( 'blabber_action_before_body' );
	?>

	<div class="body_wrap">

		<div class="page_wrap">
			
			<?php
			// Short links to fast access to the content, sidebar and footer from the keyboard
			?>
			<a class="blabber_skip_link skip_to_content_link" href="#content_skip_link_anchor" tabindex="1"><?php esc_html_e( "Skip to content", 'blabber' ); ?></a>
			<?php if ( blabber_sidebar_present() ) { ?>
			<a class="blabber_skip_link skip_to_sidebar_link" href="#sidebar_skip_link_anchor" tabindex="1"><?php esc_html_e( "Skip to sidebar", 'blabber' ); ?></a>
			<?php } ?>
			<a class="blabber_skip_link skip_to_footer_link" href="#footer_skip_link_anchor" tabindex="1"><?php esc_html_e( "Skip to footer", 'blabber' ); ?></a>
			
			<?php
			// Header
			$blabber_header_type = blabber_get_theme_option( 'header_type' );
			if ( 'custom' == $blabber_header_type && ! blabber_is_layouts_available() ) {
				$blabber_header_type = 'default';
			}
			get_template_part( apply_filters( 'blabber_filter_get_template_part', "templates/header-{$blabber_header_type}" ) );

			// Side menu
			if ( in_array( blabber_get_theme_option( 'menu_style' ), array( 'left', 'right' ) ) ) {
				get_template_part( apply_filters( 'blabber_filter_get_template_part', 'templates/header-navi-side' ) );
			}

			// Mobile menu
			get_template_part( apply_filters( 'blabber_filter_get_template_part', 'templates/header-navi-mobile' ) );
			
			// Single posts banner after header
			blabber_show_post_banner( 'header' );
			?>

			<div class="page_content_wrap">
				<?php
				// Single posts banner on the background
				if ( is_singular( 'post' ) || is_singular( 'attachment' ) ) {
					blabber_show_post_banner( 'background' );
							}

				// Single post thumbnail and title
				get_template_part( apply_filters( 'blabber_filter_get_template_part', 'templates/single-styles/' . blabber_get_theme_option( 'single_style' ) ) );

				// Widgets area above page content
				$blabber_body_style   = blabber_get_theme_option( 'body_style' );
				$blabber_widgets_name = blabber_get_theme_option( 'widgets_above_page' );
				$blabber_show_widgets = ! blabber_is_off( $blabber_widgets_name ) && is_active_sidebar( $blabber_widgets_name );
				if ( $blabber_show_widgets ) {
					if ( 'fullscreen' != $blabber_body_style ) {
						?>
						<div class="content_wrap">
							<?php
					}
					blabber_create_widgets_area( 'widgets_above_page' );
					if ( 'fullscreen' != $blabber_body_style ) {
						?>
						</div><!-- </.content_wrap> -->
						<?php
					}
				}

				// Content area
				?>
				<div class="content_wrap<?php echo 'fullscreen' == $blabber_body_style ? '_fullscreen' : ''; ?>">

					<div class="content">
						<?php
						// Skip link anchor to fast access to the content from keyboard
						?>
						<a id="content_skip_link_anchor" class="blabber_skip_link_anchor" href="#"></a>
						<?php
						// Widgets area inside page content
						blabber_create_widgets_area( 'widgets_above_content' );
