<?php
/*
Plugin Name: Custom Display Maps
*/

function list_all_markers(){
    global $wpdb;

    $tableMarkers = $wpdb->prefix.'gmp_markers';
    $tableMarkersGroups = $wpdb->prefix.'gmp_marker_groups';

    $query = "SELECT {$tableMarkers}.id as idMarker,
                    {$tableMarkers}.title as titleMarker,
                    {$tableMarkers}.description,
                    {$tableMarkers}.address,
                    {$tableMarkers}.marker_group_id,
                    {$tableMarkersGroups}.id as idGroup,
                    {$tableMarkersGroups}.title as titleGroup
              FROM {$tableMarkers}
              INNER JOIN {$tableMarkersGroups} ON {$tableMarkersGroups}.id = {$tableMarkers}.marker_group_id 
              ";

    $results = $wpdb->get_results($query);

    for($i = 0; $i < count($results); $i++){
        var_dump($results[$i]->titleMarker);
    }
}

add_shortcode('output_markers', 'list_all_markers');