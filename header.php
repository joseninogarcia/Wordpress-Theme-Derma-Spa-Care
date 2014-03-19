<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" /> 

<script type="text/javascript" language="javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider.js"></script>
<script type="text/javascript" language="javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php bloginfo('template_directory'); ?>/js/general.js"></script>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="wrapper">
	<div id="DS_header">
		<div class="topHead"></div>
		<div class="left_header">
			<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" height="77" width="152" alt="Derma Spa Care Logo"/>
		</div><!-- End of left_header-->
		<div class="right_header">
			<?php wp_nav_menu(array('menu' => 'top_nav')); ?>
			<ul class="rightelements">
				<li>
					<div class="contact_us">
						<span>Give us a call!</span>
						<span><b>US:</b> 619-704-9471</span>
						<span><b>MX:</b> 664-609-4397</span>
					</div>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/request-an-appointment/"class="appointment_button">Request an Appointment</a>
				</li>
			</ul>
			<div class="clear"></div>
		</div><!-- End of right_header -->
		<div class="clear"></div>
	</div><!-- End of DS_header -->
	<?php wp_nav_menu(array('menu'=>'Main Navigation')); ?>
	<div id="wrapbody">
		<div class="topBorder"></div>
