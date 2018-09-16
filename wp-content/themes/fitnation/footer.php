    <!-- FOOTER -->
    <footer>
      <!-- Social -->
      <div class="background-primary padding text-center">
        <?php
          $social_menu = wp_get_nav_menu_items('social-menu');
          foreach ($social_menu as $menu):
        ?>
            <a href="<?php echo $menu->url; ?>"><i class="<?php echo implode(' ',$menu->classes) ?> text-size-25 text-dark"></i></a> 
        <?php endforeach; ?>
        <!-- <a href="/"><i class="icon-twitter_circle text-size-25 text-dark"></i></a>
        <a href="/"><i class="icon-google_plus_circle text-size-25 text-dark"></i></a>
        <a href="/"><i class="icon-instagram_circle text-size-25 text-dark"></i></a> 
        <a href="/"><i class="icon-linked_in_circle text-size-25 text-dark"></i></a> -->                                                                       
      </div>
      <!-- Main Footer -->
      <section class="section background-dark">
        <div class="line"> 
          <div class="margin2x">
            <?php if ( is_active_sidebar( 'footer_widgets' ) ) : ?>
              <?php dynamic_sidebar( 'footer_widgets' ); ?>
            <?php endif; ?>
      <!--       <div class="s-12 m-6 l-3 xl-5">
               <h4 class="text-white text-strong">Our Mission</h4>
               <p>
                  FitNation started as a concept that was initiated by <b class="text-size-20">Kharel Organization Pvt.Ltd.</b> to address the desire of <b class="text-size-20">general public</b> to maintain a proper physique and have a good health. <b class="text-size-20">Nutrition</b> along with a combination of various exercises plays a vital role to achieve a <b class="text-size-20">healthy lifestyle</b>.
               </p>
            </div>
            <div class="s-12 m-6 l-3 xl-2">
               <h4 class="text-white text-strong margin-m-top-30">Useful Links</h4>
               <a class="text-primary-hover" href="page.html">FAQ</a><br>      
               <a class="text-primary-hover" href="contact.html">Contact Us</a><br>
               <a class="text-primary-hover" href="blog.html">Blog</a>
            </div>
            <div class="s-12 m-6 l-3 xl-2">
               <h4 class="text-white text-strong margin-m-top-30">Term of Use</h4>
               <a class="text-primary-hover" href="page.html">Terms and Conditions</a><br>
               <a class="text-primary-hover" href="page.html">Refund Policy</a><br>
               <a class="text-primary-hover" href="page.html">Disclaimer</a>
            </div>
            <div class="s-12 m-6 l-3 xl-3">
               <h4 class="text-white text-strong margin-m-top-30">Contact Us</h4>
                <p><i class="icon-sli-screen-smartphone text-primary"></i> 0800 4521 800 50</p>
                <a class="text-primary-hover" href="mailto:contact@sampledomain.com"><i class="icon-sli-mouse text-primary"></i> contact@sampledomain.com</a><br>
                <a class="text-primary-hover" href="mailto:office@sampledomain.com"><i class="icon-sli-mouse text-primary"></i> office@sampledomain.com</a>
            </div> -->
          </div>  
        </div>    
      </section>
      <div class="background-dark">
         <div class="line">
            <hr class="break margin-top-bottom-0" style="border-color: #777;">
         </div>
      </div>
      <!-- Footer Ends -->
    </footer>
<!--     <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script> -->
    <?php wp_footer(); ?> 
  </body>
</html>