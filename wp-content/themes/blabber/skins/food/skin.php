<?php
/**
 * Skins support: Main skin file for the skin 'Default'
 *
 * Setup skin-dependent fonts and colors, load scripts and styles,
 * and other operations that affect the appearance and behavior of the theme
 * when the skin is activated
 *
 * @package WordPress
 * @subpackage BLABBER
 * @since BLABBER 1.0.46
 */

if ( ! function_exists( 'blabber_skin_theme_setup9' ) ) {
    add_action('after_setup_theme', 'blabber_skin_theme_setup9', 9);
    function blabber_skin_theme_setup9() {
        if (blabber_exists_woocommerce()) {
            // Add cats before title
            add_action('woocommerce_before_shop_loop_item_title', 'blabber_woocommerce_get_post_categories_skin', 30);
        }
    }
}

// Show categories of the current product
if ( ! function_exists( 'blabber_woocommerce_get_post_categories_skin' ) ) {
    function blabber_woocommerce_get_post_categories_skin( $cats = '' ) {
        if ( get_post_type() == 'product' ) {
            echo blabber_get_post_terms( ', ', get_the_ID(), 'product_cat' );
        }
    }
}


// Theme init priorities:
// 3 - add/remove Theme Options elements
if ( ! function_exists( 'blabber_skin_theme_setup1' ) ) {
	add_action( 'after_setup_theme', 'blabber_skin_theme_setup1', 1 );
	function blabber_skin_theme_setup1() {
		// ToDo: Add / Modify theme options, color schemes, required plugins, etc.


        // -----------------------------------------------------------------
        // -- Theme fonts (Google and/or custom fonts)
        // -----------------------------------------------------------------

        // Fonts to load when theme start
        // It can be Google fonts or uploaded fonts, placed in the folder /css/font-face/font-name inside the theme folder
        // Attention! Font's folder must have name equal to the font's name, with spaces replaced on the dash '-'
        // For example: font name 'TeX Gyre Termes', folder 'TeX-Gyre-Termes'
        blabber_storage_set(
            'load_fonts', array(
                // Google font
                array(
                    'name'   => 'Roboto',
                    'family' => 'sans-serif',
                    'styles' => '400', '700'     // Parameter 'style' used only for the Google fonts
                ),
                array(
                    'name'   => 'Roboto Slab',
                    'family' => 'serif',
                    'styles' => '400', '700'     // Parameter 'style' used only for the Google fonts
                ),
            )
        );

        // Characters subset for the Google fonts. Available values are: latin,latin-ext,cyrillic,cyrillic-ext,greek,greek-ext,vietnamese
        blabber_storage_set( 'load_fonts_subset', 'latin,latin-ext' );

        // Settings of the main tags
        // Attention! Font name in the parameter 'font-family' will be enclosed in the quotes and no spaces after comma!
        // For example:	'font-family' => '"Roboto",sans-serif'	- is correct
        // 				'font-family' => '"Roboto", sans-serif'	- is incorrect
        // 				'font-family' => 'Roboto,sans-serif'	- is incorrect

        blabber_storage_set(
            'theme_fonts', array(
                'p'       => array(
                    'title'           => esc_html__( 'Main text', 'blabber' ),
                    'description'     => esc_html__( 'Font settings of the main text of the site. Attention! For correct display of the site on mobile devices, use only units "rem", "em" or "ex"', 'blabber' ),
                    'font-family'     => '"Roboto",sans-serif',
                    'font-size'       => '1rem',
                    'font-weight'     => '400',
                    'font-style'      => 'normal',
                    'line-height'     => '1.65em',
                    'text-decoration' => 'none',
                    'text-transform'  => 'none',
                    'letter-spacing'  => '',
                    'margin-top'      => '0em',
                    'margin-bottom'   => '1.7em',
                ),
                'h1'      => array(
                    'title'           => esc_html__( 'Heading 1', 'blabber' ),
                    'font-family'     => '"Roboto Slab",serif',
                    'font-size'       => '2.667em',
                    'font-weight'     => '400',
                    'font-style'      => 'normal',
                    'line-height'     => '1.35em',
                    'text-decoration' => 'none',
                    'text-transform'  => 'none',
                    'letter-spacing'  => '0px',
                    'margin-top'      => '1em',
                    'margin-bottom'   => '0.66em',
                ),
                'h2'      => array(
                    'title'           => esc_html__( 'Heading 2', 'blabber' ),
                    'font-family'     => '"Roboto Slab",serif',
                    'font-size'       => '2.00em',
                    'font-weight'     => '400',
                    'font-style'      => 'normal',
                    'line-height'     => '1.3em',
                    'text-decoration' => 'none',
                    'text-transform'  => 'none',
                    'letter-spacing'  => '0px',
                    'margin-top'      => '1.4em',
                    'margin-bottom'   => '0.8em',
                ),
                'h3'      => array(
                    'title'           => esc_html__( 'Heading 3', 'blabber' ),
                    'font-family'     => '"Roboto Slab",serif',
                    'font-size'       => '1.667em',
                    'font-weight'     => '400',
                    'font-style'      => 'normal',
                    'line-height'     => '1.25em',
                    'text-decoration' => 'none',
                    'text-transform'  => 'none',
                    'letter-spacing'  => '0px',
                    'margin-top'      => '1.7em',
                    'margin-bottom'   => '0.8em',
                ),
                'h4'      => array(
                    'title'           => esc_html__( 'Heading 4', 'blabber' ),
                    'font-family'     => '"Roboto Slab",serif',
                    'font-size'       => '1.333em',
                    'font-weight'     => '400',
                    'font-style'      => 'normal',
                    'line-height'     => '1.18em',
                    'text-decoration' => 'none',
                    'text-transform'  => 'none',
                    'letter-spacing'  => '0px',
                    'margin-top'      => '2.3em',
                    'margin-bottom'   => '0.8em',
                ),
                'h5'      => array(
                    'title'           => esc_html__( 'Heading 5', 'blabber' ),
                    'font-family'     => '"Roboto Slab",sans-serif',
                    'font-size'       => '1em',
                    'font-weight'     => '400',
                    'font-style'      => 'normal',
                    'line-height'     => '1.24em',
                    'text-decoration' => 'none',
                    'text-transform'  => 'none',
                    'letter-spacing'  => '0px',
                    'margin-top'      => '3.1em',
                    'margin-bottom'   => '1em',
                ),
                'h6'      => array(
                    'title'           => esc_html__( 'Heading 6', 'blabber' ),
                    'font-family'     => '"Roboto Slab",serif',
                    'font-size'       => '0.889em',
                    'font-weight'     => '400',
                    'font-style'      => 'normal',
                    'line-height'     => '1.4em',
                    'text-decoration' => 'none',
                    'text-transform'  => 'none',
                    'letter-spacing'  => '0',
                    'margin-top'      => '3.5em',
                    'margin-bottom'   => '0.85em',
                ),
                'logo'    => array(
                    'title'           => esc_html__( 'Logo text', 'blabber' ),
                    'description'     => esc_html__( 'Font settings of the text case of the logo', 'blabber' ),
                    'font-family'     => '"Cormorant Garamond",serif',
                    'font-size'       => '1.8em',
                    'font-weight'     => '400',
                    'font-style'      => 'normal',
                    'line-height'     => '1.25em',
                    'text-decoration' => 'none',
                    'text-transform'  => 'uppercase',
                    'letter-spacing'  => '1px',
                ),
                'button'  => array(
                    'title'           => esc_html__( 'Buttons', 'blabber' ),
                    'font-family'     => '"Roboto Slab",serif',
                    'font-size'       => '24px',
                    'font-weight'     => '400',
                    'font-style'      => 'normal',
                    'line-height'     => '18px',
                    'text-decoration' => 'none',
                    'text-transform'  => 'none',
                    'letter-spacing'  => '0.3px',
                ),
                'input'   => array(
                    'title'           => esc_html__( 'Input fields', 'blabber' ),
                    'description'     => esc_html__( 'Font settings of the input fields, dropdowns and textareas', 'blabber' ),
                    'font-family'     => '"Roboto",sans-serif',
                    'font-size'       => '18px',
                    'font-weight'     => '400',
                    'font-style'      => 'normal',
                    'line-height'     => '1.5em', // Attention! Firefox don't allow line-height less then 1.5em in the select
                    'text-decoration' => 'none',
                    'text-transform'  => 'none',
                    'letter-spacing'  => '0px',
                ),
                'info'    => array(
                    'title'           => esc_html__( 'Post meta', 'blabber' ),
                    'description'     => esc_html__( 'Font settings of the post meta: date, counters, share, etc.', 'blabber' ),
                    'font-family'     => '"Roboto Slab",serif',
                    'font-size'       => '14px',  // Old value '13px' don't allow using 'font zoom' in the custom blog items
                    'font-weight'     => '400',
                    'font-style'      => 'normal',
                    'line-height'     => '1.5em',
                    'text-decoration' => 'none',
                    'text-transform'  => 'none',
                    'letter-spacing'  => '0px',
                    'margin-top'      => '0.4em',
                    'margin-bottom'   => '',
                ),
                'menu'    => array(
                    'title'           => esc_html__( 'Main menu', 'blabber' ),
                    'description'     => esc_html__( 'Font settings of the main menu items', 'blabber' ),
                    'font-family'     => '"Roboto Slab",serif',
                    'font-size'       => '13px',
                    'font-weight'     => '400',
                    'font-style'      => 'normal',
                    'line-height'     => '1.3em',
                    'text-decoration' => 'none',
                    'text-transform'  => 'none',
                    'letter-spacing'  => '0.4px',
                ),
                'submenu' => array(
                    'title'           => esc_html__( 'Dropdown menu', 'blabber' ),
                    'description'     => esc_html__( 'Font settings of the dropdown menu items', 'blabber' ),
                    'font-family'     => '"Roboto Slab",serif',
                    'font-size'       => '13px',
                    'font-weight'     => '400',
                    'font-style'      => 'normal',
                    'line-height'     => '1.3em',
                    'text-decoration' => 'none',
                    'text-transform'  => 'none',
                    'letter-spacing'  => '0.4px',
                ),
            )
        );


        $schemes = array(

            // Color scheme: 'default'
            'default' => array(
                'title'    => esc_html__( 'Default', 'blabber' ),
                'internal' => true,
                'colors'   => array(

                    // Whole block border and background
                    'bg_color'         => '#ffffff', //+
                    'bd_color'         => '#EBE5E0', //+

                    // Text and links colors
                    'text'             => '#757575', //+
                    'text_light'       => '#9A9A9A', //+
                    'text_dark'        => '#302825', //+
                    'text_link'        => '#F9964F', //+
                    'text_hover'       => '#0074CC', //+
                    'text_link2'       => '#FFFFFF',//+
                    'text_hover2'      => '#FFFFFF',//+
                    'text_link3'       => '#FFFFFF',//+
                    'text_hover3'      => '#FFFFFF',//+

                    // Alternative blocks (sidebar, tabs, alternative blocks, etc.)
                    'alter_bg_color'   => '#F8EADE', //+
                    'alter_bg_hover'   => '#FCF0E7', //+
                    'alter_bd_color'   => '#EBE5E0', //+
                    'alter_bd_hover'   => '#606060', //+
                    'alter_text'       => '#757575', //+
                    'alter_light'      => '#9A9A9A', //+
                    'alter_dark'       => '#302825', //+
                    'alter_link'       => '#F9964F', //+
                    'alter_hover'      => '#0074CC', //+
                    'alter_link2'      => '#0074CC',//+
                    'alter_hover2'     => '#F9964F',//+
                    'alter_link3'      => '#FAF4F0',//+
                    'alter_hover3'     => '#302825',//+

                    // Extra blocks (submenu, tabs, color blocks, etc.)
                    'extra_bg_color'   => '#302825', //+
                    'extra_bg_hover'   => '#4A3D38', //+
                    'extra_bd_color'   => '#EBE5E0', //+
                    'extra_bd_hover'   => '#ffffff',//+
                    'extra_text'       => '#ffffff', //+
                    'extra_light'      => '#FFFFFF',//+
                    'extra_dark'       => '#ffffff', //+
                    'extra_link'       => '#ffffff', //+
                    'extra_hover'      => '#F9964F', //+
                    'extra_link2'      => '#F9964F',//+
                    'extra_hover2'     => '#ffffff',//
                    'extra_link3'      => '#ffffff',//+
                    'extra_hover3'     => '#ffffff',//+

                    // Input fields (form's fields and textarea)
                    'input_bg_color'   => '#ffffff', //+
                    'input_bg_hover'   => '#ffffff', //+
                    'input_bd_color'   => '#EBE5E0', //+
                    'input_bd_hover'   => '#606060', //+
                    'input_text'       => '#757575', //+
                    'input_light'      => '#757575', //+
                    'input_dark'       => '#302825', //+

                    // Inverse blocks (text and links on the 'text_link' background)
                    'inverse_bd_color' => '#ffffff',//+
                    'inverse_bd_hover' => '#FCF0E7',//+
                    'inverse_text'     => '#FFFFFF',//+
                    'inverse_light'    => '#FFFFFF',//+
                    'inverse_dark'     => '#FFFFFF', //+
                    'inverse_link'     => '#ffffff', //+
                    'inverse_hover'    => '#302825', //+
                ),
            ),

            // Color scheme: 'dark'
            'dark'    => array(
                'title'    => esc_html__( 'Dark', 'blabber' ),
                'internal' => true,
                'colors'   => array(

                    // Whole block border and background
                    'bg_color'         => '#302825', //+
                    'bd_color'         => '#4A3D38', //+

                    // Text and links colors
                    'text'             => '#FFFFFF', //+
                    'text_light'       => '#A49A97', //+
                    'text_dark'        => '#ffffff', //+
                    'text_link'        => '#F9964F', //+
                    'text_hover'       => '#0074CC', //+
                    'text_link2'       => '#ffffff',//+
                    'text_hover2'      => '#ffffff',
                    'text_link3'       => '#ffffff',//+
                    'text_hover3'      => '#eec432',

                    // Alternative blocks (sidebar, tabs, alternative blocks, etc.)
                    'alter_bg_color'   => '#241F1D', //+
                    'alter_bg_hover'   => '#FCF0E7',//+
                    'alter_bd_color'   => '#4A3D38', //+
                    'alter_bd_hover'   => '#522929', //+
                    'alter_text'       => '#FFFFFF', //+
                    'alter_light'      => '#A49A97', //+
                    'alter_dark'       => '#ffffff', //+
                    'alter_link'       => '#F9964F', //+
                    'alter_hover'      => '#0074CC', //+
                    'alter_link2'      => '#302825',//+
                    'alter_hover2'     => '#ffffff',//+
                    'alter_link3'      => '#FAF4F0',//+
                    'alter_hover3'     => '#0074CC',//+

                    // Extra blocks (submenu, tabs, color blocks, etc.)
                    'extra_bg_color'   => '#ffffff', //+
                    'extra_bg_hover'   => '#EBE5E0', //+
                    'extra_bd_color'   => '#4A3D38', //+
                    'extra_bd_hover'   => '#4a4a4a',
                    'extra_text'       => '#161616', //
                    'extra_light'      => '#606060',//
                    'extra_dark'       => '#757575', //+
                    'extra_link'       => '#FFFFFF', //+
                    'extra_hover'      => '#F9964F', //+
                    'extra_link2'      => '#AA8B7F',//+
                    'extra_hover2'     => '#ffffff',
                    'extra_link3'      => '#ddb837',
                    'extra_hover3'     => '#eec432',

                    // Input fields (form's fields and textarea)
                    'input_bg_color'   => '#ffffff', //+
                    'input_bg_hover'   => '#ffffff', //+
                    'input_bd_color'   => '#EBE5E0', //+
                    'input_bd_hover'   => '#EBEBEB', //
                    'input_text'       => '#8B8B8B', //
                    'input_light'      => '#7B7B7B', //
                    'input_dark'       => '#ffffff', //+

                    // Inverse blocks (text and links on the 'text_link' background)
                    'inverse_bd_color' => '#FFFFFF',//+
                    'inverse_bd_hover' => '#302825',//
                    'inverse_text'     => '#9A9A9A',//+
                    'inverse_light'    => '#6f6f6f',
                    'inverse_dark'     => '#ffffff', //+
                    'inverse_link'     => '#FFFFFF', //+
                    'inverse_hover'    => '#302825', //+
                ),
            ),
        );
        blabber_storage_set( 'schemes', $schemes );
        blabber_storage_set( 'schemes_original', $schemes );

        // Additional colors for each scheme
        // Parameters:	'color' - name of the color from the scheme that should be used as source for the transformation
        //				'alpha' - to make color transparent (0.0 - 1.0)
        //				'hue', 'saturation', 'brightness' - inc/dec value for each color's component
        blabber_storage_set(
            'scheme_colors_add', array(
                'bg_color_0'        => array(
                    'color' => 'bg_color',
                    'alpha' => 0,
                ),
                'bg_color_02'       => array(
                    'color' => 'bg_color',
                    'alpha' => 0.2,
                ),
                'bg_color_07'       => array(
                    'color' => 'bg_color',
                    'alpha' => 0.7,
                ),
                'bg_color_08'       => array(
                    'color' => 'bg_color',
                    'alpha' => 0.8,
                ),
                'bg_color_09'       => array(
                    'color' => 'bg_color',
                    'alpha' => 0.9,
                ),
                'text_dark_03' => array(
                    'color' => 'text_dark',
                    'alpha' => 0.3,
                ),
                'alter_bg_color_07' => array(
                    'color' => 'alter_bg_color',
                    'alpha' => 0.7,
                ),
                'alter_bg_color_04' => array(
                    'color' => 'alter_bg_color',
                    'alpha' => 0.4,
                ),
                'alter_bg_color_00' => array(
                    'color' => 'alter_bg_color',
                    'alpha' => 0,
                ),
                'alter_bg_color_02' => array(
                    'color' => 'alter_bg_color',
                    'alpha' => 0.2,
                ),
                'alter_bd_color_02' => array(
                    'color' => 'alter_bd_color',
                    'alpha' => 0.2,
                ),
                'alter_link_02'     => array(
                    'color' => 'alter_link',
                    'alpha' => 0.2,
                ),
                'alter_link_07'     => array(
                    'color' => 'alter_link',
                    'alpha' => 0.7,
                ),
                'extra_bg_color_03' => array(
                    'color' => 'extra_bg_color',
                    'alpha' => 0.3,
                ),
                'extra_bg_color_05' => array(
                    'color' => 'extra_bg_color',
                    'alpha' => 0.5,
                ),
                'extra_bg_color_07' => array(
                    'color' => 'extra_bg_color',
                    'alpha' => 0.7,
                ),
                'extra_bg_hover_07' => array(
                    'color' => 'extra_bg_hover',
                    'alpha' => 0.7,
                ),
                'extra_link_02'     => array(
                    'color' => 'extra_link',
                    'alpha' => 0.2,
                ),
                'extra_link_07'     => array(
                    'color' => 'extra_link',
                    'alpha' => 0.7,
                ),
                'text_dark_07'      => array(
                    'color' => 'text_dark',
                    'alpha' => 0.7,
                ),
                'text_link_02'      => array(
                    'color' => 'text_link',
                    'alpha' => 0.2,
                ),
                'text_link_07'      => array(
                    'color' => 'text_link',
                    'alpha' => 0.7,
                ),
                'text_light_03'      => array(
                    'color' => 'text_light',
                    'alpha' => 0.3,
                ),
                'text_light_07'      => array(
                    'color' => 'text_light',
                    'alpha' => 0.7,
                ),
                'text_link_blend'   => array(
                    'color'      => 'text_link',
                    'hue'        => 2,
                    'saturation' => -5,
                    'brightness' => 5,
                ),
                'alter_link_blend'  => array(
                    'color'      => 'alter_link',
                    'hue'        => 2,
                    'saturation' => -5,
                    'brightness' => 5,
                ),
                'inverse_link_02' => array(
                    'color' => 'inverse_link',
                    'alpha' => 0.2,
                ),
                'inverse_hover_05' => array(
                    'color' => 'inverse_hover',
                    'alpha' => 0.5,
                ),
            )
        );

    }
}

