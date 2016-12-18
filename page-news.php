<?php 
/* template name: News */

get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<!-- start content container -->
<div class="row dmbs-content">



    <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main">

 

            <h2 class="page-header"><?php the_title() ;?></h2>

            <div class="row">
              <div class="col-md-4">
                 <h3>Dispatches from WAA</h3>

                 <?php
                  $args = array( 'post_type' => 'dispatches', 'posts_per_page' => 3, 'orderby' => 'dispatch_date', 'order' => 'DESC' );
                  $loop = new WP_Query( $args );
                  $post_idx = 0;
                  while ( $loop->have_posts() ) : $loop->the_post(); $post_idx++; ?>

                  <div class="dispatch">
                    <div class="dispatch-date">
                      <?php 
                        $event_date = get_field('dispatch_date');
                        $fancy_date = date('n/d/Y',strtotime($event_date));
                        echo $fancy_date;
                      ?>
                    </div>
                    
                    <div class="dispatch-hed">
                    <?php the_title(); ?>
                    
                    </div>
                    <div class="dispatch-content">
                      <?php the_content(); ?>
                    </div>
                    </div>
                <?php endwhile;  ?>  <!-- end the loop -->
                
                
              </div>
              <div class="col-md-8">
                 <h3>Profiles</h3>

                <?php
                  $args = array( 'post_type' => 'profile', 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'DESC' );
                  $loop = new WP_Query( $args );
                  $post_idx = 0;
                  while ( $loop->have_posts() ) : $loop->the_post(); $post_idx++; ?>

                  <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>

                  <div class="photo-credit">
                  <?php the_field('photo_credit'); ?>
                  </div>

                  <div class="profile-date">
                    <?php 
                      $event_date = get_field('date');
                      $fancy_date = date('F j, Y',strtotime($event_date));
                      echo $fancy_date;
                      ?>
                  </div>

                  <div class="profile-hed"><?php the_title(); ?></div>
                  <div class="profile-dek"><?php the_field('dek'); ?></div>
                  <div class="profile-byline"><?php the_field('byline'); ?></div>

                  <div class="profile-content"><?php the_content(); ?></div>


                <?php endwhile;  ?>  <!-- end the loop -->

              
              
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <a href="#">MORE PAST DISPATCHES</a>
              </div>
              <div class="col-md-8">
                <a href="#">MORE PAST PROFILES</a>
              </div>
            </div>
           

     

    </div>


</div>
<!-- end content container -->

<?php get_footer(); ?>
