<?php
/**
 * Fitnation functions and definitions
 *
 */

/**
 * Enqueue scripts and styles.
 */
function fitnation_scripts() {
	// Add custom fonts, and other css.
	wp_enqueue_style( 'fitnation-components', get_template_directory_uri().'/css/components.css' ) ;
	wp_enqueue_style( 'fitnation-icons', get_template_directory_uri().'/css/icons.css' ) ;
	wp_enqueue_style( 'fitnation-responsee', get_template_directory_uri().'/css/responsee.css' ) ;
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/owl-carousel/owl.carousel.css' ) ;
	wp_enqueue_style( 'owl-carousel-theme', get_template_directory_uri().'/owl-carousel/owl.theme.css' ) ;
	wp_enqueue_style( 'fitnation-template-style', get_template_directory_uri().'/css/template-style.css' ) ;
	wp_enqueue_style( 'fitnation-google-fonts', "https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext" );


	//Add js files
	wp_enqueue_script( 'jQuery', get_template_directory_uri().'/js/jquery-1.8.3.min.js' ,array(),'1.0',true);
	wp_enqueue_script( 'jQuery-ui', get_template_directory_uri().'/js/jquery-ui.min.js' , array(),'1.0', true );
	wp_enqueue_script( 'responsee', get_template_directory_uri().'/js/responsee.js' , array(),'1.0', true );
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri().'/owl-carousel/owl.carousel.min.js' , array(),'1.0', true );
	wp_enqueue_script( 'fitnation-template-script', get_template_directory_uri().'/js/template-scripts.js' , array(),'1.0', true );

}
add_action( 'wp_enqueue_scripts', 'fitnation_scripts' );




/**
 * Sets up theme defaults and registers support for various WordPress features.
*/
function fitnation_setup(){
	//Add features to theme
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'html5');
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-header' );


	register_nav_menus( array(
		'top-social-menu' => __( 'Top Social Menu', 'fitnation' ),
	) );

	register_nav_menus( array(
		'header-menu' => __( 'Header Menu', 'fitnation' ),
	) );
}
add_action( 'after_setup_theme', 'fitnation_setup' );


// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta',40);

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

/**
 * Add customizer options
 */
function fitnation_customize_register( $wp_customize ) {
  $wp_customize->add_setting( 'fn_header_video');
  $wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'fn_header_video', array(
			'label'      => __( 'Header Background Video', 'fitnation' ),
			'section'    => 'header_image',
			'settings'   => 'fn_header_video',
		) ) );


	$wp_customize->add_section( 'frontpage_sections' , array(
	  'title' => __( 'FrontPage Sections', 'fitnation' ),
	) );

  $wp_customize->add_setting( 'fn_header_section_title');
  $wp_customize->add_control( 'fn_header_section_title',array(
  		'label'      => __( 'Header Section Title', 'fitnation' ),
		'section'    => 'frontpage_sections',
  ) );

  $wp_customize->add_setting( 'fn_header_section_description');
  $wp_customize->add_control( 'fn_header_section_description',array(
  		'label'      => __( 'Header Section Description', 'fitnation' ),
		'section'    => 'frontpage_sections',
  ) );

  $wp_customize->add_setting( 'fn_header_section_foreground_image');
  $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fn_header_section_foreground_image', array(
	  'label' => __( 'Header Section Foreground Image', 'fitnation' ),
	  'section' => 'frontpage_sections',
	  'mime_type' => 'image',
	) ) );
}
add_action( 'customize_register', 'fitnation_customize_register' );


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


/**
 * Register our sidebars and widgetized areas.
 *
 */
function fitnation_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer Widgets',
		'id'            => 'footer_widgets',
		'before_widget' => '<div class="s-12 m-6 l-3 xl-5">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="text-white text-strong">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'fitnation_widgets_init' );

include get_template_directory().'/inc/widgets/fitnation-features.php';