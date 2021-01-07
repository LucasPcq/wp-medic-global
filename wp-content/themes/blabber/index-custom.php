<?php
/**
 * The template for homepage posts with custom style
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0.50
 */

blabber_storage_set( 'blog_archive', true );

get_header();

if ( have_posts() ) {

	$blabber_blog_style = blabber_get_theme_option( 'blog_style' );
	$blabber_parts      = explode( '_', $blabber_blog_style );
	$blabber_columns    = ! empty( $blabber_parts[1] ) ? max( 1, min( 6, (int) $blabber_parts[1] ) ) : 1;
	$blabber_blog_id    = blabber_get_custom_blog_id( $blabber_blog_style );
	$blabber_blog_meta  = blabber_get_custom_layout_meta( $blabber_blog_id );
	if ( ! empty( $blabber_blog_meta['margin'] ) ) {
		blabber_add_inline_css( sprintf( '.page_content_wrap{padding-top:%s}', esc_attr( blabber_prepare_css_value( $blabber_blog_meta['margin'] ) ) ) );
	}
	$blabber_custom_style = ! empty( $blabber_blog_meta['scripts_required'] ) ? $blabber_blog_meta['scripts_required'] : 'none';

	blabber_blog_archive_start();

	$blabber_classes    = 'posts_container blog_custom_wrap' 
							. ( ! blabber_is_off( $blabber_custom_style )
								? sprintf( ' %s_wrap', $blabber_custom_style )
								: ( $blabber_columns > 1 
									? ' columns_wrap columns_padding_bottom' 
									: ''
									)
								);
	$blabber_stickies   = is_home() ? get_option( 'sticky_posts' ) : false;
	$blabber_sticky_out = blabber_get_theme_option( 'sticky_style' ) == 'columns'
							&& is_array( $blabber_stickies ) && count( $blabber_stickies ) > 0 && get_query_var( 'paged' ) < 1;
	if ( $blabber_sticky_out ) {
		?>
		<div class="sticky_wrap columns_wrap">
		<?php
	}
	if ( ! $blabber_sticky_out ) {
		if ( blabber_get_theme_option( 'first_post_large' ) && ! is_paged() && ! in_array( blabber_get_theme_option( 'body_style' ), array( 'fullwide', 'fullscreen' ) ) ) {
			the_post();
			get_template_part( apply_filters( 'blabber_filter_get_template_part', 'content', 'excerpt' ), 'excerpt' );
		}
		?>
		<div class="<?php echo esc_attr( $blabber_classes ); ?>">
		<?php
	}
	while ( have_posts() ) {
		the_post();
		if ( $blabber_sticky_out && ! is_sticky() ) {
			$blabber_sticky_out = false;
			?>
			</div><div class="<?php echo esc_attr( $blabber_classes ); ?>">
			<?php
		}
		$blabber_part = $blabber_sticky_out && is_sticky() ? 'sticky' : 'custom';
		get_template_part( apply_filters( 'blabber_filter_get_template_part', 'content', $blabber_part ), $blabber_part );
	}
	?>
	</div>
	<?php

	blabber_show_pagination();

	blabber_blog_archive_end();

} else {

	if ( is_search() ) {
		get_template_part( apply_filters( 'blabber_filter_get_template_part', 'content', 'none-search' ), 'none-search' );
	} else {
		get_template_part( apply_filters( 'blabber_filter_get_template_part', 'content', 'none-archive' ), 'none-archive' );
	}
}

get_footer();
