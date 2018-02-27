<?php
/***********************************************
Wrap checkout markup in structural theme classes
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

/***********************************************
Reorder woocommerce checkout address fields
***********************************************/
function custom_default_address_fields( $fields ) {
  $fields_order = array( 'company', 'first_name', 'last_name', 'billing_email', 'address_1', 'address_2', 'city', 'state', 'postcode', 'country' );

  // Set fields priority
  $priority = 10;

  foreach ( $fields_order as $key ) {
      if ( ! isset( $fields[ $key ] ) ) {
          continue;
      }

      $fields[ $key ]['priority'] = $priority;
      $priority += 10;
  }

  // Change fields order
  $fields_ordered = array();

  foreach ( $fields_order as $key ) {
      if ( isset( $fields[ $key ] ) ) {
          $fields_ordered[ $key ] = $fields[ $key ];
      }
  }

  return $fields_ordered;
}

add_filter( 'woocommerce_default_address_fields', 'custom_default_address_fields' );

/***********************************************
Remove unused fields from woocommerce checkout
***********************************************/
function hide_woocommerce_checkout_fields( $fields ) {        
  unset($fields['billing']['billing_phone']);
  unset($fields['billing']['billing_company']);
  return $fields;
}

add_filter( 'woocommerce_checkout_fields', 'hide_woocommerce_checkout_fields' );


/***********************************************
Remove additional info field from checkout page
***********************************************/
function remove_order_notes( $fields ) {
   unset($fields['order']['order_comments']);
   return $fields;
}

add_filter( 'woocommerce_enable_order_notes_field', '__return_false' );
add_filter( 'woocommerce_checkout_fields' , 'remove_order_notes' );


/***********************************************
Set placeholder text for checkout fields
***********************************************/
function custom_override_checkout_fields( $fields ) {
  // Name fields
   $fields['billing']['billing_first_name']['placeholder'] = 'First name';
   $fields['billing']['billing_last_name']['placeholder'] = 'Last name';       
   
   // Address fields
   $fields['billing']['billing_city']['placeholder'] = 'Town / City';
   $fields['billing']['billing_postcode']['placeholder'] = 'ZIP';      
   
   // Email address field
   $fields['billing']['billing_email']['placeholder'] = 'Email address';           
   return $fields;
}

add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

/***********************************************
Set form placeholder text for address fields
***********************************************/
function override_address_fields( $address_fields ) {
  // Override default placeholder text for address fields
  $address_fields['address_1']['placeholder'] = 'Address';
  $address_fields['address_2']['placeholder'] = 'Apt.';    
  return $address_fields;
}

add_filter('woocommerce_default_address_fields', 'override_address_fields');