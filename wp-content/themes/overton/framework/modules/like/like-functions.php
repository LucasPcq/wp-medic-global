<?php

if ( ! function_exists( 'overton_mikado_like' ) ) {
	/**
	 * Returns OvertonMikadoClassLike instance
	 *
	 * @return OvertonMikadoClassLike
	 */
	function overton_mikado_like() {
		return OvertonMikadoClassLike::get_instance();
	}
}

function overton_mikado_get_like() {
	
	echo wp_kses( overton_mikado_like()->add_like(), array(
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
		),
		'a'    => array(
			'href'  => true,
			'class' => true,
			'id'    => true,
			'title' => true,
			'style' => true
		)
	) );
}