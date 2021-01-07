<?php
// Add plugin-specific colors and fonts to the custom CSS
if ( ! function_exists( 'blabber_mailchimp_get_css' ) ) {
	add_filter( 'blabber_filter_get_css', 'blabber_mailchimp_get_css', 10, 2 );
	function blabber_mailchimp_get_css( $css, $args ) {

		if ( isset( $css['fonts'] ) && isset( $args['fonts'] ) ) {
			$fonts         = $args['fonts'];
			$css['fonts'] .= <<<CSS
form.mc4wp-form .mc4wp-form-fields input[type="email"] {
	{$fonts['input_font-family']}	
}
form.mc4wp-form .mc4wp-form-fields input[type="submit"] {
	{$fonts['button_font-family']}
	{$fonts['button_font-size']}
	{$fonts['button_font-weight']}
	{$fonts['button_font-style']}
	{$fonts['button_line-height']}
	{$fonts['button_text-decoration']}
	{$fonts['button_text-transform']}
	{$fonts['button_letter-spacing']}
}

CSS;
		}

		if ( isset( $css['vars'] ) && isset( $args['vars'] ) ) {
			$vars = $args['vars'];

			$css['vars'] .= <<<CSS


CSS;
		}

		if ( isset( $css['colors'] ) && isset( $args['colors'] ) ) {
			$colors         = $args['colors'];
			$css['colors'] .= <<<CSS




form.mc4wp-form .mc4wp-form-fields input[type="submit"][disabled] {
    border-color: {$colors['text_dark']} !important;
	color: {$colors['text_dark']} !important;
}
form.mc4wp-form .mc4wp-form-fields input[type="submit"] {
	border-color: {$colors['text_dark']};
	color: {$colors['text_dark']};
}
form.mc4wp-form .mc4wp-form-fields input[type="submit"]:focus,
form.mc4wp-form .mc4wp-form-fields input[type="submit"]:hover {
    background-color: {$colors['text_dark']};
	border-color: {$colors['text_dark']};
	color: {$colors['bg_color']};
}
form.mc4wp-form input[type="checkbox"] + label:before {
    background-color: {$colors['input_bg_color']};
    color: {$colors['input_dark']};
}

form.mc4wp-form .mc4wp-alert {
	background-color: {$colors['text_link']};
	border-color: {$colors['text_hover']};
	color: {$colors['inverse_text']};
}
form.mc4wp-form .mc4wp-alert a {
	color: {$colors['inverse_link']} !important;	
}
form.mc4wp-form .mc4wp-alert a:hover {
	color: {$colors['inverse_hover']} !important;	
}

form.mc4wp-form label {
    color: {$colors['text_light']};
}

CSS;
		}

		return $css;
	}
}

