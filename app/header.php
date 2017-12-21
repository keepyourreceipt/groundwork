<!DOCTYPE html>
<html>
<head>
  <title>Ground Work</title>
  <?php wp_head(); ?>
</head>
<body>
  <!-- Begin main menu -->
  <?php if ( has_nav_menu( 'main_menu' ) || has_custom_logo() ) { ?>
    <div class="main-menu">
      <div class="container">
        <div class="content">
          <?php if ( has_custom_logo() ) { ?>
            <div class="menu-logo">
              <?php the_custom_logo(); ?>
            </div>
          <?php } ?>
          <?php if ( has_nav_menu( 'main_menu' ) ) { ?>
            <div class="menu-links">
              <?php
                wp_nav_menu( array(
                  'theme_location' => 'main_menu',
                  'fallback_cb' => 'default_header_nav',
                  'container' => '',
                  'container_class' => ''
                ));
              ?>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  <?php } // end menu and logo check ?>
