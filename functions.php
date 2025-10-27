<?php
// Enqueue styles and scripts

function greentech_enqueue_assets()
{
    // CSS
    wp_enqueue_style('greentech-main', get_stylesheet_uri());

    // JS
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'greentech_enqueue_assets');

// Register menu
function greentech_register_menus()
{
    register_nav_menu('header-menu', __('Header Menu', 'greentech'));
}
add_action('init', 'greentech_register_menus');

// Post thumbnails
add_theme_support('post-thumbnails');