// Filter to add in the required plugins list
if ( ! function_exists( 'blabber_skin_tgmpa_required_plugins' ) ) {
	add_filter( 'blabber_filter_tgmpa_required_plugins', 'blabber_skin_tgmpa_required_plugins' );
	function blabber_skin_tgmpa_required_plugins( $list = array() ) {
		// ToDo: Check if plugin is in the 'required_plugins' and add his parameters to the TGMPA-list
		//       Replace 'skin-specific-plugin-slug' to the real slug of the plugin
		if ( blabber_storage_isset( 'required_plugins', 'skin-specific-plugin-slug' ) ) {
			$list[] = array(
				'name'     => blabber_storage_get_array( 'required_plugins', 'skin-specific-plugin-slug', 'title' ),
				'slug'     => 'skin-specific-plugin-slug',
				'required' => false,
			);
		}
		return $list;
	}
}

// Enqueue skin-specific styles and scripts
// Priority 1150 - after plugins-specific (1100), but before child theme (1500)
if ( ! function_exists( 'blabber_skin_frontend_scripts' ) ) {
	add_action( 'wp_enqueue_scripts', 'blabber_skin_frontend_scripts', 1150 );
	function blabber_skin_frontend_scripts() {
		$blabber_url = blabber_get_file_url( BLABBER_SKIN_DIR . 'skin.css' );
		if ( '' != $blabber_url ) {
			wp_enqueue_style( 'blabber-skin-' . esc_attr( BLABBER_SKIN_NAME ), $blabber_url, array(), null );
		}
		if ( blabber_is_on( blabber_get_theme_option( 'debug_mode' ) ) ) {
			$blabber_url = blabber_get_file_url( BLABBER_SKIN_DIR . 'skin.js' );
			if ( '' != $blabber_url ) {
				wp_enqueue_script( 'blabber-skin-' . esc_attr( BLABBER_SKIN_NAME ), $blabber_url, array( 'jquery' ), null, true );
			}
		}
	}
}

