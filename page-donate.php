<?php
/* template name: Donate */

get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<!-- start content container -->
<div class="row dmbs-content">

    <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main">

        <?php // theloop
        if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h2 class="page-header"><?php the_title() ;?></h2>

        <div class="row">
            <div class="col-md-4">
                <?php the_field('left_column'); ?>
                <?php
                  $image = get_field('left_column_image');
                  echo '<img class="img-responsive left-column-image" src="'. $image['url'] . '">';
                ?>

            </div>

            <div class="col-md-8">
              <?php the_field('right_column'); ?>
            </div>
          </div>



        </div>


        <?php endwhile; ?>
        <?php else: ?>

            <?php get_404_template(); ?>

        <?php endif; ?>

    </div>



</div>
<!-- end content container -->

<?php get_footer(); ?>
