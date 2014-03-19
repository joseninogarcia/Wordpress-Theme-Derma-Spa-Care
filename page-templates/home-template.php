<?php
/**
 * Template Name: Home Page Content
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
		<div class="sliders">
			<ul class="bxslider">
				<li><img src="<?php bloginfo('template_directory'); ?>/images/banners/01.jpg" height="350" width="980" alt="banner 1" title="Enjoy with the spa" /></li>
				<li><img src="<?php bloginfo('template_directory'); ?>/images/banners/02.jpg" height="350" width="980" alt="banner 2" title="Developed to improved the healing of full-thicknessof wounds." /></li>
				<li><img src="<?php bloginfo('template_directory'); ?>/images/banners/03.jpg" height="350" width="980" alt="banner 3" title="Medicinal Approach" /></li>
			</ul><!-- End of bxslider -->
		</div><!-- End of sliders -->
		
		<div class="maincontainer">
				<div class="middleBorder"></div>
				<h3>IPL PHOTOFACIAL</h3>
				<div class="boxes">
					<div class="left_boxes">
						<img src="<?php bloginfo('template_directory'); ?>/images/img01.png" width="209" height="110" alt="" />
					</div><!-- End of left_boxes -->
					<div class="right_boxes">
						<p>Revitalize the appearance of your skin with our IPL Photo-facial. The highly trained registered nurses at Derma SpaAge-Defying Laser Clinic will use Intense Pulse Light to leave you looking your best.. Reduce pore size, calm rosacea, remove age and brown spots, and reverse the signs of sun damage. We can treat the face, neck, shoulder, chest, and other areas of the body.</p>
						<p><a href="<?php bloginfo('url'); ?>/ipl-photofacial-therapy/" class="buttonCmd">Learn More</a></p>
					</div><!-- End of right_boxes -->
					<div class="clear"></div>
				</div><!-- End of boxes -->

				<h3>CHEMICAL PEELS</h3>
				<div class="boxes">
					<div class="left_boxes">
						<img src="<?php bloginfo('template_directory'); ?>/images/img02.png" width="209" height="110" alt="" />
					</div><!-- End of left_boxes -->
					<div class="right_boxes">
						<p>Wear your skin proudly! Get the clear, glowing complexion you have always wanted with our Medical Grade Chemical Peels. Our experienced Medical Estheticians will customize the peel to meet your skin care goals to bring out the real beauty in your skin! Even out skin tone, reduce the appearance of fine lines and wrinkles, treat pigment disorders, and reduce the signs of sun damage. Choose from the Jessner, Sensi, Clarifying Mask and Ultra Peel. Microscopic to moderate exfoliation may be experienced.</p>
						<p><a href="<?php bloginfo('url'); ?>/chemical-peel/" class="buttonCmd">Learn More</a></p>
					</div><!-- End of right_boxes -->
					<div class="clear"></div>
				</div><!-- End of boxes -->

				<h3>SUNSCREEN SPF-30</h3>
				<div class="boxes">
					<div class="left_boxes">
						<img src="<?php bloginfo('template_directory'); ?>/images/img02.png" width="209" height="110" alt="" />
					</div><!-- End of left_boxes -->
					<div class="right_boxes">
						<p>Protect the skin you’re in! This elegant sunscreen provides 17% Micronized Zinc the highest level of broad-spectrum protection along with the free radical quenching antioxidants A, C, E, Green Tea Extract and CoQ10. This chemical and oil free sunscreen may be used on all skin types. Those with Rosacea, Acneic, and Sensitive skin find this sunblock to be non-irritating and gentle enough for everyday use.</p>
						<p><a href="<?php bloginfo('url'); ?>/products/" class="buttonCmd">Learn More</a></p>
					</div><!-- End of right_boxes -->
					<div class="clear"></div>
				</div><!-- End of boxes -->
			</div><!-- End of maincontaciner -->

<?php get_footer(); ?>