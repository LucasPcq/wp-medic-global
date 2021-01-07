<?php
/**
 * The template to display Admin notices
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0.1
 */

$blabber_theme_obj = wp_get_theme();
?>
<div class="blabber_admin_notice blabber_welcome_notice update-nag">
	<?php
	// Theme image
	$blabber_theme_img = blabber_get_file_url( 'screenshot.jpg' );
	if ( '' != $blabber_theme_img ) {
		?>
		<div class="blabber_notice_image"><img src="<?php echo esc_url( $blabber_theme_img ); ?>" alt="<?php esc_attr_e( 'Theme screenshot', 'blabber' ); ?>"></div>
		<?php
	}

	// Title
	?>
	<h3 class="blabber_notice_title">
		<?php
		echo esc_html(
			sprintf(
				// Translators: Add theme name and version to the 'Welcome' message
				__( 'Welcome to %1$s v.%2$s', 'blabber' ),
				$blabber_theme_obj->name . ( BLABBER_THEME_FREE ? ' ' . __( 'Free', 'blabber' ) : '' ),
				$blabber_theme_obj->version
			)
		);
		?>
	</h3>
	<?php

	// Description
	?>
	<div class="blabber_notice_text">
		<p class="blabber_notice_text_description">
			<?php
			echo str_replace( '. ', '.<br>', wp_kses_data( $blabber_theme_obj->description ) );
			?>
		</p>
		<p class="blabber_notice_text_info">
			<?php
			echo wp_kses_data( __( 'Attention! Plugin "ThemeREX Addons" is required! Please, install and activate it!', 'blabber' ) );
			?>
		</p>
	</div>
	<?php

	// Buttons
	?>
	<div class="blabber_notice_buttons">
		<?php
		// Link to the page 'About Theme'
		?>
		<a href="<?php echo esc_url( admin_url() . 'themes.php?page=blabber_about' ); ?>" class="button button-primary"><i class="dashicons dashicons-nametag"></i> 
			<?php
			echo esc_html__( 'Install plugin "ThemeREX Addons"', 'blabber' );
			?>
		</a>
		<?php		
		// Dismiss this notice
		?>
		<a href="#" class="blabber_hide_notice"><i class="dashicons dashicons-dismiss"></i> <span class="blabber_hide_notice_text"><?php esc_html_e( 'Dismiss', 'blabber' ); ?></span></a>
	</div>
</div>
