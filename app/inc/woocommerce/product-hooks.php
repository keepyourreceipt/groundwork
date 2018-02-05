<?php
// define the woocommerce_before_main_content callback
function action_woocommerce_before_main_content() {
    if ( is_product() ) {
      echo "<div class='container'>";
      echo "<div class='content'>";
    }
};

// add the action
add_action( 'woocommerce_before_main_content', 'action_woocommerce_before_main_content', 10, 2 );

// define the woocommerce_before_main_content callback
function action_woocommerce_after_main_content() {
    if ( is_product() ) {
      echo "</div>"; // end content
      echo "</div>"; // end container
    }
};

// add the action
add_action( 'woocommerce_after_main_content', 'action_woocommerce_after_main_content', 10, 2 );

// Remove breadcrumbs from shop & categories
add_filter( 'woocommerce_before_main_content', 'remove_breadcrumbs');
function remove_breadcrumbs() {
	if( !is_product() ) {
		remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20, 0);
	}
}
