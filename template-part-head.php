<?php global $dm_settings; ?>

<div class="container dmbs-container">

<?php if ($dm_settings['show_header'] != 0) : ?>

    <div class="waa-header">

        <div class="header-logo">
            <a href="/"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/waa-logo.png"></a>
        </div>
        <div class="header-right">
            <?php get_search_form(); ?>
            <label>Follow Us</label>
            <ul class="social-links">
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-pinterest.png"></li>
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-tumblr.png"></li>
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-linkedin.png"></li>
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-facebook.png"></li>
               
            </ul>
        </div>

       

    </div>

<?php endif; ?>