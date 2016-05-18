<?php

/**
 * @subpackage Maps
 * @version 1.0.0
 * @package Boilerplate
 *
 * @NOTE Not tested with 1.5.6 yet but uses features
 * available from 1.5.6 onwards.
 */

plugin_requires_version( 'maps', '1.5.6' );

// Queue scripts + styles
add_script( 'maps-google-js', '//maps.google.com/maps/api/js' );
add_script( 'maps-js', '/map.js' );
add_stylesheet( 'maps-js', '/map.css' );

// Map functions
require_once __DIR__ . '/functions/map.php';
require_once __DIR__ . '/functions/defaults.php';

// Filter maps
set( 'site.maps', apply_filters( 'maps/config', get('site.maps') ) );

if ( is_path('map.js') || is_path('map.css') ) {

    // Set Headers
    if ( is_path('map.js') ) {
        header( 'Content-type: application/javascript' );
    } else {
        header( 'Content-type: text/css' );
    }

    // Set Theme
    use_theme( plugin_dir() . '/maps/ui' );

}
