<?php

function night_moose_files() {
    wp_enqueue_script('jquery', includes_url() . '/js/jquery/jquery.js', NULL, '1.0', false);
    wp_enqueue_script('images-loaded', includes_url() . '/js/imagesloaded.min.js', NULL, '1.0', true);
    wp_enqueue_script('jquery-migrate', includes_url() . '/js/jquery/jquery-migrate.min.js', NULL, '1.0', false);

    wp_enqueue_script('script', get_theme_file_uri('/js/script.js'), NULL, '1.0', true);
    wp_enqueue_script('skip-link-focus-fix', get_theme_file_uri('/js/skip-link-focus-fix.js'), NULL, '1.0', true);
    wp_enqueue_script('typed-js', get_theme_file_uri('/js/typed.min.js'), NULL, '1.0', true);
    wp_enqueue_script('jquery-sidr-js', get_theme_file_uri('/js/jquery.sidr.min.js'), NULL, '1.0', true);
    wp_enqueue_script('owl-carousel-js', get_theme_file_uri('/js/owl.carousel.min.js'), NULL, '1.0', true);
    wp_enqueue_script('wp-embed', get_theme_file_uri('/js/wp-embed.min.js'), NULL, '1.0', true);
    wp_enqueue_script('masonry-js', get_theme_file_uri('/js/masonry.min.js'), NULL, '1.0', true);
    wp_enqueue_script('admin-bar', get_theme_file_uri('/js/admin-bar.min.js'), NULL, '1.0', true);
    wp_enqueue_script('bootstrap-js', get_theme_file_uri('/js/bootstrap.min.js'), NULL, '1.0', true);

    wp_enqueue_style('jquery-sidr-css', get_theme_file_uri('/css/jquery.sidr.dark.css'));
    wp_enqueue_style('owl-carousel-css', get_theme_file_uri('/css/owl.carousel.css'));
    wp_enqueue_style('block-library', get_theme_file_uri('/css/dist/block-library/style.min.css'));
    wp_enqueue_style('bootstrap-css', get_theme_file_uri('/css/bootstrap/css/bootstrap.min.css'));
    wp_enqueue_style('admin-bar-style', get_theme_file_uri('/css/admin-bar.min.css?ver=5.1.1'));
    wp_enqueue_style('dashicons', get_theme_file_uri('/css/dashicons.min.css?ver=5.1.1'));
    wp_enqueue_style('font-style', '//fonts.googleapis.com/css?family=Source%20Serif%20Pro:400,700|Source%20Sans%20Pro:400,400i,700,700i|Libre%20Franklin:400,600&#038;subset=latin,latin-ext');
    wp_enqueue_style('night_moose_main_styles', get_stylesheet_uri(), NULL, microtime());
}

add_action('wp_enqueue_scripts', 'night_moose_files');


function night_moose_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('footerImage', 200, 150, false);
    add_image_size('playerStatsImage', 150, 150, false);
}

add_action('after_setup_theme', 'night_moose_features');
?>