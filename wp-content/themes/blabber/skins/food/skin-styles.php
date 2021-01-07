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
    .sc_twitter_default .sc_twitter_item_content,
    .breadcrumbs .breadcrumbs_item,    
    .sc_promo.sc_promo_default .sc_item_subtitle {        
        {$fonts['info_font-family']}
    }
    .audio_description, 
    .elementor-counter .elementor-counter-title, 
    .elementor-counter .elementor-counter-number-wrapper, 
    .elementor-widget-progress .elementor-title, 
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
    
    .sc_layouts_menu_nav>li>a,
    .sc_team.sc_team_featured .sc_team_item_subtitle a,
    .sc_promo.sc_promo_default .sc_item_subtitle,
    .woocommerce ul.products li.product .post_header > a,
    .widget_twitter .widget_twitter_follow,
    .post_meta .post_meta_item.post_categories a{
        {$fonts['h5_font-family']}
         {$fonts['h5_font-weight']}
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
    
    body .wprm-recipe-block-container-columns .wprm-recipe-details-label,
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

   .sc_layouts_menu_nav > li > a{
        color: {$colors['text_dark']} !important;
   }
   .sc_layouts_menu_nav>li>a:hover, 
   .sc_layouts_menu_nav>li.sfHover>a,
   .sc_layouts_menu_nav > li > a:hover{
        color: {$colors['alter_link2']} !important;
   }
   .search_wrap .search_submit:before,
   .sc_layouts_item_icon, 
   .sc_layouts_menu_mobile_button_burger:not(.without_menu) .sc_layouts_iconed_text_link,
   .sc_layouts_row_type_narrow .sc_layouts_item_icon,
   .sc_layouts_row_type_narrow .search_wrap .search_submit{
    color: {$colors['text_dark']};
   }
  
   .search_style_expand .search_submit:hover,
   .search_style_expand .search_submit:hover:before,
   .sc_layouts_item_icon:hover, 
   .sc_layouts_menu_mobile_button_burger:not(.without_menu) .sc_layouts_iconed_text_link:hover,
   .sc_layouts_menu_mobile_button_burger:not(.without_menu) .sc_layouts_iconed_text_link:hover .sc_layouts_item_icon,
   .sc_layouts_row_type_narrow .sc_layouts_item_icon:hover,
   .sc_layouts_row_type_narrow .search_wrap .search_submit:hover{
        color: {$colors['text_hover']};
   }
   
    input[type="submit"],
    input[type="reset"],
    input[type="button"] {
        color: {$colors['text_hover']};
        background-color: {$colors['bg_color']};
        border-color: {$colors['text_hover']};
    }
    
    body .sc_button_hover_strike.sc_button_bordered:hover,
    .sc_button_hover_strike .strike-text,
    .sc_button_bordered:not(.sc_button_bg_image):hover, 
    .sc_button_bordered:not(.sc_button_bg_image):focus, 
    .wp-block-button.is-style-outline .wp-block-button__link:hover,
    .wp-block-button.is-style-outline .wp-block-button__link:focus{
        background-color: {$colors['text_link']} !important;
        border-color: {$colors['text_link']} !important;
        color: {$colors['text_link2']} !important;
    }

    /*Blockquote*/
 
    .trx_addons_dropcap_style_1,
	section>blockquote, 
	div:not(.is-style-solid-color)>blockquote, 
	figure:not(.is-style-solid-color)>blockquote{
	      background-color: {$colors['alter_link']};
	}
	
	 .trx_addons_dropcap_style_1{
	     color: {$colors['text_dark']}; 
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
        color: {$colors['text_dark']};
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
    
    .sc_button_hover_strike.sc_button_bordered{
        border-color: {$colors['bd_color']} !important;
        color: {$colors['text_dark']} !important;
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
        border-color: {$colors['inverse_bd_color']};
        background-color: {$colors['bg_color']};
    }
    .comment-form  input[type="text"],
    .comment-form  input[type="number"],
    .comment-form  input[type="email"],
    .comment-form  input[type="url"],
    .comment-form  input[type="tel"],
    .comment-form  input[type="search"],
    .comment-form  input[type="password"],
    .comment-form  textarea, .wpcf7-form select,
    .wpcf7-form input[type="text"], 
    .wpcf7-form input[type="number"], 
    .wpcf7-form input[type="email"], 
    .wpcf7-form input[type="url"], 
    .wpcf7-form input[type="tel"], 
    .wpcf7-form input[type="search"], 
    .wpcf7-form input[type="password"], 
    .wpcf7-form textarea, .wpcf7-form select{
        border-color: {$colors['input_bd_color']} !important;
    }
    .wpcf7-form input[type="text"]:active, 
    .wpcf7-form input[type="number"]:active,  
    .wpcf7-form input[type="email"]:active,  
    .wpcf7-form input[type="url"]:active,  
    .wpcf7-form input[type="tel"]:active,  
    .wpcf7-form input[type="search"]:active,  
    .wpcf7-form input[type="password"]:active,  
    .wpcf7-form textarea:active,  
    .wpcf7-form select:active,
    .wpcf7-form input[type="text"]:focus, 
    .wpcf7-form input[type="number"]:focus,  
    .wpcf7-form input[type="email"]:focus,  
    .wpcf7-form input[type="url"]:focus,  
    .wpcf7-form input[type="tel"]:focus,  
    .wpcf7-form input[type="search"]:focus,  
    .wpcf7-form input[type="password"]:focus,  
    .wpcf7-form textarea:focus, 
    .wpcf7-form select:focus{
        border-color: {$colors['input_bd_hover']} !important;
    }

    .comments_wrap .form-submit input[type="submit"]{
        color: {$colors['text_dark']};
        background-color: transparent;
        border-color: {$colors['bd_color']};
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
    
    .post_item_single .post_content .post_tags .post_meta_label{
        color: {$colors['text_dark']};
    }
    
    .post_item_single .post_content .post_tags a{
         background-color: {$colors['alter_link3']};
         color: {$colors['text_link']};
    }
    .post_item_single .post_content .post_tags a:hover {
         color: {$colors['extra_text']};
    }

    .sc_item_title_style_accent .sc_item_title_text:before,
    .sc_item_title_style_accent .sc_item_title_text:after {
        background-color: {$colors['extra_bg_color']};
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
        color: {$colors['extra_link2']};
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
    .woocommerce ul.products li.product .woocommerce-loop-product__title a,
    .woocommerce ul.products li.product h2 a,
    .sc_blogger_item_wide.sc_blogger_item_on_plate .sc_blogger_item_content .sc_blogger_item_title  a,
    .sc_blogger.sc_blogger_list .sc_blogger_item_title a,
    .sc_blogger.sc_blogger_default .sc_blogger_item_title a,
    .related_wrap.sc_team_posts .post_title a,
    .related_wrap.related_style_classic .post_title a,
    .nav-links-single .nav-links a .post-title,
    .post_layout_chess .post_title a,
    .copyright-text a,
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
    
    .woocommerce ul.products li.product .post_header a:hover h2,
    .woocommerce ul.products li.product .post_header a:hover{
        color: {$colors['text_dark']} !important;
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
    
     
    
    .comments_list_wrap .comment_author a, 
    .comments_list_wrap .comment_author, 
    .comments_list_wrap .comment_info{
        color: {$colors['text_link']} ;
    }
    
    .woocommerce ul.products li.product .post_header > a,
    .sc_team.sc_team_featured .sc_team_item_subtitle a,
    .sc_promo.sc_promo_default .sc_item_subtitle,
    .post_meta .post_meta_item.post_categories a {
        color: {$colors['text_link2']} !important;
        background-color: {$colors['text_hover']};
    }
    .woocommerce ul.products li.product .post_header > a:hover,
    .sc_team.sc_team_featured .sc_team_item_subtitle a:hover,
    .post_meta .post_meta_item.post_categories a:hover {
        color: {$colors['text_link2']} !important;
        background-color: {$colors['text_link']};
    }
    .sticky .post_meta .post_meta_item.post_categories a:hover {
        color: {$colors['extra_bg_color']} !important;
        background-color: {$colors['extra_dark']};
    }
    .single-product .related > h2:before,
    .page_contact_form_title:before,
    .related_wrap .section_title.related_wrap_title:before,
    .single-product .related > h2:after,
    .page_contact_form_title:after,
    .related_wrap .section_title.related_wrap_title:after {
        background: {$colors['text_dark']};
    }
    
    .related_wrap.related_style_classic .post_header .post_meta .post_meta_item {
        color: {$colors['text_link']};
    }
    .related_wrap.related_style_classic .post_header .post_meta a.post_meta_item:hover {
        color: {$colors['text_dark']};
    }
    
    .related_wrap.related_style_classic .related_item{
        border-color: {$colors['bd_color']};
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
    .minimal-light .esg-navigationbutton,
    .show_comments {
        color: {$colors['text_dark']} !important;
        border-color: {$colors['bd_color']} !important;
    }
    .minimal-light .esg-navigationbutton:hover,
    .show_comments:hover {
        background-color: {$colors['text_link']} !important;
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
    .sc_blogger_default_over_centered_simple .sc_item_featured [class*="post_info_"] .post_meta:not(.post_meta_categories) a:hover {
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
        color: {$colors['text_link']};
    }
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
    .slider_titles_outside_wrap .slide_info,
    .sc_layouts_title.with_content .sc_layouts_title_content{
        background-color: {$colors['bg_color']};
        border-color: {$colors['bd_color']};
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
        color: {$colors['text_link']};
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
        color: {$colors['text_link']} !important;
    }
     .sticky .sc_button_hover_strike.sc_button_bordered{
        color: {$colors['extra_text']} !important;
     }
     body .sticky.post_item .sc_button_hover_strike.sc_button_bordered:hover{
        border-color: {$colors['text_link']} !important;
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
        background-color: {$colors['alter_link']};
        color: {$colors['text_dark']};
    }
    
    form.mc4wp-form .mc4wp-form-fields input[type="submit"]:focus, 
    form.mc4wp-form .mc4wp-form-fields input[type="submit"]:hover {
        background-color: transparent;
        color: {$colors['text_link']};
    }
    
    .sc_slider_controls .slider_controls_wrap > a,
    .slider_container.slider_controls_side .slider_controls_wrap > a,
    .slider_outer_controls_outside .slider_controls_wrap > a,
    .slider_outer_controls_side .slider_controls_wrap > a,
    .slider_outer_controls_top .slider_controls_wrap > a,
    .slider_outer_controls_bottom .slider_controls_wrap > a{
        color: {$colors['text_link']};
        border-color: {$colors['bd_color']};
    }
    
    .sc_slider_controls .slider_controls_wrap > a:hover,
    .slider_container.slider_controls_side .slider_controls_wrap > a:hover,
    .slider_outer_controls_outside .slider_controls_wrap > a:hover,
    .slider_outer_controls_side .slider_controls_wrap > a:hover,
    .slider_outer_controls_top .slider_controls_wrap > a:hover,
    .slider_outer_controls_bottom .slider_controls_wrap > a:hover{
        border-color: {$colors['text_link']};
        background-color: {$colors['text_link']} !important;
        color: {$colors['inverse_link']};
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
    
    .woocommerce ul.products li.product .price, 
    .woocommerce-page ul.products li.product .price, 
    .woocommerce ul.products li.product .price ins, 
    .woocommerce-page ul.products li.product .price ins,
    .woocommerce div.product p.price, 
    .woocommerce div.product span.price, 
    .woocommerce span.amount, 
    .woocommerce-page span.amount{
        color: {$colors['text_light']};
    }
    .woocommerce .woocommerce-message .button:focus, 
    .woocommerce ul.products li.product .button:focus,  
    .woocommerce div.product form.cart .button:focus{
        color: {$colors['text_dark']};
    }
    .woocommerce .product .compare.sc_button_hover_strike:hover, 
    .tinv-wishlist.tinvwl-after-add-to-cart .tinvwl_add_to_wishlist_button.sc_button_hover_strike:hover, 
    .woocommerce div.product form.cart .single_add_to_cart_button.sc_button_hover_strike:hover, 
    .widget.woocommerce .button.sc_button_hover_strike:hover,
    .woocommerce #payment #place_order:hover, 
    .woocommerce-page #payment #place_order:hover,
    .woocommerce form.checkout_coupon .button:hover,
    .woocommerce table.cart td.actions .button:hover{
         background-color: {$colors['text_link']} !important;
         border-color: {$colors['text_link']} !important;
    }
    
    .post_item .post_title a:hover, 
    .post_item .post_title a:focus{
         color: {$colors['text_dark']};
    }
    
   
    .trx_addons_scroll_to_top,
    .trx_addons_cv .trx_addons_scroll_to_top{
        border-color: {$colors['alter_link']};
        color: {$colors['text_dark']};
        background-color: {$colors['alter_link']};
    }

    .nav-links-more a:hover,
    .woocommerce-links-more a:hover {
        border-color: {$colors['alter_hover2']};
        color: {$colors['extra_text']};
        background-color: {$colors['alter_hover2']};
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
    
    li.product .post_featured.hover_shop_buttons .icons a.sc_button_hover_strike{
         border-color: {$colors['text_link2']} !important;
         color: {$colors['text_link2']} !important;
    }
    /*Recipe*/
    .wprm-recipe-template-classic{
        border-color: {$colors['bd_color']};
        background-color: transparent;
    }
    body .wprm-recipe-template-classic{
        color: {$colors['text']};
    }
    body .wprm-recipe-block-container-columns .wprm-recipe-details-label{
        color: {$colors['text_dark']};
    }
    
    .wprm-recipe-instructions > li:before{
          background-color: {$colors['text_link']};
           color: {$colors['text_link2']};
    }
    
    .trx_addons_audio_player.without_cover, 
    .format-audio .post_featured.without_thumb .post_audio{
        background-color: {$colors['inverse_hover']};
    }
    .mejs-controls .mejs-button>button{
         background-color: {$colors['text_link']} !important;
    }
    .mejs-controls .mejs-button>button:hover{
         background-color: {$colors['text_hover']} !important;
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
    .blog_style_classic_2 .post_wrap_block, 
    .blog_style_classic_3 .post_wrap_block,
    .sc_blogger_masonry .post_featured + .post_wrap_block,
    .widget_categories_list .categories_list_columns .categories_list_item{
        border-color: {$colors['bd_color']};
    }
    .widget_categories_list .categories_list_style_1 .categories_list_item:hover .categories_list_title{
          color: {$colors['text_dark']};
    }
    
    .sc_blogger_list_simple .post_meta .post_meta_item.post_categories a{
        background-color: {$colors['alter_dark']};
        color: {$colors['alter_link2']} !important;
    }
    .sc_blogger_list_simple .post_meta .post_meta_item.post_categories a:hover{
        background-color: {$colors['text_hover']};
        color: {$colors['text_link2']} !important;
    }
    .sc_blogger_masonry .post_item .post_meta a.post_meta_item:hover{
        color: {$colors['text_hover']};
    }
    figure figcaption, 
    .wp-caption .wp-caption-text, 
    .wp-caption .wp-caption-dd, 
    .wp-caption-overlay .wp-caption .wp-caption-text, 
    .wp-caption-overlay .wp-caption .wp-caption-dd{
        color: {$colors['text_link2']} !important;
    }
    figure figcaption, 
    .wp-caption .wp-caption-text, 
    .wp-caption .wp-caption-dd, 
    .wp-caption-overlay .wp-caption .wp-caption-text, 
    .wp-caption-overlay .wp-caption .wp-caption-dd{
        background-color: {$colors['text_link']} !important;
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
    }
    form.mc4wp-form .mc4wp-alert a:hover,
    .sc_edd_details .downloads_page_tags .downloads_page_data>a, 
    .widget_product_tag_cloud a, .scheme_default .widget_tag_cloud a{
          color: {$colors['text_link']} !important;
    }
    .sc_edd_details .downloads_page_tags .downloads_page_data>a:hover, 
    .widget_product_tag_cloud a:hover, .scheme_default .widget_tag_cloud a:hover{
        color: {$colors['text_link2']} !important;
        background-color: {$colors['text_dark']} ;
    }
    .post_item_single .post_content .post_meta .post_share .socials_type_block .social_item:hover .social_icon {
        color: {$colors['text_link2']} !important;
        background-color: {$colors['text_dark']} !important;
    }
    .comments_list_wrap .comment_author a:hover{
        color: {$colors['text_hover']} !important;
    }
    .sc_layouts_menu_popup .sc_layouts_menu_nav, 
    .sc_layouts_menu_nav > li ul{
        background-color: {$colors['alter_bg_hover']} ;
    }
    
    .widget.woocommerce .buttons a:not(.sc_button_hover_strike) {
		color: {$colors['text_hover']};
		border-color: {$colors['text_hover']};
	}
	.widget.woocommerce .buttons a:not(.sc_button_hover_strike):hover {
		color: {$colors['text_link']};
		border-color: {$colors['text_link']};
	}
	.sc_blogger_item_default:hover .sc_blogger_item_body,
	.sc_blogger_masonry .sc_item_content .post_item:hover,
	.widget_categories_list .categories_list_columns .categories_list_item:hover,
	.sc_blogger_item_default:hover .sc_blogger_item_body{
	    -webkit-box-shadow: 0px 10px 27px -13px {$colors['text_dark_03']};
	    -ms-box-shadow: 0px 10px 27px -13px {$colors['text_dark_03']};
			box-shadow: 0px 10px 27px -13px {$colors['text_dark_03']};	
	}
	
	.related_wrap.related_style_classic .related_item:hover{
	    -webkit-box-shadow: 0 0 15px -2px {$colors['text_dark_03']};
	    -ms-box-shadow: 0 0 15px -2px {$colors['text_dark_03']};
		box-shadow: 0 0 15px -2px {$colors['text_dark_03']};
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
        background-color: {$colors['bg_color']} ;
    }
    .trx_addons_demo_options_wrapper .trx_addons_demo_options_toolbar a{
         color: {$colors['alter_hover']};
    }
    
    .sc_blogger_item_list .post_meta_item{
        color: {$colors['alter_dark']};
    }
    .wprm-recipe-template-classic .wprm-recipe-name, 
    .wprm-recipe-template-classic .wprm-recipe-header{
        color: {$colors['text_dark']};
    }
    
        
}

CSS;
		}

		return $css;
	}
}

