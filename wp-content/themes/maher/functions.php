<?php
require_once ('wp-bootstrap-navwalker.php');
require_once ('wp-bootstrap-navwalker.php');


// add screpts to body
add_action( 'wp_enqueue_scripts', function (){

    wp_deregister_script('jquery');
    wp_register_script('jquery', includes_url('js/jquery/jquery.js'), array(), '', true);
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'bootsrap-js', get_template_directory_uri() . '/js/bootstrap.min.js',
        array(), '1.0.0', true);
});


// add styles
add_action( 'wp_enqueue_scripts', function (){

    wp_enqueue_style( 'bootsrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'font-awsome-css', get_template_directory_uri() . '/css/font-awesome.min.css' );
    wp_enqueue_style( 'frontend-css', get_template_directory_uri() . '/css/frontend.css', false,
        '1.0.3', false);
});


// excerpt : post content text , lenght
add_filter('excerpt_length', function(){
    return 32;
});

// excerpt : post content text , make ... to last content
add_filter('excerpt_more' ,function (){
    return ' ...';
});

// add feutured Image support
add_theme_support( 'post-thumbnails' );


////////////////////////
/* Add cusom new Menu */
////////////////////////
// add init action : add new custom menu
add_action('init', function (){
    register_nav_menus(array(
        'bootrtrap-menu'    => 'Navigtion Bar2',
        'footer_menu'       => 'Footer Menu2',
    ));
});

