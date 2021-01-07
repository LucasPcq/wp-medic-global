<?php
/* Gutenberg support functions
------------------------------------------------------------------------------- */

// Theme init priorities:
// 9 - register other filters (for installer, etc.)
if ( ! function_exists( 'blabber_gutenberg_theme_setup9' ) ) {
	add_action( 'after_setup_theme', 'blabber_gutenberg_theme_setup9', 9 );
	function blabber_gutenberg_theme_setup9() {

		// Add wide and full blocks support
		add_theme_support( 'align-wide' );

		// Add editor styles to backend
		add_theme_support( 'editor-styles' );
		if ( blabber_exists_gutenberg() ) {
			if ( ! blabber_get_theme_setting( 'gutenberg_add_context' ) ) {
				add_editor_style( blabber_get_file_url( 'plugins/gutenberg/gutenberg-preview.css' ) );
			}
		} else {
			add_editor_style( blabber_get_file_url( 'css/editor-style.css' ) );
		}

		// Uncomment next rows if you want to enable/disable some features
		//add_theme_support( 'wp-block-styles' );           // Add editor styles for blocks to the frontend
		//add_theme_support( 'disable-custom-colors' );     // Disable color picker with custom colors
		//add_theme_support( 'dark-editor-style' );         // Enable dark mode for editor (if theme use dark background)

		if ( blabber_exists_gutenberg() ) {
			add_action( 'wp_enqueue_scripts', 'blabber_gutenberg_frontend_scripts', 1100 );
			add_action( 'wp_enqueue_scripts', 'blabber_gutenberg_responsive_styles', 2000 );
			add_filter( 'blabber_filter_merge_styles', 'blabber_gutenberg_merge_styles' );
			add_filter( 'blabber_filter_merge_styles_responsive', 'blabber_gutenberg_merge_styles_responsive' );
		}
		add_action( 'enqueue_block_editor_assets', 'blabber_gutenberg_editor_scripts' );
		add_filter( 'blabber_filter_localize_script_admin',	'blabber_gutenberg_localize_script');
		add_action( 'after_setup_theme', 'blabber_gutenberg_add_editor_colors' );
		if ( is_admin() ) {
			add_filter( 'blabber_filter_tgmpa_required_plugins', 'blabber_gutenberg_tgmpa_required_plugins' );
			add_filter( 'blabber_filter_theme_plugins', 'blabber_gutenberg_theme_plugins' );
		}
	}
}

// Filter to add in the required plugins list
if ( ! function_exists( 'blabber_gutenberg_tgmpa_required_plugins' ) ) {
	//Handler of the add_filter('blabber_filter_tgmpa_required_plugins',	'blabber_gutenberg_tgmpa_required_plugins');
	function blabber_gutenberg_tgmpa_required_plugins( $list = array() ) {
		if ( blabber_storage_isset( 'required_plugins', 'gutenberg' ) ) {
			if ( blabber_storage_get_array( 'required_plugins', 'gutenberg', 'install' ) !== false && version_compare( get_bloginfo( 'version' ), '5.0', '<' ) ) {
				$list[] = array(
					'name'     => blabber_storage_get_array( 'required_plugins', 'gutenberg', 'title' ),
					'slug'     => 'gutenberg',
					'required' => false,
				);
			}
			if(false) {
                if (version_compare(get_bloginfo('version'), '5.0', '>=') || blabber_exists_gutenberg()) {
                    $list[] = array(
                        'name' => esc_html__('Gutenberg Addons: CoBlocks', 'blabber'),
                        'slug' => 'coblocks',
                        'required' => false,
                    );
                    $list[] = array(
                        'name' => esc_html__('Gutenberg Addons: Kadence Blocks', 'blabber'),
                        'slug' => 'kadence-blocks',
                        'required' => false,
                    );
                }

            }
		}
		return $list;
	}
}

