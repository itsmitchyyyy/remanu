<?php

require get_template_directory() . '/wp-boostrap-navwalker.php';

add_theme_support('menus');
add_post_type_support( 'page', 'excerpt' );

add_action('after_setup_theme', 'nav_setup');
if (!function_exists('nav_setup')) {
	function nav_setup() {
		register_nav_menus(
			array(
				'top-menu' => __('Top Menu', 'theme'),
				'footer-menu' => __('Footer Menu', 'theme'),
			)
		);
	}
}


add_action('after_setup_theme','carousel_default_functions');
if (!function_exists('carousel_default_functions')) {	
	function carousel_default_functions() {
		add_theme_support('post-thumbnails');

		register_post_type('carousel', array(
			'labels' => array(
				'name' => 'Carousel Option',
				'add_new_item' => 'Add New'),
			'public' => true,
			'menu_icon' => 'dashicons-art',
			'supports' => array('title', 'editor', 'thumbnail')
		));

		add_image_size('smallest', 300, 300, true);
		add_image_size('largest', 800, 800, true);
	}
}

function strip_gallery_from_content($content) {
	$the_content = preg_replace('/\[gallery.*ids=.(.*).\]/', "", $content);
	$the_content = apply_filters('the_content' , $the_content);
	$the_content = str_replace(']]>', ']]&gt;', $the_content);
	return $the_content;
}

function load_stylesheets() {

	wp_register_style('boostrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style('boostrap');
	wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
	wp_enqueue_style('style');
	wp_register_style('font-style', get_template_directory_uri() . '/font.css', array(), false, 'all');
	wp_enqueue_style('font-style');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function include_jquery() {
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3-3-1.js', '', 1, true);
	add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts', 'include_jquery');

function loadjs() {
	wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', '', 1, true);
	wp_enqueue_script('bootstrapjs');
	wp_register_script('lazyloadjs', get_template_directory_uri() . '/js/lazyload.js', '', 1, true);
	wp_enqueue_script('lazyloadjs');
	wp_register_script('customjs', get_template_directory_uri() . '/custom.js', '', 1, true);
	wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'loadjs');

function custom_theme_default_settings(){
	$wl_theme_options = array(
		'social_facebook' => 'fab fa-facebook-f',
		'social_envelope' => 'far fa-envelope',
		'social_twitter' => 'fab fa-twitter',
		'social_linkedin' => 'fab fa-linkedin',
		'social_youtube' => 'fab fa-youtube',
		'social_search' => 'fa fa-search',
		'social_instagram' => 'fab fa-instagram');

	return apply_filters('custom_theme_options', $wl_theme_options);
}

function custom_theme_get_options() {
	return wp_parse_args(
		get_option('custom_theme_options', array()),
		custom_theme_default_settings());
}

add_action('init', 'wp_add_page_cats');
function wp_add_page_cats(){
	register_taxonomy_for_object_type('post_tag', 'page');
	register_taxonomy_for_object_type('category', 'page');
}
