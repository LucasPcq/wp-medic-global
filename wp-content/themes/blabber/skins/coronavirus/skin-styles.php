<?php
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
    .woocommerce .widget_price_filter .price_slider_amount,
    .woocommerce .widget_price_filter .price_slider_amount span,
    .widget_shopping_cart .total,
    .sc_testimonials_item_author_title,
    .sc_skills_counter .sc_skills_item_title,
    .comments_list_wrap .comment_reply,
    .author_bio .author_link,
    .post_item_single .post_content .post_tags a,
    .sc_layouts_title.fixed_height .sc_layouts_title_content .post_meta .post_categories a,
    .sc_blogger_default_classic_meta_simple .sc_blogger_item_content .post_meta_categories .post_meta_item a,
    .sc_blogger_default_over_centered_simple .sc_item_featured [class*="post_info_"] .post_meta_categories a,
    .sc_team.sc_team_featured .sc_team_item_subtitle a,
    .sc_promo.sc_promo_default .sc_item_subtitle,
    .cat_top.post_meta .post_meta_item.post_categories a,
    .sc_blogger_news_announce .sc_item_featured .post_info_mc .post_meta_categories .post_categories a,
    .sc_blogger_default.sc_blogger_default_classic .sc_blogger_item .sc_blogger_item_body .sc_blogger_item_content .post_meta_categories .post_meta_item a,
    .sc_blogger_list .sc_blogger_item_content .post_meta_categories span a,
    span.wpcf7-not-valid-tip,
    .esg-entry-cover .eec > div,
    .sc_twitter_default .sc_twitter_item_content,    
    .socials_wrap .social_item .social_name,
    .wp-block-calendar .wp-calendar-nav-prev a,
    .widget_calendar .wp-calendar-nav-prev a,
    .widget_calendar td#prev a,
    .widget_calendar td#next a,
    .widget_calendar caption,
    .widget_calendar th,
    .widget_area .post_item .post_categories, aside .post_item .post_categories,
    .widget_recent_posts .post_item.with_thumb .post_thumb:before,
    .sc_blogger_list.sc_blogger_list_with_image .sc_blogger_item.sc_blogger_item_image_position_left .post_featured:after,
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
    .breadcrumbs {        
        {$fonts['info_font-family']}
    }
    .comments_list_wrap .comment_author, .comments_list_wrap .comment_posted,
    .widget li.recentcomments,
    .wp-block-pullquote__citation,
    blockquote > p,
    blockquote > cite,
    blockquote > p > cite,
    blockquote > .wp-block-pullquote__citation,
    .wp-block-quote .wp-block-quote__citation,
    .trx_addons_dropcap,
    .woocommerce .comment-form label,
    .wpgdprc-checkbox label,
    .wpcf7-acceptance label,
    .wpcf7-form label,
    form.mc4wp-form label {
    	{$fonts['p_font-family']}
    }
    .sc_layouts_row.sc_layouts_row_type_narrow .sc_layouts_menu_nav {
        {$fonts['menu_font-family']}
    }
    .widget li.recentcomments a,
    table th {
        {$fonts['decor_font-family']}
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

    table td,
    table th + td,
    table td + td {
        border-color: {$colors['text_light_012']};
        color: {$colors['text']};
    }
    table th {
        color: {$colors['extra_dark']};
    }
    /* Buttons */
    form button:not(.components-button),
    input[type="submit"],
    input[type="reset"],
    input[type="button"],
    .post_item .more-link,
    .comments_wrap .form-submit input[type="submit"],
    .wp-block-button:not(.is-style-outline) > .wp-block-button__link,
    /* BB & Buddy Press */
    #buddypress .comment-reply-link,
    #buddypress .generic-button a,
    #buddypress a.button,
    #buddypress button,
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
    #tribe-bar-views .tribe-bar-views-list .tribe-bar-views-option.tribe-bar-active,
    #tribe-bar-views .tribe-bar-views-list .tribe-bar-views-option.tribe-bar-active,
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
    .woocommerce input[type="submit"], .woocommerce-page input[type="submit"] {
        color: {$colors['extra_dark']};
        background-color: {$colors['extra_link2']};
        border-color: {$colors['extra_link2']};
    }
    .woocommerce .product .compare,
    .tinv-wishlist.tinvwl-after-add-to-cart .tinvwl_add_to_wishlist_button,
    .woocommerce div.product form.cart .single_add_to_cart_button,
    .widget.woocommerce .button,
    li.product .post_featured.hover_shop_buttons .icons a {
        color: {$colors['extra_dark']} !important;
        background-color: {$colors['extra_link2']} !important;
        border-color: {$colors['extra_link2']} !important;
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
        color: {$colors['extra_dark']};
        background-color: {$colors['extra_hover2']};
        border-color: {$colors['extra_hover2']};
    }
    .woocommerce .product .compare:hover,
    .tinv-wishlist.tinvwl-after-add-to-cart .tinvwl_add_to_wishlist_button:hover,
    .woocommerce div.product form.cart .single_add_to_cart_button:hover,
    .widget.woocommerce .button:hover,
    li.product .post_featured.hover_shop_buttons .icons a:hover {
        color: {$colors['extra_dark']} !important;
        background-color: {$colors['extra_hover2']} !important;
        border-color: {$colors['extra_hover2']} !important;
    }
    .woocommerce #respond input#submit.alt:hover,
    .woocommerce #respond input#submit.alt:focus,
    .woocommerce a.button.alt:hover,
    .woocommerce a.button.alt:focus,
    .woocommerce button.button.alt:hover,
    .woocommerce button.button.alt:focus,
    .woocommerce input.button.alt:hover,
    .woocommerce input.button.alt:focus {
        color: {$colors['extra_dark']};
        background-color: {$colors['extra_hover2']};
        border-color: {$colors['extra_hover2']};
    }
    .sc_button_bordered:not(.sc_button_bg_image):hover,
    .sc_button_bordered:not(.sc_button_bg_image):focus,
    .wp-block-button.is-style-outline .wp-block-button__link:hover,
    .wp-block-button.is-style-outline .wp-block-button__link:focus {
        color: {$colors['text_dark']} !important;
        border-color: {$colors['text_dark']} !important;
    }
     .nav-links-more a:not(.sc_button_hover_strike),
     .woocommerce-links-more a:not(.sc_button_hover_strike) {
        color: {$colors['extra_dark']};
        background-color: {$colors['text_link']};
        border-color: {$colors['text_link']};
     }
     .nav-links-more a:not(.sc_button_hover_strike):hover,
     .woocommerce-links-more a:not(.sc_button_hover_strike):hover {
        color: {$colors['extra_dark']};
        background-color: {$colors['extra_hover2']};
        border-color: {$colors['extra_hover2']};
     }
    .minimal-light .esg-navigationbutton,
    .show_comments {
        color: {$colors['extra_dark']} !important;
        background-color: {$colors['text_link']} !important;
        border-color: {$colors['text_link']} !important;
    }
    .minimal-light .esg-navigationbutton:hover,
    .show_comments:hover {
        color: {$colors['extra_dark']} !important;
        background-color: {$colors['extra_hover2']} !important;
        border-color: {$colors['extra_hover2']} !important;
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
    .widget .widget_title:after, .widget .widgettitle:after {
	    border-color: {$colors['alter_dark']};
    }
    .scheme_self.footer_wrap .widget .widget_title:after,
    .scheme_self.footer_wrap .widget .widgettitle:after,
    .scheme_self.sidebar .widget .widget_title:after,
    .scheme_self.sidebar .widget .widgettitle:after {
	    border-color: {$colors['alter_dark']};
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
    .sc_blogger_list .sc_blogger_item .sc_blogger_item_body .post_featured:after,
    .widget_recent_posts .post_item.with_thumb .post_thumb:before {
        color: {$colors['extra_dark']};
        background-color: {$colors['text_link2']};
    }
    .widget_recent_posts .post_item.with_thumb:hover .post_thumb:before {
  		color: {$colors['bg_color']};
        background-color: {$colors['text_hover']};
	}

    .sc_title_accent > .title-wrap-go:after {
        background-color: {$colors['bg_color']};
        border-color: {$colors['text_dark']};
    }
    .sc_title_accent .sc_item_descr {
        color: {$colors['text_light']};
    }
    .sc_title_accent .sc_button_simple {
        color: {$colors['text_link']};
    }
    .sc_button_simple:not(.sc_button_bg_image):hover,
    .sc_title_accent .sc_button_simple:hover {
    	color: {$colors['text_dark']} !important;
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
    .comments_list_wrap .comment_author:after,
    .post_meta .post_meta_item:after,
    .post_meta .post_meta_item.post_edit:after,
    .post_meta .vc_inline-link:after {
        border-color: {$colors['text_link2']};
        background-color: {$colors['text_link2']};
    }
    .post_meta_item.post_categories a:before {
    	color: {$colors['text_link']} !important;
    }
    .post_meta_item.post_author span {
        color: {$colors['text_link']};
    }
    .post_meta_item.post_author:hover span {
        color: {$colors['text_dark']};    
    }
    .sc_team.sc_team_featured .sc_team_item_subtitle a,
    .sc_promo.sc_promo_default .sc_item_subtitle,
    .cat_top.post_meta .post_meta_item.post_categories a {
        color: {$colors['inverse_link']};
        background-color: {$colors['text_link2']};
    }
    .sc_team.sc_team_featured .sc_team_item_subtitle a:hover,
    .cat_top.post_meta .post_meta_item.post_categories a:hover {
        color: {$colors['extra_dark']};
        background-color: {$colors['text_link']};
    }
    .sticky .post_meta .post_meta_item.post_categories a:hover {
        color: {$colors['inverse_link']} !important;
    }
    .sticky .post_title a,
    .sticky .post_title * {
    	color: {$colors['inverse_link']};
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
     form.mc4wp-form input[type="checkbox"] + label:before {
        background-color: transparent;
        border-color: {$colors['text']};
        color: {$colors['text_dark']};
    }
    form.mc4wp-form label {
        color: {$colors['text']}!important;
    }
    form.mc4wp-form .mc4wp-form-fields input[type="email"] {
        border-color: {$colors['text']};
    }
	 
	 .post_item_single .post_content > .post_meta_single:before {
	 	color: {$colors['text_dark']};
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
	
	.post_featured.hover_shop_buttons .mask {
		background-color: {$colors['bg_color_07']} !important;
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
    	border-color: {$colors['bd_color']};
    }    
	.woocommerce-shipping-calculator .select_container select,
	.woocommerce-shipping-calculator .select_container {
		border-color: {$colors['text_dark']};
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

    .scheme_self .sc_layouts_row_type_narrow .sc_layouts_menu_nav .menu-collapse > a:after,
    .scheme_self.sc_layouts_row_type_narrow .sc_layouts_menu_nav .menu-collapse > a:after {
        background-color: transparent;
    }
    .scheme_self .sc_layouts_row_type_narrow .sc_layouts_menu_nav .menu-collapse > a:before,
    .scheme_self.sc_layouts_row_type_narrow .sc_layouts_menu_nav .menu-collapse > a:before {
        color: {$colors['inverse_dark']}!important;
    }
    .scheme_self .sc_layouts_row_type_narrow .sc_layouts_menu_nav .menu-collapse > a:hover:after,
    .scheme_self.sc_layouts_row_type_narrow .sc_layouts_menu_nav .menu-collapse > a:hover:after {
        background-color: transparent;
    }
    .scheme_self .sc_layouts_row_type_narrow .sc_layouts_menu_nav .menu-collapse > a:hover:before,
    .scheme_self.sc_layouts_row_type_narrow .sc_layouts_menu_nav .menu-collapse > a:hover:before {
        color: {$colors['text_link']}!important;
    }

    figure figcaption,
    .wp-caption .wp-caption-text {
        background-color: transparent !important;
        color: {$colors['text_dark']}!important;
    }
    aside .post_item + .post_item {
        border-color: {$colors['bd_color']};
    }
    .sc_price_item .sc_price_item_price,
    .sc_layouts_title.fixed_height .sc_layouts_title_content .post_meta .post_categories a,
    .sc_blogger_default_classic_meta_simple .sc_blogger_item_content .post_meta_categories .post_meta_item a,
    .sc_blogger_default_over_centered_simple .sc_item_featured [class*="post_info_"] .post_meta_categories a,
    .sc_blogger_news_announce .sc_item_featured .post_info_mc .post_meta_categories .post_categories a,
    .sc_blogger_default.sc_blogger_default_classic .sc_blogger_item .sc_blogger_item_body .sc_blogger_item_content .post_meta_categories .post_meta_item a {
        background-color: {$colors['text_link']} !important;
        color: {$colors['inverse_link']}!important;
    }
    .sc_layouts_title.fixed_height .sc_layouts_title_content .post_meta .post_categories a:hover,
    .sc_blogger_default_classic_meta_simple .sc_blogger_item_content .post_meta_categories .post_meta_item a:hover,
    .sc_blogger_default_over_centered_simple .sc_item_featured [class*="post_info_"] .post_meta_categories a:hover,
    .sc_blogger_news_announce .sc_item_featured .post_info_mc .post_meta_categories .post_categories a:hover,
    .sc_blogger_default.sc_blogger_default_classic .sc_blogger_item .sc_blogger_item_body .sc_blogger_item_content .post_meta_categories .post_meta_item a:hover {
        background-color: {$colors['text_hover']} !important;
        color: {$colors['bg_color']}!important;
    }
    .sc_blogger_news_announce .sc_item_featured [class*="post_info_"] {
        background-color: {$colors['extra_dark']};
        color: {$colors['inverse_dark']};
    }
    .sc_item_featured [class*="post_info_"] a {
        color: {$colors['inverse_dark']};
    }
    .sc_item_featured [class*="post_info_"] a:hover {
        color: {$colors['text_link']};
    }
    .widget.widget_banner:not(.widget_fullwidth) .image_wrap {
        border-color: {$colors['bd_color']};
    }
    .sc_blogger_default_over_centered_simple .sc_item_featured [class*="post_info_"] .post_meta_item.post_author span {
        color: {$colors['text_link']};
    }
    .sc_blogger_default_over_centered_simple .sc_item_featured [class*="post_info_"],
    .sc_blogger_default_over_centered_simple .sc_item_featured [class*="post_info_"] a {
        color: {$colors['extra_dark']};
    }
    .sc_blogger_default_over_centered_simple .sc_item_featured [class*="post_info_"] .post_meta a,
    .sc_blogger_default_over_centered_simple .sc_item_featured [class*="post_info_"] .post_meta {
        color: {$colors['text_light']};
    }
    .sc_blogger_default_over_centered_simple .sc_item_featured [class*="post_info_"] .post_meta_item.post_author:hover span,
    .sc_blogger_default_over_centered_simple .sc_item_featured [class*="post_info_"] .post_meta a:hover {
        color: {$colors['extra_dark']} !important;
    }
    .sc_blogger_default_over_centered_simple .sc_item_featured [class*="post_info_"] a:hover {
        color: {$colors['text_link']};
    }
    .sc_layouts_title.fixed_height .sc_layouts_title_content {
        background-color: {$colors['bg_color']};
    }
    .sc_layouts_title.fixed_height .sc_layouts_title_content .post_meta a,
    .sc_layouts_title.fixed_height .sc_layouts_title_content .post_meta .post_meta_item {
        color: {$colors['text_light']};
    }
    .sc_layouts_title.fixed_height .sc_layouts_title_content .post_meta_item.post_author span {
        color: {$colors['text_link']};
    }
    .sc_layouts_title.fixed_height .sc_layouts_title_content .post_meta_item.post_author:hover span,
    .sc_layouts_title.fixed_height .sc_layouts_title_content .post_meta a:hover {
        color: {$colors['text_dark']} !important;
    }
    .scheme_default .comments_list_wrap .comment_author a {
        color: {$colors['text_link']} !important;
    }
    .scheme_default .comments_list_wrap .comment_author a:hover {
        color: {$colors['text_light']} !important;
    }
    .scheme_default .comments_list_wrap .comment_author,
    .scheme_default .comments_list_wrap .comment_info {
        color: {$colors['text_light']} !important;
    }
    .mejs-controls .mejs-button>button:hover,
    .mejs-controls .mejs-button>button:focus {
        background-color: {$colors['text_link']} !important;
        color: {$colors['extra_dark']} !important;
    }
    .ua_ie_11 .elementor-divider-separator {
        border-color: {$colors['bd_color']};
    }
    .sticky .post_meta_item.post_author:hover span {
        color: {$colors['extra_dark']};
    }
    .woocommerce .shop_table.cart div.quantity,
    .woocommerce-page .shop_table.cart div.quantity {
        border-color: {$colors['text_dark']};
    }    
    .sc_blogger_list .sc_blogger_item:hover .sc_blogger_item_body .post_featured:after {
    	background-color: {$colors['text_hover']};
        color: {$colors['bg_color']};
    }

CSS;
		}

		return $css;
	}
}

