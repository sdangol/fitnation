<?php
/**
 * Recent Post Widget default template
 *
 * @package Tyche
 */

$posts = Tyche_Helper::get_posts( $params ); ?>


<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
	<div class="col-md-4">
		<!-- <div class="tyche-meta"> -->
<!-- 			<div class="tyche-date">
				<?php echo '<span class="day">' . esc_html( get_the_date( 'd', absint( get_the_ID() ) ) ) . '</span> <span class="month">' . esc_html( get_the_date( 'M', absint( get_the_ID() ) ) ) . '</span>' ?>
			</div> -->
			<h6><?php the_title(); ?></h6>
			<div class="tyche-image">
				<a href="<?php echo esc_url( get_the_permalink() ); ?>">
					<?php
					$image = '<img class="attachment-tyche-recent-post-list-image size-tyche-recent-post-list-image wp-post-image" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/image-placeholder-160x90.jpg" width="160px" 
	height="90px" />';

					if ( has_post_thumbnail() ) {
						$image = get_the_post_thumbnail( get_the_ID(), 'full' );
					}
					echo wp_kses_post( $image );
					?>
				</a>
			</div>
		<!-- </div> -->

		<div class="tyche-post-content">
			<p>
				<?php echo wp_trim_words(get_the_content(), $num_words = 20, $more = null ); ?>
			</p>
			<?php //echo Tyche_Helper::get_post_meta_without_date( get_the_ID() ); ?>
		</div>
	</div>
<?php endwhile; ?>
