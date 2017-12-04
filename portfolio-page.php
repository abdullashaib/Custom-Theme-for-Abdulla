<?php
/**
Template Name: Portfolio Page
Description: Portfolio content page

 */

get_header(); ?>
		
    <?php $the_query = new WP_Query( array( 'showposts'=>30,'cat' => 2 )); ?>
    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    
    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>    
    <?php the_excerpt(__('(more…)')); ?>
                            
    <?php endwhile;?>
    <?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
    
    			
    <?php endwhile; ?>	   


<?php get_footer(); ?>
		