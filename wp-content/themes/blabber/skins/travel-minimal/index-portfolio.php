<?php
/**
 * The template for homepage posts with "Portfolio" style
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

	// Show filters
	$blabber_cat          = blabber_get_theme_option( 'parent_cat' );
	$blabber_post_type    = blabber_get_theme_option( 'post_type' );
	$blabber_taxonomy     = blabber_get_post_type_taxonomy( $blabber_post_type );
	$blabber_show_filters = blabber_get_theme_option( 'show_filters' );
	$blabber_tabs         = array();
	if ( ! blabber_is_off( $blabber_show_filters ) ) {
		$blabber_args           = array(
			'type'         => $blabber_post_type,
			'child_of'     => $blabber_cat,
			'orderby'      => 'name',
			'order'        => 'ASC',
			'hide_empty'   => 1,
			'hierarchical' => 0,
			'taxonomy'     => $blabber_taxonomy,
			'pad_counts'   => false,
		);
		$blabber_portfolio_list = get_terms( $blabber_args );
		if ( is_array( $blabber_portfolio_list ) && count( $blabber_portfolio_list ) > 0 ) {
			$blabber_tabs[ $blabber_cat ] = esc_html__( 'All', 'blabber' );
			foreach ( $blabber_portfolio_list as $blabber_term ) {
				if ( isset( $blabber_term->term_id ) ) {
					$blabber_tabs[ $blabber_term->term_id ] = $blabber_term->name;
				}
			}
		}
	}
	if ( count( $blabber_tabs ) > 0 ) {
		$blabber_portfolio_filters_ajax   = true;
		$blabber_portfolio_filters_active = $blabber_cat;
		$blabber_portfolio_filters_id     = 'portfolio_filters';
		?>
		<div class="portfolio_filters blabber_tabs blabber_tabs_ajax">
			<ul class="portfolio_titles blabber_tabs_titles">
				<?php
				foreach ( $blabber_tabs as $blabber_id => $blabber_title ) {
					?>
					<li><a href="<?php echo esc_url( blabber_get_hash_link( sprintf( '#%s_%s_content', $blabber_portfolio_filters_id, $blabber_id ) ) ); ?>" data-tab="<?php echo esc_attr( $blabber_id ); ?>"><?php echo esc_html( $blabber_title ); ?></a></li>
					<?php
				}
				?>
			</ul>
			<?php
			$blabber_ppp = blabber_get_theme_option( 'posts_per_page' );
			if ( blabber_is_inherit( $blabber_ppp ) ) {
				$blabber_ppp = '';
			}
			foreach ( $blabber_tabs as $blabber_id => $blabber_title ) {
				$blabber_portfolio_need_content = $blabber_id == $blabber_portfolio_filters_active || ! $blabber_portfolio_filters_ajax;
				?>
				<div id="<?php echo esc_attr( sprintf( '%s_%s_content', $blabber_portfolio_filters_id, $blabber_id ) ); ?>"
					class="portfolio_content blabber_tabs_content"
					data-blog-template="<?php echo esc_attr( blabber_storage_get( 'blog_template' ) ); ?>"
					data-blog-style="<?php echo esc_attr( blabber_get_theme_option( 'blog_style' ) ); ?>"
					data-posts-per-page="<?php echo esc_attr( $blabber_ppp ); ?>"
					data-post-type="<?php echo esc_attr( $blabber_post_type ); ?>"
					data-taxonomy="<?php echo esc_attr( $blabber_taxonomy ); ?>"
					data-cat="<?php echo esc_attr( $blabber_id ); ?>"
					data-parent-cat="<?php echo esc_attr( $blabber_cat ); ?>"
					data-need-content="<?php echo ( false === $blabber_portfolio_need_content ? 'true' : 'false' ); ?>"
				>
					<?php
					if ( $blabber_portfolio_need_content ) {
						blabber_show_portfolio_posts(
							array(
								'cat'        => $blabber_id,
								'parent_cat' => $blabber_cat,
								'taxonomy'   => $blabber_taxonomy,
								'post_type'  => $blabber_post_type,
								'page'       => 1,
								'sticky'     => $blabber_sticky_out,
							)
						);
					}
					?>
				</div>
				<?php
			}
			?>
		</div>
		<?php
	} else {
		blabber_show_portfolio_posts(
			array(
				'cat'        => $blabber_cat,
				'parent_cat' => $blabber_cat,
				'taxonomy'   => $blabber_taxonomy,
				'post_type'  => $blabber_post_type,
				'page'       => 1,
				'sticky'     => $blabber_sticky_out,
			)
		);
	}

	blabber_blog_archive_end();

} else {

	if ( is_search() ) {
		get_template_part( apply_filters( 'blabber_filter_get_template_part', 'content', 'none-search' ), 'none-search' );
	} else {
		get_template_part( apply_filters( 'blabber_filter_get_template_part', 'content', 'none-archive' ), 'none-archive' );
	}
}

get_footer();
