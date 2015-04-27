<?php
/*
Template Name: Home Page
*/
?>

<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package lakes
 */

get_header(); ?>

	<div id="primary" class="content-area" class="site-wrap">
		<main id="home-page" class="site-main" role="main">
		<div class="main-background">
		<ul class="slideshow">	
			<?php

			// check if the repeater field has rows of data
			if( have_rows('main_slider') ):

 			// loop through the rows of data
   			while ( have_rows('main_slider') ) : the_row();

       		// display a sub field value
    		$image = get_sub_field ('main_image');
    		$header = get_sub_field ('header');
    		$description = get_sub_field ('description');
    		
    		?>
    		<li>
    			<div class="group group<?php echo $count; ?>">
    				<div class="background_slider">
    					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
    				</div>
    				<div class="slider_description">
    					<h2 class="header"><?php echo $header; ?></h2>
    					<p class="description"><?php echo $description; ?></p>
    				</div>	
    			</div>
    		</li>
    	<?php	
   		 endwhile;

		else :

  		  // no rows found

		endif;

		?>
		</ul>
		</div>
		
		<div class="about_section">
			<h3><?php the_field('about_header'); ?></h3>
			<p><?php the_field('about_us_description'); ?></p>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>