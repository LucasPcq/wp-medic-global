<?php
/**
 * The Classic template to display the content
 *
 * Used for index/archive/search.
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0
 */

$blabber_template_args = get_query_var( 'blabber_template_args' );
if ( is_array( $blabber_template_args ) ) {
	$blabber_columns    = empty( $blabber_template_args['columns'] ) ? 1 : max( 1, min( 3, $blabber_template_args['columns'] ) );
	$blabber_blog_style = array( $blabber_template_args['type'], $blabber_columns );
} else {
	$blabber_blog_style = explode( '_', blabber_get_theme_option( 'blog_style' ) );
	$blabber_columns    = empty( $blabber_blog_style[1] ) ? 1 : max( 1, min( 3, $blabber_blog_style[1] ) );
}
$blabber_expanded    = ! blabber_sidebar_present() && blabber_is_on( blabber_get_theme_option( 'expand_content' ) );
$blabber_post_format = get_post_format();
$blabber_post_format = empty( $blabber_post_format ) ? 'standard' : str_replace( 'post-format-', '', $blabber_post_format );


$blabber_components = blabber_array_get_keys_by_value( blabber_get_theme_option( 'meta_parts' ) );
$date_val = 'categories';
$pos = strpos($blabber_components, $date_val);

if( !empty( $blabber_template_args['hide_excerpt'] ) ) {
    $vowels = array(
        ",comments", "comments,", "comments",
        ",likes", "likes,", "likes",
        ",views", "views,", "views",
        ",share", "share,", "share",
        ",edit", "edit,", "edit",
    );
    $blabber_components = str_replace($vowels, "", $blabber_components);
}



?><article id="post-<?php the_ID(); ?>"	data-post-id="<?php the_ID(); ?>"
	<?php
	post_class(
		'post_item'
		. ' post_layout_chess'
		. ' post_layout_chess_' . esc_attr( $blabber_columns )
		. ' post_format_' . esc_attr( $blabber_post_format )
		. ( ! empty( $blabber_template_args['slider'] ) ? ' slider-slide swiper-slide' : '' )
	);
	blabber_add_blog_animation( $blabber_template_args );
	?>
>

	<?php
	// Add anchor
	if ( 1 == $blabber_columns && ! is_array( $blabber_template_args ) && shortcode_exists( 'trx_sc_anchor' ) ) {
		echo do_shortcode( '[trx_sc_anchor id="post_' . esc_attr( get_the_ID() ) . '" title="' . esc_attr( get_the_title() ) . '" icon="' . esc_attr( blabber_get_post_icon() ) . '"]' );
	}

	// Sticky label
	if ( is_sticky() && ! is_paged() ) {
		?>
		<span class="post_label label_sticky"></span>
		<?php
	}

	// Featured image
	$blabber_hover = ! empty( $blabber_template_args['hover'] ) && ! blabber_is_inherit( $blabber_template_args['hover'] )
						? $blabber_template_args['hover']
						: blabber_get_theme_option( 'image_hover' );
	blabber_show_post_featured(
		array(
			'class'         => 1 == $blabber_columns && ! is_array( $blabber_template_args ) ? 'blabber-full-height' : '',
			'hover'         => $blabber_hover,
			'no_links'      => ! empty( $blabber_template_args['no_links'] ),
			'show_no_image' => true,
			'thumb_ratio'   => '1:1',
			'thumb_bg'      => true,
			'popup'         => true,
			'thumb_size'    => blabber_get_thumb_size(
				strpos( blabber_get_theme_option( 'body_style' ), 'full' ) !== false
										? ( 1 < $blabber_columns ? 'huge' : 'original' )
										: ( 2 < $blabber_columns ? 'big' : 'huge' )
			),
		)
	);

	?>
	<div class="post_inner"><div class="post_inner_content"><div class="post_header entry-header">
		<?php

            if ( $pos !== false ) {
                blabber_show_post_meta(
                    apply_filters(
                        'blabber_filter_post_meta_args', array(
                        'components' => 'categories',
                        'seo'        => false,
                        'class' => 'cat_top'
                    ), 'excerpt', 1
                    )
                );
            }
            $vowels = array(",categories", "categories,", "categories");
            $blabber_components = str_replace($vowels, "", $blabber_components);

			do_action( 'blabber_action_before_post_title' );

			// Post title
			if ( empty( $blabber_template_args['no_links'] ) ) {
				the_title( sprintf( '<h3 class="post_title entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
			} else {
				the_title( '<h3 class="post_title entry-title">', '</h3>' );
			}

			do_action( 'blabber_action_before_post_meta' );

			// Post meta
			$blabber_post_meta  = empty( $blabber_components ) || in_array( $blabber_hover, array( 'border', 'pull', 'slide', 'fade' ) )
										? ''
										: blabber_show_post_meta(
											apply_filters(
												'blabber_filter_post_meta_args', array(
													'components' => $blabber_components,
													'seo'  => false,
													'echo' => false,
												), $blabber_blog_style[0], $blabber_columns
											)
										);
			blabber_show_layout( $blabber_post_meta );
			?>
		</div><!-- .entry-header -->
    <?php if( empty( $blabber_template_args['hide_excerpt'] ) && ! in_array( $blabber_post_format, array( 'link', 'aside', 'status', 'quote' ) ) ){ ?>
		<div class="post_content entry-content">
			<?php
			// Post content area
			if ( empty( $blabber_template_args['hide_excerpt'] ) && blabber_get_theme_option( 'excerpt_length' ) > 0 ) {
				blabber_show_post_content( $blabber_template_args, '<div class="post_content_inner">', '</div>' );
			}
			// Post meta
			if ( in_array( $blabber_post_format, array( 'link', 'aside', 'status', 'quote' ) ) ) {
				blabber_show_layout( $blabber_post_meta );
			}
			// More button
			if ( empty( $blabber_template_args['no_links'] ) && ! in_array( $blabber_post_format, array( 'link', 'aside', 'status', 'quote' ) ) ) {
				blabber_show_post_more_link( $blabber_template_args, '<p>', '</p>' );
			}
			?>
		</div><!-- .entry-content -->
    <?php } ?>
	</div></div><!-- .post_inner -->

</article><?php
// Need opening PHP-tag above, because <article> is a inline-block element (used as column)!
