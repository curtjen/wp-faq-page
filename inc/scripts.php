<?php
function wpfp_scripts() {
	wp_enqueue_script( 'jquery-ui-accordion');
	wp_enqueue_script(
		'wpfp-accordion',
		WPFP_BASE_URL . '/js/accordion.js',
		array( 'jquery' )
	);
	wp_enqueue_style( 'wpfp-style', WPFP_BASE_URL . '/css/default.css' );
}

add_action( 'wp_enqueue_scripts', 'wpfp_scripts' );

