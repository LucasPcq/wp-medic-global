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
        {$fonts['button_font-size']}
        {$fonts['button_font-weight']}
        {$fonts['button_font-style']}
        {$fonts['button_line-height']}
        {$fonts['button_text-decoration']}
        {$fonts['button_text-transform']}
        {$fonts['button_letter-spacing']}
    }    
    .sc_promo.sc_promo_default .sc_item_subtitle {        
        {$fonts['info_font-family']}
    }
    .sc_layouts_menu_nav li a {
        {$fonts['menu_font-family']}
        {$fonts['menu_font-size']}
        {$fonts['menu_font-weight']}
        {$fonts['menu_font-style']}
        {$fonts['menu_line-height']}
        {$fonts['menu_text-decoration']}
        {$fonts['menu_text-transform']}
        {$fonts['menu_letter-spacing']}
    }
    .sc_layouts_menu_nav li li a {
        {$fonts['submenu_font-family']}
        {$fonts['submenu_font-size']}
        {$fonts['submenu_font-weight']}
        {$fonts['submenu_font-style']}
        {$fonts['submenu_line-height']}
        {$fonts['submenu_text-decoration']}
        {$fonts['submenu_text-transform']}
        {$fonts['submenu_letter-spacing']}
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
        color: {$colors['text_hover']};
        background-color: {$colors['bg_color']};
        border-color: {$colors['text_hover']};
    }
    .wpgdprc-checkbox label input[type="checkbox"]:before,
    input[type="radio"] + label:before,
    input[type="checkbox"] + label:before,
    input[type="radio"] + .wpcf7-list-item-label:before,
    input[type="checkbox"] + .wpcf7-list-item-label:before,
    .wpcf7-list-item-label.wpcf7-list-item-right:before,
    .edd_price_options ul > li > label > input[type="radio"] + span:before,
    .edd_price_options ul > li > label > input[type="checkbox"] + span:before {
        color: {$colors['input_dark']};
        background-color: transparent;
        border-color: {$colors['input_light']} !important;
    }
    
    /* Normal button */
    form button:not(.components-button),
    input[type="reset"],
    input[type="submit"],
    input[type="button"],
    .post_item .more-link,
    .comments_wrap .form-submit input[type="submit"],
    .wp-block-button:not(.is-style-outline) .wp-block-button__link,
    /* BB & Buddy Press */
    #buddypress .comment-reply-link,
    #buddypress .generic-button a,
    #buddypress a.button,
    #buddypress button,
    #buddypress input[type="button"],
    #buddypress input[type="reset"],
    #buddypress input[type="submit"],
    #buddypress ul.button-nav li a,
    a.bp-title-button,
    /* Booked */
    .booked-calendar-wrap .booked-appt-list .timeslot .timeslot-people button,
    #booked-profile-page .booked-profile-appt-list .appt-block .booked-cal-buttons .google-cal-button > a,
    #booked-profile-page input[type="submit"],
    #booked-profile-page button,
    .booked-list-view input[type="submit"],
    .booked-list-view button,
    table.booked-calendar input[type="submit"],
    table.booked-calendar button,
    .booked-modal input[type="submit"],
    .booked-modal button,
    /* ThemeREX Addons */
    .sc_button_default,
    .sc_button:not(.sc_button_simple):not(.sc_button_bordered):not(.sc_button_bg_image),
    .socials_share:not(.socials_type_drop) .social_icon,
    /* Tour Master */
    .tourmaster-tour-search-wrap input.tourmaster-tour-search-submit[type="submit"],
    /* Tribe Events */
    #tribe-bar-form .tribe-bar-submit input[type="submit"],
    #tribe-bar-form.tribe-bar-mini .tribe-bar-submit input[type="submit"],
    #tribe-bar-form .tribe-bar-views-toggle,
    #tribe-bar-views li.tribe-bar-views-option,
    #tribe-events .tribe-events-button,
    .tribe-events-button,
    .tribe-events-cal-links a,
    .tribe-events-sub-nav li a,
    /* EDD buttons */
    .edd_download_purchase_form .button,
    #edd-purchase-button,
    .edd-submit.button,
    .widget_edd_cart_widget .edd_checkout a,
    .sc_edd_details .downloads_page_tags .downloads_page_data > a,
    /* MailChimp */
    .mc4wp-form input[type="submit"],
    /* WooCommerce */
    .woocommerce #respond input#submit,
    .woocommerce .button, .woocommerce-page .button,
    .woocommerce a.button, .woocommerce-page a.button,
    .woocommerce button.button, .woocommerce-page button.button,
    .woocommerce input.button, .woocommerce-page input.button,
    .woocommerce input[type="button"], .woocommerce-page input[type="button"],
    .woocommerce input[type="submit"], .woocommerce-page input[type="submit"],
    .woocommerce #respond input#submit.alt,
    .woocommerce a.button.alt,
    .woocommerce button.button.alt,
    .woocommerce input.button.alt {
        color: {$colors['text_link']};
        background-color: {$colors['text_link2']};
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
        color: {$colors['extra_dark']};
        background-color: {$colors['extra_link']};
    }
    
    .sc_button_hover_strike.sc_button_bordered {
        color: {$colors['text_dark']} !important;
        background-color: transparent !important;
        border-color: {$colors['text_dark']} !important;
    }
    .sc_button_hover_strike.sc_button_bordered:hover {
        color: {$colors['inverse_hover']} !important;
        background-color: {$colors['text_dark']} !important;
        border-color: {$colors['text_dark']} !important;
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
        border-color: transparent;
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
    
    .sc_blogger.sc_blogger_list .sc_blogger_item_title a,
    .sc_blogger.sc_blogger_default .sc_blogger_item_title a,
    .related_wrap.sc_team_posts .post_title a,
    .related_wrap.related_style_classic .post_title a,
    .nav-links-single .nav-links a .post-title,
    .post_layout_chess .post_title a,
    .post_layout_classic .post_title a,
    .post_layout_style .post_title a,
    .post_layout_info .post_title a,
    .post_layout_extra .post_title a,
    .post_layout_plain .post_title a,
    .post_layout_excerpt .post_title a,
    .sc_recent_news_style_news-extra .post_item.post_size_small .post_title a,
    .widget_area .entry-title a,
    .widget_area .post_item .post_title a,
    aside .post_item .post_title a {
        color: {$colors['text_hover']} !important;
        background-image: linear-gradient(to right,{$colors['text_hover']} 0%,{$colors['text_hover']} 100%);
    }    
    .sticky .post_title a,
    .sticky .post_sticky_wrap .post_title a {
	    color: {$colors['extra_dark']} !important;
	    background-image: linear-gradient(to right,{$colors['extra_dark']} 0%,{$colors['extra_dark']} 100%);
     }
     .copyright-text a {
        background-image: linear-gradient(to right,{$colors['text_light']} 0%,{$colors['text_light']} 100%);
     }
         
    .copyright-text,
    .copyright-text a:hover,
    .copyright-text a {
        color: {$colors['text_light']};
    }
    .comments_list_wrap .comment_author:after,
    .post_meta .post_meta_item:after,
    .post_meta .post_meta_item.post_edit:after,
    .post_meta .vc_inline-link:after {
        border-color: {$colors['text_light_07']};
    }
    .sc_recent_news_wrap .widget_recent_news .sc_recent_news_style_news-magazine .post_categories a,
    .sc_team.sc_team_featured .sc_team_item_subtitle a,
    .sc_promo.sc_promo_default .sc_item_subtitle,
    .post_meta .post_meta_item.post_categories a {
        color: {$colors['extra_dark']} !important;
        background-color: {$colors['text_link']};
    }
    .sc_team.sc_team_featured .sc_team_item_subtitle a:hover,
    .post_meta .post_meta_item.post_categories a:hover {
        color: {$colors['text_dark']} !important;
        background-color: {$colors['text_link2']};
    }
    .sc_recent_news_wrap .widget_recent_news .sc_recent_news_style_news-magazine .post_categories a:hover,
    .sc_blogger_item_on_plate .post_meta .post_meta_item.post_categories a:hover {
        color: {$colors['text_dark']} !important;
        background-color: {$colors['alter_link2']};
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
    .nav-links-more a, 
    .woocommerce-links-more a,
    .minimal-light .esg-navigationbutton,
    .show_comments {
        color: {$colors['text_link']} !important;
        border-color: transparent !important;
        background-color: {$colors['text_link2']} !important;
    }
    .nav-links-more a:hover, 
    .woocommerce-links-more a:hover,
    .minimal-light .esg-navigationbutton:hover,
    .show_comments:hover {
        color: {$colors['extra_dark']} !important;
        border-color: transparent !important;
        background-color: {$colors['extra_link']} !important;
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
        border-color: {$colors['inverse_link']} !important;
    }
    .slider_container .slide_info .post_meta *,    
    .slider_container .slide_info .post_meta,
    .slider_container .slide_info .slide_cats a,
    .slider_container .slide_info .slide_cats a:hover, 
    .slider_container .slide_info .slide_title a:hover,
    .slider_container .slide_info .slide_title a {
        color: {$colors['inverse_link']} !important;
    }
    .slider_container .slide_info .slide_title a {
        background-image: linear-gradient(to right,{$colors['inverse_link']} 0%,{$colors['inverse_link']} 100%) !important;
    }
    .mfp-bg,
    .elementor-lightbox {
        background-color: {$colors['extra_bg_color_03']};
    }
    
    .sc_layouts_menu_mobile_button .sc_layouts_item_icon:before,
    .sc_layouts_menu_mobile_button_burger .sc_layouts_item_icon:before,
    .sc_layouts_row_type_compact .sc_layouts_menu_mobile_button .sc_layouts_item_icon,
    .scheme_self.sc_layouts_row_type_compact .sc_layouts_menu_mobile_button .sc_layouts_item_icon {
        color: {$colors['text_dark']};
    }
    .sc_layouts_menu_mobile_button:hover .sc_layouts_item_icon:before,
    .sc_layouts_menu_mobile_button_burger:hover .sc_layouts_item_icon:before,
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
	
    .sc_blogger_default.sc_blogger_default_over_centered_middle [class*="post_info_"],
    .slider_titles_outside_wrap .slide_info,
    .sc_layouts_title.with_content .sc_layouts_title_content {
        background-color: {$colors['inverse_hover']};
        border-color: {$colors['inverse_hover']};
    }
    .sc_layouts_menu_mobile_button_burger a .sc_layouts_item_icon:before,
    .sc_layouts_menu_mobile_button_burger a .burger-text,
    .search_wrap.search_style_expand .search_submit span,
    .search_wrap.search_style_expand input[type="text"],
    .search_wrap.search_style_expand .search_submit:before,
    .search_wrap.search_style_expand .search_submit {
        background-color: transparent;
        border-color: transparent;
        color: {$colors['text_dark']};
    }
    .sc_layouts_menu_mobile_button_burger a:hover .sc_layouts_item_icon:before,
    .search_wrap.search_style_expand .search_submit:hover:before,
    .search_wrap.search_style_expand .search_submit:hover {
        color: {$colors['text_link']};
    }
    .sc_layouts_menu_nav > li > a {
        color: {$colors['text_dark']} !important;
    }
    .sc_layouts_menu_nav > li > a:hover {
        color: {$colors['text_link']} !important;
    }
    .sc_layouts_menu_nav >li.current-menu-item > a,
    .sc_layouts_menu_nav >li.current-menu-parent > a,
    .sc_layouts_menu_nav >li.current-menu-ancestor > a {
        color: {$colors['text_link']} !important;
    }
    
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
        color: {$colors['text_light']};
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
        color: {$colors['text_hover']};
    }
    
    figure figcaption,
    .wp-caption .wp-caption-text,
    .wp-caption .wp-caption-dd,
    .wp-caption-overlay .wp-caption .wp-caption-text,
    .wp-caption-overlay .wp-caption .wp-caption-dd P{
        background-color: transparent !important;
        color: {$colors['text_dark']} !important;
    }
    .sc_layouts_menu_nav .menu-collapse > a:after {
        background-color: transparent;
    }
    .sc_layouts_menu_nav .menu-collapse > a:hover:after {
        background-color: transparent;
    }
    .related_wrap.related_style_classic .related_item {
        background-color: {$colors['alter_bg_color']};
    }
    .show_comments_wrap,
    .related_wrap {
          border-color: {$colors['bd_color']};  
    }
    .post_item_single .post_content .post_tags .post_meta_label {
        color: {$colors['text_dark']};
    }
    .slider_outer_controls_outside .slider_controls_wrap > a {
        color: {$colors['text_dark']};
        border-color: {$colors['alter_bg_color']};
        background-color: {$colors['alter_bg_color']};
    }
    .slider_outer_controls_outside .slider_controls_wrap > a:hover {
        color: {$colors['extra_dark']};
        border-color: {$colors['extra_link']};
        background-color: {$colors['extra_link']};
    }
    form.mc4wp-form .mc4wp-form-fields input[type="submit"][disabled] {
        background-color: {$colors['extra_link_07']} !important;
        color: {$colors['extra_dark']} !important;
    }
    
    form.mc4wp-form .mc4wp-form-fields input[type="submit"] {
        background-color: {$colors['extra_link']};
        color: {$colors['extra_dark']};
    }
    
    form.mc4wp-form .mc4wp-form-fields input[type="submit"]:focus,
    form.mc4wp-form .mc4wp-form-fields input[type="submit"]:hover {
        background-color: {$colors['extra_hover3']};
        color: {$colors['extra_dark']};
    }
    form.mc4wp-form label a {
        color: {$colors['input_text']};
    }
    form.mc4wp-form label a:hover {
        color: {$colors['text_link']};
    }
    form.mc4wp-form input[type="checkbox"] + label:before {
        border-color: {$colors['bd_color']} !important;
        color: {$colors['input_dark']};
        background-color: transparent;
    }
    .sc_recent_news_wrap .widget_recent_news .sc_recent_news.sc_recent_news_style_news-magazine {
        background-color: {$colors['alter_bg_color']};
    }
    .sc_recent_news_wrap .widget_recent_news .sc_recent_news.sc_recent_news_style_news-magazine .post_item.post_accented_on.has-post-thumbnail .post_header .post_meta .post_date a{
        color: {$colors['text_light']};
    }
    .sc_recent_news_wrap .widget_recent_news .sc_recent_news.sc_recent_news_style_news-magazine .post_item.post_accented_on.has-post-thumbnail .post_header .post_meta .post_date a:hover{
        color: {$colors['text_link']};
    }
    .sc_recent_news_wrap .widget_recent_news .sc_recent_news.sc_recent_news_style_news-magazine .post_item:before {
        background-color: {$colors['bd_color']};
    }
    .sticky .sc_button_hover_strike.sc_button_bordered {
        color: {$colors['extra_dark']} !important;
        border-color: {$colors['extra_dark']} !important;
    }
    .sticky .sc_button_hover_strike.sc_button_bordered:hover {
        border-color: {$colors['extra_dark']} !important;
        background-color: {$colors['extra_dark']} !important;
        color: {$colors['extra_bg_color']} !important;
    }   
    .post_item_single .post_content > .post_meta_single:before {
        color: {$colors['text_link']};
    }
    .nav-links .page-numbers.prev:before,
    .comments_pagination .page-numbers.prev:before,
    .woocommerce nav.woocommerce-pagination ul li a.prev:before,
    .nav-links .page-numbers.next:before,
    .comments_pagination .page-numbers.next:before,
    .woocommerce nav.woocommerce-pagination ul li a.next:before {
        background-color: {$colors['bg_color']};
    }
    .nav-links .page-numbers.prev:hover:before,
    .comments_pagination .page-numbers.prev:hover:before,
    .woocommerce nav.woocommerce-pagination ul li a.prev:hover:before,
    .nav-links .page-numbers.next:hover:before,
    .comments_pagination .page-numbers.next:hover:before,
    .woocommerce nav.woocommerce-pagination ul li a.next:hover:before {
        background-color: {$colors['text_dark']};
    }
     .woocommerce .woocommerce-error .button:hover,
        .woocommerce .woocommerce-info .button:hover,
        .woocommerce .woocommerce-message .button:hover,
        .woocommerce .product .compare.sc_button_hover_strike:hover, 
        .tinv-wishlist.tinvwl-after-add-to-cart .tinvwl_add_to_wishlist_button.sc_button_hover_strike:hover, 
        .woocommerce div.product form.cart .single_add_to_cart_button.sc_button_hover_strike:hover, 
        .widget.woocommerce .button.sc_button_hover_strike:hover,
        .woocommerce #payment #place_order:hover, 
        .woocommerce-page #payment #place_order:hover,
        .woocommerce form.checkout_coupon .button:hover,
        .woocommerce table.cart td.actions .button:hover {
            background-color: {$colors['text_dark']} !important;
            color: {$colors['inverse_hover']} !important;
      }
    .woocommerce .woocommerce-ordering select {
        border-color: transparent;
    }
    .woocommerce div.product form.cart div.quantity span,
    .woocommerce-page div.product form.cart div.quantity span, 
    .woocommerce .shop_table.cart div.quantity span, 
    .woocommerce-page .shop_table.cart div.quantity span {
        background-color: {$colors['input_bg_color']};
    }
    .woocommerce div.product form.cart div.quantity span:hover,
    .woocommerce-page div.product form.cart div.quantity span:hover, 
    .woocommerce .shop_table.cart div.quantity span:hover, 
    .woocommerce-page .shop_table.cart div.quantity span:hover {
        background-color: {$colors['input_bg_color']};
    }
    .shipping td {
          background-color: {$colors['alter_bg_color']} !important;      
    }
    form.mc4wp-form .mc4wp-alert {
        background-color: {$colors['extra_link']};
        border-color: {$colors['extra_link']};
        color: {$colors['extra_dark']};
    }
    form.mc4wp-form .mc4wp-alert a {
        color: {$colors['extra_dark']} !important;    
    }
    form.mc4wp-form .mc4wp-alert a:hover {
        color: {$colors['extra_hover3']} !important;   
    }
    div.trx_addons_message_box_success,
    div.wpcf7-mail-sent-ok {
      border-color: {$colors['alter_link3']} !important;
      background-color: {$colors['bg_color']};
      color: {$colors['text']};
    }
    .trx_addons_message_box_error,
    div.wpcf7-validation-errors, div.wpcf7-acceptance-missing {
        background-color: {$colors['bg_color']};
        color: {$colors['text']};
    }
    .post_featured.hover_shop_buttons .mask {
        background-color: {$colors['bg_color_07']} !important;
    }
    .woocommerce table.shop_table td.actions {
        background-color: {$colors['alter_bg_color']} !important;
    }
    .post_layout_classic .product_price {
        color: {$colors['text_link']};
    }
    .post_layout_classic .product_price del {
        color: {$colors['text_light']};
    }
    .sc_blogger_news .sc_item_featured [class*="post_info_"] .post_meta_item,
    .sc_blogger_news .sc_item_featured [class*="post_info_"] a {
        color: {$colors['extra_dark']};
    }
    .sc_blogger_news .sc_item_featured [class*="post_info_"] a:hover {
        color: {$colors['extra_link']};
    }
CSS;
		}

		return $css;
	}
}

