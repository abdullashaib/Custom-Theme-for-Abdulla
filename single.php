<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>


      <?php
    		// Start the loop.
    		while ( have_posts() ) : the_post(); ?>
          <h2><?php single_post_title(); ?></h2>
          
    			<?php 
          the_post_thumbnail();
          the_content(); 
    
    			// End of the loop.
    		endwhile;
    	?>

<?php get_footer(); ?>

