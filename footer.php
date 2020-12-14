<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?>
    </div><!--/ .main-content-wrap -->

    <!-- Footer -->
    <footer id="global-footer" class="footer bg-dark">
      <div class="container">
        <div class="copyright float-left">
          <p class="text-light small mb-4 mb-lg-0"><?= ( $footer_left_text = get_field('footer_left_text', 'options') ) ? $footer_left_text : ''; ?></p>
        </div>

        <div class="credits float-right">
          <p class="text-light small mb-4 mb-lg-0"><?= ( $footer_right_text = get_field('footer_right_text', 'options') ) ? $footer_right_text : ''; ?></p>
        </div>

        <div class="clearfix"></div>
      </div>
    </footer>

  </div><!--/ .global-wrapper -->
  <?php wp_footer(); ?>
</body>
</html>