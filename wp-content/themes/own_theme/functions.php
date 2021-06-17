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

function create_post_type()
{
    register_post_type('arts',
        array(
            'labels' => array(
                'name' => __('Arts'),
                'singular_name' => __('Art')
            ),
            'add_new' => __('Add new Art'),
            'menu_position' => 5,
            'supports' => array('title', 'editor', 'thumbnail'),
            'public' => true,
            'has_archive' => true,
        )
    );

    register_post_type('cars',
        array(
            'labels' => array(
                'name' => __('Cars'),
                'singular_name' => __('Car'),
                'add_new' => __('Add new car')

            ),
            'public' => true,
            'has_archive' => true,
        )
    );

    register_taxonomy(
        'artist',
        'arts',
        array(
            'label' => __('Artist'),
            'rewrite' => array('slug' => 'artist'),
            'hierarchical' => true
        )
    );
    register_taxonomy(
        'epoque',
        'arts',
        array(
            'label' => __('Epoque'),
            'rewrite' => array('slug' => 'epoque'),
            'hierarchical' => true,
        )
    );
    register_taxonomy(
        'country',
        'arts',
        array(
            'label' => __('Country'),
            'rewrite' => array('slug' => 'country'),
            'hierarchical' => true
        )
    );


}

add_action('init', 'create_post_type');


function myownwidget()
{
    register_sidebar(array(
            'name' => esc_html__(),
            'id' => '',
            'description' => '',
            'class'=>'',
            'before_widget'=>'',
            'after_widget'=>'',
            'before_title'=>'',
            'after_title'=>'',
            'before_sidebar'=>'',
            'after_sidebar'=>'',

        )

    );
}

;
//add_action('widgets_init', 'myownwidget');



