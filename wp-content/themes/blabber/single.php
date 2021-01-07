<?php
/**
 * The template to display single post
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0
 */

// Full post loading
$full_post_loading        = blabber_get_value_gp( 'action' ) == 'full_post_loading';

// Prev post loading
$prev_post_loading        = blabber_get_value_gp( 'action' ) == 'prev_post_loading';

// Position of the related posts
$blabber_related_position = blabber_get_theme_option( 'related_position' );

// Type of the prev/next posts navigation
$blabber_posts_navigation = blabber_get_theme_option( 'posts_navigation' );
$blabber_prev_post        = false;

// Rewrite style of the single post if current post loading via AJAX and featured image and title is not in the content
if ( ( $full_post_loading || $prev_post_loading ) && ! in_array( blabber_get_theme_option( 'single_style' ), array( 'in-above', 'in-below', 'in-over', 'in-sticky' ) ) ) {
	blabber_storage_set_array( 'options_meta', 'single_style', 'in-below' );
}

get_header();

while ( have_posts() ) {
	the_post();

	// Type of the prev/next posts navigation
	if ( 'scroll' == $blabber_posts_navigation ) {
		$blabber_prev_post = get_previous_post( true );         // Get post from same category
		if ( ! $blabber_prev_post ) {
			$blabber_prev_post = get_previous_post( false );    // Get post from any category
			if ( ! $blabber_prev_post ) {
				$blabber_posts_navigation = 'links';
			}
		}
	}

	// Override some theme options to display featured image, title and post meta in the dynamic loaded posts
	if ( $full_post_loading || ( $prev_post_loading && $blabber_prev_post ) ) {
		blabber_sc_layouts_showed( 'featured', false );
		blabber_sc_layouts_showed( 'title', false );
		blabber_sc_layouts_showed( 'postmeta', false );
	}

	// If related posts should be inside the content
	if ( strpos( $blabber_related_position, 'inside' ) === 0 ) {
		ob_start();
	}

	// Display post's content
	get_template_part( apply_filters( 'blabber_filter_get_template_part', 'content', 'single-' . blabber_get_theme_option( 'single_style' ) ), 'single-' . blabber_get_theme_option( 'single_style' ) );

	// If related posts should be inside the content
	if ( strpos( $blabber_related_position, 'inside' ) === 0 ) {
		$blabber_content = ob_get_contents();
		ob_end_clean();

		ob_start();
		do_action( 'blabber_action_related_posts' );
		$blabber_related_content = ob_get_contents();
		ob_end_clean();

		$blabber_related_position_inside = max( 0, min( 9, blabber_get_theme_option( 'related_position_inside' ) ) );
		if ( 0 == $blabber_related_position_inside ) {
			$blabber_related_position_inside = mt_rand( 1, 9 );
		}

		$blabber_p_number = 0;
		$blabber_related_inserted = false;
		for ( $i = 0; $i < strlen( $blabber_content ) - 3; $i++ ) {
			if ( '<' == $blabber_content[ $i ] && 'p' == $blabber_content[ $i + 1 ] && in_array( $blabber_content[ $i + 2 ], array( '>', ' ' ) ) ) {
				$blabber_p_number++;
				if ( $blabber_related_position_inside == $blabber_p_number ) {
					$blabber_related_inserted = true;
					$blabber_content = ( $i > 0 ? substr( $blabber_content, 0, $i ) : '' )
										. $blabber_related_content
										. substr( $blabber_content, $i );
				}
			}
		}
		if ( ! $blabber_related_inserted ) {
			$blabber_content .= $blabber_related_content;
		}

		blabber_show_layout( $blabber_content );
	}

	// Author bio
	if ( blabber_get_theme_option( 'show_author_info' ) == 1
		&& ! is_attachment()
		&& get_the_author_meta( 'description' )
		&& ( 'scroll' != $blabber_posts_navigation || blabber_get_theme_option( 'posts_navigation_scroll_hide_author' ) == 0 )
		&& ( ! $full_post_loading || blabber_get_theme_option( 'open_full_post_hide_author' ) == 0 )
	) {
		do_action( 'blabber_action_before_post_author' );
		get_template_part( apply_filters( 'blabber_filter_get_template_part', 'templates/author-bio' ) );
		do_action( 'blabber_action_after_post_author' );
	}

	// Previous/next post navigation.
	if ( 'links' == $blabber_posts_navigation && ! $full_post_loading ) {
		do_action( 'blabber_action_before_post_navigation' );
		?>
		<div class="nav-links-single<?php
			if ( ! blabber_is_off( blabber_get_theme_option( 'posts_navigation_fixed' ) ) ) {
				echo ' nav-links-fixed fixed';
			}
		?>">
			<?php
			the_post_navigation(
				array(
					'next_text' => '<span class="nav-arrow"></span>'
						. '<span class="screen-reader-text">' . esc_html__( 'Next post', 'blabber' ) . '</span> '
						. '<h6 class="post-title">%title</h6>',
					'prev_text' => '<span class="nav-arrow"></span>'
						. '<span class="screen-reader-text">' . esc_html__( 'Previous post', 'blabber' ) . '</span> '
						. '<h6 class="post-title">%title</h6>',
				)
			);
			?>
		</div>
		<?php
		do_action( 'blabber_action_after_post_navigation' );
	}

	// Related posts
	if ( 'below_content' == $blabber_related_position
		&& ( 'scroll' != $blabber_posts_navigation || blabber_get_theme_option( 'posts_navigation_scroll_hide_related' ) == 0 )
		&& ( ! $full_post_loading || blabber_get_theme_option( 'open_full_post_hide_related' ) == 0 )
	) {
		do_action( 'blabber_action_related_posts' );
	}

	// If comments are open or we have at least one comment, load up the comment template.
	$blabber_comments_number = get_comments_number();
	if ( comments_open() || $blabber_comments_number > 0 ) {
		if ( blabber_get_value_gp( 'show_comments' ) == 1 || ( ! $full_post_loading && ( 'scroll' != $blabber_posts_navigation || blabber_get_theme_option( 'posts_navigation_scroll_hide_comments' ) == 0 || blabber_check_url( '#comment' ) ) ) ) {
			do_action( 'blabber_action_before_comments' );
			comments_template();
			do_action( 'blabber_action_after_comments' );
		} else {
			?>
			<div class="show_comments_single">
				<a href="<?php echo esc_url( add_query_arg( array( 'show_comments' => 1 ), get_comments_link() ) ); ?>" class="theme_button show_comments_button">
					<?php
					if ( $blabber_comments_number > 0 ) {
						echo esc_html( sprintf( _n( 'Show comment', 'Show comments ( %d )', $blabber_comments_number, 'blabber' ), $blabber_comments_number ) );
					} else {
						esc_html_e( 'Leave a comment', 'blabber' );
					}
					?>
				</a>
			</div>
			<?php
		}
	}

	if ( 'scroll' == $blabber_posts_navigation && ! $full_post_loading ) {
		?>
		<div class="nav-links-single-scroll"
			data-post-id="<?php echo esc_attr( get_the_ID( $blabber_prev_post ) ); ?>"
			data-post-link="<?php echo esc_attr( get_permalink( $blabber_prev_post ) ); ?>"
			data-post-title="<?php the_title_attribute( array( 'post' => $blabber_prev_post ) ); ?>">
		</div>
		<?php
	}
}

get_footer();
