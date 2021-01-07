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
	$blabber_columns    = empty( $blabber_template_args['columns'] ) ? 2 : max( 1, $blabber_template_args['columns'] );
	$blabber_blog_style = array( $blabber_template_args['type'], $blabber_columns );
} else {
	$blabber_blog_style = explode( '_', blabber_get_theme_option( 'blog_style' ) );
	$blabber_columns    = empty( $blabber_blog_style[1] ) ? 2 : max( 1, $blabber_blog_style[1] );
}
$blabber_expanded   = ! blabber_sidebar_present() && blabber_is_on( blabber_get_theme_option( 'expand_content' ) );
$blabber_components = blabber_array_get_keys_by_value( blabber_get_theme_option( 'meta_parts' ) );

$blabber_post_format = get_post_format();
$blabber_post_format = empty( $blabber_post_format ) ? 'standard' : str_replace( 'post-format-', '', $blabber_post_format );


$date_val = 'categories';
$pos = strpos($blabber_components, $date_val);

// for blogger
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

?><div class="
<?php
if ( ! empty( $blabber_template_args['slider'] ) ) {
	echo ' slider-slide swiper-slide';
} else {
	echo ( 'classic' == $blabber_blog_style[0] ? 'column' : 'masonry_item masonry_item' ) . '-1_' . esc_attr( $blabber_columns );
}
?>
"><article id="post-<?php the_ID(); ?>" data-post-id="<?php the_ID(); ?>"
		<?php
		post_class(
			(is_sticky() && ! is_paged() ? ' sticky ' : '')
			.'post_item post_format_' . esc_attr( $blabber_post_format )
			. ' post_layout_classic post_layout_classic_' . esc_attr( $blabber_columns )
			. ' post_layout_' . esc_attr( $blabber_blog_style[0] )
			. ' post_layout_' . esc_attr( $blabber_blog_style[0] ) . '_' . esc_attr( $blabber_columns )
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

		// Featured image
		$blabber_hover = ! empty( $blabber_template_args['hover'] ) && ! blabber_is_inherit( $blabber_template_args['hover'] )
			? $blabber_template_args['hover']
			: blabber_get_theme_option( 'image_hover' );
		blabber_show_post_featured(
			array(
				'thumb_size' => blabber_get_thumb_size(
					'classic' == $blabber_blog_style[0]
						? ( strpos( blabber_get_theme_option( 'body_style' ), 'full' ) !== false
						? ( $blabber_columns > 2 ? 'big' : 'huge' )
						: ( $blabber_columns > 2
							? ( $blabber_expanded ? 'med' : 'small' )
							: ( $blabber_expanded ? 'big' : 'med' )
						)
					)
						: ( strpos( blabber_get_theme_option( 'body_style' ), 'full' ) !== false
						? ( $blabber_columns > 2 ? 'masonry-big' : 'full' )
						: ( $blabber_columns <= 2 && $blabber_expanded ? 'masonry-big' : 'masonry' )
					)
				),
				'hover'      => $blabber_hover,
				'no_links'   => ! empty( $blabber_template_args['no_links'] ),
				'class' => ($pos !== false ? 'width_cat_top' : '')
			)
		);

		if ( is_sticky() && ! is_paged() ) {
		?>
		<div class="post_sticky_wrap">
			<?php
			}

			if ( ! in_array( $blabber_post_format, array( 'link', 'aside', 'status', 'quote' ) ) ) {

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
				?>
				<div class="post_header entry-header">
					<?php
					do_action( 'blabber_action_before_post_title' );

					// Post title
					if ( empty( $blabber_template_args['no_links'] ) ) {
						the_title( sprintf( '<h4 class="post_title entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' );
					} else {
						the_title( '<h4 class="post_title entry-title">', '</h4>' );
					}
					?>
				</div><!-- .entry-header -->
				<?php
			}

			if ( empty( $blabber_template_args['hide_excerpt'] ) ) {
				?>

				<div class="post_content entry-content">
					<?php
					if (empty($blabber_template_args['hide_excerpt']) && blabber_get_theme_option('excerpt_length') > 0) {
						// Post content area
						blabber_show_post_content($blabber_template_args, '<div class="post_content_inner">', '</div>');
					}

					// Post meta
					if (in_array($blabber_post_format, array('link', 'aside', 'status', 'quote'))) {
						if (!empty($blabber_components)) {
							blabber_show_post_meta(
								apply_filters(
									'blabber_filter_post_meta_args', array(
									'components' => $blabber_components,
								), $blabber_blog_style[0], $blabber_columns
								)
							);
						}
					}
                    do_action( 'blabber_action_before_post_meta' );

                    // Post meta
                    if ( ! empty( $blabber_components ) && ! in_array( $blabber_hover, array( 'border', 'pull', 'slide', 'fade' ) ) ) {
                        blabber_show_post_meta(
                            apply_filters(
                                'blabber_filter_post_meta_args', array(
                                'components' => $blabber_components,
                                'seo'        => false,
                            ), $blabber_blog_style[0], $blabber_columns
                            )
                        );
                    }

                    do_action( 'blabber_action_after_post_meta' );

					// More button
					if (empty($blabber_template_args['no_links']) && !empty($blabber_template_args['more_text']) && !in_array($blabber_post_format, array('link', 'aside', 'status', 'quote'))) {
						blabber_show_post_more_link($blabber_template_args, '<p>', '</p>');
					}
					?>
				</div><!-- .entry-content -->

				<?php
			}

			if ( is_sticky() && ! is_paged() ) {
			?>
		</div>
	<?php
	}
	?>

	</article></div><?php
// Need opening PHP-tag above, because <div> is a inline-block element (used as column)!