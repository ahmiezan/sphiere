<?php


// load css
function load_css()
{

		wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
		wp_enqueue_style('bootstrap');

		wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
		wp_enqueue_style('main');


}
add_action('wp_enqueue_scripts', 'load_css');


function include_jquery()
{
	wp_deregister_script('jquery');

	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', '',1,true);

	add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts', 'include_jquery');

//load js
function load_js()
{
		wp_enqueue_script('jquery');
		wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
		wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '',1,true);


		wp_enqueue_script('bootstrap');
		wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'load_js');

//theme option
add_theme_support('menus');


//menus
register_nav_menus(
		
		array(


				'top-menu' => 'Top Menu Location',
				'mobile-menu' => 'Mobile Menu Location',
				'footer-menu' => 'Footer Menu Location',
		)
);