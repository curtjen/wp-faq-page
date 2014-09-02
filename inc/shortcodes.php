<?php

function wpfp_section( $atts, $content = null ) {
	return '<div id="wpfp-section">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'section', 'wpfp_section' );

function wpfp_subsection( $atts, $content = null ) {
	return '<div class="wpfp-subsection">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'subsection', 'wpfp_subsection' );

function wpfp_question( $atts, $content = null ) {
	return '<h3 class="question">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'question', 'wpfp_question' );

function wpfp_answer( $atts, $content = null ) {
	return '<div class="answer"><p>' . do_shortcode($content) . '</p></div>';
}
add_shortcode( 'answer', 'wpfp_answer' );
