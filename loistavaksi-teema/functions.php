<?php

/* Functions */

if(!function_exists('loistavaksiteema_setup')) {
    function loistavaksiteema_setup() {

        //Let wordpress handle the title tags
        add_theme_support('title-tag');
    }
}

//Run function after theme setup
add_action('after_setup_theme', 'loistavaksiteema_setup');

function register_loistavaksiteema_menus() {
    register_nav_menus(array(
        'primary' => __('Navigointi')
    ));
}

add_action('init', 'register_loistavaksiteema_menus');

function loistavaksiteema_scripts() {
    wp_enqueue_style('loistavaksiteema_styles', get_stylesheet_uri());
    wp_enqueue_script('script_js', get_template_directory_uri() . '/js/script.js');
}

add_action('wp_enqueue_scripts', 'loistavaksiteema_scripts');
