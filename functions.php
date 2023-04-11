<?php

/* Functions */

if(!function_exists('themetemplate_setup')) {
    function themetemplate_setup() {

        // Let Wordpress handle the title tags
        add_theme_support('title-tag');

        // Let Wordpress allow custom logo
        add_theme_support('custom-logo');
        
        add_theme_support( 'post-thumbnails' );
        add_image_size( 'custom-post-thumbnail', 288, 162, true );

        add_theme_support( 'editor-styles' );
        dd_editor_style( 'globals.css' );
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
function theme_scripts() {
    wp_enqueue_style('theme_styles', get_stylesheet_uri());
    wp_enqueue_script('script_js', get_template_directory_uri() . '/js/script.js');
}

// Run function on enqueue scripts
add_action('wp_enqueue_scripts', 'theme_scripts');

function get_mediafile($name) {
    echo get_site_url()."/wp-content/uploads/".$name;
}

function get_localfile($name) {
    echo get_template_directory_uri() .$name;
}

function get_thumbnail_url() {
    if(has_post_thumbnail()) {
        echo get_the_post_thumbnail_url();
    } else {
        echo get_template_directory_uri().'/assets/herodefault.jpg';
    }
}
