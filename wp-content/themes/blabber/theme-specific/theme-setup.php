<?php
/**
 * Setup theme-specific fonts and colors
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0.22
 */

// If this theme is a free version of premium theme
if ( ! defined( 'BLABBER_THEME_FREE' ) ) {
	define( 'BLABBER_THEME_FREE', false );
}
if ( ! defined( 'BLABBER_THEME_FREE_WP' ) ) {
	define( 'BLABBER_THEME_FREE_WP', false );
}

// If this theme is a part of Envato Elements
if ( ! defined( 'BLABBER_THEME_IN_ENVATO_ELEMENTS' ) ) {
	define( 'BLABBER_THEME_IN_ENVATO_ELEMENTS', false );
}

// If this theme uses multiple skins
if ( ! defined( 'BLABBER_ALLOW_SKINS' ) ) {
	define( 'BLABBER_ALLOW_SKINS', true );
}
if ( ! defined( 'BLABBER_DEFAULT_SKIN' ) ) {
	define( 'BLABBER_DEFAULT_SKIN', 'default' );
}



// Theme storage
// Attention! Must be in the global namespace to compatibility with WP CLI
//-------------------------------------------------------------------------
$GLOBALS['BLABBER_STORAGE'] = array(

	// Key validator: market[env|loc]-vendor[axiom|ancora|themerex]
	'theme_pro_key'       => 'env-ancora',

	// Generate Personal token from Envato to automatic upgrade theme
	'upgrade_token_url'   => '//build.envato.com/create-token/?default=t&purchase:download=t&purchase:list=t',

	// Theme-specific URLs (will be escaped in place of the output)
	'theme_demo_url'      => '//blabber.ancorathemes.com',
	'theme_doc_url'       => '//blabber.ancorathemes.com/doc',

	'theme_upgrade_url'   => '//upgrade.themerex.net/',

	'theme_demofiles_url' => '//demofiles.ancorathemes.com/blabber/',
	
	'theme_rate_url'      => '//themeforest.net/download',

	'theme_custom_url'    => '//themerex.net/offers/?utm_source=offers&utm_medium=click&utm_campaign=themeinstall',

	'theme_download_url'  => '//themeforest.net/user/ancorathemes/portfolio',        // Ancora

	'theme_support_url'   => '//themerex.net/support/',

	'theme_video_url'     => '//www.youtube.com/channel/UCdIjRh7-lPVHqTTKpaf8PLA',   // Ancora

	'theme_privacy_url'   => '//ancorathemes.com/privacy-policy/',                   // Ancora

	// Comma separated slugs of theme-specific categories (for get relevant news in the dashboard widget)
	// (i.e. 'children,kindergarten')
	'theme_categories'    => '',

	// Responsive resolutions
	// Parameters to create css media query: min, max
	'responsive'          => array(
		// By size
		'xxl'        => array( 'max' => 1679 ),
		'xl'         => array( 'max' => 1439 ),
		'lg'         => array( 'max' => 1279 ),
		'md_over'    => array( 'min' => 1024 ),
		'md'         => array( 'max' => 1023 ),
		'sm'         => array( 'max' => 767 ),
		'sm_wp'      => array( 'max' => 600 ),
		'xs'         => array( 'max' => 479 ),
		// By device
		'wide'       => array(
			'min' => 2160
		),
		'desktop'    => array(
			'min' => 1680,
			'max' => 2159,
		),
		'notebook'   => array(
			'min' => 1280,
			'max' => 1679,
		),
		'tablet'     => array(
			'min' => 768,
			'max' => 1279,
		),
		'not_mobile' => array(
			'min' => 768
		),
		'mobile'     => array(
			'max' => 767
		),
	),
);


//------------------------------------------------------------------------
// One-click import support
//------------------------------------------------------------------------

// Set theme specific importer options
if ( ! function_exists( 'blabber_importer_set_options' ) ) {
	add_filter( 'trx_addons_filter_importer_options', 'blabber_importer_set_options', 9 );
	function blabber_importer_set_options( $options = array() ) {
		if ( is_array( $options ) ) {
			// Save or not installer's messages to the log-file
			$options['debug'] = false;
			// Allow import/export functionality
			$options['allow_import'] = true;
			$options['allow_export'] = false;
			// Prepare demo data
			$options['demo_url'] = esc_url( blabber_get_protocol() . ':' . blabber_storage_get( 'theme_demofiles_url' ) );
			// Required plugins
			$options['required_plugins'] = array_keys( blabber_storage_get( 'required_plugins' ) );
			// Set number of thumbnails (usually 3 - 5) to regenerate at once when its imported (if demo data was zipped without cropped images)
			// Set 0 to prevent regenerate thumbnails (if demo data archive is already contain cropped images)
			$options['regenerate_thumbnails'] = 0;
			// Default demo
			$options['files']['default']['title']       = esc_html__( 'Blabber Demo', 'blabber' );
			$options['files']['default']['domain_dev']  = '';                     // Developers domain
			$options['files']['default']['domain_demo'] = esc_url( blabber_get_protocol() . ':' . blabber_storage_get( 'theme_demo_url' ) );   // Demo-site domain
			// If theme need more demo - just copy 'default' and change required parameter
			// For example:
			// 		$options['files']['dark_demo'] = $options['files']['default'];
			// 		$options['files']['dark_demo']['title'] = esc_html__('Dark Demo', 'blabber');
			
			// The array with theme-specific banners, displayed during demo-content import.
			// If array with banners is empty - the banners are uploaded directly from demo-content server.
			$options['banners'] = array();
		}
		return $options;
	}
}


//------------------------------------------------------------------------
// OCDI support
//------------------------------------------------------------------------

// Set theme specific OCDI options
if ( ! function_exists( 'blabber_ocdi_set_options' ) ) {
	add_filter( 'trx_addons_filter_ocdi_options', 'blabber_ocdi_set_options', 9 );
	function blabber_ocdi_set_options( $options = array() ) {
		if ( is_array( $options ) ) {
			// Prepare demo data
			$options['demo_url'] = esc_url( blabber_get_protocol() . ':' . blabber_storage_get( 'theme_demofiles_url' ) );
			// Required plugins
			$options['required_plugins'] = array_keys( blabber_storage_get( 'required_plugins' ) );
			// Demo-site domain
			$options['files']['ocdi']['title']       = esc_html__( 'Blabber OCDI Demo', 'blabber' );
			$options['files']['ocdi']['domain_demo'] = esc_url( blabber_get_protocol() . ':' . blabber_storage_get( 'theme_demo_url' ) );
			// If theme need more demo - just copy 'default' and change required parameter
			// For example:
			//$options['files']['dota']['title'] = esc_html__('Dota Paradise Demo', 'blabber');
			//$options['files']['dota']['domain_demo'] = esc_url(blabber_get_protocol().'://dota.themerex.net');
		}
		return $options;
	}
}



// THEME-SUPPORTED PLUGINS
// If plugin not need - remove its settings from next array
//----------------------------------------------------------
$blabber_theme_required_plugins_group = esc_html__( 'Core', 'blabber' );
$blabber_theme_required_plugins = array(
	// Section: "CORE" (required plugins)
	// DON'T COMMENT OR REMOVE NEXT LINES!
	'trx_addons'         => array(
								'title'       => esc_html__( 'ThemeREX Addons', 'blabber' ),
								'description' => esc_html__( "Will allow you to install recommended plugins, demo content, and improve the theme's functionality overall with multiple theme options", 'blabber' ),
								'required'    => true,
								'logo'        => 'logo.png',
								'group'       => $blabber_theme_required_plugins_group,
							),
);

// Section: "PAGE BUILDERS"
$blabber_theme_required_plugins_group = esc_html__( 'Page Builders', 'blabber' );
$blabber_theme_required_plugins['elementor'] = array(
	'title'       => esc_html__( 'Elementor', 'blabber' ),
	'description' => esc_html__( "Is a beautiful PageBuilder, even the free version of which allows you to create great pages using a variety of modules.", 'blabber' ),
	'required'    => false,
	'logo'        => 'logo.png',
	'group'       => $blabber_theme_required_plugins_group,
);
$blabber_theme_required_plugins['gutenberg'] = array(
	'title'       => esc_html__( 'Gutenberg', 'blabber' ),
	'description' => esc_html__( "It's a posts editor coming in place of the classic TinyMCE. Can be installed and used in parallel with Elementor", 'blabber' ),
	'required'    => false,
	'install'     => false,      // Do not offer installation of the plugin in the Theme Dashboard and TGMPA
	'logo'        => 'logo.png',
	'group'       => $blabber_theme_required_plugins_group,
);
if ( ! BLABBER_THEME_FREE ) {
	$blabber_theme_required_plugins['js_composer']          = array(
		'title'       => esc_html__( 'WPBakery PageBuilder', 'blabber' ),
		'description' => esc_html__( "Popular PageBuilder which allows you to create excellent pages", 'blabber' ),
		'required'    => false,
		'install'     => false,      // Do not offer installation of the plugin in the Theme Dashboard and TGMPA
		'logo'        => 'logo.jpg',
		'group'       => $blabber_theme_required_plugins_group,
	);
}

// Section: "E-COMMERCE"
$blabber_theme_required_plugins_group = esc_html__( 'E-Commerce', 'blabber' );
$blabber_theme_required_plugins['woocommerce']              = array(
	'title'       => esc_html__( 'WooCommerce', 'blabber' ),
	'description' => esc_html__( "Connect the store to your website and start selling now", 'blabber' ),
	'required'    => false,
	'logo'        => 'logo.png',
	'group'       => $blabber_theme_required_plugins_group,
);

// Section: "SOCIALS & COMMUNITIES"
$blabber_theme_required_plugins_group = esc_html__( 'Socials and Communities', 'blabber' );
$blabber_theme_required_plugins['instagram-feed']   = array(
	'title'       => esc_html__( 'Instagram Feed', 'blabber' ),
	'description' => esc_html__( "Displays the latest photos from your profile on Instagram", 'blabber' ),
	'required'    => false,
	'logo'        => 'logo.png',
	'group'       => $blabber_theme_required_plugins_group,
);
$blabber_theme_required_plugins['mailchimp-for-wp'] = array(
	'title'       => esc_html__( 'MailChimp for WP', 'blabber' ),
	'description' => esc_html__( "Allows visitors to subscribe to newsletters", 'blabber' ),
	'required'    => false,
	'logo'        => 'logo.png',
	'group'       => $blabber_theme_required_plugins_group,
);

// Section: "CONTENT"
$blabber_theme_required_plugins_group = esc_html__( 'Content', 'blabber' );
$blabber_theme_required_plugins['contact-form-7'] = array(
	'title'       => esc_html__( 'Contact Form 7', 'blabber' ),
	'description' => esc_html__( "CF7 allows you to create an unlimited number of contact forms", 'blabber' ),
	'required'    => false,
	'logo'        => 'logo.jpg',
	'group'       => $blabber_theme_required_plugins_group,
);
if ( ! BLABBER_THEME_FREE ) {
	$blabber_theme_required_plugins['essential-grid']             = array(
		'title'       => esc_html__( 'Essential Grid', 'blabber' ),
		'description' => '',
		'required'    => false,
		'logo'        => 'logo.png',
		'group'       => $blabber_theme_required_plugins_group,
	);
	$blabber_theme_required_plugins['sitepress-multilingual-cms'] = array(
		'title'       => esc_html__( 'WPML - Sitepress Multilingual CMS', 'blabber' ),
		'description' => esc_html__( "Allows you to make your website multilingual", 'blabber' ),
		'required'    => false,
		'install'     => false,      // Do not offer installation of the plugin in the Theme Dashboard and TGMPA
		'logo'        => 'logo.png',
		'group'       => $blabber_theme_required_plugins_group,
	);
}

// Section: "OTHER"
$blabber_theme_required_plugins_group = esc_html__( 'Other', 'blabber' );
$blabber_theme_required_plugins['wp-gdpr-compliance'] = array(
	'title'       => esc_html__( 'WP GDPR Compliance', 'blabber' ),
	'description' => esc_html__( "Allow visitors to decide for themselves what personal data they want to store on your site", 'blabber' ),
	'required'    => false,
	'logo'        => 'logo.png',
	'group'       => $blabber_theme_required_plugins_group,
);

// Add plugins list to the global storage
$GLOBALS['BLABBER_STORAGE']['required_plugins'] = $blabber_theme_required_plugins;



// THEME-SPECIFIC BLOG LAYOUTS
//----------------------------------------------
$blabber_theme_blog_styles = array(
	'excerpt' => array(
		'title'   => esc_html__( 'Standard', 'blabber' ),
		'archive' => 'index-excerpt',
		'item'    => 'content-excerpt',
		'styles'  => 'excerpt',
	),
	'classic' => array(
		'title'   => esc_html__( 'Classic', 'blabber' ),
		'archive' => 'index-classic',
		'item'    => 'content-classic',
		'columns' => array( 2, 3 ),
		'styles'  => 'classic',
	),
);
if ( ! BLABBER_THEME_FREE ) {
	$blabber_theme_blog_styles['masonry']   = array(
		'title'   => esc_html__( 'Masonry', 'blabber' ),
		'archive' => 'index-classic',
		'item'    => 'content-classic',
		'columns' => array( 2, 3 ),
        'scripts' => 'masonry',
		'styles'  => 'masonry',
	);
	$blabber_theme_blog_styles['portfolio'] = array(
		'title'   => esc_html__( 'Portfolio', 'blabber' ),
		'archive' => 'index-portfolio',
		'item'    => 'content-portfolio',
		'columns' => array( 2, 3, 4 ),
		'styles'  => 'portfolio',
	);
	$blabber_theme_blog_styles['gallery']   = array(
		'title'   => esc_html__( 'Gallery', 'blabber' ),
		'archive' => 'index-portfolio',
		'item'    => 'content-portfolio-gallery',
		'columns' => array( 2, 3, 4 ),
		'styles'  => array( 'portfolio', 'gallery' ),
	);
	$blabber_theme_blog_styles['chess']     = array(
		'title'   => esc_html__( 'Chess', 'blabber' ),
		'archive' => 'index-chess',
		'item'    => 'content-chess',
		'columns' => array( 1, 2, 3 ),
		'styles'  => 'chess',
	);
}

// Add list of blog styles to the global storage
$GLOBALS['BLABBER_STORAGE']['blog_styles'] = $blabber_theme_blog_styles;



// THEME-SPECIFIC SINGLE POST LAYOUTS
//----------------------------------------------
$blabber_theme_single_styles = array(
	'in-above'   => array(
		'title'  => esc_html__( 'The image inside the content area, the title above image', 'blabber' ),
		'styles' => 'in-above',
	),
	'in-below'   => array(
		'title'  => esc_html__( 'The image inside the content area, the title below image', 'blabber' ),
		'styles' => 'in-below',
	),
	'in-over'    => array(
		'title'  => esc_html__( 'The image inside the content area, the title over image', 'blabber' ),
		'styles' => 'in-over',
	),
	'in-sticky'  => array(
		'title'  => esc_html__( 'The image inside the content area, the title is stick at the bottom side of the image', 'blabber' ),
		'styles' => 'in-sticky',
	),
	'out-below-boxed'  => array(
		'title'  => esc_html__( 'Boxed image above the content area, the title below image', 'blabber' ),
		'styles' => 'out-below-boxed',
	),
	'out-over-boxed'   => array(
		'title'  => esc_html__( 'Boxed image above the content area, the title over image', 'blabber' ),
		'styles' => 'out-over-boxed',
	),
	'out-sticky-boxed' => array(
		'title'  => esc_html__( 'Boxed image above the content area, the title is stick at the bottom side of the image', 'blabber' ),
		'styles' => 'out-sticky-boxed',
	),
	'out-below-fullwidth'  => array(
		'title'  => esc_html__( 'Fullwidth image above the content area, the title below image', 'blabber' ),
		'styles' => 'out-below-fullwidth',
	),
	'out-over-fullwidth'   => array(
		'title'  => esc_html__( 'Fullwidth the content area, the title over image', 'blabber' ),
		'styles' => 'out-over-fullwidth',
	),
	'out-sticky-fullwidth' => array(
		'title'  => esc_html__( 'Fullwidth the content area, the title is stick at the bottom side of the image', 'blabber' ),
		'styles' => 'out-sticky-fullwidth',
	),
);

