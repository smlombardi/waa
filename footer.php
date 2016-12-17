<div class="dmbs-footer row">

  <div class="col-md-12">
      <hr class="footer-rule">
      <div class="row-flex footer-flex">
          <?php if ( is_active_sidebar( 'footer_1' ) ) : ?>
              <div id="footer_widget_1" class="footer-1" role="complementary">
                  <?php dynamic_sidebar( 'footer_1' ); ?>
              </div><!-- #primary-sidebar -->
          <?php endif; ?>
          <?php if ( is_active_sidebar( 'footer_2' ) ) : ?>
              <div id="footer_widget_2" class="footer-2" role="complementary">
                  <?php dynamic_sidebar( 'footer_2' ); ?>
              </div><!-- #primary-sidebar -->
          <?php endif; ?>
          <?php if ( is_active_sidebar( 'footer_3' ) ) : ?>
              <div id="footer_widget_3" class="footer-3" role="complementary">
                  <?php dynamic_sidebar( 'footer_3' ); ?>
              </div><!-- #primary-sidebar -->
          <?php endif; ?>
          <?php if ( is_active_sidebar( 'footer_4' ) ) : ?>
              <div id="footer_widget_4" class="footer-4" role="complementary">
                  <?php dynamic_sidebar( 'footer_4' ); ?>
              </div><!-- #primary-sidebar -->
          <?php endif; ?></div>
      
      <?php get_template_part('template-part', 'footernav'); ?>
      </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="copyright">Copyright of The Washington Art Association, 2017</div>

    </div>
  </div>

</div>
<!-- end main container -->

<?php wp_footer(); ?>
</body>
</html>