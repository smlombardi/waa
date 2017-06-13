<?php 
/* template name: Faculty */

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
            <div class="col-md-12">
                <?php the_content(); ?>
              
            </div>

           
            
        </div>
          

        <?php 
        endwhile; 
        ?>

        <?php else: ?>

            <?php get_404_template(); ?>

        <?php endif; ?>
        <div class="faculty-grid">
        <?php
            $args=array(
            'post_type' => 'faculty',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'caller_get_posts'=> 1,
            'orderby' => 'wpse_last_word',
            'order' => 'ASC'
            );
            $my_query = null;
            $my_query = new WP_Query($args);
            if( $my_query->have_posts() ) {
                echo '';
            $i = 0;
            while ($my_query->have_posts()) : $my_query->the_post();
                if($i % 3 == 0) { ?> 
                <div class="row">
            <?php
            }
            ?>
            <div class="col-md-4">
              <div class="faculty-member">
                <div class="faculty-photo">
                  <?php the_post_thumbnail( 'full' ); ?>
                  <div class="photo-credit">
                    <?php the_field('photo_credit'); ?>
                  </div>
                </div>
                  <div class="faculty-name"><?php the_title(); ?></div>
                  <div class="faculty-description"><?php the_content(); ?></div>
                  <?php if( get_field('web_site') ): ?>
                    <div class="faculty-website">
                      Web Site: <a href="http://<?php the_field('web_site'); ?>"><?php the_field('web_site'); ?></a>
                    </div>
                  <?php endif; ?>
                
                </div>
            </div>

            <?php $i++; 
            if($i != 0 && $i % 3 == 0) { ?>
                </div><!--/.row-->
                <div class="border"></div>

            <?php
            } ?>

            <?php  
            endwhile;
            }
            wp_reset_query();
            ?>
            </div>

    </div>

 

</div>
<!-- end content container -->

<?php get_footer(); ?>
