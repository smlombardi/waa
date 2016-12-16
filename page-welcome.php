<?php 
/* template name: Welcome */

get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<!-- start content container -->
<div class="row dmbs-content">



    <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main">

        <?php // theloop
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="row-flex">
          <div class="col-center">
            
            <?php if( have_rows('images') ): ?>
                <ul class="list-unstyled trustee-photos">
                  
                    <?php while ( have_rows('images') ) : the_row();
                      $image = get_sub_field('image');
                    ?>

                  <li>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" class="img-responsive" />
                    <!--<div class="photo-credit">
                      <?php echo $credit; ?>
                    </div>-->
                    <div class="image-caption">
                      <p><?php echo $caption; ?></p>
                    </div>
                  </li>

                  <?php endwhile; ?>

                </ul>

                <?php endif; ?>
          </div>
          <div class="col-right">
              <h2 class="page-header"><?php the_title() ;?></h2>
              <?php the_content(); ?>
          </div>
  
        </div>
      

        <?php endwhile; ?>
        <?php else: ?>

            <?php get_404_template(); ?>

        <?php endif; ?>

    </div>
      <div class="row-flex bottom-credit">
          <div class="photo-credit">
            <?php the_field('credit'); ?>
          </div>
        </div>

</div>
<!-- end content container -->

<?php get_footer(); ?>
