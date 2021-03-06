<?php
wp_enqueue_script( 'owlCarousel' );
wp_enqueue_style( 'owlCarousel' );
wp_enqueue_style( 'owlCarousel-theme' );

$posts = new WP_Query(['posts_per_page' => -1,
						'post_type' => 'product',
						'order' => 'ASC']);
?>

<div class="row tyche-product-slider-container">
	<div class="tyche-product-slider-navigation hidden-xs">
		<a class="prev" href="#"><i class="fa fa-angle-left"></i></a>
		<a class="next" href="#"><i class="fa fa-angle-right"></i></a>
	</div>
	<div class="col-xs-12">
		<div class="owl-carousel tyche-product-slider" data-attr-elements="4">
			<?php while ( $posts->have_posts() ) : $posts->the_post();
				global $product;
				global $post; ?>
				<div class="item">
					<div class="tyche-product <?php echo esc_attr( ! empty( $params['color'] ) ? $params['color'] : '' ) ?>">
						<div class="tyche-child-product-image">
							<?php if ( $product->is_on_sale() ) : ?>
								<?php echo apply_filters( 'woocommerce_sale_flash', '<span class="onsale">' . esc_html__( 'Sale!', 'tyche' ) . '</span>', $post, $product ); ?>
							<?php endif; ?>

							<?php
							$image = '<img src="' . get_template_directory_uri() . '/assets/images/product-placeholder.jpg" />';
							if ( has_post_thumbnail() ) {
								$image = woocommerce_get_product_thumbnail( 'shop_catalog' );
							};
							// $max_size = get_the_post_thumbnail_url( get_the_ID(), 'shop_single' );
							// $image = str_replace( ' class=', ' data-src="' . $max_size . '" class=', $image );

							// $allowed_tags = array(
							// 	'img'      => array(
							// 		'data-srcset' => true,
							// 		'data-src'    => true,
							// 		'srcset'      => true,
							// 		'sizes'       => true,
							// 		'src'         => true,
							// 		'class'       => true,
							// 		'alt'         => true,
							// 		'width'       => true,
							// 		'height'      => true,
							// 	),
							// 	'noscript' => array(),
							// );
							// echo wp_kses( $image, $allowed_tags );
							echo $image;
							?>
						</div>
						<div class="tyche-product-body">
							<h3><?php woocommerce_template_loop_product_link_open() ?><?php echo get_the_title(); ?><?php woocommerce_template_loop_product_link_close() ?></h3>

							<?php $rating_html = wc_get_rating_html( $product->get_average_rating() ); ?>
							<?php if ( 'yes' === $params['show_rating'] && $rating_html ) : ?>
								<?php echo $rating_html; ?>
							<?php endif; ?>

							<?php //$price_html = $product->get_price_html(); ?>
							<?php //if ( $price_html ) : ?>
								<!-- <span class="price"><?php //echo $price_html; ?></span> -->
							<?php //endif; ?>

							<?php
							$class = 'ajax_add_to_cart add_to_cart_button button ';

							if ( $product->has_child() ) {
								$class = 'add_to_cart_button button ';
							}
							?>

							<?php
							echo apply_filters(
								'woocommerce_loop_add_to_cart_link',
								sprintf( '<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s"><span class="fa fa-shopping-cart"></span> %s</a>',
								         esc_url( $product->add_to_cart_url() ),
								         esc_attr( isset( $quantity ) ? $quantity : 1 ),
								         esc_attr( $product->get_id() ),
								         esc_attr( $product->get_sku() ),
								         esc_attr( ! empty( $params['color'] ) ? $class . $params['color'] : $class ),
								         esc_html( $product->add_to_cart_text() )
								),
								$product );
							?>

						</div>

					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
