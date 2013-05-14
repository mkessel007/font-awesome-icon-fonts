<?php

// setup shortcodes

add_filter( 'widget_text', 'do_shortcode' );

function faif_setup_shortcode( $atts ) {
	extract( shortcode_atts( array(
		'name' => 'icon-rocket',
		'size' => '',
		'pull' => '',
		'border' => '',
		'muted' => ''

	), $atts ));

	return '<i class="' . $name . ' ' . $size . ' ' . $pull . ' ' . $border . ' ' . $muted . '"></i>';
}

add_shortcode( 'icon', 'faif_setup_shortcode' );