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