// Add list of single post styles to the global storage
$GLOBALS['BLABBER_STORAGE']['single_styles'] = $blabber_theme_single_styles;


// Theme init priorities:
// Action 'after_setup_theme'
// 1 - register filters to add/remove lists items in the Theme Options
// 2 - create Theme Options
// 3 - add/remove Theme Options elements
// 5 - load Theme Options. Attention! After this step you can use only basic options (not overriden)
// 9 - register other filters (for installer, etc.)
//10 - standard Theme init procedures (not ordered)
// Action 'wp_loaded'
// 1 - detect override mode. Attention! Only after this step you can use overriden options (separate values for the shop, courses, etc.)

if ( ! function_exists( 'blabber_customizer_theme_setup1' ) ) {
	add_action( 'after_setup_theme', 'blabber_customizer_theme_setup1', 1 );
	function blabber_customizer_theme_setup1() {

		// -----------------------------------------------------------------
		// -- ONLY FOR PROGRAMMERS, NOT FOR CUSTOMER
		// -- Internal theme settings
		// -----------------------------------------------------------------
		blabber_storage_set(
			'settings', array(

				'duplicate_options'      => 'child',                    // none  - use separate options for the main and the child-theme
																		// child - duplicate theme options from the main theme to the child-theme only
																		// both  - sinchronize changes in the theme options between main and child themes

				'customize_refresh'      => 'auto',                     // Refresh method for preview area in the Appearance - Customize:
																		// auto - refresh preview area on change each field with Theme Options
																		// manual - refresh only obn press button 'Refresh' at the top of Customize frame

				'max_load_fonts'         => 5,                          // Max fonts number to load from Google fonts or from uploaded fonts

				'comment_after_name'     => true,                       // Place 'comment' field after the 'name' and 'email'

				'show_author_avatar'     => false,                       // Display author's avatar in the post meta

				'icons_selector'         => 'internal',                 // Icons selector in the shortcodes:
																		// vc (default) - standard VC (very slow) or Elementor's icons selector (not support images and svg)
																		// internal - internal popup with plugin's or theme's icons list (fast and support images and svg)

				'icons_type'             => 'icons',                    // Type of icons (if 'icons_selector' is 'internal'):
																		// icons  - use font icons to present icons
																		// images - use images from theme's folder trx_addons/css/icons.png
																		// svg    - use svg from theme's folder trx_addons/css/icons.svg

				'socials_type'           => 'icons',                    // Type of socials icons (if 'icons_selector' is 'internal'):
																		// icons  - use font icons to present social networks
																		// images - use images from theme's folder trx_addons/css/icons.png
																		// svg    - use svg from theme's folder trx_addons/css/icons.svg

				'check_min_version'      => true,                       // Check if exists a .min version of .css and .js and return path to it
																		// instead the path to the original file
																		// (if debug_mode is on and modification time of the original file < time of the .min file)

				'autoselect_menu'        => false,                      // Show any menu if no menu selected in the location 'main_menu'
																		// (for example, the theme is just activated)

				'disable_jquery_ui'      => false,                      // Prevent loading custom jQuery UI libraries in the third-party plugins

				'use_mediaelements'      => true,                       // Load script "Media Elements" to play video and audio

				'tgmpa_upload'           => false,                      // Allow upload not pre-packaged plugins via TGMPA

				'allow_no_image'         => false,                      // Allow to use theme-specific image placeholder if no image present in the blog, related posts, post navigation, etc.

				'separate_schemes'       => true,                       // Save color schemes to the separate files __color_xxx.css (true) or append its to the __custom.css (false)

				'allow_fullscreen'       => false,                      // Allow cases 'fullscreen' and 'fullwide' for the body style in the Theme Options
																		// In the Page Options this styles are present always
																		// (can be removed if filter 'blabber_filter_allow_fullscreen' return false)

				'attachments_navigation' => false,                      // Add arrows on the single attachment page to navigate to the prev/next attachment

				'gutenberg_safe_mode'    => array(),                    // 'vc', 'elementor' - Prevent simultaneous editing of posts for Gutenberg and other PageBuilders (VC, Elementor)

				'gutenberg_add_context'  => false,                      // Add context to the Gutenberg editor styles with our method (if true - use if any problem with editor styles) or use native Gutenberg way via add_editor_style() (if false - used by default)

				'allow_gutenberg_blocks' => true,                       // Allow our shortcodes and widgets as blocks in the Gutenberg (not ready yet - in the development now)

				'subtitle_above_title'   => true,                       // Put subtitle above the title in the shortcodes

				'add_hide_on_xxx'        => 'replace',                  // Add our breakpoints to the Responsive section of each element
																		// 'add' - add our breakpoints after Elementor's
																		// 'replace' - add our breakpoints instead Elementor's
																		// 'none' - don't add our breakpoints (using only Elementor's)
			)
		);


		// -----------------------------------------------------------------
		// -- Theme colors for customizer
		// -- Attention! Inner scheme must be last in the array below
		// -----------------------------------------------------------------
		blabber_storage_set(
			'scheme_color_groups', array(
				'main'    => array(
					'title'       => __( 'Main', 'blabber' ),
					'description' => __( 'Colors of the main content area', 'blabber' ),
				),
				'alter'   => array(
					'title'       => __( 'Alter', 'blabber' ),
					'description' => __( 'Colors of the alternative blocks (sidebars, etc.)', 'blabber' ),
				),
				'extra'   => array(
					'title'       => __( 'Extra', 'blabber' ),
					'description' => __( 'Colors of the extra blocks (dropdowns, price blocks, table headers, etc.)', 'blabber' ),
				),
				'inverse' => array(
					'title'       => __( 'Inverse', 'blabber' ),
					'description' => __( 'Colors of the inverse blocks - when link color used as background of the block (dropdowns, blockquotes, etc.)', 'blabber' ),
				),
				'input'   => array(
					'title'       => __( 'Input', 'blabber' ),
					'description' => __( 'Colors of the form fields (text field, textarea, select, etc.)', 'blabber' ),
				),
			)
		);
		blabber_storage_set(
			'scheme_color_names', array(
				'bg_color'    => array(
					'title'       => __( 'Background color', 'blabber' ),
					'description' => __( 'Background color of this block in the normal state', 'blabber' ),
				),
				'bg_hover'    => array(
					'title'       => __( 'Background hover', 'blabber' ),
					'description' => __( 'Background color of this block in the hovered state', 'blabber' ),
				),
				'bd_color'    => array(
					'title'       => __( 'Border color', 'blabber' ),
					'description' => __( 'Border color of this block in the normal state', 'blabber' ),
				),
				'bd_hover'    => array(
					'title'       => __( 'Border hover', 'blabber' ),
					'description' => __( 'Border color of this block in the hovered state', 'blabber' ),
				),
				'text'        => array(
					'title'       => __( 'Text', 'blabber' ),
					'description' => __( 'Color of the plain text inside this block', 'blabber' ),
				),
				'text_dark'   => array(
					'title'       => __( 'Text dark', 'blabber' ),
					'description' => __( 'Color of the dark text (bold, header, etc.) inside this block', 'blabber' ),
				),
				'text_light'  => array(
					'title'       => __( 'Text light', 'blabber' ),
					'description' => __( 'Color of the light text (post meta, etc.) inside this block', 'blabber' ),
				),
				'text_link'   => array(
					'title'       => __( 'Link', 'blabber' ),
					'description' => __( 'Color of the links inside this block', 'blabber' ),
				),
				'text_hover'  => array(
					'title'       => __( 'Link hover', 'blabber' ),
					'description' => __( 'Color of the hovered state of links inside this block', 'blabber' ),
				),
				'text_link2'  => array(
					'title'       => __( 'Link 2', 'blabber' ),
					'description' => __( 'Color of the accented texts (areas) inside this block', 'blabber' ),
				),
				'text_hover2' => array(
					'title'       => __( 'Link 2 hover', 'blabber' ),
					'description' => __( 'Color of the hovered state of accented texts (areas) inside this block', 'blabber' ),
				),
				'text_link3'  => array(
					'title'       => __( 'Link 3', 'blabber' ),
					'description' => __( 'Color of the other accented texts (buttons) inside this block', 'blabber' ),
				),
				'text_hover3' => array(
					'title'       => __( 'Link 3 hover', 'blabber' ),
					'description' => __( 'Color of the hovered state of other accented texts (buttons) inside this block', 'blabber' ),
				),
			)
		);



		
		// Simple scheme editor: lists the colors to edit in the "Simple" mode.
		// For each color you can set the array of 'slave' colors and brightness factors that are used to generate new values,
		// when 'main' color is changed
		// Leave 'slave' arrays empty if your scheme does not have a color dependency
		blabber_storage_set(
			'schemes_simple', array(
				'text_link'        => array(),
				'text_hover'       => array(),
				'text_link2'       => array(),
				'text_hover2'      => array(),
				'text_link3'       => array(),
				'text_hover3'      => array(),
				'alter_link'       => array(),
				'alter_hover'      => array(),
				'alter_link2'      => array(),
				'alter_hover2'     => array(),
				'alter_link3'      => array(),
				'alter_hover3'     => array(),
				'extra_link'       => array(),
				'extra_hover'      => array(),
				'extra_link2'      => array(),
				'extra_hover2'     => array(),
				'extra_link3'      => array(),
				'extra_hover3'     => array(),
				'inverse_bd_color' => array(),
				'inverse_bd_hover' => array(),
			)
		);



		// Parameters to set order of schemes in the css
		blabber_storage_set(
			'schemes_sorted', array(
				'color_scheme',
				'header_scheme',
				'menu_scheme',
				'sidebar_scheme',
				'footer_scheme',
			)
		);

		// -----------------------------------------------------------------
		// -- Theme specific thumb sizes
		// -----------------------------------------------------------------
		blabber_storage_set(
			'theme_thumbs', apply_filters(
				'blabber_filter_add_thumb_sizes', array(
					// Width of the image is equal to the content area width (without sidebar)
					// Height is fixed
					'blabber-thumb-huge'        => array(
						'size'  => array( 1170, 658, true ),
						'title' => esc_html__( 'Huge image', 'blabber' ),
						'subst' => 'trx_addons-thumb-huge',
					),
					// Width of the image is equal to the content area width (with sidebar)
					// Height is fixed
					'blabber-thumb-big'         => array(
						'size'  => array( 770, 434, true ),
						'title' => esc_html__( 'Large image', 'blabber' ),
						'subst' => 'trx_addons-thumb-big',
					),

					// Width of the image is equal to the 1/3 of the content area width (without sidebar)
					// Height is fixed
					'blabber-thumb-med'         => array(
						'size'  => array( 440, 248, true ), // 370, 20
						'title' => esc_html__( 'Medium image', 'blabber' ),
						'subst' => 'trx_addons-thumb-medium',
					),

					// Small square image (for avatars in comments, etc.)
					'blabber-thumb-tiny'        => array(
						'size'  => array( 95, 95, true ),
						'title' => esc_html__( 'Small square avatar', 'blabber' ),
						'subst' => 'trx_addons-thumb-tiny',
					),

					// Width of the image is equal to the content area width (with sidebar)
					// Height is proportional (only downscale, not crop)
					'blabber-thumb-masonry-big' => array(
						'size'  => array( 760, 0, false ),     // Only downscale, not crop
						'title' => esc_html__( 'Masonry Large (scaled)', 'blabber' ),
						'subst' => 'trx_addons-thumb-masonry-big',
					),

					// Width of the image is equal to the 1/3 of the full content area width (without sidebar)
					// Height is proportional (only downscale, not crop)
					'blabber-thumb-masonry'     => array(
						'size'  => array( 370, 0, false ),     // Only downscale, not crop
						'title' => esc_html__( 'Masonry (scaled)', 'blabber' ),
						'subst' => 'trx_addons-thumb-masonry',
					),

                    'blabber-thumb-extra'     => array(
                        'size'  => array( 570, 764, true ),
                        'title' => esc_html__( 'Extra', 'blabber' ),
                        'subst' => 'trx_addons-thumb-extra',
                    ),

                    'blabber-thumb-wide'     => array(
                        'size'  => array( 600, 390, true ),
                        'title' => esc_html__( 'Wide', 'blabber' ),
                        'subst' => 'trx_addons-thumb-wide',
                    ),
				)
			)
		);
	}
}


