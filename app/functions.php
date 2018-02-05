<?php
/***********************************************
WordPress feature theme support
***********************************************/
add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('woocommerce');

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
Include custom woocommerce hooks and actions
***********************************************/
get_template_part('inc/woocommerce/product', 'hooks');


/***********************************************
Add widget areas / theme sidebars
***********************************************/
add_action( 'widgets_init', 'groundwork_widgets_init' );

function groundwork_widgets_init() {
  register_sidebar( array(
      'name' => __( 'Shop Sidebar', 'groundwork' ),
      'id' => 'sidebar-1',
      'description' => __( 'Widgets in this area will be shown on the Shop page', 'groundwork' ),
      'before_widget' => '<li id="%1$s" class="widget %2$s">',
      'after_widget'  => '</li>',
      'before_title'  => '<h2 class="widgettitle">',
      'after_title'   => '</h2>',
  ) );
}

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
    wp_enqueue_style( 'default-styles', get_stylesheet_uri() );
    wp_enqueue_style( 'theme-styles', get_template_directory_uri() . '/css/style.css');
}
add_action( 'wp_enqueue_scripts', 'enqueue_theme_styles' );
