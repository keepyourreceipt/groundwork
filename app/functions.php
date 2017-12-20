<?php
/***********************************************
WordPress feature theme support
***********************************************/
add_theme_support('menus');
add_theme_support( 'custom-logo' );

/***********************************************
Add custom menu display locations
***********************************************/
function register_menu_locations() {
  register_nav_menus(
    array( 'main_menu_location' => __( 'Main Menu' ) ));
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
