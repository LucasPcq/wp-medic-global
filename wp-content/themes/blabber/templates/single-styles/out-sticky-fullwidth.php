<?php
/**
 * The template to display the single post header
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0.62
 */

if ( is_singular( 'post' ) || is_singular( 'attachment' ) ) {
	ob_start();
	?>
	<div class="post_header_wrap<?php
		if ( has_post_thumbnail() || str_replace( 'post-format-', '', get_post_format() ) == 'image' ) {
			echo ' with_featured_image';
		}
	?>">
		<?php
		// Featured image
		blabber_show_post_featured_image( true );
		// Post title and meta
		blabber_show_post_title_and_meta( true );
		?>
	</div>
	<?php
	$blabber_post_header = ob_get_contents();
	ob_end_clean();
	if ( strpos( $blabber_post_header, 'post_featured' ) !== false
		|| strpos( $blabber_post_header, 'post_title' ) !== false
		|| strpos( $blabber_post_header, 'post_meta' ) !== false
	) {
		blabber_show_layout( $blabber_post_header );
	}
}
