<?php

class OvertonMikadoClassLike {
	private static $instance;
	
	private function __construct() {
		add_action( 'wp_ajax_overton_mikado_like', array( $this, 'ajax' ) );
		add_action( 'wp_ajax_nopriv_overton_mikado_like', array( $this, 'ajax' ) );
	}
	
	public static function get_instance() {
		if ( null == self::$instance ) {
			self::$instance = new self;
		}
		
		return self::$instance;
	}
	
	function ajax() {
		
		//update
		if ( isset( $_POST['likes_id'] ) ) {
			$post_id = str_replace( 'mkdf-like-', '', $_POST['likes_id'] );
			$post_id = substr( $post_id, 0, - 4 );
			$type    = isset( $_POST['type'] ) ? $_POST['type'] : '';
			
			echo wp_kses( $this->like_post( $post_id, 'update', $type ), array(
				'span' => array(
					'class'       => true,
					'aria-hidden' => true,
					'style'       => true,
					'id'          => true
				),
				'i'    => array(
					'class' => true,
					'style' => true,
					'id'    => true
				)
			) );
		} //get
		else {
			$post_id = str_replace( 'mkdf-like-', '', $_POST['likes_id'] );
			$post_id = substr( $post_id, 0, - 4 );
			echo wp_kses( $this->like_post( $post_id, 'get' ), array(
				'span' => array(
					'class'       => true,
					'aria-hidden' => true,
					'style'       => true,
					'id'          => true
				),
				'i'    => array(
					'class' => true,
					'style' => true,
					'id'    => true
				)
			) );
		}
		
		exit;
	}
	
	public function like_post( $post_id, $action = 'get', $type = '' ) {
		if ( ! is_numeric( $post_id ) ) {
			return;
		}
		
		switch ( $action ) {
			
			case 'get':
				$like_count = get_post_meta( $post_id, '_mkdf-like', true );

				if ( ! $like_count ) {
					$like_count = 0;
					add_post_meta( $post_id, '_mkdf-like', $like_count, true );
				}
				if ($like_count === 0) {
					$count_text = ' likes';
				} elseif ($like_count == 1) {
					$count_text = ' like';
				} else {
					$count_text = ' likes';
				}
				$return_value = "<span>" . esc_attr( $like_count ) . "</span><span>" . wp_kses_post($count_text) . "</span>";
				
				return $return_value;
				break;
			
			case 'update':
				$like_count = get_post_meta( $post_id, '_mkdf-like', true );
				
				if ( isset( $_COOKIE[ 'mkdf-like_' . $post_id ] ) ) {
					return $like_count;
				}
				
				$like_count ++;
				
				update_post_meta( $post_id, '_mkdf-like', $like_count );
				setcookie( 'mkdf-like_' . $post_id, $post_id, time() * 20, '/' );

				if ($like_count === 0) {
					$count_text = ' likes';
				} elseif ($like_count == 1) {
					$count_text = ' like';
				} else {
					$count_text = ' likes';
				}

				$return_value = "<span>" . esc_attr( $like_count ) . "</span><span>" . wp_kses_post($count_text) . "</span>";
				
				return $return_value;
				
				break;
			default:
				return '';
				break;
		}
	}
	
	public function add_like() {
		global $post;
		
		$output = $this->like_post( $post->ID );
		
		$class       = 'mkdf-like';
		$rand_number = rand( 100, 999 );
		$title       = esc_html__( 'Like this', 'overton' );
		
		if ( isset( $_COOKIE[ 'mkdf-like_' . $post->ID ] ) ) {
			$class = 'mkdf-like liked';
			$title = esc_html__( 'You already like this!', 'overton' );
		}
		
		return '<a href="#" class="' . esc_attr( $class ) . '" id="mkdf-like-' . esc_attr( $post->ID ) . '-' . $rand_number . '" title="' . esc_attr( $title ) . '">' . $output . '</a>';
	}
}

if ( ! function_exists( 'overton_mikado_create_like' ) ) {
	function overton_mikado_create_like() {
		OvertonMikadoClassLike::get_instance();
	}
	
	add_action( 'after_setup_theme', 'overton_mikado_create_like' );
}