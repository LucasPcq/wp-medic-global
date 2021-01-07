<?php
// Add skin-specific colors and fonts to the custom CSS
if ( ! function_exists( 'blabber_skin_get_css' ) ) {
	add_filter( 'blabber_filter_get_css', 'blabber_skin_get_css', 10, 2 );
	function blabber_skin_get_css( $css, $args ) {

		if ( isset( $css['fonts'] ) && isset( $args['fonts'] ) ) {
			$fonts         = $args['fonts'];
			$css['fonts'] .= <<<CSS
    
    
    .widget_recent_posts .post_item.with_thumb .post_thumb:before,
    span.wpcf7-not-valid-tip,
    .esg-entry-cover .eec > div,
    .sc_twitter_default .sc_twitter_item_content,
    .copyright-text,
    .socials_wrap .social_item .social_name,
    .widget_calendar td#prev a,
    .widget_calendar td#next a,
    .widget_calendar caption,
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
    
    .slider_container .slide_info.slide_info_large .slide_cats a,
    .woocommerce #reviews #comments ol.commentlist li .comment-text p.meta strong,
    .woocommerce-page #reviews #comments ol.commentlist li .comment-text p.meta strong, 
    .woocommerce #reviews #comments ol.commentlist li .meta,
    .sc_promo.sc_promo_default .sc_item_subtitle,
    .sc_item_subtitle,
    .sc_price_item .sc_price_item_price,
    .sc_skills_counter .sc_skills_total,
    .elementor-widget-progress .elementor-progress-text, .elementor-widget-progress .elementor-progress-percentage,
    .sc_icons_default .sc_icons_item .sc_icons_item_title,
    .widget_area .post_item .post_info, aside .post_item .post_info,
    .widget_area .post_item .post_categories, aside .post_item .post_categories,    
    .sc_edd_details .downloads_page_tags .downloads_page_data > a, .widget_product_tag_cloud a, .widget_tag_cloud a,
    .comments_list_wrap .comment_author,
    .comments_list_wrap .comment_posted,
    .post_item_single .post_content .post_tags a,
    .breadcrumbs,
    .burger-text,
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


	/* Page title and breadcrumbs */
	.sc_layouts_title .sc_layouts_title_meta,
	.sc_layouts_title .sc_layouts_title_breadcrumbs,
	.sc_layouts_title .sc_layouts_title_breadcrumbs a,
	.sc_layouts_title .sc_layouts_title_description,
	.sc_layouts_title .post_meta,
	.sc_layouts_title .post_meta_item,
	.sc_layouts_title .post_meta .vc_inline-link,
	.sc_layouts_title .post_meta_item a,
	.sc_layouts_title .post_meta_item:after,
	.sc_layouts_title .post_meta_item:hover:after,
	.sc_layouts_title .post_meta_item.post_meta_edit:after,
	.sc_layouts_title .post_meta_item.post_meta_edit:hover:after,
	.sc_layouts_title .post_meta_item.post_categories,
	.sc_layouts_title .post_meta_item.post_categories a,
	.sc_layouts_title .post_info .post_info_item,
	.sc_layouts_title .post_info .post_info_item a,
	.sc_layouts_title .post_info_counters .post_meta_item {
		color: {$colors['text_link2']};
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
		color: {$colors['text_dark']};
	}
	
	
	.sc_layouts_title .post_meta .post_meta_item:after,
    .sc_layouts_title .post_meta .post_meta_item.post_edit:after,
    .sc_layouts_title .post_meta .vc_inline-link:after {
        border-color: {$colors['text_link2']};
    }
	
	input[type="submit"],
    input[type="reset"],
    input[type="button"] {
        color: {$colors['inverse_link']};
        background-color: {$colors['text_link']};
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
    .wp-block-button:not(.is-style-outline) .wp-block-button__link:hover,
    .wp-block-button:not(.is-style-outline) .wp-block-button__link:focus,
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
    .comments_form_wrap,
	.show_comments_wrap  {
		border-color: {$colors['bd_color']};
	}
    .comments_list_wrap .comment_author:after,
    .post_meta .post_meta_item:after,
    .post_meta .post_meta_item.post_edit:after,
    .post_meta .vc_inline-link:after {
        border-color: {$colors['text_light']};
    }     
    
    .sc_team.sc_team_featured .sc_team_item_subtitle a,
    .sc_promo.sc_promo_default .sc_item_subtitle,
    .post_meta .post_meta_item.post_categories a {
        color: {$colors['inverse_dark']};
        background-color: {$colors['text_link2']};
    }
    .sc_team.sc_team_featured .sc_team_item_subtitle a:hover,
    .post_meta .post_meta_item.post_categories a:hover {
        color: {$colors['inverse_link']};
        background-color: {$colors['text_link']};
    }
    .sticky .post_title a {
    	color: {$colors['inverse_hover']};
    }
    .sticky .post_meta .post_meta_item.post_categories a:hover {
        color: {$colors['inverse_link']} !important;
        background-color: {$colors['text_link']};
    }
    .single-product .related > h2:after,
    .page_contact_form_title:after,
    .related_wrap .section_title.related_wrap_title:after {
        background: {$colors['bd_color']};
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
    .minimal-light .esg-navigationbutton {
        color: {$colors['text_hover']} !important;
        border-color: {$colors['text_hover']} !important;
    }
    .minimal-light .esg-navigationbutton:hover {
        background-color: {$colors['text_hover']} !important;
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
    .sc_blogger_list.sc_blogger_list_simple .post_meta .post_meta_item.post_categories a:after {
        color: {$colors['text_link']} !important;
    }
    .sc_blogger_list.sc_blogger_list_simple .post_meta .post_meta_item.post_categories a {
        color: {$colors['text_link']};
    }
    .sc_blogger_list.sc_blogger_list_simple .post_meta .post_meta_item.post_categories a:hover {
        color: {$colors['text_hover']};
    }    
  
    .slider_container .slide_info .post_meta .post_meta_item:after {
        border-color: {$colors['inverse_link']} !important;
    }
    .slider_container .slide_info .post_meta *,    
    .slider_container .slide_info .post_meta,
    .slider_container .slide_info .slide_cats a,
    .slider_container .slide_info .slide_cats a:hover, 
    .slider_container .slide_info .slide_title a:hover,
    .slider_container .slide_info .slide_title a {
       
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
    
    .widget.woocommerce .buttons a:not(.sc_button_hover_strike) {
		color: {$colors['text_hover']};
		border-color: {$colors['text_hover']};
	}
	.widget.woocommerce .buttons a:not(.sc_button_hover_strike):hover {
		color: {$colors['text_link']};
		border-color: {$colors['text_link']};
	}
	
	.sc_layouts_row_type_compact .sc_layouts_item input[type="text"],
	.search_wrap.search_style_expand .search_submit {
		color: {$colors['text_dark']}
	}
	.sc_layouts_search .search_wrap .search_submit:before {
		color: {$colors['text_dark']};
	 }
    .sc_layouts_search .search_wrap .search_submit:hover:before,
    .sc_layouts_search .search_wrap .search_submit:focus:before {
		color: {$colors['text_link']};
	 }
	
	.sc_layouts_row_type_compact .search_wrap .search_field::-webkit-input-placeholder,
	.scheme_self.sc_layouts_row_type_compact .search_wrap .search_field::-webkit-input-placeholder {
		color: {$colors['text_dark']};
	}
	.sc_layouts_row_type_compact .search_wrap .search_field::-moz-placeholder,
	.scheme_self.sc_layouts_row_type_compact .search_wrap .search_field::-moz-placeholder {
		color: {$colors['text_dark']};
	}
	.sc_layouts_row_type_compact .search_wrap .search_field:-ms-input-placeholder,
	.scheme_self.sc_layouts_row_type_compact .search_wrap .search_field:-ms-input-placeholder {
		color: {$colors['text_dark']};
	}
	
	.sc_layouts_menu_mobile_button_burger .sc_layouts_iconed_text_link:hover .sc_layouts_item_icon {
		color: {$colors['text_link']} !important;
	}
	
	 /* Row type: Compact */
	.sc_layouts_row_type_compact .sc_layouts_item,
	.scheme_self.sc_layouts_row_type_compact .sc_layouts_item {
		color: {$colors['alter_text']};
	}
	
	.sc_layouts_row_type_compact .sc_layouts_item a:not(.sc_button):not(.button),
	.scheme_self.sc_layouts_row_type_compact .sc_layouts_item a:not(.sc_button):not(.button) {
		color: {$colors['alter_dark']};
	}
	.sc_layouts_row_type_compact .sc_layouts_item a:not(.sc_button):not(.button):hover,
	.sc_layouts_row_type_compact .sc_layouts_item a:not(.sc_button):not(.button):focus,
	.sc_layouts_row_type_compact .sc_layouts_item a:hover .sc_layouts_item_icon,
	.sc_layouts_row_type_compact .sc_layouts_item a:focus .sc_layouts_item_icon,
	.scheme_self.sc_layouts_row_type_compact .sc_layouts_item a:not(.sc_button):not(.button):hover,
	.scheme_self.sc_layouts_row_type_compact .sc_layouts_item a:not(.sc_button):not(.button):focus,
	.scheme_self.sc_layouts_row_type_compact .sc_layouts_item a:hover .sc_layouts_item_icon,
	.scheme_self.sc_layouts_row_type_compact .sc_layouts_item a:focus .sc_layouts_item_icon {
		color: {$colors['text_dark']};
	}	
	.sc_layouts_row_type_normal .sc_layouts_item a:not(.sc_button):not(.button),
	.scheme_self.sc_layouts_row_type_normal .sc_layouts_item a:not(.sc_button):not(.button) {
		color: {$colors['text_link']};
	}	
	.sc_layouts_title .sc_layouts_title_breadcrumbs,
	.sc_layouts_title .sc_layouts_title_breadcrumbs a {
		color: {$colors['text_link2']};
	}	
	.scheme_self.sidebar .socials_wrap .social_item:hover .social_icon,
	.scheme_self.footer_wrap .socials_wrap .social_item:hover .social_icon {
		color: {$colors['inverse_hover']} !important;
		background-color: {$colors['alter_hover']} !important;
	}	
	.post_item_single .post_content .post_tags .post_meta_label {
		color: {$colors['text_dark']};
	}
	.post_item_single .post_content > .post_meta_single:before {
		color: {$colors['text_dark']};
	}
	.post_item_single .post_content .post_tags a {
		color: {$colors['inverse_dark']};
		background-color: {$colors['text_link2']};
	}
	.post_item_single .post_content .post_tags a:hover {
		color: {$colors['inverse_hover']};
		background-color: {$colors['text_dark']};
	}
	.related_wrap.related_style_classic .related_item {
		background-color: {$colors['alter_bg_color']};
	}		
		
	.related_style_classic .post_meta,
	.related_style_classic .post_meta_item,
	.related_style_classic .post_meta_item:after,
	.related_style_classic .post_meta_item:hover:after,
	.related_style_classic .post_meta .vc_inline-link,
	.related_style_classic .post_meta .vc_inline-link:after,
	.related_style_classic .post_meta .vc_inline-link:hover:after,
	.related_style_classic .post_meta_item a,
	.related_style_classic .post_info .post_info_item,
	.related_style_classic .post_info .post_info_item a,
	.related_style_classic .post_info_counters .post_meta_item {
		color: {$colors['alter_light']};
	}
	.related_style_classic .post_date a:hover, .post_date a:focus,
	.related_style_classic a.post_meta_item:hover, a.post_meta_item:focus,
	.related_style_classic .post_meta_item a:hover, .post_meta_item a:focus,
	.related_style_classic .post_meta .vc_inline-link:hover, .post_meta .vc_inline-link:focus,
	.related_style_classic .post_info .post_info_item a:hover, .post_info .post_info_item a:focus,
	.related_style_classic .post_info_meta .post_meta_item:hover, .post_info_meta .post_meta_item:focus {
		color: {$colors['text_dark']};
	}
		
	.sc_slider_controls .slider_controls_wrap > a,
	.slider_container.slider_controls_side .slider_controls_wrap > a {
		color: {$colors['text_dark']};
		background-color: {$colors['alter_bg_color']};
		border-color: {$colors['alter_bg_color']};
	}
	.sc_slider_controls .slider_controls_wrap > a:hover,
	.slider_container.slider_controls_side .slider_controls_wrap > a:hover {
		color: {$colors['inverse_link']};
		background-color: {$colors['text_link']};
		border-color: {$colors['text_link']};
	}
	.trx_addons_video_player.with_cover .video_hover:hover, 
	.format-video .post_featured.with_thumb .post_video_hover:hover, 
	.sc_layouts_blog_item_featured .post_featured.with_thumb .post_video_hover:hover {
		color: {$colors['inverse_link']};
    }
		
	.sc_edd_details .downloads_page_tags .downloads_page_data > a,
	.widget_product_tag_cloud a,
	.widget_tag_cloud a {
		color: {$colors['inverse_dark']};
		background-color: {$colors['text_link2']};
	}
	.sc_edd_details .downloads_page_tags .downloads_page_data > a:hover,
	.widget_product_tag_cloud a:hover,
	.widget_tag_cloud a:hover {
		color: {$colors['inverse_hover']} !important;
		background-color: {$colors['text_dark']};
	}
	
	.post_item_none_search .search_wrap .search_submit:hover:before, .post_item_none_archive .search_wrap .search_submit:hover:before {
		color: {$colors['text_link']} !important;
	}
	
	.woocommerce div.product form.cart div.quantity span, .woocommerce-page div.product form.cart div.quantity span,
	.woocommerce .shop_table.cart div.quantity span, .woocommerce-page .shop_table.cart div.quantity span {
		color: {$colors['text_dark']};
		background-color: {$colors['alter_bg_color']};
	}
	.woocommerce div.product form.cart div.quantity span:hover, .woocommerce-page div.product form.cart div.quantity span:hover,
	.woocommerce .shop_table.cart div.quantity span:hover, .woocommerce-page .shop_table.cart div.quantity span:hover {
		color: {$colors['text_link']};
		background-color: {$colors['alter_bg_color']};
	}
	
	
	.slider_container .slide_info_small .post_meta,
	.slider_container .slide_info_small .post_meta_item:not(.post_categories),
	.slider_container .slide_info_small .post_meta_item:after,
	.slider_container .slide_info_small .post_meta_item:hover:after,
	.slider_container .slide_info_small .post_meta .vc_inline-link,
	.slider_container .slide_info_small .post_meta .vc_inline-link:after,
	.slider_container .slide_info_small .post_meta .vc_inline-link:hover:after,
	.slider_container .slide_info_small .post_meta_item:not(.post_categories) a,
	.slider_container .slide_info_small .post_info .post_info_item,
	.slider_container .slide_info_small .post_info .post_info_item a,
	.slider_container .slide_info_small .post_info_counters .post_meta_item {
		color: {$colors['text_link2']};
	}
	.slider_container .slide_info_large .post_meta,
	.slider_container .slide_info_large .post_meta_item:not(.post_categories),
	.slider_container .slide_info_large .post_meta_item:after,
	.slider_container .slide_info_large .post_meta_item:hover:after,
	.slider_container .slide_info_large .post_meta .vc_inline-link,
	.slider_container .slide_info_large .post_meta .vc_inline-link:after,
	.slider_container .slide_info_large .post_meta .vc_inline-link:hover:after,
	.slider_container .slide_info_large .post_meta_item:not(.post_categories) a,
	.slider_container .slide_info_large .post_info .post_info_item,
	.slider_container .slide_info_large .post_info .post_info_item a,
	.slider_container .slide_info_large .post_info_counters .post_meta_item {
		color: {$colors['inverse_link']};
	}
	.slider_container .slide_info_small.slide_info .post_meta .post_meta_item:after {
		border-color: {$colors['text_link2']} !important;
	}
	.slider_container .slide_info.slide_info_small .slide_title a:hover {
		color: {$colors['text_link2']};
	}
	.slider_container .slide_info.slide_info_large .slide_title a {
		color: {$colors['inverse_link']};
	}
	.slider_container .slide_info.slide_info_large .slide_title a:hover {
		color: {$colors['text_link2']};
	}
	
	.slider_container .slide_info.slide_info_large:hover,
	.slider_container .slide_info.slide_info_large {
		background-color: {$colors['text_link']} !important;
		color: {$colors['inverse_link']};
	}
	.slider_container .slide_info .slide_cats a:hover {
		 color: {$colors['inverse_link']};
        background-color: {$colors['text_link']};
	}
	.slider_container .slide_info.slide_info_large .slide_cats a {
		color: {$colors['text_dark']};
        background-color: {$colors['alter_bg_color']};
	}
	.slider_container .slide_info.slide_info_large .slide_cats a:hover {
		color: {$colors['inverse_dark']};
        background-color: {$colors['text_link2']};
	}
	
	.sc_blogger.sc_blogger_masonry .post_layout_classic {
		background-color: {$colors['alter_bg_color']};
	}
	.sc_blogger.sc_blogger_masonry .post_layout_classic .post_meta,
	.sc_blogger.sc_blogger_masonry .post_layout_classic .post_meta_item:not(.post_categories),
	.sc_blogger.sc_blogger_masonry .post_layout_classic .post_meta_item:not(.post_categories):after,
	.sc_blogger.sc_blogger_masonry .post_layout_classic .post_meta_item:not(.post_categories):hover:after,
	.sc_blogger.sc_blogger_masonry .post_layout_classic .post_meta .vc_inline-link,
	.sc_blogger.sc_blogger_masonry .post_layout_classic .post_meta .vc_inline-link:after,
	.sc_blogger.sc_blogger_masonry .post_layout_classic .post_meta .vc_inline-link:hover:after,
	.sc_blogger.sc_blogger_masonry .post_layout_classic .post_meta_item:not(.post_categories) a,
	.sc_blogger.sc_blogger_masonry .post_layout_classic .post_info .post_info_item:not(.post_categories),
	.sc_blogger.sc_blogger_masonry .post_layout_classic .post_info .post_info_item:not(.post_categories) a,
	.sc_blogger.sc_blogger_masonry .post_layout_classic .post_info_counters .post_meta_item:not(.post_categories) {
		color: {$colors['alter_light']};
	}
	.sc_blogger.sc_blogger_masonry .post_layout_classic .post_date a:hover, 
	.sc_blogger.sc_blogger_masonry .post_layout_classic .post_date a:focus,
	.sc_blogger.sc_blogger_masonry .post_layout_classic a.post_meta_item:not(.post_categories):hover, 
	.sc_blogger.sc_blogger_masonry .post_layout_classic a.post_meta_item:focus,
	.sc_blogger.sc_blogger_masonry .post_layout_classic .post_meta_item:not(.post_categories) a:hover, 
	.sc_blogger.sc_blogger_masonry .post_layout_classic .post_meta_item:not(.post_categories) a:focus,
	.sc_blogger.sc_blogger_masonry .post_layout_classic .post_meta .vc_inline-link:hover, 
	.sc_blogger.sc_blogger_masonry .post_layout_classic .post_meta .vc_inline-link:focus,
	.sc_blogger.sc_blogger_masonry .post_layout_classic .post_info .post_info_item:not(.post_categories) a:hover, 
	.sc_blogger.sc_blogger_masonry .post_layout_classic .post_info .post_info_item:not(.post_categories) a:focus,
	.sc_blogger.sc_blogger_masonry .post_layout_classic .post_info_meta .post_meta_item:not(.post_categories):hover, 
	.sc_blogger.sc_blogger_masonry .post_layout_classic .post_info_meta .post_meta_item:not(.post_categories):focus {
		color: {$colors['text_dark']};
	}
	.sc_blogger.sc_blogger_masonry .post_layout_classic .post_meta .post_meta_item:after, 
	.sc_blogger.sc_blogger_masonry .post_layout_classic .post_meta .post_meta_item.post_edit:after, 
	.sc_blogger.sc_blogger_masonry .post_layout_classic .post_meta .vc_inline-link:after {
		border-color: {$colors['alter_light']};
	}
	

	.sc_blogger_item_on_plate .post_meta,
	.sc_blogger_item_on_plate .post_meta_item:not(.post_categories),
	.sc_blogger_item_on_plate .post_meta_item:not(.post_categories):after,
	.sc_blogger_item_on_plate .post_meta_item:not(.post_categories):hover:after,
	.sc_blogger_item_on_plate .post_meta .vc_inline-link,
	.sc_blogger_item_on_plate .post_meta .vc_inline-link:after,
	.sc_blogger_item_on_plate .post_meta .vc_inline-link:hover:after,
	.sc_blogger_item_on_plate .post_meta_item:not(.post_categories) a,
	.sc_blogger_item_on_plate .post_info .post_info_item:not(.post_categories),
	.sc_blogger_item_on_plate .post_info .post_info_item:not(.post_categories) a,
	.sc_blogger_item_on_plate .post_info_counters .post_meta_item:not(.post_categories) {
		color: {$colors['alter_light']};
	}
	.sc_blogger_item_on_plate .post_date a:hover, 
	.sc_blogger_item_on_plate .post_date a:focus,
	.sc_blogger_item_on_plate a.post_meta_item:not(.post_categories):hover, 
	.sc_blogger_item_on_plate a.post_meta_item:focus,
	.sc_blogger_item_on_plate .post_meta_item:not(.post_categories) a:hover, 
	.sc_blogger_item_on_plate .post_meta_item:not(.post_categories) a:focus,
	.sc_blogger_item_on_plate .post_meta .vc_inline-link:hover, 
	.sc_blogger_item_on_plate .post_meta .vc_inline-link:focus,
	.sc_blogger_item_on_plate .post_info .post_info_item:not(.post_categories) a:hover, 
	.sc_blogger_item_on_plate .post_info .post_info_item:not(.post_categories) a:focus,
	.sc_blogger_item_on_plate .post_info_meta .post_meta_item:not(.post_categories):hover, 
	.sc_blogger_item_on_plate .post_info_meta .post_meta_item:not(.post_categories):focus {
		color: {$colors['text_dark']};
	}
	
	.sc_price_item,
	.sc_testimonials.sc_testimonials_simple .sc_testimonials_item,
	.sc_icons_default .sc_icons_item {
		background-color: {$colors['alter_bg_color']};
	}
	
	.author_bio .socials_wrap .social_item:hover .social_icon {
		background-color: {$colors['text_dark']};
	}
	
	.woocommerce ul.products li.product .post_featured {
		border-color: {$colors['bd_color']};
	}


CSS;
		}

		return $css;
	}
}