// -----------------------------------------------------------------
// -- Theme options for customizer
// -----------------------------------------------------------------
if ( ! function_exists( 'blabber_create_theme_options' ) ) {

	function blabber_create_theme_options() {

		// Message about options override.
		// Attention! Not need esc_html() here, because this message put in wp_kses_data() below
		$msg_override = __( 'Attention! Some of these options can be overridden in the following sections (Blog, Plugins settings, etc.) or in the settings of individual pages. If you changed such parameter and nothing happened on the page, this option may be overridden in the corresponding section or in the Page Options of this page. These options are marked with an asterisk (*) in the title.', 'blabber' );

		// Color schemes number: if < 2 - hide fields with selectors
		$hide_schemes = count( blabber_storage_get( 'schemes' ) ) < 2;

		blabber_storage_set(

			'options', array(

				// 'Logo & Site Identity'
				//---------------------------------------------
				'title_tagline'                 => array(
					'title'    => esc_html__( 'Logo & Site Identity', 'blabber' ),
					'desc'     => '',
					'priority' => 10,
					'type'     => 'section',
				),
				'logo_info'                     => array(
					'title'    => esc_html__( 'Logo Settings', 'blabber' ),
					'desc'     => '',
					'priority' => 20,
					'qsetup'   => esc_html__( 'General', 'blabber' ),
					'type'     => 'info',
				),
				'logo_text'                     => array(
					'title'    => esc_html__( 'Use Site Name as Logo', 'blabber' ),
					'desc'     => wp_kses_data( __( 'Use the site title and tagline as a text logo if no image is selected', 'blabber' ) ),
					'class'    => 'blabber_column-1_2 blabber_new_row',
					'priority' => 30,
					'std'      => 1,
					'qsetup'   => esc_html__( 'General', 'blabber' ),
					'type'     => BLABBER_THEME_FREE ? 'hidden' : 'checkbox',
				),
				'logo_retina_enabled'           => array(
					'title'    => esc_html__( 'Allow retina display logo', 'blabber' ),
					'desc'     => wp_kses_data( __( 'Show fields to select logo images for Retina display', 'blabber' ) ),
					'class'    => 'blabber_column-1_2',
					'priority' => 40,
					'refresh'  => false,
					'std'      => 0,
					'type'     => BLABBER_THEME_FREE ? 'hidden' : 'checkbox',
				),
				'logo_zoom'                     => array(
					'title'   => esc_html__( 'Logo zoom', 'blabber' ),
					'desc'    => wp_kses_post(
									__( 'Zoom the logo (set 1 to leave original size).', 'blabber' )
									. ' <br>'
									. __( 'Attention! For this parameter to affect images, their max-height should be specified in "em" instead of "px" when creating a header.', 'blabber' )
									. ' <br>'
									. __( 'In this case maximum size of logo depends on the actual size of the picture.', 'blabber' )
								),
					'std'     => 1,
					'min'     => 0.2,
					'max'     => 2,
					'step'    => 0.1,
					'refresh' => false,
					'type'    => BLABBER_THEME_FREE ? 'hidden' : 'slider',
				),
				// Parameter 'logo' was replaced with standard WordPress 'custom_logo'
				'logo_retina'                   => array(
					'title'      => esc_html__( 'Logo for Retina', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Select or upload site logo used on Retina displays (if empty - use default logo from the field above)', 'blabber' ) ),
					'class'      => 'blabber_column-1_2',
					'priority'   => 70,
					'dependency' => array(
						'logo_retina_enabled' => array( 1 ),
					),
					'std'        => '',
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'image',
				),
				'logo_mobile_header'            => array(
					'title' => esc_html__( 'Logo for the mobile header', 'blabber' ),
					'desc'  => wp_kses_data( __( 'Select or upload site logo to display it in the mobile header (if enabled in the section "Header - Header mobile"', 'blabber' ) ),
					'class' => 'blabber_column-1_2 blabber_new_row',
					'std'   => '',
					'type'  => 'image',
				),
				'logo_mobile_header_retina'     => array(
					'title'      => esc_html__( 'Logo for the mobile header on Retina', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Select or upload site logo used on Retina displays (if empty - use default logo from the field above)', 'blabber' ) ),
					'class'      => 'blabber_column-1_2',
					'dependency' => array(
						'logo_retina_enabled' => array( 1 ),
					),
					'std'        => '',
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'image',
				),
				'logo_mobile'                   => array(
					'title' => esc_html__( 'Logo for the mobile menu', 'blabber' ),
					'desc'  => wp_kses_data( __( 'Select or upload site logo to display it in the mobile menu', 'blabber' ) ),
					'class' => 'blabber_column-1_2 blabber_new_row',
					'std'   => '',
					'type'  => 'image',
				),
				'logo_mobile_retina'            => array(
					'title'      => esc_html__( 'Logo mobile on Retina', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Select or upload site logo used on Retina displays (if empty - use default logo from the field above)', 'blabber' ) ),
					'class'      => 'blabber_column-1_2',
					'dependency' => array(
						'logo_retina_enabled' => array( 1 ),
					),
					'std'        => '',
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'image',
				),
				'logo_side'                     => array(
					'title' => esc_html__( 'Logo for the side menu', 'blabber' ),
					'desc'  => wp_kses_data( __( 'Select or upload site logo (with vertical orientation) to display it in the side menu', 'blabber' ) ),
					'class' => 'blabber_column-1_2 blabber_new_row',
					'std'   => '',
					'type'  => 'image',
				),
				'logo_side_retina'              => array(
					'title'      => esc_html__( 'Logo for the side menu on Retina', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Select or upload site logo (with vertical orientation) to display it in the side menu on Retina displays (if empty - use default logo from the field above)', 'blabber' ) ),
					'class'      => 'blabber_column-1_2',
					'dependency' => array(
						'logo_retina_enabled' => array( 1 ),
					),
					'std'        => '',
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'image',
				),



				// 'General settings'
				//---------------------------------------------
				'general'                       => array(
					'title'    => esc_html__( 'General', 'blabber' ),
					'desc'     => wp_kses_data( $msg_override ),
					'priority' => 20,
					'type'     => 'section',
				),

				'general_layout_info'           => array(
					'title'  => esc_html__( 'Layout', 'blabber' ),
					'desc'   => '',
					'qsetup' => esc_html__( 'General', 'blabber' ),
					'type'   => 'info',
				),
				'body_style'                    => array(
					'title'    => esc_html__( 'Body style', 'blabber' ),
					'desc'     => wp_kses_data( __( 'Select width of the body content', 'blabber' ) ),
					'override' => array(
						'mode'    => 'page,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Content', 'blabber' ),
					),
					'qsetup'   => esc_html__( 'General', 'blabber' ),
					'refresh'  => false,
					'std'      => 'wide',
					'options'  => blabber_get_list_body_styles( false ),
					'type'     => 'select',
				),
				'page_width'                    => array(
					'title'      => esc_html__( 'Page width', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Total width of the site content and sidebar (in pixels). If empty - use default width', 'blabber' ) ),
					'dependency' => array(
						'body_style' => array( 'boxed', 'wide' ),
					),
					'std'        => 1170,
					'min'        => 1000,
					'max'        => 1600,
					'step'       => 10,
					'refresh'    => false,
					'customizer' => 'page',               // SASS variable's name to preview changes 'on fly'
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'slider',
				),
				'page_boxed_extra'             => array(
					'title'      => esc_html__( 'Boxed page extra spaces', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Width of the extra side space on boxed pages', 'blabber' ) ),
					'dependency' => array(
						'body_style' => array( 'boxed' ),
					),
					'std'        => 60,
					'min'        => 0,
					'max'        => 150,
					'step'       => 10,
					'refresh'    => false,
					'customizer' => 'page_boxed_extra',   // SASS variable's name to preview changes 'on fly'
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'slider',
				),
				'boxed_bg_image'                => array(
					'title'      => esc_html__( 'Boxed bg image', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Select or upload image, used as background in the boxed body', 'blabber' ) ),
					'dependency' => array(
						'body_style' => array( 'boxed' ),
					),
					'override'   => array(
						'mode'    => 'page,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Content', 'blabber' ),
					),
					'std'        => '',
					'qsetup'     => esc_html__( 'General', 'blabber' ),
					//'hidden'     => true,
					'type'       => 'image',
				),
				'remove_margins'                => array(
					'title'    => esc_html__( 'Remove margins', 'blabber' ),
					'desc'     => wp_kses_data( __( 'Remove margins above and below the content area', 'blabber' ) ),
					'override' => array(
						'mode'    => 'page,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Content', 'blabber' ),
					),
					'refresh'  => false,
					'std'      => 0,
					'type'     => 'checkbox',
				),

				'general_sidebar_info'          => array(
					'title' => esc_html__( 'Sidebar', 'blabber' ),
					'desc'  => '',
					'type'  => 'info',
				),
				'sidebar_position'              => array(
					'title'    => esc_html__( 'Sidebar position', 'blabber' ),
					'desc'     => wp_kses_data( __( 'Select position to show sidebar', 'blabber' ) ),
					'override' => array(
						'mode'    => 'page',		// Override parameters for single posts moved to the 'sidebar_position_single'
						'section' => esc_html__( 'Widgets', 'blabber' ),
					),
					'std'      => 'right',
					'qsetup'   => esc_html__( 'General', 'blabber' ),
					'options'  => array(),
					'type'     => 'switch',
				),
				'sidebar_position_ss'       => array(
					'title'    => esc_html__( 'Sidebar position on the small screen', 'blabber' ),
					'desc'     => wp_kses_data( __( "Select position to move sidebar (if it's not hidden) on the small screen - above or below the content", 'blabber' ) ),
					'override' => array(
						'mode'    => 'page',		// Override parameters for single posts moved to the 'sidebar_position_ss_single'
						'section' => esc_html__( 'Widgets', 'blabber' ),
					),
					'dependency' => array(
						'sidebar_position' => array( '^hide' ),
					),
					'std'      => 'below',
					'qsetup'   => esc_html__( 'General', 'blabber' ),
					'options'  => array(),
					'type'     => 'switch',
				),
				'sidebar_widgets'               => array(
					'title'      => esc_html__( 'Sidebar widgets', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Select default widgets to show in the sidebar', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'page',		// Override parameters for single posts moved to the 'sidebar_widgets_single'
						'section' => esc_html__( 'Widgets', 'blabber' ),
					),
					'dependency' => array(
						'sidebar_position' => array( '^hide' ),
					),
					'std'        => 'sidebar_widgets',
					'options'    => array(),
					'qsetup'     => esc_html__( 'General', 'blabber' ),
					'type'       => 'select',
				),
				'sidebar_width'                 => array(
					'title'      => esc_html__( 'Sidebar width', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Width of the sidebar (in pixels). If empty - use default width', 'blabber' ) ),
					'std'        => 370,
					'min'        => 150,
					'max'        => 500,
					'step'       => 10,
					'refresh'    => false,
					'customizer' => 'sidebar',      // SASS variable's name to preview changes 'on fly'
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'slider',
				),
				'sidebar_gap'                   => array(
					'title'      => esc_html__( 'Sidebar gap', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Gap between content and sidebar (in pixels). If empty - use default gap', 'blabber' ) ),
					'std'        => 30,
					'min'        => 0,
					'max'        => 100,
					'step'       => 1,
					'refresh'    => false,
					'customizer' => 'gap',          // SASS variable's name to preview changes 'on fly'
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'slider',
				),
				'expand_content'                => array(
					'title'   => esc_html__( 'Expand content', 'blabber' ),
					'desc'    => wp_kses_data( __( 'Expand the content width if the sidebar is hidden', 'blabber' ) ),
					'refresh' => false,
					'override'   => array(
						'mode'    => 'page,post,product,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Widgets', 'blabber' ),
					),
					'std'     => 1,
					'type'    => 'checkbox',
				),

				'general_widgets_info'          => array(
					'title' => esc_html__( 'Additional widgets', 'blabber' ),
					'desc'  => '',
					'type'  => BLABBER_THEME_FREE ? 'hidden' : 'info',
				),
				'widgets_above_page'            => array(
					'title'    => esc_html__( 'Widgets at the top of the page', 'blabber' ),
					'desc'     => wp_kses_data( __( 'Select widgets to show at the top of the page (above content and sidebar)', 'blabber' ) ),
					'override' => array(
						'mode'    => 'page,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Widgets', 'blabber' ),
					),
					'std'      => 'hide',
					'options'  => array(),
					'type'     => BLABBER_THEME_FREE ? 'hidden' : 'select',
				),
				'widgets_above_content'         => array(
					'title'    => esc_html__( 'Widgets above the content', 'blabber' ),
					'desc'     => wp_kses_data( __( 'Select widgets to show at the beginning of the content area', 'blabber' ) ),
					'override' => array(
						'mode'    => 'page,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Widgets', 'blabber' ),
					),
					'std'      => 'hide',
					'options'  => array(),
					'type'     => BLABBER_THEME_FREE ? 'hidden' : 'select',
				),
				'widgets_below_content'         => array(
					'title'    => esc_html__( 'Widgets below the content', 'blabber' ),
					'desc'     => wp_kses_data( __( 'Select widgets to show at the ending of the content area', 'blabber' ) ),
					'override' => array(
						'mode'    => 'page,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Widgets', 'blabber' ),
					),
					'std'      => 'hide',
					'options'  => array(),
					'type'     => BLABBER_THEME_FREE ? 'hidden' : 'select',
				),
				'widgets_below_page'            => array(
					'title'    => esc_html__( 'Widgets at the bottom of the page', 'blabber' ),
					'desc'     => wp_kses_data( __( 'Select widgets to show at the bottom of the page (below content and sidebar)', 'blabber' ) ),
					'override' => array(
						'mode'    => 'page,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Widgets', 'blabber' ),
					),
					'std'      => 'hide',
					'options'  => array(),
					'type'     => BLABBER_THEME_FREE ? 'hidden' : 'select',
				),

				'general_effects_info'          => array(
					'title' => esc_html__( 'Design & Effects', 'blabber' ),
					'desc'  => '',
					'type'  => 'info',
				),
				'border_radius'                 => array(
					'title'      => esc_html__( 'Border radius', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Specify the border radius of the form fields and buttons in pixels', 'blabber' ) ),
					'std'        => 0,
					'min'        => 0,
					'max'        => 20,
					'step'       => 1,
					'refresh'    => false,
					'customizer' => 'rad',      // SASS name to preview changes 'on fly'
					//'type'       => BLABBER_THEME_FREE ? 'hidden' : 'slider',
					'type'       => 'hidden',
				),

				'general_misc_info'             => array(
					'title' => esc_html__( 'Miscellaneous', 'blabber' ),
					'desc'  => '',
					'type'  => BLABBER_THEME_FREE ? 'hidden' : 'info',
				),
				'seo_snippets'                  => array(
					'title' => esc_html__( 'SEO snippets', 'blabber' ),
					'desc'  => wp_kses_data( __( 'Add structured data markup to the single posts and pages', 'blabber' ) ),
					'std'   => 0,
					'type'  => BLABBER_THEME_FREE ? 'hidden' : 'checkbox',
				),
				'privacy_text' => array(
					"title" => esc_html__("Text with Privacy Policy link", 'blabber'),
					"desc"  => wp_kses_data( __("Specify text with Privacy Policy link for the checkbox 'I agree ...'", 'blabber') ),
					"std"   => wp_kses_post( __( 'I agree that my submitted data is being collected and stored.', 'blabber') ),
					"type"  => "text"
				),



				// 'Header'
				//---------------------------------------------
				'header'                        => array(
					'title'    => esc_html__( 'Header', 'blabber' ),
					'desc'     => wp_kses_data( $msg_override ),
					'priority' => 30,
					'type'     => 'section',
				),

				'header_style_info'             => array(
					'title' => esc_html__( 'Header style', 'blabber' ),
					'desc'  => '',
					'type'  => 'info',
				),
				'header_type'                   => array(
					'title'    => esc_html__( 'Header style', 'blabber' ),
					'desc'     => wp_kses_data( __( 'Choose whether to use the default header or header Layouts (available only if the ThemeREX Addons is activated)', 'blabber' ) ),
					'override' => array(
						'mode'    => 'page,post,product,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Header', 'blabber' ),
					),
					'std'      => 'default',
					'options'  => blabber_get_list_header_footer_types(),
					'type'     => BLABBER_THEME_FREE || ! blabber_exists_trx_addons() ? 'hidden' : 'switch',
				),
				'header_style'                  => array(
					'title'      => esc_html__( 'Select custom layout', 'blabber' ),
					'desc'       => wp_kses_post( __( 'Select custom header from Layouts Builder', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'page,post,product,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Header', 'blabber' ),
					),
					'dependency' => array(
						'header_type' => array( 'custom' ),
					),
					'std'        => 'header-custom-elementor-header-default',
					'options'    => array(),
					'type'       => 'select',
				),
				'header_position'               => array(
					'title'    => esc_html__( 'Header position', 'blabber' ),
					'desc'     => wp_kses_data( __( 'Select position to display the site header', 'blabber' ) ),
					'override' => array(
						'mode'    => 'page,post,product,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Header', 'blabber' ),
					),
					'std'      => 'default',
					'options'  => array(),
					'type'     => BLABBER_THEME_FREE ? 'hidden' : 'switch',
				),
				'header_fullheight'             => array(
					'title'    => esc_html__( 'Header fullheight', 'blabber' ),
					'desc'     => wp_kses_data( __( 'Enlarge header area to fill the whole screen. Used only if the header has a background image', 'blabber' ) ),
					'override' => array(
						'mode'    => 'page,post,product,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Header', 'blabber' ),
					),
					'std'      => 0,
					'type'     => BLABBER_THEME_FREE ? 'hidden' : 'checkbox',
				),
				'header_wide'                   => array(
					'title'      => esc_html__( 'Header fullwidth', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Do you want to stretch the header widgets area to the entire window width?', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'page,post,product,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Header', 'blabber' ),
					),
					'dependency' => array(
						'header_type' => array( 'default' ),
					),
					'std'        => 1,
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'checkbox',
				),
				'header_zoom'                   => array(
					'title'   => esc_html__( 'Header zoom', 'blabber' ),
					'desc'    => wp_kses_data( __( 'Zoom the header title. 1 - original size', 'blabber' ) ),
					'std'     => 1,
					'min'     => 0.2,
					'max'     => 2,
					'step'    => 0.1,
					'refresh' => false,
					'type'    => BLABBER_THEME_FREE ? 'hidden' : 'slider',
				),

				'header_widgets_info'           => array(
					'title' => esc_html__( 'Header widgets', 'blabber' ),
					'desc'  => wp_kses_data( __( 'Here you can place a widget slider, advertising banners, etc.', 'blabber' ) ),
					'type'  => 'info',
				),
				'header_widgets'                => array(
					'title'    => esc_html__( 'Header widgets', 'blabber' ),
					'desc'     => wp_kses_data( __( 'Select set of widgets to show in the header on each page', 'blabber' ) ),
					'override' => array(
						'mode'    => 'page,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Header', 'blabber' ),
						'desc'    => wp_kses_data( __( 'Select set of widgets to show in the header on this page', 'blabber' ) ),
					),
					'std'      => 'hide',
					'options'  => array(),
					'type'     => 'select',
				),
				'header_columns'                => array(
					'title'      => esc_html__( 'Header columns', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Select number columns to show widgets in the Header. If 0 - autodetect by the widgets count', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'page,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Header', 'blabber' ),
					),
					'dependency' => array(
						'header_widgets' => array( '^hide' ),
					),
					'std'        => 0,
					'options'    => blabber_get_list_range( 0, 6 ),
					'type'       => 'select',
				),

				'menu_info'                     => array(
					'title' => esc_html__( 'Main menu', 'blabber' ),
					'desc'  => wp_kses_data( __( 'Select main menu style, position and other parameters', 'blabber' ) ),
					'type'  => BLABBER_THEME_FREE ? 'hidden' : 'info',
				),
				'menu_style'                    => array(
					'title'    => esc_html__( 'Menu position', 'blabber' ),
					'desc'     => wp_kses_data( __( 'Select position of the main menu', 'blabber' ) ),
					'override' => array(
						'mode'    => 'page,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Header', 'blabber' ),
					),
					'std'      => 'top',
					'options'  => array(
						'top'   => esc_html__( 'Top', 'blabber' ),
						'left'  => esc_html__( 'Left', 'blabber' ),
						//'right' => esc_html__( 'Right', 'blabber' ),
					),
					'type'     => BLABBER_THEME_FREE || ! blabber_exists_trx_addons() ? 'hidden' : 'switch',
				),
				'menu_side_stretch'             => array(
					'title'      => esc_html__( 'Stretch sidemenu', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Stretch sidemenu to window height (if menu items number >= 5)', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'page,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Header', 'blabber' ),
					),
					'dependency' => array(
						'menu_style' => array( 'left', 'right' ),
					),
					'std'        => 0,
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'checkbox',
				),
				'menu_side_icons'               => array(
					'title'      => esc_html__( 'Iconed sidemenu', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Get icons from anchors and display it in the sidemenu or mark sidemenu items with simple dots', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'page,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Header', 'blabber' ),
					),
					'dependency' => array(
						'menu_style' => array( 'left', 'right' ),
					),
					'std'        => 0,
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'checkbox',
				),
				'menu_mobile_fullscreen'        => array(
					'title' => esc_html__( 'Mobile menu fullscreen', 'blabber' ),
					'desc'  => wp_kses_data( __( 'Display mobile and side menus on full screen (if checked) or slide narrow menu from the left or from the right side (if not checked)', 'blabber' ) ),
					'std'   => 1,
					'override'   => array(
						'mode'    => 'page,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Header', 'blabber' ),
					),
					'type'  => BLABBER_THEME_FREE ? 'hidden' : 'checkbox',
				),

				'header_image_info'             => array(
					'title' => esc_html__( 'Header image', 'blabber' ),
					'desc'  => '',
					'type'  => BLABBER_THEME_FREE ? 'hidden' : 'info',
				),
				'header_image_override'         => array(
					'title'    => esc_html__( 'Header image override', 'blabber' ),
					'desc'     => wp_kses_data( __( "Allow override the header image with the page's/post's/product's/etc. featured image", 'blabber' ) ),
					'override' => array(
						'mode'    => 'page',
						'section' => esc_html__( 'Header', 'blabber' ),
					),
					'std'      => 0,
					'type'     => BLABBER_THEME_FREE ? 'hidden' : 'checkbox',
				),

				'header_mobile_info'            => array(
					'title'      => esc_html__( 'Mobile header', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Configure the mobile version of the header', 'blabber' ) ),
					'priority'   => 500,
					'dependency' => array(
						'header_type' => array( 'default' ),
					),
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'info',
				),
				'header_mobile_enabled'         => array(
					'title'      => esc_html__( 'Enable the mobile header', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Use the mobile version of the header (if checked) or relayout the current header on mobile devices', 'blabber' ) ),
					'dependency' => array(
						'header_type' => array( 'default' ),
					),
					'std'        => 0,
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'checkbox',
				),
				'header_mobile_additional_info' => array(
					'title'      => esc_html__( 'Additional info', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Additional info to show at the top of the mobile header', 'blabber' ) ),
					'std'        => '',
					'dependency' => array(
						'header_type'           => array( 'default' ),
						'header_mobile_enabled' => array( 1 ),
					),
					'refresh'    => false,
					'teeny'      => false,
					'rows'       => 20,
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'text_editor',
				),
				'header_mobile_hide_info'       => array(
					'title'      => esc_html__( 'Hide additional info', 'blabber' ),
					'std'        => 0,
					'dependency' => array(
						'header_type'           => array( 'default' ),
						'header_mobile_enabled' => array( 1 ),
					),
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'checkbox',
				),
				'header_mobile_hide_logo'       => array(
					'title'      => esc_html__( 'Hide logo', 'blabber' ),
					'std'        => 0,
					'dependency' => array(
						'header_type'           => array( 'default' ),
						'header_mobile_enabled' => array( 1 ),
					),
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'checkbox',
				),
				'header_mobile_hide_login'      => array(
					'title'      => esc_html__( 'Hide login/logout', 'blabber' ),
					'std'        => 0,
					'dependency' => array(
						'header_type'           => array( 'default' ),
						'header_mobile_enabled' => array( 1 ),
					),
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'checkbox',
				),
				'header_mobile_hide_search'     => array(
					'title'      => esc_html__( 'Hide search', 'blabber' ),
					'std'        => 0,
					'dependency' => array(
						'header_type'           => array( 'default' ),
						'header_mobile_enabled' => array( 1 ),
					),
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'checkbox',
				),
				'header_mobile_hide_cart'       => array(
					'title'      => esc_html__( 'Hide cart', 'blabber' ),
					'std'        => 0,
					'dependency' => array(
						'header_type'           => array( 'default' ),
						'header_mobile_enabled' => array( 1 ),
					),
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'checkbox',
				),



				// 'Footer'
				//---------------------------------------------
				'footer'                        => array(
					'title'    => esc_html__( 'Footer', 'blabber' ),
					'desc'     => wp_kses_data( $msg_override ),
					'priority' => 50,
					'type'     => 'section',
				),
				'footer_type'                   => array(
					'title'    => esc_html__( 'Footer style', 'blabber' ),
					'desc'     => wp_kses_data( __( 'Choose whether to use the default footer or footer Layouts (available only if the ThemeREX Addons is activated)', 'blabber' ) ),
					'override' => array(
						'mode'    => 'page,post,product,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Footer', 'blabber' ),
					),
					'std'      => 'default',
					'options'  => blabber_get_list_header_footer_types(),
					'type'     => BLABBER_THEME_FREE || ! blabber_exists_trx_addons() ? 'hidden' : 'switch',
				),
				'footer_style'                  => array(
					'title'      => esc_html__( 'Select custom layout', 'blabber' ),
					'desc'       => wp_kses_post( __( 'Select custom footer from Layouts Builder', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'page,post,product,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Footer', 'blabber' ),
					),
					'dependency' => array(
						'footer_type' => array( 'custom' ),
					),
					'std'        => 'footer-custom-elementor-footer-default',
					'options'    => array(),
					'type'       => 'select',
				),
				'footer_widgets'                => array(
					'title'      => esc_html__( 'Footer widgets', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Select set of widgets to show in the footer', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'page,post,product,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Footer', 'blabber' ),
					),
					'dependency' => array(
						'footer_type' => array( 'default' ),
					),
					'std'        => 'footer_widgets',
					'options'    => array(),
					'type'       => 'select',
				),
				'footer_columns'                => array(
					'title'      => esc_html__( 'Footer columns', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Select number columns to show widgets in the footer. If 0 - autodetect by the widgets count', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'page,post,product,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Footer', 'blabber' ),
					),
					'dependency' => array(
						'footer_type'    => array( 'default' ),
						'footer_widgets' => array( '^hide' ),
					),
					'std'        => 0,
					'options'    => blabber_get_list_range( 0, 6 ),
					'type'       => 'select',
				),
				'footer_wide'                   => array(
					'title'      => esc_html__( 'Footer fullwidth', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Do you want to stretch the footer to the entire window width?', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'page,post,product,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Footer', 'blabber' ),
					),
					'dependency' => array(
						'footer_type' => array( 'default' ),
					),
					'std'        => 0,
					'type'       => 'checkbox',
				),
				'logo_in_footer'                => array(
					'title'      => esc_html__( 'Show logo', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Show logo in the footer', 'blabber' ) ),
					'refresh'    => false,
					'dependency' => array(
						'footer_type' => array( 'default' ),
					),
					'std'        => 0,
					'type'       => 'checkbox',
				),
				'logo_footer'                   => array(
					'title'      => esc_html__( 'Logo for footer', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Select or upload site logo to display it in the footer', 'blabber' ) ),
					'dependency' => array(
						'footer_type'    => array( 'default' ),
						'logo_in_footer' => array( 1 ),
					),
					'std'        => '',
					'type'       => 'image',
				),
				'logo_footer_retina'            => array(
					'title'      => esc_html__( 'Logo for footer (Retina)', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Select or upload logo for the footer area used on Retina displays (if empty - use default logo from the field above)', 'blabber' ) ),
					'dependency' => array(
						'footer_type'         => array( 'default' ),
						'logo_in_footer'      => array( 1 ),
						'logo_retina_enabled' => array( 1 ),
					),
					'std'        => '',
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'image',
				),
				'socials_in_footer'             => array(
					'title'      => esc_html__( 'Show social icons', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Show social icons in the footer (under logo or footer widgets)', 'blabber' ) ),
					'dependency' => array(
						'footer_type' => array( 'default' ),
					),
					'std'        => 0,
					'type'       => ! blabber_exists_trx_addons() ? 'hidden' : 'checkbox',
				),
				'copyright'                     => array(
					'title'      => esc_html__( 'Copyright', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Copyright text in the footer. Use {Y} to insert current year and press "Enter" to create a new line', 'blabber' ) ),
					'translate'  => true,
					'std'        => esc_html__( 'Copyright &copy; {Y} by AncoraThemes. All rights reserved.', 'blabber' ),
					'dependency' => array(
						'footer_type' => array( 'default' ),
					),
					'refresh'    => false,
					'type'       => 'textarea',
				),



				// 'Mobile version'
				//---------------------------------------------
				'mobile'                        => array(
					'title'    => esc_html__( 'Mobile', 'blabber' ),
					'desc'     => wp_kses_data( $msg_override ),
					'priority' => 55,
					'type'     => 'section',
				),

				'mobile_header_info'            => array(
					'title' => esc_html__( 'Header on the mobile device', 'blabber' ),
					'desc'  => '',
					'type'  => 'info',
				),
				'header_type_mobile'            => array(
					'title'    => esc_html__( 'Header style', 'blabber' ),
					'desc'     => wp_kses_data( __( 'Choose whether to use on mobile devices: the default header or header Layouts (available only if the ThemeREX Addons is activated)', 'blabber' ) ),
					'std'      => 'inherit',
					'options'  => blabber_get_list_header_footer_types( true ),
					'type'     => BLABBER_THEME_FREE || ! blabber_exists_trx_addons() ? 'hidden' : 'switch',
				),
				'header_style_mobile'           => array(
					'title'      => esc_html__( 'Select custom layout', 'blabber' ),
					'desc'       => wp_kses_post( __( 'Select custom header from Layouts Builder', 'blabber' ) ),
					'dependency' => array(
						'header_type_mobile' => array( 'custom' ),
					),
					'std'        => 'inherit',
					'options'    => array(),
					'type'       => 'select',
				),
				'header_position_mobile'        => array(
					'title'    => esc_html__( 'Header position', 'blabber' ),
					'desc'     => wp_kses_data( __( 'Select position to display the site header', 'blabber' ) ),
					'std'      => 'inherit',
					'options'  => array(),
					'type'     => BLABBER_THEME_FREE ? 'hidden' : 'switch',
				),

				'mobile_sidebar_info'           => array(
					'title' => esc_html__( 'Sidebar on the mobile device', 'blabber' ),
					'desc'  => '',
					'type'  => 'info',
				),
				'sidebar_position_mobile'       => array(
					'title'    => esc_html__( 'Sidebar position on mobile', 'blabber' ),
					'desc'     => wp_kses_data( __( 'Select position to show sidebar on mobile devices', 'blabber' ) ),
					'std'      => 'inherit',
					'options'  => array(),
					'type'     => 'switch',
				),
				'sidebar_widgets_mobile'        => array(
					'title'      => esc_html__( 'Sidebar widgets', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Select default widgets to show in the sidebar on mobile devices', 'blabber' ) ),
					'dependency' => array(
						'sidebar_position_mobile' => array( '^hide' ),
					),
					'std'        => 'sidebar_widgets',
					'options'    => array(),
					'type'       => 'select',
				),
				'expand_content_mobile'         => array(
					'title'   => esc_html__( 'Expand content', 'blabber' ),
					'desc'    => wp_kses_data( __( 'Expand the content width if the sidebar is hidden on mobile devices', 'blabber' ) ),
					'refresh' => false,
					'dependency' => array(
						'sidebar_position_mobile' => array( 'hide', 'inherit' ),
					),
					'std'     => 'inherit',
					'options'  => blabber_get_list_checkbox_values( true ),
					'type'     => BLABBER_THEME_FREE ? 'hidden' : 'switch',
				),

				'mobile_footer_info'           => array(
					'title' => esc_html__( 'Footer on the mobile device', 'blabber' ),
					'desc'  => '',
					'type'  => 'info',
				),
				'footer_type_mobile'           => array(
					'title'    => esc_html__( 'Footer style', 'blabber' ),
					'desc'     => wp_kses_data( __( 'Choose whether to use on mobile devices: the default footer or footer Layouts (available only if the ThemeREX Addons is activated)', 'blabber' ) ),
					'std'      => 'inherit',
					'options'  => blabber_get_list_header_footer_types( true ),
					'type'     => BLABBER_THEME_FREE || ! blabber_exists_trx_addons() ? 'hidden' : 'switch',
				),
				'footer_style_mobile'          => array(
					'title'      => esc_html__( 'Select custom layout', 'blabber' ),
					'desc'       => wp_kses_post( __( 'Select custom footer from Layouts Builder', 'blabber' ) ),
					'dependency' => array(
						'footer_type_mobile' => array( 'custom' ),
					),
					'std'        => 'inherit',
					'options'    => array(),
					'type'       => 'select',
				),
				'footer_widgets_mobile'        => array(
					'title'      => esc_html__( 'Footer widgets', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Select set of widgets to show in the footer', 'blabber' ) ),
					'dependency' => array(
						'footer_type_mobile' => array( 'default' ),
					),
					'std'        => 'footer_widgets',
					'options'    => array(),
					'type'       => 'select',
				),
				'footer_columns_mobile'        => array(
					'title'      => esc_html__( 'Footer columns', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Select number columns to show widgets in the footer. If 0 - autodetect by the widgets count', 'blabber' ) ),
					'dependency' => array(
						'footer_type_mobile'    => array( 'default' ),
						'footer_widgets_mobile' => array( '^hide' ),
					),
					'std'        => 0,
					'options'    => blabber_get_list_range( 0, 6 ),
					'type'       => 'select',
				),



				// 'Blog'
				//---------------------------------------------
				'blog'                          => array(
					'title'    => esc_html__( 'Blog', 'blabber' ),
					'desc'     => wp_kses_data( __( 'Options of the the blog archive', 'blabber' ) ),
					'priority' => 70,
					'type'     => 'panel',
				),


				// Blog - Posts page
				//---------------------------------------------
				'blog_general'                  => array(
					'title' => esc_html__( 'Posts page', 'blabber' ),
					'desc'  => wp_kses_data( __( 'Style and components of the blog archive', 'blabber' ) ),
					'type'  => 'section',
				),
				'blog_general_info'             => array(
					'title'  => esc_html__( 'Posts page settings', 'blabber' ),
					'desc'   => '',
					'qsetup' => esc_html__( 'General', 'blabber' ),
					'type'   => 'info',
				),
				'blog_style'                    => array(
					'title'      => esc_html__( 'Blog style', 'blabber' ),
					'desc'       => '',
					'override'   => array(
						'mode'    => 'page',
						'section' => esc_html__( 'Content', 'blabber' ),
					),
					'dependency' => array(
						'compare' => 'or',
						'#page_template' => array( 'blog.php' ),
						'.editor-page-attributes__template select' => array( 'blog.php' ),
					),
					'std'        => 'excerpt',
					'qsetup'     => esc_html__( 'General', 'blabber' ),
					'options'    => array(),
					'type'       => 'select',
				),
				'first_post_large'              => array(
					'title'      => esc_html__( 'First post large', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Make your first post stand out by making it bigger', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'page',
						'section' => esc_html__( 'Content', 'blabber' ),
					),
					'dependency' => array(
						'compare' => 'or',
						'#page_template' => array( 'blog.php' ),
						'.editor-page-attributes__template select' => array( 'blog.php' ),
						'blog_style' => array( 'classic', 'masonry' ),
					),
					'std'        => 0,
					'type'       => 'checkbox',
				),
				'blog_content'                  => array(
					'title'      => esc_html__( 'Posts content', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Display either post excerpts or the full post content', 'blabber' ) ),
					'std'        => 'excerpt',
					'dependency' => array(
						'blog_style' => array( 'excerpt' ),
					),
					'options'    => array(
						'excerpt'  => esc_html__( 'Excerpt', 'blabber' ),
						'fullpost' => esc_html__( 'Full post', 'blabber' ),
					),
					'type'       => 'switch',
				),
				'excerpt_length'                => array(
					'title'      => esc_html__( 'Excerpt length', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Length (in words) to generate excerpt from the post content. Attention! If the post excerpt is explicitly specified - it appears unchanged', 'blabber' ) ),
                    'override'   => array(
                        'mode'    => 'page',
                        'section' => esc_html__( 'Content', 'blabber' ),
                    ),
                    'dependency' => array(
						'blog_style'   => array( 'excerpt', 'classic', 'chess' ),
						'blog_content' => array( 'excerpt', 'classic', 'chess' ),
					),
					'std'        => 42,
					'type'       => 'text',
				),
				'blog_columns'                  => array(
					'title'   => esc_html__( 'Blog columns', 'blabber' ),
					'desc'    => wp_kses_data( __( 'How many columns should be used in the blog archive (from 2 to 4)?', 'blabber' ) ),
					'std'     => 2,
					'options' => blabber_get_list_range( 2, 4 ),
					'type'    => 'hidden',      // This options is available and must be overriden only for some modes (for example, 'shop')
				),
				'post_type'                     => array(
					'title'      => esc_html__( 'Post type', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Select post type to show in the blog archive', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'page',
						'section' => esc_html__( 'Content', 'blabber' ),
					),
					'dependency' => array(
						'compare' => 'or',
						'#page_template' => array( 'blog.php' ),
						'.editor-page-attributes__template select' => array( 'blog.php' ),
					),
					'linked'     => 'parent_cat',
					'refresh'    => false,
					'hidden'     => true,
					'std'        => 'post',
					'options'    => array(),
					'type'       => 'select',
				),
				'parent_cat'                    => array(
					'title'      => esc_html__( 'Category to show', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Select category to show in the blog archive', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'page',
						'section' => esc_html__( 'Content', 'blabber' ),
					),
					'dependency' => array(
						'compare' => 'or',
						'#page_template' => array( 'blog.php' ),
						'.editor-page-attributes__template select' => array( 'blog.php' ),
					),
					'refresh'    => false,
					'hidden'     => true,
					'std'        => '0',
					'options'    => array(),
					'type'       => 'select',
				),
				'posts_per_page'                => array(
					'title'      => esc_html__( 'Posts per page', 'blabber' ),
					'desc'       => wp_kses_data( __( 'How many posts will be displayed on this page', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'page',
						'section' => esc_html__( 'Content', 'blabber' ),
					),
					'dependency' => array(
						'compare' => 'or',
						'#page_template' => array( 'blog.php' ),
						'.editor-page-attributes__template select' => array( 'blog.php' ),
					),
					'hidden'     => true,
					'std'        => '',
					'type'       => 'text',
				),
				'blog_pagination'               => array(
					'title'      => esc_html__( 'Pagination style', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Show Older/Newest posts or Page numbers below the posts list', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'page',
						'section' => esc_html__( 'Content', 'blabber' ),
					),
					'std'        => 'pages',
					'qsetup'     => esc_html__( 'General', 'blabber' ),
					'dependency' => array(
						'compare' => 'or',
						'#page_template' => array( 'blog.php' ),
						'.editor-page-attributes__template select' => array( 'blog.php' ),
					),
					'options'    => array(
						'pages'    => esc_html__( 'Page numbers', 'blabber' ),
						'links'    => esc_html__( 'Older/Newest', 'blabber' ),
						'more'     => esc_html__( 'Load more', 'blabber' ),
						'infinite' => esc_html__( 'Infinite scroll', 'blabber' ),
					),
					'type'       => 'select',
				),
				'blog_animation'                => array(
					'title'      => esc_html__( 'Post animation', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Select animation to show posts in the blog. Attention! Do not use any animation on pages with the "wheel to the anchor" behaviour (like a "Chess 2 columns")!', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'page',
						'section' => esc_html__( 'Content', 'blabber' ),
					),
					'dependency' => array(
						'compare' => 'or',
						'#page_template' => array( 'blog.php' ),
						'.editor-page-attributes__template select' => array( 'blog.php' ),
					),
					'std'        => 'none',
					'options'    => array(),
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'select',
				),
                'disable_animation_on_mobile'   => array(
                    'title'      => esc_html__( 'Disable animation on mobile', 'blabber' ),
                    'desc'       => wp_kses_data( __( 'Disable any posts animation on mobile devices', 'blabber' ) ),
                    'std'        => 0,
                    'type'       => BLABBER_THEME_FREE ? 'hidden' : 'checkbox',
                ),
				'show_filters'                  => array(
					'title'      => esc_html__( 'Show filters', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Show categories as tabs to filter posts', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'page',
						'section' => esc_html__( 'Content', 'blabber' ),
					),
					'dependency' => array(
						'compare' => 'or',
						'#page_template' => array( 'blog.php' ),
						'.editor-page-attributes__template select' => array( 'blog.php' ),
						'blog_style'     => array( 'portfolio', 'gallery' ),
					),
					'hidden'     => true,
					'std'        => 0,
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'checkbox',
				),
				'open_full_post_in_blog'        => array(
					'title'      => esc_html__( 'Open full post in blog', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Allow to open the full version of the post directly in the blog feed. Attention! Applies only to 1 column layouts!', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'page',
						'section' => esc_html__( 'Content', 'blabber' ),
					),
					'std'        => 0,
					'type'       => 'checkbox',
				),
				'open_full_post_hide_author'    => array(
					'title'      => esc_html__( 'Hide author bio', 'blabber' ),
					'desc'       => wp_kses_data( __( "Hide author bio after post content when open the full version of the post directly in the blog feed.", 'blabber' ) ),
					'override'   => array(
						'mode'    => 'page',
						'section' => esc_html__( 'Content', 'blabber' ),
					),
					'dependency' => array(
						'open_full_post_in_blog' => array( 1 ),
					),
					'std'        => 1,
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'checkbox',
				),
				'open_full_post_hide_related'   => array(
					'title'      => esc_html__( 'Hide related posts', 'blabber' ),
					'desc'       => wp_kses_data( __( "Hide related posts after post content when open the full version of the post directly in the blog feed.", 'blabber' ) ),
					'override'   => array(
						'mode'    => 'page',
						'section' => esc_html__( 'Content', 'blabber' ),
					),
					'dependency' => array(
						'open_full_post_in_blog' => array( 1 ),
					),
					'std'        => 1,
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'checkbox',
				),

				'blog_header_info'              => array(
					'title' => esc_html__( 'Header', 'blabber' ),
					'desc'  => '',
					'type'  => 'info',
				),
				'header_type_blog'              => array(
					'title'    => esc_html__( 'Header style', 'blabber' ),
					'desc'     => wp_kses_data( __( 'Choose whether to use the default header or header Layouts (available only if the ThemeREX Addons is activated)', 'blabber' ) ),
					'std'      => 'inherit',
					'options'  => blabber_get_list_header_footer_types( true ),
					'type'     => BLABBER_THEME_FREE || ! blabber_exists_trx_addons() ? 'hidden' : 'switch',
				),
				'header_style_blog'             => array(
					'title'      => esc_html__( 'Select custom layout', 'blabber' ),
					'desc'       => wp_kses_post( __( 'Select custom header from Layouts Builder', 'blabber' ) ),
					'dependency' => array(
						'header_type_blog' => array( 'custom' ),
					),
					'std'        => 'inherit',
					'options'    => array(),
					'type'       => 'select',
				),
				'header_position_blog'          => array(
					'title'    => esc_html__( 'Header position', 'blabber' ),
					'desc'     => wp_kses_data( __( 'Select position to display the site header', 'blabber' ) ),
					'std'      => 'inherit',
					'options'  => array(),
					'type'     => BLABBER_THEME_FREE ? 'hidden' : 'switch',
				),
				'header_fullheight_blog'        => array(
					'title'    => esc_html__( 'Header fullheight', 'blabber' ),
					'desc'     => wp_kses_data( __( 'Enlarge header area to fill whole screen. Used only if header have a background image', 'blabber' ) ),
					'std'      => 'inherit',
					'options'  => blabber_get_list_checkbox_values( true ),
					'type'     => BLABBER_THEME_FREE ? 'hidden' : 'switch',
				),
				'header_wide_blog'              => array(
					'title'      => esc_html__( 'Header fullwidth', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Do you want to stretch the header widgets area to the entire window width?', 'blabber' ) ),
					'dependency' => array(
						'header_type_blog' => array( 'default' ),
					),
					'std'      => 'inherit',
					'options'  => blabber_get_list_checkbox_values( true ),
					'type'     => BLABBER_THEME_FREE ? 'hidden' : 'switch',
				),

				'blog_sidebar_info'             => array(
					'title' => esc_html__( 'Sidebar', 'blabber' ),
					'desc'  => '',
					'type'  => 'info',
				),
				'sidebar_position_blog'         => array(
					'title'   => esc_html__( 'Sidebar position', 'blabber' ),
					'desc'    => wp_kses_data( __( 'Select position to show sidebar', 'blabber' ) ),
					'std'     => 'inherit',
					'options' => array(),
					'qsetup'     => esc_html__( 'General', 'blabber' ),
					'type'    => 'switch',
				),
				'sidebar_position_ss_blog'  => array(
					'title'    => esc_html__( 'Sidebar position on the small screen', 'blabber' ),
					'desc'     => wp_kses_data( __( 'Select position to move sidebar on the small screen - above or below the content', 'blabber' ) ),
					'dependency' => array(
						'sidebar_position_blog' => array( '^hide' ),
					),
					'std'      => 'inherit',
					'qsetup'   => esc_html__( 'General', 'blabber' ),
					'options'  => array(),
					'type'     => 'switch',
				),
				'sidebar_widgets_blog'          => array(
					'title'      => esc_html__( 'Sidebar widgets', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Select default widgets to show in the sidebar', 'blabber' ) ),
					'dependency' => array(
						'sidebar_position_blog' => array( '^hide' ),
					),
					'std'        => 'sidebar_widgets',
					'options'    => array(),
					'qsetup'     => esc_html__( 'General', 'blabber' ),
					'type'       => 'select',
				),
				'expand_content_blog'           => array(
					'title'   => esc_html__( 'Expand content', 'blabber' ),
					'desc'    => wp_kses_data( __( 'Expand the content width if the sidebar is hidden', 'blabber' ) ),
					'refresh' => false,
					'std'     => 'inherit',
					'options'  => blabber_get_list_checkbox_values( true ),
					'type'     => BLABBER_THEME_FREE ? 'hidden' : 'switch',
				),

				'blog_widgets_info'             => array(
					'title' => esc_html__( 'Additional widgets', 'blabber' ),
					'desc'  => '',
					'type'  => BLABBER_THEME_FREE ? 'hidden' : 'info',
				),
				'widgets_above_page_blog'       => array(
					'title'   => esc_html__( 'Widgets at the top of the page', 'blabber' ),
					'desc'    => wp_kses_data( __( 'Select widgets to show at the top of the page (above content and sidebar)', 'blabber' ) ),
					'std'     => 'hide',
					'options' => array(),
					'type'    => BLABBER_THEME_FREE ? 'hidden' : 'select',
				),
				'widgets_above_content_blog'    => array(
					'title'   => esc_html__( 'Widgets above the content', 'blabber' ),
					'desc'    => wp_kses_data( __( 'Select widgets to show at the beginning of the content area', 'blabber' ) ),
					'std'     => 'hide',
					'options' => array(),
					'type'    => BLABBER_THEME_FREE ? 'hidden' : 'select',
				),
				'widgets_below_content_blog'    => array(
					'title'   => esc_html__( 'Widgets below the content', 'blabber' ),
					'desc'    => wp_kses_data( __( 'Select widgets to show at the ending of the content area', 'blabber' ) ),
					'std'     => 'hide',
					'options' => array(),
					'type'    => BLABBER_THEME_FREE ? 'hidden' : 'select',
				),
				'widgets_below_page_blog'       => array(
					'title'   => esc_html__( 'Widgets at the bottom of the page', 'blabber' ),
					'desc'    => wp_kses_data( __( 'Select widgets to show at the bottom of the page (below content and sidebar)', 'blabber' ) ),
					'std'     => 'hide',
					'options' => array(),
					'type'    => BLABBER_THEME_FREE ? 'hidden' : 'select',
				),

				'blog_advanced_info'            => array(
					'title' => esc_html__( 'Advanced settings', 'blabber' ),
					'desc'  => '',
					'type'  => 'info',
				),
				'no_image'                      => array(
					'title' => esc_html__( 'Image placeholder', 'blabber' ),
					'desc'  => wp_kses_data( __( "Select or upload an image used as placeholder for posts without a featured image. Placeholder is used on the blog stream page only (no placeholder in single post), and only in those styles of it where non-using featured image doesn't seem appropriate.", 'blabber' ) ),
					'std'   => '',
					'type'  => 'image',
				),
				'time_diff_before'              => array(
					'title' => esc_html__( 'Easy Readable Date Format', 'blabber' ),
					'desc'  => wp_kses_data( __( "For how many days to show the easy-readable date format (e.g. '3 days ago') instead of the standard publication date", 'blabber' ) ),
					'std'   => 5,
					'type'  => 'text',
				),
				'sticky_style'                  => array(
					'title'   => esc_html__( 'Sticky posts style', 'blabber' ),
					'desc'    => wp_kses_data( __( 'Select style of the sticky posts output', 'blabber' ) ),
					'std'     => 'inherit',
					'options' => array(
						'inherit' => esc_html__( 'Decorated posts', 'blabber' ),
						'columns' => esc_html__( 'Mini-cards', 'blabber' ),
					),
					'type'    => BLABBER_THEME_FREE ? 'hidden' : 'select',
				),
				'meta_parts'                    => array(
					'title'      => esc_html__( 'Post meta', 'blabber' ),
					'desc'       => wp_kses_data( __( "If your blog page is created using the 'Blog archive' page template, set up the 'Post Meta' settings in the 'Theme Options' section of that page. Post counters and Share Links are available only if plugin ThemeREX Addons is active", 'blabber' ) )
								. '<br>'
								. wp_kses_data( __( '<b>Tip:</b> Drag items to change their order.', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'page',
						'section' => esc_html__( 'Content', 'blabber' ),
					),
					'dependency' => array(
						'compare' => 'or',
						'#page_template' => array( 'blog.php' ),
						'.editor-page-attributes__template select' => array( 'blog.php' ),
					),
					'dir'        => 'vertical',
					'sortable'   => true,
					'std'        => 'categories=1|author=1|date=1|views=1|comments=1|likes=0|share=0|edit=0',
					'options'    => blabber_get_list_meta_parts(),
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'checklist',
				),


				// Blog - Single posts
				//---------------------------------------------
				'blog_single'                   => array(
					'title' => esc_html__( 'Single posts', 'blabber' ),
					'desc'  => wp_kses_data( __( 'Settings of the single post', 'blabber' ) ),
					'type'  => 'section',
				),

				'blog_single_header_info'       => array(
					'title' => esc_html__( 'Header', 'blabber' ),
					'desc'  => '',
					'type'  => 'info',
				),
				'header_type_single'            => array(
					'title'    => esc_html__( 'Header style', 'blabber' ),
					'desc'     => wp_kses_data( __( 'Choose whether to use the default header or header Layouts (available only if the ThemeREX Addons is activated)', 'blabber' ) ),
					'std'      => 'inherit',
					'options'  => blabber_get_list_header_footer_types( true ),
					'type'     => BLABBER_THEME_FREE || ! blabber_exists_trx_addons() ? 'hidden' : 'switch',
				),
				'header_style_single'           => array(
					'title'      => esc_html__( 'Select custom layout', 'blabber' ),
					'desc'       => wp_kses_post( __( 'Select custom header from Layouts Builder', 'blabber' ) ),
					'dependency' => array(
						'header_type_single' => array( 'custom' ),
					),
					'std'        => 'inherit',
					'options'    => array(),
					'type'       => 'select',
				),
				'header_position_single'        => array(
					'title'    => esc_html__( 'Header position', 'blabber' ),
					'desc'     => wp_kses_data( __( 'Select position to display the site header', 'blabber' ) ),
					'std'      => 'inherit',
					'options'  => array(),
					'type'     => BLABBER_THEME_FREE ? 'hidden' : 'switch',
				),
				'header_fullheight_single'      => array(
					'title'    => esc_html__( 'Header fullheight', 'blabber' ),
					'desc'     => wp_kses_data( __( 'Enlarge header area to fill whole screen. Used only if header have a background image', 'blabber' ) ),
					'std'      => 'inherit',
					'options'  => blabber_get_list_checkbox_values( true ),
					'type'     => BLABBER_THEME_FREE ? 'hidden' : 'switch',
				),
				'header_wide_single'            => array(
					'title'      => esc_html__( 'Header fullwidth', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Do you want to stretch the header widgets area to the entire window width?', 'blabber' ) ),
					'dependency' => array(
						'header_type_single' => array( 'default' ),
					),
					'std'      => 'inherit',
					'options'  => blabber_get_list_checkbox_values( true ),
					'type'     => BLABBER_THEME_FREE ? 'hidden' : 'switch',
				),

				'blog_single_sidebar_info'      => array(
					'title' => esc_html__( 'Sidebar', 'blabber' ),
					'desc'  => '',
					'type'  => 'info',
				),
				'sidebar_position_single'       => array(
					'title'   => esc_html__( 'Sidebar position', 'blabber' ),
					'desc'    => wp_kses_data( __( 'Select position to show sidebar on the single posts', 'blabber' ) ),
					'std'     => 'right',
					'override'   => array(
						'mode'    => 'post,product,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Widgets', 'blabber' ),
					),
					'options' => array(),
					'type'    => 'switch',
				),
				'sidebar_position_ss_single'=> array(
					'title'    => esc_html__( 'Sidebar position on the small screen', 'blabber' ),
					'desc'     => wp_kses_data( __( 'Select position to move sidebar on the single posts on the small screen - above or below the content', 'blabber' ) ),
					'override' => array(
						'mode'    => 'post,product,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Widgets', 'blabber' ),
					),
					'dependency' => array(
						'sidebar_position_single' => array( '^hide' ),
					),
					'std'      => 'below',
					'options'  => array(),
					'type'     => 'switch',
				),
				'sidebar_widgets_single'        => array(
					'title'      => esc_html__( 'Sidebar widgets', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Select default widgets to show in the sidebar on the single posts', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'post,product,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Widgets', 'blabber' ),
					),
					'dependency' => array(
						'sidebar_position_single' => array( '^hide' ),
					),
					'std'        => 'sidebar_widgets',
					'options'    => array(),
					'type'       => 'select',
				),
				'expand_content_single'           => array(
					'title'   => esc_html__( 'Expand content', 'blabber' ),
					'desc'    => wp_kses_data( __( 'Expand the content width on the single posts if the sidebar is hidden', 'blabber' ) ),
					'refresh' => false,
					'std'     => 'inherit',
					'options'  => blabber_get_list_checkbox_values( true ),
					'type'     => BLABBER_THEME_FREE ? 'hidden' : 'switch',
				),

				'blog_single_title_info'      => array(
					'title' => esc_html__( 'Featured image and title', 'blabber' ),
					'desc'  => '',
					'type'  => 'info',
				),
				'single_style'                  => array(
					'title'      => esc_html__( 'Single style', 'blabber' ),
					'desc'       => '',
					'override'   => array(
						'mode'    => 'post',
						'section' => esc_html__( 'Content', 'blabber' ),
					),
					'std'        => 'in-below',
					'qsetup'     => esc_html__( 'General', 'blabber' ),
					'options'    => array(),
					'type'       => 'select',
				),
				'post_subtitle'                 => array(
					'title' => esc_html__( 'Post subtitle', 'blabber' ),
					'desc'  => wp_kses_data( __( "Specify post subtitle to display it under the post title.", 'blabber' ) ),
					'override' => array(
						'mode'    => 'post',
						'section' => esc_html__( 'Content', 'blabber' ),
					),
					'std'   => '',
					'hidden' => true,
					'type'  => 'text',
				),
				'show_post_meta'                => array(
					'title' => esc_html__( 'Show post meta', 'blabber' ),
					'desc'  => wp_kses_data( __( "Display block with post's meta: date, categories, counters, etc.", 'blabber' ) ),
					'std'   => 1,
					'type'  => 'checkbox',
				),
				'meta_parts_single'             => array(
					'title'      => esc_html__( 'Post meta', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Meta parts for single posts. Post counters and Share Links are available only if plugin ThemeREX Addons is active', 'blabber' ) )
								. '<br>'
								. wp_kses_data( __( '<b>Tip:</b> Drag items to change their order.', 'blabber' ) ),
					'dependency' => array(
						'show_post_meta' => array( 1 ),
					),
					'dir'        => 'vertical',
					'sortable'   => true,
					'std'        => 'categories=1|author=1|date=1|views=1|likes=0|comments=1|share=0|edit=0',
					'options'    => blabber_get_list_meta_parts(),
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'checklist',
				),
				'show_share_links'              => array(
					'title' => esc_html__( 'Show share links', 'blabber' ),
					'desc'  => wp_kses_data( __( 'Display share links on the single post', 'blabber' ) ),
					'std'   => 1,
					'type'  => ! blabber_exists_trx_addons() ? 'hidden' : 'checkbox',
				),
				'show_author_info'              => array(
					'title' => esc_html__( 'Show author info', 'blabber' ),
					'desc'  => wp_kses_data( __( "Display block with information about post's author", 'blabber' ) ),
					'std'   => 1,
					'type'  => 'checkbox',
				),

				'blog_single_related_info'      => array(
					'title' => esc_html__( 'Related posts', 'blabber' ),
					'desc'  => '',
					'type'  => 'info',
				),
				'show_related_posts'            => array(
					'title'    => esc_html__( 'Show related posts', 'blabber' ),
					'desc'     => wp_kses_data( __( "Show section 'Related posts' on the single post's pages", 'blabber' ) ),
					'override' => array(
						'mode'    => 'post',
						'section' => esc_html__( 'Content', 'blabber' ),
					),
					'std'      => 1,
					'type'     => 'checkbox',
				),
				'related_style'                 => array(
					'title'      => esc_html__( 'Related posts style', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Select style of the related posts output', 'blabber' ) ),
					'override' => array(
						'mode'    => 'post',
						'section' => esc_html__( 'Content', 'blabber' ),
					),
					'dependency' => array(
						'show_related_posts' => array( 1 ),
					),
					'std'        => 'classic',
					'options'    => array(
						'modern'  => esc_html__( 'Modern', 'blabber' ),
						'classic' => esc_html__( 'Classic', 'blabber' ),
						//'wide'    => esc_html__( 'Wide', 'blabber' ),
						//'list'    => esc_html__( 'List', 'blabber' ),
						'short'   => esc_html__( 'Short', 'blabber' ),
					),
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'switch',
				),
				'related_position'              => array(
					'title'      => esc_html__( 'Related posts position', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Select position to display the related posts', 'blabber' ) ),
					'override' => array(
						'mode'    => 'post',
						'section' => esc_html__( 'Content', 'blabber' ),
					),
					'dependency' => array(
						'show_related_posts' => array( 1 ),
					),
					'std'        => 'below_content',
					'options'    => array (
						'inside'        => esc_html__( 'Inside the content (fullwidth)', 'blabber' ),
						'inside_left'   => esc_html__( 'At left side of the content', 'blabber' ),
						'inside_right'  => esc_html__( 'At right side of the content', 'blabber' ),
						'below_content' => esc_html__( 'After the content', 'blabber' ),
						'below_page'    => esc_html__( 'After the content & sidebar', 'blabber' ),
					),
					//'type'       => BLABBER_THEME_FREE ? 'hidden' : 'select',
					'type'       => 'hidden',
				),
				'related_position_inside'       => array(
					'title'      => esc_html__( 'Before # paragraph', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Before what paragraph should related posts appear? If 0 - randomly.', 'blabber' ) ),
					'override' => array(
						'mode'    => 'post',
						'section' => esc_html__( 'Content', 'blabber' ),
					),
					'dependency' => array(
						'show_related_posts' => array( 1 ),
						'related_position' => array( 'inside', 'inside_left', 'inside_right' ),
					),
					'std'        => 2,
					'options'    => blabber_get_list_range( 0, 9 ),
					//'type'       => BLABBER_THEME_FREE ? 'hidden' : 'select',
					'type'       => 'hidden',
				),
				'related_posts'                 => array(
					'title'      => esc_html__( 'Related posts', 'blabber' ),
					'desc'       => wp_kses_data( __( 'How many related posts should be displayed in the single post? If 0 - no related posts are shown.', 'blabber' ) ),
					'override' => array(
						'mode'    => 'post',
						'section' => esc_html__( 'Content', 'blabber' ),
					),
					'dependency' => array(
						'show_related_posts' => array( 1 ),
					),
					'std'        => 2,
					'min'        => 1,
					'max'        => 9,
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'slider',
				),
				'related_columns'               => array(
					'title'      => esc_html__( 'Related columns', 'blabber' ),
					'desc'       => wp_kses_data( __( 'How many columns should be used to output related posts in the single page?', 'blabber' ) ),
					'override' => array(
						'mode'    => 'post',
						'section' => esc_html__( 'Content', 'blabber' ),
					),
					'dependency' => array(
						'show_related_posts' => array( 1 ),
						'related_position' => array( 'inside', 'below_content', 'below_page' ),
					),
					'std'        => 2,
					'options'    => blabber_get_list_range( 1, 6 ),
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'switch',
				),
				'related_slider'                => array(
					'title'      => esc_html__( 'Use slider layout', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Use slider layout in case related posts count is more than columns count', 'blabber' ) ),
					'override' => array(
						'mode'    => 'post',
						'section' => esc_html__( 'Content', 'blabber' ),
					),
					'dependency' => array(
						'show_related_posts' => array( 1 ),
					),
					'std'        => 0,
					//'type'       => BLABBER_THEME_FREE ? 'hidden' : 'checkbox',
					'type'       => 'hidden',
				),
				'related_slider_controls'       => array(
					'title'      => esc_html__( 'Slider controls', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Show arrows in the slider', 'blabber' ) ),
					'override' => array(
						'mode'    => 'post',
						'section' => esc_html__( 'Content', 'blabber' ),
					),
					'dependency' => array(
						'show_related_posts' => array( 1 ),
						'related_slider' => array( 1 ),
					),
					'std'        => 'none',
					'options'    => array(
						'none'    => esc_html__('None', 'blabber'),
						'side'    => esc_html__('Side', 'blabber'),
						'outside' => esc_html__('Outside', 'blabber'),
						'top'     => esc_html__('Top', 'blabber'),
						'bottom'  => esc_html__('Bottom', 'blabber')
					),
					//'type'       => BLABBER_THEME_FREE ? 'hidden' : 'select',
                    'type'       => 'hidden',
				),
				'related_slider_pagination'       => array(
					'title'      => esc_html__( 'Slider pagination', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Show bullets after the slider', 'blabber' ) ),
					'override' => array(
						'mode'    => 'post',
						'section' => esc_html__( 'Content', 'blabber' ),
					),
					'dependency' => array(
						'show_related_posts' => array( 1 ),
						'related_slider' => array( 1 ),
					),
					'std'        => 'bottom',
					'options'    => array(
						'none'    => esc_html__('None', 'blabber'),
						'bottom'  => esc_html__('Bottom', 'blabber')
					),
					//'type'       => BLABBER_THEME_FREE ? 'hidden' : 'switch',
                    'type'       => 'hidden',
				),
				'related_slider_space'          => array(
					'title'      => esc_html__( 'Space', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Space between slides', 'blabber' ) ),
					'override' => array(
						'mode'    => 'post',
						'section' => esc_html__( 'Content', 'blabber' ),
					),
					'dependency' => array(
						'show_related_posts' => array( 1 ),
						'related_slider' => array( 1 ),
					),
					'std'        => 30,
					//'type'       => BLABBER_THEME_FREE ? 'hidden' : 'text',
                    'type'       => 'hidden',
				),
				'posts_navigation_info'      => array(
					'title' => esc_html__( 'Posts navigation', 'blabber' ),
					'desc'  => '',
					'type'  => 'info',
				),
				'posts_navigation'           => array(
					'title'   => esc_html__( 'Show posts navigation', 'blabber' ),
					'desc'    => wp_kses_data( __( "Show posts navigation on the single post's pages", 'blabber' ) ),
					'std'     => 'links',
					'options' => array(
						'none'   => esc_html__('None', 'blabber'),
						'links'  => esc_html__('Prev/Next links', 'blabber'),
						//'scroll' => esc_html__('Infinite scroll', 'blabber')
					),
					'type'    => BLABBER_THEME_FREE ? 'hidden' : 'switch',
				),
				'posts_navigation_fixed'     => array(
					'title'      => esc_html__( 'Fixed posts navigation', 'blabber' ),
					'desc'       => wp_kses_data( __( "Make posts navigation fixed position. Display it when the content of the article is inside the window.", 'blabber' ) ),
					'dependency' => array(
						'posts_navigation' => array( 'links' ),
					),
					'std'        => 0,
					//'type'       => BLABBER_THEME_FREE ? 'hidden' : 'checkbox',
					'type'       => 'hidden',
				),
				'posts_navigation_scroll_hide_author'  => array(
					'title'      => esc_html__( 'Hide author bio', 'blabber' ),
					'desc'       => wp_kses_data( __( "Hide author bio after post content when infinite scroll is used.", 'blabber' ) ),
					'dependency' => array(
						'posts_navigation' => array( 'scroll' ),
					),
					'std'        => 0,
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'checkbox',
				),
				'posts_navigation_scroll_hide_related'  => array(
					'title'      => esc_html__( 'Hide related posts', 'blabber' ),
					'desc'       => wp_kses_data( __( "Hide related posts after post content when infinite scroll is used.", 'blabber' ) ),
					'dependency' => array(
						'posts_navigation' => array( 'scroll' ),
					),
					'std'        => 0,
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'checkbox',
				),
				'posts_navigation_scroll_hide_comments' => array(
					'title'      => esc_html__( 'Hide comments', 'blabber' ),
					'desc'       => wp_kses_data( __( "Hide comments after post content when infinite scroll is used.", 'blabber' ) ),
					'dependency' => array(
						'posts_navigation' => array( 'scroll' ),
					),
					'std'        => 1,
					'type'       => BLABBER_THEME_FREE ? 'hidden' : 'checkbox',
				),
				'posts_banners_info'      => array(
					'title' => esc_html__( 'Posts banners', 'blabber' ),
					'desc'  => '',
					'type'  => 'info',
				),
				'header_banner_link'     => array(
					'title' => esc_html__( 'Header banner link', 'blabber' ),
					'desc'  => wp_kses_data( __( 'Insert URL of the banner', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'post',
						'section' => esc_html__( 'Banners', 'blabber' ),
					),
					'std'   => '',
					'type'  => 'text',
				),
				'header_banner_img'     => array(
					'title' => esc_html__( 'Header banner image', 'blabber' ),
					'desc'  => wp_kses_data( __( 'Select image to display at the backgound', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'post',
						'section' => esc_html__( 'Banners', 'blabber' ),
					),
					'std'        => '',
					'type'       => 'image',
				),
				'header_banner_height'  => array(
					'title' => esc_html__( 'Header banner height', 'blabber' ),
					'desc'  => wp_kses_data( __( 'Specify minimal height of the banner (in "px" or "em"). For example: 15em', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'post',
						'section' => esc_html__( 'Banners', 'blabber' ),
					),
					'std'        => '',
					'type'       => 'text',
				),
				'header_banner_code'     => array(
					'title'      => esc_html__( 'Header banner code', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Embed html code', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'post',
						'section' => esc_html__( 'Banners', 'blabber' ),
					),
					'std'        => '',
					'allow_html' => true,
					'type'       => 'textarea',
				),
				'footer_banner_link'     => array(
					'title' => esc_html__( 'Footer banner link', 'blabber' ),
					'desc'  => wp_kses_data( __( 'Insert URL of the banner', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'post',
						'section' => esc_html__( 'Banners', 'blabber' ),
					),
					'std'   => '',
					'type'  => 'text',
				),
				'footer_banner_img'     => array(
					'title' => esc_html__( 'Footer banner image', 'blabber' ),
					'desc'  => wp_kses_data( __( 'Select image to display at the backgound', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'post',
						'section' => esc_html__( 'Banners', 'blabber' ),
					),
					'std'        => '',
					'type'       => 'image',
				),
				'footer_banner_height'  => array(
					'title' => esc_html__( 'Footer banner height', 'blabber' ),
					'desc'  => wp_kses_data( __( 'Specify minimal height of the banner (in "px" or "em"). For example: 15em', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'post',
						'section' => esc_html__( 'Banners', 'blabber' ),
					),
					'std'        => '',
					'type'       => 'text',
				),
				'footer_banner_code'     => array(
					'title'      => esc_html__( 'Footer banner code', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Embed html code', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'post',
						'section' => esc_html__( 'Banners', 'blabber' ),
					),
					'std'        => '',
					'allow_html' => true,
					'type'       => 'textarea',
				),
				'sidebar_banner_link'     => array(
					'title' => esc_html__( 'Sidebar banner link', 'blabber' ),
					'desc'  => wp_kses_data( __( 'Insert URL of the banner', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'post',
						'section' => esc_html__( 'Banners', 'blabber' ),
					),
					'std'   => '',
					'type'  => 'text',
				),
				'sidebar_banner_img'     => array(
					'title' => esc_html__( 'Sidebar banner image', 'blabber' ),
					'desc'  => wp_kses_data( __( 'Select image to display at the backgound', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'post',
						'section' => esc_html__( 'Banners', 'blabber' ),
					),
					'std'        => '',
					'type'       => 'image',
				),
				'sidebar_banner_code'     => array(
					'title'      => esc_html__( 'Sidebar banner code', 'blabber' ),
					'desc'       => wp_kses_data( __( 'Embed html code', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'post',
						'section' => esc_html__( 'Banners', 'blabber' ),
					),
					'std'        => '',
					'allow_html' => true,
					'type'       => 'textarea',
				),
				'background_banner_link'     => array(
					'title' => esc_html__( "Post's background banner link", 'blabber' ),
					'desc'  => wp_kses_data( __( 'Insert URL of the banner', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'post',
						'section' => esc_html__( 'Banners', 'blabber' ),
					),
					'std'   => '',
					'type'  => 'text',
				),
				'background_banner_img'     => array(
					'title' => esc_html__( "Post's background banner image", 'blabber' ),
					'desc'  => wp_kses_data( __( 'Select image to display at the backgound', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'post',
						'section' => esc_html__( 'Banners', 'blabber' ),
					),
					'std'        => '',
					'type'       => 'image',
				),
				'background_banner_code'     => array(
					'title'      => esc_html__( "Post's background banner code", 'blabber' ),
					'desc'       => wp_kses_data( __( 'Embed html code', 'blabber' ) ),
					'override'   => array(
						'mode'    => 'post',
						'section' => esc_html__( 'Banners', 'blabber' ),
					),
					'std'        => '',
					'allow_html' => true,
					'type'       => 'textarea',
				),
				'blog_end'                      => array(
					'type' => 'panel_end',
				),



				// 'Colors'
				//---------------------------------------------
				'panel_colors'                  => array(
					'title'    => esc_html__( 'Colors', 'blabber' ),
					'desc'     => '',
					'priority' => 300,
					'type'     => 'section',
				),

				'color_schemes_info'            => array(
					'title'  => esc_html__( 'Color schemes', 'blabber' ),
					'desc'   => wp_kses_data( __( 'Color schemes for various parts of the site. "Inherit" means that this block is used the Site color scheme (the first parameter)', 'blabber' ) ),
					'hidden' => $hide_schemes,
					'type'   => 'info',
				),
				'color_scheme'                  => array(
					'title'    => esc_html__( 'Site Color Scheme', 'blabber' ),
					'desc'     => '',
					'override' => array(
						'mode'    => 'page,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Colors', 'blabber' ),
					),
					'std'      => 'default',
					'options'  => array(),
					'refresh'  => false,
					'type'     => $hide_schemes ? 'hidden' : 'switch',
				),
				'header_scheme'                 => array(
					'title'    => esc_html__( 'Header Color Scheme', 'blabber' ),
					'desc'     => '',
					'override' => array(
						'mode'    => 'page,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Colors', 'blabber' ),
					),
					'std'      => 'inherit',
					'options'  => array(),
					'refresh'  => false,
					'type'     => $hide_schemes ? 'hidden' : 'switch',
				),
				'menu_scheme'                   => array(
					'title'    => esc_html__( 'Sidemenu Color Scheme', 'blabber' ),
					'desc'     => '',
					'override' => array(
						'mode'    => 'page,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Colors', 'blabber' ),
					),
					'std'      => 'inherit',
					'options'  => array(),
					'refresh'  => false,
					'type'     => $hide_schemes || BLABBER_THEME_FREE ? 'hidden' : 'switch',
					//'type'     => 'hidden',
				),
				'sidebar_scheme'                => array(
					'title'    => esc_html__( 'Sidebar Color Scheme', 'blabber' ),
					'desc'     => '',
					'override' => array(
						'mode'    => 'page,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Colors', 'blabber' ),
					),
					'std'      => 'inherit',
					'options'  => array(),
					'refresh'  => false,
					'type'     => $hide_schemes ? 'hidden' : 'switch',
				),
				'footer_scheme'                 => array(
					'title'    => esc_html__( 'Footer Color Scheme', 'blabber' ),
					'desc'     => '',
					'override' => array(
						'mode'    => 'page,cpt_team,cpt_services,cpt_dishes,cpt_competitions,cpt_rounds,cpt_matches,cpt_cars,cpt_properties,cpt_courses,cpt_portfolio',
						'section' => esc_html__( 'Colors', 'blabber' ),
					),
					'std'      => 'dark',
					'options'  => array(),
					'refresh'  => false,
					'type'     => $hide_schemes ? 'hidden' : 'switch',
				),

				'color_scheme_editor_info'      => array(
					'title' => esc_html__( 'Color scheme editor', 'blabber' ),
					'desc'  => wp_kses_data( __( 'Select color scheme to modify. Attention! Only those sections in the site will be changed which this scheme was assigned to', 'blabber' ) ),
					'type'  => 'info',
				),
				'scheme_storage'                => array(
					'title'       => esc_html__( 'Color scheme editor', 'blabber' ),
					'desc'        => '',
					'std'         => '$blabber_get_scheme_storage',
					'refresh'     => false,
					'colorpicker' => 'tiny',
					'type'        => 'scheme_editor',
				),

				// Internal options.
				// Attention! Don't change any options in the section below!
				// Use huge priority to call render this elements after all options!
				'reset_options'                 => array(
					'title'    => '',
					'desc'     => '',
					'std'      => '0',
					'priority' => 10000,
					'type'     => 'hidden',
				),

				'last_option'                   => array(     // Need to manually call action to include Tiny MCE scripts
					'title' => '',
					'desc'  => '',
					'std'   => 1,
					'type'  => 'hidden',
				),

			)
		);



		// Prepare panel 'Fonts'
		// -------------------------------------------------------------
		$fonts = array(

			// 'Fonts'
			//---------------------------------------------
			'fonts'             => array(
				'title'    => esc_html__( 'Typography', 'blabber' ),
				'desc'     => '',
				'priority' => 200,
				'type'     => 'panel',
			),

			// Fonts - Load_fonts
			'load_fonts'        => array(
				'title' => esc_html__( 'Load fonts', 'blabber' ),
				'desc'  => wp_kses_data( __( 'Specify fonts to load when theme start. You can use them in the base theme elements: headers, text, menu, links, input fields, etc.', 'blabber' ) )
						. '<br>'
						. wp_kses_data( __( 'Attention! Press "Refresh" button to reload preview area after the all fonts are changed', 'blabber' ) ),
				'type'  => 'section',
			),
			'load_fonts_subset' => array(
				'title'   => esc_html__( 'Google fonts subsets', 'blabber' ),
				'desc'    => wp_kses_data( __( 'Specify comma separated list of the subsets which will be load from Google fonts', 'blabber' ) )
						. '<br>'
						. wp_kses_data( __( 'Available subsets are: latin,latin-ext,cyrillic,cyrillic-ext,greek,greek-ext,vietnamese', 'blabber' ) ),
				'class'   => 'blabber_column-1_3 blabber_new_row',
				'refresh' => false,
				'std'     => '$blabber_get_load_fonts_subset',
				'type'    => 'text',
			),
		);

		for ( $i = 1; $i <= blabber_get_theme_setting( 'max_load_fonts' ); $i++ ) {
			if ( blabber_get_value_gp( 'page' ) != 'theme_options' ) {
				$fonts[ "load_fonts-{$i}-info" ] = array(
					// Translators: Add font's number - 'Font 1', 'Font 2', etc
					'title' => esc_html( sprintf( __( 'Font %s', 'blabber' ), $i ) ),
					'desc'  => '',
					'type'  => 'info',
				);
			}
			$fonts[ "load_fonts-{$i}-name" ]   = array(
				'title'   => esc_html__( 'Font name', 'blabber' ),
				'desc'    => '',
				'class'   => 'blabber_column-1_3 blabber_new_row',
				'refresh' => false,
				'std'     => '$blabber_get_load_fonts_option',
				'type'    => 'text',
			);
			$fonts[ "load_fonts-{$i}-family" ] = array(
				'title'   => esc_html__( 'Font family', 'blabber' ),
				'desc'    => 1 == $i
							? wp_kses_data( __( 'Select font family to use it if font above is not available', 'blabber' ) )
							: '',
				'class'   => 'blabber_column-1_3',
				'refresh' => false,
				'std'     => '$blabber_get_load_fonts_option',
				'options' => array(
					'inherit'    => esc_html__( 'Inherit', 'blabber' ),
					'serif'      => esc_html__( 'serif', 'blabber' ),
					'sans-serif' => esc_html__( 'sans-serif', 'blabber' ),
					'monospace'  => esc_html__( 'monospace', 'blabber' ),
					'cursive'    => esc_html__( 'cursive', 'blabber' ),
					'fantasy'    => esc_html__( 'fantasy', 'blabber' ),
				),
				'type'    => 'select',
			);
			$fonts[ "load_fonts-{$i}-styles" ] = array(
				'title'   => esc_html__( 'Font styles', 'blabber' ),
				'desc'    => 1 == $i
							? wp_kses_data( __( 'Font styles used only for the Google fonts. This is a comma separated list of the font weight and styles. For example: 400,400italic,700', 'blabber' ) )
								. '<br>'
								. wp_kses_data( __( 'Attention! Each weight and style increase download size! Specify only used weights and styles.', 'blabber' ) )
							: '',
				'class'   => 'blabber_column-1_3',
				'refresh' => false,
				'std'     => '$blabber_get_load_fonts_option',
				'type'    => 'text',
			);
		}
		$fonts['load_fonts_end'] = array(
			'type' => 'section_end',
		);

		// Fonts - H1..6, P, Info, Menu, etc.
		$theme_fonts = blabber_get_theme_fonts();
		foreach ( $theme_fonts as $tag => $v ) {
			$fonts[ "{$tag}_section" ] = array(
				'title' => ! empty( $v['title'] )
								? $v['title']
								// Translators: Add tag's name to make title 'H1 settings', 'P settings', etc.
								: esc_html( sprintf( __( '%s settings', 'blabber' ), $tag ) ),
				'desc'  => ! empty( $v['description'] )
								? $v['description']
								// Translators: Add tag's name to make description
								: wp_kses_post( sprintf( __( 'Font settings of the "%s" tag.', 'blabber' ), $tag ) ),
				'type'  => 'section',
			);

			foreach ( $v as $css_prop => $css_value ) {
				if ( in_array( $css_prop, array( 'title', 'description' ) ) ) {
					continue;
				}
				// Skip property 'text-decoration' for the main text
				if ( 'text-decoration' == $css_prop && 'p' == $tag ) {
					continue;
				}

				$options    = '';
				$type       = 'text';
				$load_order = 1;
				$title      = ucfirst( str_replace( '-', ' ', $css_prop ) );
				if ( 'font-family' == $css_prop ) {
					$type       = 'select';
					$options    = array();
					$load_order = 2;        // Load this option's value after all options are loaded (use option 'load_fonts' to build fonts list)
				} elseif ( 'font-weight' == $css_prop ) {
					$type    = 'select';
					$options = array(
						'inherit' => esc_html__( 'Inherit', 'blabber' ),
						'100'     => esc_html__( '100 (Light)', 'blabber' ),
						'200'     => esc_html__( '200 (Light)', 'blabber' ),
						'300'     => esc_html__( '300 (Thin)', 'blabber' ),
						'400'     => esc_html__( '400 (Normal)', 'blabber' ),
						'500'     => esc_html__( '500 (Semibold)', 'blabber' ),
						'600'     => esc_html__( '600 (Semibold)', 'blabber' ),
						'700'     => esc_html__( '700 (Bold)', 'blabber' ),
						'800'     => esc_html__( '800 (Black)', 'blabber' ),
						'900'     => esc_html__( '900 (Black)', 'blabber' ),
					);
				} elseif ( 'font-style' == $css_prop ) {
					$type    = 'select';
					$options = array(
						'inherit' => esc_html__( 'Inherit', 'blabber' ),
						'normal'  => esc_html__( 'Normal', 'blabber' ),
						'italic'  => esc_html__( 'Italic', 'blabber' ),
					);
				} elseif ( 'text-decoration' == $css_prop ) {
					$type    = 'select';
					$options = array(
						'inherit'      => esc_html__( 'Inherit', 'blabber' ),
						'none'         => esc_html__( 'None', 'blabber' ),
						'underline'    => esc_html__( 'Underline', 'blabber' ),
						'overline'     => esc_html__( 'Overline', 'blabber' ),
						'line-through' => esc_html__( 'Line-through', 'blabber' ),
					);
				} elseif ( 'text-transform' == $css_prop ) {
					$type    = 'select';
					$options = array(
						'inherit'    => esc_html__( 'Inherit', 'blabber' ),
						'none'       => esc_html__( 'None', 'blabber' ),
						'uppercase'  => esc_html__( 'Uppercase', 'blabber' ),
						'lowercase'  => esc_html__( 'Lowercase', 'blabber' ),
						'capitalize' => esc_html__( 'Capitalize', 'blabber' ),
					);
				}
				$fonts[ "{$tag}_{$css_prop}" ] = array(
					'title'      => $title,
					'desc'       => '',
					'class'      => 'blabber_column-1_5',
					'refresh'    => false,
					'load_order' => $load_order,
					'std'        => '$blabber_get_theme_fonts_option',
					'options'    => $options,
					'type'       => $type,
				);
			}

			$fonts[ "{$tag}_section_end" ] = array(
				'type' => 'section_end',
			);
		}

		$fonts['fonts_end'] = array(
			'type' => 'panel_end',
		);

		// Add fonts parameters to Theme Options
		blabber_storage_set_array_before( 'options', 'panel_colors', $fonts );

		// Add Header Video if WP version < 4.7
		// -----------------------------------------------------
		if ( ! function_exists( 'get_header_video_url' ) ) {
			blabber_storage_set_array_after(
				'options', 'header_image_override', 'header_video', array(
					'title'    => esc_html__( 'Header video', 'blabber' ),
					'desc'     => wp_kses_data( __( 'Select video to use it as background for the header', 'blabber' ) ),
					'override' => array(
						'mode'    => 'page',
						'section' => esc_html__( 'Header', 'blabber' ),
					),
					'std'      => '',
					'type'     => 'video',
				)
			);
		}

		// Add option 'logo' if WP version < 4.5
		// or 'custom_logo' if current page is not 'Customize'
		// ------------------------------------------------------
		if ( ! function_exists( 'the_custom_logo' ) || ! blabber_check_url( 'customize.php' ) ) {
			blabber_storage_set_array_before(
				'options', 'logo_retina', function_exists( 'the_custom_logo' ) ? 'custom_logo' : 'logo', array(
					'title'    => esc_html__( 'Logo', 'blabber' ),
					'desc'     => wp_kses_data( __( 'Select or upload the site logo', 'blabber' ) ),
					'class'    => 'blabber_column-1_2 blabber_new_row',
					'priority' => 60,
					'std'      => '',
					'qsetup'   => esc_html__( 'General', 'blabber' ),
					'type'     => 'image',
				)
			);
		}

	}
}


// Returns a list of options that can be overridden for CPT
if ( ! function_exists( 'blabber_options_get_list_cpt_options' ) ) {
	function blabber_options_get_list_cpt_options( $cpt, $title = '' ) {
		if ( empty( $title ) ) {
			$title = ucfirst( $cpt );
		}
		return array(
			"content_info_{$cpt}"           => array(
				'title' => esc_html__( 'Content', 'blabber' ),
				'desc'  => '',
				'type'  => 'info',
			),
			"body_style_{$cpt}"             => array(
				'title'    => esc_html__( 'Body style', 'blabber' ),
				'desc'     => wp_kses_data( __( 'Select width of the body content', 'blabber' ) ),
				'std'      => 'inherit',
				'options'  => blabber_get_list_body_styles( true ),
				'type'     => 'select',
			),
			"boxed_bg_image_{$cpt}"         => array(
				'title'      => esc_html__( 'Boxed bg image', 'blabber' ),
				'desc'       => wp_kses_data( __( 'Select or upload image, used as background in the boxed body', 'blabber' ) ),
				'dependency' => array(
					"body_style_{$cpt}" => array( 'boxed' ),
				),
				'std'        => 'inherit',
				'type'       => 'image',
			),
			"header_info_{$cpt}"            => array(
				'title' => esc_html__( 'Header', 'blabber' ),
				'desc'  => '',
				'type'  => 'info',
			),
			"header_type_{$cpt}"            => array(
				'title'   => esc_html__( 'Header style', 'blabber' ),
				'desc'    => wp_kses_data( __( 'Choose whether to use the default header or header Layouts (available only if the ThemeREX Addons is activated)', 'blabber' ) ),
				'std'     => 'inherit',
				'options' => blabber_get_list_header_footer_types( true ),
				'type'    => BLABBER_THEME_FREE ? 'hidden' : 'switch',
			),
			"header_style_{$cpt}"           => array(
				'title'      => esc_html__( 'Select custom layout', 'blabber' ),
				// Translators: Add CPT name to the description
				'desc'       => wp_kses_data( sprintf( __( 'Select custom layout to display the site header on the %s pages', 'blabber' ), $title ) ),
				'dependency' => array(
					"header_type_{$cpt}" => array( 'custom' ),
				),
				'std'        => 'inherit',
				'options'    => array(),
				'type'       => BLABBER_THEME_FREE ? 'hidden' : 'select',
			),
			"header_position_{$cpt}"        => array(
				'title'   => esc_html__( 'Header position', 'blabber' ),
				// Translators: Add CPT name to the description
				'desc'    => wp_kses_data( sprintf( __( 'Select position to display the site header on the %s pages', 'blabber' ), $title ) ),
				'std'     => 'inherit',
				'options' => array(),
				'type'    => BLABBER_THEME_FREE ? 'hidden' : 'switch',
			),
			"header_image_override_{$cpt}"  => array(
				'title'   => esc_html__( 'Header image override', 'blabber' ),
				'desc'    => wp_kses_data( __( "Allow override the header image with the post's featured image", 'blabber' ) ),
				'std'     => 'inherit',
				'options' => array(
					'inherit' => esc_html__( 'Inherit', 'blabber' ),
					1         => esc_html__( 'Yes', 'blabber' ),
					0         => esc_html__( 'No', 'blabber' ),
				),
				'type'    => BLABBER_THEME_FREE ? 'hidden' : 'switch',
			),
			"header_widgets_{$cpt}"         => array(
				'title'   => esc_html__( 'Header widgets', 'blabber' ),
				// Translators: Add CPT name to the description
				'desc'    => wp_kses_data( sprintf( __( 'Select set of widgets to show in the header on the %s pages', 'blabber' ), $title ) ),
				'std'     => 'hide',
				'options' => array(),
				'type'    => 'select',
			),

			"sidebar_info_{$cpt}"           => array(
				'title' => esc_html__( 'Sidebar', 'blabber' ),
				'desc'  => '',
				'type'  => 'info',
			),
			"sidebar_position_{$cpt}"       => array(
				'title'   => sprintf( __( 'Sidebar position on the %s list', 'blabber' ), $title ),
				// Translators: Add CPT name to the description
				'desc'    => wp_kses_data( sprintf( __( 'Select position to show sidebar on the %s list', 'blabber' ), $title ) ),
				'std'     => 'left',
				'options' => array(),
				'type'    => 'switch',
			),
			"sidebar_position_ss_{$cpt}"=> array(
				'title'    => sprintf( __( 'Sidebar position on the %s list on the small screen', 'blabber' ), $title ),
				'desc'     => wp_kses_data( __( 'Select position to move sidebar on the small screen - above or below the content', 'blabber' ) ),
				'std'      => 'below',
				'dependency' => array(
					"sidebar_position_{$cpt}" => array( '^hide' ),
				),
				'options'  => array(),
				'type'     => 'switch',
			),
			"sidebar_widgets_{$cpt}"        => array(
				'title'      => sprintf( __( 'Sidebar widgets on the %s list', 'blabber' ), $title ),
				// Translators: Add CPT name to the description
				'desc'       => wp_kses_data( sprintf( __( 'Select sidebar to show on the %s list', 'blabber' ), $title ) ),
				'dependency' => array(
					"sidebar_position_{$cpt}" => array( '^hide' ),
				),
				'std'        => 'hide',
				'options'    => array(),
				'type'       => 'select',
			),
			"sidebar_position_single_{$cpt}"       => array(
				'title'   => sprintf( __( 'Sidebar position on the single post', 'blabber' ), $title ),
				// Translators: Add CPT name to the description
				'desc'    => wp_kses_data( sprintf( __( 'Select position to show sidebar on the single posts of the %s', 'blabber' ), $title ) ),
				'std'     => 'left',
				'options' => array(),
				'type'    => 'switch',
			),
			"sidebar_position_ss_single_{$cpt}"=> array(
				'title'    => esc_html__( 'Sidebar position on the single post on the small screen', 'blabber' ),
				'desc'     => wp_kses_data( __( 'Select position to move sidebar on the small screen - above or below the content', 'blabber' ) ),
				'dependency' => array(
					"sidebar_position_single_{$cpt}" => array( '^hide' ),
				),
				'std'      => 'below',
				'options'  => array(),
				'type'     => 'switch',
			),
			"sidebar_widgets_single_{$cpt}"        => array(
				'title'      => sprintf( __( 'Sidebar widgets on the single post', 'blabber' ), $title ),
				// Translators: Add CPT name to the description
				'desc'       => wp_kses_data( sprintf( __( 'Select widgets to show in the sidebar on the single posts of the %s', 'blabber' ), $title ) ),
				'dependency' => array(
					"sidebar_position_single_{$cpt}" => array( '^hide' ),
				),
				'std'        => 'hide',
				'options'    => array(),
				'type'       => 'select',
			),
			"expand_content_{$cpt}"         => array(
				'title'   => esc_html__( 'Expand content', 'blabber' ),
				'desc'    => wp_kses_data( __( 'Expand the content width if the sidebar is hidden', 'blabber' ) ),
				'refresh' => false,
				'std'     => 'inherit',
				'options'  => blabber_get_list_checkbox_values( true ),
				'type'     => BLABBER_THEME_FREE ? 'hidden' : 'switch',
			),
			"expand_content_single_{$cpt}"         => array(
				'title'   => esc_html__( 'Expand content on the single post', 'blabber' ),
				'desc'    => wp_kses_data( __( 'Expand the content width on the single post if the sidebar is hidden', 'blabber' ) ),
				'refresh' => false,
				'std'     => 'inherit',
				'options'  => blabber_get_list_checkbox_values( true ),
				'type'     => BLABBER_THEME_FREE ? 'hidden' : 'switch',
			),

			"footer_info_{$cpt}"            => array(
				'title' => esc_html__( 'Footer', 'blabber' ),
				'desc'  => '',
				'type'  => 'info',
			),
			"footer_type_{$cpt}"            => array(
				'title'   => esc_html__( 'Footer style', 'blabber' ),
				'desc'    => wp_kses_data( __( 'Choose whether to use the default footer or footer Layouts (available only if the ThemeREX Addons is activated)', 'blabber' ) ),
				'std'     => 'inherit',
				'options' => blabber_get_list_header_footer_types( true ),
				'type'    => BLABBER_THEME_FREE ? 'hidden' : 'switch',
			),
			"footer_style_{$cpt}"           => array(
				'title'      => esc_html__( 'Select custom layout', 'blabber' ),
				'desc'       => wp_kses_data( __( 'Select custom layout to display the site footer', 'blabber' ) ),
				'std'        => 'inherit',
				'dependency' => array(
					"footer_type_{$cpt}" => array( 'custom' ),
				),
				'options'    => array(),
				'type'       => BLABBER_THEME_FREE ? 'hidden' : 'select',
			),
			"footer_widgets_{$cpt}"         => array(
				'title'      => esc_html__( 'Footer widgets', 'blabber' ),
				'desc'       => wp_kses_data( __( 'Select set of widgets to show in the footer', 'blabber' ) ),
				'dependency' => array(
					"footer_type_{$cpt}" => array( 'default' ),
				),
				'std'        => 'footer_widgets',
				'options'    => array(),
				'type'       => 'select',
			),
			"footer_columns_{$cpt}"         => array(
				'title'      => esc_html__( 'Footer columns', 'blabber' ),
				'desc'       => wp_kses_data( __( 'Select number columns to show widgets in the footer. If 0 - autodetect by the widgets count', 'blabber' ) ),
				'dependency' => array(
					"footer_type_{$cpt}"    => array( 'default' ),
					"footer_widgets_{$cpt}" => array( '^hide' ),
				),
				'std'        => 0,
				'options'    => blabber_get_list_range( 0, 6 ),
				'type'       => 'select',
			),
			"footer_wide_{$cpt}"            => array(
				'title'      => esc_html__( 'Footer fullwidth', 'blabber' ),
				'desc'       => wp_kses_data( __( 'Do you want to stretch the footer to the entire window width?', 'blabber' ) ),
				'dependency' => array(
					"footer_type_{$cpt}" => array( 'default' ),
				),
				'std'        => 0,
				'type'       => 'checkbox',
			),

			"widgets_info_{$cpt}"           => array(
				'title' => esc_html__( 'Additional panels', 'blabber' ),
				'desc'  => '',
				'type'  => BLABBER_THEME_FREE ? 'hidden' : 'info',
			),
			"widgets_above_page_{$cpt}"     => array(
				'title'   => esc_html__( 'Widgets at the top of the page', 'blabber' ),
				'desc'    => wp_kses_data( __( 'Select widgets to show at the top of the page (above content and sidebar)', 'blabber' ) ),
				'std'     => 'hide',
				'options' => array(),
				'type'    => BLABBER_THEME_FREE ? 'hidden' : 'select',
			),
			"widgets_above_content_{$cpt}"  => array(
				'title'   => esc_html__( 'Widgets above the content', 'blabber' ),
				'desc'    => wp_kses_data( __( 'Select widgets to show at the beginning of the content area', 'blabber' ) ),
				'std'     => 'hide',
				'options' => array(),
				'type'    => BLABBER_THEME_FREE ? 'hidden' : 'select',
			),
			"widgets_below_content_{$cpt}"  => array(
				'title'   => esc_html__( 'Widgets below the content', 'blabber' ),
				'desc'    => wp_kses_data( __( 'Select widgets to show at the ending of the content area', 'blabber' ) ),
				'std'     => 'hide',
				'options' => array(),
				'type'    => BLABBER_THEME_FREE ? 'hidden' : 'select',
			),
			"widgets_below_page_{$cpt}"     => array(
				'title'   => esc_html__( 'Widgets at the bottom of the page', 'blabber' ),
				'desc'    => wp_kses_data( __( 'Select widgets to show at the bottom of the page (below content and sidebar)', 'blabber' ) ),
				'std'     => 'hide',
				'options' => array(),
				'type'    => BLABBER_THEME_FREE ? 'hidden' : 'select',
			),
		);
	}
}


// Return lists with choises when its need in the admin mode
if ( ! function_exists( 'blabber_options_get_list_choises' ) ) {
	add_filter( 'blabber_filter_options_get_list_choises', 'blabber_options_get_list_choises', 10, 2 );
	function blabber_options_get_list_choises( $list, $id ) {
		if ( is_array( $list ) && count( $list ) == 0 ) {
			if ( strpos( $id, 'header_style' ) === 0 ) {
				$list = blabber_get_list_header_styles( strpos( $id, 'header_style_' ) === 0 );
			} elseif ( strpos( $id, 'header_position' ) === 0 ) {
				$list = blabber_get_list_header_positions( strpos( $id, 'header_position_' ) === 0 );
			} elseif ( strpos( $id, 'header_widgets' ) === 0 ) {
				$list = blabber_get_list_sidebars( strpos( $id, 'header_widgets_' ) === 0, true );
			} elseif ( strpos( $id, '_scheme' ) > 0 ) {
				$list = blabber_get_list_schemes( 'color_scheme' != $id );
			} elseif ( strpos( $id, 'sidebar_widgets' ) === 0 ) {
				$list = blabber_get_list_sidebars( 'sidebar_widgets_single' != $id && ( strpos( $id, 'sidebar_widgets_' ) === 0 || strpos( $id, 'sidebar_widgets_single_' ) === 0 ), true );
			} elseif ( strpos( $id, 'sidebar_position_ss' ) === 0 ) {
				$list = blabber_get_list_sidebars_positions_ss( strpos( $id, 'sidebar_position_ss_' ) === 0 );
			} elseif ( strpos( $id, 'sidebar_position' ) === 0 ) {
				$list = blabber_get_list_sidebars_positions( strpos( $id, 'sidebar_position_' ) === 0 );
			} elseif ( strpos( $id, 'widgets_above_page' ) === 0 ) {
				$list = blabber_get_list_sidebars( strpos( $id, 'widgets_above_page_' ) === 0, true );
			} elseif ( strpos( $id, 'widgets_above_content' ) === 0 ) {
				$list = blabber_get_list_sidebars( strpos( $id, 'widgets_above_content_' ) === 0, true );
			} elseif ( strpos( $id, 'widgets_below_page' ) === 0 ) {
				$list = blabber_get_list_sidebars( strpos( $id, 'widgets_below_page_' ) === 0, true );
			} elseif ( strpos( $id, 'widgets_below_content' ) === 0 ) {
				$list = blabber_get_list_sidebars( strpos( $id, 'widgets_below_content_' ) === 0, true );
			} elseif ( strpos( $id, 'footer_style' ) === 0 ) {
				$list = blabber_get_list_footer_styles( strpos( $id, 'footer_style_' ) === 0 );
			} elseif ( strpos( $id, 'footer_widgets' ) === 0 ) {
				$list = blabber_get_list_sidebars( strpos( $id, 'footer_widgets_' ) === 0, true );
			} elseif ( strpos( $id, 'blog_style' ) === 0 ) {
				$list = blabber_get_list_blog_styles( strpos( $id, 'blog_style_' ) === 0 );
			} elseif ( strpos( $id, 'single_style' ) === 0 ) {
				$list = blabber_get_list_single_styles( strpos( $id, 'single_style_' ) === 0 );
			} elseif ( strpos( $id, 'post_type' ) === 0 ) {
				$list = blabber_get_list_posts_types();
			} elseif ( strpos( $id, 'parent_cat' ) === 0 ) {
				$list = blabber_array_merge( array( 0 => esc_html__( '- Select category -', 'blabber' ) ), blabber_get_list_categories() );
			} elseif ( strpos( $id, 'blog_animation' ) === 0 ) {
				$list = blabber_get_list_animations_in();
			} elseif ( 'color_scheme_editor' == $id ) {
				$list = blabber_get_list_schemes();
			} elseif ( strpos( $id, '_font-family' ) > 0 ) {
				$list = blabber_get_list_load_fonts( true );
			}
		}
		return $list;
	}
}