// Enqueue skin-specific responsive styles
// Priority 2150 - after theme responsive 2000
if ( ! function_exists( 'blabber_skin_styles_responsive' ) ) {
	add_action( 'wp_enqueue_scripts', 'blabber_skin_styles_responsive', 2150 );
	function blabber_skin_styles_responsive() {
		$blabber_url = blabber_get_file_url( BLABBER_SKIN_DIR . 'skin-responsive.css' );
		if ( '' != $blabber_url ) {
			wp_enqueue_style( 'blabber-skin-' . esc_attr( BLABBER_SKIN_NAME ) . '-responsive', $blabber_url, array(), null );
		}
	}
}

// Merge custom scripts
if ( ! function_exists( 'blabber_skin_merge_scripts' ) ) {
	add_filter( 'blabber_filter_merge_scripts', 'blabber_skin_merge_scripts' );
	function blabber_skin_merge_scripts( $list ) {
		if ( blabber_get_file_dir( BLABBER_SKIN_DIR . 'skin.js' ) != '' ) {
			$list[] = BLABBER_SKIN_DIR . 'skin.js';
		}
		return $list;
	}
}

// Set theme specific importer options
if ( ! function_exists( 'blabber_skin_importer_set_options' ) ) {
	add_filter('trx_addons_filter_importer_options', 'blabber_skin_importer_set_options', 9);
	function blabber_skin_importer_set_options($options = array()) {
		if ( is_array( $options ) ) {
			$options['demo_type'] = 'food';
			$options['files']['food'] = $options['files']['default'];
			$options['files']['food']['title'] = esc_html__('Food Demo', 'blabber');
			$options['files']['food']['domain_dev'] = '';    // Developers domain
			$options['files']['food']['domain_demo'] = esc_url( blabber_get_protocol() . '://food.blabber.ancorathemes.com' );   // Demo-site domain
			unset($options['files']['default']);
		}
		return $options;
	}
}


