<?php
function night_moose_post_types() {
    register_post_type('tournaments', array(
        'rewrite' => array(
            'slug' => 'tournaments'
        ),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Tournaments',
            'add_new_item' => 'Add New Tournament Post',
            'edit_item' => 'Edit Tournament Post',
            'all_items' => 'All Tournament Posts',
            'singular_name' => 'Tournament'
        ),
        'menu_icon' => 'dashicons-list-view'
    ));

    register_post_type('player-stats', array(
        'rewrite' => array(
            'slug' => 'player-stats'
        ),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Player Stats',
            'add_new_item' => 'Add New Player Stat',
            'edit_item' => 'Edit Player Stat',
            'all_items' => 'All Player Stats',
            'singular_name' => 'Player Stat'
        ),
        'menu_icon' => 'dashicons-universal-access-alt'
    ));

    register_post_type('message-board', array(
        'rewrite' => array(
            'slug' => 'message-board'
        ),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Message Board',
            'add_new_item' => 'Add New Message Board Post',
            'edit_item' => 'Edit Message Board Post',
            'all_items' => 'All Message Board Posts',
            'singular_name' => 'Message Board'
        ),
        'menu_icon' => 'dashicons-format-status'
    ));

    register_post_type('league', array(
        'rewrite' => array(
            'slug' => 'leagues'
        ),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'League',
            'add_new_item' => 'Add New League Member',
            'edit_item' => 'Edit League Member',
            'all_items' => 'All League Members',
            'singular_name' => 'League Member'
        ),
        'menu_icon' => 'dashicons-networking'
    ));

    register_post_type('team', array(
        'rewrite' => array(
            'slug' => 'team'
        ),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Team',
            'add_new_item' => 'Add New Team Member',
            'edit_item' => 'Edit Team Member',
            'all_items' => 'All Team Members',
            'singular_name' => 'Team Member'
        ),
        'menu_icon' => 'dashicons-groups'
    ));

    register_post_type('ambassadors', array(
        'rewrite' => array(
            'slug' => 'ambassadors'
        ),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Ambassadors',
            'add_new_item' => 'Add New Ambassador',
            'edit_item' => 'Edit Ambassador',
            'all_items' => 'All Ambassadors',
            'singular_name' => 'Ambassador'
        ),
        'menu_icon' => 'dashicons-businessman'
    ));

    // register_post_type('please', array(
    //     'has_archive' => true,
    //     'public' => true,
    //     'labels' => array(
    //         'name' => 'Please',
    //         'add_new_item' => 'Add New Ambassador',
    //         'edit_item' => 'Edit Ambassador',
    //         'all_items' => 'All Ambassadors',
    //         'singular_name' => 'Ambassador'
    //     ),
    //     'menu_icon' => 'dashicons-businessman'
    // ));
}

add_action('init', 'night_moose_post_types');
?>