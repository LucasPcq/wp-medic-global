<?php
// Add skin-specific colors and fonts to the custom CSS
if ( ! function_exists( 'blabber_skin_get_css' ) ) {
	add_filter( 'blabber_filter_get_css', 'blabber_skin_get_css', 10, 2 );
	function blabber_skin_get_css( $css, $args ) {

		if ( isset( $css['fonts'] ) && isset( $args['fonts'] ) ) {
			$fonts         = $args['fonts'];
            $fonts['h5_font-family!'] = str_replace(';', ' !important;', $fonts['h5_font-family']);
			$css['fonts'] .= <<<CSS

    span.wpcf7-not-valid-tip,
    .widget li {
        {$fonts['h4_font-family']}
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
    .widget_recent_posts .post_item.with_thumb .post_thumb:before,
    .sc_twitter_default .sc_twitter_item_content,
    .sc_promo.sc_promo_default .sc_item_subtitle {        
        {$fonts['p_font-family']}
    }
    .widget_recent_comments ul li,
    .audio_description, 
    .elementor-counter .elementor-counter-title, 
    .elementor-counter .elementor-counter-number-wrapper, 
    .breadcrumbs,
    .sc_edd_details .downloads_page_tags .downloads_page_data>a, 
    .widget_product_tag_cloud a, 
    .widget_tag_cloud a, 
    .recentcomments, 
    .wpcf7 div.wpcf7-response-output, 
    .wpcf7-form label, 
    form.mc4wp-form label, 
    .wpcf7-acceptance label, 
    .wpgdprc-checkbox label, 
    figure figcaption, .wp-caption .wp-caption-text, 
    .wp-caption .wp-caption-dd, 
    .wp-caption-overlay .wp-caption .wp-caption-text, 
    .wp-caption-overlay .wp-caption .wp-caption-dd{
        {$fonts['info_font-family']}
    }
    
    input[type="radio"] + label, 
    input[type="checkbox"] + label, 
    input[type="radio"] + .wpcf7-list-item-label, 
    input[type="checkbox"] + .wpcf7-list-item-label, 
    .edd_price_options ul > li > label > input[type="radio"] + span, 
    .edd_price_options ul > li > label > input[type="checkbox"] + span{
        {$fonts['info_font-family']}
    }
    .sc_layouts_menu_nav>li>a{
        {$fonts['menu_font-family']}
        {$fonts['menu_font-size']}
        {$fonts['menu_font-weight']}
        {$fonts['menu_font-style']}
        {$fonts['menu_line-height']}
        {$fonts['menu_text-decoration']}
        {$fonts['menu_text-transform']}
        {$fonts['menu_letter-spacing']}
    }
    .search_wrap.search_style_expand  input[placeholder],
    .search_wrap.search_style_expand .search_submit,
    .sc_layouts_menu_mobile_button_burger:not(.without_menu) .burger-text{
        {$fonts['button_font-family']}
        {$fonts['h5_font-size']}
        {$fonts['button_font-weight']}
    }
    
    .sc_team.sc_team_featured .sc_team_item_subtitle a,
    .sc_promo.sc_promo_default .sc_item_subtitle,
    .woocommerce ul.products li.product .post_header > a,
    .widget_twitter .widget_twitter_follow{
        {$fonts['p_font-family']}
    }
    .wprm-recipe-servings-container > span, 
    .wprm-recipe-nutrition-container > span, 
    .wprm-recipe-times-container > .wprm-recipe-time-container > span{
        {$fonts['p_font-family']}
    }
    
    body .wprm-recipe-template-classic .wprm-recipe-name, 
    body .wprm-recipe-template-classic .wprm-recipe-header,
    body .wprm-recipe-template-classic h2{
        {$fonts['h4_font-family']}
        {$fonts['h4_font-size']}
        {$fonts['h4_font-weight']}
        {$fonts['h4_font-style']}
        {$fonts['h4_line-height']}
        {$fonts['h4_text-decoration']}
        {$fonts['h4_text-transform']}
        {$fonts['h4_letter-spacing']}
    }
    
    .woocommerce ul.products li.product .price,
    .comments_list_wrap .comment_author{
        {$fonts['info_font-family']}
    }
    
    .comments_list_wrap .comment_reply{
        {$fonts['h6_font-family']}
    }
    .sc_blogger_default.sc_blogger_default_over_centered_middle .sc_blogger_item_title,
    .slider_titles_outside_wrap .slide_title{
        {$fonts['h1_font-family']}
        {$fonts['h1_font-size']}
        {$fonts['h1_font-weight']}
        {$fonts['h1_font-style']}
        {$fonts['h1_line-height']}
        {$fonts['h1_text-decoration']}
        {$fonts['h1_text-transform']}
        {$fonts['h1_letter-spacing']}
    }
    
    .sc_layouts_title_caption{
        {$fonts['h1_font-family']}
        {$fonts['h1_font-size']}
        {$fonts['h1_font-weight']}
        {$fonts['h1_font-style']}
        {$fonts['h1_line-height']}
        {$fonts['h1_text-decoration']}
        {$fonts['h1_text-transform']}
        {$fonts['h1_letter-spacing']}
    }
    .single-post .sc_layouts_title_caption{
        {$fonts['h2_font-family']}
        {$fonts['h2_font-size']}
        {$fonts['h2_font-weight']}
        {$fonts['h2_font-style']}
        {$fonts['h2_line-height']}
        {$fonts['h2_text-decoration']}
        {$fonts['h2_text-transform']}
        {$fonts['h2_letter-spacing']}
    }
    body .wprm-recipe-template-classic .wprm-recipe-header{
        {$fonts['p_font-size']}
    }
    input[type="text"], input[type="number"], 
    input[type="email"], input[type="url"], 
    input[type="tel"], input[type="search"], 
    input[type="password"], textarea, 
    textarea.wp-editor-area, .select_container, 
    select, .select_container select {
        {$fonts['info_font-weight']}
    }
    .trx_addons_dropcap,
    .widget_price_filter .price_slider_amount,
    .woocommerce .widget_shopping_cart .total strong,
    .woocommerce.widget_shopping_cart .total strong,
    .woocommerce.widget_shopping_cart .quantity,
    .woocommerce .widget_shopping_cart .quantity,
    .woocommerce-page.widget_shopping_cart .quantity,
    .woocommerce-page .widget_shopping_cart .quantity,
    .woocommerce ul.products li.product .price,
    .woocommerce-page ul.products li.product .price,
    .woocommerce ul.products li.product .price ins,
    .woocommerce-page ul.products li.product .price ins,
    .woocommerce div.product p.price,
    .woocommerce div.product span.price,
    .woocommerce span.amount,
    .woocommerce-page span.amount,
    .sc_price_item_subtitle,
    .sc_price_item_price,
    .sc_icons_item_title,
    .sc_skills_counter .sc_skills_total,
    div.esg-filters, .woocommerce nav.woocommerce-pagination ul, .comments_pagination,
    .nav-links, .page_links, body .mejs-container *,
    mark, ins, .logo_text, .theme_scroll_down {
          {$fonts['p_font-family']}
    }
    .post_price.price,
    blockquote,
    .woocommerce .post_item_single div.product div.summary p.price,
    .woocommerce .post_item_single div.product div.summary p.price .amount,
    .woocommerce ul.products li.product .price .amount,
    .woocommerce-page ul.products li.product .price .amount,
    .woocommerce ul.products li.product .price,
    .woocommerce-page ul.products li.product .price,
    .sc_skills_counter .sc_skills_item_title,
    .widget_recent_comments ul li a,
    .search_wrap.search_style_expand .search_submit span,
    .sc_layouts_menu_mobile_button_burger:not(.without_menu) .burger-text {
        {$fonts['h5_font-family']}
    }
    .breadcrumbs .breadcrumbs_item,
    .breadcrumbs {
         {$fonts['info_letter-spacing']}
    }
    .trx_addons_reviews_block_criterias .trx_addons_reviews_block_subtitle,
    .trx_addons_reviews_block_pn .trx_addons_reviews_block_subtitle,
    .trx_addons_reviews_block_info .trx_addons_reviews_block_mark_wrap .trx_addons_reviews_block_mark_text,
    .woocommerce-variation-price .price .amount {
        {$fonts['h5_font-family!']}
    }
    .woocommerce ul.cart_list li dl, 
    .woocommerce-page ul.cart_list li dl, 
    .woocommerce ul.product_list_widget li dl, 
    .woocommerce-page ul.product_list_widget li dl,
    blockquote > .wp-block-pullquote__citation,
    .wp-block-quote .wp-block-quote__citation, blockquote > p > cite,
    .wp-block-pullquote__citation, blockquote > cite,
    .single-product div.product .woocommerce-tabs .wc-tabs li a,
    .widget_calendar td#prev a,
    .widget_calendar td#next a,
    .widget_calendar caption,
    .sc_title_accent .sc_button_simple,
    .widget_price_filter .price_slider_amount .price_label,
    .widget_price_filter .price_slider_amount .from,
    .widget_price_filter .price_slider_amount .to,
    .wprm-recipe-instruction-text,
    .wprm-recipe-ingredient-group,
    .wprm-recipe-ingredient-group .wprm-recipe-ingredient span,
    .wprm-recipe-summary {
        {$fonts['p_font-family']}
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
    table:not(#wp-calendar) tr:nth-child(2n) td {
        background-color: {$colors['alter_bg_color_06']};
    }
    table:not(#wp-calendar) tr:nth-child(2n+1) td {
        background-color: {$colors['alter_bg_color_04']};
    }
    
    .woocommerce div.product form.cart table.variations td.value,
    .woocommerce div.product form.cart table.variations td.label,
    .woocommerce div.product form.cart table.variations th {
        background-color: {$colors['bg_color']} !important;
    }
    table:not(#wp-calendar) td,
    table:not(#wp-calendar) th,
    table:not(#wp-calendar) th + th,
    table:not(#wp-calendar) td + th,
    table:not(#wp-calendar) th + td,
    table:not(#wp-calendar) td + td {
        border-color: {$colors['alter_bd_color_01']} !important;
    }
    table th {
        color: {$colors['extra_hover3']};
        background-color: {$colors['extra_bg_color']};
    }
    figure figcaption,
    .wp-caption .wp-caption-text,
    .wp-caption .wp-caption-dd,
    .wp-caption-overlay .wp-caption .wp-caption-text,
    .wp-caption-overlay .wp-caption .wp-caption-dd {
        background-color: {$colors['bg_color']} !important;
    }
   .sc_layouts_menu_nav > li > a{
        color: {$colors['text_dark']} !important;
   }
   .sc_layouts_menu_nav > li.current-menu-parent > a,
   .sc_layouts_menu_nav > li.current-menu-ancestor > a {
    color: {$colors['text_link']} !important;
   }
   .sc_layouts_menu_nav>li>a:hover, 
   .sc_layouts_menu_nav>li.sfHover>a,
   .sc_layouts_menu_nav > li > a:hover{
        color: {$colors['text_link']} !important;
   }
   .sc_layouts_menu_nav .menu-collapse>a:before {
        color: {$colors['text_link']};
   }
   .sc_layouts_menu_popup .sc_layouts_menu_nav > li > a,
   .sc_layouts_menu_nav > li li > a {
        color: {$colors['text_link']} !important;
   }
   .sc_layouts_menu_nav>li li[class*="icon-"]:hover:before,
   .sc_layouts_menu_nav>li li[class*="icon-"].shHover:before,
   .sc_layouts_menu_popup .sc_layouts_menu_nav > li > a:hover,
   .sc_layouts_menu_popup .sc_layouts_menu_nav > li.sfHover>a,
   .sc_layouts_menu_nav > li li > a:hover,
   .sc_layouts_menu_nav > li li.sfHover>a,
   .sc_layouts_menu_nav > li li.current-menu-item > a,
   .sc_layouts_menu_nav > li li.current-menu-parent > a,
   .sc_layouts_menu_nav > li li.current-menu-ancestor > a {
        color: {$colors['text_dark']} !important;
   }
   .sc_layouts_menu_mobile_button_burger:not(.without_menu) .sc_layouts_iconed_text_link,
   .sc_layouts_row_type_narrow .sc_layouts_item_icon,
   .sc_layouts_row_type_narrow .search_wrap .search_submit {
        color: {$colors['text_dark']};
   }
   .search_wrap .search_submit:before {
     color: {$colors['text_link']};
   }
   .search_wrap .search_submit:hover:before {
     color: {$colors['text_hover']};
   }
   .search_style_expand .search_submit:hover,
   .search_style_expand .search_submit:hover:before,
   .sc_layouts_item_icon:hover, 
   .sc_layouts_menu_mobile_button_burger:not(.without_menu) .sc_layouts_iconed_text_link:hover,
   .sc_layouts_row_type_narrow .sc_layouts_item_icon:hover,
   .sc_layouts_row_type_narrow .search_wrap .search_submit:hover{
        color: {$colors['text_hover']};
   }
   .sc_layouts_item_icon, 
   .search_wrap.search_style_expand .search_submit:before {
        color: {$colors['text_dark']};
        background-color: {$colors['alter_bg_color']};
   }
   .sc_layouts_item_icon.sc_layouts_login_icon  {
    background-color: transparent;
   }
   .sc_layouts_menu_mobile_button .sc_layouts_item_icon,
   .sc_layouts_menu_mobile_button_burger .sc_layouts_item_icon {
        color: {$colors['text_link']} !important;
        background-color: {$colors['alter_bg_color']};
   }

   .sc_layouts_menu_mobile_button_burger:not(.without_menu) .sc_layouts_iconed_text_link:hover .sc_layouts_item_icon,
   .sc_layouts_item_link:hover .sc_layouts_item_icon, 
   .search_wrap.search_style_expand .search_submit:hover:before {
        color: {$colors['extra_link']} !important;
        background-color: {$colors['text_link']};
   }
    
    /* Form fields
    -------------------------------------------------- */
    
    .widget_search form:after,
    .woocommerce.widget_product_search form:after,
    .widget_display_search form:after,
    #bbpress-forums #bbp-search-form:after {
        color: {$colors['input_light']};
    }
    .widget_search form:hover:after,
    .woocommerce.widget_product_search form:hover:after,
    .widget_display_search form:hover:after,
    #bbpress-forums #bbp-search-form:hover:after {
        color: {$colors['input_text']};
    }

    /*Blockquote*/
 
    .trx_addons_dropcap_style_1 {
        background-color: {$colors['text_link']};
        color: {$colors['extra_dark']};
    }
	section>blockquote, 
	div:not(.is-style-solid-color)>blockquote, 
	figure:not(.is-style-solid-color)>blockquote{
	      background-color: {$colors['alter_link']};
	}
    /* Normal button */
    form button:not(.components-button),
    input[type="reset"],
    input[type="submit"],
    input[type="button"],
    .post_item .more-link,
    .comments_wrap .form-submit input[type="submit"],
    .wp-block-button:not(.is-style-outline) > .wp-block-button__link,
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
        color: {$colors['extra_dark']};
        background-color: {$colors['text_link']};
        border-color: {$colors['text_link']};
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
        background-color: {$colors['text_hover']};
        border-color: {$colors['text_hover']};
    }
    .woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
    .sc_button_hover_strike.sc_button_bordered{
        color: {$colors['text_link']} !important;
        background-color: transparent !important;
        border-color: {$colors['text_link']} !important;
    }
    .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover,    
    body .sc_button_hover_strike.sc_button_bordered:hover,
    .sc_button_hover_strike .strike-text,
    .sc_button_bordered:not(.sc_button_bg_image):hover, 
    .sc_button_bordered:not(.sc_button_bg_image):focus, 
    .wp-block-button.is-style-outline .wp-block-button__link:hover,
    .wp-block-button.is-style-outline .wp-block-button__link:focus{
        color: {$colors['text_hover2']} !important;
        background-color: {$colors['text_hover']} !important;
        border-color: {$colors['text_hover']} !important;
    }
    .minimal-light .esg-navigationbutton,
    .show_comments {
        color: {$colors['text_link']} !important;
        background-color: transparent !important;
        border-color: {$colors['text_link']} !important;
    }
    .minimal-light .esg-navigationbutton:hover,
    .show_comments:hover {
        color: {$colors['text_hover2']} !important;
        background-color: {$colors['text_hover']} !important;
        border-color: {$colors['text_hover']} !important;
    }
    
    /* Text fields */
    input[type="text"],
    input[type="number"],
    input[type="email"],
    input[type="url"],
    input[type="tel"],
    input[type="password"],
    input[type="search"],
    select,
    textarea,
    textarea.wp-editor-area,
      /* MailChimp */
    form.mc4wp-form .mc4wp-form-fields input[type="email"],
      /* Tour Master */
    .tourmaster-form-field input[type="text"],
    .tourmaster-form-field input[type="email"],
    .tourmaster-form-field input[type="password"],
    .tourmaster-form-field textarea,
    .tourmaster-form-field select,
    .tourmaster-form-field.tourmaster-with-border input[type="text"],
    .tourmaster-form-field.tourmaster-with-border input[type="email"],
    .tourmaster-form-field.tourmaster-with-border input[type="password"],
    .tourmaster-form-field.tourmaster-with-border textarea,
    .tourmaster-form-field.tourmaster-with-border select,
      /* WooCommerce */
    .woocommerce table.cart td.actions .coupon .input-text,
    .woocommerce #content table.cart td.actions .coupon .input-text,
    .woocommerce-page table.cart td.actions .coupon .input-text,
    .woocommerce-page #content table.cart td.actions .coupon .input-text,
      /* BB Press*/
    #buddypress div.dir-search input[type="search"],
    #buddypress div.dir-search input[type="text"],
    #buddypress li.groups-members-search input[type="search"],
    #buddypress li.groups-members-search input[type="text"],
    #buddypress .standard-form input[type="color"],
    #buddypress .standard-form input[type="date"],
    #buddypress .standard-form input[type="datetime-local"],
    #buddypress .standard-form input[type="datetime"],
    #buddypress .standard-form input[type="email"],
    #buddypress .standard-form input[type="month"],
    #buddypress .standard-form input[type="number"],
    #buddypress .standard-form input[type="password"],
    #buddypress .standard-form input[type="range"],
    #buddypress .standard-form input[type="search"],
    #buddypress .standard-form input[type="tel"],
    #buddypress .standard-form input[type="text"],
    #buddypress .standard-form input[type="time"],
    #buddypress .standard-form input[type="url"],
    #buddypress .standard-form input[type="week"],
    #buddypress .standard-form select,
    #buddypress .standard-form textarea,
      /* Give */
    #give-recurring-form .form-row input[type="email"],
    #give-recurring-form .form-row input[type="password"],
    #give-recurring-form .form-row input[type="tel"],
    #give-recurring-form .form-row input[type="text"],
    #give-recurring-form .form-row input[type="url"],
    #give-recurring-form .form-row select,
    #give-recurring-form .form-row textarea,
    form.give-form .form-row input[type="email"],
    form.give-form .form-row input[type="password"],
    form.give-form .form-row input[type="tel"],
    form.give-form .form-row input[type="text"],
    form.give-form .form-row input[type="url"],
    form.give-form .form-row select,
    form.give-form .form-row textarea,
    form[id*="give-form"] .form-row input[type="email"],
    form[id*="give-form"] .form-row input[type="password"],
    form[id*="give-form"] .form-row input[type="tel"],
    form[id*="give-form"] .form-row input[type="text"],
    form[id*="give-form"] .form-row input[type="url"],
    form[id*="give-form"] .form-row select,
    form[id*="give-form"] .form-row textarea,
    form[id*="give-form"] .give-donation-amount #give-amount,
    form[id*="give-form"] .give-donation-amount #give-amount-text,
    form[id*="give-form"] #give-final-total-wrap .give-final-total-amount,
    form[id*="give-form"] .give-donation-amount .give-currency-symbol,
    form[id*="give-form"] .give-donation-amount .give-currency-symbol.give-currency-position-before,
    form[id*="give-form"] .give-donation-amount .give-currency-symbol.give-currency-position-after,
    form[id*="give-form"] #give-final-total-wrap .give-donation-total-label {
        border-color: {$colors['input_bg_color']} !important;
        background-color: {$colors['input_bg_color']} !important;
    }
    /* Text fields */
    input[type="text"]:focus,
    input[type="number"]:focus,
    input[type="email"]:focus,
    input[type="url"]:focus,
    input[type="tel"]:focus,
    input[type="password"]:focus,
    input[type="search"]:focus,
    select:focus,
    textarea:focus,
    textarea.wp-editor-area:focus,
      /* MailChimp */
    form.mc4wp-form .mc4wp-form-fields input[type="email"]:focus,
      /* Tour Master */
    .tourmaster-form-field input[type="text"]:focus,
    .tourmaster-form-field input[type="email"],
    .tourmaster-form-field input[type="password"],
    .tourmaster-form-field textarea:focus,
    .tourmaster-form-field select:focus,
    .tourmaster-form-field.tourmaster-with-border input[type="text"]:focus,
    .tourmaster-form-field.tourmaster-with-border input[type="email"]:focus,
    .tourmaster-form-field.tourmaster-with-border input[type="password"]:focus,
    .tourmaster-form-field.tourmaster-with-border textarea:focus,
    .tourmaster-form-field.tourmaster-with-border select:focus,
      /* WooCommerce */
    .woocommerce table.cart td.actions .coupon .input-text:focus,
    .woocommerce #content table.cart td.actions .coupon .input-text:focus,
    .woocommerce-page table.cart td.actions .coupon .input-text:focus,
    .woocommerce-page #content table.cart td.actions .coupon .input-text:focus,
      /* BB Press*/
    #buddypress div.dir-search input[type="search"]:focus,
    #buddypress div.dir-search input[type="text"]:focus,
    #buddypress li.groups-members-search input[type="search"]:focus,
    #buddypress li.groups-members-search input[type="text"]:focus,
    #buddypress .standard-form input[type="color"]:focus,
    #buddypress .standard-form input[type="date"]:focus,
    #buddypress .standard-form input[type="datetime-local"]:focus,
    #buddypress .standard-form input[type="datetime"]:focus,
    #buddypress .standard-form input[type="email"]:focus,
    #buddypress .standard-form input[type="month"]:focus,
    #buddypress .standard-form input[type="number"]:focus,
    #buddypress .standard-form input[type="password"]:focus,
    #buddypress .standard-form input[type="range"]:focus,
    #buddypress .standard-form input[type="search"]:focus,
    #buddypress .standard-form input[type="tel"]:focus,
    #buddypress .standard-form input[type="text"]:focus,
    #buddypress .standard-form input[type="time"]:focus,
    #buddypress .standard-form input[type="url"]:focus,
    #buddypress .standard-form input[type="week"]:focus,
    #buddypress .standard-form select:focus,
    #buddypress .standard-form textarea:focus,
      /* Give */
    #give-recurring-form .form-row input[type="email"]:focus,
    #give-recurring-form .form-row input[type="password"]:focus,
    #give-recurring-form .form-row input[type="tel"]:focus,
    #give-recurring-form .form-row input[type="text"]:focus,
    #give-recurring-form .form-row input[type="url"]:focus,
    #give-recurring-form .form-row select:focus,
    #give-recurring-form .form-row textarea:focus,
    form.give-form .form-row input[type="email"]:focus,
    form.give-form .form-row input[type="password"]:focus,
    form.give-form .form-row input[type="tel"]:focus,
    form.give-form .form-row input[type="text"]:focus,
    form.give-form .form-row input[type="url"]:focus,
    form.give-form .form-row select:focus,
    form.give-form .form-row textarea:focus,
    form[id*="give-form"] .form-row input[type="email"]:focus,
    form[id*="give-form"] .form-row input[type="password"]:focus,
    form[id*="give-form"] .form-row input[type="tel"]:focus,
    form[id*="give-form"] .form-row input[type="text"]:focus,
    form[id*="give-form"] .form-row input[type="url"]:focus,
    form[id*="give-form"] .form-row select:focus,
    form[id*="give-form"] .form-row textarea:focus,
    form[id*="give-form"] .give-donation-amount #give-amount:focus,
    form[id*="give-form"] .give-donation-amount #give-amount-text:focus,
    form[id*="give-form"] #give-final-total-wrap .give-final-total-amount:focus,
    form[id*="give-form"] .give-donation-amount .give-currency-symbol:focus,
    form[id*="give-form"] .give-donation-amount .give-currency-symbol.give-currency-position-before:focus,
    form[id*="give-form"] .give-donation-amount .give-currency-symbol.give-currency-position-after:focus,
    form[id*="give-form"] #give-final-total-wrap .give-donation-total-label:focus {
        border-color: {$colors['input_bg_color']} !important;
        background-color: {$colors['input_bg_color']} !important;
    }
    .wpgdprc-checkbox label input[type="checkbox"]:before,
    input[type="radio"] + label:before, input[type="checkbox"] + label:before,
    input[type="radio"] + .wpcf7-list-item-label:before, input[type="checkbox"] + .wpcf7-list-item-label:before,
    .wpcf7-list-item-label.wpcf7-list-item-right:before, .edd_price_options ul > li > label > input[type="radio"] + span:before,
    .edd_price_options ul > li > label > input[type="checkbox"] + span:before {
        border-color: {$colors['input_bg_color']} !important;
        background-color: {$colors['input_bg_color']} !important;
        color: {$colors['text_dark']};
    }
    .select_container:after,
    .select_container select {
        color: {$colors['input_light']};
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
        border-color: {$colors['text_link']} !important;
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
        color: {$colors['extra_link']};
        background-color: {$colors['text_link3']};
    }
    
    .post_item_single .post_content .post_tags .post_meta_label{
        color: {$colors['text_dark']};
    }

    .sc_item_title_style_accent .sc_item_title_text:before,
    .sc_item_title_style_accent .sc_item_title_text:after {
        background-color: {$colors['extra_bg_color']};
    }
    .sc_title_accent .sc_item_descr {
        color: {$colors['text_light']};
    }
    
    .sc_title_accent .sc_button_simple {
        color: {$colors['text_dark']};
    }
    .sc_title_accent .sc_button_simple:hover {
        color: {$colors['text_link']} !important;
    }

    .footer_wrap .sc_socials_icons_names .social_item .social_icon {
        color: {$colors['text_light']};
    }
    .scheme_self.footer_wrap .sc_socials_icons_names .social_item .social_icon,
    .footer_wrap .sc_socials_icons_names .social_item,
    .scheme_self.footer_wrap .sc_socials_icons_names .social_item {
        color: {$colors['text_light']};
        background-color: {$colors['alter_bg_color']};
    }
    .footer_wrap .sc_socials_icons_names .social_item:hover .social_icon {
        color: {$colors['text_link']};
    }
    .scheme_self.footer_wrap .sc_socials_icons_names .social_item:hover .social_icon,
    .footer_wrap .sc_socials_icons_names .social_item:hover,
    .scheme_self.footer_wrap .sc_socials_icons_names .social_item:hover {
        color: {$colors['text_link']};
        background-color: {$colors['alter_bg_color']};
    }
    .scheme_self.footer_wrap,
    .footer_wrap .scheme_self.vc_row {
        background-color: {$colors['bg_color']};
        color: {$colors['text']};
    }    

    .woocommerce ul.products li.product .woocommerce-loop-product__title a,
    .woocommerce ul.products li.product h2 a,
    .sc_blogger_item_wide.sc_blogger_item_on_plate .sc_blogger_item_content .sc_blogger_item_title  a,
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
        color: {$colors['text_dark']} ;
        background-image: linear-gradient(to right,{$colors['text_dark']} 0%,{$colors['text_dark']} 100%);
    }    
    .sc_blogger_classic_default .post_layout_classic {
        background-color: transparent;
    }
    .nav-links-single .nav-links a:hover .post-title {
        color: {$colors['text_dark']} ;
    }
    
    .woocommerce ul.products li.product .post_header a:hover h2,
    .woocommerce ul.products li.product .post_header a:hover{
        color: {$colors['text_dark']} !important;
    }
    .sticky {
        color: {$colors['text_dark']} !important;
        border-color: {$colors['alter_bg_color']};
        background-color: {$colors['alter_bg_color']};  
    }
    .sticky .post_title a,
    .sticky .post_sticky_wrap .post_title a {
	    color: {$colors['text_dark']} !important;
	    background-image: linear-gradient(to right,{$colors['text_dark']} 0%,{$colors['text_dark']} 100%);
     }
     .sticky .post_date a:hover, .sticky .post_date a:focus,
    .sticky a.post_meta_item:hover, .sticky a.post_meta_item:focus,
    .sticky .post_meta_item a:hover, .sticky .post_meta_item a:focus,
    .sticky .post_meta .vc_inline-link:hover, .sticky .post_meta .vc_inline-link:focus,
    .sticky .post_info .post_info_item a:hover, .sticky .post_info .post_info_item a:focus,
    .sticky .post_info_meta .post_meta_item:hover, .sticky .post_info_meta .post_meta_item:focus {
        color: {$colors['text_hover']} !important;  
    }
    .sc_blogger_masonry_default .sc_button_hover_strike.sc_button_bordered, 
    .sticky .post_sticky_wrap .sc_button_hover_strike.sc_button_bordered{
        color: {$colors['text_dark']} !important;
        border-color: {$colors['text_dark']} !important;
        background-color: transparent !important;
    }
    .sc_blogger_masonry_default .sc_button_hover_strike.sc_button_bordered:hover,
    .sticky .post_sticky_wrap .sc_button_hover_strike.sc_button_bordered:hover {
        color: {$colors['text_hover2']} !important;
        background-color: {$colors['text_hover']} !important;
        border-color: {$colors['text_hover']} !important;
    }
 
    .copyright-text {
        color: {$colors['text']};
    }
    .copyright-text a:hover,
    .copyright-text a {
        color: {$colors['text_dark']};
    }
    .copyright-text a,
    .copyright-text a:hover {
        background-image: linear-gradient(to right,{$colors['text_dark']} 0%,{$colors['text_dark']} 100%);
    }

    
     
    
    .comments_list_wrap .comment_author a, 
    .comments_list_wrap .comment_author, 
    .comments_list_wrap .comment_info{
        color: {$colors['text_link']} ;
    }
    
    .woocommerce ul.products li.product .post_header > a,
    .post_meta .post_meta_item.post_categories a {
        color: {$colors['text_link2']} !important;
        background-color: {$colors['alter_bg_hover']};
    }
    .sc_promo.sc_promo_default .sc_item_subtitle,
    .woocommerce ul.products li.product .post_header > a:hover,
    .post_meta .post_meta_item.post_categories a:hover {
        color: {$colors['extra_link']} !important;
        background-color: {$colors['text_link3']};
    }
    .sc_team.sc_team_featured .sc_team_item_subtitle a {
        color: {$colors['text_link2']} !important;
        background-color: {$colors['bg_color']};
    }
    .sc_team.sc_team_featured .sc_team_item_subtitle a:hover {
        color: {$colors['text_dark']} !important;
        background-color: {$colors['bg_color']};
    }
    .sticky .post_meta .post_meta_item.post_categories a {
        color: {$colors['extra_dark']} !important;
        background-color: {$colors['text_link2']};
    }
    .sticky .post_meta .post_meta_item.post_categories a:hover {
        color: {$colors['extra_bg_color']} !important;
        background-color: {$colors['extra_dark']};
    }
    .sticky .sc_button.sc_button_bordered:not(.sc_button_hover_strike) {
        color: {$colors['text_link']} !important;
        background-color: transparent !important;
        border-color: {$colors['text_link']} !important;
    }
    .sticky .sc_button.sc_button_bordered:not(.sc_button_hover_strike):hover {
        color: {$colors['extra_dark']} !important;
        background-color: {$colors['text_hover']} !important;
        border-color: {$colors['text_hover']} !important;
    }
     .post_item .more-link.sc_button_bordered:not(.sc_button_hover_strike) {
        color: {$colors['text_link']} ;
        background-color: transparent ;
        border-color: {$colors['text_link']} ;
    }
    .sc_blogger_chess_default .post_meta .post_meta_item.post_categories a {
        color: {$colors['text_link2']} !important;
        background-color: {$colors['extra_bg_color']};
        
    }
    .sc_blogger_chess_default .post_meta .post_meta_item.post_categories a:hover {
        color: {$colors['extra_dark']} !important;
        background-color: {$colors['text_link2']};
    }
    .sc_blogger_chess_default .post_meta_item:hover:after,
    .sc_blogger_chess_default .post_meta_item:after,
    .sc_blogger_chess_default .post_meta_item {
        color: {$colors['text_dark']};
    }
    .related_wrap.related_style_classic .post_header .post_meta .post_meta_item {
        color: {$colors['text_light']};
    }
    .related_wrap.related_style_classic .post_header .post_meta a.post_meta_item:focus,
    .related_wrap.related_style_classic .post_header .post_meta a.post_meta_item:hover {
        color: {$colors['text_dark']};
    }

    .related_wrap.related_style_classic .related_item .post_featured .rating a {
        color: {$colors['extra_dark']} !important;
        background-color: {$colors['extra_hover']};
    }
    .related_wrap.related_style_classic .post_meta .post_meta_item.post_categories a {
        color: {$colors['text_link2']} !important;
        background-color: {$colors['bg_color']};
    }
    .related_wrap.related_style_classic .post_meta .post_meta_item.post_categories a:hover {
        color: {$colors['text_dark']} !important;
        background-color: {$colors['bg_color']};
    }
    
    .widget_twitter .sc_twitter_default + .widget_twitter_follow:before {
        border-color: {$colors['bg_color']};
    }
    .widget_twitter_follow {
        background-color: {$colors['alter_link']};
        color: {$colors['text_dark']} !important;
        border-color: {$colors['alter_link']} !important;
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
        border-color: {$colors['alter_link']};
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
    .sc_blogger_default_over_centered_simple .sc_item_featured [class*="post_info_"] .post_meta:not(.post_meta_categories):not(.post_meta_rating) a:hover {
      color: {$colors['text_link']} !important;
    } 
    
    .sc_blogger_item_default.sc_blogger_item_image_position_top .sc_blogger_item_featured + .sc_blogger_item_content{
        border-color: {$colors['bd_color']};
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
    .slider_container .slide_info .slide_cats .post_meta_item.post_categories a {
        color: {$colors['text_link2']} !important;
    }
    .slider_container .slide_info .slide_cats .post_meta_item.post_categories a:hover {
        color: {$colors['extra_dark']} !important;
    }
    .slider_container .slide_info .slide_title a {
        background-image: linear-gradient(to right,{$colors['inverse_link']} 0%,{$colors['inverse_link']} 100%) !important;
    }
    .mfp-bg,
    .elementor-lightbox {
        background-color: {$colors['extra_bg_color_03']};
    }
    
    /*Meta*/
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
    .post_info_counters .post_meta_item{
        color: {$colors['text_light']};
    }
    .post_meta_item.post_author:hover,
    a.post_meta_item:focus,
    .post_meta_item a:focus,
    a.post_meta_item:hover,
    .post_meta_item a:hover{
        color: {$colors['text_hover']};
    }
    .sc_blogger_item_default  a.post_meta_item:hover{
         color: {$colors['text_hover']};
    }
    
    .sc_layouts_row_type_compact .sc_layouts_menu_mobile_button .sc_layouts_item_icon,
    .scheme_self.sc_layouts_row_type_compact .sc_layouts_menu_mobile_button .sc_layouts_item_icon {
        color: {$colors['text_dark']};
    }
     .sc_layouts_row_type_compact .sc_layouts_menu_mobile_button a:hover .sc_layouts_item_icon,
    .scheme_self.sc_layouts_row_type_compact .sc_layouts_menu_mobile_button a:hover .sc_layouts_item_icon {
        color: {$colors['text_link']};
    }
    .sc_blogger_default.sc_blogger_default_over_centered_middle [class*="post_info_"],
    .slider_titles_outside_wrap .slide_info {
        background-color: {$colors['inverse_bd_color']};
        border-color: {$colors['inverse_bd_color']};
    }
    
    .slider_titles_outside_wrap .slide_title a:hover{
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
        color: {$colors['text_hover']};
    }
    

    .post_date a:focus, 
    a.post_meta_item:focus, 
    .post_meta_item a:focus, 
    .sticky .post_meta .vc_inline-link:hover, 
    .post_meta .vc_inline-link:focus, 
    .sticky .post_info .post_info_item a:hover, 
    .post_info .post_info_item a:focus, 
    .sticky .post_info_meta .post_meta_item:hover, 
    .post_info_meta .post_meta_item:focus {
        color: {$colors['text_hover']} !important;
    }
     
     .post_item_single .post_content > .post_meta_single{
        border-color: {$colors['bd_color']} !important;
     }
     
    /*Twitter*/
    .widget_twitter .widget_content .sc_twitter_item, 
    .widget_twitter .widget_content li{
        color: {$colors['text_dark']};
    }
    .widget_twitter .widget_content .sc_twitter_item .sc_twitter_item_icon {
        color: {$colors['alter_link2']} !important;
    }
    
    /*Price*/
    .sc_price_item .sc_price_item_price{
        background-color: {$colors['alter_bg_hover']};
        color: {$colors['text_link2']};
    }
    .sc_price_item .sc_price_item_image + .sc_price_item_price {
        background-color: {$colors['bg_color']};
        color: {$colors['text_link2']};
    }
        form.mc4wp-form .mc4wp-form-fields input[type="submit"][disabled]:hover,
     form.mc4wp-form .mc4wp-form-fields input[type="submit"][disabled] {
        background: {$colors['text_light_07']} !important;
        color: {$colors['text']} !important;
        border-color: {$colors['text']} !important;
     }
    form.mc4wp-form .mc4wp-form-fields input[type="submit"] {
        color: {$colors['extra_link']} !important;
        border-color: {$colors['text_link2']} !important;
        background-color: {$colors['text_link2']} !important;
    }
    form.mc4wp-form .mc4wp-form-fields input[type="submit"]:focus, 
    form.mc4wp-form .mc4wp-form-fields input[type="submit"]:hover {
        color: {$colors['extra_link']} !important;
        border-color: {$colors['text_hover3']} !important;
        background-color: {$colors['text_hover3']} !important;
    }
    form.mc4wp-form label {
        color: {$colors['text_dark']} !important;
    }
    form.mc4wp-form .mc4wp-alert {
        background-color: transparent;
        border-color: {$colors['text_hover']};
        color: {$colors['text_dark']};
    }
    form.mc4wp-form .mc4wp-alert a {
        color: {$colors['text_link']} !important;    
    }
    form.mc4wp-form .mc4wp-alert a:hover {
        color: {$colors['text_hover']} !important;   
    }
    
    .sc_slider_controls .slider_controls_wrap > a,
    .slider_container.slider_controls_side .slider_controls_wrap > a,
    .slider_outer_controls_outside .slider_controls_wrap > a,
    .slider_outer_controls_side .slider_controls_wrap > a,
    .slider_outer_controls_top .slider_controls_wrap > a,
    .slider_outer_controls_bottom .slider_controls_wrap > a{
        color: {$colors['text_link2']};
        border-color: {$colors['bd_color']};
        background-color: {$colors['inverse_bd_color']} !important;
    }
    
    .sc_slider_controls .slider_controls_wrap > a:hover,
    .slider_container.slider_controls_side .slider_controls_wrap > a:hover,
    .slider_outer_controls_outside .slider_controls_wrap > a:hover,
    .slider_outer_controls_side .slider_controls_wrap > a:hover,
    .slider_outer_controls_top .slider_controls_wrap > a:hover,
    .slider_outer_controls_bottom .slider_controls_wrap > a:hover{
        border-color: {$colors['text_link3']};
        background-color: {$colors['text_link3']} !important;
        color: {$colors['extra_link']};
    }
    .woocommerce ul.products li.product > .post_item.post_layout_thumbs:before, 
    .woocommerce ul.products li.product > .post_item.post_layout_thumbs:after, 
    .sc_blogger_item_default.sc_blogger_item_on_plate .sc_blogger_item_body:after, 
    .sc_blogger_item_list.sc_blogger_item_on_plate .sc_blogger_item_body:after, 
    .sc_blogger_item_wide.sc_blogger_item_on_plate .sc_blogger_item_body:after,
    .sc_blogger_item_default.sc_blogger_item_on_plate .sc_blogger_item_body:before, 
    .sc_blogger_item_list.sc_blogger_item_on_plate .sc_blogger_item_body:before, 
     .sc_blogger_item_wide.sc_blogger_item_on_plate .sc_blogger_item_body:before{
          border-color: {$colors['alter_link']};
    }
    .sc_blogger_item_on_plate .sc_blogger_item_content .sc_blogger_item_title a:hover{
        color: {$colors['text_dark']};
    }
    
    .sc_slider_controls.slider_pagination_style_bullets .slider_pagination_bullet, 
    .slider_container .slider_pagination_wrap .swiper-pagination-bullet, 
    .slider_outer .slider_pagination_wrap .swiper-pagination-bullet, 
    .swiper-pagination-custom .swiper-pagination-button{
        border-color: {$colors['alter_bd_color']};
        background-color: {$colors['alter_bd_color']} ;
    }
    
    .swiper-pagination-custom .swiper-pagination-button.swiper-pagination-button-active, 
    .sc_slider_controls.slider_pagination_style_bullets .slider_pagination_bullet.swiper-pagination-bullet-active,
    .sc_slider_controls.slider_pagination_style_bullets .slider_pagination_bullet:hover, 
    .slider_container .slider_pagination_wrap .swiper-pagination-bullet.swiper-pagination-bullet-active, 
    .slider_outer .slider_pagination_wrap .swiper-pagination-bullet.swiper-pagination-bullet-active, 
    .slider_container .slider_pagination_wrap .swiper-pagination-bullet:hover, 
    .slider_outer .slider_pagination_wrap .swiper-pagination-bullet:hover{
        border-color: {$colors['text_dark']};
        background-color: {$colors['text_dark']} ;
    }
    .post_price.price,
    .post_price.price ins,
    .woocommerce ul.products li.product .price, 
    .woocommerce-page ul.products li.product .price, 
    .woocommerce ul.products li.product .price ins, 
    .woocommerce-page ul.products li.product .price ins,
    .woocommerce div.product p.price, 
    .woocommerce div.product span.price, 
    .woocommerce span.amount, 
    .woocommerce-page span.amount{
        color: {$colors['text_link']};
    }
    .post_price.price del {
         color: {$colors['text_light']};
    }
    .post_item .post_title a:hover, 
    .post_item .post_title a:focus{
         color: {$colors['text_dark']};
    }
    
   
    .trx_addons_scroll_to_top,
    .trx_addons_cv .trx_addons_scroll_to_top{
        border-color: {$colors['text_link']};
        color: {$colors['extra_link']};
        background-color: {$colors['text_link']};
    }
    .nav-links-more a,
    .woocommerce-links-more a {
        color: {$colors['text_link']};
        background-color: transparent;
        border-color: {$colors['text_link']};
    }
    .nav-links-more a:hover,
    .woocommerce-links-more a:hover {
        color: {$colors['text_hover2']};
        background-color: {$colors['text_hover']};
        border-color: {$colors['text_hover']};
    }
    
    .woocommerce ul.products li.product > .post_item.post_layout_thumbs{
         border-color: {$colors['bd_color']};
    }
    .wc-proceed-to-checkout a:hover{
         background-color: {$colors['alter_hover2']} !important;
    }
    
    .woocommerce-message a:hover{
        color: {$colors['alter_link']} !important;
    }
    
    .woocommerce .woocommerce-checkout .form-row .input-text, 
    .woocommerce-page .woocommerce-checkout  .form-row .input-text{
         border-color: {$colors['bd_color']};
    }
    .woocommerce .woocommerce-checkout .form-row input:focus, 
    .woocommerce .woocommerce-checkout .form-row input.filled, 
    .woocommerce-page .woocommerce-checkout  .form-row input:focus,
    .woocommerce-page .woocommerce-checkout  .form-row input.filled{
         border-color: {$colors['alter_bd_hover']};
    }
    
    li.product .post_featured.hover_shop_buttons .icons a.sc_button_hover_strike {
        color: {$colors['inverse_hover']} !important;
        background-color: {$colors['extra_link']} !important;
        border-color: {$colors['extra_link']} !important;
    }
    li.product .post_featured.hover_shop_buttons .icons a.sc_button_hover_strike:hover {
        color: {$colors['extra_link']} !important;
        background-color: {$colors['text_hover']} !important;
        border-color: {$colors['text_hover']} !important;
    }

    .woocommerce .woocommerce-message .button:focus, 
    .woocommerce ul.products li.product .button:focus,  
    .woocommerce div.product form.cart .button:focus{
        color: {$colors['text_dark']} !important;
    }
    .woocommerce .woocommerce-error .button, .woocommerce .woocommerce-info .button, .woocommerce .woocommerce-message .button,
    .woocommerce .product .compare.sc_button_hover_strike, 
    .tinv-wishlist.tinvwl-after-add-to-cart .tinvwl_add_to_wishlist_button.sc_button_hover_strike, 
    .woocommerce div.product form.cart .single_add_to_cart_button.sc_button_hover_strike, 
    .widget.woocommerce .button.sc_button_hover_strike,
    .woocommerce #payment #place_order, 
    .woocommerce-page #payment #place_order,
    .woocommerce form.checkout_coupon .button,
    .woocommerce table.cart td.actions .button {
        color: {$colors['text_link']} !important;
        background-color: transparent !important;
        border-color: {$colors['text_link']} !important;
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
        color: {$colors['extra_link']} !important;
        background-color: {$colors['text_hover']} !important;
        border-color: {$colors['text_hover']} !important;
    }

    /*Recipe*/
    .wprm-recipe-template-classic{
        border-color: {$colors['inverse_bd_color']};
        background-color: {$colors['inverse_bd_color']};
    }
    body .wprm-recipe-template-classic{
        color: {$colors['text']};
    }
    body .wprm-recipe-block-container-columns .wprm-recipe-details-label{
        color: {$colors['text_dark']};
    }
    
    .wprm-recipe-instructions > li:before{
          background-color: {$colors['text_link3']};
           color: {$colors['extra_link']};
    }
    
    .trx_addons_audio_player.without_cover, 
    .format-audio .post_featured.without_thumb .post_audio{
        background-color: {$colors['alter_bg_color']};
        border-color: {$colors['alter_bg_color']};
    }
    .mejs-controls .mejs-button>button{
         background-color: {$colors['extra_link']} !important;
         color: {$colors['text_link2']} !important;
    }
    .mejs-controls .mejs-button>button:focus,
    .mejs-controls .mejs-button>button:hover{
         background-color: {$colors['extra_link']} !important;
         color: {$colors['text_hover3']} !important;
    }
    .mejs-controls .mejs-time-rail .mejs-time-total,
    .mejs-controls .mejs-time-rail .mejs-time-loaded,
    .mejs-controls .mejs-time-rail .mejs-time-hovered,
    .mejs-controls .mejs-volume-slider .mejs-volume-total,
    .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-total {
        background-color: {$colors['extra_link']} !important;
    }
    .mejs-controls .mejs-time-rail .mejs-time-current,
    .mejs-controls .mejs-volume-slider .mejs-volume-current,
    .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current {
        background-color: {$colors['text_link2']} !important;
    }
    .mejs-controls .mejs-time-rail .mejs-time-handle-content {
        border-color: {$colors['text_link2']};
    }
    .mejs-time {
        color: {$colors['text_light']} !important;
    }
    .trx_addons_audio_player.without_cover .audio_caption,
    .format-audio .post_featured.without_thumb .post_audio_title {
        color: {$colors['text_dark']} !important;
    }
    
    /*Video*/
    .trx_addons_video_player.with_cover .video_hover, 
    .format-video .post_featured.with_thumb .post_video_hover, 
    .sc_layouts_blog_item_featured .post_featured.with_thumb .post_video_hover{
        color: {$colors['inverse_hover']};
    }
    .trx_addons_video_player.with_cover .video_hover:hover, 
    .format-video .post_featured.with_thumb .post_video_hover:hover, 
    .sc_layouts_blog_item_featured .post_featured.with_thumb .post_video_hover:hover{
        color: {$colors['text_link']};
    }
    .widget_categories_list .categories_list_style_1 .categories_list_item {
        border-color: {$colors['alter_bd_color']};
    }
    .widget_categories_list .categories_list_style_1 .categories_list_item .categories_list_image .categories_list_icon {
        color: {$colors['text_link2']};
    }
    .widget_categories_list .categories_list_style_1 .categories_list_item .categories_list_title {
        color: {$colors['text_link2']};
    }
    .widget_categories_list .categories_list_style_1 .categories_list_item:hover {
        border-color: {$colors['text_dark']};
    }
    .widget_categories_list .categories_list_style_1 .categories_list_item:hover .categories_list_image .categories_list_icon {
        color: {$colors['text_dark']};
    }
    .widget_categories_list .categories_list_style_1 .categories_list_item:hover .categories_list_title {
        color: {$colors['text_dark']};
    }
    
    .sc_blogger_list_simple .post_meta .post_meta_item.post_categories a{
        background-color: {$colors['inverse_hover']};
        color: {$colors['extra_link']} !important;
    }
    .sc_blogger_list_simple .post_meta .post_meta_item.post_categories a:hover{
        background-color: {$colors['text_link']};
        color: {$colors['extra_link']} !important;
    }
    .sc_blogger_masonry .post_item .post_meta a.post_meta_item:hover{
        color: {$colors['text_hover']};
    }
    figure figcaption, 
    .wp-caption .wp-caption-text, 
    .wp-caption .wp-caption-dd, 
    .wp-caption-overlay .wp-caption .wp-caption-text, 
    .wp-caption-overlay .wp-caption .wp-caption-dd{
        color: {$colors['text_dark']} !important;
    }

    
    body .color_style_link2.sc_button_hover_strike.sc_button_bordered:hover, 
    .color_style_link2.sc_button_hover_strike .strike-text, 
    .color_style_link2.sc_button_bordered:not(.sc_button_bg_image):hover, 
    .color_style_link2.sc_button_bordered:not(.sc_button_bg_image):focus, 
    .sc_button_bordered.color_style_link2:not(.sc_button_bg_image):hover, 
    .sc_button_bordered.color_style_link2:not(.sc_button_bg_image):focus, 
    .color_style_link2 .sc_button_bordered:not(.sc_button_bg_image):hover, 
    .color_style_link2 .sc_button_bordered:not(.sc_button_bg_image):focus,
    .sc_button_bordered.color_style_link2:not(.sc_button_bg_image):hover .strike-text, 
    .sc_button_bordered.color_style_link2:not(.sc_button_bg_image):focus .strike-text, 
    .color_style_link2 .sc_button_bordered:not(.sc_button_bg_image):hover .strike-text, 
    .color_style_link2 .sc_button_bordered:not(.sc_button_bg_image):focus .strike-text{
        background: {$colors['text_hover']} !important;
        border-color: transparent !important;
    }
    .post_item_single .post_content .post_tags a,
    form.mc4wp-form .mc4wp-alert a:hover,
    .sc_edd_details .downloads_page_tags .downloads_page_data>a, 
    .widget_product_tag_cloud a,
    .widget_tag_cloud a{
          color: {$colors['text_link2']} !important;
          background-color: {$colors['alter_bg_hover']};
    }
    .post_item_single .post_content .post_tags a:hover,
    .sc_edd_details .downloads_page_tags .downloads_page_data>a:hover, 
    .widget_product_tag_cloud a:hover,.widget_tag_cloud a:hover{
        color: {$colors['extra_link']} !important;
        background-color: {$colors['text_link3']} ;
    }
    .post_item_single .post_content .post_meta .post_share .socials_type_block .social_item:hover .social_icon {
        color: {$colors['extra_link']} !important;
        background-color: {$colors['text_link']} !important;
    }
    .comments_list_wrap .comment_author a:hover{
        color: {$colors['text_hover']} !important;
    }
    .sc_layouts_menu_popup .sc_layouts_menu_nav, 
    .sc_layouts_menu_nav > li ul{
        background-color: {$colors['alter_bg_color']} ;
    }
    
    .widget.woocommerce .buttons a:not(.sc_button_hover_strike) {
		color: {$colors['text_link']};
		border-color: {$colors['text_link']};
	}
	.widget.woocommerce .buttons a:not(.sc_button_hover_strike):hover {
		color: {$colors['text_link']};
		border-color: {$colors['text_link']};
	}
    table>tbody > tr:nth-child(2n) > td{
        background-color: {$colors['inverse_bd_hover']} ;
    }

    .select2-container.select2-container--default span.select2-selection--single:hover,
    .select2-container.select2-container--focus span.select2-selection--single, 
    .select2-container.select2-container--open span.select2-selection--single,
    .select2-container.select2-container--default span.select2-selection,
    .select2-container.select2-container--default .select2-selection--single .select2-selection__rendered,
    .select2-container .select2-results__option,
    .select2-dropdown, 
    .select2-container.select2-container--focus span.select2-selection, 
    .select2-container.select2-container--open span.select2-selection{
        border-color: {$colors['text_link']} !important;
        background-color: {$colors['input_bg_color']} ;
        color: {$colors['input_light']};
    }
    .select2-container.select2-container--default span.select2-selection--single:hover,
    .select2-container.select2-container--focus span.select2-selection--single:hover, 
    .select2-container.select2-container--open span.select2-selection--single:hover,
    .select2-container.select2-container--default span.select2-selection:hover,
    .select2-container.select2-container--default .select2-selection--single .select2-selection__rendered:hover,
    .select2-container .select2-results__option:hover,
    .select2-dropdown:hover, 
    .select2-container.select2-container--focus span.select2-selection:hover, 
    .select2-container.select2-container--open span.select2-selection:hover {
        border-color: {$colors['text_link']} !important;
        border-color: {$colors['text_link2']} !important;
        background-color: {$colors['input_bg_color']} ;
    }
    .select2-container .select2-results__option--highlighted[aria-selected] {
        color: {$colors['text_dark']} ;
    }
    .trx_addons_demo_options_wrapper .trx_addons_demo_options_toolbar a{
         color: {$colors['alter_hover']};
    }
    .select2-container--default .select2-search--dropdown .select2-search__field {
        border-color: {$colors['text_link2']} !important;
    }
    .sc_blogger_item_list .post_meta_item:after,
    .sc_blogger_item_list .post_meta_item.post_author span,
    .sc_blogger_item_list .post_meta_item a,
    .sc_blogger_item_list .post_meta_item{
        color: {$colors['text_light']};
    }
    .sc_blogger_item_list a.post_meta_item:hover span,
    .sc_blogger_item_list a.post_meta_item:hover {
        color: {$colors['text_link']};
    }
    .wprm-recipe-template-classic .wprm-recipe-name, 
    .wprm-recipe-template-classic .wprm-recipe-header{
        color: {$colors['text_dark']};
    }
    .widget_recent_comments ul li {
        color: {$colors['text_light']};
    }
    .widget_recent_comments ul li .comment-author-link {
        color: {$colors['text_link']};
    }
    .widget_recent_comments ul li a {
        color: {$colors['text_dark']};
    }
    .widget_recent_comments ul li a:hover {
        color: {$colors['text_link']};
    }
    .search_wrap.search_style_expand .search_submit span,
    .sc_layouts_menu_mobile_button_burger:not(.without_menu) .burger-text {
        color: {$colors['text_dark']};
    }   
    .search_wrap.search_style_expand .search_submit:hover span,
    .sc_layouts_menu_mobile_button_burger:not(.without_menu):hover .burger-text {
        color: {$colors['text_dark']};
    }
    .sc_blogger.sc_blogger_default_over_bottom .sc_blogger_item .sc_blogger_item_body .post_info_bl {
        background-color: {$colors['inverse_bd_color']};
    }
    .sc_blogger.sc_blogger_default_over_bottom .sc_blogger_item .sc_blogger_item_body .post_info_bl .sc_blogger_item_excerpt {
        color: {$colors['text']};
    }
    .sc_blogger.sc_blogger_default_over_bottom .sc_blogger_item .sc_blogger_item_body .post_info_bl .post_meta_item {
        color: {$colors['text_light']};
    }
    .sc_blogger.sc_blogger_default_over_bottom .sc_blogger_item .sc_blogger_item_body .post_info_bl .post_meta_item span {
        color: {$colors['text_link']};
    }
    .sc_blogger.sc_blogger_default_over_bottom .sc_blogger_item .sc_blogger_item_body .post_info_bl .post_meta_item:hover span {
        color: {$colors['text_hover']};
    }
    .wprm-recipe-servings-container > span.wprm-recipe-nutrition, .wprm-recipe-servings-container span.wprm-recipe-nutrition-unit,
    .wprm-recipe-servings-container span.wprm-recipe-details, .wprm-recipe-servings-container span.wprm-recipe-details-unit,
    .wprm-recipe-nutrition-container > span.wprm-recipe-nutrition, .wprm-recipe-nutrition-container span.wprm-recipe-nutrition-unit,
    .wprm-recipe-nutrition-container span.wprm-recipe-details, .wprm-recipe-nutrition-container span.wprm-recipe-details-unit,
    .wprm-recipe-times-container > .wprm-recipe-time-container > span.wprm-recipe-nutrition,
    .wprm-recipe-times-container > .wprm-recipe-time-container span.wprm-recipe-nutrition-unit,
    .wprm-recipe-times-container > .wprm-recipe-time-container span.wprm-recipe-details,
    .wprm-recipe-times-container > .wprm-recipe-time-container span.wprm-recipe-details-unit {
        color: {$colors['text_light']};
    }
    .sc_promo:not(.sc_promo_no_paddings) {
        background-color: {$colors['alter_bg_color']};
    }
    .sc_team .sc_team_item_thumb .sc_team_item_socials .social_item .social_icon {
        color: {$colors['text_link2']};
        border-color: {$colors['extra_link']};
        background-color: {$colors['extra_link']};
    }
    .sc_team .sc_team_item_thumb .sc_team_item_socials .social_item:hover .social_icon {
        color: {$colors['text_hover3']};
        border-color: {$colors['extra_link']};
        background-color: {$colors['extra_link']};
    }
    
    .team_member_page .team_member_socials .social_item .social_icon {
        color: {$colors['text_link']};
        border-color: {$colors['alter_bg_color']};
        background-color: {$colors['alter_bg_color']};
    }

    .team_member_page .team_member_socials .social_item:hover .social_icon {
        color: {$colors['extra_link']};
        border-color: {$colors['text_link']};
        background-color: {$colors['text_link']};
    }
    .sc_price_item .sc_price_item_subtitle {
        color: {$colors['text_link']};
    }
    .esg-filters div.esg-navigationbutton,
    .woocommerce nav.woocommerce-pagination ul li a,
    .page_links > a,
    .comments_pagination .page-numbers,
    .nav-links .page-numbers {
        color: {$colors['text_link2']};
        background-color: {$colors['alter_bg_hover']};
        border-color: {$colors['alter_bg_hover']};
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
        color: {$colors['extra_dark']};
        background-color: {$colors['text_link2']};
        border-color: {$colors['text_link2']};
    }
    /* Shop mode selector */
    .blabber_shop_mode_buttons a {
        color: {$colors['text_link']};
        background-color: {$colors['alter_bg_color']};
    }
    .blabber_shop_mode_buttons a:hover {
        color: {$colors['inverse_link']};
        background-color: {$colors['text_link']};
    }
    .shop_mode_thumbs .blabber_shop_mode_buttons a.woocommerce_thumbs,
    .shop_mode_list .blabber_shop_mode_buttons a.woocommerce_list {
        color: {$colors['inverse_link']};
        background-color: {$colors['text_link']};
    }
    .woocommerce ul.products li.product .post_featured {
        border-color: {$colors['inverse_bd_color']};
    }
    .stars span a,
    .star-rating span a,
    .star-rating span,
    .star-rating:before {
        color: {$colors['text_dark']};
    }
    .woocommerce .widget_price_filter .ui-slider .ui-slider-range,
    .woocommerce .widget_price_filter .ui-slider .ui-slider-handle {
        background-color: {$colors['text_link2']};
    }
    .woocommerce div.product form.cart div.quantity span:hover,
    .woocommerce-page div.product form.cart div.quantity span:hover,
    .woocommerce .shop_table.cart div.quantity span:hover,
    .woocommerce-page .shop_table.cart div.quantity span:hover,
    .woocommerce div.product form.cart div.quantity span,
    .woocommerce-page div.product form.cart div.quantity span,
    .woocommerce .shop_table.cart div.quantity span,
    .woocommerce-page .shop_table.cart div.quantity span {
        background-color: {$colors['input_bg_color']};
    }
    .woocommerce div.product form.cart div.quantity span,
    .woocommerce-page div.product form.cart div.quantity span, 
    .woocommerce .shop_table.cart div.quantity span, 
    .woocommerce-page .shop_table.cart div.quantity span {
        color: {$colors['input_light']};
    }
    .woocommerce div.product form.cart div.quantity span:hover, 
    .woocommerce-page div.product form.cart div.quantity span:hover, 
    .woocommerce .shop_table.cart div.quantity span:hover, 
    .woocommerce-page .shop_table.cart div.quantity span:hover {
        color: {$colors['text_dark']};
    }
    .comments_list_wrap .comment_posted {
        color: {$colors['text_light']};
    }
    .ua_ie_11 .elementor-divider-separator,
    .comments_form_wrap,
    .author_info,
    .post_item_single .post_content>.post_meta_single {
        border-color: {$colors['bd_color']} !important;
    }
    .sc_layouts_menu_nav .menu-collapse > a::after {
        background-color: {$colors['alter_bg_color']};
    }
    .sc_layouts_menu_nav .menu-collapse > a:hover:after {
        background-color: {$colors['alter_bg_hover']};
    }
    .sc_blogger_item_default .post_info_mc .post_meta_item.post_author:hover span,
    .sc_blogger_item_default .post_info_mc a.post_meta_item:hover {
        color: {$colors['text_link']};
    }
    .trx_addons_reviews_block_short .trx_addons_reviews_block_info {
        border-color: {$colors['bd_color']};
    }
    .trx_addons_reviews_block_short .trx_addons_reviews_block_mark_value,
    .trx_addons_reviews_block_mark_value {
        background-color: transparent;
        border-color: {$colors['bd_color']};
        color:  {$colors['text_link']};
    }
    .trx_addons_reviews_block_short .trx_addons_reviews_block_info .trx_addons_reviews_block_attributes .trx_addons_reviews_block_attributes_row_type_text .trx_addons_reviews_block_attributes_value {
        color:  {$colors['text_dark']};
    }
    .trx_addons_reviews_block_detailed .trx_addons_reviews_block_info .trx_addons_reviews_block_mark_wrap .trx_addons_reviews_block_mark_text {
        color:  {$colors['text_dark']};
    }
    .trx_addons_reviews_block_detailed .trx_addons_reviews_block_pn {
        background-color: {$colors['alter_bg_color']};
    }
    .trx_addons_reviews_block_detailed .trx_addons_reviews_block_buttons .trx_addons_reviews_block_button {
        background-color: transparent !important;
        border-color: {$colors['text_link']} !important;
        color:  {$colors['text_link']} !important;
    }
    .trx_addons_reviews_block_detailed .trx_addons_reviews_block_buttons .trx_addons_reviews_block_button:hover {
        background-color: {$colors['text_hover']} !important;
        border-color: {$colors['text_hover']} !important;
        color:  {$colors['extra_dark']} !important;
    }
    .trx_addons_reviews_block_detailed .trx_addons_reviews_block_criterias .trx_addons_reviews_block_list,
    .trx_addons_reviews_block_detailed .trx_addons_reviews_block_pn .trx_addons_reviews_block_list li {
        color:  {$colors['text']};
    }
    .trx_addons_reviews_stars_default,
    .trx_addons_reviews_stars_hover {
        color:  {$colors['text_dark']};
    }
    .post_item_single .post_content>.post_meta_single:before {
        color:  {$colors['text_dark']};
    }
    .author_bio .author_link {
        color:  {$colors['text_dark']};
    }
    .author_bio .author_link:hover {
        color:  {$colors['text_link']};
    }
    .sc_blogger_default_over_centered_simple .sc_item_featured [class*="post_info_"] .post_meta_rating,
    .post_featured .post_meta_rating {
        background-color: {$colors['text_link']} !important;
        color:  {$colors['extra_dark']} !important;
    }
    .sc_blogger_default_over_centered_simple .sc_item_featured [class*="post_info_"] .post_meta_rating:hover,
    .post_featured .post_meta_rating:hover {
        background-color: {$colors['text_link']} !important;
        color:  {$colors['extra_dark']} !important;
    }
    .post_layout_classic:not(.sticky) .post_meta.cat_top .post_meta_item.post_categories a,
    .blog_style_classic_3 .post_meta.cat_top .post_meta_item.post_categories a,.blog_style_classic_2 .post_meta.cat_top .post_meta_item.post_categories a,
    .blog_style_classic_3 .post_meta.cat_top .post_meta_item.post_categories a,
    .sc_blogger.sc_blogger_default_classic_meta_simple .sc_blogger_item .sc_blogger_item_body .sc_blogger_item_content .post_meta_categories .post_categories a,
    .sc_blogger_masonry .post_featured + .post_wrap_block .post_meta .post_meta_item.post_categories a {
        background-color: {$colors['bg_color']} !important;
        color:  {$colors['text_link2']} !important;
    }
    .post_layout_classic:not(.sticky) .post_meta.cat_top .post_meta_item.post_categories a:hover,
    .blog_style_classic_2 .post_meta.cat_top .post_meta_item.post_categories a:hover,
    .blog_style_classic_3 .post_meta.cat_top .post_meta_item.post_categories a:hover,
    .sc_blogger.sc_blogger_default_classic_meta_simple .sc_blogger_item .sc_blogger_item_body .sc_blogger_item_content .post_meta_categories .post_categories a:hover,
    .sc_blogger_masonry .post_featured + .post_wrap_block .post_meta .post_meta_item.post_categories a:hover {
        background-color: {$colors['bg_color']} !important;
        color:  {$colors['text_dark']} !important;
    }
    .sc_blogger .post_layout_chess {
        background-color: {$colors['alter_bg_color']};
    }
    .post_layout_chess .post_content_inner:after {
        background: transparent;
    }
    .post_featured.hover_shop_buttons .mask {
        background-color: {$colors['alter_bg_color_09']} !important;
    }
    .woocommerce .product .compare:hover,
    .tinv-wishlist.tinvwl-after-add-to-cart .tinvwl_add_to_wishlist_button:hover, 
    .woocommerce div.product form.cart .single_add_to_cart_button:hover, 
    .widget.woocommerce .button:hover, 
    li.product .post_featured.hover_shop_buttons .icons a:hover {
        border-color: {$colors['text_dark']} !important;
        color:  {$colors['text_dark']} !important;
    }
    .woocommerce .quantity input.qty, 
    .woocommerce #content .quantity input.qty, 
    .woocommerce-page .quantity input.qty, 
    .woocommerce-page #content .quantity input.qty {
        color:  {$colors['input_light']} !important;
    }
    .single-product div.product .woocommerce-tabs .wc-tabs li a {
        background-color: {$colors['alter_bg_color']};
        color:  {$colors['text_link']};
    }
    .single-product div.product .woocommerce-tabs .wc-tabs li:not(.active) a:hover,
    .single-product div.product .woocommerce-tabs .wc-tabs li.active a {
        background-color: {$colors['text_link']};
        color:  {$colors['extra_dark']};
    }
    #trx_addons_login_popup.trx_addons_popup {
        background-color: {$colors['bg_color']};
    }
    .related_wrap.sc_team_posts .width_cat_top + .post_meta.cat_top .post_categories a,
    .related_wrap.related_style_classic .width_cat_top + .post_meta.cat_top .post_categories a {
        background-color: {$colors['bg_color']};
        border-color: {$colors['bg_color']};
        color:  {$colors['text_link2']} !important;
    }
    .related_wrap.sc_team_posts .width_cat_top + .post_meta.cat_top .post_categories a:hover,
    .related_wrap.related_style_classic .width_cat_top + .post_meta.cat_top .post_categories a:hover {
        background-color: {$colors['bg_color']};
        border-color: {$colors['bg_color']};
        color:  {$colors['text_dark']} !important;
    }
    .author_description .socials_wrap .social_item .social_icon {
        background-color: {$colors['alter_bg_hover']};
        color:  {$colors['text_link2']}; 
    }
    .author_description .socials_wrap .social_item:hover .social_icon {
        background-color: {$colors['text_link2']};
        color:  {$colors['inverse_link']}; 
    }
    .trx_addons_reviews_block_detailed .trx_addons_reviews_block_criterias + .trx_addons_reviews_block_buttons {
        background-color: {$colors['bg_color']};
    }
    .mejs-time-float,
    .mejs-time-float-current {
        background-color: {$colors['text_link']};
        color:  {$colors['inverse_link']};
        border-color: {$colors['text_link']};
    }
    .mejs-time-float-corner {
        border-top-color: {$colors['text_link']};
    }

CSS;
		}

		return $css;
	}
}

