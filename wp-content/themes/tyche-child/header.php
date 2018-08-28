<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tyche
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<?php
	/**
	 * Enable / Disable the top bar
	 */
	if ( get_theme_mod( 'tyche_enable_top_bar', true ) ) :
		get_template_part( 'template-parts/top-header' );
	endif;
	?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding container">
			<div class="row">
				<div class="header-logo">
					<a href="<?php echo site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/fitnation-logo.png'; ?>"></a>
				</div>
				<div class="col-md-12">
					<h6 class="site-tagline">You Train We deliver</h6>
				</div>

				<?php /** if ( get_theme_mod( 'tyche_show_banner', false ) ) : ?>
					<div class="col-sm-8 header-banner">
						<?php
						$banner = get_theme_mod( 'tyche_banner_type', 'image' );
						get_template_part( 'template-parts/banner/banner', $banner );
						?>
					</div>
				<?php endif; **/?>
			</div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php
						wp_nav_menu(
							array(
								'menu'           => 'primary',
								'theme_location' => 'primary',
								'depth'          => 10,
								'container'      => '',
								'menu_id'        => 'desktop-menu',
								'menu_class'     => 'sf-menu text-center',
								'fallback_cb'    => 'Tyche_Navwalker::fallback',
								'walker'         => new Tyche_Navwalker(),
							)
						);
						?>
						<!-- /// Mobile Menu Trigger //////// -->
						<a href="#" id="mobile-menu-trigger"> <i class="fa fa-bars"></i> </a>
						<!-- end #mobile-menu-trigger -->
					</div>
				</div>
			</div>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<?php
	if (is_front_page()):
	$header_video = get_theme_mod('fn_header_video');
	?>
	<div class="container">
		<div class="video-container">
			<video id="bgvid" playsinline autoplay loop>
			  <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
			<source src="<?php echo $header_video; ?>" type="video/mp4">
			</video>
			<div class="video-controls">
				<button type="button" id="bgvid-pausebtn"><i class='fa fa-pause'></i></button>
				<button type="button" id="bgvid-fullbtn"><i class='fa fa-arrows-alt'></i></button>
			</div>
		</div>
	<?php endif; ?>
	<?php
	/**
	 * Enable / Disable the main slider
	 */
	$show_on_front = get_option( 'show_on_front' );
	if ( get_theme_mod( 'tyche_enable_main_slider', true ) && is_front_page() && 'posts' !== $show_on_front ) :
		get_template_part( 'template-parts/main-slider' );
	endif;
	?>
	</div>
	<div class="site-content">
