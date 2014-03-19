<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- End of wrapbody -->
	<div id="footer">
		<div class="leftFooter">
			<ul>
				<li><a href="<?php bloginfo('url'); ?>/">Home</a></li>
				<li><a href="<?php bloginfo('url'); ?>/contact">Contact</a></li>
				<li><a href="<?php bloginfo('url'); ?>/our-staff">Our Staff</a></li>
				<li><a href="<?php bloginfo('url'); ?>/about-us">About Us</a></li>
			</ul>
			<div class="clear"></div>

			<h4>Derma Spa Care</h4>
			<h5>Paseo Ensenada #1458, playas de Tijuana</h5>
			<h5>&copy; 2012 Derma Spa - Dermatology service of your beauty</h5>
		</div><!-- End of leftFooter -->
		<div class="rightFooter">
			<ul class="icons">
				<li><img src="<?php bloginfo('template_directory'); ?>/images/fb.png" width="58" height="58" alt=""/></li>
				<li><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" width="58" height="58" alt=""/></li>
			</ul>
			<img src="<?php bloginfo('template_directory'); ?>/images/bulate.png" width="110" height="160" alt="Derma Spa Doctor" class="footerDoctor" />
		</div><!-- End of rightFooter -->
		<div class="clear"></div>
	</div><!-- End of footer -->
</div><!-- End of wrapper -->

<?php wp_footer(); ?>
</body>
</html>