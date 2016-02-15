<?php 

// Include scripts
function rmp2_script_enqueue() {
    // list of styles 
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700,600,300,700italic,400italic,600italic,300italic,800', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6', 'all');
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/rmp2.css', array(), '1.0.0', 'all');
    
    // list of scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.6', true);
    wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), '3.3.6', true);
    wp_enqueue_script('masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array(), '3.3.6', true);
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
    register_nav_menu('footer-nav-1', 'Extra footer navigation');
}
add_action('after_setup_theme', 'rmp2_theme_setup');



// Theme support
//add_theme_support('post-formats', array('aside', 'image', 'video'));



// Footer function - uncomment and set up footer widgets in the WP admin panel in case of dynamic footers
//function rmp2_widget_setup() {
//    register_sidebar(array(
//            'name'  => 'Footer',
//            'id'    => 'footer-1',
//            'class' => 'custom',
//            'description' => 'Standard Footer',
//            'before_widget' => '<aside id="%1s" class="widget %2s col-md-3">',
//            'after_widget'  => '</aside>',
//            'before_title'  => '<h3 class="widget-title">',
//            'after_title'   => '</h3>',
//        )
//    );
//}
//add_action('widgets_init', 'rmp2_widget_setup');