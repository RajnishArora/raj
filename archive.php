<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package raj
 */

get_header();
?>


<div class="generic__title" style="background-image: url('<?php echo get_theme_file_uri('/assets/images/title_background.jpg'); ?>'); ">
			<div class = "generic__title-text">
					<?php _e(get_the_archive_title()); ?>		
			 </div>
</div>


<div class="container container--narrow page-section">
<?php
  while(have_posts()) {
    the_post(); ?>
    <div class="post-item">
      <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      
      <div class="metabox">
        <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?></p>
      </div>

      <div class="generic-content">
        <?php the_excerpt(); ?>
        <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Continue reading &raquo;</a></p>
      </div>

    </div>
  <?php 
	}
  echo paginate_links();
?>
</div>

<?php
//get_sidebar();
get_footer();