if ( ! function_exists( 'blabber_trx_addons_theme_specific_setup1_skin' ) ) {
    add_action( 'after_setup_theme', 'blabber_trx_addons_theme_specific_setup1_skin', 1 );
    function blabber_trx_addons_theme_specific_setup1_skin() {
        if ( blabber_exists_trx_addons() ) {
            add_filter( 'trx_addons_sc_list', 'blabber_trx_addons_sc_list_skin' );
        }
    }
}

// Shortcodes
if ( ! function_exists( 'blabber_trx_addons_sc_list_skin' ) ) {
    function blabber_trx_addons_sc_list_skin( $list = array() ) {
        // To do: Add/Remove shortcodes into list

        $list['blogger']['templates']['default']['classic_meta_simple'] = array(
            'title' => __('Classic Grid (meta)', 'blabber'),
            'layout' => array(
                'featured' => array(
                ),
                'content' => array(
                    'meta_categories', 'title', 'excerpt', 'meta', 'readmore'
                )
            )
        );

        $list['blogger']['templates']['wide']['classic_meta_wide'] = array(
            'title' => __('Classic Grid (wide)', 'blabber'),
            'layout' => array(
                'featured' => array(
                ),
                'content' => array(
                    'meta_categories', 'title', 'excerpt', 'meta', 'readmore'
                )
            )
        );

        $list['blogger']['templates']['default']['classic_meta_simple_big'] = array(
            'title' => __('Classic Grid width Big Title (meta)', 'blabber'),
            'layout' => array(
                'featured' => array(
                ),
                'content' => array(
                    'meta_categories', 'title', 'excerpt', 'meta', 'readmore'
                )
            )
        );

        $list['blogger']['templates']['default']['over_centered_simple'] = array(
            'title' => __('Info over image (top)', 'blabber'),
            'layout' => array(
                'featured' => array(
                    'tl' => array(
                        'meta_categories', 'title', 'meta'
                    ),
                ),
            )
        );

        $list['blogger']['templates']['default']['over_centered_middle'] = array(
            'title' => __('Info over image (middle)', 'blabber'),
            'layout' => array(
                'featured' => array(
                    'mc' => array(
                        'meta_categories', 'title', 'meta'
                    ),
                ),
            )
        );

        return $list;
    }
}



