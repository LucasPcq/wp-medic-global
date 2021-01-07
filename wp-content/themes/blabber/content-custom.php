<?php
/**
 * The custom template to display the content
 *
 * Used for index/archive/search.
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0.50
 */

$blabber_template_args = get_query_var( 'blabber_template_args' );
if ( is_array( $blabber_template_args ) ) {
	$blabber_columns    = empty( $blabber_template_args['columns'] ) ? 2 : max( 1, $blabber_template_args['columns'] );
	$blabber_blog_style = array( $blabber_template_args['type'], $blabber_columns );
} else {
	$blabber_blog_style = explode( '_', blabber_get_theme_option( 'blog_style' ) );
	$blabber_columns    = empty( $blabber_blog_style[1] ) ? 2 : max( 1, $blabber_blog_style[1] );
}
$blabber_blog_id       = blabber_get_custom_blog_id( join( '_', $blabber_blog_style ) );
$blabber_blog_style[0] = str_replace( 'blog-custom-', '', $blabber_blog_style[0] );
$blabber_expanded      = ! blabber_sidebar_present() && blabber_is_on( blabber_get_theme_option( 'expand_content' ) );
$blabber_components    = blabber_array_get_keys_by_value( blabber_get_theme_option( 'meta_parts' ) );

$blabber_post_format   = get_post_format();
$blabber_post_format   = empty( $blabber_post_format ) ? 'standard' : str_replace( 'post-format-', '', $blabber_post_format );

$blabber_blog_meta     = blabber_get_custom_layout_meta( $blabber_blog_id );
$blabber_custom_style  = ! empty( $blabber_blog_meta['scripts_required'] ) ? $blabber_blog_meta['scripts_required'] : 'none';

if ( ! empty( $blabber_template_args['slider'] ) || $blabber_columns > 1 || ! blabber_is_off( $blabber_custom_style ) ) {
	?><div class="
		<?php
		if ( ! empty( $blabber_template_args['slider'] ) ) {
			echo 'slider-slide swiper-slide';
		} else {
			echo esc_attr( ( blabber_is_off( $blabber_custom_style ) ? 'column' : sprintf( '%1$s_item %1$s_item', $blabber_custom_style ) ) . "-1_{$blabber_columns}" );
		}
		?>
	">
	<?php
}
?>
<article id="post-<?php the_ID(); ?>" data-post-id="<?php the_ID(); ?>"
	<?php
	post_class(
			'post_item post_format_' . esc_attr( $blabber_post_format )
					. ' post_layout_custom post_layout_custom_' . esc_attr( $blabber_columns )
					. ' post_layout_' . esc_attr( $blabber_blog_style[0] )
					. ' post_layout_' . esc_attr( $blabber_blog_style[0] ) . '_' . esc_attr( $blabber_columns )
					. ( ! blabber_is_off( $blabber_custom_style )
						? ' post_layout_' . esc_attr( $blabber_custom_style )
							. ' post_layout_' . esc_attr( $blabber_custom_style ) . '_' . esc_attr( $blabber_columns )
						: ''
						)
		);
	blabber_add_blog_animation( $blabber_template_args );
	?>
>
	<?php
	// Sticky label
	if ( is_sticky() && ! is_paged() ) {
		?>
		<span class="post_label label_sticky"></span>
		<?php
	}
	// Custom layout
	do_action( 'blabber_action_show_layout', $blabber_blog_id, get_the_ID() );
	?>
</article><?php
if ( ! empty( $blabber_template_args['slider'] ) || $blabber_columns > 1 || ! blabber_is_off( $blabber_custom_style ) ) {
	?></div><?php
	// Need opening PHP-tag above just after </div>, because <div> is a inline-block element (used as column)!
}
