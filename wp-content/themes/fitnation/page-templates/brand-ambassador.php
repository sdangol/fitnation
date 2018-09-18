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

      <section class="about-sukadev-dai clearfix">
        <div class="m-6">
            <h2 class="text-l-size-25 text-size-30 text-dark" style="text-align: left;">About <b style="color: #83b729 !important;">Sukadev Karki</b></h2>
            <p>Sukadev Karki is a Nepali inspirational athlete who did not let the terrible accident isolate him from either of his passions, motorcycling or bodybuilding. He has been a source of inspiration to many youths in Nepal. Sukadev Karki talked with colleges Nepal about his story of struggle.</p>
        </div>
        <div class="m-6">
          <img src="http://localhost/fitnation-v2/wp-content/themes/fitnation/img/about-sukadev.png">
        </div>
      </section>
    </main>
<?php
endwhile;
get_footer();