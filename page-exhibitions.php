<?php 
/* template name: Exhibitions */

get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<!-- start content container -->
<div class="row dmbs-content">



    <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main">

        <?php // theloop
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="row">
          <div class="col-md-12"><h2 class="page-header"><?php the_title(); ?></h2></div>
        </div>

        <div class="row-flex">
            
            <?php if( have_rows('exhibition_tiles') ): ?>
                <div class="exhibition-tiles">
                  
                    <?php while ( have_rows('exhibition_tiles') ) : the_row();
                      $title = get_sub_field('title');
                      $subtitle = get_sub_field('subtitle');
                      $link = get_sub_field('page_link');
                      $image = get_sub_field('image');
                    ?>
                  
                  <div class="tile" style="background-image: url(<?php echo $image['url']; ?>)">     
                    
                      <div class="exhibition-title">
                        <a href="<?php echo $link; ?>"><?php echo $title; ?></a>
                      </div>
                      <div class="exhibition-subtitle">
                        <?php echo $subtitle; ?>
                      </div>
                    
                  </div>

                  <?php endwhile; ?>

                </div>

                <?php endif; ?>


  
  
        </div>
        <div class="row row-bottom">
          <div class="col-md-6 caption"><?php the_content(); ?></div>
          <div class="col-md-6">
              <div class="opportunities">
                <div class="opportunities-title">opportunities</div>
    There are many opportunities to submit to shows throughout the year. For upcoming submissions and to download Submissions Forms, <a href="/exhibitions/opportunities-to-submit/">CLICK HERE</a>
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
