<?php 
/**
Single Post Template: Animal Type Posts
Description: Post type for the various animal type descriptions.
*/
?>

<?php

get_header(); ?>
	<div class="site-wrap">
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
		<aside class="care_stories">
    	<h2>In Our Care</h2>
    	<div class="in_our_care">
    		<img alt="Heron with Broken Wing" src="http://10000lakes-sanctuary.emilyecarey.com/wp-content/uploads/2015/04/injuredblueheron.jpg">
        <div class="aside_background1"> 
            <h3>Great Blue Heron</h3>
            <p class="health_history">This Heron was brought to us by a family that found the bird near their home, unable to fly, and appearing to be in distress.  Upon arrival, the team performed an X-ray and determined she had experienced some type of trauma to her wing that caused a small fracture.</p>
            <p class="learn_more"><a href="#">Learn More about her story &#43;</a></p>
        </div>
    	</div>
        <div class="in_our_care">
    		<img alt="Otter Pup" src="http://10000lakes-sanctuary.emilyecarey.com/wp-content/uploads/2015/04/otterpup.jpg">
        <div class="aside_background2">
            <h3>Otter Pups</h3>
            <p class="health_history">This little otter pup was abandoned by his mother.  He was malnurished when brought to us and needs to learn how to behave in order to survive on his own in the wild. He will be at the sanctuary until he is able to survive on his own.</p>
            <p class="learn_more"><a href="#">Follow his recovery &#43;</a></p>
        </div>
    	</div>
    </aside>
	</div><!-- #primary -->
	</div>
<?php get_footer(); ?>
	
