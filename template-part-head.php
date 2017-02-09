<?php global $dm_settings; ?>

<div class="container dmbs-container">

<?php if ($dm_settings['show_header'] != 0) : ?>

    <div class="waa-header">

        <div class="header-logo">
            <a href="/"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/waa-logo.png"></a>
        </div>
        <div class="header-right">
            <?php get_search_form(); ?>
            <div>
                <label>Follow Us</label>
                <!--<ul class="social-links">
                    <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-pinterest.png"></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-tumblr.png"></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-linkedin.png"></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-facebook.png"></li>    
                </ul>-->
                <ul class="social-links">
                    <li><a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                    <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                    <li><a href=""><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
     
                </ul>
            </div>
        </div>

       

    </div>

<?php endif; ?>