// Filter theme-supported plugins list
if ( ! function_exists( 'blabber_gutenberg_theme_plugins' ) ) {
	//Handler of the add_filter( 'blabber_filter_theme_plugins', 'blabber_gutenberg_theme_plugins' );
	function blabber_gutenberg_theme_plugins( $list = array() ) {
		$group = ! empty( $list['gutenberg']['group'] )
					? $list['gutenberg']['group']
					: blabber_storage_get_array( 'required_plugins', 'gutenberg', 'group' ); 
		foreach ( $list as $k => $v ) {
			if ( in_array( $k, array( 'coblocks', 'kadence-blocks' ) ) ) {
				if ( empty( $v['group'] ) ) {
					$list[ $k ]['group'] = $group;
				}
				if ( empty( $list[ $k ]['logo'] ) ) {
					$list[ $k ]['logo'] = blabber_get_file_url( "plugins/gutenberg/logo-{$k}.png" );
				}
			}
		}
		return $list;
	}
}


// Check if Gutenberg is installed and activated
if ( ! function_exists( 'blabber_exists_gutenberg' ) ) {
	function blabber_exists_gutenberg() {
		return function_exists( 'register_block_type' );	// && function_exists( 'the_gutenberg_project' )
	}
}

// Return true if Gutenberg exists and current mode is preview
if ( ! function_exists( 'blabber_gutenberg_is_preview' ) ) {
	function blabber_gutenberg_is_preview() {
		return blabber_exists_gutenberg() 
				&& (
					blabber_gutenberg_is_block_render_action()
					||
					blabber_is_post_edit()
					);
	}
}

// Return true if current mode is "Block render"
if ( ! function_exists( 'blabber_gutenberg_is_block_render_action' ) ) {
	function blabber_gutenberg_is_block_render_action() {
		return blabber_exists_gutenberg() 
				&& blabber_check_url( 'block-renderer' ) && ! empty( $_GET['context'] ) && 'edit' == $_GET['context'];
	}
}

// Return true if content built with "Gutenberg"
if ( ! function_exists( 'blabber_gutenberg_is_content_built' ) ) {
	function blabber_gutenberg_is_content_built($content) {
		return blabber_exists_gutenberg() 
				&& has_blocks( $content );	// This condition is equval to: strpos($content, '<!-- wp:') !== false;
	}
}

// Enqueue styles for frontend
if ( ! function_exists( 'blabber_gutenberg_frontend_scripts' ) ) {
	//Handler of the add_action( 'wp_enqueue_scripts', 'blabber_gutenberg_frontend_scripts', 1100 );
	function blabber_gutenberg_frontend_scripts() {
		if ( blabber_is_on( blabber_get_theme_option( 'debug_mode' ) ) ) {
			$blabber_url = blabber_get_file_url( 'plugins/gutenberg/gutenberg.css' );
			if ( '' != $blabber_url ) {
				wp_enqueue_style( 'blabber-gutenberg', $blabber_url, array(), null );
			}
		}
	}
}

// Enqueue responsive styles for frontend
if ( ! function_exists( 'blabber_gutenberg_responsive_styles' ) ) {
	//Handler of the add_action( 'wp_enqueue_scripts', 'blabber_gutenberg_responsive_styles', 2000 );
	function blabber_gutenberg_responsive_styles() {
		if ( blabber_is_on( blabber_get_theme_option( 'debug_mode' ) ) ) {
			$blabber_url = blabber_get_file_url( 'plugins/gutenberg/gutenberg-responsive.css' );
			if ( '' != $blabber_url ) {
				wp_enqueue_style( 'blabber-gutenberg-responsive', $blabber_url, array(), null );
			}
		}
	}
}

// Merge custom styles
if ( ! function_exists( 'blabber_gutenberg_merge_styles' ) ) {
	//Handler of the add_filter('blabber_filter_merge_styles', 'blabber_gutenberg_merge_styles');
	function blabber_gutenberg_merge_styles( $list ) {
		$list[] = 'plugins/gutenberg/gutenberg.css';
		return $list;
	}
}

