<!DOCTYPE html>
<html>
<head>
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <?php
    /***********************************************
    Include elementor font and color support
    ***********************************************/
    require_once get_template_directory() . '/inc/elementor/global-font-support.php';
    require_once get_template_directory() . '/inc/elementor/global-color-support.php';
  ?>

  <!-- Begin main menu -->
  <?php if ( has_nav_menu( 'main_menu' ) || has_custom_logo() ) { ?>
    <div class="main-menu">
      <div class="container">
        <div class="content">
          <?php if ( has_custom_logo() ) { ?>
            <div class="logo">
              <?php the_custom_logo(); ?>
            </div>
          <?php } ?>
          <?php if ( has_nav_menu( 'main_menu' ) ) { ?>
            <!-- Begin menu links -->
            <div class="links">
              <?php
                wp_nav_menu( array(
                  'theme_location' => 'main_menu',
                  'fallback_cb' => 'default_header_nav',
                  'container' => '',
                  'container_class' => ''
                ));
              ?>
            </div>
            <!-- Begin mobile menu toggle -->
            <div class="mobile-menu-toggle">
              <span class="mobile-menu-toggle-bar one"></span>
              <span class="mobile-menu-toggle-bar two"></span>
              <span class="mobile-menu-toggle-bar three"></span>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  <?php } // end menu and logo check ?>
