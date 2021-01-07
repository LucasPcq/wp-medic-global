<?php
/**
 * The Portfolio template to display the content
 *
 * Used for index/archive/search.
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0
 */

$blabber_template_args = get_query_var( 'blabber_template_args' );
if ( is_array( $blabber_template_args ) ) {
	$blabber_columns    = empty( $blabber_template_args['columns'] ) ? 2 : max( 1, $blabber_template_args['columns'] );
	$blabber_blog_style = array( $blabber_template_args['type'], $blabber_columns );
} else {
	$blabber_blog_style = explode( '_', blabber_get_theme_option( 'blog_style' ) );
	$blabber_columns    = empty( $blabber_blog_style[1] ) ? 2 : max( 1, $blabber_blog_style[1] );
}
$blabber_post_format = get_post_format();
$blabber_post_format = empty( $blabber_post_format ) ? 'standard' : str_replace( 'post-format-', '', $blabber_post_format );

?><div class="
<?php
if ( ! empty( $blabber_template_args['slider'] ) ) {
	echo ' slider-slide swiper-slide';
} else {
    echo ( blabber_is_blog_style_use_masonry( $blabber_blog_style[0] ) ? 'masonry_item masonry_item' : 'column' ) . '-1_' . esc_attr( $blabber_columns );
}
?>
"><article id="post-<?php the_ID(); ?>" 
	<?php
	post_class(
		'post_item post_format_' . esc_attr( $blabber_post_format )
		. ' post_layout_portfolio'
		. ' post_layout_portfolio_' . esc_attr( $blabber_columns )
		. ( is_sticky() && ! is_paged() ? ' sticky' : '' )
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

	$blabber_image_hover = ! empty( $blabber_template_args['hover'] ) && ! blabber_is_inherit( $blabber_template_args['hover'] )
								? $blabber_template_args['hover']
								: blabber_get_theme_option( 'image_hover' );
	// Featured image
	blabber_show_post_featured(
		array(
			'hover'         => $blabber_image_hover,
			'no_links'      => ! empty( $blabber_template_args['no_links'] ),
			'thumb_size'    => blabber_get_thumb_size(
				strpos( blabber_get_theme_option( 'body_style' ), 'full' ) !== false || $blabber_columns < 3
								? 'masonry-big'
				: 'masonry'
			),
			'show_no_image' => true,
			'class'         => 'dots' == $blabber_image_hover ? 'hover_with_info' : '',
			'post_info'     => 'dots' == $blabber_image_hover ? '<div class="post_info">' . esc_html( get_the_title() ) . '</div>' : '',
		)
	);
	?>
</article></div><?php
// Need opening PHP-tag above, because <article> is a inline-block element (used as column)!