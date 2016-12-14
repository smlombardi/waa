<?php get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<!-- start content container -->
<div class="row dmbs-content">



    <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main">

      <?php woocommerce_content(); ?>

    </div>



</div>
<!-- end content container -->

<?php get_footer(); ?>
