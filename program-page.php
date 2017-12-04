<?php
/**
Template Name: Home Page
Description: Blog body content page

 */

get_header(); ?>

<div class="container wrapper_banner">
  <div class="home_banner">
    <img src="<?php echo get_template_directory_uri(); ?>/images/cover-image3.png" class="img-responsive" />
  </div>
</div>
<div class="container content_body">
  <div class="row">
    <div class="col-md-8">
		  
		
    	  <?php $the_query = new WP_Query( array( 'showposts'=>30,'cat' => 2 )); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    
        <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>    
        <?php the_excerpt(__('(more…)')); ?>
                            
        <?php endwhile;?>
    		<?php /* Start the Loop */ ?>
    		<?php while ( have_posts() ) : the_post(); ?>
    
    			
    		<?php endwhile; ?>	
    </div>
    <div class="col-md-4 rightside">
      <?php get_sidebar(); ?>
    </div>
  </div>
<?php get_footer(); ?>
