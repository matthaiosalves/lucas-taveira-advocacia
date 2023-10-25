<?php

/**
 * Lucas Taveira functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Lucas_Taveira
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

function lucas_taveira_scripts()
{
	wp_enqueue_style('lucas-taveira-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_enqueue_script('lucas-taveira-script', get_template_directory_uri() . '/js/script.js', array(), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'lucas_taveira_scripts');

// require get_template_directory() . '';
