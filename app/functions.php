<?php
/***********************************************
Recommend / require theme plugins on activation
***********************************************/
require_once get_template_directory() . '/inc/tgm-plugin-activation/config-tgm-plugin-activation.php';


/***********************************************
WordPress feature theme support
***********************************************/
add_theme_support('menus');
add_theme_support('widgets');

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
Add woocommerce theme support
***********************************************/
// Check if woocommerce is active
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

  // Add theme support for woocommrece and product gallery
  add_theme_support('woocommerce');
  add_theme_support( 'wc-product-gallery-zoom' );
  add_theme_support( 'wc-product-gallery-lightbox' );
  add_theme_support( 'wc-product-gallery-slider' );

  // Include woocommerce theme hooks and functions
  get_template_part('inc/woocommerce/layout', 'hooks');
  get_template_part('inc/woocommerce/checkout', 'hooks');
  get_template_part('inc/woocommerce/product', 'hooks');
}

function get_woocommerce_category_image() {
    if ( is_product_category() ) {
	    global $wp_query;
	    $cat = $wp_query->get_queried_object();
	    $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
	    $image = wp_get_attachment_url( $thumbnail_id );
      return $image;
	}
}

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

function enqueue_theme_scripts() {
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_theme_scripts' );
