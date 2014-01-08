<?php

add_action( 'wp_enqueue_scripts', 'faif_load_styles' );

// Load FontAwesome stylsheets
function faif_load_styles() {
	wp_enqueue_style( 'faif-fontawesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css', array(), '4.0.3' );
}
