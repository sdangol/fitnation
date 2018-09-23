<?php
	get_header();
?>
			<!-- MAIN -->
		    <main role="main">
		    	<section class="clearfix section-top-padding background-whit blogs">
		    		<div class="line text-center">
			          <h2 class="text-dark text-size-50 text-m-size-40">Recent Posts</h2>
			          <hr class="break background-primary break-small break-center margin-bottom-50">
			        </div>
			        <?php while(have_posts()): the_post(); ?>
			        	<div class="post-item l-3 m-4 s-6 xs-12">
			        		<h3 class="text-dark"><?php the_title(); ?></h3>
			        		<div class="img-wrapper">
				        		<?php the_post_thumbnail( 'full' ); ?>
			        		</div>
			        		<div class="post-content">
			        			<?php the_excerpt(); ?>
			        		</div>
			        	</div>			        	<div class="post-item l-3 m-4 s-6 xs-12">
			        		<h3 class="text-dark"><?php the_title(); ?></h3>
			        		<div class="img-wrapper">
				        		<?php the_post_thumbnail( 'full' ); ?>
			        		</div>
			        		<div class="post-content">
			        			<?php the_excerpt(); ?>
			        		</div>
			        	</div>			        	<div class="post-item l-3 m-4 s-6 xs-12">
			        		<h3 class="text-dark"><?php the_title(); ?></h3>
			        		<div class="img-wrapper">
				        		<?php the_post_thumbnail( 'full' ); ?>
			        		</div>
			        		<div class="post-content">
			        			<?php the_excerpt(); ?>
			        		</div>
			        	</div>
    				<?php endwhile; ?>
		    	</section>
		    </main>   
<?php
	get_footer();