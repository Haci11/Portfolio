<?php
/**
 * @package WordPress
 * @subpackage Portfolio
 * @since Portfolio 1.0
 */

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();	
}

function wp_nav_menu_no_ul()
{
    $options = array(
        'echo' => false,
        'container' => false,
        'theme_location' => 'primary',
        'fallback_cb'=> 'default_page_menu'
    );

    $menu = wp_nav_menu($options);
    echo preg_replace(array(
        '#^<ul[^>]*>#',
        '#</ul>$#'
    ), '', $menu);

}

function default_page_menu() {
   wp_list_pages('title_li=');
} 

wp_enqueue_style("style", get_stylesheet_directory_uri() . "/style.css");
wp_enqueue_style("portfolio", get_stylesheet_directory_uri() . "/assets/css/portfolio.css");
wp_enqueue_style("front", get_stylesheet_directory_uri() . "/assets/css/front.css");


add_theme_support("post-thumbnails");
