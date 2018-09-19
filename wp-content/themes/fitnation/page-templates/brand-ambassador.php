<?php

/**
 * Template Name: Brand Ambassador
 */

get_header();
while(have_posts()): the_post();
?>
	<!-- MAIN -->
    <main role="main" class="ambassador-page">
      <!-- Brand Ambassad -->
      <header class="section-top-padding background-image text-center" style="background-image:url(http://localhost/fitnation-v2/wp-content/uploads/2018/09/img-05.jpg)">
        
        <section class=" full-width">        
          <div class="m-12 l-6 xl-7 xxl-8">
            <img class="margin-top-20 center" src="http://localhost/fitnation-v2/wp-content/uploads/2018/09/ambassador.png" alt="">
          </div>         
          <div class=" m-12 l-6 xl-5 xxl-4">
            <div class="l-12 padding-2x">
              <h2 class="text-l-size-40 text-size-50 text-white" style="text-align: left;">Hi <br> I am <b>Sukadev</b></h2>
              <p class="margin-bottom" style="text-align: left;">Brand Ambassador <b style="color: #83b729 ;">FitNation</b></p>
              <!-- white Start your Business object -->
        <!-- <img class="margin-top-20 center" src="http://localhost/fitnation-v2/wp-content/uploads/2018/09/app.png" alt=""> -->
            </div>  
          </div>
        </section>

      </header>
      <section class="about-sukadev-dai">
        <div class="m-6">
            <h2 class="text-l-size-25 text-size-30 text-dark" style="text-align: left;">About <b>Sukadev Karki</b></h2>
            <p>A young Nepalese fitness athlete residing in Kathmandu, standing as an idol for many youths of the nation. His passion for fitness has been admired by people of all age groups. Sukadev came into rise and earned his respect after his comeback from a horrific life threatening accident that occurred in 2nd of Octobor 2015.</p>
        </div>
        <div class="m-6">
          
        </div>
      </section>
    </main>
<?php
endwhile;
get_footer();