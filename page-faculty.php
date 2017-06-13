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
                <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>

                <p><?php the_content(); ?></p>
                <p><a href="<?php the_field('artist_link'); ?>"><?php the_field('artist_name'); ?></a></p>
                <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><img src="<?php the_field('artist_photo'); ?>" alt="" class="img-responsive" /></a></p>
            </div>

            <?php $i++; 
            if($i != 0 && $i % 3 == 0) { ?>
                </div><!--/.row-->
                <div class="clearfix"></div>

            <?php
            } ?>

            <?php  
            endwhile;
            }
            wp_reset_query();
            ?>

    </div>

 

</div>
<!-- end content container -->

<?php get_footer(); ?>
