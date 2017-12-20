<!DOCTYPE html>
<html>
<head>
  <title>Ground Work</title>
  <?php wp_head(); ?>
</head>
<body>
  <!-- Begin main menu -->
  <div class="main-menu">
    <div class="content">
      <div class="menu-logo">
        <?php
          /***********************************************
          Display custom logo as set in customizer
          ***********************************************/
          if ( has_custom_logo() ) {
            the_custom_logo();
          }
        ?>
      </div>
      <div class="menu-links">
        <?php
          /***********************************************
          Add main menu location
          ***********************************************/
          wp_nav_menu( array(
            'theme_location' => 'main_menu_location',
            'fallback_cb' => 'default_header_nav',
            'container' => '',
            'container_class' => ''
          ));
        ?>
      </div>
    </div>
  </div>
