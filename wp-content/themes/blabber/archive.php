<?php
/**
 * The template file to display taxonomies archive
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0.57
 */

// Redirect to the template page (if exists) for output current taxonomy
if ( is_category() || is_tag() || is_tax() ) {
	$blabber_term = get_queried_object();
	global $wp_query;
	if ( ! empty( $blabber_term->taxonomy ) && ! empty( $wp_query->posts[0]->post_type ) ) {
		$blabber_taxonomy  = blabber_get_post_type_taxonomy( $wp_query->posts[0]->post_type );
		if ( $blabber_taxonomy == $blabber_term->taxonomy ) {
			$blabber_template_page_id = blabber_get_template_page_id( array(
				'post_type'  => $wp_query->posts[0]->post_type,
				'parent_cat' => $blabber_term->term_id
			) );
			if ( 0 < $blabber_template_page_id ) {
				wp_safe_redirect( get_permalink( $blabber_template_page_id ) );
				exit;
			}
		}
	}
}
// If template page is not exists - display default blog archive template
get_template_part( apply_filters( 'blabber_filter_get_template_part', blabber_blog_archive_get_template() ) );
