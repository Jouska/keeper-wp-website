<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package keeper
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'keeper' ); ?></a>
	<header class="header" id="masthead">
		<nav id="site-navigation" class="main-navigation">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'keeper' ); ?></button> -->
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu-1',
				'container_class'=> 'primary-menu-wrapper-1'
			) );
			?>
			<h1 class="header__logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Keeper</a></h1>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-2',
				'menu_id'        => 'primary-menu-2',
				'container_class'=> 'primary-menu-wrapper-2'
			) );
			?>
		</nav><!-- #site-navigation -->
		
		<?php if ( is_front_page() ) : ?>
			<div class="header__hero-banner"
			style="background-image:url(<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/butterfly_full4.jpg);">
	
			</div>
		<?php endif ?>
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
