<?php

/*
 * wp_dequeue bootstrap.css of the parent DevDemBootStrap3 theme
*/

function dmbs_dequeue_enqueue_scripts() {

    wp_dequeue_style( 'bootstrap.css' );


}
add_action( 'wp_enqueue_scripts', 'dmbs_dequeue_enqueue_scripts', 100 );

function wpb_add_google_fonts() {

wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i', false );
wp_enqueue_style( 'wpb-fontawesome', '//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css', false );
}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

/**
 * Add HTML5 theme support.
 */
function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );


/**
 * Register our sidebars and widgetized areas.
 *
 */
function footer_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer 1',
		'id'            => 'footer_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Footer 2',
		'id'            => 'footer_2',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Footer 3',
		'id'            => 'footer_3',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Footer 4',
		'id'            => 'footer_4',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'footer_widgets_init' );

//Page Slug Body Class
function add_slug_body_class( $classes ) {
	global $post;
		if ( isset( $post ) ) {
		$classes[] = $post->post_type . '-' . $post->post_name;
		}
	return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

function wpse_custom_excerpts($limit) {
    return wp_trim_words(get_the_excerpt(), $limit, '&hellip;&nbsp;' . '<a href="'. esc_url( get_permalink() ) . '">'  . __( 'More', 'wpse' ) . '</a>'. '&nbsp;&raquo;');
}

/**
 * Order posts by the last word in the post_title.
 * Activated when orderby is 'wpse_last_word'
 * @link https://wordpress.stackexchange.com/a/198624/26350
 */
add_filter( 'posts_orderby', function( $orderby, \WP_Query $q )
{
    if( 'wpse_last_word' === $q->get( 'orderby' ) && $get_order =  $q->get( 'order' ) )
    {
        if( in_array( strtoupper( $get_order ), ['ASC', 'DESC'] ) )
        {
            global $wpdb;
            $orderby = " SUBSTRING_INDEX( {$wpdb->posts}.post_title, ' ', -1 ) " . $get_order;
        }
    }
    return $orderby;
}, PHP_INT_MAX, 2 );


/////// CUSTOMIZE WOOCOMMERCE SINGLE PRODUCT PAGE  /////////////

// remove stuff with hooks
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);

remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);

// button
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );    // 2.1 +

function woo_custom_cart_button_text() {
  return __( 'REGISTER', 'woocommerce' );
}

// custom hooks
function sml_product_description() {
  $content = get_the_content();
  $content = apply_filters( 'the_content', $content );
  echo('<div class="description">' . $content . '</div>');
}
add_action( 'woocommerce_single_product_summary', 'sml_product_description', 7 );

function sml_instructor() {
  $instructor = get_field('instructor');
  echo('<p class="instructor">with <b>' . $instructor . '</b></p>');
}
add_action( 'woocommerce_single_product_summary', 'sml_instructor', 6 );
