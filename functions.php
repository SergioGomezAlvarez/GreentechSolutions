<?php
/** 
 * Greentech Solutions functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * 
 * 
 * @package GreentechSolutions
 */
/* Register Navigation Menus */
function greentech_register_menus()
{
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'greentech'),
    ));
}
add_action('after_setup_theme', 'greentech_register_menus');

function greentech_enqueue_styles()
{
    wp_enqueue_style('greentech-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'greentech_enqueue_styles');
?>