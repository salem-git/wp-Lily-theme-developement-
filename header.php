<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-Lily
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>
        <?php bloginfo('name'); ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
 
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <div class="logo">
     <?php   if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
        } ?>
    </div>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-lily' ); ?></a>
	<nav id="site-navigation"  class="navbar navbar-expand-md navbar-dark top bg-dark">
    <a class="navbar-brand" href="#">
        <?php bloginfo('name'); ?>
    </a>
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'wp-lily' ); ?></button>
	<?php
            wp_nav_menu([
            'menu'            => 'primary',
            'theme_location'  => 'menu-1',
            'container'       => 'div',
            'container_id'    => 'navbarCollapse',
            'container_class' => 'collapse navbar-collapse',
            'menu_id'         => false,
            'menu_class'      => 'navbar-nav mr-auto',
            'depth'           => 0,
            'fallback_cb'     => 'functions::fallback',
            'walker'          => new lily_navbar()
            ]);
        ?>
	</nav>
</div>


	<header id="masthead" class="site-header">
		<div class="site-branding">
		
		</div><!-- .site-branding -->

		
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
