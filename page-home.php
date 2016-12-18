<?php get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<!-- start content container -->
<div class="row dmbs-content">


<?php putRevSlider("homepage-slider", "homepage") ?>



    <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main">

     

        <?php // theloop
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


        <section class="waa-now">
            <image class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/waa_now.svg">
            <?php the_field('waa_now_title'); ?>

            <div>
              <?php if( have_rows('waa_now_items') ): ?>
                <div class="list-unstyled now-items">
                  
                    <?php while ( have_rows('waa_now_items') ) : the_row();
                      $image = get_sub_field('image');
                      $type = get_sub_field('type');
                      $dates = get_sub_field('dates');
                      $content = get_sub_field('content');
                    ?>

                  <div>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" class="img-responsive" />
                    <svg class="waa-small-gray" xmlns="http://www.w3.org/2000/svg" width="104" height="39" viewBox="0 0 104 39">
                      <path fill="#6C6E70" fill-rdive="evenodd" d="M86.2905,0.8364375 L71.4475,32.7524375 L56.9075,0.8364375 L56.4375,0.8364375 L39.2175,37.8604375 L44.0375,37.8604375 L48.1515,28.6334375 L64.9585,28.6334375 L68.9545,37.8604375 L73.7745,37.8604375 L73.8915,37.8604375 L78.0045,28.6334375 L94.8125,28.6334375 L98.8085,37.8604375 L103.6275,37.8604375 L86.7615,0.8364375 L86.2905,0.8364375 Z M86.5265,10.1804375 L93.1665,24.8724375 L79.7675,24.8724375 L86.5265,10.1804375 Z M56.6725,10.1804375 L63.3125,24.8724375 L49.9145,24.8724375 L56.6725,10.1804375 Z M25.7615,0.8954375 L16.1815,27.1644375 L6.1315,1.1294375 L0.3725,1.1294375 L15.7115,38.7414375 L16.3575,38.7414375 L26.0545,13.0004375 L34.9875,38.7414375 L35.6925,38.7414375 L50.8545,1.1894375 L45.3305,1.1894375 L35.6925,26.7524375 L26.4075,0.8954375 L25.7615,0.8954375 Z"/>
                    </svg>
                    <div class="type"><?php echo $type; ?></div>
                    <div class="date"><?php echo $dates; ?></div>
                    <div class="content"><?php echo $content; ?></div>


                    <div class="image-caption">
                      <p><?php echo $caption; ?></p>
                    </div>
                  </div>

                  <?php endwhile; ?>

                </div>

              <?php endif; ?>
            </div>
        </section> <!-- end waa now section -->

        <section class="waa-study">
          <image class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/waa_study.svg">
          

          <div class="waa-study-box">
            <div class="box-header">
              lectures, film, Art Demonstrations &amp; field trips
            </div>
            <div class="box-content">
             
              <div class="box-content-row">
                <div class="col-left">
                  <div>
                    <h3>Lectures</h3>
                    <p>Throughout the year WAA is proud to present cultural lectures often in conjunction with the current exhibition.</p>
                  </div>

                 <div class="study-item">
                    <div class="si-left"><?php the_field('lecture_content'); ?></div>
                    <?php 
                      $bgimage = get_field('lecture_image');
                      echo '<div class="si-right" style="background-image: url(' . $bgimage['url'] . ')"></div>'; 
                      ?>
                  </div>


                </div>

                <div class="col-right">
                  <div>
                    <h3>Art DemonstrationS</h3>
                    <p>All disciplines of the visual arts are represented with a variety of demonstrations by WAA faculty.</p>
                  </div>

                  <div class="study-item">
                    <div class="si-left"><?php the_field('art_demos_content'); ?></div>
                    <?php 
                      $bgimage = get_field('art_demos_image');
                      echo '<div class="si-right" style="background-image: url(' . $bgimage['url'] . ')"></div>'; 
                      ?>
                  </div>

                </div>
              </div>

              <div class="box-content-row second-row">
                <div class="col-left">
                  <div>
                    <h3>Films</h3>
                    <p>Throughout the year WAA is proud to present documentaries of artists and their work.</p>
                  </div>
                  <div class="study-item">
                    <div class="si-left"><?php the_field('films_content'); ?></div>
                    <?php 
                      $bgimage = get_field('films_image');
                      echo '<div class="si-right" style="background-image: url(' . $bgimage['url'] . ')"></div>'; 
                      ?>
                  </div>
                </div>

                <div class="col-right">
                  <div>
                    <h3>Field Trips</h3>
                    <p>Join WAA for a variety of Art Field Trips to the Met, Met Breuer, MoMA, The Whitney, as well as to  ne local museums.</p>
                  </div>

                  <div class="study-item">
                    <div class="si-left"><?php the_field('fieldtrips'); ?></div>
                    <?php 
                      $bgimage = get_field('ft_image');
                      echo '<div class="si-right" style="background-image: url(' . $bgimage['url'] . ')"></div>'; 
                      ?>
                  </div>

                  
                  
                </div>
              </div>



            </div>

          </div>


        </section>

      

        <?php endwhile; ?>
        <?php else: ?>

            <?php get_404_template(); ?>

        <?php endif; ?>

    </div>

  

</div>
<!-- end content container -->

<?php get_footer(); ?>
