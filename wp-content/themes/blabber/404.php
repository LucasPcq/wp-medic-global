<?php
/**
 * The template to display the 404 page
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0
 */

get_header();

get_template_part( apply_filters( 'blabber_filter_get_template_part', 'content', '404' ), '404' );

get_footer();