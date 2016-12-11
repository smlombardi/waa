<?php global $dm_settings; ?>

<div class="container dmbs-container">

<?php if ($dm_settings['show_header'] != 0) : ?>

    <div class="row dmbs-header">

        <div class="col-md-9">
            <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/waa-logo.png">
        </div>
        <div class="col-md-3">
            <?php get_search_form(); ?>
            <ul class="list-inline">
                <li>f</li>
                <li>b</li>
                <li>c</li>
                <li>s</li>
            </ul>
        </div>

       

    </div>

<?php endif; ?>