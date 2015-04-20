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

		<nav id="site-navigation" class="main-navigation" role="navigation">
				<ul>
            	<li class="nav-item"><a href="../../">Home</a></li>
                <li class="nav-item"><a href="#">About</a></li>
                <li class="nav-item"><a href="../">Resident Animals</a>
                	<ul>
                    	<li class="nav-subitem"><a href="#">Great Blue Heron</a></li>
                        <li class="nav-subitem"><a href="#">Beaver</a></li>
                        <li class="nav-subitem"><a href="#">Eastern Gray Squirrel</a></li>
                        <li class="nav-subitem"><a href="#">Mallard</a></li>
                        <li class="nav-subitem"><a href="#">Red Fox</a></li>
                        <li class="nav-subitem"><a href="#">Snapping Turtle</a></li>
                    </ul></li>
                <li class="nav-item"><a href="#">Volunteer</a></li>
                <li class="nav-item"><a href="#">Visit</a></li>
            </ul>
			<input type="checkbox" id="nav-trigger" class="nav-trigger" />
			<label for="nav-trigger"></label>
		</nav><!-- #site-navigation -->
	
	<div class="site-wrap">
		<div class="site-branding">
			<div class="site-title">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
