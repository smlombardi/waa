<?php get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<!-- start content container -->
<div class="row dmbs-content">


<?php putRevSlider("homepage-slider", "homepage") ?>



    <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main">

     

        <?php // theloop
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


        <div class="waa-now">
            <svg xmlns="http://www.w3.org/2000/svg" width="392" height="85" viewBox="0 0 392 85">
                <g fill="none" fill-rule="evenodd">
                    <path fill="#6C6E70" d="M239.765,15.7818 L232.496,15.7818 L232.496,57.9448 L189.697,12.3288 L189.697,72.6658 L196.966,72.6658 L196.966,31.4108 L239.765,75.8458 L239.765,15.7818 Z M304.462,43.9508 C304.462,27.7768 291.105,14.6918 274.839,14.6918 C258.846,14.6918 245.671,27.9578 245.671,44.1328 C245.671,60.6708 258.21,73.3018 274.839,73.3018 L276.202,73.3018 C291.65,73.3018 304.462,59.3988 304.462,43.9508 Z M297.011,44.2238 C297.011,57.0358 286.198,66.1228 275.112,66.1228 C262.299,66.1228 252.94,56.1278 252.94,44.8598 C252.94,32.1378 261.845,22.1428 275.021,22.1428 C287.924,22.1428 297.011,32.4108 297.011,44.2238 Z M379.246,15.9638 L370.705,15.9638 L355.802,55.4908 L341.445,15.5088 L340.446,15.5088 L325.634,56.1278 L310.096,15.8728 L301.19,15.8728 L324.907,74.0288 L325.907,74.0288 L340.9,34.2278 L354.712,74.0288 L355.802,74.0288 L379.246,15.9638 Z"/>
                    <polygon stroke="#221F20" stroke-width=".75" points=".375 84.375 391.625 84.375 391.625 .375 .375 .375"/>
                    <g fill="#A21E26" transform="translate(12 13)">
                    <path d="M140.661758,0 L116.988376,50.6254605 L93.7996176,0 L93.0491469,0 L65.0847458,60 L72.7698789,60 L79.8335421,44.0917169 L106.639551,44.0917169 L113.766843,60 L120.196834,60 L127.447025,44.0917169 L154.252163,44.0917169 L161.128426,60 L168.813559,60 L168.813559,59.9982662 L141.411357,0 L140.661758,0 Z M141.036558,14.8212041 L151.627695,38.1257856 L130.258021,38.1257856 L141.036558,14.8212041 Z M93.4248181,14.8212041 L104.015083,38.1257856 L82.6462816,38.1257856 L93.4248181,14.8212041 Z"/>
                    <polygon points="78.645 0 59.746 40.994 44.932 0 43.9 0 28.617 41.646 9.189 0 0 0 27.867 60 28.899 60 44.37 19.193 58.621 60 59.746 60 87.458 0"/>
                    </g>
                </g>
            </svg>
            <?php the_field('waa_now_title'); ?>

            <div>
              <?php if( have_rows('waa_now_items') ): ?>
                <ul class="list-unstyled now-items">
                  
                    <?php while ( have_rows('waa_now_items') ) : the_row();
                      $image = get_sub_field('image');
                      $type = get_sub_field('type');
                      $dates = get_sub_field('dates');
                      $content = get_sub_field('content');
                    ?>

                  <li>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" class="img-responsive" />
                    <svg class="waa-small-gray" xmlns="http://www.w3.org/2000/svg" width="104" height="39" viewBox="0 0 104 39">
                      <path fill="#6C6E70" fill-rule="evenodd" d="M86.2905,0.8364375 L71.4475,32.7524375 L56.9075,0.8364375 L56.4375,0.8364375 L39.2175,37.8604375 L44.0375,37.8604375 L48.1515,28.6334375 L64.9585,28.6334375 L68.9545,37.8604375 L73.7745,37.8604375 L73.8915,37.8604375 L78.0045,28.6334375 L94.8125,28.6334375 L98.8085,37.8604375 L103.6275,37.8604375 L86.7615,0.8364375 L86.2905,0.8364375 Z M86.5265,10.1804375 L93.1665,24.8724375 L79.7675,24.8724375 L86.5265,10.1804375 Z M56.6725,10.1804375 L63.3125,24.8724375 L49.9145,24.8724375 L56.6725,10.1804375 Z M25.7615,0.8954375 L16.1815,27.1644375 L6.1315,1.1294375 L0.3725,1.1294375 L15.7115,38.7414375 L16.3575,38.7414375 L26.0545,13.0004375 L34.9875,38.7414375 L35.6925,38.7414375 L50.8545,1.1894375 L45.3305,1.1894375 L35.6925,26.7524375 L26.4075,0.8954375 L25.7615,0.8954375 Z"/>
                    </svg>
                    <div class="type"><?php echo $type; ?></div>
                    <div class="date"><?php echo $dates; ?></div>
                    <div class="content"><?php echo $content; ?></div>


                    <div class="image-caption">
                      <p><?php echo $caption; ?></p>
                    </div>
                  </li>

                  <?php endwhile; ?>

                </ul>

              <?php endif; ?>
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
