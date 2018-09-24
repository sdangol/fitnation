<?php
/**
 * Template Name: Login/Register Page
 */
	get_header();
	while(have_posts()):
		the_post();
?>
			<!-- MAIN -->
		    <main role="main">
		    	<section class="section-top-padding background-white">
		    		<?php the_content(); ?>
		    	</section>
		    </main>   
<?php
	endwhile;
	get_footer();