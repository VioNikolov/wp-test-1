<?php

//adding scripts and styles to wp
function warax_script_enqueue (){
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/warax.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrapcss', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '1.0.0', 'all');

    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/warax.js', array(), '1.0.0', true);
    wp_enqueue_script('bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery');
}


add_action('wp_enqueue_scripts', 'warax_script_enqueue');



//activating menus in wp
function warax_theme_setup () {
    add_theme_support('menus');
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('aside', 'image', 'video'));
    register_nav_menu('primary', 'Primary header navigation');
    register_nav_menu('secondary', 'Footer menu navigation');

}

add_action('after_setup_theme', 'warax_theme_setup');

