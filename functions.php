<?php

require_once('wp_bootstrap_navwalker.php');

function ficus_theme_setup()
{
	add_theme_support('post-thumbnails');

    register_nav_menus(array(
		'primary'	=> __('Primary Menu')
	));
}

add_action('after_setup_theme', 'ficus_theme_setup');
add_theme_support( 'custom-logo', array(
	'height'      => 50,
	'width'       => 50,
	'flex-height' => true,
) );


function wpb_search_filter($query) {
	if ($query->is_search) {
	$query->set('post_type', 'post');
	}
	return $query;
	}
add_filter('pre_get_posts','wpb_search_filter');



require get_template_directory(). '/include/editor.php';