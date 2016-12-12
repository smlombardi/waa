    <div class="dmbs-footer row">

        <div class="col-md-12">
            <hr class="footer-rule">
            <div class="row">
                <?php if ( is_active_sidebar( 'footer_1' ) ) : ?>
                    <div id="footer_widget_1" class="col-md-3" role="complementary">
                        <?php dynamic_sidebar( 'footer_1' ); ?>
                    </div><!-- #primary-sidebar -->
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'footer_2' ) ) : ?>
                    <div id="footer_widget_2" class="col-md-3" role="complementary">
                        <?php dynamic_sidebar( 'footer_2' ); ?>
                    </div><!-- #primary-sidebar -->
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'footer_3' ) ) : ?>
                    <div id="footer_widget_3" class="col-md-3" role="complementary">
                        <?php dynamic_sidebar( 'footer_3' ); ?>
                    </div><!-- #primary-sidebar -->
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'footer_4' ) ) : ?>
                    <div id="footer_widget_4" class="col-md-3" role="complementary">
                        <?php dynamic_sidebar( 'footer_4' ); ?>
                    </div><!-- #primary-sidebar -->
                <?php endif; ?></div>
            
            <?php get_template_part('template-part', 'footernav'); ?>
                </div>
        </div>

</div>
<!-- end main container -->

<?php wp_footer(); ?>
</body>
</html>