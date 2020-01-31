<?php get_header();

//animation working but content not centre as translateY not working
?>

<div class="large-hero">
	<picture>
      <source media="(min-width: 1380px)" srcset="<?php echo bloginfo('stylesheet_directory'); ?>/assets/images/laptop-1920.jpg">
      <source srcset="<?php echo bloginfo('stylesheet_directory'); ?>/assets/images/laptop-1380.jpg" media="(min-width: 990px)">
      <source srcset="<?php echo bloginfo('stylesheet_directory'); ?>/assets/images/laptop-990.jpg" media="(min-width: 640px)">
      <img srcset="<?php echo bloginfo('stylesheet_directory'); ?>/assets/images/laptop-640" alt="Coastal view of ocean and mountains" class="large-hero__image">
    </picture>

		<div class = "large-hero__content">
				<div class = large-hero__title> Hi There </div>
				<div class = large-hero__subtitle> Main pal do pal ka shayar hoon ,<br> pal do pal meri hasti hai, <br>pal do pal meri jawani hai</div>
        <div class = "large-hero--shift-right"> 'Kabhi Kabhi'</div>

		</div>
</div>

<div class ="about-me">
    
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
              Hire Me
          </a>
          <a href="#" class="btn btn--orange lpadding20">
              Contact Me
          </a>
      </div>
    </div>

    <div class="about-me__sidebar">
    </div>

</div>




  <?php get_footer();

?>
