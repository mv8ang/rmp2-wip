<?php 

// Include scripts
function rmp2_script_enqueue() {
    // list of styles 
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6', 'all');
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/rmp2.css', array(), '1.0.0', 'all');
    wp_enqueue_style('customstyle', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700,600,300,700italic,400italic,600italic,300italic,800', array(), '1.0.0', 'all');
    
    // list of scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.6', true);
    wp_enqueue_script('customscript', get_template_directory_uri() . '/js/rmp2.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'rmp2_script_enqueue'); 



// Activate menus
function rmp2_theme_setup() {
    // activates defaut theme features
    add_theme_support('menus');
    
    // specifies navigation sets
    register_nav_menu('primary', 'Primary header navigation');
    register_nav_menu('secondary', 'Footer navigation');
}
add_action('after_setup_theme', 'rmp2_theme_setup');



// Theme support
//add_theme_support('post-formats', array('aside', 'image', 'video'));

