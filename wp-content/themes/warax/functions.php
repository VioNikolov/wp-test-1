<?php


function warax_script_enqueue (){
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/warax.css', array(), '1.0.0', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/warax.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'warax_script_enqueue');

function warax_theme_setup () {
    add_theme_support('menus');
}

add_action('init', 'warax_theme_setup');

