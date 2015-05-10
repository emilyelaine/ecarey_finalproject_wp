<?php
/*
Template Name: Resident Animal Page
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

	<div id="animal-primary" class="content-area">
		<main id="meet_the_animals-page" class="site-main" role="main">
		<h2><?php the_title(); ?></h2>
		
		<div class="meet-the-animals">
			<?php

			// check if the repeater field has rows of data
			if( have_rows('animal_type') ):

 			// loop through the rows of data
   			$count = 1;
   			while ( have_rows('animal_type') ) : the_row();

       		// display a sub field value
    		$animalname = get_sub_field ('name_of_animal');
    		$animalimage = get_sub_field ('animal_image');
    		$animallink = get_sub_field ('animal_page_link');
    		
    		?>
    			<div class="animal-group animal-group<?php echo $count; ?>">
    				<div class="animal-type">
    					<img src="<?php echo $animalimage['url']; ?>" alt="<?php echo $animalimage['alt']; ?>">
    					<span class="animal-header"><h3><a href="<?php echo $animallink; ?>"><?php echo $animalname; ?></a></h3></span>
    				</div>	
		    	</div>
		    	
    	 <?php $count++; ?>	
   		 <?php endwhile;

		else :

  		  // no rows found

		endif;

		?>
		</div><!-- #meet the animals -->
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>