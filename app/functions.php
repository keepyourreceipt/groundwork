<?php
/***********************************************
WordPress feature theme support
***********************************************/
add_theme_support('menus');

function theme_custom_logo() {
    $defaults = array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'theme_custom_logo' );

/***********************************************
Add custom menu display locations
***********************************************/
function register_menu_locations() {
  register_nav_menus(
    array( 'main_menu' => __( 'Main Menu' ) ));
}
add_action( 'init', 'register_menu_locations' );

/***********************************************
Enqueue theme scripts and stylesheets
***********************************************/
function enqueue_theme_styles() {
    wp_enqueue_style( 'default', get_stylesheet_uri() );
    wp_enqueue_style( 'theme', get_template_directory_uri() . '/css/style.css');
}
add_action( 'wp_enqueue_scripts', 'enqueue_theme_styles' );
