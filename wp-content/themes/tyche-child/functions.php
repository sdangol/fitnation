<?php

require_once(dirname(__FILE__).'/inc/libraries/widgets/widget-tyche-products/class-widget-tyche-products.php');
require_once(dirname(__FILE__).'/inc/libraries/widgets/widget-tyche-recent-posts/class-widget-tyche-recent-posts.php');

function enqueue_parent_styles() {
  /**
	 * Enqueue styles
	 */
	wp_enqueue_style( 'parent-google-fonts', '//fonts.googleapis.com/css?family=Karla:400,700' );
	wp_enqueue_style( 'parent-font-awesome', get_template_directory_uri() . '/assets/vendors/fontawesome/font-awesome.min.css' );
	wp_enqueue_style( 'parent-owlCarousel', get_template_directory_uri() . '/assets/vendors/owl-carousel/owl.carousel.min.css' );
	wp_enqueue_style( 'parent-owlCarousel-theme', get_template_directory_uri() . '/assets/vendors/owl-carousel/owl.theme.default.css' );
	wp_enqueue_style( 'dashicons' );
	wp_enqueue_style( 'parent-tyche', get_template_directory_uri().'/style.css' );
	wp_enqueue_style( 'tyche-child', get_stylesheet_directory_uri().'/style.css' );

	$scheme = get_theme_mod( 'tyche_color_scheme', 'red' );
	if ( 'red' !== $scheme ) {
		wp_enqueue_style( 'tyche-style', get_template_directory_uri() . '/assets/css/style-' . sanitize_key( $scheme ) . '.css' );
	} else {
		wp_enqueue_style( 'tyche-style', get_template_directory_uri() . '/assets/css/style.css' );
	}

	$color = get_theme_mod( 'header_textcolor', '#ffffff' );
	if ( '#ffffff' === $color ) {
		$custom_css = '
              .site-header .site-title{
                  color: #" . esc_html( $color ) . ";
              }';
		wp_add_inline_style( 'tyche-style', $custom_css );
	}
}
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );


/**
 * Sets up theme defaults and registers support for various WordPress features.
*/
function fitnation_setup(){
	register_nav_menus( array(
		'top-social-menu' => __( 'Top Social Menu', 'fitnation' ),
	) );
}
add_action( 'after_setup_theme', 'fitnation_setup' );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta',40);


// hook in late to make sure the parent theme's registration 
// has fired so you can undo it. Otherwise the parent will simply
// enqueue its script anyway.
function fitnation_script_fix()
{
    wp_dequeue_script('tyche-scripts');
    wp_enqueue_script(
			'tyche-scripts-child',
			get_stylesheet_directory_uri() . '/assets/js/functions.js',
			array(
				'jquery',
				'jquery-zoom',
				'owlCarousel',
			),
			'',
			false
		);
}
add_action('wp_enqueue_scripts', 'fitnation_script_fix', 100);