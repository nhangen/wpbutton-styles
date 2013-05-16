<?php

//error_reporting(E_ALL);
//@ini_set('display_errors', 1);

/*
Plugin Name: WordPress Button Classes
URI: https://github.com/nhangen/wordpress-buttons
Description: A simple WordPress plugin for bringing default admin button classes to the front end so that your buttons can stop looking ugly.
Version: 1.0
Author: Nathan Hangen
Author URI: http://NathanHangen.com
License: GPL2
*/

function wpb_include_css() {
	wp_register_style('wpb-css', plugins_url('/buttons.css', __FILE__));
	wp_enqueue_style('wpb-css');
}

add_action('wp_enqueue_scripts', 'wpb_include_css');
?>