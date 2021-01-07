<?php

if ( ! function_exists( 'overton_mikado_loading_spinners' ) ) {
	function overton_mikado_loading_spinners() {
		$id           = overton_mikado_get_page_id();
		$spinner_type = overton_mikado_get_meta_field_intersect( 'smooth_pt_spinner_type', $id );
		
		$spinner_html = '';
		if ( ! empty( $spinner_type ) ) {
			switch ( $spinner_type ) {
				case 'overton_spinner':
					$spinner_html = overton_mikado_loading_spinner_overton();
					break;
				case 'rotate_circles':
					$spinner_html = overton_mikado_loading_spinner_rotate_circles();
					break;
				case 'pulse':
					$spinner_html = overton_mikado_loading_spinner_pulse();
					break;
				case 'double_pulse':
					$spinner_html = overton_mikado_loading_spinner_double_pulse();
					break;
				case 'cube':
					$spinner_html = overton_mikado_loading_spinner_cube();
					break;
				case 'rotating_cubes':
					$spinner_html = overton_mikado_loading_spinner_rotating_cubes();
					break;
				case 'stripes':
					$spinner_html = overton_mikado_loading_spinner_stripes();
					break;
				case 'wave':
					$spinner_html = overton_mikado_loading_spinner_wave();
					break;
				case 'two_rotating_circles':
					$spinner_html = overton_mikado_loading_spinner_two_rotating_circles();
					break;
				case 'five_rotating_circles':
					$spinner_html = overton_mikado_loading_spinner_five_rotating_circles();
					break;
				case 'atom':
					$spinner_html = overton_mikado_loading_spinner_atom();
					break;
				case 'clock':
					$spinner_html = overton_mikado_loading_spinner_clock();
					break;
				case 'mitosis':
					$spinner_html = overton_mikado_loading_spinner_mitosis();
					break;
				case 'lines':
					$spinner_html = overton_mikado_loading_spinner_lines();
					break;
				case 'fussion':
					$spinner_html = overton_mikado_loading_spinner_fussion();
					break;
				case 'wave_circles':
					$spinner_html = overton_mikado_loading_spinner_wave_circles();
					break;
				case 'pulse_circles':
					$spinner_html = overton_mikado_loading_spinner_pulse_circles();
					break;
				default:
					$spinner_html = overton_mikado_loading_spinner_pulse();
			}
		}
		
		echo wp_kses( $spinner_html, array(
			'div' => array(
				'class' => true,
				'style' => true,
				'id'    => true
			),
			'svg' => array(
				'class'                 => true,
                'version'               => true,
                'x'                     => true,
                'y'                     => true,
                'width'                 => true,
                'height'                => true,
                'viewBox'               => true,
                'enable-background'     => true,
            ),
            'ellipse' => array(
                'cx'                    => true,
				'cy'                    => true,
				'rx'                    => true,
                'ry'                    => true,
                'fill'                  => true,
                'stroke'                => true,
                'stroke-width'          => true,
                'stroke-miterlimit'     => true
			),
			'rect' => array(
				'x'                     => true,
				'y'                     => true,
                'width'                 => true,
				'height'                => true,
				'fill'                  => true
            )
		) );
	}
}

if ( ! function_exists( 'overton_mikado_loading_spinner_overton' ) ) {
	function overton_mikado_loading_spinner_overton() {
		$html = '';
		$html .= '<div class="mkdf-overton-spinner-holder">';
		$html .= '<svg class="mkdf-overton-spinner" version="1.1" x="0px" y="0px"
				width="854px" height="600px" viewBox="0 0 854 600" enable-background="new 0 0 854 600">
				<ellipse fill="none" stroke="#FFFFFF" stroke-width="75" stroke-miterlimit="10" cx="427.338" cy="300.5" rx="227.162" ry="234.877"/>
				<rect x="15.844" y="263.01" fill="#FFFFFF" width="823.018" height="74.958"/>
				</svg>';
		$html .= '</div>';
		
		return $html;
	}
}

if ( ! function_exists( 'overton_mikado_loading_spinner_rotate_circles' ) ) {
	function overton_mikado_loading_spinner_rotate_circles() {
		$html = '';
		$html .= '<div class="mkdf-rotate-circles">';
		$html .= '<div></div>';
		$html .= '<div></div>';
		$html .= '<div></div>';
		$html .= '</div>';
		
		return $html;
	}
}

if ( ! function_exists( 'overton_mikado_loading_spinner_pulse' ) ) {
	function overton_mikado_loading_spinner_pulse() {
		$html = '<div class="pulse"></div>';
		
		return $html;
	}
}

if ( ! function_exists( 'overton_mikado_loading_spinner_double_pulse' ) ) {
	function overton_mikado_loading_spinner_double_pulse() {
		$html = '';
		$html .= '<div class="double_pulse">';
		$html .= '<div class="double-bounce1"></div>';
		$html .= '<div class="double-bounce2"></div>';
		$html .= '</div>';
		
		return $html;
	}
}

if ( ! function_exists( 'overton_mikado_loading_spinner_cube' ) ) {
	function overton_mikado_loading_spinner_cube() {
		$html = '<div class="cube"></div>';
		
		return $html;
	}
}

if ( ! function_exists( 'overton_mikado_loading_spinner_rotating_cubes' ) ) {
	function overton_mikado_loading_spinner_rotating_cubes() {
		$html = '';
		$html .= '<div class="rotating_cubes">';
		$html .= '<div class="cube1"></div>';
		$html .= '<div class="cube2"></div>';
		$html .= '</div>';
		
		return $html;
	}
}

