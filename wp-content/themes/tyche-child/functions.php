<?php

require_once(dirname(__FILE__).'/inc/libraries/widgets/widget-tyche-products/class-widget-tyche-products.php');
require_once(dirname(__FILE__).'/inc/libraries/widgets/widget-tyche-recent-posts/class-widget-tyche-recent-posts.php');


/**
 * Register fitnation posts
 */
function register_fitnation_posts(){

	register_post_type('video',['labels' => ['name' => 'Videos',
		'singular_name' => 'Video',
		'add_new' => 'Add Video',
		'add_new_item' => 'Add New Video',
		'edit_item' => 'Edit Video',
		'view_item' => 'View Video',
		'not_found' => 'No Video Found'],
		'public' => true,
		'supports' => ['title','editor','thumbnail','author','excerpt','post-formats'],
		'show_in_rest' => true,
		'has_archive' => true,
	]);

}
add_action('init','register_fitnation_posts');


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


	wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri().'/assets/js/custom.js',array(),false,true );

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
	add_theme_support( 'post-formats', array( 'video' ) );
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


function fitnation_customize_register( $wp_customize ) {
  $wp_customize->add_setting( 'fn_header_video');
  $wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'fn_header_video', array(
			'label'      => __( 'Header Background Video', 'fitnation' ),
			'section'    => 'header_image',
			'settings'   => 'fn_header_video',
		) ) );
}
add_action( 'customize_register', 'fitnation_customize_register' );

/**
 * Register our sidebars and widgetized areas.
 *
 */
function fitnation_widgets_init() {

	register_sidebar( array(
		'name'          => 'Blog Page Widget',
		'id'            => 'blog_page_widget',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'fitnation_widgets_init' );

/*
 * Remove password strength check.
 */
function fitnation_remove_password_strength() {
    wp_dequeue_script( 'wc-password-strength-meter' );
}
add_action( 'wp_print_scripts', 'fitnation_remove_password_strength', 10 );


function fitnation_new_user_approve_autologout(){
    if ( is_user_logged_in() ) {
        $current_user = wp_get_current_user();
        $user_id = $current_user->ID;

        if ( get_user_meta($user_id, 'pw_user_status', true )  === 'approved' ){ $approved = true; }
		else{ $approved = false; }

		if ( $approved ){ 
			return $redirect_url;
		}
        else{ //when user not approved yet, log them out
			wp_logout();
            return add_query_arg( 'approved', 'false', get_permalink( get_option('woocommerce_myaccount_page_id') ) );
        }
    }
}
add_action('woocommerce_registration_redirect', 'fitnation_new_user_approve_autologout', 2);


function fitnation_new_user_approve_registration_message(){

        if( isset($_REQUEST['approved']) ){
                $approved = $_REQUEST['approved'];
                if ($approved == 'false')  echo '<p class="registration successful">Registration successful! You will be notified upon approval of your account.</p>';
                else echo $not_approved_message;
        }
}
add_action('woocommerce_before_customer_login_form', 'fitnation_new_user_approve_registration_message', 2);


function fitnation_catalog_mode(){
	if (!is_user_logged_in()) return true;
}
add_filter('ywctm_applied_roles','fitnation_catalog_mode');


function fitnation_theme_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }
  
    return $title;
}
 
add_filter( 'get_the_archive_title', 'fitnation_theme_archive_title' );