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
    .related_wrap.sc_team_posts .post_title, .related_wrap.related_style_classic .post_title {
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
    blockquote,
    .woocommerce .comment-form label,
    .wpgdprc-checkbox label,
    .wpcf7-acceptance label,
    .wpcf7-form label,
    form.mc4wp-form label {
    	{$fonts['p_font-family']}
    }
    
    
	span.wpcf7-not-valid-tip,
    .esg-entry-cover .eec > div,
    .socials_wrap .social_item .social_name,
    .widget_calendar td#prev a,
    .widget_calendar td#next a,
    .widget_calendar caption,
    .widget_calendar th,
    .widget_area .post_item .post_info, aside .post_item .post_info,
    .widget_area .post_item .post_categories, aside .post_item .post_categories,
    .widget_recent_posts .post_item.with_thumb .post_thumb:before,
    .widget li,
    .audio_description, .elementor-counter .elementor-counter-title, .elementor-counter .elementor-counter-number-wrapper, .elementor-widget-progress .elementor-title, .breadcrumbs, .recentcomments, .wpcf7 div.wpcf7-response-output, .wpcf7-form label, form.mc4wp-form label, .wpcf7-acceptance label, .wpgdprc-checkbox label, figure figcaption, .wp-caption .wp-caption-text, .wp-caption .wp-caption-dd, .wp-caption-overlay .wp-caption .wp-caption-text, .wp-caption-overlay .wp-caption .wp-caption-dd {
    	{$fonts['p_font-family']}
    }
    
 
    .woocommerce table.cart td.product-name a, .woocommerce-page table.cart td.product-name a,
    .woocommerce #reviews #comments ol.commentlist li .comment-text p.meta strong, .woocommerce-page #reviews #comments ol.commentlist li .comment-text p.meta strong,
    .woocommerce div.product span.onsale,
    .woocommerce .checkout table.shop_table tbody .product-name,
    .woocommerce form .form-row label, .woocommerce-page form .form-row label,
    .woocommerce ul.products li.product .onsale, .woocommerce-page ul.products li.product .onsale,
    .sc_team.sc_team_featured .sc_team_item_subtitle a,
    .sc_icons_default .sc_icons_item .sc_icons_item_title,
	.sc_item_subtitle,
    .sc_price_item .sc_price_item_price,
    .sc_skills_pie.sc_skills_compact_off .sc_skills_item_title,
    .sc_skills_counter .sc_skills_total,
    div.esg-filters, .woocommerce nav.woocommerce-pagination ul, .comments_pagination, .nav-links, .page_links,
    body .mejs-container *,
    .sc_edd_details .downloads_page_tags .downloads_page_data > a, .widget_product_tag_cloud a, .widget_tag_cloud a, 
    .widget .widget_title, .widget .widgettitle,
    .post_meta .post_meta_item.post_categories a,
    .single-product .related > h2,
	.page_contact_form .page_contact_form_title,
	.related_wrap .section_title.related_wrap_title,
    .post_item_single .post_content .post_tags a,
	.sc_twitter_default .sc_twitter_item_content,
    .sc_layouts_title .sc_layouts_title_content .post_categories a,
    .breadcrumbs,
    .burger-text,
    .woocommerce .widget_price_filter .price_slider_amount,
    .search_wrap.search_style_expand .search_submit span,
	.search_wrap.search_style_expand input[type="text"] {
    	{$fonts['h6_font-family']}
    }
    
    .widget_area .post_item .post_title, aside .post_item .post_title,
    .sc_blogger_list .sc_blogger_item_title,
    aside.woocommerce .product-title, aside.woocommerce .mini_cart_item > a:not(.remove) {
    	{$fonts['h1_font-family']}
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
        color: {$colors['text_dark']};
    }
    .sc_button_simple:not(.sc_button_bg_image):hover,
    .sc_title_accent .sc_button_simple:hover {
    	color: {$colors['text_link']} !important;
    }

	.sc_button.sc_button_simple:before, .sc_button.sc_button_simple:after {
		color: {$colors['text_link']} !important;
	}
	.sc_button_simple:not(.sc_button_bg_image) {
		color: {$colors['text_dark']} !important;
	}
	.sc_button_simple:not(.sc_button_bg_image):hover {
		color: {$colors['text_link']} !important;
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
        background-color: {$colors['text_light']};
    }
    .post_meta_item.post_categories a:before {
    	color: {$colors['text_link']} !important;
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
        color: {$colors['inverse_link']} !important;
    }
    .sticky .post_title a,
    .sticky .post_title * {
    	color: {$colors['inverse_link']};
    }
    .single-product .related > h2:before,
    .page_contact_form_title:before,
    .related_wrap .section_title.related_wrap_title:before,
    .single-product .related > h2:after,
    .page_contact_form_title:after,
    .related_wrap .section_title.related_wrap_title:after {
        background: {$colors['bd_color']};
    }
    .widget_twitter .sc_twitter_default + .widget_twitter_follow:before {
        border-color: {$colors['bg_color']};
    }
    .widget_twitter_follow {
        background-color: {$colors['text_link']};
        color: {$colors['inverse_link']} !important;
        border-color: {$colors['text_link']} !important;
    }
    .widget_twitter_follow:hover {
        border-color: {$colors['text_hover']} !important;
        background-color: {$colors['text_hover']} !important;
        color: {$colors['bg_color']} !important;
    }
    .minimal-light .esg-navigationbutton,
    .show_comments {
        color: {$colors['text_hover']} !important;
        border-color: {$colors['text_hover']} !important;
    }
    .minimal-light .esg-navigationbutton:hover,
    .show_comments:hover {
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
        color: {$colors['alter_dark']} !important;
    }
    .sc_layouts_menu_nav > li > a:hover,
    .sc_layouts_menu_nav > li.sfHover > a {
        color: {$colors['text_hover']} !important;
    }
    .sc_layouts_menu_nav > li.current-menu-item > a,
    .sc_layouts_menu_nav > li.current-menu-parent > a,
    .sc_layouts_menu_nav > li.current-menu-ancestor > a {
        color: {$colors['text_hover']} !important;
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
		color: {$colors['inverse_dark']};
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
	 .sc_layouts_title .sc_layouts_title_breadcrumbs,
	 .sc_layouts_title .sc_layouts_title_breadcrumbs a {
	 	color: {$colors['text_light']};
	 }
	 .sc_layouts_title .sc_layouts_title_breadcrumbs a:hover {
	 	color: {$colors['text_dark']};
	 }
	 
	 .more-link.sc_button_bordered:not(.sc_button_bg_image):not(.sc_button_hover_strike):hover {
	 	color: {$colors['inverse_link']} !important;
        background-color: {$colors['text_link']} !important;
        border-color: {$colors['text_link']} !important;
	 }
	 
	 
	 .nav-links-more a:not(.sc_button_hover_strike),
	 .woocommerce-links-more a:not(.sc_button_hover_strike) {
	 	color: {$colors['text_dark']};
        border-color: {$colors['text_dark']};
	 }
	 .nav-links-more a:not(.sc_button_hover_strike):hover,
	 .woocommerce-links-more a:not(.sc_button_hover_strike):hover {
	 	color: {$colors['bg_color']};
        background-color: {$colors['text_dark']};
        border-color: {$colors['text_dark']};
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
	
	
	.sc_layouts_row_type_compact .socials_wrap .social_item .social_icon, 
	.scheme_self.sc_layouts_row_type_compact .socials_wrap .social_item .social_icon {
		color: {$colors['alter_dark']};
	}
	
	
	.menu_footer_nav_area > ul > li > a,
	.footer_wrap .sc_layouts_menu > ul > li > a,
	.scheme_self.footer_wrap .sc_layouts_menu > ul > li > a {
		color: {$colors['alter_dark']} !important;
	}
	.menu_footer_nav_area > ul > li.sfHover > a,
	.footer_wrap .sc_layouts_menu > ul > li.sfHover > a,
	.scheme_self.footer_wrap .sc_layouts_menu > ul > li.sfHover > a,
	.menu_footer_nav_area > ul > li > a:hover,
	.footer_wrap .sc_layouts_menu > ul > li > a:hover,
	.scheme_self.footer_wrap .sc_layouts_menu > ul > li > a:hover {
		color: {$colors['text_dark']} !important;
	}
	
	.scheme_self.footer_wrap form.mc4wp-form label {
		color: {$colors['alter_text']};
	}
	
	form.mc4wp-form .mc4wp-form-fields input[type="email"] {
		border-color: {$colors['text_link']};
		color: {$colors['alter_dark']};
		background-color: {$colors['text_dark']} !important;
	}
	form.mc4wp-form .mc4wp-form-fields input[type="email"]:focus,
	form.mc4wp-form .mc4wp-form-fields input[type="email"]:hover {
	  color: {$colors['bg_color']};
	}
	form.mc4wp-form .mc4wp-form-fields input[type="submit"] {
		background-color: {$colors['text_link']} !important;
	}
	
	 input[type="radio"] + label:before, 
	 input[type="checkbox"] + label:before, 
	 .wpcf7-list-item-label.wpcf7-list-item-right:before {
    	border-color: {$colors['alter_dark']} !important;
    }
	
	.sc_layouts_row_type_compact .sc_layouts_item input[type="text"],
	.search_wrap.search_style_expand .search_submit {
		color: {$colors['text_dark']}
	}
	
	.menu_mobile_inner .social_item .social_icon {
		color: {$colors['alter_dark']};
	}
	.menu_mobile_inner .social_item:hover .social_icon {
		color: {$colors['text_dark']}
	}
	.sc_layouts_menu_mobile_button_burger .sc_layouts_iconed_text_link:hover .sc_layouts_item_icon {
		color: {$colors['text_link']} !important;
	}
	
	.sc_layouts_title.fixed_height .sc_layouts_title_content {
		background-color: {$colors['bg_color']};
	}
	
	.sc_layouts_title .sc_layouts_title_content .cat_top .post_categories a {
		background-color: {$colors['text_link']} !important;
		color: {$colors['inverse_link']} !important;
	}
	.sc_layouts_title .sc_layouts_title_content .cat_top .post_categories a:hover {
		background-color: {$colors['text_hover']} !important;
		color: {$colors['bg_color']} !important;
	}
	.widget_twitter .widget_content .sc_twitter_item, .widget_twitter .widget_content li {
		color: {$colors['text_dark']};
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
	
	
	
	.related_wrap .format-video .post_featured.post_video_play .post_video {
		background-color: {$colors['text_dark_07']};
	}
	
	
	.trx_addons_video_player.with_cover .video_hover,
	.format-video .post_featured.with_thumb .post_video_hover,
	.sc_layouts_blog_item_featured .post_featured.with_thumb .post_video_hover {
		color: {$colors['inverse_link']};
		background-color: {$colors['inverse_dark']};
	}
	.trx_addons_video_player.with_cover .video_hover:hover,
	.format-video .post_featured.with_thumb .post_video_hover:hover,
	.sc_layouts_blog_item_featured .post_featured.with_thumb .post_video_hover:hover {
		color: {$colors['inverse_link']};
		background-color: {$colors['text_link']};
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
     .sc_slider_controls.slider_pagination_style_bullets .slider_pagination_bullet,
     .slider_container .slider_pagination_wrap .swiper-pagination-bullet,
     .slider_outer .slider_pagination_wrap .swiper-pagination-bullet,
     .swiper-pagination-custom .swiper-pagination-button {
     	background-color: {$colors['alter_bg_hover']};
     }    
	.sc_blogger_item_default.sc_blogger_item_on_plate .sc_blogger_item_body {
		background-color: {$colors['bg_color']};
	}
	.sc_blogger_item_default.sc_blogger_item_on_plate:hover .sc_blogger_item_body {
		background-color: {$colors['alter_bg_color']};
	}		
	.sc_blogger_item_default.sc_blogger_item_on_plate .post_meta .post_meta_item.post_categories a {
		color: {$colors['text_link']} !important;
	}
	.sc_blogger_item_default.sc_blogger_item_on_plate .post_meta .post_meta_item.post_categories a:hover {
		color: {$colors['text_hover']} !important;
	}		
	.sc_blogger_default_classic_meta_grid_bottom .sc_blogger_item_image_position_top .sc_blogger_item_featured + .sc_blogger_item_content {
		background-color: {$colors['bg_color']};
	}	
	.widget_area .post_item .post_thumb:hover:before,
	aside .post_item .post_thumb:hover:before {
		background-color: {$colors['text_link']};
	}	
	.sc_blogger_content .sc_blogger_item_list:before,
	.sc_blogger_content .sc_blogger_item_list:after {
		background-color: {$colors['text_link']};
	}
	.sc_blogger_news_announce .sc_item_featured [class*="post_info_"] {
		background-color: {$colors['bg_color']};
	}	
	.sc_blogger_news_announce .sc_item_featured [class*="post_info_"] .entry-title a {
		color: {$colors['text_dark']} !important;
	}

	

CSS;
		}

		return $css;
	}
}

