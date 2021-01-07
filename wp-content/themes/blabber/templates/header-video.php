<?php
/**
 * The template to display the background video in the header
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0.14
 */
$blabber_header_video = blabber_get_header_video();
$blabber_embed_video  = '';
if ( ! empty( $blabber_header_video ) && ! blabber_is_from_uploads( $blabber_header_video ) ) {
	if ( blabber_is_youtube_url( $blabber_header_video ) && preg_match( '/[=\/]([^=\/]*)$/', $blabber_header_video, $matches ) && ! empty( $matches[1] ) ) {
		?><div id="background_video" data-youtube-code="<?php echo esc_attr( $matches[1] ); ?>"></div>
		<?php
	} else {
		?>
		<div id="background_video"><?php blabber_show_layout( blabber_get_embed_video( $blabber_header_video ) ); ?></div>
		<?php
	}
}
