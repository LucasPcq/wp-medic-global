<?php

if ( ! function_exists( 'overton_mikado_set_search_on_side_global_option' ) ) {
    /**
     * This function set search type value for search options map
     */
    function overton_mikado_set_search_on_side_global_option( $search_type_options ) {
        $search_type_options['on-side'] = esc_html__( 'On Side', 'overton' );

        return $search_type_options;
    }

    add_filter( 'overton_mikado_filter_search_type_global_option', 'overton_mikado_set_search_on_side_global_option' );
}