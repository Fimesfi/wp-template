<?php

/* Functions */

if(!function_exists('themetemplate_setup')) {
    function themetemplate_setup() {

        // Let Wordpress handle the title tags
        add_theme_support('title-tag');

        // Let Wordpress allow custom logo
        add_theme_support('custom-logo');
    }
}

// Run function after theme setup
add_action('after_setup_theme', 'themetemplate_setup');


// Function to register menus
function register_themetemplate_menus() {
    register_nav_menus(array(
        'primary' => __('Navigointi')
    ));
}

// Run function on init
add_action('init', 'register_themetemplate_menus');


// Function to link css & js files
function themetemplate_scripts() {
    wp_enqueue_style('loistavaksiteema_styles', get_stylesheet_uri());
    wp_enqueue_script('script_js', get_template_directory_uri() . '/js/script.js');
}

// Run function on enqueue scripts
add_action('wp_enqueue_scripts', 'loistavaksiteema_scripts');
