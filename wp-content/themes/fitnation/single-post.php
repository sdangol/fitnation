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
					        	<span class="date-created">23 March, 2016</span>
					        	<span class="creator">Admin</span>
				        	</div>
				        </div>
			    		<?php the_content(); ?>
		    		</div>

		    		<div class="blogs clearfix">
		    			<div class="post-item l-3 m-6 s-12 xs-12" style="float: right;">
			        		<h3 class="text-dark"><?php the_title(); ?></h3>
			        		<div class="img-wrapper">
				        		<?php the_post_thumbnail( 'full' ); ?>
			        		</div>
			        		<div class="post-content">
			        			<?php the_excerpt(); ?>
			        		</div>
			        	</div>		    			<div class="post-item l-3 m-6 s-12 xs-12" style="float: right;">
			        		<h3 class="text-dark"><?php the_title(); ?></h3>
			        		<div class="img-wrapper">
				        		<?php the_post_thumbnail( 'full' ); ?>
			        		</div>
			        		<div class="post-content">
			        			<?php the_excerpt(); ?>
			        		</div>
			        	</div>		    			<div class="post-item l-3 m-6 s-12 xs-12" style="float: right;">
			        		<h3 class="text-dark"><?php the_title(); ?></h3>
			        		<div class="img-wrapper">
				        		<?php the_post_thumbnail( 'full' ); ?>
			        		</div>
			        		<div class="post-content">
			        			<?php the_excerpt(); ?>
			        		</div>
			        	</div>			
		    		</div>

		    	</section>
		    </main>   
<?php
	endwhile;
	get_footer();