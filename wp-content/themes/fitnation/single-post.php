<?php
	get_header();
	while(have_posts()):
		the_post();
?>
			<!-- MAIN -->
		    <main role="main">
		    	<section class="clearfix section-top-padding background-white">
		    		<div class="line text-center">
			          <h2 class="text-dark text-size-50 text-m-size-40"><?php the_title( ); ?></h2>
			          <hr class="break background-primary break-small break-center margin-bottom-50">
			        </div>
		    		<div class="blog-detail s-12 m-12 l-8 ">
				        <div class="image-wrapper">
				        	<?php the_post_thumbnail('full') ?>
				        	<div class="bottom-helper">
					        	<span class="date-created"><?php the_date(); ?></span>
					        	<span class="creator"><?php the_author(); ?></span>
				        	</div>
				        </div>
			    		<?php the_content(); ?>
		    		</div>

		    		<div class="blogs clearfix">
					<?php
						//for use in the loop, list 5 post titles related to first tag on current post
						$tags = wp_get_post_tags($post->ID);
						if ($tags) {
							$first_tag = $tags[0]->term_id;
							$args=array(
								'tag__in' => array($first_tag),
								'post__not_in' => array($post->ID),
								'posts_per_page'=>5,
							);
							$related = new WP_Query($args);
							if( $related->have_posts() ) {
							while ($related->have_posts()) : $related->the_post();
					?>
		    			<div class="post-item l-3 m-6 s-12 xs-12" style="float: right;">
			        		<h3 class="text-dark"><?php the_title(); ?></h3>
			        		<div class="img-wrapper">
				        		<?php the_post_thumbnail( 'full' ); ?>
			        		</div>
			        		<div class="post-content">
			        			<?php the_excerpt(); ?>
			        		</div>
						</div>
						<?php
							endwhile;
							}
							wp_reset_query();
							}
						?>
		    		</div>

		    	</section>
		    </main>   
<?php
	endwhile;
	get_footer();