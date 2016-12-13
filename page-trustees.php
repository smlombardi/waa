<?php 
/* template name: Trustees */
get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<div class="row">
  <div class="col-md-12">
    <h2 class="page-header"><?php the_title() ;?></h2>
  </div>
</div>

<!-- start content container -->
<div class=" dmbs-content">

    

    <div class="dmbs-main trustees">

        <?php // theloop
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="row-flex">
              <div class="col-left trustee-list">
                <?php the_field('trustees'); ?>
              </div>
              
              <div class="col-main"><?php the_content(); ?></div>
              
              <div class="col-right">
                <?php if( have_rows('photos') ): ?>
                <ul class="list-unstyled trustee-photos">
                  
                    <?php while ( have_rows('photos') ) : the_row();
                      $image = get_sub_field('image');
                      $credit = get_sub_field('photo_credit');
                      $caption = get_sub_field('caption');
                    ?>

                  <li>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" class="img-responsive" />
                    <div class="photo-credit">
                      <?php echo $credit; ?>
                    </div>
                    <div class="image-caption">
                      <p><?php echo $caption; ?></p>
                    </div>
                  </li>

                  <?php endwhile; ?>

                </ul>

                <?php endif; ?>
                <div class="trustee-pdf-downloads">
                  <h3>DOWNLOAD PDF FILES:</h3>
                  <?php the_field('pdf_downloads'); ?>
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
