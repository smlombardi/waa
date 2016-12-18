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
        </section> <!-- end waa now section -->

        <section class="waa-study">
          <svg xmlns="http://www.w3.org/2000/svg" width="427" height="85" viewBox="0 0 427 85">
            <g fill="none" fill-rule="evenodd">
              <polygon stroke="#221F20" stroke-width=".75" points=".375 84.375 426.025 84.375 426.025 .375 .375 .375"/>
              <g fill="#A21E26" transform="translate(12.41 14.156)">
                <path d="M140.661758,0 L116.988376,50.6254605 L93.7996176,0 L93.0491469,0 L65.0847458,60 L72.7698789,60 L79.8335421,44.0917169 L106.639551,44.0917169 L113.766843,60 L120.196834,60 L127.447025,44.0917169 L154.252163,44.0917169 L161.128426,60 L168.813559,60 L168.813559,59.9982662 L141.411357,0 L140.661758,0 Z M141.036558,14.8212041 L151.627695,38.1257856 L130.258021,38.1257856 L141.036558,14.8212041 Z M93.4248181,14.8212041 L104.015083,38.1257856 L82.6462816,38.1257856 L93.4248181,14.8212041 Z"/>
                <polygon points="78.645 0 59.746 40.994 44.932 0 43.9 0 28.617 41.646 9.189 0 0 0 27.867 60 28.899 60 44.37 19.193 58.621 60 59.746 60 87.458 0"/>
              </g>
              <path fill="#6C6E70" d="M224.711,58.345 C224.711,49.985 220.44,44.806 210.536,40.717 C203.448,37.809 201.903,37.627 200.086,35.446 C199.086,34.083 198.995,32.448 198.995,30.994 C198.995,26.814 202.448,23.179 207.628,23.27 C211.535,23.361 213.807,23.997 216.896,28.54 L222.439,25.178 C219.441,20.18 214.625,17 208.355,17 C199.086,17 192.453,23.27 192.453,31.539 C192.453,38.172 195.724,41.807 203.539,45.169 L210.717,48.259 C215.715,50.53 218.078,54.074 217.987,58.254 C217.805,64.161 213.171,68.25 207.173,68.25 C201.63,68.25 197.269,64.797 196.178,58.618 L189,59.708 C189.999,66.251 196.087,74.883 206.083,74.883 C216.26,74.883 224.711,67.25 224.711,58.345 L224.711,58.345 Z M264.328,23.724 L264.328,17.454 L230.344,17.454 L230.344,23.724 L243.156,23.724 L243.156,74.338 L250.425,74.338 L250.425,23.724 L264.328,23.724 Z M313.85,51.802 L313.85,17.454 L306.672,17.454 L306.672,52.348 C306.672,61.98 300.129,68.25 292.133,68.25 C283.955,68.25 278.412,62.343 278.412,51.984 L278.412,17.454 L270.87,17.454 L270.87,50.712 C270.87,65.978 278.321,75.156 291.497,75.156 C304.309,75.156 313.85,66.16 313.85,51.802 L313.85,51.802 Z M366.735,46.26 C366.735,29.631 355.195,17.454 337.93,17.454 L323.118,17.454 L323.118,74.338 L338.203,74.338 C355.104,74.338 366.735,61.889 366.735,46.26 L366.735,46.26 Z M359.466,45.714 C359.466,58.072 351.742,68.159 336.022,68.159 L330.388,68.159 L330.388,23.542 L336.385,23.542 C350.106,23.542 359.466,33.265 359.466,45.714 L359.466,45.714 Z M410.534,17.454 L402.356,17.454 L388.634,43.079 L375.549,17.454 L367.371,17.454 L385,49.894 L385,74.338 L392.451,74.338 L392.451,49.349 L410.534,17.454 Z"/>
            </g>
          </svg>

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
