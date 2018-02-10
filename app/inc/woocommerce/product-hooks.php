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


/* Remove product meta */
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
