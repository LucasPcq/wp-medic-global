<?php
/**
 * Template Style Four Pricing Table
 *
 * @package RadiantThemes
 */
//$pricing_cost_font_container ="";
$output .= '<div class="holder">';
$output .= '<div class="spotlight-tag">';
$output .= '<p class="spotlight-tag-text">' . esc_html__( 'Popular Choice', 'radiantthemes-addon' ) . '</p>';
$output .= '</div>';
$output .= '<div class="heading">';
if ( ! empty( $shortcode['pricing_table_title'] ) ) {
	$output .= '<h4 style="' . $pricing_title_font_inline_style . ' ' . $pricing_title_font_container . $pricing_title_font_weight_style . '" class="title">' . $shortcode['pricing_table_title'] . '</h4>';
}
if ( ! empty( $shortcode['pricing_table_subtitle'] ) ) {
	$output .= '<p style="' . $pricing_subtitle_font_inline_style . ' ' . $pricing_subtitle_font_container . $pricing_subtitle_font_weight_style . '" class="subtitle">' . $shortcode['pricing_table_subtitle'] . '</p>';
}
$output .= '</div>';
$output .= '<div class="pricing">';
if ( ! empty( $shortcode['pricing_table_price'] ) ) {
	$output .= '<p class="price" style="' . $pricing_cost_font_inline_style . ' ' . $pricing_cost_font_container . $pricing_cost_font_weight_style . '"><sup style="' . $pricing_cost_font_inline_style . ' ' . $pricing_cost_font_container . $pricing_cost_font_weight_style . '">' . $shortcode['pricing_table_currency_symbol'] . '</sup>' . $shortcode['pricing_table_price'] . '<sub style="' . $pricing_cost_font_inline_style . ' ' . $pricing_cost_font_container . $pricing_cost_font_weight_style . '">' . $shortcode['pricing_table_period'] . '</sub></p>';
}
if ( ! empty( $shortcode['pricing_table_tagline'] ) ) {
	$output .= '<p style="' . $pricing_tagline_font_inline_style . ' ' . $pricing_tagline_font_container . $pricing_tagline_font_weight_style . '" class="tagline">' . $shortcode['pricing_table_tagline'] . '</p>';
}
$output .= '</div>';
$content = preg_replace( '~</?p[^>]*>~', '', $content );
$output .= '<div style="' . $pricing_content_font_inline_style . ' ' . $pricing_content_font_container . $pricing_content_font_weight_style . '" class="list matchHeight">' . $content . '</div>';
$output .= '<div class="more">';
$output .= '<a style="' . $pricing_button_font_inline_style . ' ' . $pricing_button_font_container . $pricing_button_font_weight_style . '" class="btn" href="' . $shortcode['pricing_table_button_link'] . '">' . $shortcode['pricing_table_button'] . '</a>';
$output .= '</div>';
$output .= '</div>';
