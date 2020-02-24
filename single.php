<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package raj
 */


get_header(); 

 while ( have_posts() ) :
          the_post();
     
?>

<div class="generic__title" style="background-image: url('<?php echo get_theme_file_uri('/assets/images/title_background.jpg'); ?>'); ">
      

			<div class = "generic__title-text">
					<?php the_title(); ?>		
			 </div>
</div>


 <div class="container container--narrow">
    <div class="metabox metabox--position-up metabox--with-home-link">
    <p><a class="metabox__blog-home-link" href="<?php echo site_url('/blog'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Blog Home </a> <span class="metabox__main">Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(); ?></span></p>
  </div>

    <div class="generic__content">
      
    <div class ="m-top-large"> 
                           <?php 
             the_content(); 
                ?></div>
    </div> <!--  .generic-content -->
  </div><!-- closing container container--narrow page-section div //-->

<?php 
endwhile;
    
get_footer();
