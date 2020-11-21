<?php

function fereg_style()
{
    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/styles/css/normalize.css', array(), '8.0.1');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/styles/css/main.css', array());
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/menu-active.js');
    wp_enqueue_script('script-scroll', get_template_directory_uri() . '/assets/js/scroll.js');
}

add_action('wp_enqueue_scripts', 'fereg_style');


function register_my_menu()
{
    register_nav_menu(
        'main-menu',
        __('main-menu')
    );
}
add_action('init', 'register_my_menu');

function setup_start()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'setup_start');

function currentYear()
{
    return date('Y');
}
