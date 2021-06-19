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
/**
 * Here we make sidebar
*/

function marmelada_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'marmelada' ),
            'id'            => 'ownsidebar',
            'description'   => esc_html__( 'Add widgets here.', 'marmelada' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 style="display: none" class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'marmelada_widgets_init' );

/**
 * Add my own widget
 */
require get_template_directory() . '/widgets/widgets.php';
require get_template_directory() . '/widgets/widget-info.php';


/**
 * Реализация страницы опций
 */

function marmelada_option_page(){
    add_options_page('Own page of settings', 'Some setting', 'manage_options', 'marmelada_options', 'marmelada_api_options_page');
}

function marmelada_api_setting_init()
{

    register_setting('marmeladaCustom', 'marmelada_api_settings');
    add_settings_section(
        'marmelada_api_marmeladaCustom_section',
        __( 'Секция 1', 'wordpress' ),
        'marmelada_api_settings_section_callback',
        'marmeladaCustom'
    );
    add_settings_field(
        'marmelada_api_text_field_0',
        __( 'Опция 1', 'wordpress' ),
        'marmelada_api_text_field_0_render',
        'marmeladaCustom',
        'marmelada_api_marmeladaCustom_section'
    );
}

function marmelada_api_text_field_0_render( ) {
    $options = get_option( 'marmelada_api_settings' );
    ?>
    <input type='text' name='marmelada_api_settings[marmelada_api_text_field_0]' value='<?php echo $options['marmelada_api_text_field_0']; ?>'>
    <?php
}
function marmelada_api_settings_section_callback( ) {
    echo __( 'Описание для секции настроек', 'wordpress' );
}

function marmelada_api_options_page( ) {
    ?>
    <form action='options.php' method='post'>
        <h2>Дополнительная страница настроек</h2>
        <?php
        settings_fields( 'marmeladaCustom' );
        do_settings_sections( 'marmeladaCustom' );
        submit_button();
        ?>
    </form>
    <?php
}

add_action('admin_menu', 'marmelada_option_page');
add_action('admin_init', 'marmelada_api_setting_init');


