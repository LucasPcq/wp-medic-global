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
    a {
        color: {$colors['text_link2']};
    }
    a:hover {
        color: {$colors['text_hover2']};
    }
    h1 a:hover,
    h2 a:hover,
    h3 a:hover,
    h4 a:hover,
    h5 a:hover,
    h6 a:hover,
    li a:hover {
        color: {$colors['text_link2']};
    }		
	.trx_addons_scroll_to_top,
	.trx_addons_cv .trx_addons_scroll_to_top {
	    color: {$colors['extra_text']};
	    background-color: {$colors['extra_link']};
	}
	.trx_addons_scroll_to_top:hover,
	.trx_addons_cv .trx_addons_scroll_to_top:hover {
	    color: {$colors['extra_dark']};
	    background-color: {$colors['extra_text']};
	}		
			
	.trx_addons_demo_options_wrapper .trx_addons_demo_options_toolbar a {
	    color: {$colors['text']};
	}		
    table th {
        color: {$colors['extra_dark']};
	    background-color: {$colors['extra_bg_color']};
    }
    input[type="submit"],
    input[type="reset"],
    input[type="button"] {
        color: {$colors['text_hover']};
        background-color: {$colors['bg_color']};
        border-color: {$colors['text_hover']};
    }
    .scheme_self.sc_layouts_row_type_compact .search_wrap .search_field {
        color: {$colors['input_dark']};
        background-color: {$colors['input_bg_color']} !important;
        border-color: {$colors['input_bd_color']} !important;
    }
    .scheme_self .search_wrap .search_submit:before {
        color: {$colors['input_dark']};
    }
    .scheme_self .search_wrap .search_submit:hover:before {
        color: {$colors['input_text']};
    }
    
    .sc_layouts_menu_nav > li > a  {
        color: {$colors['text_dark']} !important;
    }
    .sc_layouts_menu_nav > li li > a{
        color: {$colors['extra_dark']} !important;
    }
    .sc_layouts_menu_nav > li li > a:hover,
    .sc_layouts_menu_nav > li > a:hover {
        color: {$colors['text_link']} !important;
    }
    .sc_layouts_row_type_narrow .sc_layouts_menu_nav > li > a {
        color: {$colors['extra_text']} !important;
    }
    .sc_layouts_menu_nav > li.sfHover > a,
    .sc_layouts_menu_nav > li.current-menu-item > a,
    .sc_layouts_menu_nav > li.current-menu-parent > a,
    .sc_layouts_menu_nav > li.current-menu-ancestor > a {
        color: {$colors['text_link']} !important;
    }
    .sc_layouts_row_type_narrow .sc_layouts_menu_nav > li > a:hover {
        color: {$colors['extra_dark']} !important;
    }
    .sc_layouts_row_type_narrow .sc_layouts_menu_nav > li.sfHover > a,
    .sc_layouts_row_type_narrow .sc_layouts_menu_nav > li.current-menu-item > a,
    .sc_layouts_row_type_narrow .sc_layouts_menu_nav > li.current-menu-parent > a,
    .sc_layouts_row_type_narrow .sc_layouts_menu_nav > li.current-menu-ancestor > a {
        color: {$colors['extra_dark']} !important;
    }
    .sc_layouts_menu_nav > li li.sfHover > a,
    .sc_layouts_menu_nav > li li.current-menu-item > a,
    .sc_layouts_menu_nav > li li.current-menu-parent > a,
    .sc_layouts_menu_nav > li li.current-menu-ancestor > a {
        color: {$colors['text_link']} !important;
    }
    
    .sc_layouts_row.sc_layouts_row_type_narrow {
        color: {$colors['extra_text']};
        background-color: {$colors['extra_link']} !important;
    }
    .sc_layouts_row.sc_layouts_row_type_narrow a {
        color: {$colors['extra_text']};
    }
    .sc_layouts_row.sc_layouts_row_type_narrow a:hover {
        color: {$colors['extra_dark']};
    }
    .trx_addons_dropcap_style_1 {
        color: {$colors['extra_text']};
        background-color: {$colors['extra_link']} !important;
    }
    section>blockquote,
    div:not(.is-style-solid-color)>blockquote,
    figure:not(.is-style-solid-color)>blockquote {
        background-color: {$colors['extra_link']} !important;
    }
    blockquote:not(.has-text-color):before,
    blockquote:not(.has-text-color),
    blockquote:not(.has-text-color) p,
    .wp-block-quote .wp-block-quote__citation {
        color: {$colors['extra_text']} !important;
    }
    form.mc4wp-form .mc4wp-form-fields input[type="submit"] {
        background-color: transparent !important;
        color: {$colors['extra_dark']};
    }
    form.mc4wp-form .mc4wp-form-fields input[type="submit"]:hover {
        background-color: transparent !important;
        color: {$colors['extra_link']};
    }
    form.mc4wp-form .mc4wp-form-fields:before {
        color: {$colors['extra_dark']};
    }
    form.mc4wp-form label a {
        color: {$colors['text']};
    }
    form.mc4wp-form label a:hover {
        color: {$colors['text_hover']};
    }
    
    form button:not(.components-button), 
    input[type="reset"],
    input[type="submit"], 
    input[type="button"],
    .post_item .more-link, 
    .comments_wrap .form-submit input[type="submit"],
    .wp-block-button:not(.is-style-outline) .wp-block-button__link,
    #buddypress .comment-reply-link, 
    #buddypress .generic-button a,
    #buddypress a.button, 
    #buddypress button,
    #buddypress input[type="button"], 
    #buddypress input[type="reset"],
    #buddypress input[type="submit"], 
    #buddypress ul.button-nav li a,
    a.bp-title-button, 
    .booked-calendar-wrap .booked-appt-list .timeslot .timeslot-people button,
    #booked-profile-page .booked-profile-appt-list .appt-block .booked-cal-buttons .google-cal-button>a,
    #booked-profile-page input[type="submit"], 
    #booked-profile-page button,
    .booked-list-view input[type="submit"], 
    .booked-list-view button,
    table.booked-calendar input[type="submit"], 
    table.booked-calendar button,
    .booked-modal input[type="submit"], 
    .booked-modal button,
    .sc_button_default, 
    .sc_button:not(.sc_button_simple):not(.sc_button_bordered):not(.sc_button_bg_image),
    .socials_share:not(.socials_type_drop) .social_icon, 
    .tourmaster-tour-search-wrap input.tourmaster-tour-search-submit[type="submit"],
    #tribe-bar-form .tribe-bar-submit input[type="submit"], 
    #tribe-bar-form.tribe-bar-mini .tribe-bar-submit input[type="submit"],
    #tribe-bar-form .tribe-bar-views-toggle, 
    #tribe-bar-views li.tribe-bar-views-option,
    #tribe-events .tribe-events-button, 
    .tribe-events-button,
    .tribe-events-cal-links a, 
    .tribe-events-sub-nav li a,
    .edd_download_purchase_form .button, 
    #edd-purchase-button,
    .edd-submit.button, 
    .widget_edd_cart_widget .edd_checkout a,
    .sc_edd_details .downloads_page_tags .downloads_page_data>a,
    .mc4wp-form input[type="submit"], 
    .woocommerce #respond input#submit,
    .woocommerce .button, 
    .woocommerce-page .button, 
    .woocommerce a.button,
    .woocommerce-page a.button, 
    .woocommerce button.button,
    .woocommerce-page button.button, 
    .woocommerce input.button,
    .woocommerce-page input.button, 
    .woocommerce input[type="button"],
    .woocommerce-page input[type="button"], 
    .woocommerce input[type="submit"],
    .woocommerce-page input[type="submit"], 
    .woocommerce #respond input#submit.alt,
    .woocommerce a.button.alt, 
    .woocommerce button.button.alt, 
    .woocommerce input.button.alt {
        color: {$colors['text_dark']};
        background-color: {$colors['text_link']};
        border-color: {$colors['text_link']};
    }
    .theme_button {
        color: {$colors['text_dark']} !important;
        background-color: {$colors['text_link']} !important;
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
    .theme_button:hover {
        color: {$colors['bg_color']} !important;
        background-color: {$colors['text_hover']} !important;
    }

   
   button[disabled],
   input[type="submit"][disabled],
   input[type="button"][disabled],
   a.sc_button[disabled],
   a.theme_button[disabled],
   button[disabled]:hover,
   input[type="submit"][disabled]:hover,
   input[type="button"][disabled]:hover,
   a.sc_button[disabled]:hover,
   a.theme_button[disabled]:hover,
   .woocommerce #respond input#submit.disabled,
   .woocommerce #respond input#submit:disabled,
   .woocommerce #respond input#submit[disabled]:disabled,
   .woocommerce a.button.disabled,
   .woocommerce a.button:disabled,
   .woocommerce a.button[disabled]:disabled,
   .woocommerce button.button.disabled,
   .woocommerce button.button:disabled,
   .woocommerce button.button[disabled]:disabled,
   .woocommerce input.button.disabled,
   .woocommerce input.button:disabled,
   .woocommerce input.button[disabled]:disabled,
   .woocommerce #respond input#submit.disabled:hover,
   .woocommerce #respond input#submit:disabled:hover,
   .woocommerce #respond input#submit[disabled]:disabled:hover,
   .woocommerce a.button.disabled:hover,
   .woocommerce a.button:disabled:hover,
   .woocommerce a.button[disabled]:disabled:hover,
   .woocommerce button.button.disabled:hover,
   .woocommerce button.button:disabled:hover,
   .woocommerce button.button[disabled]:disabled:hover,
   .woocommerce input.button.disabled:hover,
   .woocommerce input.button:disabled:hover,
   .woocommerce input.button[disabled]:disabled:hover {
        background: {$colors['text_light_03']} !important;
	    color: {$colors['text']} !important;
        border-color: {$colors['text_light_03']} !important;
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
        color: {$colors['text_link']} !important;
    }
    
    .sc_layouts_row_type_compact .socials_wrap .social_item .social_icon:hover {
	    color: {$colors['text_link']} !important;
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
    
    .sc_blogger.sc_blogger_list .sc_blogger_item_title a,
    .sc_blogger.sc_blogger_default .sc_blogger_item_title a,
    .related_wrap.sc_team_posts .post_title a,
    .related_wrap.related_style_classic .post_title a,
    .nav-links-single .nav-links a .post-title,
    .post_layout_chess .post_title a,
    .copyright-text a,
    .sc_title_accent .sc_button_simple,
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

    .copyright-text a:hover,
    .copyright-text a {
        color: {$colors['text_dark']};
    }
    .comments_list_wrap .comment_author:after,
    .post_meta .post_meta_item:after,
    .post_meta .post_meta_item.post_edit:after,
    .post_meta .vc_inline-link:after {
        border-color: {$colors['text_light_07']};
    }
    .sc_team.sc_team_featured .sc_team_item_subtitle a,
    .sc_promo.sc_promo_default .sc_item_subtitle,
    .post_meta .post_meta_item.post_categories a {
        color: {$colors['extra_text']} !important;
        background-color: {$colors['extra_link']};
    }
    .sc_team.sc_team_featured .sc_team_item_subtitle a:hover,
    .post_meta .post_meta_item.post_categories a:hover {
        color: {$colors['extra_dark']} !important;
        background-color: {$colors['extra_link2']};
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
    .sc_blogger_default_over_centered_simple .sc_item_featured [class*="post_info_"] .post_meta:not(.post_meta_categories) a:hover {
      color: {$colors['text_link']} !important;
    }    
    .slider_container .slide_info .post_meta .post_meta_item:after {
        border-color: {$colors['inverse_link']} !important;
    }
    .slider_container .slide_info .post_meta *,    
    .slider_container .slide_info .post_meta, 
    .slider_container .slide_info .slide_title a:hover,
    .slider_container .slide_info .slide_title a {
        color: {$colors['inverse_link']} !important;
    }
    .slider_container .slide_info .slide_cats a {
        color: {$colors['extra_text']} !important;
    }
   
    .slider_container .slide_info .slide_cats a:hover {
        color: {$colors['extra_dark']} !important;
    }
    .slider_container .slide_info .slide_title a {
        background-image: linear-gradient(to right,{$colors['inverse_link']} 0%,{$colors['inverse_link']} 100%) !important;
    }
    
    .sc_slider_controls .slider_controls_wrap > a, 
    .slider_container.slider_controls_side .slider_controls_wrap > a, 
    .slider_outer_controls_side .slider_controls_wrap > a, 
    .slider_outer_controls_outside .slider_controls_wrap > a {
        color: {$colors['text_dark']};
		border-color: {$colors['bd_color']};
		background-color: transparent;
    }
    .sc_slider_controls .slider_controls_wrap > a:hover, 
    .slider_container.slider_controls_side .slider_controls_wrap > a:hover, 
    .slider_outer_controls_side .slider_controls_wrap > a:hover, 
    .slider_outer_controls_outside .slider_controls_wrap > a:hover {
        color: {$colors['text_dark']};
		border-color: {$colors['text_link']};
		background-color: {$colors['text_link']};
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
	.widget_twitter .widget_content .sc_twitter_item .sc_twitter_item_icon {
	    color: {$colors['text_hover3']} !important;
	}
	.widget_twitter .widget_content .sc_twitter_item .sc_twitter_item_content a {
	    color: {$colors['text_hover3']} !important;
	}
	.widget_twitter .widget_content .sc_twitter_item .sc_twitter_item_content a:hover {
	    color: {$colors['text']} !important;
	}
	.widget_twitter_follow {
		border-color: {$colors['text_hover3']} !important;
		color: {$colors['text_hover3']} !important; 
	}
	.post_item_single .post_content .post_tags a {
	color: {$colors['text']};
	background-color: {$colors['alter_bg_color']};
}
    .post_item_single .post_content .post_tags a:hover {
        color: {$colors['extra_text']};
        background-color: {$colors['extra_link']};
    }
    .related_wrap + .show_comments_wrap {
        border-color: {$colors['bd_color']};
    }
    .sc_edd_details .downloads_page_tags .downloads_page_data > a,
    .widget_product_tag_cloud a,
    .widget_tag_cloud a {
        color: {$colors['text']};
        background-color: {$colors['alter_bg_color']};
    }
    .sc_edd_details .downloads_page_tags .downloads_page_data > a:hover,
    .widget_product_tag_cloud a:hover,
    .widget_tag_cloud a:hover {
        color: {$colors['extra_text']} !important;
        background-color: {$colors['extra_link']};
    }
    .sc_team .sc_team_item_thumb .sc_team_item_socials .social_item:hover .social_icon {
        color: {$colors['extra_text']};
        background-color: {$colors['extra_dark']};
    }
    .sticky {
        color: {$colors['extra_light']} !important;
        border-color: {$colors['extra_bg_color']};
        background-color: {$colors['extra_bg_color']};	
    }
    .trx_addons_audio_player.without_cover,
    .format-audio .post_featured.without_thumb .post_audio {
        border-color: transparent;
    }
    .post_layout_chess {
        background-color: {$colors['bg_color']};
    }
    .blabber_shop_mode_buttons a:hover,
    .shop_mode_thumbs .blabber_shop_mode_buttons a.woocommerce_thumbs,
    .shop_mode_list .blabber_shop_mode_buttons a.woocommerce_list {
        color: {$colors['extra_text']} !important;
    }
    form.mc4wp-form input[type="checkbox"] + label:before {
        border-color: {$colors['text_light']};
    }
    .woocommerce table.shop_table td span.amount .woocommerce-Price-currencySymbol,
    .woocommerce table.shop_table td span.amount {
        color: {$colors['text_dark']} !important;
    }
    .woocommerce .woocommerce-message a,
    .woocommerce .woocommerce-info a,
    #add_payment_method .cart-collaterals .shipping-calculator-button,
    .woocommerce-cart .cart-collaterals .shipping-calculator-button,
    .woocommerce-checkout .cart-collaterals .shipping-calculator-button {
        color: {$colors['text_dark']} !important;
    }
    .woocommerce .woocommerce-message a:hover,
    .woocommerce .woocommerce-info a:hover,
    #add_payment_method .cart-collaterals .shipping-calculator-button:hover,
    .woocommerce-cart .cart-collaterals .shipping-calculator-button:hover,
    .woocommerce-checkout .cart-collaterals .shipping-calculator-button:hover {
        color: {$colors['text_link2']} !important;
    }
    .widget_calendar #prev a,
    .widget_calendar #next a,
    .widget_calendar caption,
    .sc_icons .sc_icons_item_title,
    .sc_skills .sc_skills_total {
        color: {$colors['text_link2']};
    }
    .comments_list_wrap .comment_reply a {
        color: {$colors['text_link2']};
    }
    .comments_list_wrap .comment_reply a:hover {
        color: {$colors['text_hover2']};
    }
    .sc_item_subtitle,
    .nav-links-single .nav-links .screen-reader-text:hover,
    .nav-links-single .nav-links .screen-reader-text,
    .nav-links-single .nav-links a:hover .screen-reader-text {
        color: {$colors['text_link2']} !important;
    }
    .sc_price_item .sc_price_item_price {
        color: {$colors['extra_text']} !important;
        background-color: {$colors['extra_link']};	
    }
    .widget_price_filter .price_label span,
    .woocommerce div.product .product_meta span,
    .woocommerce div.product p.price,
    .woocommerce div.product span.price,
    .woocommerce span.amount,
    .woocommerce-page span.amount {
        color: {$colors['text_link2']};
    }
    .woocommerce table.cart td+td a:hover,
    .woocommerce #content table.cart td+td a:hover,
    .woocommerce-page table.cart td+td a:hover,
    .woocommerce-page #content table.cart td+td a:hover{
        color: {$colors['text_link2']};
    }
    .star-rating span,
    .star-rating:before,
    .woocommerce ul.products li.product .post_header a:hover h2,
    .woocommerce ul.products li.product .post_header a:hover {
        color: {$colors['text_link2']};
    }
    figure figcaption,
    .wp-caption .wp-caption-text,
    .wp-caption .wp-caption-dd,
    .wp-caption-overlay .wp-caption .wp-caption-text,
    .scheme_default .wp-caption-overlay .wp-caption .wp-caption-dd {
        color: {$colors['text_dark']} !important;
        background-color: transparent !important;
    }
    .wpgdprc-checkbox label input[type="checkbox"]:checked:before {
        color: {$colors['text_dark']};
    }
    .extra-row .sc_blogger .sc_item_title_style_default .sc_item_title_text:after,
    .extra-row .widget .sc_item_title_style_default .sc_item_title_text:after {
        background-color: {$colors['bd_color']};
    }
    .extra-row .sc_blogger, .extra-row .widget {
        border-color: {$colors['bd_color']};
    }
CSS;
		}

		return $css;
	}
}

