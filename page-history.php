<?php 
/* template name: History */

get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<!-- start content container -->
<div class="row dmbs-content">

    <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main">

        <?php // theloop
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <h2 class="page-header"><?php the_title() ;?></h2>

        <div class="row">
            <div class="col-md-4 left-column">
                <?php the_field('left_column'); ?>
                <?php 
                  $image = get_field('trustees_image'); 
                  echo '<img class="img-responsive" src="'. $image['url'] . '">';
                  echo '<div class="image-caption">' . $image['caption'] . '</div>';
                ?>

                <?php 
                  $image = get_field('former_location_image'); 
                  echo '<img class="img-responsive image-space-top" src="'. $image['url'] . '">';
                  echo '<div class="image-caption">' . $image['caption'] . '</div>';
                ?>
            </div>

            <div class="col-md-4 middle-column">
              <?php the_field('middle_column'); ?>
            </div>
            <div class="col-md-4 right-column">
              <?php the_field('right_column'); ?>
              <?php 
                  $image = get_field('new_location_image'); 
                  echo '<img class="img-responsive image-space-top" src="'. $image['url'] . '">';
                  echo '<div class="image-caption">' . $image['caption'] . '</div>';
                ?>
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
