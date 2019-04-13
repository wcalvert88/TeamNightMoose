<?php

function night_moose_files() {
    wp_enqueue_script('wp-embed', get_theme_file_uri('/js/wp-embed.min.js'), NULL, '1.0', true);
    wp_enqueue_script('masonry-js', get_theme_file_uri('/js/masonry.min.js'), NULL, '1.0', true);
    wp_enqueue_script('admin-bar', get_theme_file_uri('/js/admin-bar.min.js'), NULL, '1.0', true);
    wp_enqueue_style('admin-bar-style', get_theme_file_uri('css/admin-bar.min.css?ver=5.1.1'));
    wp_enqueue_style('font-style', '//fonts.googleapis.com/css?family=Source%20Serif%20Pro:400,700|Source%20Sans%20Pro:400,400i,700,700i|Libre%20Franklin:400,600&#038;subset=latin,latin-ext');
    wp_enqueue_style('night_moose_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'night_moose_files');
?>