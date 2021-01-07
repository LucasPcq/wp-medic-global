<?php
/**
 * The default template to display the content
 *
 * Used for index/archive/search.
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0
 */

$blabber_template_args = get_query_var( 'blabber_template_args' );
if ( is_array( $blabber_template_args ) ) {
	$blabber_columns    = empty( $blabber_template_args['columns'] ) ? 1 : max( 1, $blabber_template_args['columns'] );
	$blabber_blog_style = array( $blabber_template_args['type'], $blabber_columns );
	if ( ! empty( $blabber_template_args['slider'] ) ) {
		?><div class="slider-slide swiper-slide">
		<?php
	} elseif ( $blabber_columns > 1 ) {
		?>
		<div class="column-1_<?php echo esc_attr( $blabber_columns ); ?>">
		<?php
	}
}
$blabber_hover = ! empty( $blabber_template_args['hover'] ) && ! blabber_is_inherit( $blabber_template_args['hover'] )
						? $blabber_template_args['hover']
						: blabber_get_theme_option( 'image_hover' );
$blabber_expanded    = ! blabber_sidebar_present() && blabber_is_on( blabber_get_theme_option( 'expand_content' ) );
$blabber_post_format = get_post_format();
$blabber_post_format = empty( $blabber_post_format ) ? 'standard' : str_replace( 'post-format-', '', $blabber_post_format );
$blabber_components = blabber_array_get_keys_by_value( blabber_get_theme_option( 'meta_parts' ) );
$blabber_show_meta  = ! empty( $blabber_components ) && ! in_array( $blabber_hover, array( 'border', 'pull', 'slide', 'fade' ) );
?>
<article id="post-<?php the_ID(); ?>" data-post-id="<?php the_ID(); ?>"
	<?php
	post_class( 'post_item post_layout_excerpt post_format_' . esc_attr( $blabber_post_format ) );
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
	if ( $blabber_show_meta ) {
	    // Post meta 1
	    $vowel = '';
	    if (in_array( $blabber_post_format, array( 'audio', 'quote' ) ) && is_sticky() ) {
	        $vowels = array(
                ",categories", "categories,", "categories",
                ",comments", "comments,", "comments",
                ",likes", "likes,", "likes",
                ",views", "views,", "views",
                ",author", "author,", "author",
                ",share", "share,", "share",
                ",edit", "edit,", "edit",
                ",date", "date,", "date",
            );
	        $blabber_components1 = '';
            $blabber_components1 = str_replace($vowels, "", $blabber_components);
	    } elseif (! in_array( $blabber_post_format, array( 'audio', 'quote' ) ) && ! is_sticky()) {
	        $vowels = array(
                ",comments", "comments,", "comments",
                ",likes", "likes,", "likes",
                ",views", "views,", "views",
                ",author", "author,", "author",
                ",share", "share,", "share",
                ",edit", "edit,", "edit",
                ",date", "date,", "date",
            );
	        $blabber_components1 = '';
            $blabber_components1 = str_replace($vowels, "", $blabber_components);
	    }

	}

	// Featured image
	blabber_show_post_featured(
		array(
			'no_links'   => ! empty( $blabber_template_args['no_links'] ),
			'hover'      => $blabber_hover,
			'thumb_size' => blabber_get_thumb_size( strpos( blabber_get_theme_option( 'body_style' ), 'full' ) !== false ? 'full' : ( $blabber_expanded ? 'huge' : 'big' ) ),
			'post_info'  => (! empty( $blabber_components1) && ! in_array( $blabber_post_format, array( 'audio', 'quote' ) ) && ! is_sticky()
			    ? blabber_show_post_meta( array (
			          'components' => $blabber_components1,
                      'seo'        => false,
                      'echo'       => false
			        )
			    )
			    : '')
		)
	);

	if ( is_sticky() && ! is_paged() ) {
		?>
		<div class="post_sticky_wrap">
		<?php
	}

	// Title and post meta
	$blabber_show_title = get_the_title() != '';
	if ( $blabber_show_title || $blabber_show_meta ) {
		?>
		<div class="post_header entry-header">
			<?php

			if ( $blabber_show_meta ) {
                blabber_show_layout('<div class="post_content_meta">');
                // Post meta 1
                if (! in_array( $blabber_post_format, array( 'audio', 'quote' ) ) && ! is_sticky()) {
                    $vowels = array(
                        ",categories", "categories,", "categories",
                        ",comments", "comments,", "comments",
                        ",likes", "likes,", "likes",
                        ",views", "views,", "views",
                    );
                    $blabber_components2 = '';
                    $blabber_components2 = str_replace($vowels, "", $blabber_components);
                } else {
                    $vowels = array(
                        ",comments", "comments,", "comments",
                        ",likes", "likes,", "likes",
                        ",views", "views,", "views",
                    );
                    $blabber_components2 = '';
                    $blabber_components2 = str_replace($vowels, "", $blabber_components);
                }

                if ( ! empty( $blabber_components2 ) ) {
                    blabber_show_post_meta(
                        apply_filters(
                            'blabber_filter_post_meta_args', array(
                                'components' => $blabber_components2,
                                'seo'        => false,
                            ), 'excerpt', 1
                        )
                    );
                }

                // Post meta 2
                $vowels = array(
                        ",categories", "categories,", "categories",
                        ",author", "author,", "author",
                        ",share", "share,", "share",
                        ",edit", "edit,", "edit",
                        ",date", "date,", "date",
                );
                $blabber_components3 = '';
                $blabber_components3 = str_replace($vowels, "", $blabber_components);

                if ( ! empty( $blabber_components3 ) ) {
                    blabber_show_post_meta(
                        apply_filters(
                            'blabber_filter_post_meta_args', array(
                                'components' => $blabber_components3,
                                'seo'        => false,
                                'class'       => 'post_meta_counters',
                            ), 'excerpt', 1
                        )
                    );
                }
                blabber_show_layout('</div>');
            }


			// Post title
			if ( $blabber_show_title ) {
				do_action( 'blabber_action_before_post_title' );
				if ( empty( $blabber_template_args['no_links'] ) ) {
					the_title( sprintf( '<h2 class="post_title entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
				} else {
					the_title( '<h2 class="post_title entry-title">', '</h2>' );
				}
			}

			?>
		</div><!-- .post_header -->
		<?php
	}

	// Post content
	if ( empty( $blabber_template_args['hide_excerpt'] ) && blabber_get_theme_option( 'excerpt_length' ) > 0 ) {
		?>
		<div class="post_content entry-content">
			<?php
			if ( blabber_get_theme_option( 'blog_content' ) == 'fullpost' ) {
				// Post content area
				?>
				<div class="post_content_inner">
					<?php
					do_action( 'blabber_action_before_full_post_content' );
					the_content( '' );
					do_action( 'blabber_action_after_full_post_content' );
					?>
				</div>
				<?php
				// Inner pages
				wp_link_pages(
					array(
						'before'      => '<div class="page_links"><span class="page_links_title">' . esc_html__( 'Pages:', 'blabber' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
						'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'blabber' ) . ' </span>%',
						'separator'   => '<span class="screen-reader-text">, </span>',
					)
				);
			} else {
				// Post content area
				blabber_show_post_content( $blabber_template_args, '<div class="post_content_inner">', '</div>' );
				// More button
				if ( empty( $blabber_template_args['no_links'] ) && ! in_array( $blabber_post_format, array( 'link', 'aside', 'status', 'quote' ) ) ) {
					blabber_show_post_more_link( $blabber_template_args, '<p>', '</p>' );
				}
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
</article>
<?php

if ( is_array( $blabber_template_args ) ) {
	if ( ! empty( $blabber_template_args['slider'] ) || $blabber_columns > 1 ) {
		?>
		</div>
		<?php
	}
}