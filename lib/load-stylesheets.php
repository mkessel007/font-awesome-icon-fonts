<?php

add_action( 'wp_enqueue_scripts', 'faif_load_styles' );

// Load FontAwesome stylsheets
function faif_load_styles() {
	wp_enqueue_style( 'faif-fontawesome', '//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css', array(), '3.1.1' );
	wp_enqueue_style( 'faif-fontawesome-ie7', '//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome-ie7.min.css', array(), '3.1.1' );
	global $wp_styles;
	$wp_styles->add_data( 'faif-fontawesome-ie7', 'conditional', 'IE 7' );
}
