<?php

/***********************************************
Single product and product archive
***********************************************/
// Wrap product page content with layout divs
function action_woocommerce_before_main_content() {
    if ( is_product() ) {
      echo "<div class='container'>";
      echo "<div class='content'>";
    }
};

add_action( 'woocommerce_before_main_content', 'action_woocommerce_before_main_content', 10, 2 );

// Wrap product page content with layout divs
function action_woocommerce_after_main_content() {
    if ( is_product() ) {
      echo "</div>"; // end content
      echo "</div>"; // end container
    }
};

add_action( 'woocommerce_after_main_content', 'action_woocommerce_after_main_content', 10, 2 );

// Remove breadcrumbs from shop & categories
add_filter( 'woocommerce_before_main_content', 'remove_breadcrumbs');
function remove_breadcrumbs() {
	remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20, 0);
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}

add_filter( 'woocommerce_show_page_title' , 'woo_hide_page_title' );
function woo_hide_page_title() {

	return false;
}


/***********************************************
Cart and checkout process
***********************************************/
function action_woocommerce_before_cart() {
  echo "<div class='container'>";
  echo "<div class='content'>";
};
add_action( 'woocommerce_before_cart', 'action_woocommerce_before_cart', 10, 2 );

function action_woocommerce_after_cart() {
  echo "</div>"; // end content
  echo "</div>"; // end container
};
add_action( 'woocommerce_after_cart', 'action_woocommerce_after_cart', 10, 2 );

function action_woocommerce_before_checkout_form() {
  echo "<div class='container'>";
  echo "<div class='content'>";
};
add_action( 'woocommerce_before_checkout_form', 'action_woocommerce_before_checkout_form', 10, 2 );

function action_woocommerce_after_checkout_form() {
  echo "</div>"; // end content
  echo "</div>"; // end container
};
add_action( 'woocommerce_after_checkout_form', 'action_woocommerce_after_checkout_form', 10, 2 );
