<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
	<div class="maincontainer">
		<div class="middleBorder"></div>
		<div class="othercontainer">
			<div class="leftOtherContainer">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
					<?php comments_template( '', true ); ?>
				<?php endwhile; // end of the loop. ?>
			</div><!-- End of left Other Container -->
			<div class="rightOtherContainer">

				<img src="<?php bloginfo('template_directory'); ?>/images/sidebar.jpg" height="600" width="250" alt="" />
				<br/><br/><br/>
			</div><!-- End of right Other Container -->
			<div class="clear"></div>
		</div><!-- End of othercontainer -->
	</div><!-- End of maincontaciner -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>