<?php 
/**
Single Post Template: Animal Type Posts
Description: Post type for the various animal type descriptions.
*/
?>

<?php

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			
		<div class="animal-post-content">
		
			<h2><?php the_title(); ?></h2>
			
			<?php $image = get_field('image_of_animal'); ?>
			<img src="<?php echo $image['url']; ?>" alt="<?php the_title(); ?>" />
		
			
			<h3>Description</h3>
				<?php the_field( 'animal_description' ); ?>
			
			<h3>Habitat</h3>
				<?php the_field( 'animal_habitat' ); ?>
			
		</div>		

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php get_footer(); ?>
	</div><!-- #site-wrap -->