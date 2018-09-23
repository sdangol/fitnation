<?php
	get_header('bg');
	while(have_posts()):
		the_post();
?>
			<!-- MAIN -->
		    <main role="main">
		    	<!-- Header -->
			      <header class="section-top-padding background-image text-center" style="background:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.5)),url(<?php header_image(); ?>)  no-repeat">

			        <h1 class=" text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-40 margin-top-130">
			          <div id="rev-1" class="block-revealer">
			            <div class="block-revealer__content">
			              Products For You
			            </div>
			            <div class="block-revealer__element"></div>
			          </div>
			        </h1>
			        <p class="text-white">
			          <div id="rev-2" class="block-revealer">
			            <div class="block-revealer__content text-white" style="max-width: 600px;">
			              MusclePharm is an award winning and worldwide industry-leading sports nutrition brand offering a wide range of clinically proven, safe and effective dietary supplements to athletes of every sports and activity while supporting lifestyle goals of every kind. 
			            </div>  
			            <div class="block-revealer__element"></div>
			          </div>  
			        </p>
			        <i class="slow icon-sli-arrow-down text-white margin-top-20 text-size-16"></i>
			        <!-- Image -->
			        <img class="margin-top-20 center" src="<?php echo wp_get_attachment_image_src(get_theme_mod('fn_header_section_foreground_image'), 'full')[0]; ?>" alt="">

			        <!-- dark full width arrow object -->
			        <img class="arrow-object" src="<?php echo get_template_directory_uri() . '/img/arrow-object-black.svg'; ?>" alt="">
			      </header>
					<section class="section-small-padding text-center" style="background: #000;">
					        <div class="line">
					          <div class="m-10 l-6 xl-4 center">
					            <div class="margin" style="display: flex;align-items: center;">
					              <a class="s-12 m-6 margin-s-bottom" href="/">
									<h1 class="text-white"><b>Products By</b></h1>
					              </a>
					              <a class="s-12 m-6" href="musclepharm.com">
					                <img class="full-img" src="http://www.fitnation.com.np/wp-content/themes/tyche-child/assets/images/musclepharm-invert.png" alt="">
					              </a>
					            </div>
					          </div>
					        </div>
					      </section>
		    	<section class="section-top-padding background-white">
		    		<div class="line text-center">
			          <h2 class="text-dark text-size-50 text-m-size-40"><?php the_title( ); ?></h2>
			          <hr class="break background-primary break-small break-center margin-bottom-50">
			        </div>
		    		<?php the_content(); ?>
		    	</section>
		    </main>   
<?php
	endwhile;
	get_footer();