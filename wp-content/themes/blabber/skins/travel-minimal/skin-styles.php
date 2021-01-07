<?php
// Add skin-specific colors and fonts to the custom CSS
if ( ! function_exists( 'blabber_skin_get_css' ) ) {
	add_filter( 'blabber_filter_get_css', 'blabber_skin_get_css', 10, 2 );
	function blabber_skin_get_css( $css, $args ) {

		if ( isset( $css['fonts'] ) && isset( $args['fonts'] ) ) {
			$fonts         = $args['fonts'];
			$css['fonts'] .= <<<CSS
    
    
    em {
    	{$fonts['p_font-family']}
    }
    
    
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
    
    .woocommerce #reviews #comments ol.commentlist li .comment-text p.meta strong, 
    .woocommerce-page #reviews #comments ol.commentlist li .comment-text p.meta strong,
    
    .sc_price_item .sc_price_item_price,
    .widget .widget_title, .widget .widgettitle,
    .sc_item_title_style_accent,
    .sc_blogger_list_simple_num .sc_item_posts_container .sc_blogger_item:before,
    .sc_edd_details .downloads_page_tags .downloads_page_data > a, .widget_product_tag_cloud a, .widget_tag_cloud a,
	.comments_list_wrap .comment_author, .comments_list_wrap .comment_posted,
    .single-product .related > h2, .page_contact_form .page_contact_form_title, .related_wrap .section_title.related_wrap_title,
    .trx_addons_reviews_block_detailed .trx_addons_reviews_block_buttons .trx_addons_reviews_block_subtitle,
    .trx_addons_reviews_block_detailed .trx_addons_reviews_block_criterias .trx_addons_reviews_block_subtitle,
    .trx_addons_reviews_block_detailed .trx_addons_reviews_block_pn .trx_addons_reviews_block_subtitle,
    .trx_addons_reviews_block_mark_text,
    .trx_addons_reviews_block_mark_value,
    .sc_skills_pie.sc_skills_compact_off .sc_skills_item_title,
    .copyright-text,
    .breadcrumbs,
    .sc_promo.sc_promo_default .sc_item_subtitle {        
        {$fonts['info_font-family']}
    }
    

CSS;
		}

		if ( isset( $css['vars'] ) && isset( $args['vars'] ) ) {
			$vars         = $args['vars'];
			extract( $vars );

			$css['vars'] .= <<<CSS

			body.sidebar_hide.body_style_wide:not(.expand_content) [class*="content_wrap"] > .content {	width: calc($content + 160px); }		
			body.sidebar_hide.body_style_wide:not(.expand_content) header .sc_layouts_title.without_image {	max-width: calc($content + 160px); }	

CSS;
		}

		if ( isset( $css['colors'] ) && isset( $args['colors'] ) ) {
			$colors         = $args['colors'];
			$css['colors'] .= <<<CSS

    input[type="submit"],
    input[type="reset"],
    input[type="button"] {
        color: {$colors['extra_dark']};
        background-color: {$colors['text_link']};
    }
    table th {
        color: {$colors['extra_dark']};
        background-color: {$colors['inverse_dark']};
    }
    table th,
    table th + th,
    table td + th {
        border-color: {$colors['inverse_bd_color']};
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
    
    
    input[type="submit"]:hover,
    input[type="reset"]:hover,
    input[type="button"]:hover {
        color: {$colors['bg_color']};
        background-color: {$colors['text_hover']};
    }

    .comments_wrap .form-submit input[type="submit"]{
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
    
    .sc_blogger_news_announce .sc_item_featured [class*="post_info_"] .entry-title a,
    .sc_blogger.sc_blogger_list .sc_blogger_item_title a,
    .sc_blogger.sc_blogger_default .sc_blogger_item_title a,
    .related_wrap.sc_team_posts .post_title a,
    .related_wrap.related_style_classic .post_title a,
    .related_wrap.related_style_modern .post_title a,
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
    .sc_blogger_news_announce .sc_item_featured [class*="post_info_"] .entry-title a,
    .sticky .post_title a,
    .sticky .post_sticky_wrap .post_title a {
	    color: {$colors['extra_dark']} !important;
	    background-image: linear-gradient(to right,{$colors['extra_dark']} 0%,{$colors['extra_dark']} 100%);
     }    
     .sticky {
        background-color: {$colors['inverse_dark']};
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
    .sc_promo.sc_promo_default .sc_item_subtitle {
        color: {$colors['inverse_link']};
        background-color: {$colors['text_link']};
    }
    .post_meta_item.post_categories a,
    .post_meta_categories.post_meta .post_meta_item.post_categories a,
    .cat_top.post_meta .post_meta_item.post_categories a {
        color: {$colors['inverse_link']};
        background-color: {$colors['text_link']};
    }
    .post_meta_item.post_categories a:hover,
    .post_meta_categories.post_meta .post_meta_item.post_categories a:hover,
    .cat_top.post_meta .post_meta_item.post_categories a:hover {
        color: {$colors['bg_color']};
        background-color: {$colors['text_hover']};
    }
    
    .sc_team.sc_team_featured .sc_team_item_subtitle a:hover {
        color: {$colors['bg_color']};
        background-color: {$colors['text_hover']};
    }	
    .sticky .post_meta.cat_top .post_meta_item.post_categories a:hover {
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
    .sc_item_featured .post_meta_item:not(.post_categories) a,
    .sc_item_featured .post_meta_item:not(.post_categories) {
        color: {$colors['extra_dark']} !important;
    }
    .sc_item_featured .post_meta_item:not(.post_categories) a:hover {
        color: {$colors['text_link']} !important;
    }
    .sc_item_featured .post_meta_item.post_categories a,
    .sc_blogger_list .post_meta .post_meta_item.post_categories a {
        background-color: {$colors['text_link']} !important;
        color: {$colors['extra_dark']} !important;
    }
    .sc_item_featured .post_meta_item.post_categories a:hover,
    .sc_blogger_list .post_meta .post_meta_item.post_categories a:hover {
        background-color: {$colors['alter_hover']} !important;
        color: {$colors['extra_link2']} !important;
    }
    
    .sc_blogger_news_announce .post_meta_item.post_meta_rating,
    .related_wrap.related_style_modern .post_featured .post_meta.rating .post_meta_rating {
        background-color: {$colors['text_link']} !important;
        color: {$colors['extra_dark']} !important;
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
    
    .sticky blockquote, 
    .sticky blockquote p, 
    .sticky blockquote:not(.has-text-color), 
    .sticky blockquote:not(.has-text-color) p, 
    .sticky .wp-block-quote .wp-block-quote__citation {
    	color: {$colors['extra_text']} !important;
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
		color: {$colors['alter_link']};
	}
	.sc_layouts_menu_nav .menu-collapse > a:hover:after,
	.sc_layouts_menu_nav .menu-collapse > a:focus:after {
		background-color: {$colors['alter_bg_hover']};
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
	.sc_layouts_menu_nav > li li.current-menu-item > a,
	.sc_layouts_menu_nav > li li.current-menu-parent > a,
	.sc_layouts_menu_nav > li li.current-menu-ancestor > a {
		color: {$colors['text_link']} !important;
	}
		
	.menu_mobile_inner .social_item .social_icon span:before {
		color: {$colors['text_dark']} !important;
	}
	.menu_mobile_inner .social_item:hover .social_icon span:before {
		color: {$colors['text_link']} !important;
	}
	
	.nav-links-more a,
	.woocommerce-links-more a {
		color: {$colors['inverse_link']};
        background-color: {$colors['text_link']};
	}
	.nav-links-more a:hover,
	.woocommerce-links-more a:hover {       
        color: {$colors['bg_color']};
        background-color: {$colors['text_hover']};
	}
		
	
	.minimal-light .esg-navigationbutton,
    .show_comments {
        border-color: {$colors['text_link']} !important;
        color: {$colors['inverse_link']} !important;
        background-color: {$colors['text_link']} !important;
    }
    .minimal-light .esg-navigationbutton:hover,
    .show_comments:hover {
        color: {$colors['bg_color']} !important;
        background-color: {$colors['text_hover']} !important;
        border-color: {$colors['text_hover']} !important;
    }
    .minimal-light .esg-navigationbutton.sc_button_hover_strike .strike-text,
    .show_comments.sc_button_hover_strike .strike-text {
    	color: {$colors['bg_color']} !important;
        background-color: {$colors['text_hover']} !important;
        border-color: {$colors['text_hover']} !important;
    }
    
        
	.trx_addons_reviews_block_detailed .trx_addons_reviews_block_title,
    .trx_addons_reviews_block_short .trx_addons_reviews_block_title {
		color: {$colors['bg_color']};
        background-color: {$colors['text_hover']};
	}
	.trx_addons_reviews_block_short .trx_addons_reviews_block_mark_value {
		background-color: {$colors['alter_bg_color']};
	}
	.trx_addons_reviews_block_detailed .trx_addons_reviews_block_criterias .trx_addons_reviews_block_list_title,
	.trx_addons_reviews_block_detailed .trx_addons_reviews_block_pn .trx_addons_reviews_block_list li:before,
	.trx_addons_reviews_block_detailed .trx_addons_reviews_block_summary,
	.trx_addons_reviews_block_short .trx_addons_reviews_block_info .trx_addons_reviews_block_attributes_row_type_text .trx_addons_reviews_block_attributes_title {
		color: {$colors['text']};
	}
	.trx_addons_reviews_block_detailed .trx_addons_reviews_block_pn .trx_addons_reviews_block_subtitle,
	.trx_addons_reviews_block_short .trx_addons_reviews_block_info .trx_addons_reviews_block_attributes_row_type_text .trx_addons_reviews_block_attributes_value {
  		color: {$colors['text_dark']};
	}    
    .trx_addons_reviews_block_detailed .trx_addons_reviews_block_pn {
    	color: {$colors['text']};
		background-color: {$colors['alter_bg_color']};
		border-color: {$colors['bd_color']};
	}	
	.trx_addons_reviews_block_detailed,	
    .trx_addons_reviews_block_detailed .trx_addons_reviews_block_info .trx_addons_reviews_block_mark .trx_addons_reviews_block_mark_value,
    .trx_addons_reviews_block_detailed .trx_addons_reviews_block_info {
    	background-color: {$colors['bg_color']};
    }
    .trx_addons_reviews_block_detailed .trx_addons_reviews_block_title,
    .trx_addons_reviews_block_detailed,
    .trx_addons_reviews_block_detailed .trx_addons_reviews_block_info,
    .trx_addons_reviews_block_short .trx_addons_reviews_block_info {
    	border-color: {$colors['bd_color']};
    }
    
    .post_item_single .post_content > .post_meta_single:before {
    	color: {$colors['text_dark']};
    }
    
    .sc_layouts_title .sc_layouts_title_breadcrumbs a:hover {
    	color: {$colors['text_link']};
    }
    .related_wrap.related_style_modern .post_featured .post_meta .post_meta_item:not(.post_categories),
    .related_wrap.related_style_modern:hover .post_featured .post_meta .post_meta_item:not(.post_categories) a,
    .related_wrap.related_style_modern .post_featured .post_meta .post_meta_item:not(.post_categories) a {
        color: {$colors['extra_dark']} !important;
    }
    
    .related_wrap.related_style_modern:hover .post_featured .post_meta .post_meta_item:not(.post_categories) a:hover,
    .related_wrap.related_style_modern .post_featured .post_meta .post_meta_item:not(.post_categories) a:hover {
        color: {$colors['extra_link']} !important;
    }
    
    .related_wrap.related_style_modern:hover .post_meta .post_categories a,
    .related_wrap.related_style_modern .post_meta .post_categories a {
    	color: {$colors['extra_dark']} !important;
    	background-color: {$colors['text_link']};
    }
    .related_wrap.related_style_modern:hover .post_meta .post_categories a:hover,
    .related_wrap.related_style_modern .post_meta .post_categories a:hover {
    	color: {$colors['extra_link2']} !important;
    	background-color: {$colors['text_hover']};
    }
    
    .single-product .related > h2, .page_contact_form .page_contact_form_title, .related_wrap .section_title.related_wrap_title {
    	color: {$colors['text_light']};
    }
    
    .post_item_single .post_content > .post_meta_single .post_share .social_item:hover {
        background-color: {$colors['text_hover']};
    }
        
    article + .related_wrap,
    .show_comments_wrap {
    	border-color: {$colors['bd_color']};
    }
    
    .comments_list_wrap .comment_author a,
    .comments_list_wrap .comment_author {
    	color: {$colors['text_link']};
    }
    .comments_list_wrap .comment_author a:hover {
    	color: {$colors['text_light']};
    }
    .comments_list_wrap .comment_author:after {
    	color: {$colors['text_light']};
    }
    
    .comments_list_wrap .comment_reply a {
    	color: {$colors['text_dark']};
    }
    .comments_list_wrap .comment_reply a:hover {
    	color: {$colors['text_link']};
    }
    	
	.single_style_out-over-fullwidth .post_header_wrap.with_featured_image .post_header a:hover *,
	.single_style_out-over-fullwidth .post_header_wrap.with_featured_image .post_header a:focus *,
	.single_style_out-over-fullwidth .post_header_wrap.with_featured_image .post_header a.post_meta_item:hover {
	    color: {$colors['text_link']};
	}
	.single_style_out-over-fullwidth .post_header_wrap.with_featured_image .post_header .post_categories a {
		color: {$colors['extra_dark']};
		background-color: {$colors['text_link']};
	}
	.single_style_out-over-fullwidth .post_header_wrap.with_featured_image .post_header .post_categories a:hover {
		color: {$colors['extra_link2']};
		background-color: {$colors['text_hover']};
	}
	
	.widget .widget_title, .widget .widgettitle,
	.sc_item_title.sc_item_title_style_accent {
		color: {$colors['text_link']};
	}	
	.sc_blogger_list_simple_num .sc_item_posts_container .sc_blogger_item:before {
		color: {$colors['extra_link2']};
		background-color: {$colors['text_hover']};
	}
	
	
	.sc_blogger_news_announce .post_date a {
		color: {$colors['text_light']};
	}
	
	
	.product .post_featured.hover_shop_buttons .mask {
		background-color: {$colors['bg_color_09']};
	}
	.footer_wrap .copyright-text  {
	    color: {$colors['text_link']};
	}
	.trx_addons_reviews_stars_hover,
	.trx_addons_reviews_stars_default {
	    color: {$colors['text_dark']};
	}
	.post_item_single .post_content .post_tags a:hover {
	    background-color: {$colors['text_hover']};
	}
	.trx_addons_demo_options_wrapper .trx_addons_demo_options_toolbar {
	    background-color: {$colors['bg_color']};
	}
	
	.sc_slider_controls .slider_controls_wrap > a,
    .slider_container.slider_controls_side .slider_controls_wrap > a,
    .slider_outer_controls_side .slider_controls_wrap > a,
    .slider_outer_controls_outside .slider_controls_wrap > a {
        color: {$colors['extra_dark']};
        background-color: {$colors['inverse_dark']};
        border-color: {$colors['inverse_dark']};
    }
    .sc_slider_controls .slider_controls_wrap > a:hover,
    .slider_container.slider_controls_side .slider_controls_wrap > a:hover,
    .slider_outer_controls_side .slider_controls_wrap > a:hover,
    .slider_outer_controls_outside .slider_controls_wrap > a:hover {
        color: {$colors['text_hover']};
        background-color: {$colors['bg_color']};
        border-color: {$colors['bg_color']};
    }
    .sc_price_item .sc_price_item_price {
        color: {$colors['extra_dark']};
        background-color: {$colors['text_link']};
    }
    .widget_calendar td#today:before {
        background-color: {$colors['text_hover']};
    }

    .esg-filters div.esg-navigationbutton,
    .woocommerce nav.woocommerce-pagination ul li a,
    .page_links > a,
    .comments_pagination .page-numbers,
    .nav-links .page-numbers {
        color: {$colors['text_hover']};
        background-color: {$colors['extra_link2']};
        border-color: {$colors['text_hover']};
    }
    .esg-filters div.esg-navigationbutton:hover,
    .esg-filters div.esg-navigationbutton.selected,
    .woocommerce nav.woocommerce-pagination ul li a:hover,
    .woocommerce nav.woocommerce-pagination ul li span.current,
    .page_links > a:hover,
    .page_links > span:not(.page_links_title),
    .comments_pagination a.page-numbers:hover,
    .comments_pagination .page-numbers.current,
    .nav-links a.page-numbers:hover,
    .nav-links .page-numbers.current {
        color: {$colors['extra_link2']};
        background-color: {$colors['text_hover']};
        border-color: {$colors['text_hover']};
    }
    input[type="radio"] + label:before,
    input[type="checkbox"] + label:before,
    input[type="radio"] + .wpcf7-list-item-label:before,
    input[type="checkbox"] + .wpcf7-list-item-label:before,
    .wpgdprc-checkbox label input[type="checkbox"]:before {
        color: {$colors['text_dark']};
    }
    .single-product div.product .woocommerce-tabs .wc-tabs li a {
        color: {$colors['text_hover']};
    }
    .single-product div.product .woocommerce-tabs .wc-tabs li.active a {
        color: {$colors['extra_link2']};
        background-color: {$colors['text_hover']};
    }
    .sc_icons_extra .sc_icons_icon {
        color: {$colors['extra_dark']};
        background-color: {$colors['inverse_dark']};
    }
    .sc_team_default .sc_team_item_socials .social_item .social_icon,
    .team_member_page .team_member_socials .social_item .social_icon {
        color: {$colors['extra_hover2']};
        background-color: transparent;
        border-color: {$colors['extra_hover2']};
    }
    .sc_team_default .sc_team_item_socials .social_item:hover .social_icon,
    .team_member_page .team_member_socials .social_item:hover .social_icon {
        color: {$colors['extra_link2']};
        background-color: {$colors['extra_hover2']};
        border-color: {$colors['extra_hover2']};
    }
    .comments_list_wrap .bypostauthor > .comment_body .comment_author_avatar:after {
        border-color: {$colors['inverse_dark']};
    }
CSS;
		}

		return $css;
	}
}

