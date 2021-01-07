<?php
/**
 * The template for homepage posts with "Chess" style
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0
 */

blabber_storage_set( 'blog_archive', true );

get_header();

if ( have_posts() ) {

	blabber_blog_archive_start();

	$blabber_stickies   = is_home() ? get_option( 'sticky_posts' ) : false;
	$blabber_sticky_out = blabber_get_theme_option( 'sticky_style' ) == 'columns'
							&& is_array( $blabber_stickies ) && count( $blabber_stickies ) > 0 && get_query_var( 'paged' ) < 1;
	if ( $blabber_sticky_out ) {
		?>
		<div class="sticky_wrap columns_wrap">
		<?php
	}
	if ( ! $blabber_sticky_out ) {
		?>
		<div class="chess_wrap posts_container">
		<?php
	}
	
	while ( have_posts() ) {
		the_post();
		if ( $blabber_sticky_out && ! is_sticky() ) {
			$blabber_sticky_out = false;
			?>
			</div><div class="chess_wrap posts_container">
			<?php
		}
		$blabber_part = $blabber_sticky_out && is_sticky() ? 'sticky' : 'chess';
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
