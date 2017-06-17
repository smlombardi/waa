<?php
/* template name: Classes */

get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<!-- start content container -->
<div class="row dmbs-content">



    <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main">



        <?php // theloop
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="row">
          <div class="col-md-12">
            <h2 class="page-header"><?php the_title(); ?></h2>

          </div>
        </div>
        <div class="row">
          <div class="col-md-10 main-content">
            <?php the_content(); ?>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="tbd">calendar tbd</div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="subhead-boxed">
              <h2>Classes &amp; Workshops  <span class="smaller">For more details on each class, click on title.</span></h2>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="tbd">class listing tbd</div>
          </div>
        </div>

        <div class="row-flex lower-text">
          <div class="lower-text-left">
            <?php
              $image = get_field('lower_text_image');
              echo '<img class="img-responsive" src="'. $image['url'] . '">';
            ?>
          </div>
          <div class="lower-text-right">
            <?php the_field('lower_text'); ?>
          </div>
        </div>


        <div class="row">
          <div class="col-md-12">
            <div class="subhead-boxed">
              <h2>Films &amp; Lectures  <span class="smaller">For more details on each program, click on title.</span></h2>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="tbd">films and lectures tbd</div>
          </div>
        </div>


        <div class="row row-bottom">
          <div class="col-md-8 caption">
            <p>Whether you wish to explore a new discipline, become more adept with a particular medium, or take an already substantial creative trajectory to the next level, the
Washington Art Association &amp; Gallery offers high-quality, personalized instruction that will reward your efforts.
We&nbsp;welcome all ages and levels of experience.</p>
          </div>
          <div class="col-md-4">
              <div class="opportunities">
                <div class="opportunities-title">opportunities</div>
                  Students of WAA classes receive a 10% discount on art supplies at the Washington Supply Company. 860.868.7395
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
