  <!-- Social media footer -->
<footer class="social-media">
  <div class="container">
    <div class="content">
      <?php if ( get_theme_mod( 'facebook_account' ) ) { ?>
        <a href="<?php echo get_theme_mod( 'facebook_account' ); ?>">
          <i class="fab fa-facebook-f"></i>
        </a>
      <?php } ?>

      <?php if ( get_theme_mod( 'twitter_account' ) ) { ?>
        <a href="<?php echo get_theme_mod( 'twitter_account' ); ?>">
          <i class="fab fa-twitter"></i>
        </a>
      <?php } ?>

      <?php if ( get_theme_mod( 'instagram_account' ) ) { ?>
        <a href="<?php echo get_theme_mod( 'instagram_account' ); ?>">
          <i class="fab fa-instagram"></i>
        </a>
      <?php } ?>

      <?php if ( get_theme_mod( 'pinterest_account' ) ) { ?>
        <a href="<?php echo get_theme_mod( 'pinterest_account' ); ?>">
          <i class="fab fa-pinterest"></i>
        </a>
      <?php } ?>
    </div>
  </div>
</footer>

<!-- Copyright statement -->
<footer class="copyright">
  <div class="container">
    <div class="content">
      <p>Copyright <?php echo get_bloginfo( 'name' ) . " " . date(Y); ?>. All rights reserved</p>
    </div>
  </div>
</footer>

</body>
<?php wp_footer(); ?>
</html>
