<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package lakes
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'lakes' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
				<ul>
            	<li><a href="../../">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="../">Resident Animals</a>
                	<ul>
                    	<li><a href="#">Great Blue Heron</a></li>
                        <li><a href="#">Beaver</a></li>
                        <li><a href="#">Eastern Gray Squirrel</a></li>
                        <li><a href="#">Mallard</a></li>
                        <li><a href="#">Red Fox</a></li>
                        <li><a href="#">Snapping Turtle</a></li>
                    </ul></li>
                <li><a href="#">Volunteer</a></li>
                <li><a href="#">Visit</a></li>
            </ul>
			<input type="checkbox" id="nav-trigger" class="nav-trigger" />
			<label for="nav-trigger"></label>
		</nav><!-- #site-navigation -->
		
	<div class="site-wrap">
	</header><!-- #masthead -->

	<div id="content" class="site-content">
