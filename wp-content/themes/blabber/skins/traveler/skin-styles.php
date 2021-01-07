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
    .widget_aboutme .aboutme_username {
        {$fonts['logo_font-family']}
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

    .elementor-widget-sidebar .widget,
    .scheme_self.sidebar .sidebar_inner .widget {
        background-color: {$colors['alter_bg_color']};
        color: {$colors['alter_text']};
    }
    .sidebar_inner .widget + .widget {
        border-color: {$colors['bd_color']};
    }   
    .scheme_self.sidebar .widget + .widget {
        border-color: {$colors['alter_bd_color']};
    }
    
    .sc_blogger_item_on_plate .sc_blogger_item_content .post_meta a,
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
    
    .sc_blogger_item_on_plate .sc_blogger_item_content .post_meta a:hover,    
    .post_date a:hover, .post_date a:focus,
    a.post_meta_item:hover, a.post_meta_item:focus,
    .post_meta_item a:hover, .post_meta_item a:focus,
    .post_meta .vc_inline-link:hover, .post_meta .vc_inline-link:focus,
    .post_info .post_info_item a:hover, .post_info .post_info_item a:focus,
    .post_info_meta .post_meta_item:hover, .post_info_meta .post_meta_item:focus {
        color: {$colors['text_dark']};
    }
    
    .post_meta_item.post_categories,
    .post_meta_item.post_categories a {
        color: {$colors['text_link']};
    }
    .post_meta_item.post_categories a:hover, .post_meta_item.post_categories a:focus {
        color: {$colors['text_hover']};
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
    .comments_list_wrap .comment_author_avatar {
        border-color: {$colors['bd_color']};
    }
    .comments_list_wrap .comment_author a,
    .comments_list_wrap .comment_author,
    .comments_list_wrap .comment_info {
        color: {$colors['text_link']};
    }
    .comments_list_wrap .comment_author a:hover {
        color: {$colors['text_hover']};
    }
    
    input[type="submit"], input[type="reset"], input[type="button"],
    .comments_wrap .form-submit input[type="submit"] {
        color: {$colors['inverse_link']};
        background-color: {$colors['text_dark']};
        border-color: {$colors['text_hover']};
    }
    
    .scheme_self.sc_layouts_row_type_normal .search_style_normal .search_field,
    .sc_layouts_row_type_normal .search_style_normal .search_field {
        color: {$colors['text_dark']};
        background-color: {$colors['alter_bg_color']};
        border-color: {$colors['alter_bg_color']};
    }
    .scheme_self.sc_layouts_row_type_normal .search_style_normal .search_field:focus,
    .sc_layouts_row_type_normal .search_style_normal .search_field:focus,
    .scheme_self.sc_layouts_row_type_normal .search_style_normal .search_field:hover,
    .sc_layouts_row_type_normal .search_style_normal .search_field:hover {
        background-color: {$colors['alter_bg_color']};
        border-color: {$colors['input_bd_hover']};
    }
    .sc_layouts_row_type_normal .search_style_normal .search_submit:hover:before,
    .sc_layouts_row_type_normal .search_style_normal .search_submit:focus:before {
        color: {$colors['text_link']};
    }
    
    input[type="submit"]:focus, 
    input[type="reset"]:focus, 
    input[type="button"]:focus,
    input[type="submit"]:hover, 
    input[type="reset"]:hover, 
    input[type="button"]:hover,
    .comments_wrap .form-submit input[type="submit"]:focus,
    .comments_wrap .form-submit input[type="submit"]:hover {
        color: {$colors['inverse_link']};
        background-color: {$colors['text_link']};
        border-color: {$colors['text_hover']};
    }
    .comments_list_wrap .comment_reply a {
        color: {$colors['text_dark']};
    }
    .comments_list_wrap .comment_reply a:hover {
        color: {$colors['text_link']};
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
    .elementor-widget-sidebar .widget li > a:after,
    .scheme_self.sidebar .widget li > a:after {
        background-color: {$colors['bg_color']};
    }
    .scheme_self.footer_wrap .widget li > a:after {    
        background-color: {$colors['alter_bd_color']};
    }
    .sidebar_inner .widget_product_search,
    .sidebar_inner .widget_search {
        background-color: {$colors['alter_bg_hover']} !important;
    }
    .scheme_self.sidebar .sidebar_inner .widget_product_search .widget_title:after,
    .scheme_self.sidebar .sidebar_inner .widget_search .widget_title:after {
        background-color: {$colors['alter_bg_hover']};
        border-color: {$colors['alter_bg_hover']};
    }
    .scheme_self.sidebar .sidebar_inner {
       background-color: {$colors['bg_color']};
    }
    .sidebar_inner .widget_product_search input[type="text"],
    .sidebar_inner .widget_search input[type="search"] {
        border-color: {$colors['alter_bd_color']};
        background-color: {$colors['alter_bg_color']};
    }
    .scheme_self.sidebar .sidebar_inner .widget_product_search input[type="text"],
    .scheme_self.sidebar .sidebar_inner .widget_search input[type="search"] {
	    border-color: {$colors['alter_bg_color']};
    }
    .sidebar_inner .widget_product_search input[type="text"]:focus,
    .sidebar_inner .widget_product_search input[type="text"]:active,
    .sidebar_inner .widget_search input[type="search"]:focus,
    .sidebar_inner .widget_search input[type="search"]:active {
        border-color: {$colors['input_bd_hover']} !important;
    }
    
     .elementor-widget-sidebar .widget_title:after,
    .scheme_self.sidebar .sidebar_inner .widget_title:after {
        background-color: {$colors['alter_bg_color']};
        border-color: {$colors['alter_bg_color']};
    }
    .elementor-widget-sidebar .widget_title,
    .scheme_self.sidebar .widget_title {
        background-color: {$colors['bg_color']};
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
        color: {$colors['text_hover']};
    }
        
    .footer_wrap .sc_socials_icons_names .social_item,
    .scheme_self.footer_wrap .sc_socials_icons_names .social_item {
        background-color: {$colors['alter_bg_hover']};
    }

    .footer_wrap .sc_socials_icons_names .social_item .social_icon,
    .scheme_self.footer_wrap .sc_socials_icons_names .social_item .social_icon,
    .footer_wrap .sc_socials_icons_names .social_item,
    .scheme_self.footer_wrap .sc_socials_icons_names .social_item {
        color: {$colors['extra_text']};
    }
    .footer_wrap .sc_socials_icons_names .social_item:hover .social_icon,
    .scheme_self.footer_wrap .sc_socials_icons_names .social_item:hover .social_icon,
    .footer_wrap .sc_socials_icons_names .social_item:hover,
    .scheme_self.footer_wrap .sc_socials_icons_names .social_item:hover {
        color: {$colors['inverse_link']};
    }    
    .footer_wrap .sc_socials_icons_names .social_item + .social_item,
    .scheme_self.footer_wrap .sc_socials_icons_names .social_item + .social_item {
        border-color: {$colors['bd_color']};
    }  

    .comments_list_wrap .comment_author:after,
    .post_meta .post_meta_item:after,
    .post_meta .post_meta_item.post_edit:after,
    .post_meta .vc_inline-link:after {
        border-color: {$colors['alter_bg_hover']};
        background-color: {$colors['alter_bg_hover']};
    }
   
    .sc_team.sc_team_featured .sc_team_item_subtitle a,
    .sc_promo.sc_promo_default .sc_item_subtitle,
    .post_meta .post_meta_item.post_categories a,
    .sc_layouts_title .sc_layouts_title_meta .post_meta_item:not(.post_categories) {
        color: {$colors['inverse_link']};
        background-color: {$colors['text_link']};        
    }
    .sc_team.sc_team_featured .sc_team_item_subtitle a:hover,
    .post_meta .post_meta_item.post_categories a:hover,
     .sc_layouts_title .sc_layouts_title_meta a.post_meta_item:not(.post_categories):hover {
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
    .widget_twitter .sc_twitter_default + .widget_twitter_follow:before {
        border-color: {$colors['bg_color']};
    }
    .widget_twitter_follow {       
        border-color: {$colors['text_hover']} !important;
        background-color: {$colors['text_hover']} !important;
        color: {$colors['bg_color']} !important;
    }
    .widget_twitter_follow:hover {
        border-color: {$colors['text_link']} !important;
        background-color: {$colors['text_link']} !important;
        color: {$colors['inverse_link']} !important;
    }
    .nav-links-more a, .woocommerce-links-more a,
    .minimal-light .esg-navigationbutton,
    .show_comments {
        color: {$colors['inverse_link']} !important;
        background-color: {$colors['text_link2']} !important;
    }
    .nav-links-more a:hover, .woocommerce-links-more a:hover,
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
    .sc_blogger_default_over_centered_simple .sc_item_featured [class*="post_info_"] .post_meta:not(.post_meta_categories) a:hover {
      color: {$colors['text_link']} !important;
    }    
    .slider_container .slide_info .post_meta .post_meta_item:after {
        border-color: {$colors['inverse_link']} !important;
    }
	
	.slider_container .slide_info.slide_info_large .slide_title a {
		color: {$colors['inverse_dark']} !important;
	}
    .slider_container .slide_info .slide_cats a {
        color: {$colors['inverse_link']} !important;
    }
    .slider_container .slide_info .slide_cats a:hover {
    	color: {$colors['bg_color']} !important;
    }
    .slider_container .slide_info .slide_title a:hover {
    	color: {$colors['text_link']} !important;
    }
    .slider_container .slide_info .slide_title {
        background: {$colors['inverse_link']}!important;
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
    
    .widget_aboutme .aboutme_avatar:after {
         border-color: {$colors['alter_bd_color']};
    }
    .widget_aboutme .aboutme_username {
        color: {$colors['text_link']};
    }
    
    .elementor-widget-sidebar form.mc4wp-form .mc4wp-form-fields input[type="email"],
    .scheme_self.sidebar .sidebar_inner form.mc4wp-form .mc4wp-form-fields input[type="email"] {
        border-color: {$colors['alter_bg_color']};
    }
    .elementor-widget-sidebar form.mc4wp-form .mc4wp-form-fields input[type="email"]:focus,
    .scheme_self.sidebar .sidebar_inner form.mc4wp-form .mc4wp-form-fields input[type="email"]:focus {
        border-color: {$colors['input_bd_hover']};
    }
    form.mc4wp-form .mc4wp-form-fields input[type="submit"][disabled]:hover,
    form.mc4wp-form .mc4wp-form-fields input[type="submit"][disabled] {
    	background-color: {$colors['text_hover']} !important;
        color: {$colors['inverse_hover']} !important;
    }
    form.mc4wp-form .mc4wp-form-fields input[type="submit"] {
        background-color: {$colors['text_hover']} !important;
        color: {$colors['inverse_hover']} !important;
    }    
    form.mc4wp-form .mc4wp-form-fields input[type="submit"]:focus,
    form.mc4wp-form .mc4wp-form-fields input[type="submit"]:hover {
        background-color: {$colors['text_link']} !important;
        color: {$colors['inverse_link']} !important;
    }
    form.mc4wp-form .mc4wp-alert a {
        color: {$colors['inverse_link']} !important;	
    }
    form.mc4wp-form .mc4wp-alert a:hover {
        color: {$colors['inverse_text']} !important;	
    }
    
    .wpgdprc-checkbox label input[type="checkbox"]:before,
    input[type="radio"] + label:before,
    input[type="checkbox"] + label:before,
    input[type="radio"] + .wpcf7-list-item-label:before,
    input[type="checkbox"] + .wpcf7-list-item-label:before,
    .wpcf7-list-item-label.wpcf7-list-item-right:before,
    .edd_price_options ul > li > label > input[type="radio"] + span:before, 
    .edd_price_options ul > li > label > input[type="checkbox"] + span:before,
    input[type="radio"] + label:before,
    input[type="checkbox"] + label:before,
    .wpcf7-list-item-label.wpcf7-list-item-right:before {
        border-color: {$colors['text_light']} !important;
    }
		
	table > tbody > tr:nth-child(2n+1) > td {
        background-color: {$colors['alter_bg_color']};
    }
    table > tbody > tr:nth-child(2n) > td {
        background-color: {$colors['alter_bg_hover_01']};
    }
    
    .sc_layouts_title .sc_layouts_title_caption {
        background-color: {$colors['alter_bg_color']};
        color: {$colors['text_dark']};
    }
    
	.sc_layouts_title .sc_layouts_title_breadcrumbs .breadcrumbs {
        color: {$colors['text_dark']};
        background-color: {$colors['alter_bg_color']};
    }	
	.sc_layouts_title .sc_layouts_title_breadcrumbs .breadcrumbs a {
        color: {$colors['text_dark']};
    }
    .sc_layouts_title .sc_layouts_title_breadcrumbs .breadcrumbs a:hover {
        color: {$colors['text_link']};
    }    

	.sc_layouts_title .sc_layouts_title_content > .sc_layouts_title_title:first-child + .sc_layouts_title_breadcrumbs .breadcrumbs {
        color: {$colors['inverse_link']};
        background-color: {$colors['text_link']};
    }	
	.sc_layouts_title .sc_layouts_title_content > .sc_layouts_title_title:first-child + .sc_layouts_title_breadcrumbs .breadcrumbs a {
        color: {$colors['inverse_link']};
    }
    .sc_layouts_title .sc_layouts_title_content > .sc_layouts_title_title:first-child + .sc_layouts_title_breadcrumbs .breadcrumbs a:hover {
        color: {$colors['bg_color']};
    }
  
     .single-post .page_content_wrap .content .sc_twitter_default .sc_twitter_item {
        background-color: {$colors['bg_color']};
     }
     
     .single-post .page_content_wrap .content .post_meta_item .socials_share .social_items,
     .single-post .page_content_wrap .content {
        background-color: {$colors['alter_bg_color']};
     }
	
    .single-post .page_content_wrap .content .post_tags a {
        color: {$colors['extra_light']};
        background-color: {$colors['bg_color']};
    }
    .single-post .page_content_wrap .content .post_tags a:hover {
       color: {$colors['inverse_link']};
        background-color: {$colors['text_link']};
    }
	
	.author_avatar {
	    border-color: {$colors['bd_color']};
	}
		
	.author_bio .author_link {
	    color: {$colors['text_link']};
	}
	.author_bio .author_link:hover {
	    color: {$colors['text_hover']};
	}
		
	.sc_layouts_row_type_normal .socials_wrap .social_item:hover .social_icon {
        color: {$colors['bg_color']} !important;
        background-color: {$colors['text_dark']} !important;
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
        color: {$colors['extra_text']} !important;
    }
    .sc_layouts_menu_popup .sc_layouts_menu_nav > li > a:hover,
    .sc_layouts_menu_popup .sc_layouts_menu_nav > li.sfHover > a,
    .sc_layouts_menu_nav > li li > a:hover,
    .sc_layouts_menu_nav > li li.sfHover > a {
        color: {$colors['extra_dark']} !important;
    }
    .sc_layouts_menu_nav > li li > a:hover:after {
        color: {$colors['extra_text']} !important;
    }
    .sc_layouts_menu_nav li[class*="columns-"] li.menu-item-has-children > a:hover,
    .sc_layouts_menu_nav li[class*="columns-"] li.menu-item-has-children.sfHover > a {
        color: {$colors['extra_dark']} !important;
        background-color: transparent;
    }
    .sc_layouts_menu_nav > li li[class*="icon-"]:before {
        color: {$colors['extra_hover']};
    }
    .sc_layouts_menu_nav > li li[class*="icon-"]:hover:before,
    .sc_layouts_menu_nav > li li[class*="icon-"].shHover:before {
        color: {$colors['extra_dark']};
    }
    .sc_layouts_menu_nav > li li.current-menu-item > a,
    .sc_layouts_menu_nav > li li.current-menu-parent > a,
    .sc_layouts_menu_nav > li li.current-menu-ancestor > a {
        color: {$colors['extra_dark']} !important;
    }
    .sc_layouts_menu_nav > li li.current-menu-item:before,
    .sc_layouts_menu_nav > li li.current-menu-parent:before,
    .sc_layouts_menu_nav > li li.current-menu-ancestor:before {
        color: {$colors['extra_dark']} !important;
    }
		
	.sc_blogger_chess .post_layout_chess,
	.scheme_self.sc_blogger_chess .post_layout_chess {
		background-color: {$colors['alter_bg_color']};
	}
		
	.sticky .post_title a,
    .sticky .post_sticky_wrap .post_title a {
	    color: {$colors['extra_dark']} !important;
    }
    .sticky .post_title a:hover,
    .sticky .post_sticky_wrap .post_title a:hover {
	    color: {$colors['text_link']} !important;
    } 
	
	.post_featured.hover_shop_buttons .mask {		
		background-color: {$colors['alter_bg_color_07']} !important;
	}
	
	.woocommerce .product .compare, .tinv-wishlist.tinvwl-after-add-to-cart .tinvwl_add_to_wishlist_button, .woocommerce div.product form.cart .single_add_to_cart_button,
	.woocommerce .product .compare:not(.sc_button_hover_strike), 
	.tinv-wishlist.tinvwl-after-add-to-cart .tinvwl_add_to_wishlist_button:not(.sc_button_hover_strike), 
	.woocommerce div.product form.cart .single_add_to_cart_button:not(.sc_button_hover_strike), 
	.widget.woocommerce .button:not(.sc_button_hover_strike), 
	li.product .post_featured.hover_shop_buttons .icons a:not(.sc_button_hover_strike),
	body .widget.woocommerce .button:not(.sc_button_hover_strike) {
		color: {$colors['inverse_link']} !important;
        background-color: {$colors['text_link2']} !important;
	}
	
	.woocommerce .product .compare:hover, 
	.tinv-wishlist.tinvwl-after-add-to-cart .tinvwl_add_to_wishlist_button:hover, 
	.woocommerce div.product form.cart .single_add_to_cart_button:hover,
	.woocommerce .product .compare:not(.sc_button_hover_strike):hover, 
	.tinv-wishlist.tinvwl-after-add-to-cart .tinvwl_add_to_wishlist_button:not(.sc_button_hover_strike):hover, 
	.woocommerce div.product form.cart .single_add_to_cart_button:not(.sc_button_hover_strike):hover, 
	.widget.woocommerce .button:not(.sc_button_hover_strike):hover, 
	li.product .post_featured.hover_shop_buttons .icons a:not(.sc_button_hover_strike):hover,	
	body .widget.woocommerce .button:not(.sc_button_hover_strike):hover {
        background-color: {$colors['text_link']} !important;
        color: {$colors['inverse_link']} !important;
	}
        

CSS;
		}

		return $css;
	}
}