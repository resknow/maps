<?php

add_filter( 'maps/config', function( $maps ) {

    // Check is array
    if ( !is_array($maps) ) {
        return $maps;
    }

    // Set defaults
    $defaults = array(
        'style' => array(
            'height' => '320px'
        ),
        'config' => array(
            'draggable' => false,
            'zoom' => 14,
            'scrollwheel' => false
        )
    );

    // Count maps
    $count = count($maps);

    // Apply defaults
    foreach ( $maps as $id => $map ) {
        $maps[$id] = array_merge($defaults, $map);
    }

    // Return maps
    return $maps;

} );
