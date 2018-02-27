<?php
  /***********************************************
  Get global colors as set in the elementor gloabl
  settings panel, and output associated styles
  ***********************************************/
  if ( get_option('elementor_scheme_color') ) {
    $global_colors = get_option( 'elementor_scheme_color' );

    if ( $global_colors[1] ) {
      $primary_color = $global_colors[1];
    }

    if ( $global_colors[2] ) {
      $secondary_color = $global_colors[2];
    }

    if ( $global_colors[3] ) {
      $text_color = $global_colors[3];
    }

    if ( $global_colors[4] ) {
      $accent_color = $global_colors[4];
    }
  }
?>

<style>
  .main-menu .container .content ul li a:hover {
    color: <?php echo $primary_color; ?>;
  }

  .main-menu .container .content ul li.current_page_item:before {
    background-color: <?php echo $primary_color; ?>;
  }

  .main-menu .container .content ul li.current_page_item a,
  .main-menu .container .content ul li.current_page_item a:visited {
    color: <?php echo $primary_color; ?>;
  }
</style>
