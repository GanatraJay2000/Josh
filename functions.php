<?php

// Get the Assets
function website_files()
{
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', null, '1.0');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0');
    wp_enqueue_script('owl-js', get_template_directory_uri() . '/assets/owl/owl_carousel.js', array('jquery'), '1.0');
    wp_enqueue_script('owl-support-js', get_template_directory_uri() . '/assets/owl/owl.js', array('owl-js'), '1.0');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery', 'bootstrap-js', 'owl-support-js'), '1.0');

    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', null, '1.0');
    wp_enqueue_style('font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', null, '1.0');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css', null, '1.0');
    wp_enqueue_style('lightbox-css', get_template_directory_uri() . '/assets/css/lightbox.css', null, '1.0');
    wp_enqueue_style('owl-theme-css', get_template_directory_uri() . '/assets/owl/owl_carousel.theme.css', null, '1.0');
    wp_enqueue_style('owl-css', get_template_directory_uri() . '/assets/owl/owl_carousel.css', array('owl-theme-css'), '1.0');
    wp_enqueue_style('owl-support', get_template_directory_uri() . '/assets/owl/owl_support.css', array('owl-css'), '1.0');
    wp_enqueue_style('animate-css', get_template_directory_uri() . '/assets/css/animate.css', null, '1.0');
    wp_enqueue_style('css', get_stylesheet_uri(), array('bootstrap-css', 'font-awesome', 'fonts', 'owl-support', 'animate-css', 'lightbox-css'), '1.0');


    if (is_page('home')) {
        wp_enqueue_style('home-css', get_template_directory_uri() . '/assets/css/home.css', array('css'), '1.0');
    }
    if (is_page('profile')) {
        wp_enqueue_style('profile-css', get_template_directory_uri() . '/assets/css/profile.css', array('css'), '1.0');
    }
    if (is_page('founders')) {
        wp_enqueue_style('founders-css', get_template_directory_uri() . '/assets/css/founders.css', array('css'), '1.0');
    }
    if (is_page('josh-activities')) {
        wp_enqueue_style('josh-activities-css', get_template_directory_uri() . '/assets/css/josh-activities.css', array('css'), '1.0');
    }
    if (is_page('josh-stars')) {
        wp_enqueue_style('josh-stars-css', get_template_directory_uri() . '/assets/css/josh-stars.css', array('css'), '1.0');
    }
    if (is_page('gallery')) {
        wp_enqueue_style('gallery-css', get_template_directory_uri() . '/assets/css/gallery.css', array('css'), '1.0');
    }
    if (is_page('press')) {
        wp_enqueue_style('press-css', get_template_directory_uri() . '/assets/css/press.css', array('css'), '1.0');
    }
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
