<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
				<div class = "contact-info">
				<h6>CONTACT INFO</h6>
				<p>info@inhabitent.com</p>
				<p>778-456-7891</p>
				</div>
				<div class="business-hours">
				<p><b>Monday-Friday: </b>9am to 5pm</p>
				<p><b>Saturday: </b>10am to 2pm</p>
				<p><b>Sunday: </b>Closed</p>
				</div>
				<div class = "logo-footer"><a href="<?php echo get_home_url() ?>"><img src="<?php echo get_template_directory_uri().'/images/' ?>inhabitent-logo-text.svg" alt="Inhabitent Logo"/></a></div>
				<div class="copyright">COPYRIGHT &copy;	2016 INHABITENT</div>	
</div>



					
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
