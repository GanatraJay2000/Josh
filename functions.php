<?php

// Get the Assets
function website_files()
{
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', null, '1.0');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery', 'bootstrap-js'), '1.0');


    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', null, '1.0');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css', null, '1.0');
    wp_enqueue_style('css', get_stylesheet_uri(), array('bootstrap-css', 'fonts'), '1.0');
}

add_action('wp_enqueue_scripts', 'website_files');



// Navigation Menus
register_nav_menus(array(
    'primary' => __('Primary Menu', 'Primary'),
));



/**
 * Register Custom Navigation Walker
 */
function register_navwalker()
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');
