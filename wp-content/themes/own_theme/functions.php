<?php

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_enqueue_scripts', 'scripts_theme');
add_action('after_setup_theme', 'nav_theme');
add_theme_support('post-thumbnails');


function nav_theme()
{
    register_nav_menu('aside-menu', 'Menu in Side Bar');
}

function style_theme()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('all', get_template_directory_uri() . '/assets/css/all.css');
}

function scripts_theme()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', 'jquery', '', true);
}

function create_post_type() {
    register_post_type('newposttype',
        array(
            'labels'      => array(
                'name'          => __('Arts'),
                'singular_name' => __('Art'),
            ),
            'public'      => true,
            'has_archive' => true,
        )
    );
}
add_action('init', 'create_post_type');

