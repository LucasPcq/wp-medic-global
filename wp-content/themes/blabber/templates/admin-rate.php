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
<div class="blabber_admin_notice blabber_rate_notice update-nag">
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
	<h3 class="blabber_notice_title"><a href="<?php echo esc_url( blabber_storage_get( 'theme_rate_url' ) ); ?>" target="_blank">
		<?php
		echo esc_html(
			sprintf(
				// Translators: Add theme name and version to the 'Welcome' message
				__( 'Rate our theme "%s", please', 'blabber' ),
				$blabber_theme_obj->name . ( BLABBER_THEME_FREE ? ' ' . __( 'Free', 'blabber' ) : '' )
			)
		);
		?>
	</a></h3>
	<?php

	// Description
	?>
	<div class="blabber_notice_text">
		<p><?php echo wp_kses_data( __( "We are glad you chose our WP theme for your website. You've done well customizing your website and we hope that you've enjoyed working with our theme.", 'blabber' ) ); ?></p>
		<p><?php echo wp_kses_data( __( "It would be just awesome if you spend just a minute of your time to rate our theme or the customer service you've received from us.", 'blabber' ) ); ?></p>
		<p class="blabber_notice_text_info"><?php echo wp_kses_data( __( '* We love receiving 5-star ratings, because our CEO Henry Rise gives $5 to homeless dog shelter for every 5-star rating we get! Save the planet with us!', 'blabber' ) ); ?></p>
	</div>
	<?php

	// Buttons
	?>
	<div class="blabber_notice_buttons">
		<?php
		// Link to the theme download page
		?>
		<a href="<?php echo esc_url( blabber_storage_get( 'theme_rate_url' ) ); ?>" class="button button-primary" target="_blank"><i class="dashicons dashicons-star-filled"></i> 
			<?php
			// Translators: Add theme name
			echo esc_html( sprintf( __( 'Rate theme %s', 'blabber' ), $blabber_theme_obj->name ) );
			?>
		</a>
		<?php
		// Link to the theme support
		?>
		<a href="<?php echo esc_url( blabber_storage_get( 'theme_support_url' ) ); ?>" class="button" target="_blank"><i class="dashicons dashicons-sos"></i> 
			<?php
			esc_html_e( 'Support', 'blabber' );
			?>
		</a>
		<?php
		// Link to the theme documentation
		?>
		<a href="<?php echo esc_url( blabber_storage_get( 'theme_doc_url' ) ); ?>" class="button" target="_blank"><i class="dashicons dashicons-book"></i> 
			<?php
			esc_html_e( 'Documentation', 'blabber' );
			?>
		</a>
		<?php
		// Dismiss
		?>
		<a href="#" class="blabber_hide_notice"><i class="dashicons dashicons-dismiss"></i> <span class="blabber_hide_notice_text"><?php esc_html_e( 'Dismiss', 'blabber' ); ?></span></a>
	</div>
</div>
