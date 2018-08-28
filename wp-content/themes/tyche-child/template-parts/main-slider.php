<?php
/**
 * Template part for displaying main slider
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tyche
 */

$images = get_theme_mod( 'tyche_slider_bg', array() );

if ( ! class_exists( 'Kirki' ) ) {
	return;
}

?>
<!-- Main Slider -->
<section class="main-slider">
	<div class="main-slider-bar hidden-xs">
		<div class="container">
			<ul class="main-slider-info">
				<li class="col-sm-4 col-xs-12">
					<div class="main-slider-info-cell">
						<div class="cell-icon">
							<?php
							$icon = get_theme_mod( 'info_section_one_icon', 'dashicons dashicons-store' );
							?>
							<i class="<?php echo esc_attr( $icon ); ?>"></i>
						</div>
						<div class="cell-content">
							<span class="cell-caption">
								<?php echo wp_kses_post( get_theme_mod( 'info_section_one_text', 'FREE SHIPPING' ) ); ?>
							</span> <span class="cell-subcaption">
								<?php echo wp_kses_post( get_theme_mod( 'info_section_one_subtext', 'On all orders over 90$' ) ); ?>
							</span>
						</div>
					</div>
				</li>
				<li class="col-sm-4 col-xs-12">
					<div class="main-slider-info-cell">
						<div class="cell-icon">
							<?php
							$icon = get_theme_mod( 'info_section_two_icon', 'dashicons dashicons-phone' );
							?>
							<i class="<?php echo esc_attr( $icon ); ?>"></i>
						</div>
						<div class="cell-content">
							<span class="cell-caption">
								<?php echo wp_kses_post( get_theme_mod( 'info_section_two_text', 'CALL US ANYTIME' ) ); ?>
							</span> <span class="cell-subcaption">
								<?php echo wp_kses_post( get_theme_mod( 'info_section_two_subtext', '+04786445953' ) ); ?>
							</span>
						</div>

					</div>
				</li>
				<li class="col-sm-4 col-xs-12">
					<div class="main-slider-info-cell">
						<div class="cell-icon">
							<?php
							$icon = get_theme_mod( 'info_section_three_icon', 'dashicons dashicons-location-alt' );
							?>
							<i class="<?php echo esc_attr( $icon ); ?>"></i>
						</div>
						<div class="cell-content">
						<span class="cell-caption">
							<?php echo wp_kses_post( get_theme_mod( 'info_section_three_text', 'OUR LOCATION' ) ); ?>
						</span> <span class="cell-subcaption">
							<?php echo wp_kses_post( get_theme_mod( 'info_section_three_subtext', '557-6308 Lacinia Road. NYC' ) ); ?>
						</span>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</section><!-- / Main Slider -->
