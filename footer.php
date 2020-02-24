<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * 
 */


?>

	</div><!-- #content -->

			
<!-- FOOTER
========================== -->
<footer>
		<div class="footer">
			<ul class ="footer__ul" >
	            <li><a href="<?php _e(site_url()); ?>" class="footer__link"> Home </a> </li>
	            <li><a href="<?php _e(site_url('/blog')); ?>" class="footer__link"> Blog </a> </li>
	            <li><a href="<?php _e(site_url('#aboutme')); ?>" class="footer__link"> About Us </a> </li>
	            <li><a href="<?php _e(site_url('/contact-us')); ?>" class="footer__link"> Contact Us </a> </li>
	        </ul>
	       <div class="footer__copyright">
	       		&copy; 2020 Rajnish Arora
	       </div>
		</div>	
</footer>

</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>
