<?php

/**
 * Get Map
 */
function get_map( $id, $output = true ) {

    // Get maps
    $maps = get('site.maps');

    // Check map exists
    if ( !$maps || !array_key_exists($id, $maps) ) {
        return false;
    }

    // Get Map
    $map = $maps[$id];

    // Create HTML
    $html = sprintf(
        '<div id="map-%1$s" class="google-map google-map-%1$s google-map-%2$s"></div>',
        $id,
        $map['type']
    );

    // Return HTML
    if ( $output === false ) {
        return $html;
    }

    echo $html;

}
