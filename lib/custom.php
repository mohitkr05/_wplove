<?php

//Initialize breadcrumbs

function start_frontend_init() {
add_action( 'init', 'initialize_start_front' );
$options = WPSEO_Options::get_all();

/**
* If breadcrumbs are active (which they supposedly are if the users has enabled this settings,
* there's no reason to have bbPress breadcrumbs as well.
*
* @internal The class itself is only loaded when the template tag is encountered via
* the template tag function in the start-functions.php file
*/
add_filter( 'bbp_get_breadcrumb', '__return_false' );

add_action( 'template_redirect', 'start_frontend_head_init', 999 );
}

?>