<?php

/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body id="back-to-top-beggining" <?php body_class(); ?>>
	<div id='background-mobile'></div> 
	<!-- for mobile background opacity purpose -->

	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html('Skip to content'); ?></a>


		<!-- .site-branding -->
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<p class="site-description"><?php bloginfo('description'); ?></p>
			</div>
			<!-- end of .site-branding -->

			<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
	</div>
	<!-- #site-navigation -->
	<nav id="site-navigation" class="main-navigation" role="navigation">
		<!-- .site-logo -->
		<div class="site-logo">
			<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
				<img src="<?php echo esc_url(get_template_directory_uri()) . '/images/Logo_The_AMP.png' ?>" alt="site-logo">
			</a>
		</div>
		<div class="hamburguer" aria-controls="primary-menu" aria-expanded="false">
			<i class="fas fa-bars"></i>
		</div>
		<div class="cross-close remove-icon" aria-controls="primary-menu" aria-expanded="false">
			<i class="fas fa-times"></i>
		</div>

		<?php wp_nav_menu(array(
			'theme_location' => 'primary',
			'menu_id' => 'primary-menu',
		)); ?>
	</nav>
	<div class="header-shadow-effect">

	</div>



	</header><!-- #masthead -->

	<div id="content" class="site-content">