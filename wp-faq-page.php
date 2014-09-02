<?php
/*
Plugin Name: WP FAQ Page
Plugin URI: http://jmortensen.bluehoststaff.com
Description: This plugin uses jQuery to create a custom FAQ page that attempts to use your themes css.
Author URI: http://jmortensen.bluehoststaff.com
Author: voldemortensen
Version: 0.1
*/

if ( ! defined( 'WPINC' ) ) { die; }

define( 'WPFP_BASE_DIR', dirname( __FILE__ ) . "/" );
define( 'WPFP_BASE_URL', plugin_dir_url( __FILE__ ) );

require_once( WPFP_BASE_DIR . 'admin/menu.php' );
require_once( WPFP_BASE_DIR . 'admin/main.php' );
require_once( WPFP_BASE_DIR . 'inc/shortcodes.php' );
require_once( WPFP_BASE_DIR . 'inc/scripts.php' );
