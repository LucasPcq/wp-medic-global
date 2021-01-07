<?php

add_filter( 'blabber_filter_add_theme_vars', 'blabber_skin_elm_add_theme_vars', 10, 2 );
function blabber_skin_elm_add_theme_vars( $rez, $vars ) {
    foreach ( array( 10, 20, 60, 40, 60 ) as $m ) {
        if ( substr( $vars['page'], 0, 2 ) != '{{' ) {
            $rez[ "page{$m}" ]    = ( $vars['page'] + $m ) . 'px';
            $rez[ "content{$m}" ] = ( $vars['page'] - $vars['gap'] - $vars['sidebar'] + $m ) . 'px';
        } else {
            $rez[ "page{$m}" ]    = "{{ data.page{$m} }}";
            $rez[ "content{$m}" ] = "{{ data.content{$m} }}";
        }
    }
    return $rez;
}



// Add plugin-specific colors and fonts to the custom CSS
if ( ! function_exists( 'blabber_elm_get_css2' ) ) {
    add_filter( 'blabber_filter_get_css', 'blabber_elm_get_css2', 10, 2 );
    function blabber_elm_get_css2( $css, $args ) {

        if ( isset( $css['vars'] ) && isset( $args['vars'] ) ) {
            extract( $args['vars'] );
            $css['vars'] .= <<<CSS
/* No gap */
.elementor-section.elementor-section-boxed > .elementor-container.elementor-column-gap-no {
	max-width: $page;
}
/* Narrow: 5px */
.elementor-section.elementor-section-boxed > .elementor-container.elementor-column-gap-narrow {
	max-width: $page10;
}
.elementor-section.elementor-section-justified.elementor-section-boxed:not(.elementor-inner-section) > .elementor-container.elementor-column-gap-narrow,
.elementor-section.elementor-section-justified.elementor-section-full_width:not(.elementor-section-stretched):not(.elementor-inner-section) > .elementor-container.elementor-column-gap-narrow {
	width: $page10; 
}
.sidebar_show .content_wrap .elementor-section.elementor-section-justified.elementor-section-boxed:not(.elementor-inner-section) > .elementor-container.elementor-column-gap-narrow,
.sidebar_show .content_wrap .elementor-section.elementor-section-justified.elementor-section-full_width:not(.elementor-section-stretched):not(.elementor-inner-section) > .elementor-container.elementor-column-gap-narrow {
	width: $content10; 
}

/* Default: 10px */
.elementor-section.elementor-section-boxed > .elementor-container.elementor-column-gap-default {
	max-width: $page20;
}
.elementor-section.elementor-section-justified.elementor-section-boxed:not(.elementor-inner-section) > .elementor-container.elementor-column-gap-default,
.elementor-section.elementor-section-justified.elementor-section-full_width:not(.elementor-section-stretched):not(.elementor-inner-section) > .elementor-container.elementor-column-gap-default {
	width: $page20;
}
.sidebar_show .content_wrap .elementor-section.elementor-section-justified.elementor-section-boxed:not(.elementor-inner-section) > .elementor-container.elementor-column-gap-default,
.sidebar_show .content_wrap .elementor-section.elementor-section-justified.elementor-section-full_width:not(.elementor-section-stretched):not(.elementor-inner-section) > .elementor-container.elementor-column-gap-default {
	width: $content20;
}

/* Extended: 15px */
.elementor-section.elementor-section-boxed > .elementor-container.elementor-column-gap-extended {
	max-width: $page60;
}
.elementor-section.elementor-section-justified.elementor-section-boxed:not(.elementor-inner-section) > .elementor-container.elementor-column-gap-extended,
.elementor-section.elementor-section-justified.elementor-section-full_width:not(.elementor-section-stretched):not(.elementor-inner-section) > .elementor-container.elementor-column-gap-extended {
	width: $page60; 
}
.sidebar_show .content_wrap .elementor-section.elementor-section-justified.elementor-section-boxed:not(.elementor-inner-section) > .elementor-container.elementor-column-gap-extended,
.sidebar_show .content_wrap .elementor-section.elementor-section-justified.elementor-section-full_width:not(.elementor-section-stretched):not(.elementor-inner-section) > .elementor-container.elementor-column-gap-extended {
	width: $content60; 
}

/* Wide: 20px */
.elementor-section.elementor-section-boxed > .elementor-container.elementor-column-gap-wide {
	max-width: $page40;
}
.elementor-section.elementor-section-justified.elementor-section-boxed:not(.elementor-inner-section) > .elementor-container.elementor-column-gap-wide,
.elementor-section.elementor-section-justified.elementor-section-full_width:not(.elementor-section-stretched):not(.elementor-inner-section) > .elementor-container.elementor-column-gap-wide {
	width: $page40; 
}
.sidebar_show .content_wrap .elementor-section.elementor-section-justified.elementor-section-boxed:not(.elementor-inner-section) > .elementor-container.elementor-column-gap-wide,
.sidebar_show .content_wrap .elementor-section.elementor-section-justified.elementor-section-full_width:not(.elementor-section-stretched):not(.elementor-inner-section) > .elementor-container.elementor-column-gap-wide {
	width: $content40; 
}

/* Wider: 30px */
.elementor-section.elementor-section-boxed > .elementor-container.elementor-column-gap-wider {
	max-width: $page60;
}
.elementor-section.elementor-section-justified.elementor-section-boxed:not(.elementor-inner-section) > .elementor-container.elementor-column-gap-wider,
.elementor-section.elementor-section-justified.elementor-section-full_width:not(.elementor-section-stretched):not(.elementor-inner-section) > .elementor-container.elementor-column-gap-wider {
	width: $page60; 
}
.sidebar_show .content_wrap .elementor-section.elementor-section-justified.elementor-section-boxed:not(.elementor-inner-section) > .elementor-container.elementor-column-gap-wider,
.sidebar_show .content_wrap .elementor-section.elementor-section-justified.elementor-section-full_width:not(.elementor-section-stretched):not(.elementor-inner-section) > .elementor-container.elementor-column-gap-wider {
	width: $content60; 
}

CSS;
        }

        return $css;
    }
}

