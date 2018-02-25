<?php
/***********************************************
Customize checkout process
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

// Remove company name field from checkout page form
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

function custom_override_checkout_fields( $fields ) {
  unset($fields['billing']['billing_company']);

  return $fields;
}
