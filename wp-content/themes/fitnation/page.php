<?php
	get_header();
	while(have_posts()):
		the_post();
?>
			<!-- MAIN -->
		    <main role="main">
		    	<section class="section-top-padding background-white">
		    		<div class="line text-center">
			          <h2 class="text-dark text-size-50 text-m-size-40"><?php the_title(); ?></h2>
			          <hr class="break background-primary break-small break-center margin-bottom-50">
			        </div>
		    		<?php the_content(); ?>
		    	</section>
		    </main>   
<?php
	endwhile;
	get_footer();