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





  <?php get_footer();

?>
