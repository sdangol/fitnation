<?php

/**
 * Template Name: Contact Page
 */

get_header('bg');
while(have_posts()): the_post();
?>
	<!-- MAIN -->
    <main role="main">
      <article>    
        <!-- Header -->
        <header class="section background-image text-center" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
          <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
            <?php the_title(); ?>
          </h1>
          <!-- <p class="animated-element text-white"></p> -->
          
          <!-- white full width arrow object -->
          <img class="arrow-object" src="<?php echo get_template_directory_uri() . '/img/arrow-object-white.svg'; ?>" alt="">
        </header>
        
        <!-- Section 1 -->
        <section class="section-small-padding background-white text-center">      
          <div class="line">
            <i class="icon-sli-heart text-primary text-size-40"></i>
            <h2 class="text-dark text-size-50 text-m-size-40">We are here for you <b class="text-primary">24/7</b></h2>
          </div>                                                                                                    
        </section>
        
        <!-- Section 2 -->
        <section class="full-width background-grey">
          <div class="m-12 l-6">
            <div class="padding-3x">
              <div class="margin2x">
                
                <div class="l-12 xl-6 margin-bottom-60">
                  <div class="float-left">
                    <i class="icon-sli-location-pin text-primary text-size-40 text-line-height-1"></i>
                  </div>
                  <div class="margin-left-60">
                    <h2 class="text-size-20 margin-bottom-10 text-strong">Address</h2>                
                    <p>City Centre 2nd floor</p>
                    <p>Kamal Pokhari, Kathmandu, Nepal</p>             
                  </div>
                </div>
                
                <div class="l-12 xl-6 margin-bottom-60">
                  <div class="float-left">
                    <i class="icon-sli-envelope text-primary text-size-40 text-line-height-1"></i>
                  </div>
                  <div class="margin-left-60">
                    <h2 class="text-size-20 margin-bottom-10 text-strong">E-mail</h2>                
                    <p><a class="text-primary-hover" href="mailto:fitnation.np@gmail.com">fitnation.np@gmail.com</a></p>
                  </div>
                </div>
                
                <div class="l-12 xl-6 margin-bottom-60">
                  <div class="float-left">
                    <i class="icon-sli-earphones-alt text-primary text-size-40 text-line-height-1"></i>
                  </div>
                  <div class="margin-left-60">
                    <h2 class="text-size-20 margin-bottom-10 text-strong">Phone Numbers</h2>                
                    <p>‎9802098078</p>
                    <p>9802098079</p>
                  </div>
                </div>
                
                <div class="l-12 xl-6">
                  <div class="float-left">
                    <i class="icon-sli-paper-plane text-primary text-size-40 text-line-height-1"></i>
                  </div>
                  <div class="margin-left-60">
                    <h2 class="text-size-20 margin-bottom-10 text-strong">Information</h2>
                    <?php the_content(); ?>                 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="m-12 l-6">
            <iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=27.709529, 85.326652&amp;key=AIzaSyC8SONjQCBZSbsiqXGjAkGSOX9heLzIB8E&amp;zoom=19"></iframe>
          </div>
        </section>
        
        <!-- Section 3 -->
        <section class="section background-dark">
          <div class="s-12 m-12 l-4 center">
            <h3 class="text-size-30 margin-bottom-40 text-center"><b>Contact Form</b></h3>
            <?php echo do_shortcode( '[contact-form-7 id="5" title="Contact form 1" html_class="customform text-white"]' ) ?>
            <!-- <form class="customform text-white" method="post" enctype="multipart/form-data">
              <div class="line">
                <div class="margin">
                  <div class="s-12 m-12 l-6">
                    <input name="email" class="required email" placeholder="Your e-mail" title="Your e-mail" type="text" />
                  </div>
                  <div class="s-12 m-12 l-6">
                    <input name="name" class="name" placeholder="Your name" title="Your name" type="text" />
                  </div>
                </div>
              </div>            
                              
              <div class="line">       
                <div class="s-12">
                  <input name="subject" class="required subject" placeholder="Subject" title="Subject" type="text" />
                </div>
                <div class="s-12">
                  <textarea name="message" class="required message" placeholder="Your message" rows="3"></textarea>
                </div>
                <div class="s-12"><button class="button border-radius text-white background-primary" type="submit">Submit Button</button></div>
              </div>    
            </form> -->
          </div>           
        </section>
      </article>
    </main>
<?php
endwhile;
get_footer();