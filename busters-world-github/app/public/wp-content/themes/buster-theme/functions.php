<?php

function theme_support() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}


add_action('after_setup_theme', 'theme_support');

function create_menu () {

    $locations = array (
        'primary' => "left sidebar",
        'footer' => "footer menu items"
    );
    register_nav_menus($locations);
}

add_action('init', 'create_menu');



function enqueue_theme_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri() );
   
}

add_action('wp_enqueue_scripts', 'enqueue_theme_styles');