// Return theme specific title layout for the slider
if ( ! function_exists( 'blabber_trx_addons_slider_title_skin' ) ) {
    add_filter( 'trx_addons_filter_slider_title', 'blabber_trx_addons_slider_title_skin', 10, 2 );
    function blabber_trx_addons_slider_title_skin( $title, $data ) {
        $title = '';
        if ( ! empty( $data['cats'] ) ) {
            $cats = str_replace(',', "", $data['cats']);
            $title .= sprintf( '<div class="slide_cats post_meta sc_blogger_item_meta post_meta_categories"><span class="post_meta_item post_categories">%s</span></div>', $cats );
        }
        if ( ! empty( $data['title'] ) ) {
            $title .= '<h3 class="slide_title">'
                . ( ! empty( $data['link'] ) ? '<a href="' . esc_url( $data['link'] ) . '">' : '' )
                . esc_html( $data['title'] )
                . ( ! empty( $data['link'] ) ? '</a>' : '' )
                . '</h3>';
        }
        if(!empty($data['id']) ){
            $title .= '<div class="post_meta">';
            // Author
            $author_id = $data['author_id'];
            if(!empty($author_id) && $author_id > 0 ){
                $author_name   = get_the_author_meta( 'display_name', $author_id );
                $title .= '<span class="post_meta_item post_author">'
                    . esc_html__('by ','blabber')
                    . '<span class="post_author_name">' . esc_html( $author_name ) . '</span>'
                    . '</span>';
            }
            // Date
            if (!empty($data['date'])) {
                $title .= '<span class="post_meta_item post_date">'.esc_html($data['date']).'</span>';
            }
            $title .= '</div>';
        }

        return $title;
    }
}


