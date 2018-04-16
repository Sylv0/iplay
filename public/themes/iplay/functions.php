<?php

declare(strict_types=1);

// Register plugin helpers.
require template_path('includes/plugins/plate.php');

require template_path('includes/plugins/acf.php');

add_action('init', function () {
    register_extended_post_type("employee");
    register_extended_post_type("hero");
});

// Set theme defaults.
add_action('after_setup_theme', function () {
    // Show the admin bar.
    show_admin_bar(false);

    // Add post thumbnails support.
    add_theme_support('post-thumbnails');

    // Add title tag theme support.
    add_theme_support('title-tag');

    // Add HTML5 support.
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'widgets',
    ]);

    // Add primary WordPress menu.
    register_nav_menu('primary-menu', __('Primary Menu', 'wordplate'));
});

// Enqueue and register scripts the right way.
add_action('wp_enqueue_scripts', function () {
    wp_deregister_script('jquery');

    wp_enqueue_style('wordplate', mix('styles/app.css'));

    wp_register_script('wordplate', mix('scripts/app.js'), '', '', true);
    wp_enqueue_script('wordplate');

    wp_register_script('faicons', 'https://use.fontawesome.com/releases/v5.0.10/js/all.js');
    wp_enqueue_script('faicons');
});

// Remove JPEG compression.
add_filter('jpeg_quality', function () {
    return 100;
}, 10, 2);

// Set custom excerpt more.
add_filter('excerpt_more', function () {
    return '...';
});

// Set custom excerpt length.
add_filter('excerpt_length', function () {
    return 101;
});

function my_acf_add_local_field_groups() {

	$fields = [
        acf_image(['name' => 'image', 'label' => 'Image']),
        acf_text(['name' => 'title', 'label' => 'Title']),
    ];

    $location = [
        [
            acf_location('post_type', 'employee')
        ],
    ];

    acf_field_group([
        'title' => 'About',
        'fields' => $fields,
        'style' => 'seamless',
        'location' => $location,
    ]);

}

add_action('init', 'my_acf_add_local_field_groups');

function custom_loginlogo() {
    echo
        '<style type="text/css">
            h1 a {background-image: url('.get_bloginfo('template_directory').'/assets/images/iplaylogo_black_small.png) !important; }
        </style>';
}
add_action('login_head', 'custom_loginlogo');