// Merge responsive styles
if ( ! function_exists( 'blabber_gutenberg_merge_styles_responsive' ) ) {
	//Handler of the add_filter('blabber_filter_merge_styles_responsive', 'blabber_gutenberg_merge_styles_responsive');
	function blabber_gutenberg_merge_styles_responsive( $list ) {
		$list[] = 'plugins/gutenberg/gutenberg-responsive.css';
		return $list;
	}
}


// Load required styles and scripts for Gutenberg Editor mode
if ( ! function_exists( 'blabber_gutenberg_editor_scripts' ) ) {
	//Handler of the add_action( 'enqueue_block_editor_assets', 'blabber_gutenberg_editor_scripts');
	function blabber_gutenberg_editor_scripts() {
		blabber_admin_scripts(true);
		blabber_admin_localize_scripts();
		// Editor styles
		wp_enqueue_style( 'blabber-gutenberg-editor', blabber_get_file_url( 'plugins/gutenberg/gutenberg-editor.css' ), array(), null );
		if ( blabber_get_theme_setting( 'gutenberg_add_context' ) ) {
			wp_enqueue_style( 'blabber-gutenberg-preview', blabber_get_file_url( 'plugins/gutenberg/gutenberg-preview.css' ), array(), null );
		}
		// Editor scripts
		wp_enqueue_script( 'blabber-gutenberg-preview', blabber_get_file_url( 'plugins/gutenberg/gutenberg-preview.js' ), array( 'jquery' ), null, true );
	}
}

// Add plugin's specific variables to the scripts
if ( ! function_exists( 'blabber_gutenberg_localize_script' ) ) {
	//Handler of the add_filter( 'blabber_filter_localize_script_admin',	'blabber_gutenberg_localize_script');
	function blabber_gutenberg_localize_script( $arr ) {
		// Color scheme
		$arr['color_scheme'] = blabber_get_theme_option( 'color_scheme' );
		// Sidebar position on the single posts
		$arr['sidebar_position'] = 'inherit';
		$arr['expand_content'] = 'inherit';
		$post_type = 'post';
		if ( blabber_gutenberg_is_preview() && ! empty( $_GET['post'] ) ) {
			$post_type = blabber_get_edited_post_type();
			$meta = get_post_meta( $_GET['post'], 'blabber_options', true );
			if ( 'page' != $post_type && ! empty( $meta['sidebar_position_single'] ) ) {
				$arr['sidebar_position'] = $meta['sidebar_position_single'];
			} elseif ( 'page' == $post_type && ! empty( $meta['sidebar_position'] ) ) {
				$arr['sidebar_position'] = $meta['sidebar_position'];
			}
			if ( isset( $meta['expand_content'] ) ) {
				$arr['expand_content'] = $meta['expand_content'];
			}
		}
		if ( 'inherit' == $arr['sidebar_position'] ) {
			if ( 'page' != $post_type ) {
				$arr['sidebar_position'] = blabber_get_theme_option( 'sidebar_position_single' );
				if ( 'inherit' == $arr['sidebar_position'] ) {
					$arr['sidebar_position'] = blabber_get_theme_option( 'sidebar_position_blog' );
				}
			}
			if ( 'inherit' == $arr['sidebar_position'] ) {
				$arr['sidebar_position'] = blabber_get_theme_option( 'sidebar_position' );
			}
		}
		if ( 'inherit' == $arr['expand_content'] ) {
			$arr['expand_content'] = blabber_get_theme_option( 'expand_content_single' );
			if ( 'inherit' == $arr['expand_content'] && 'post' == $post_type ) {
				$arr['expand_content'] = blabber_get_theme_option( 'expand_content_blog' );
			}
			if ( 'inherit' == $arr['expand_content'] ) {
				$arr['expand_content'] = blabber_get_theme_option( 'expand_content' );
			}
		}
		$arr['expand_content'] = (int) $arr['expand_content'];
		return $arr;
	}
}

