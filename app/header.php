<!DOCTYPE html>
<html>
<head>
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body>

  <?php
    /***********************************************
    Include elementor font support
    ***********************************************/
    get_template_part('inc/elementor', 'font-support');
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
          <?php } ?>
        </div>
      </div>
    </div>
  <?php } // end menu and logo check ?>
