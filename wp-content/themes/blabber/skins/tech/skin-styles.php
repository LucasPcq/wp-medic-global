<?php
// Add skin-specific colors and fonts to the custom CSS
if ( ! function_exists( 'blabber_skin_get_css' ) ) {
	add_filter( 'blabber_filter_get_css', 'blabber_skin_get_css', 10, 2 );
	function blabber_skin_get_css( $css, $args ) {

		if ( isset( $css['fonts'] ) && isset( $args['fonts'] ) ) {
			$fonts         = $args['fonts'];
			$css['fonts'] .= <<<CSS
    
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
    .sc_blogger_list.sc_blogger_list_simple .sc_blogger_columns_wrap .sc_blogger_item:before,
    .widget_area .post_item .post_info, aside .post_item .post_info {
        {$fonts['info_font-family']}
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
    em, i,
    .comments_list_wrap .comment_reply,
    .author_bio .author_link,
    .woocommerce ul.products li.product .post_header .post_tags, .woocommerce div.product form.cart .reset_variations, .woocommerce #reviews #comments ol.commentlist li .comment-text p.meta time, .woocommerce-page #reviews #comments ol.commentlist li .comment-text p.meta time,
    .sc_promo.sc_promo_default .sc_item_subtitle,
    .sc_recent_news .post_item .post_meta, .sc_action_item_description, .sc_price_item_description, .sc_price_item_details, .sc_promo_modern .sc_promo_link2 span, .sc_skills_counter .sc_skills_item_title, .slider_style_modern .slider_controls_label span, .slider_titles_outside_wrap .slide_cats, .slider_titles_outside_wrap .slide_subtitle, .sc_team .sc_team_item_subtitle, .sc_dishes .sc_dishes_item_subtitle, .sc_services .sc_services_item_subtitle, .sc_testimonials_item_author_title, .sc_testimonials_item_author_subtitle,
    .sc_skills_counter .sc_skills_item_title, .slider_style_modern .slider_controls_label span, .slider_titles_outside_wrap .slide_cats, .slider_titles_outside_wrap .slide_subtitle, .sc_team .sc_team_item_subtitle, .sc_dishes .sc_dishes_item_subtitle, .sc_services .sc_services_item_subtitle, .sc_testimonials_item_author_title, .sc_testimonials_item_author_subtitle {
        {$fonts['p_font-family']}
    }
    
    .comments_list_wrap .comment_author, .comments_list_wrap .comment_posted {
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


    .widget_search form:hover:after,
    .woocommerce.widget_product_search form:hover:after,
    .widget_display_search form:hover:after,
    #bbpress-forums #bbp-search-form:hover:after {
        color: {$colors['text_link']};
    }

    input[type="submit"],
    input[type="reset"],
    input[type="button"] {
        color: {$colors['inverse_dark']};
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
    
    .nav-links-more a,
    .woocommerce-links-more a {
        color: {$colors['inverse_dark']};
        background-color: {$colors['text_link2']};
    }
    .nav-links-more a:hover,
    .woocommerce-links-more a:hover {
        color: {$colors['inverse_link']};
        background-color: {$colors['text_link']};
    }

    .comments_wrap .form-submit input[type="submit"]{
        color: {$colors['text_hover']};
        background-color: {$colors['bg_color']};
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
    .sc_title_accent .sc_button_simple:hover,
    .sc_title_accent .sc_button_simple {
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
       
    .post_header_single .post_meta .post_meta_item.post_categories:after,
    .comments_list_wrap .comment_author:after,
    .post_meta .post_meta_item:after,
    .post_meta .post_meta_item.post_edit:after,
    .post_meta .vc_inline-link:after {
        border-color: {$colors['text_light_07']};
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
    .sc_blogger_default_over_bottom .sc_item_featured [class*="post_info_"] .post_meta:not(.post_meta_categories) a:hover,
    .sc_blogger_default_over_centered_simple .sc_item_featured [class*="post_info_"] .post_meta:not(.post_meta_categories) a:hover {
      color: {$colors['text_light']} !important;
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
    
    
    .sticky .post_title a,
    .sticky .post_sticky_wrap .post_title a {
	    color: {$colors['extra_dark']} !important;
    }
    .sticky .post_title a:hover,
    .sticky .post_sticky_wrap .post_title a:hover {
	    color: {$colors['text_link']} !important;
    } 
    
    .sticky blockquote, 
    .sticky blockquote p, 
    .sticky blockquote:not(.has-text-color), 
    .sticky blockquote:not(.has-text-color) p, 
    .sticky .wp-block-quote .wp-block-quote__citation {
    	color: {$colors['extra_text']} !important;
    }    
         
    form.mc4wp-form .mc4wp-form-fields input[type="submit"]:focus,
    form.mc4wp-form .mc4wp-form-fields input[type="submit"]:hover {
        color: {$colors['alter_hover']};
    }      
    
    form.mc4wp-form .mc4wp-form-fields:before {
        color: {$colors['text_dark']};
    }
    
    
    .wpgdprc-checkbox label input[type="checkbox"]:before,
    
    input[type="radio"] + label:before, input[type="checkbox"] + label:before,
    input[type="radio"] + .wpcf7-list-item-label:before,
    input[type="checkbox"] + .wpcf7-list-item-label:before,
    .wpcf7-list-item-label.wpcf7-list-item-right:before, 
    .edd_price_options ul > li > label > input[type="radio"] + span:before, .edd_price_options ul > li > label > input[type="checkbox"] + span:before {
       border-color: {$colors['input_bd_color']};
       background-color: {$colors['bg_color']};
    }  
    
    
    .sc_blogger_list.sc_blogger_list_simple .sc_blogger_columns_wrap .sc_blogger_item:before {
        background-color: {$colors['text_link']};
        color: {$colors['inverse_link']};
    }
    
    .sc_blogger_list.sc_blogger_list_simple .sc_blogger_columns_wrap > div + div:before {
        background-color: {$colors['bd_color']};
    }
    
    .sc_blogger_wide .sc_blogger_item {
        background-color: {$colors['alter_bg_color']};
    } 
        
    /* Full post in the blog */
    .posts_container .full_post_content,
    .sc_item_posts_container .full_post_content {
        background-color: {$colors['alter_bg_color']};	
    }
    .full_post_loading:after {
        background-color: {$colors['bg_color_07']};	
    }
    button.full_post_close {
        color: {$colors['text_dark']};
        background-color: {$colors['alter_bg_color']};	
        border-color: {$colors['bd_color']};	
    }
    button.full_post_close:hover {
        color: {$colors['text_link']};
    }
    .full_post_progress_bar {
        stroke: {$colors['text_link']};
    }
    .full_post_loading:after {
    	background-color: {$colors['alter_bg_color_07']};	
    }        
    .full_post_content .widget_twitter .sc_twitter_default + .widget_twitter_follow:before {
        border-color: {$colors['alter_bg_color']};
    }
    .full_post_content .widget_twitter_follow,
    .full_post_content .sc_widget_twitter .sc_twitter_default .sc_twitter_item .sc_twitter_item_icon {
        background-color: {$colors['alter_bg_color']};
    }
        
    
    ul[class*="trx_addons_list_dot"] > li:before {
        background-color: {$colors['text_link']};
    }
    
    .post_header_single .post_meta span.post_meta_item.post_categories > a,
    .post_meta span.post_meta_item:not(.post_categories) > a,
    .post_meta a > span:not(.post_meta_number):not(.social_icon) {
        background-image: linear-gradient(to right,{$colors['text_light']} 0%,{$colors['text_light']} 100%);
    }
    .post_meta a.post_meta_item:focus *,
    .post_meta a.post_meta_item:focus,
    .post_meta .post_date.post_meta_item > a:focus {
        color: {$colors['text_light']} !important;
    }
    .post_meta a:focus,
    .post_meta a:hover,
    .post_meta a:hover > span {
        color: {$colors['text_light']};
    }
        
    .sticky .post_date a:hover, .post_date a:focus,
    .sticky a.post_meta_item:hover, a.post_meta_item:focus,
    .sticky .post_meta_item a:hover, .post_meta_item a:focus,
    .sticky .post_meta .vc_inline-link:hover, .post_meta .vc_inline-link:focus,
    .sticky .post_info .post_info_item a:hover, .post_info .post_info_item a:focus,
    .sticky .post_info_meta .post_meta_item:hover, .post_info_meta .post_meta_item:focus {
        color: {$colors['text_light']} !important;	
    }
    
    .sc_blogger .sc_blogger_item_title a:hover,
    .sc_blogger_wide .sc_blogger_content .sc_blogger_item_wide .sc_blogger_item_title a:hover {
        color: {$colors['alter_hover']};
    }
   
    .post_header_single .post_meta .post_meta_item.post_categories,
    .post_header_single .post_meta .post_meta_item.post_categories a {
        color: {$colors['text_light']};
    }
                
        
                
    /* Menu */
    .sc_layouts_menu_nav > li > a {
        color: {$colors['text_dark']} !important;
    }
    .sc_layouts_menu_nav > li > a:hover,
    .sc_layouts_menu_nav > li.sfHover > a {
        color: {$colors['alter_hover']} !important;
    }
    .sc_layouts_menu_nav > li.current-menu-item > a,
    .sc_layouts_menu_nav > li.current-menu-parent > a,
    .sc_layouts_menu_nav > li.current-menu-ancestor > a {
        color: {$colors['alter_hover']} !important;
    }
    .sc_layouts_menu_nav .menu-collapse > a:before {
        color: {$colors['alter_text']};
    }
    .sc_layouts_menu_nav .menu-collapse > a:after {
        background-color: {$colors['alter_bg_color']};
    }
    .sc_layouts_menu_nav .menu-collapse > a:hover:before,
    .sc_layouts_menu_nav .menu-collapse > a:focus:before {
        color: {$colors['alter_link']};
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
        color: {$colors['extra_text']} !important;
    }
    .sc_layouts_menu_nav > li li > a:hover:after {
        color: {$colors['extra_text']} !important;
    }
    .sc_layouts_menu_nav li[class*="columns-"] li.menu-item-has-children > a:hover,
    .sc_layouts_menu_nav li[class*="columns-"] li.menu-item-has-children.sfHover > a {
        color: {$colors['extra_text']} !important;
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
        color: {$colors['extra_text']} !important;
    }
    .sc_layouts_menu_nav > li li.current-menu-item:before,
    .sc_layouts_menu_nav > li li.current-menu-parent:before,
    .sc_layouts_menu_nav > li li.current-menu-ancestor:before {
        color: {$colors['extra_text']} !important;
    }
            
                       
            
    .sc_layouts_row_type_compact .sc_layouts_item a:not(.sc_button):not(.button):hover,
    .sc_layouts_row_type_compact .sc_layouts_item a:not(.sc_button):not(.button):focus,
    .sc_layouts_row_type_compact .sc_layouts_item a:hover .sc_layouts_item_icon,
    .sc_layouts_row_type_compact .sc_layouts_item a:focus .sc_layouts_item_icon,
    .scheme_self.sc_layouts_row_type_compact .sc_layouts_item a:not(.sc_button):not(.button):hover,
    .scheme_self.sc_layouts_row_type_compact .sc_layouts_item a:not(.sc_button):not(.button):focus,
    .scheme_self.sc_layouts_row_type_compact .sc_layouts_item a:hover .sc_layouts_item_icon,
    .scheme_self.sc_layouts_row_type_compact .sc_layouts_item a:focus .sc_layouts_item_icon {
        color: {$colors['alter_hover']};
    }
    .sc_layouts_row_type_compact .socials_wrap .social_item:hover .social_icon,
    .scheme_self.sc_layouts_row_type_compact .socials_wrap .social_item:hover .social_icon {
        background-color: transparent;
        color: {$colors['alter_hover']};
    }
    
    .search_style_normal .search_field {
        border-color: {$colors['text']} !important;
        color: {$colors['text']};
    }
    .search_wrap.search_style_normal .search_submit:before {
        color: {$colors['input_dark']};
    }
    .search_wrap.search_style_normal .search_submit:hover:before,
    .search_wrap.search_style_normal .search_submit:focus:before {
        color: {$colors['alter_hover']};
    }
		
	.scheme_self.footer_wrap a:hover,
    .footer_wrap .scheme_self.vc_row a:hover {
        color: {$colors['alter_hover']};
    }
	
    .sc_layouts_title .sc_layouts_title_breadcrumbs a:hover,
    .sc_layouts_title .sc_layouts_title_breadcrumbs a:focus {
        color: {$colors['alter_hover']};
    }
        
    .post_item .post_title a:hover {
        color: {$colors['alter_hover']};
    }
    
    .sc_team .sc_team_item_thumb .sc_team_item_title a:hover {
        color: {$colors['inverse_link']};
    }
               
    blockquote, blockquote[class*="wp-block-quote"][class*="is-style-"], blockquote[class*="wp-block-quote"][class*="is-"], .wp-block-quote:not(.is-large):not(.is-style-large), .wp-block-freeform.block-library-rich-text__tinymce blockquote,
    section > blockquote,
    div:not(.is-style-solid-color) > blockquote,
    figure:not(.is-style-solid-color) > blockquote {
        border-color: {$colors['text_link']};
    }
    blockquote:not(.has-text-color):before {
        color: {$colors['text_dark']};
    }
    blockquote:not(.has-text-color),
    blockquote:not(.has-text-color) p,
    .wp-block-quote .wp-block-quote__citation {
        color: {$colors['text_dark']} !important;
    }
    blockquote:not(.has-text-color) a {
        color: {$colors['text_link']};
    }
    blockquote:not(.has-text-color) a:hover {
        color: {$colors['inverse_link']};
    }
    blockquote:not(.has-text-color) dt, blockquote:not(.has-text-color) b, blockquote:not(.has-text-color) strong, blockquote:not(.has-text-color) i, blockquote:not(.has-text-color) em, blockquote:not(.has-text-color) mark, blockquote:not(.has-text-color) ins {	
        color: {$colors['extra_dark']};
    }
    blockquote:not(.has-text-color) s, blockquote:not(.has-text-color) strike, blockquote:not(.has-text-color) del {
        color: {$colors['extra_light']};
    }
    blockquote:not(.has-text-color) code {
        color: {$colors['extra_dark']};
        background-color: {$colors['extra_bg_hover']};
        border-color: {$colors['extra_bd_hover']};
    }
    
    
    .select_container:before {
	    color: {$colors['input_text']};
	    background-color: {$colors['bg_color']};
    }
    .select_container:focus:before,
    .select_container:hover:before {
        color: {$colors['input_dark']};
        background-color: {$colors['bg_color']};
    }
    .select_container:after {
        color: {$colors['input_text']};
    }
    .select_container:focus:after,
    .select_container:hover:after {
        color: {$colors['text_dark']};
    }
    .select_container select {
        color: {$colors['input_text']};
        background: {$colors['bg_color']} !important;
    }
    .select_container select:focus {
        color: {$colors['input_dark']};
        background-color: {$colors['bg_color']} !important;
    }
    
    
    .woocommerce .quantity input.qty, .woocommerce #content .quantity input.qty, .woocommerce-page .quantity input.qty, .woocommerce-page #content .quantity input.qty {
	    color: {$colors['text_dark']};
    }
    .select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
      border-color: transparent transparent {$colors['text_dark']} transparent;
    }
    .select2-container--default .select2-selection--single .select2-selection__arrow b {
        border-color: {$colors['text_dark']} transparent transparent transparent;
    }
    
    
    table > tbody > tr:nth-child(2n+1) > td  div.quantity span {
        background-color: {$colors['alter_bg_color']} !important;
    }
    table > tbody > tr:nth-child(2n) > td  div.quantity span {
        background-color: {$colors['alter_bg_hover']} !important;
    }
    
    .post_item_single .post_content .post_tags .post_meta_label {
        color: {$colors['text_dark']};
    }
    .post_item_single .post_content .post_tags a {
         background-color: {$colors['text_link2']} !important;
         color: {$colors['text_light']} !important;
    }
    .post_item_single .post_content .post_tags a:hover {
         background-color: {$colors['text_link']} !important;
         color: {$colors['inverse_link']} !important;
    }
    
    .theme_button.show_comments_button,
    .comments_wrap .form-submit input[type="submit"],
    .show_comments {
        color: {$colors['inverse_dark']} !important;
        background-color: {$colors['text_link2']} !important;
    }
    .theme_button.show_comments_button:not(.sc_button_hover_strike):hover,
    .comments_wrap .form-submit input[type="submit"]:focus,
    .comments_wrap .form-submit input[type="submit"]:hover,
    .show_comments:not(.sc_button_hover_strike):hover {
        color: {$colors['inverse_link']} !important;
        background-color: {$colors['text_link']} !important;
    }
            
    .comments_wrap .form-submit input[type="submit"]:disabled,
    .comments_wrap .form-submit input[type="submit"][disabled],
    .comments_wrap .form-submit input[type="submit"][disabled]:disabled {
    	background: {$colors['text_light_07']} !important;
		color: {$colors['text']} !important;
		border-color: {$colors['text']} !important;
    }
    
    .full_post_content .show_comments_single {
        border-color: {$colors['bd_color']};
    }
    .comments_list_wrap .comment_reply a {
        color: {$colors['text_dark']};
    }
    .comments_list_wrap .comment_reply a:hover {
        color: {$colors['text_link']};
    }

	.woocommerce-shipping-calculator .select_container select,
	.woocommerce-shipping-calculator .select_container {
		border-color: {$colors['text_dark']};
		background-color: {$colors['alter_bg_hover']} !important;
	}
	.woocommerce-shipping-calculator .select_container:before {
		background-color: {$colors['alter_bg_hover']} !important;
	}
	

CSS;
		}

		return $css;
	}
}

