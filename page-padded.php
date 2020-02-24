<?php
/*
Template Name:Padded Page
* @package raj
*/
get_header();

		?>
		<div class="generic__title" style="background-image: url('<?php echo get_theme_file_uri('/assets/images/title_background.jpg'); ?>'); ">
			<div class = "generic__title-text">
					<?php the_title(); ?>		
			 </div>
		</div>
		<?php
		while ( have_posts() ) :
			the_post();
		?>
				
		
		<div class ="generic">
			
			<div class="generic__content">			
				<?php	the_content(); ?>
			</div>
		</div>
		<?php
		endwhile; // End of the loop.
		?>

<?php

get_footer();