// Add skin-specific colors and fonts to the custom CSS
if ( ! function_exists( 'blabber_skin_get_css' ) ) {
	add_filter( 'blabber_filter_get_css', 'blabber_skin_get_css', 10, 2 );
	function blabber_skin_get_css( $css, $args ) {

		if ( isset( $css['fonts'] ) && isset( $args['fonts'] ) ) {
			$fonts         = $args['fonts'];
			$css['fonts'] .= <<<CSS
    
    .sc_blogger_list.sc_blogger_list_simple .sc_blogger_columns_wrap .sc_blogger_item:before {    	
    	{$fonts['decor_font-family']}
    }
    span.wpcf7-not-valid-tip,
    .sc_twitter_default .sc_twitter_item_content,    
    .socials_wrap .social_item .social_name,
    .widget_calendar th,
    .widget li {
        {$fonts['h5_font-family']}
    }    
    body .minimal-light .esg-navigationbutton,
    .widget_twitter_follow {
        {$fonts['button_font-family']}
        {$fonts['button_font-size']}
        {$fonts['button_font-weight']}
        {$fonts['button_font-style']}
        {$fonts['button_line-height']}
        {$fonts['button_text-decoration']}
        {$fonts['button_text-transform']}
        {$fonts['button_letter-spacing']}
    }
    .widget_calendar caption,    
    .sc_promo.sc_promo_default .sc_item_subtitle {        
        {$fonts['info_font-family']}
    }
    .sc_price_item .sc_price_item_details,
    em,
    .woocommerce .comment-form label,
    .wpgdprc-checkbox label,
    .wpcf7-acceptance label,
    .wpcf7-form label,
    form.mc4wp-form label {
    	{$fonts['p_font-family']}
    }
    form.mc4wp-form .mc4wp-form-fields input[type="submit"] {
    	{$fonts['button_font-family']}
        {$fonts['button_font-size']}
        {$fonts['button_font-weight']}
        {$fonts['button_text-transform']}
        {$fonts['button_letter-spacing']}
    }
    .custom_font h6.sc_item_title {
		{$fonts['p_font-family']}
        {$fonts['h6_font-size']}
        {$fonts['h6_font-weight']}
        {$fonts['h6_text-transform']}
        {$fonts['h6_letter-spacing']}
    }
    footer .widget.wp-widget-nav_menu li a {
        {$fonts['menu_font-family']}
        {$fonts['menu_font-size']}
        {$fonts['menu_font-weight']}
        {$fonts['menu_text-transform']}
        {$fonts['submenu_letter-spacing']}
    }
    .copyright-text,
    .sc_layouts_row.sc_layouts_row_type_narrow .sc_layouts_menu_nav > li > a {
        {$fonts['menu_font-family']}
        {$fonts['submenu_font-weight']}
        {$fonts['menu_text-transform']}
        {$fonts['submenu_letter-spacing']}
    }
    .breadcrumbs {
        {$fonts['menu_font-family']}
        {$fonts['submenu_font-size']}
        {$fonts['submenu_font-weight']}
        {$fonts['menu_text-transform']}
        {$fonts['menu_letter-spacing']}
    }
    .related_style_classic .related_item .top_rating,
    .trx_addons_reviews_block_detailed .trx_addons_reviews_block_title,
    .trx_addons_reviews_block_short .trx_addons_reviews_block_title,
    .sc_icons_default .sc_icons_item .sc_icons_item_title,
    .comments_list_wrap .comment_author,
    .single-product .related > h2,
    .page_contact_form .page_contact_form_title,
    .related_wrap .section_title.related_wrap_title,
    .widget_recent_posts .post_item.with_thumb .post_thumb:before,
    .widget_area .post_item .post_info, aside .post_item .post_info,
    .widget_area .post_item .post_categories, aside .post_item .post_categories {
        {$fonts['info_font-family']}
    }
    .nav-links-single .nav-links .screen-reader-text:hover,
    .nav-links-single .nav-links .screen-reader-text,
    .widget .widget_title, .widget .widgettitle,
    .sc_title_accent .title-wrap-go h5.sc_item_title {
        {$fonts['menu_font-family']}
    }
    .woocommerce #reviews #comments ol.commentlist li .comment-text p.meta strong,
    .woocommerce-page #reviews #comments ol.commentlist li .comment-text p.meta strong,
    .woocommerce nav.woocommerce-pagination ul,
    .esg-entry-cover .eec > div,
    .sc_item_subtitle,
    .sc_price_item_subtitle,
    .wp-block-pullquote__citation, blockquote > cite,
    blockquote > p > cite, blockquote > .wp-block-pullquote__citation,
    .wp-block-quote .wp-block-quote__citation,
    .sc_price_item .sc_price_item_price,
    .widget_calendar td#prev a,
    .widget_calendar td#next a,
    .widget_product_tag_cloud a, .widget_tag_cloud a,
    .esg-filters div.esg-navigationbutton,
    .woocommerce nav.woocommerce-pagination ul li a, 
    .page_links > a, 
    .comments_pagination .page-numbers, 
    .nav-links .page-numbers {
        {$fonts['decor_font-family']}
    }
    .search_style_expand input[placeholder]::-webkit-input-placeholder{ {$fonts['button_font-family']} {$fonts['button_font-weight']} {$fonts['button_font-size']} }
    .search_style_expand input[placeholder]::-moz-placeholder { {$fonts['button_font-family']} {$fonts['button_font-weight']} {$fonts['button_font-size']} }
    .search_style_expand input[placeholder]:-ms-input-placeholder { {$fonts['button_font-family']} {$fonts['button_font-weight']} {$fonts['button_font-size']} }
    .search_style_expand input[placeholder]::placeholder { {$fonts['button_font-family']} {$fonts['button_font-weight']} {$fonts['button_font-size']} }

CSS;
		}

		if ( isset( $css['vars'] ) && isset( $args['vars'] ) ) {
			$vars         = $args['vars'];
			$css['vars'] .= <<<CSS
			
	

CSS;
		}

		if ( isset( $css['colors'] ) && isset( $args['colors'] ) ) {
			$colors         = $args['colors'];
			$css['colors'] .= <<<CSS
    
    ul.trx_addons_list_dot > li:before {
        background-color: {$colors['text_link']};
    }
    
    input[type="submit"],
    input[type="reset"],
    input[type="button"] {
        color: {$colors['text_hover']};
        background-color: {$colors['bg_color']};
        border-color: {$colors['text_hover']};
    }
    
    /* Buttons hover */
    form button:not(.components-button):hover,
    form button:not(.components-button):focus,
    input[type="submit"]:hover,
    input[type="submit"]:focus,
    input[type="reset"]:hover,
    input[type="reset"]:focus,
    input[type="button"]:hover,
    input[type="button"]:focus,
    .post_item .more-link:hover,
    .comments_wrap .form-submit input[type="submit"]:hover,
    .comments_wrap .form-submit input[type="submit"]:focus,
    .wp-block-button:not(.is-style-outline) > .wp-block-button__link:hover,
    .wp-block-button:not(.is-style-outline) > .wp-block-button__link:focus,
    /* BB & Buddy Press */
    #buddypress .comment-reply-link:hover,
    #buddypress .comment-reply-link:focus,
    #buddypress .generic-button a:hover,
    #buddypress .generic-button a:focus,
    #buddypress a.button:hover,
    #buddypress a.button:focus,
    #buddypress button:hover,
    #buddypress button:focus,
    #buddypress input[type="button"]:hover,
    #buddypress input[type="button"]:focus,
    #buddypress input[type="reset"]:hover,
    #buddypress input[type="reset"]:focus,
    #buddypress input[type="submit"]:hover,
    #buddypress input[type="submit"]:focus,
    #buddypress ul.button-nav li a:hover,
    #buddypress ul.button-nav li a:focus,
    a.bp-title-button:hover,
    a.bp-title-button:focus,
    /* Booked */
    .booked-calendar-wrap .booked-appt-list .timeslot .timeslot-people button:hover,
    .booked-calendar-wrap .booked-appt-list .timeslot .timeslot-people button:focus,
    #booked-profile-page .booked-profile-appt-list .appt-block .booked-cal-buttons .google-cal-button > a:hover,
    #booked-profile-page .booked-profile-appt-list .appt-block .booked-cal-buttons .google-cal-button > a:focus,
    #booked-profile-page input[type="submit"]:hover,
    #booked-profile-page input[type="submit"]:focus,
    #booked-profile-page button:hover,
    #booked-profile-page button:focus,
    .booked-list-view input[type="submit"]:hover,
    .booked-list-view input[type="submit"]:focus,
    .booked-list-view button:hover,
    .booked-list-view button:focus,
    table.booked-calendar input[type="submit"]:hover,
    table.booked-calendar input[type="submit"]:focus,
    table.booked-calendar button:hover,
    table.booked-calendar button:focus,
    .booked-modal input[type="submit"]:hover,
    .booked-modal input[type="submit"]:focus,
    .booked-modal button:hover,
    .booked-modal button:focus,
    /* ThemeREX Addons */
    .sc_button_default:hover,
    .sc_button_default:focus,
    .sc_button:not(.sc_button_simple):not(.sc_button_bordered):not(.sc_button_bg_image):hover,
    .sc_button:not(.sc_button_simple):not(.sc_button_bordered):not(.sc_button_bg_image):focus,
    .socials_share:not(.socials_type_drop) .social_icon:hover,
    .socials_share:not(.socials_type_drop) .social_icon:focus,
    /* Tour Master */
    .tourmaster-tour-search-wrap input.tourmaster-tour-search-submit[type="submit"]:hover,
    .tourmaster-tour-search-wrap input.tourmaster-tour-search-submit[type="submit"]:focus,
    /* Tribe Events */
    #tribe-bar-form .tribe-bar-submit input[type="submit"]:hover,
    #tribe-bar-form .tribe-bar-submit input[type="submit"]:focus,
    #tribe-bar-form.tribe-bar-mini .tribe-bar-submit input[type="submit"]:hover,
    #tribe-bar-form.tribe-bar-mini .tribe-bar-submit input[type="submit"]:focus,
    #tribe-bar-form .tribe-bar-views-toggle:hover,
    #tribe-bar-form .tribe-bar-views-toggle:focus,
    #tribe-bar-views li.tribe-bar-views-option:hover,
    #tribe-bar-views li.tribe-bar-views-option:focus,
    #tribe-bar-views .tribe-bar-views-list .tribe-bar-views-option.tribe-bar-active,
    #tribe-bar-views .tribe-bar-views-list .tribe-bar-views-option.tribe-bar-active:hover,
    #tribe-bar-views .tribe-bar-views-list .tribe-bar-views-option.tribe-bar-active:focus,
    #tribe-events .tribe-events-button:hover,
    #tribe-events .tribe-events-button:focus,
    .tribe-events-button:hover,
    .tribe-events-button:focus,
    .tribe-events-cal-links a:hover,
    .tribe-events-cal-links a:focus,
    .tribe-events-sub-nav li a:hover,
    .tribe-events-sub-nav li a:focus,
    /* EDD buttons */
    .edd_download_purchase_form .button:hover, .edd_download_purchase_form .button:active, .edd_download_purchase_form .button:focus,
    #edd-purchase-button:hover, #edd-purchase-button:active, #edd-purchase-button:focus,
    .edd-submit.button:hover, .edd-submit.button:active, .edd-submit.button:focus,
    .widget_edd_cart_widget .edd_checkout a:hover,
    .widget_edd_cart_widget .edd_checkout a:focus,
    .sc_edd_details .downloads_page_tags .downloads_page_data > a:hover,
    .sc_edd_details .downloads_page_tags .downloads_page_data > a:focus,
    /* MailChimp */
    .mc4wp-form input[type="submit"]:hover,
    .mc4wp-form input[type="submit"]:focus,
    /* WooCommerce */
    .woocommerce #respond input#submit:hover,
    .woocommerce #respond input#submit:focus,
    .woocommerce .button:hover, .woocommerce-page .button:hover,
    .woocommerce .button:focus, .woocommerce-page .button:focus,
    .woocommerce a.button:hover, .woocommerce-page a.button:hover,
    .woocommerce a.button:focus, .woocommerce-page a.button:focus,
    .woocommerce button.button:hover, .woocommerce-page button.button:hover,
    .woocommerce button.button:focus, .woocommerce-page button.button:focus,
    .woocommerce input.button:hover, .woocommerce-page input.button:hover,
    .woocommerce input.button:focus, .woocommerce-page input.button:focus,
    .woocommerce input[type="button"]:hover, .woocommerce-page input[type="button"]:hover,
    .woocommerce input[type="button"]:focus, .woocommerce-page input[type="button"]:focus,
    .woocommerce input[type="submit"]:hover, .woocommerce-page input[type="submit"]:hover,
    .woocommerce input[type="submit"]:focus, .woocommerce-page input[type="submit"]:focus {
        color: {$colors['bg_color']};
        background-color: {$colors['text_hover']};
        border-color: {$colors['text_hover']};
    }
    
    .sc_button_hover_strike.sc_button_bordered {
		color: {$colors['text_link']} !important;
		border-color: {$colors['text_link']} !important;
	}
    
    a.sc_button_hover_strike.sc_button_bordered:hover {
		background-color: {$colors['text_link']} !important;
		border-color: {$colors['text_link']} !important;
		color: {$colors['inverse_link']} !important;
	}
    .sc_button_hover_strike.sc_button_bordered .strike-text {
    	color: {$colors['inverse_link']} !important;
        background-color: {$colors['text_link']} !important;
    }
    
    input[type="submit"], input[type="reset"], input[type="button"] {
		border-color: {$colors['text_link']};
		color: {$colors['text_link']};
    }
    input[type="submit"]:hover,
    input[type="submit"]:focus,
    input[type="submit"]:active,
    input[type="reset"]:hover,
    input[type="reset"]:focus,
    input[type="reset"]:active,
    input[type="button"]:hover,
    input[type="button"]:focus,
    input[type="button"]:active {
		background-color: {$colors['text_link']};
		border-color: {$colors['text_link']};
		color: {$colors['inverse_link']};
    }

    .comments_wrap .form-submit input[type="submit"] {
        color: {$colors['text_link']};
        background-color: {$colors['bg_color']};
        border-color: {$colors['text_link']};
    }
    .comments_wrap .form-submit input[type="submit"]:hover,
    .comments_wrap .form-submit input[type="submit"]:focus {
        color: {$colors['inverse_link']};
        background-color: {$colors['text_link']};
        border-color: {$colors['text_link']};
    }
    .widget .widget_title:after, .widget .widgettitle:after {
	    background: {$colors['text_dark']};
    }
    .scheme_self.footer_wrap .widget .widget_title:after,
    .scheme_self.footer_wrap .widget .widgettitle:after,
    .scheme_self.sidebar .widget .widget_title:after,
    .scheme_self.sidebar .widget .widgettitle:after {
	    background: {$colors['alter_bd_hover']};
    }        
    .widget li > a:after {    
        background-color: {$colors['alter_bg_color']};
    }
    .scheme_self.sidebar .widget li > a:after,
    .scheme_self.footer_wrap .widget li > a:after {    
        background-color: {$colors['alter_bd_color']};
    }
    .sidebar_inner .widget_product_search,
    .sidebar_inner .widget_search {
        background-color: {$colors['alter_bg_color']};
    }
    .sidebar_inner .widget_product_search input[type="text"],
    .sidebar_inner .widget_search input[type="search"] {
        border-color: {$colors['alter_bd_color']};
    }
    .sidebar_inner .widget_product_search input[type="text"]:focus,
    .sidebar_inner .widget_product_search input[type="text"]:active,
    .sidebar_inner .widget_search input[type="search"]:focus,
    .sidebar_inner .widget_search input[type="search"]:active {
        border-color: {$colors['input_bd_hover']};
    }
    .scheme_self.sidebar .sidebar_inner .widget_product_search input[type="text"],
    .scheme_self.sidebar .sidebar_inner .widget_search input[type="search"] {
	    border-color: {$colors['input_bd_color']};
    }

    .widget_recent_posts .post_item.with_thumb .post_thumb:before {
        color: {$colors['extra_dark']};
        background-color: {$colors['extra_link']};
    }
    
    .sc_edd_details .downloads_page_tags .downloads_page_data > a,
    .widget_product_tag_cloud a,
    .widget_tag_cloud a {
        color: {$colors['extra_link']};
        background-color: {$colors['alter_bg_color']};
    }
    .sc_edd_details .downloads_page_tags .downloads_page_data > a:hover,
    .widget_product_tag_cloud a:hover,
    .widget_tag_cloud a:hover {
        color: {$colors['extra_dark']};
        background-color: {$colors['extra_link']};
    }
    
    .sc_item_title_style_accent .sc_item_title_text:before,
    .sc_item_title_style_accent .sc_item_title_text:after {
        background-color: {$colors['text_dark']};
    }
    .sc_title_accent .sc_item_descr {
        color: {$colors['text_light']};
    }
    .sc_title_accent .sc_button_simple {
        color: {$colors['text_dark']};
    }
    .sc_button_simple:not(.sc_button_bg_image):hover,
    .sc_title_accent .sc_button_simple:hover {
    	color: {$colors['text_link']} !important;
    }
    .sc_layouts_row_type_compact .socials_wrap .social_item .social_icon,
    .scheme_self.sc_layouts_row_type_compact .socials_wrap .social_item .social_icon {
        color: {$colors['text_dark']};
    }
    .sc_layouts_row_type_compact .socials_wrap .social_item:hover .social_icon,
    .scheme_self.sc_layouts_row_type_compact .socials_wrap .social_item:hover .social_icon {
        color: {$colors['text_link']};
    }

    .footer_wrap .sc_socials_icons_names .social_item .social_icon,
    .scheme_self.footer_wrap .sc_socials_icons_names .social_item .social_icon,
    .footer_wrap .sc_socials_icons_names .social_item,
    .scheme_self.footer_wrap .sc_socials_icons_names .social_item {
        color: {$colors['text']};
    }
    .footer_wrap .sc_socials_icons_names .social_item:hover .social_icon,
    .scheme_self.footer_wrap .sc_socials_icons_names .social_item:hover .social_icon,
    .footer_wrap .sc_socials_icons_names .social_item:hover,
    .scheme_self.footer_wrap .sc_socials_icons_names .social_item:hover {
        color: {$colors['text_dark']};
    }    
    .footer_wrap .sc_socials_icons_names .social_item + .social_item,
    .scheme_self.footer_wrap .sc_socials_icons_names .social_item + .social_item {
        border-color: {$colors['bd_color']};
    }
    

    .copyright-text a {
        color: {$colors['text_dark']};
    }
    .post_meta_item.post_categories a:before {
    	color: {$colors['text_link']} !important;
    }
    .sc_team.sc_team_featured .sc_team_item_subtitle a {
        color: {$colors['extra_link']};
        background-color: {$colors['bg_color']};
    }
    .sc_promo.sc_promo_default .sc_item_subtitle {
        color: {$colors['extra_dark']};
        background-color: {$colors['extra_link']};
    }
    .post_layout_excerpt .post_featured .post_meta,
    .cat_top.post_meta .post_meta_item.post_categories a {
        color: {$colors['extra_link']};
        background-color: {$colors['bg_color']};
    }
    .post_layout_excerpt .post_featured .post_meta .post_categories a:hover,
    .cat_top.post_meta .post_meta_item.post_categories a:hover {
        color: {$colors['text_dark']};
        background-color: {$colors['bg_color']};
    }
    .sc_team.sc_team_featured .sc_team_item_subtitle a:hover {
        color: {$colors['text_dark']};
        background-color: {$colors['bg_color']};
    }
   
    .sticky .post_meta .post_meta_item.post_categories a:hover {
        color: {$colors['inverse_link']} !important;
    }
    .sticky .post_title a,
    .sticky .post_title * {
    	color: {$colors['inverse_link']};
    }
    .sticky .sc_button.sc_button_hover_strike.sc_button_bordered:hover {
        background-color: {$colors['extra_link']} !important;
        border-color: {$colors['extra_link']} !important;
    }
    .single-product .related > h2:after,
    .page_contact_form_title:after,
    .related_wrap .section_title.related_wrap_title:after {
        background: {$colors['text_dark']};
    }
    .widget_twitter .sc_twitter_default + .widget_twitter_follow:before {
        border-color: {$colors['bg_color']};
    }
    .widget_twitter_follow {
        background-color: {$colors['bg_color']};
        color: {$colors['text_link']} !important;
        border-color: {$colors['text_link']} !important;
    }
    .widget_twitter_follow:hover {
        border-color: {$colors['text_hover']} !important;
        background-color: {$colors['text_hover']} !important;
        color: {$colors['bg_color']} !important;
    }
    .minimal-light .esg-navigationbutton,
    .show_comments {
        color: {$colors['text_link']} !important;
        border-color: {$colors['text_link']} !important;
    }
    .minimal-light .esg-navigationbutton:hover,
    .show_comments:hover {
        background-color: {$colors['text_link']} !important;
        color: {$colors['inverse_link']} !important;
    }
    .extra-row .widget {
        border-color: {$colors['bd_color']};
    }    
    .widget_banner,
    .sc_twitter_default .sc_twitter_item {
        border-color: {$colors['bd_color']};
    }
    .sc_widget_twitter .sc_twitter_default .sc_twitter_item .sc_twitter_item_icon {
        background: {$colors['bg_color']};
    }    
    .sc_blogger_list .post_meta .post_meta_item.post_categories a:after {
        color: {$colors['text_link']} !important;
    }
    .sc_blogger_list .post_meta .post_meta_item.post_categories a {
        color: {$colors['text_link']};
    }
    .sc_blogger_list .post_meta .post_meta_item.post_categories a:hover {
        color: {$colors['text_hover']};
    }    
    .sc_item_featured [class*="post_info_"] {
        background-color: {$colors['bg_color']} !important;
        color: {$colors['text_link']} !important;
    }
    .sc_item_featured [class*="post_info_"] a {
        color: {$colors['text_link']} !important;
    }
     .sc_item_featured [class*="post_info_"] a:hover {
        color: {$colors['text_hover']} !important;
    }
        
    .slider_container .slide_info .post_meta .post_meta_item:after {
        border-color: {$colors['inverse_link']} !important;
    }
    .slider_container .slide_info .post_meta *,    
    .slider_container .slide_info .post_meta,
    .slider_container .slide_info .slide_cats a,
    .slider_container .slide_info .slide_cats a:hover, 
    .slider_container .slide_info .slide_title a {
        color: {$colors['inverse_link']} !important;
    }
    .slider_container .slide_info .slide_title a:hover {
        color: {$colors['text_link']} !important;
    }
    .mfp-bg,
    .elementor-lightbox {
        background-color: {$colors['extra_bg_color_03']};
    }
    
    
    .sc_layouts_row_type_compact .sc_layouts_menu_mobile_button .sc_layouts_item_icon,
    .scheme_self.sc_layouts_row_type_compact .sc_layouts_menu_mobile_button .sc_layouts_item_icon {
        color: {$colors['text_dark']};
    }
     .sc_layouts_row_type_compact .sc_layouts_menu_mobile_button a:hover .sc_layouts_item_icon,
    .scheme_self.sc_layouts_row_type_compact .sc_layouts_menu_mobile_button a:hover .sc_layouts_item_icon {
        color: {$colors['text_link']};
    }
    
    
    
              
    /* Menu */
    .sc_layouts_menu_nav > li > a {
        color: {$colors['text_dark']} !important;
    }
   
    .sc_layouts_menu_nav > li > a:hover,
    .sc_layouts_menu_nav > li.sfHover > a {
        color: {$colors['text_link']} !important;
    }
    .sc_layouts_row.sc_layouts_row_type_narrow .sc_layouts_menu_nav > li > a {
    	color: {$colors['text']} !important;
    }
    .sc_layouts_row.sc_layouts_row_type_narrow .sc_layouts_menu_nav > li > a:hover,
    .sc_layouts_row.sc_layouts_row_type_narrow .sc_layouts_menu_nav > li.sfHover > a {
        color: {$colors['text_dark']} !important;
    }
    .sc_layouts_menu_nav > li.current-menu-item > a,
    .sc_layouts_menu_nav > li.current-menu-parent > a,
    .sc_layouts_menu_nav > li.current-menu-ancestor > a {
        color: {$colors['text_link']} !important;
    }
    .sc_layouts_menu_nav .menu-collapse > a:before {
        color: {$colors['alter_text']};
    }
    .sc_layouts_menu_nav .menu-collapse > a:after {
        background-color: {$colors['alter_bg_color']};
    }
    .sc_layouts_menu_nav .menu-collapse > a:hover:before,
    .sc_layouts_menu_nav .menu-collapse > a:focus:before {
        color: {$colors['text_link']};
    }
    .sc_layouts_menu_nav .menu-collapse > a:hover:after,
    .sc_layouts_menu_nav .menu-collapse > a:focus:after {
        background-color: {$colors['alter_bg_hover']};
    }
    
    /* Submenu */
    .sc_layouts_menu_popup .sc_layouts_menu_nav,
    .sc_layouts_menu_nav > li ul {
        background-color: {$colors['extra_bg_color']};
    }
    .widget_nav_menu li.menu-delimiter,
    .sc_layouts_menu_nav > li li.menu-delimiter {
        border-color: {$colors['extra_bd_color']};
    }
    .sc_layouts_menu_popup .sc_layouts_menu_nav > li > a,
    .sc_layouts_menu_nav > li li > a {
        color: {$colors['extra_dark']} !important;
    }
    .sc_layouts_menu_popup .sc_layouts_menu_nav > li > a:hover,
    .sc_layouts_menu_popup .sc_layouts_menu_nav > li.sfHover > a,
    .sc_layouts_menu_nav > li li > a:hover,
    .sc_layouts_menu_nav > li li.sfHover > a {
        color: {$colors['text_link']} !important;
    }
    .sc_layouts_menu_nav > li li > a:hover:after {
        color: {$colors['extra_text']} !important;
    }
    .sc_layouts_menu_nav li[class*="columns-"] li.menu-item-has-children > a:hover,
    .sc_layouts_menu_nav li[class*="columns-"] li.menu-item-has-children.sfHover > a {
        color: {$colors['text_link']} !important;
        background-color: transparent;
    }
    .sc_layouts_menu_nav > li li[class*="icon-"]:before {
        color: {$colors['extra_hover']};
    }
    .sc_layouts_menu_nav > li li[class*="icon-"]:hover:before,
    .sc_layouts_menu_nav > li li[class*="icon-"].shHover:before {
        color: {$colors['extra_text']};
    }
    .sc_layouts_menu_nav > li li.current-menu-item > a,
    .sc_layouts_menu_nav > li li.current-menu-parent > a,
    .sc_layouts_menu_nav > li li.current-menu-ancestor > a {
        color: {$colors['text_link']} !important;
    }
    .sc_layouts_menu_nav > li li.current-menu-item:before,
    .sc_layouts_menu_nav > li li.current-menu-parent:before,
    .sc_layouts_menu_nav > li li.current-menu-ancestor:before {
        color: {$colors['text_link']} !important;
    }
               
	 .sc_layouts_search .search_wrap .search_submit:before {
		color: {$colors['text_dark']};
	 }
    .sc_layouts_search .search_wrap .search_submit:hover:before,
    .sc_layouts_search .search_wrap .search_submit:focus:before {
		color: {$colors['text_link']};
	 }


	form.mc4wp-form .mc4wp-form-fields:before {
		color: {$colors['text_dark']};
	}
	 form.mc4wp-form .mc4wp-form-fields input[type="submit"]:focus, 
	 form.mc4wp-form .mc4wp-form-fields input[type="submit"]:hover {
		color: {$colors['text_link']};
	 }
	 
	 .post_item_single .post_content > .post_meta_single:before {
	 	color: {$colors['text_dark']};
	 }
	 .post_item_single .post_content .post_tags a {
	    color: {$colors['text_link']} !important;
        background-color: {$colors['alter_bg_color']} !important;
	 }
	  .post_item_single .post_content .post_tags a:hover {
	    color: {$colors['extra_dark']} !important;
        background-color: {$colors['extra_link']} !important;
	 }
	 
	 .author_bio .author_link {
	 	color: {$colors['text_link']};
	 }
	 .author_bio .author_link:hover {
	 	color: {$colors['text_hover']};
	 }
	 .sc_layouts_title .sc_layouts_title_breadcrumbs a:hover {
	 	color: {$colors['text_link']};
	 }
	 
	 .more-link.sc_button_bordered:not(.sc_button_bg_image):not(.sc_button_hover_strike):hover {
	 	color: {$colors['inverse_link']} !important;
        background-color: {$colors['text_link']} !important;
        border-color: {$colors['text_link']} !important;
	 }
	 
	 
	 .nav-links-more a:not(.sc_button_hover_strike),
	 .woocommerce-links-more a:not(.sc_button_hover_strike) {
	 	color: {$colors['text_link']};
        border-color: {$colors['text_link']};
	 }
	 .nav-links-more a:not(.sc_button_hover_strike):hover,
	 .woocommerce-links-more a:not(.sc_button_hover_strike):hover {
	 	color: {$colors['inverse_link']};
        background-color: {$colors['text_link']};
        border-color: {$colors['text_link']};
	 }
	
	.post_featured.hover_shop_buttons .mask {
		background-color: {$colors['bg_color_08']} !important;
	}
	
	table > tbody > tr:nth-child(2n+1) > td  div.quantity span {
        background-color: {$colors['alter_bg_color']} !important;
    }
    table > tbody > tr:nth-child(2n) > td  div.quantity span {
        background-color: {$colors['alter_bg_hover']} !important;
    }
    form.woocommerce-shipping-calculator .select2-container.select2-container--default span.select2-selection,
    form.woocommerce-shipping-calculator .select2-container.select2-container--default .select2-selection--single .select2-selection__rendered,    
    .woocommerce form.woocommerce-shipping-calculator .form-row .input-text, .woocommerce-page form.woocommerce-shipping-calculator .form-row .input-text,
    .woocommerce-cart table.cart td.actions .coupon .input-text,    
    .woocommerce div.product form.cart div.quantity, 
    .woocommerce-page div.product form.cart div.quantity, 
    .woocommerce .shop_table.cart div.quantity, 
    .woocommerce-page .shop_table.cart div.quantity {
    	border-color: {$colors['text_dark']};
    }    
	.woocommerce-shipping-calculator .select_container select,
	.woocommerce-shipping-calculator .select_container {
		border-color: {$colors['text_dark']};
		background-color: {$colors['alter_bg_hover']} !important;
	}
	.woocommerce-shipping-calculator .select_container:before {
		background-color: {$colors['alter_bg_hover']} !important;
	}	
		
	.sc_blogger_list.sc_blogger_list_simple .sc_blogger_columns_wrap .sc_blogger_item:before {    	
    	color: {$colors['text_link']}
    }
    .sc_blogger_default.sc_blogger_default_classic_meta_simple .trx_addons_columns_wrap.columns_padding_bottom > [class*="trx_addons_column-"]:before,
    .sc_blogger_list.sc_blogger_list_simple .sc_blogger_columns_wrap > div + div:before {
    	background: {$colors['bd_color']};
    }
    .sc_blogger_default.sc_blogger_default_classic_meta_grid > .sc_item_content > .sc_blogger_item {
    	border-color: {$colors['bd_color']};
    }
	.sc_price_item_image + .sc_price_item_price {
	    color: {$colors['text_link']};
        background-color: {$colors['bg_color']};
	}
	form.mc4wp-form input[type="checkbox"] + label:before {
		background-color: transparent;
	}
    .wpgdprc-checkbox label input[type="checkbox"]:before,
	input[type="radio"] + label:before, input[type="checkbox"] + label:before,
	input[type="radio"] + .wpcf7-list-item-label:before,
	input[type="checkbox"] + .wpcf7-list-item-label:before,
	.wpcf7-list-item-label.wpcf7-list-item-right:before, .edd_price_options ul > li > label > input[type="radio"] + span:before,
	.edd_price_options ul > li > label > input[type="checkbox"] + span:before {
		border-color: {$colors['bd_color']};
        color: {$colors['text_dark']};
	}
    .trx_addons_reviews_text,
    .trx_addons_reviews_block_detailed .trx_addons_reviews_block_criterias .trx_addons_reviews_block_list_title,
    .trx_addons_reviews_block_detailed .trx_addons_reviews_block_pn .trx_addons_reviews_block_list li:before,
    .trx_addons_reviews_block_detailed .trx_addons_reviews_block_pn .trx_addons_reviews_block_list,
    .trx_addons_reviews_block_attributes_row_type_text .trx_addons_reviews_block_attributes_link .trx_addons_reviews_block_attributes_title {
        color: {$colors['alter_light']};
    }
    .trx_addons_reviews_block_attributes_row_type_text .trx_addons_reviews_block_attributes_link .trx_addons_reviews_block_attributes_value {
        color: {$colors['text_dark']};
    }
    .trx_addons_reviews_block_attributes_row_type_text .trx_addons_reviews_block_attributes_link:hover .trx_addons_reviews_block_attributes_title,
    .trx_addons_reviews_block_attributes_row_type_text .trx_addons_reviews_block_attributes_link:hover .trx_addons_reviews_block_attributes_value {
        color: {$colors['text_link']};
    }
    .trx_addons_reviews_block_detailed .trx_addons_reviews_block_pn {
        background-color: {$colors['alter_bg_color']};
    }
    .trx_addons_reviews_block_detailed .trx_addons_reviews_block_info,
    .trx_addons_reviews_block_detailed .trx_addons_reviews_block_buttons,
    .trx_addons_reviews_block_detailed .trx_addons_reviews_block_criterias,
    .trx_addons_reviews_block_detailed .trx_addons_reviews_block_pn {
        border-color: {$colors['bd_color']};
    }
    .trx_addons_reviews_block_detailed {
        background-color: transparent;
    }
    .trx_addons_reviews_stars_default,
    .trx_addons_reviews_stars_hover {
        color: {$colors['text_dark']};
    }
    .trx_addons_reviews_block_detailed .trx_addons_reviews_block_criterias + .trx_addons_reviews_block_buttons:before {
        background-color: {$colors['bd_color']};
    }
    .sc_blogger .post_info_tr .post_meta_rating a {
        color: {$colors['extra_dark']} !important;
        background-color: {$colors['extra_link']};
    }
    .related_style_classic .related_item .top_rating a {
        color: {$colors['extra_dark']};
        background-color: {$colors['extra_link']};
    }
    .comments_list_wrap .comment_author:after, .post_meta .post_meta_item:after, .post_meta .post_meta_item.post_edit:after, .post_meta .vc_inline-link:after {
        border-color: {$colors['text_light']};
    }
    .post_featured .mask {
        background-color: {$colors['inverse_dark_03']};
    }
    .sc_blogger_list:not(.sc_blogger_list_with_image) .sc_blogger_item {
        border-color: {$colors['bd_color']};
    }
    .sc_price_item .sc_price_item_details {
        color: {$colors['text']};
    }
    .mejs-controls .mejs-button>button:hover,
    .mejs-controls .mejs-button>button:focus {
        color: {$colors['extra_dark']};
        background-color: {$colors['extra_link']};
    }

CSS;
		}

		return $css;
	}
}

