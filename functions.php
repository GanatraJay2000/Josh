<?php

// Get the Assets
function website_files()
{
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', null, '1.0');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0');
    wp_enqueue_script('modal-js', get_template_directory_uri() . '/assets/js/modal.js', array('jquery'), '1.0', true);
    wp_enqueue_script('owl-js', get_template_directory_uri() . '/assets/owl/owl_carousel.js', array('jquery'), '1.0');
    wp_enqueue_script('owl-support-js', get_template_directory_uri() . '/assets/owl/owl.js', array('owl-js'), '1.0');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery', 'bootstrap-js', 'owl-support-js', 'modal-js'), '1.0');

    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', null, '1.0');
    wp_enqueue_style('font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', null, '1.0');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css', null, '1.0');
    wp_enqueue_style('lightbox-css', get_template_directory_uri() . '/assets/css/lightbox.css', null, '1.0');
    wp_enqueue_style('modal-css', get_template_directory_uri() . '/assets/css/modal.css', null, '1.0');
    wp_enqueue_style('owl-theme-css', get_template_directory_uri() . '/assets/owl/owl_carousel.theme.css', null, '1.0');
    wp_enqueue_style('owl-css', get_template_directory_uri() . '/assets/owl/owl_carousel.css', array('owl-theme-css'), '1.0');
    wp_enqueue_style('owl-support', get_template_directory_uri() . '/assets/owl/owl_support.css', array('owl-css'), '1.0');
    wp_enqueue_style('animate-css', get_template_directory_uri() . '/assets/css/animate.css', null, '1.0');
    wp_enqueue_style('css', get_stylesheet_uri(), array('bootstrap-css', 'font-awesome', 'fonts', 'owl-support', 'animate-css', 'lightbox-css', 'modal-css'), '1.0');


    if (is_front_page()) {
        wp_enqueue_style('home-css', get_template_directory_uri() . '/assets/css/page-css/home.css', array('css'), '1.0');
    }
    if (is_page('profile')) {
        wp_enqueue_style('profile-css', get_template_directory_uri() . '/assets/css/page-css/profile.css', array('css'), '1.0');
    }
    if (is_page('founders')) {
        wp_enqueue_style('founders-css', get_template_directory_uri() . '/assets/css/page-css/founders.css', array('css'), '1.0');
    }
    if (is_page('josh-activities')) {
        wp_enqueue_style('josh-activities-css', get_template_directory_uri() . '/assets/css/page-css/josh-activities.css', array('css'), '1.0');
    }
    if (is_page('josh-stars')) {
        wp_enqueue_style('josh-stars-css', get_template_directory_uri() . '/assets/css/page-css/josh-stars.css', array('css'), '1.0');
    }
    if (is_page('gallery')) {
        wp_enqueue_style('gallery-css', get_template_directory_uri() . '/assets/css/page-css/gallery.css', array('css'), '1.0');
    }
    if (is_page('press')) {
        wp_enqueue_style('press-css', get_template_directory_uri() . '/assets/css/page-css/press.css', array('css'), '1.0');
    }
    if (is_page('testimonials')) {
        wp_enqueue_style('testimonials-css', get_template_directory_uri() . '/assets/css/page-css/testimonials.css', array('css'), '1.0');
    }
    if (is_page('contact-us')) {
        wp_enqueue_style('contact-us-css', get_template_directory_uri() . '/assets/css/page-css/contact-us.css', array('css'), '1.0');
    }
    if (is_home()) {
        wp_enqueue_style('blogs-css', get_template_directory_uri() . '/assets/css/page-css/blogs.css', array('css'), '1.0');
    }
    if(is_single()){
        wp_enqueue_style('blog-css', get_template_directory_uri() . '/assets/css/page-css/blog.css', array('css'), '1.0');
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









// Meta Boxes

add_filter( 'rwmb_meta_boxes', 'your_prefix_register_gallery_boxes' );

function your_prefix_register_gallery_boxes( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Youtube Videos', 'online-generator' ),
        'id'         => 'youtube_videos',
        'post_types' => ['page'],
        'context'    => 'normal',
        'priority'   => 'high',
        'fields'     => [
            [
                'type'    => 'text_list',
                'id'      => $prefix . 'youtube_video',
                'name'    => esc_html__( 'youtube_video', 'online-generator' ),
                'clone'   => true,
                'options' => [
                    '' => 'Video Id',
                ],
            ],
        ],
    ];

    return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );

function your_prefix_register_meta_boxes( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'      => esc_html__( 'latest_blogs', 'online-generator' ),
        'id'         => 'latest_blogs',
        'post_types' => ['post'],
        'context'    => 'normal',
        'priority'   => 'high',
        'fields'     => [
            [
                'type' => 'date',
                'id'   => $prefix . 'upload_date',
                'name' => esc_html__( 'upload_date', 'online-generator' ),
            ],
            [
                'type' => 'image',
                'id'   => $prefix . 'banner_image',
                'name' => esc_html__( 'banner_image', 'online-generator' ),
            ],
        ],
    ];

    return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'your_prefix_register_pdfs_boxes' );

function your_prefix_register_pdfs_boxes( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'      => esc_html__( 'pdfs', 'text-domain' ),
        'id'         => 'pdfs',
        'post_types' => ['page'],
        'context'    => 'normal',
        'priority'   => 'high',
        'fields'     => [
            [
                'type' => 'text',
                'id'   => $prefix . 'title',
                'name' => esc_html__( 'title', 'text-domain' ),
                'clone' => true,
            ],
            [
                'type' => 'text',
                'id'   => $prefix . 'date',
                'name' => esc_html__( 'date', 'text-domain' ),
                'clone' => true,
            ],
            [
                'type' => 'file',
                'id'   => $prefix . 'pdf',
                'name' => esc_html__( 'pdf', 'text-domain' ),
                'clone' => true,
            ],
        ],
    ];

    return $meta_boxes;
}