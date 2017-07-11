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
            <div class="subhead-boxed">
              <h2>Classes &amp; Workshops  <span class="smaller">For more details on each class, click on title.</span></h2>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <?php

                $args = array(

   'number'     => $number,

   'orderby'   => 'title',

   'order'     => 'ASC',

   'hide_empty' => $hide_empty,

   'include'   => $ids

);

$product_categories = get_terms( 'product_cat', $args );

$count = count($product_categories);

if ( $count > 0 ){

   foreach ( $product_categories as $product_category ) {

       echo '<h4><a href="' . get_term_link( $product_category ) . '">' . $product_category->name . '</a></h4>';

       $args = array(

           'posts_per_page' => -1,

           'tax_query' => array(

              'relation' => 'AND',

               array(

                   'taxonomy' => 'product_cat',

                   'field' => 'slug',

                   // 'terms' => 'white-wines'

                   'terms' => $product_category->slug

                )

           ),

           'post_type' => 'product',

           'orderby' => 'title,'

       );

       $products = new WP_Query( $args );

       echo "<ul>";

       while ( $products->have_posts() ) {

           $products->the_post();

           ?>

               <li>

                   <a href="<?php the_permalink(); ?>">

                       <?php the_title(); ?>
                       <?php the_content(); ?>

                   </a>

               </li>

           <?php

       }

       echo "</ul>";

   }

}

?>
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
