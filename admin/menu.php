<?php

function add_wpfp_menu() {
	add_menu_page( 'admin.php', 'WP FAQ Page', 'administrator', 'wp-faq-page', 'main_wpfp_page' ); 
}

add_action( 'admin_menu', 'add_wpfp_menu' );
