<?php 
/*
Template Name:Home Page
*/

get_header();

//animation working but content not centre as translateY not working
?>

<div class="large-hero">
	<picture>
      <source media="(min-width: 1380px)" srcset="<?php echo bloginfo('stylesheet_directory'); ?>/assets/images/computer-desk-1920.png">
      <source srcset="<?php echo bloginfo('stylesheet_directory'); ?>/assets/images/computer-desk-1380.png" media="(min-width: 990px)">
      <source srcset="<?php echo bloginfo('stylesheet_directory'); ?>/assets/images/computer-desk-990.png" media="(min-width: 640px)">
      <img srcset="<?php echo bloginfo('stylesheet_directory'); ?>/assets/images/computer-desk-640.jpg" alt="Coastal view of ocean and mountains" class="large-hero__image">
    </picture>

		<div class = "large-hero__content">
				<div class = large-hero__title> Hi There </div>
				<div class = large-hero__subtitle> Main pal do pal ka shayar hoon ,<br> pal do pal meri hasti hai, <br>pal do pal meri jawani hai</div>
        <div class = "large-hero--shift-right"> 'Kabhi Kabhi'</div>

		</div>
</div>

<div id= "aboutme"  class ="about-me" style="background-image: url('<?php echo bloginfo('stylesheet_directory'); ?>/assets/images/white-wall.jpg');">
    
    <picture>
          <source media="(min-width: 990px)" srcset="<?php echo bloginfo('stylesheet_directory'); ?>/assets/images/silhoutte-500.jpg">
          <img srcset="<?php echo bloginfo('stylesheet_directory'); ?>/assets/images/silhoutte-300" alt="silhoutte" class="about-me__img ">
    </picture>
    
    <div class ="about-me__content">
      <div class = "about-me__content__heading">
          About Me
      </div>
      <div class = "about-me__content__subheading">
          The best is, the best there was, the best there will be
      </div>
      <div class = "about-me__content__para">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Est lorem ipsum dolor sit. Odio pellentesque diam volutpat commodo sed egestas. Duis at consectetur lorem donec massa sapien. Aliquam ultrices sagittis orci a scelerisque purus semper. Commodo viverra maecenas accumsan lacus vel facilisis volutpat est velit. Velit dignissim sodales ut eu sem integer. Et ligula ullamcorper malesuada proin libero nunc consequat. Non diam phasellus vestibulum lorem sed risus ultricies. Et netus et malesuada fames ac turpis egestas. Vulputate enim nulla aliquet porttitor. Vitae proin sagittis nisl rhoncus mattis rhoncus urna. Natoque penatibus et magnis dis parturient. Enim sed faucibus turpis in. Diam sollicitudin tempor id eu nisl nunc mi.
      </div>    
      <div class="tpadding20 bpadding20">
          <a href="#" class="btn btn--blue rpadding20">
              Contact Me
          </a>
          
      </div>
    </div>

    <div class="about-me__sidebar">
    </div>

</div>

<div class ="knowledge">
      <div class = knowledge__title>
            Our Skills
      </div>

      <div class = knowledge__subtitle>
          These are our skill level 
      </div>

    <div class ="row-smd">
      <div class = "col-md-6">
        <div class = "knowledge__item">
          <div class = "knowledge--left">WORDPRESS</div>
          <progress id="jsprogress1" class="knowledge__progress"  data-limit1 = "90"  max="100"></progress>
        </div>

        <div class = "knowledge__item">
          <div class = "knowledge--left">PHP</div>
          <progress id="jsprogress2" class="knowledge__progress"  data-limit2 = "80" max="100"></progress>
        </div>
        <div class = "knowledge__item">
          <div class = "knowledge--left">JAVASCRIPT</div>
          <progress id="jsprogress3" class="knowledge__progress"  data-limit3 = "85" max="100"></progress>
        </div>
      </div>
     
     <div class = "col-md-6">
        <div class = "knowledge__item">
          <div class = "knowledge--left">HTML</div>
          <progress id="jsprogress4" class="knowledge__progress"  data-limit4 = "90" max="100"></progress>
        </div>
        <div class = "knowledge__item">
          <div class = "knowledge--left">CSS</div>
          <progress id="jsprogress5" class="knowledge__progress"  data-limit5 = "90" max="100"></progress>
        </div>
        <div class = "knowledge__item">
          <div class = "knowledge--left">C++</div>
          <progress id="jsprogress6" class="knowledge__progress"  data-limit6 = "95" max="100"></progress>
        </div>
         
     </div>
    </div> <!-- row ends -->     
</div>

<div class = "achievements " style="background: url('<?php echo bloginfo('stylesheet_directory'); ?>/assets/images/white-wall.jpg") no-repeat cover >
    <div class = "achievements__title" >
        Our Style
    </div>
    <div class ="row achievements__content " >
        
        <div class ="achievements__icon-container">
          <div class ="achievements__icon" style="background: url('<?php echo bloginfo('stylesheet_directory'); ?>/assets/icons/css_sprites.png') no-repeat -220px -94px;" >
          </div>
          <div class ="achievements__icon-text">
              Keep Customers happy
          </div>
        </div>
        <div class ="achievements__icon-container">
          <div class ="achievements__icon" style="background: url('<?php echo bloginfo('stylesheet_directory'); ?>/assets/icons/css_sprites.png') no-repeat -115px -115px;">
          </div>
          <div class ="achievements__icon-text">
              On Time Delievery
          </div>
        </div>
        <div class ="achievements__icon-container achievements__hide_in_mobile">
          <div  class ="achievements__icon" style="background: url('<?php echo bloginfo('stylesheet_directory'); ?>/assets/icons/css_sprites.png') no-repeat -115px -10px; width: 85px;height: 85px;">
          </div>
          <div class ="achievements__icon-text">
              Quality Code
          </div>
        </div>
      
       <div class ="achievements__icon-container achievements__hide_in_mobile">
          <div class ="achievements__icon" style="background: url('<?php echo bloginfo('stylesheet_directory'); ?>/assets/icons/css_sprites.png') no-repeat -220px -10px;" >
          </div>
          <div class ="achievements__icon-text">
              Spped & Performance
          </div>
        </div>
                <div class ="achievements__icon-container">
          <div class ="achievements__icon" style="background: url('<?php echo bloginfo('stylesheet_directory'); ?>/assets/icons/css_sprites.png') no-repeat -10px -115px; width: 85px;height: 85px;" >
          </div>
          <div class ="achievements__icon-text">
              Resposive Design 
          </div>
        </div>
      </div>
      
</div>

<div class="our-projects">
  <div class = "our-projects__title">
    Our Projects
  </div>
    <div class="row-smd">
      <?php
          $args = array(  
            'post_type' => 'projects',
            'post_status' => 'publish',
            'posts_per_page' => 3, 
             
        );

          $loop = new WP_Query( $args);

          while ( $loop->have_posts() ) : $loop->the_post(); ?> 
      
          <div class ="our-projects__boxes">
              <div class=" our-projects__boxes-title"> 
                  <?php _e(the_title());  ?> 
             
              </div>
               <div class ="our-projects__content">
                    <?php _e(the_content());  ?>
               </div>
          </div>    
          <?php
             endwhile;

          wp_reset_postdata(); 
          ?>
        
      </div>
</div>


  <?php get_footer(); 