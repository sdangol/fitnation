<?php

/**
 * Template Name: Brand Ambassador
 */

get_header('bg');
while(have_posts()): the_post();
?>
	<!-- MAIN -->
    <main role="main" class="ambassador-page">
      <!-- Brand Ambassad -->
      <header class="section-top-padding background-image text-center" style="background:linear-gradient(rgba(0, 0, 0, 0.91),rgba(0, 0, 0, 0.65)),url(http://localhost/fitnation-v2/wp-content/uploads/2018/09/img-05-copy.jpg) no-repeat;background-size:100%;">
        
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

      <section class="about-sukadev-dai-thumbnail ">
        <ul class="clearfix">
          <li class="s-12 m-6 l-3 ">
            <i class="fas fa-dumbbell"></i>
            <span class="thumbnail-features">
              Fitness Enthusiast
            </span>
          </li>
          <li class="s-12 m-6 l-3 ">
            <i class="fas fa-medal"></i>
            <span class="thumbnail-features">
              Mr. Himalaya bodybuilding Show ( 1st RunnerUp )
            </span>
          </li>
          <li class="s-12 m-6 l-3 ">
            <i class="fas fa-user-shield"></i>
            <span class="thumbnail-features">
              Inspirational Idol
            </span>
          </li>
          <li class="s-12 m-6 l-3 ">
            <i class="fas fa-users"></i>
            <span class="thumbnail-features">
              Social Influencer
            </span>
          </li>
        </ul>
      </section>

      <section class="about-sukadev-dai clearfix">
        <div class="s-12 m-6">
            <h2 class="text-l-size-25 text-size-30 text-dark" style="text-align: left;">About <b>Sukadev Karki</b></h2>
            <p>A young Nepalese fitness athlete residing in Kathmandu, standing as an idol for many youths of the nation. His passion for fitness has been admired by people of all age groups. Sukadev came into rise and earned his respect after his comeback from a horrific life threatening accident that occurred in 2nd of Octobor 2015.</p>
        </div>
        <div class="s-12 m-6">
          <img src="http://localhost/fitnation-v2/wp-content/themes/fitnation/img/about-sukadevdai.png">
        </div>
      </section>

      <section class="section-small-padding background-dark text-center">
        <div class="line">
          <h2 class="text-white text-size-50 text-m-size-40 margin-bottom-20">About <b style="color: red;">The Accident</b></h2>
          <div class=" center">
            <p style="margin-bottom: 20px;color: #fff;"><b style="font-size: 22px;display: inline-block;font-weight: 500;width: 100%; ">‘ The person was literally taking his last breathe when he had arrived to the hospital ’</b> is what the doctors and staffs from Kathmandu Medical College (KMC) had to say about his condition.  </p>
            <div class="margin">
              <!-- <a href="http://localhost/fitnation-v2/my-account/?action=register" class="button">Sign up</a> -->
            </div>
          </div>
        </div>
      </section>

      <section class="section-small-padding text-left" style="background: #fff;">
        <div class="line" style="display: flex;align-items: center;">
          <div class="s-12 m-6 l-4 text-center">
            <span class="fa fa-dove" style="color: #cd152e;font-size: 110px;"></span>
          </div>
          <div class="s-12 m-6 l-8">
            <h2 class="text-dark text-size-50 text-m-size-40 margin-bottom-20">After <b style="color: red;">The Accident</b></h2>
            <div class="">
              <p >The accident changed him as a person and his views towards life. He now believes in giving back to the society by sharing his knowledge and experiences. 
              </p>
              <p style="margin-bottom: 20px;">
                His willpower and determination to move forward and never give up attitude lead him to where he is today.
              </p>
              <div class="margin">
                <!-- <a href="http://localhost/fitnation-v2/my-account/?action=register" class="button">Sign up</a> -->
              </div>
          </div>
          </div>
        </div>
      </section>

      <section class="section-small-padding background-dark text-center">
        <div class="line">
          <h2 class="text-white text-size-50 text-m-size-40 margin-bottom-20">Respect <b style="color: red;">from Fitnation</b></h2>
          <div class=" center">
            <p style="font-size: 18px;margin-bottom: 15px;">We at FitNation could not be more than happy to have him represent us as we both have a common goal which is to provide a proper platform to all fitness enthusiasts in Nepal.
            </p>
            <p class="text-white">
              Together We Rise - <span style="color: #83b729 !important;">FitNation</span>
            </p>
          </div>
        </div>
      </section>

    </main>
<?php
endwhile;
get_footer();