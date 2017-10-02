<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Frenches
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700|Montserrat:300,400,500,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_bloginfo("template_directory"); ?>/bower_components/css-hamburgers/dist/hamburgers.min.css">
	<link rel="stylesheet" href="<?php echo get_bloginfo("template_directory"); ?>/bower_components/animate.css/animate.css">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'frenches' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<h1 class="banner__title-logo">
					<span class="image-container">
						<a href="/">
							<img class="logo-image image-container__image" src="<?php echo get_bloginfo("template_directory"); ?>/images/src/logo-v4-fat.png" alt="Le Vrai Interactive">
						</a>
					</span>
				</h1>
			<?php endif; ?>

			<button class="menu-btn menu-toggle hamburger hamburger--squeeze" aria-controls="primary-menu" aria-expanded="false">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>
			<nav class="main-nav main-nav--hidden" id="site-navigation">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu'
					) );
				?>
			</nav><!-- #site-navigation -->
		</div><!-- .site-branding -->
		<div class="the-blob"></div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
