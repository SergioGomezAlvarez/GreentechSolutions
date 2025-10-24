<?php
// Enqueue styles and scripts

function greentech_enqueue_assets()
{
    // CSS
    wp_enqueue_style('greentech-main', get_stylesheet_uri());

    // JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('greentech-browser', get_template_directory_uri() . '/assets/js/browser.min.js', [], null, true);
    wp_enqueue_script('greentech-breakpoints', get_template_directory_uri() . '/assets/js/breakpoints.min.js', [], null, true);
    wp_enqueue_script('greentech-util', get_template_directory_uri() . '/assets/js/util.js', [], null, true);
    wp_enqueue_script('greentech-main', get_template_directory_uri() . '/assets/js/main.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'greentech_enqueue_assets');

// Registreer menu
function greentech_register_menus()
{
    register_nav_menu('header-menu', __('Header Menu', 'greentech'));
}
add_action('init', 'greentech_register_menus');

// functions.php
add_theme_support('post-thumbnails');
