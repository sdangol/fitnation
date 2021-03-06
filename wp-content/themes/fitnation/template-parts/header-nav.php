<nav class="background-transparent background-primary-dott full-width sticky">          
    <div class="top-nav"> 
    <!-- mobile version logo -->              
    <div class="logo hide-l hide-xl hide-xxl">
        <a href="index.html" class="logo">
        <?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        ?>
        <!-- Logo White Version -->
        <img class="logo-white" src="<?php echo $logo[0]; ?>" alt="">
        <!-- Logo Dark Version -->
        <img class="logo-dark" src="<?php echo $logo[0]; ?>" alt="">
        </a>
    </div>                  
    <p class="nav-text"></p>
    <?php
        $header_menu = array_values(wp_get_nav_menu_items('main-menu'));
        $total_menu = count($header_menu);
        // var_dump($header_menu);die;

    ?>
    <!-- left menu items -->
    <div class="top-nav left-menu">
        <ul class="right top-ul chevron">
            <?php for($i=0;$i<3;$i++): ?>
                <?php if (isset($header_menu[$i])): ?>
                <li><a href="<?php echo $header_menu[$i]->url ?>"><?php echo $header_menu[$i]->title; ?></a></li>
                <?php endif; ?>
            <?php endfor; ?>
        </ul>
    </div>
    
    <!-- logo -->
    <ul class="logo-menu">
        <a href="index.html" class="logo">
        <!-- Logo White Version -->
        <img class="logo-white" src="<?php echo $logo[0]; ?>" alt="">
        <!-- Logo Dark Version -->
        <img class="logo-dark" src="<?php echo $logo[0]; ?>" alt="">
        </a>
    </ul>
    
    <!-- right menu items -->
    <div class="top-nav right-menu">
        <ul class="top-ul chevron">
            <?php for($i=3;$i<$total_menu;$i++): ?>
            <?php if (isset($header_menu[$i])): ?>
                <li><a href="<?php echo $header_menu[$i]->url ?>"><?php echo $header_menu[$i]->title; ?></a></li>
            <?php endif; ?>
            <?php endfor; ?>
        <!--     <li>
            <a>Products</a>
            <ul>
                <li><a>Product 1</a></li>
                <li><a>Product 2</a></li>
            </ul>
            </li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="contact.html">Contact</a></li> -->
        </ul> 
    </div>
    </div>
</nav>