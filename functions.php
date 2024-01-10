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
	wp_enqueue_style('lucas-taveira-style', get_template_directory_uri() . '/style.css', array(), _S_VERSION);
	wp_enqueue_script('lucas-taveira-script', get_template_directory_uri() . '/js/script.js', array(), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'lucas_taveira_scripts');


add_filter('show_admin_bar', '__return_false');
add_filter('xmlrpc_enabled', '__return_false');

function redirecionar_para_home_on_404()
{
	if (is_404()) {
		wp_redirect(home_url());
		exit();
	}
}

add_action('template_redirect', 'redirecionar_para_home_on_404');

if (!function_exists('get_youtube_id')) :
	function get_youtube_id($url)
	{
		preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
		$youtube_id = $match[1];

		return $youtube_id;
	}
endif;

function redirecionar_para_pagina_inicial()
{
	if (!is_home() && !is_front_page()) {
		wp_redirect(home_url());
		exit;
	}
}

add_action('template_redirect', 'redirecionar_para_pagina_inicial');
