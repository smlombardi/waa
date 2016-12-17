<?php 
/* template name: Press */
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

    

    <div class="dmbs-main press">

        <?php // theloop
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="row">
          <!-- in the news, lwft side of page -->
          <div class="col-md-8">
              <div class="row">
                <div class="col-md-6">
                  <h3>In the News</h3>
                </div>
              </div>
              <!-- row with the 2 news items -->
              <div class="row">
                <?php
                  $args = array( 'post_type' => 'news_item', 'posts_per_page' => 2, 'orderby' => 'date', 'order' => 'DESC' );
                  $loop = new WP_Query( $args );
                  $post_idx = 0;
                  while ( $loop->have_posts() ) : $loop->the_post(); $post_idx++; ?>
                  <div class="col-md-6">
                    

                    <div class="news-item-block">
                      <?php 
                        $newsImage = get_field('lede_image');
                      ?>
                      <div class="news-image">
                      <img src="<?php echo $newsImage['url']; ?>" alt="<?php echo $newsImage['alt']; ?>" class="img-responsive" />
                      <div class="photo-credit"><?php echo $newsImage['caption']; ?></div>
                      </div>


                      <div class="news-source"><?php the_field('news_source'); ?></div>
                      <div class="news-date">
                        <?php 
                          $event_date = get_field('news_item_date');
                          $fancy_date = date('F j, Y',strtotime($event_date));
                          echo $fancy_date;
                          ?>
                      </div>
                      <div class="news-content">
                        <?php
                          $newsContent = get_the_content();
                          $newsTitle = get_the_title();
                        ?>
                      
                        <b><?php echo $newsTitle; ?>:</b> <?php echo $newsContent; ?>
                        <div class="byline"><?php the_field('byline'); ?></div>
                      
                      </div>

                      <div class="news-link"><a href="">Read More</a> &raquo;</div>
                    </div>
                  </div>
                <?php endwhile;  ?>  <!-- end the loop -->
      
              </div> <!-- end row with news item loop -->

              <!--<div class="row news-past-link">
                <div class="col-md-6 col-md-offset-6">
                <a href="">PAST NEWS</a> Archive
                </div>
              </div>-->


   
          </div> <!-- end in the news/left side of page -->

          <!-- right side of page -->
          <div class="col-md-4">
          
            <h3>Press Releases</h3>
             <div class="news-item-block">
               <?php 
                $args = array( 'post_type' => 'press_release', 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'DESC' );
                  $loop = new WP_Query( $args );
                  $post_idx = 0;
                  while ( $loop->have_posts() ) : $loop->the_post(); $post_idx++; ?>

             <div class="press-release-block">
                  <div class="date">
                    <?php 
                          $event_date = get_field('release_date');
                          $fancy_date = date('n/d/Y',strtotime($event_date));
                          echo $fancy_date;
                          ?>
                  </div>
                 <h4><?php the_title(); ?></h4>
                 <?php echo wpse_custom_excerpts(30); ?>

             </div>


               
                <?php endwhile;  ?>  <!-- end the loop -->
            
          </div>
          
          
          </div> <!-- end right side of page -->
          
        </div>

        <div class="row">
          <div class="col-md-8">
              <div class="row news-past-link">
              <div class="col-md-6 col-md-offset-6">
              <a href="">PAST NEWS</a> Archive
              </div>
            </div>
          </div>
          <div class="col-md-4">
           <div class="news-past-link">
              <a href="">PAST PRESS RELEASES</a> Archive
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