// Skin specific thumb sizes
if ( ! function_exists( 'blabber_filter_add_thumb_sizes_skin' ) ) {
    add_filter( 'blabber_filter_add_thumb_sizes', 'blabber_filter_add_thumb_sizes_skin' );
    function blabber_filter_add_thumb_sizes_skin(){
        $list = array(
            // Width of the image is equal to the content area width (without sidebar)
            // Height is fixed
            'blabber-thumb-huge'        => array(
                'size'  => array( 1410, 793, true ),
                'title' => esc_html__( 'Huge image', 'blabber' ),
                'subst' => 'trx_addons-thumb-huge',
            ),
            // Width of the image is equal to the content area width (with sidebar)
            // Height is fixed
            'blabber-thumb-big'         => array(
                'size'  => array( 1010, 569, true ),
                'title' => esc_html__( 'Large image', 'blabber' ),
                'subst' => 'trx_addons-thumb-big',
            ),

            // Width of the image is equal to the 1/3 of the content area width (without sidebar)
            // Height is fixed
            'blabber-thumb-med'         => array(
                'size'  => array( 540, 304, true ),
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
                'size'  => array( 1010, 0, false ),     // Only downscale, not crop
                'title' => esc_html__( 'Masonry Large (scaled)', 'blabber' ),
                'subst' => 'trx_addons-thumb-masonry-big',
            ),

            // Width of the image is equal to the 1/3 of the full content area width (without sidebar)
            // Height is proportional (only downscale, not crop)
            'blabber-thumb-masonry'     => array(
                'size'  => array( 470, 0, false ),     // Only downscale, not crop
                'title' => esc_html__( 'Masonry (scaled)', 'blabber' ),
                'subst' => 'trx_addons-thumb-masonry',
            ),

            'blabber-thumb-extra'     => array(
                'size'  => array( 644, 622, true ),
                'title' => esc_html__( 'Extra', 'blabber' ),
                'subst' => 'trx_addons-thumb-extra',
            ),

            'blabber-thumb-square'     => array(
                'size'  => array( 544, 522, true ),
                'title' => esc_html__( 'Square', 'blabber' ),
                'subst' => 'trx_addons-thumb-square',
            ),

            'blabber-thumb-box'     => array(
                'size'  => array( 450, 450, true ),
                'title' => esc_html__( 'Box', 'blabber' ),
                'subst' => 'trx_addons-thumb-box',
            ),

            'blabber-thumb-wide'     => array(
                'size'  => array( 690, 450, true ),
                'title' => esc_html__( 'Wide', 'blabber' ),
                'subst' => 'trx_addons-thumb-wide',
            ),
        );
        return $list;
    }
}
if ( ! function_exists( 'blabber_filter_related_thumb_size_skin' ) ) {
    add_filter( 'blabber_filter_related_thumb_size', 'blabber_filter_related_thumb_size_skin' );
    function blabber_filter_related_thumb_size_skin(){
        return blabber_get_thumb_size( (int) blabber_get_theme_option( 'related_posts' ) == 1 ? 'huge' : 'extra' );
    }
}