if ( ! function_exists( 'overton_mikado_loading_spinner_stripes' ) ) {
	function overton_mikado_loading_spinner_stripes() {
		$html = '';
		$html .= '<div class="stripes">';
		$html .= '<div class="rect1"></div>';
		$html .= '<div class="rect2"></div>';
		$html .= '<div class="rect3"></div>';
		$html .= '<div class="rect4"></div>';
		$html .= '<div class="rect5"></div>';
		$html .= '</div>';
		
		return $html;
	}
}

if ( ! function_exists( 'overton_mikado_loading_spinner_wave' ) ) {
	function overton_mikado_loading_spinner_wave() {
		$html = '';
		$html .= '<div class="wave">';
		$html .= '<div class="bounce1"></div>';
		$html .= '<div class="bounce2"></div>';
		$html .= '<div class="bounce3"></div>';
		$html .= '</div>';
		
		return $html;
	}
}

if ( ! function_exists( 'overton_mikado_loading_spinner_two_rotating_circles' ) ) {
	function overton_mikado_loading_spinner_two_rotating_circles() {
		$html = '';
		$html .= '<div class="two_rotating_circles">';
		$html .= '<div class="dot1"></div>';
		$html .= '<div class="dot2"></div>';
		$html .= '</div>';
		
		return $html;
	}
}

if ( ! function_exists( 'overton_mikado_loading_spinner_five_rotating_circles' ) ) {
	function overton_mikado_loading_spinner_five_rotating_circles() {
		$html = '';
		$html .= '<div class="five_rotating_circles">';
		$html .= '<div class="spinner-container container1">';
		$html .= '<div class="circle1"></div>';
		$html .= '<div class="circle2"></div>';
		$html .= '<div class="circle3"></div>';
		$html .= '<div class="circle4"></div>';
		$html .= '</div>';
		$html .= '<div class="spinner-container container2">';
		$html .= '<div class="circle1"></div>';
		$html .= '<div class="circle2"></div>';
		$html .= '<div class="circle3"></div>';
		$html .= '<div class="circle4"></div>';
		$html .= '</div>';
		$html .= '<div class="spinner-container container3">';
		$html .= '<div class="circle1"></div>';
		$html .= '<div class="circle2"></div>';
		$html .= '<div class="circle3"></div>';
		$html .= '<div class="circle4"></div>';
		$html .= '</div>';
		$html .= '</div>';
		
		return $html;
	}
}

if ( ! function_exists( 'overton_mikado_loading_spinner_atom' ) ) {
	function overton_mikado_loading_spinner_atom() {
		$html = '';
		$html .= '<div class="atom">';
		$html .= '<div class="ball ball-1"></div>';
		$html .= '<div class="ball ball-2"></div>';
		$html .= '<div class="ball ball-3"></div>';
		$html .= '<div class="ball ball-4"></div>';
		$html .= '</div>';
		
		return $html;
	}
}

if ( ! function_exists( 'overton_mikado_loading_spinner_clock' ) ) {
	function overton_mikado_loading_spinner_clock() {
		$html = '';
		$html .= '<div class="clock">';
		$html .= '<div class="ball ball-1"></div>';
		$html .= '<div class="ball ball-2"></div>';
		$html .= '<div class="ball ball-3"></div>';
		$html .= '<div class="ball ball-4"></div>';
		$html .= '</div>';
		
		return $html;
	}
}

if ( ! function_exists( 'overton_mikado_loading_spinner_mitosis' ) ) {
	function overton_mikado_loading_spinner_mitosis() {
		$html = '';
		$html .= '<div class="mitosis">';
		$html .= '<div class="ball ball-1"></div>';
		$html .= '<div class="ball ball-2"></div>';
		$html .= '<div class="ball ball-3"></div>';
		$html .= '<div class="ball ball-4"></div>';
		$html .= '</div>';
		
		return $html;
	}
}

if ( ! function_exists( 'overton_mikado_loading_spinner_lines' ) ) {
	function overton_mikado_loading_spinner_lines() {
		$html = '';
		$html .= '<div class="lines">';
		$html .= '<div class="line1"></div>';
		$html .= '<div class="line2"></div>';
		$html .= '<div class="line3"></div>';
		$html .= '<div class="line4"></div>';
		$html .= '</div>';
		
		return $html;
	}
}

if ( ! function_exists( 'overton_mikado_loading_spinner_fussion' ) ) {
	function overton_mikado_loading_spinner_fussion() {
		$html = '';
		$html .= '<div class="fussion">';
		$html .= '<div class="ball ball-1"></div>';
		$html .= '<div class="ball ball-2"></div>';
		$html .= '<div class="ball ball-3"></div>';
		$html .= '<div class="ball ball-4"></div>';
		$html .= '</div>';
		
		return $html;
	}
}

if ( ! function_exists( 'overton_mikado_loading_spinner_wave_circles' ) ) {
	function overton_mikado_loading_spinner_wave_circles() {
		$html = '';
		$html .= '<div class="wave_circles">';
		$html .= '<div class="ball ball-1"></div>';
		$html .= '<div class="ball ball-2"></div>';
		$html .= '<div class="ball ball-3"></div>';
		$html .= '<div class="ball ball-4"></div>';
		$html .= '</div>';
		
		return $html;
	}
}

if ( ! function_exists( 'overton_mikado_loading_spinner_pulse_circles' ) ) {
	function overton_mikado_loading_spinner_pulse_circles() {
		$html = '';
		$html .= '<div class="pulse_circles">';
		$html .= '<div class="ball ball-1"></div>';
		$html .= '<div class="ball ball-2"></div>';
		$html .= '<div class="ball ball-3"></div>';
		$html .= '<div class="ball ball-4"></div>';
		$html .= '</div>';
		
		return $html;
	}
}