// Save CSS with custom colors and fonts to the gutenberg-editor-style.css
if ( ! function_exists( 'blabber_gutenberg_save_css' ) ) {
	add_action( 'blabber_action_save_options', 'blabber_gutenberg_save_css', 30 );
	add_action( 'trx_addons_action_save_options', 'blabber_gutenberg_save_css', 30 );
	function blabber_gutenberg_save_css() {

		$msg = '/* ' . esc_html__( "ATTENTION! This file was generated automatically! Don't change it!!!", 'blabber' )
				. "\n----------------------------------------------------------------------- */\n";

		// Get main styles
		$css = blabber_fgc( blabber_get_file_dir( 'style.css' ) );

		// Append supported plugins styles
		$css .= blabber_fgc( blabber_get_file_dir( 'css/__plugins.css' ) );

		// Append theme-vars styles
		$css .= blabber_customizer_get_css(
			array(
				'colors' => blabber_get_theme_setting( 'separate_schemes' ) ? false : null,
			)
		);
		
		// Append color schemes
		if ( blabber_get_theme_setting( 'separate_schemes' ) ) {
			$schemes = blabber_get_sorted_schemes();
			if ( is_array( $schemes ) ) {
				foreach ( $schemes as $scheme => $data ) {
					$css .= blabber_customizer_get_css(
						array(
							'fonts'  => false,
							'colors' => $data['colors'],
							'scheme' => $scheme,
						)
					);
				}
			}
		}

		// Append responsive styles
		$css .= blabber_fgc( blabber_get_file_dir( 'css/__responsive.css' ) );

		// Add context class to each selector
		if ( blabber_get_theme_setting( 'gutenberg_add_context' ) && function_exists( 'trx_addons_css_add_context' ) ) {
			$css = trx_addons_css_add_context(
						$css,
						array(
							'context' => '.edit-post-visual-editor ',
							'context_self' => array( 'html', 'body', '.edit-post-visual-editor' )
							)
					);
		} else {
			$css = apply_filters( 'blabber_filter_prepare_css', $css );
		}

		// Save styles to the file
		blabber_fpc( blabber_get_file_dir( 'plugins/gutenberg/gutenberg-preview.css' ), $msg . $css );
	}
}


// Add theme-specific colors to the Gutenberg color picker
if ( ! function_exists( 'blabber_gutenberg_add_editor_colors' ) ) {
	//Hamdler of the add_action( 'after_setup_theme', 'blabber_gutenberg_add_editor_colors' );
	function blabber_gutenberg_add_editor_colors() {
		$scheme = blabber_get_scheme_colors();
		$groups = blabber_storage_get( 'scheme_color_groups' );
		$names  = blabber_storage_get( 'scheme_color_names' );
		$colors = array();
		foreach( $groups as $g => $group ) {
			foreach( $names as $n => $name ) {
				$c = 'main' == $g ? ( 'text' == $n ? 'text_color' : $n ) : $g . '_' . str_replace( 'text_', '', $n );
				if ( isset( $scheme[ $c ] ) ) {
					$colors[] = array(
						'name'  => ( 'main' == $g ? '' : $group['title'] . ' ' ) . $name['title'],
						'slug'  => $c,
						'color' => $scheme[ $c ]
					);
				}
			}
			// Add only one group of colors
			// Delete next condition (or add false && to them) to add all groups
			if ( 'main' == $g ) {
				break;
			}
		}
		add_theme_support( 'editor-color-palette', $colors );
	}
}

// Add plugin-specific colors and fonts to the custom CSS
if ( blabber_exists_gutenberg() ) {
	require_once BLABBER_THEME_DIR . 'plugins/gutenberg/gutenberg-styles.php';
}