add_filter( 'trx_addons_filter_get_list_sc_image_ratio', 'trx_addons_filter_get_list_sc_image_ratio_skin' );
function trx_addons_filter_get_list_sc_image_ratio_skin( $attr ){
    $attr['4:12'] = esc_html__('4:12', 'blabber');
    return $attr;
}

if ( ! function_exists( 'blabber_trx_addons_default_components_skins' ) ) {
    add_filter('trx_addons_filter_load_options', 'blabber_trx_addons_default_components_skins', 20);
    function blabber_trx_addons_default_components_skins($components) {
        $components['components_components_extended-taxonomy'] = 1;
        return $components;
    }
}
if ( ! function_exists( 'blabber_trx_addons_default_components_skins2' ) ) {
    add_filter('trx_addons_filter_load_options', 'blabber_trx_addons_default_components_skins2', 20);
    function blabber_trx_addons_default_components_skins2($components) {
        $components['components_widgets_categories_list'] = 1;
        return $components;

    }
}

// API
add_filter('trx_addons_api_list',	'blabber_skin_trx_addons_api_list');

function blabber_skin_trx_addons_api_list( $list = array() ) {
    // To do: Enable/Disable Third-party plugins API via add/remove it in the list

    $list[ 'wp-recipe-maker' ] = array(
        'title' => __('WP Recipe Maker', 'blabber'),
    );

    return $list;
}


// Add WP Recipe Maker plugin
require_once BLABBER_THEME_DIR . BLABBER_SKIN_DIR . 'plugins/wp-recipe-maker/wp-recipe-maker.php';

// Add slin-specific colors and fonts to the custom CSS
require_once BLABBER_THEME_DIR . BLABBER_SKIN_DIR . 'skin-styles.php';
