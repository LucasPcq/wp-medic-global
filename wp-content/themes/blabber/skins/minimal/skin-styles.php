<?php
// Add skin-specific colors and fonts to the custom CSS
if ( ! function_exists( 'blabber_skin_get_css' ) ) {
	add_filter( 'blabber_filter_get_css', 'blabber_skin_get_css', 10, 2 );
	function blabber_skin_get_css( $css, $args ) {

		if ( isset( $css['fonts'] ) && isset( $args['fonts'] ) ) {
			$fonts         = $args['fonts'];
			$css['fonts'] .= <<<CSS
    
    span.wpcf7-not-valid-tip,
    .esg-entry-cover .eec > div,
    .sc_twitter_default .sc_twitter_item_content,
    .copyright-text,
    .socials_wrap .social_item .social_name,
    .widget_calendar td#prev a,
    .widget_calendar td#next a,
    .widget_calendar caption,
    .widget_calendar th,
    .widget_area .post_item .post_info, aside .post_item .post_info,
    .widget_area .post_item .post_categories, aside .post_item .post_categories,
    .widget_recent_posts .post_item.with_thumb .post_thumb:before,
    .widget li {
        {$fonts['h5_font-family']}
    }    
    body .minimal-light .esg-navigationbutton,
    .widget_twitter_follow {
        {$fonts['button_font-family']}
        {$fonts['button_font-style']}
        {$fonts['button_line-height']}
        {$fonts['button_text-decoration']}
        {$fonts['button_text-transform']}
        {$fonts['button_letter-spacing']}
    }    
    .sc_promo.sc_promo_default .sc_item_subtitle {        
        {$fonts['info_font-family']}
    }
    

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

    input[type="submit"],
    input[type="reset"],
    input[type="button"] {
        color: {$colors['bg_color']};
        background-color: {$colors['text_hover']};
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

	input[type="submit"]:hover,
    input[type="reset"]:hover,
    input[type="button"]:hover {
        color: {$colors['inverse_link']};
        background-color: {$colors['text_link']};
    }
    



	.post_meta,
	.post_meta_item,
	.post_meta_item:after,
	.post_meta_item:hover:after,
	.post_meta .vc_inline-link,
	.post_meta .vc_inline-link:after,
	.post_meta .vc_inline-link:hover:after,
	.post_meta_item a,
	.post_info .post_info_item,
	.post_info .post_info_item a,
	.post_info_counters .post_meta_item {
		color: {$colors['text_link']};
	}
	.post_date a:hover, .post_date a:focus,
	a.post_meta_item:hover, a.post_meta_item:focus,
	.post_meta_item a:hover, .post_meta_item a:focus,
	.post_meta .vc_inline-link:hover, .post_meta .vc_inline-link:focus,
	.post_info .post_info_item a:hover, .post_info .post_info_item a:focus,
	.post_info_meta .post_meta_item:hover, .post_info_meta .post_meta_item:focus {
		color: {$colors['text_dark']};
	}
	.sc_layouts_title .post_meta_item a:hover,
	.sc_layouts_title .post_meta_item a:focus,
	.sc_layouts_title .sc_layouts_title_breadcrumbs a:hover,
	.sc_layouts_title .sc_layouts_title_breadcrumbs a:focus,
	.sc_layouts_title .post_meta .vc_inline-link:hover,
	.sc_layouts_title .post_meta .vc_inline-link:focus,
	.sc_layouts_title a.post_meta_item:hover,
	.sc_layouts_title a.post_meta_item:focus,
	.sc_layouts_title .post_meta_item.post_categories a:hover,
	.sc_layouts_title .post_meta_item.post_categories a:focus,
	.sc_layouts_title .post_info .post_info_item a:hover,
	.sc_layouts_title .post_info .post_info_item a:focus,
	.sc_layouts_title .post_info_counters .post_meta_item:hover,
	.sc_layouts_title .post_info_counters .post_meta_item:focus {
		color: {$colors['text_link']};
	}

	.nav-links-more a,
	.woocommerce-links-more a {
		color: {$colors['bg_color']};
        background-color: {$colors['text_hover']};
	}
	.nav-links-more a:hover,
	.woocommerce-links-more a:hover {
		color: {$colors['inverse_link']};
        background-color: {$colors['text_link']};
	}
	
	.comments_list_wrap .comment_reply a {
		color: {$colors['text_dark']};
	}
	.comments_list_wrap .comment_reply a:hover {
		color: {$colors['text_link']};
	}
	.comments_list_wrap .comment_author a,
	.comments_list_wrap .comment_author,
	.comments_list_wrap .comment_info {
		color: {$colors['text_link']};
	}
	.comments_list_wrap .comment_author a:hover {
		color: {$colors['text_hover']};
	}
    .comments_wrap .form-submit input[type="submit"] {
        color: {$colors['bg_color']};
        background-color: {$colors['text_hover']};
        border-color: {$colors['text_hover']};
    }
    .comments_wrap .form-submit input[type="submit"]:hover,
    .comments_wrap .form-submit input[type="submit"]:focus {
    	color: {$colors['inverse_link']};
        background-color: {$colors['text_link']};
        border-color: {$colors['text_link']};
    }
    .widget .widget_title:after, .widget .widgettitle:after {
	    background: {$colors['bd_color']};
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
        color: {$colors['bg_color']};
        background-color: {$colors['text_hover']};
    }

    .sc_item_title_style_accent .sc_item_title_text:before,
    .sc_item_title_style_accent .sc_item_title_text:after {
        background-color: {$colors['bd_color']};
    }
    .sc_title_accent .sc_item_descr {
        color: {$colors['text_light']};
    }
    
    .sc_title_accent .sc_button_simple {
        color: {$colors['text_link']};
    }
	.sc_title_accent .sc_button_simple:hover {
    	color: {$colors['text_dark']};
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
    
    .sticky .post_title a,
    .sticky .post_sticky_wrap .post_title a {
	    color: {$colors['extra_dark']} !important;
    }
    .sticky .post_title a:hover,
    .sticky .post_sticky_wrap .post_title a:hover {
	    color: {$colors['text_link']} !important;
    } 
    
    .comments_list_wrap .comment_author:after,
    .post_meta .post_meta_item:after,
    .post_meta .post_meta_item.post_edit:after,
    .post_meta .vc_inline-link:after {
        border-color: {$colors['text_light_03']};
        background-color: {$colors['text_light_03']};
    }
    .sc_team.sc_team_featured .sc_team_item_subtitle a,
    .sc_promo.sc_promo_default .sc_item_subtitle,
    .post_meta .post_meta_item.post_categories a {
        color: {$colors['inverse_link']};
        background-color: {$colors['text_link']};
    }
    .sc_team.sc_team_featured .sc_team_item_subtitle a:hover,
    .post_meta .post_meta_item.post_categories a:hover {
        color: {$colors['bg_color']};
        background-color: {$colors['text_hover']};
    }
    .sticky .post_meta .post_meta_item.post_categories a:hover {
        color: {$colors['extra_bg_color']} !important;
        background-color: {$colors['extra_dark']};
    }
    .single-product .related > h2:after,
    .page_contact_form_title:after,
    .related_wrap .section_title.related_wrap_title:after {
        background: {$colors['bd_color']};
    }
    .widget_twitter_follow {
        background-color: {$colors['text_dark']};
        color: {$colors['bg_color']} !important;
    }
    .widget_twitter_follow:hover {
        background-color: {$colors['text_link']} !important;
        color: {$colors['inverse_link']} !important;
    }
    .minimal-light .esg-navigationbutton,
    .show_comments {
        color: {$colors['bg_color']} !important;
        background-color: {$colors['text_hover']} !important;
        border-color: {$colors['text_hover']} !important;
    }
    .minimal-light .esg-navigationbutton:hover,
    .show_comments:hover {
        background-color: {$colors['text_link']} !important;
        color: {$colors['bg_color']} !important;
    }
    .minimal-light .esg-navigationbutton.sc_button_hover_strike .strike-text,
    .show_comments.sc_button_hover_strike .strike-text {
    	background-color: {$colors['text_link']} !important;
        color: {$colors['bg_color']} !important;
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
    .sc_blogger_default_over_centered_simple .sc_item_featured [class*="post_info_"] .post_meta:not(.post_meta_categories) a:hover {
      color: {$colors['text_link']} !important;
    }    
    .slider_container .slide_info .post_meta .post_meta_item:after {
        border-color: {$colors['text_link']} !important;
    }
    .slider_container .slide_info .post_meta *,    
    .slider_container .slide_info .post_meta,
    .slider_container .slide_info .slide_cats a,
    .slider_container .slide_info .slide_cats a:hover,
    .slider_container .slide_info .slide_title a:hover,
    .slider_container .slide_info .slide_title a {
        color: {$colors['inverse_link']} !important;
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
			
	input[type="radio"] + label:before, input[type="checkbox"] + label:before, input[type="radio"] + .wpcf7-list-item-label:before, input[type="checkbox"] + .wpcf7-list-item-label:before, .wpcf7-list-item-label.wpcf7-list-item-right:before, .edd_price_options ul > li > label > input[type="radio"] + span:before, .edd_price_options ul > li > label > input[type="checkbox"] + span:before {
 		border-color: {$colors['input_bd_color']};
 	}
 		 	 	 	
	.post_breadcrumbs,
	.post_breadcrumbs a {
		color: {$colors['text_dark']};
	}
	.post_breadcrumbs a:hover {
		color: {$colors['text_link']};
	}
	 	
	.post_item_single .post_content .post_tags .post_meta_label {
		color: {$colors['text_dark']};
	}
 	 	 	 	
	.show_comments_wrap {
		border-color: {$colors['bd_color']};
	}
 	 	
 	.scheme_self.menu_side_wrap.menu_side_dots .sc_layouts_logo,
 	.scheme_self.menu_side_wrap.menu_side_dots #toc_menu .toc_menu_item .toc_menu_icon,
	.scheme_self.menu_side_wrap.menu_side_dots .menu_side_inner {
		background: {$colors['bg_color']};
	}
	.scheme_self.menu_side_wrap.menu_side_dots .menu_side_inner .menu_mobile_button {
		color: {$colors['text_dark']};
 	}
 	.scheme_self.menu_side_wrap.menu_side_dots .menu_side_inner .menu_mobile_button:hover {
		color: {$colors['text_link']};
 	}
 	 	
 	 .scheme_self.menu_mobile.menu_mobile_narrow .menu_mobile_inner {
 	 	background: {$colors['alter_bg_color']};
 	 } 	 
 	 .scheme_self.menu_mobile.menu_mobile_narrow .social_item .social_icon {
 	 	background-color: {$colors['bg_color']};
 	 	color: {$colors['text_dark']};
 	 }
 	 .scheme_self.menu_mobile.menu_mobile_narrow .social_item:hover .social_icon {
 	 	background-color: {$colors['bg_color']};
 	 	color: {$colors['text_link']};
 	 }
 	 

	.post_layout_excerpt .post_title a:hover *,
	.post_layout_excerpt .post_title a:hover,
	.post_layout_classic .post_title a:hover *,
	.post_layout_classic .post_title a:hover,
	.sc_blogger .post_layout_classic .post_title a:hover {
		color: {$colors['text_hover2']};
	}
	
	
	.scheme_self.menu_side_wrap .menu_side_button {
		background-color: {$colors['text_link_07']};
	}
	
	
	.widget.woocommerce .buttons a:not(.sc_button_hover_strike) {
		color: {$colors['text_hover']};
		border-color: {$colors['text_hover']};
	}
	.widget.woocommerce .buttons a:not(.sc_button_hover_strike):hover {
		color: {$colors['text_link']};
		border-color: {$colors['text_link']};
	}
	
	

CSS;
		}

		return $css;
	}
}

