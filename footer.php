<?php
/**
 * The template for displaying the footer
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 *
 */
  $year = date('Y');
?>

</div>
<div class="container navbar_last">
  <div class="row">
     <div class="col-sm-6">
        <h3>Services</h3>
        <ul>
          <li>ASP.NET Web Development</li>
          <li>Java & J2EE Web Development </li>
          <li>LAMP (LINUX, PHP, MySQL) Responsive Web Development</li>
          <li>Mobile Apps Development (Android and iOS)  </li>
          <li>Hybrid Mobile Development    </li>
          <li>Database Management and Data Processing  </li>
          <li>Responsive Websites using content management system (Umbraco, WordPress and Joomla) </li>
        </ul>
     </div>
     <div class="col-sm-6">
        <h3>Portfolio</h3>
        <ul>
        <?php $the_query = new WP_Query( array( 'showposts'=>30,'cat' => 2 )); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        
        <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>    
                           
        <?php endwhile;?>
          <?php /* Start the Loop */ ?>
          <?php while ( have_posts() ) : the_post(); ?>		
        <?php endwhile; ?>
        </ul>
     </div>
  </div>
      <p> &copy;  Copyright <?php echo $year ?>  AbdullaShaib.com. All Rights Reserved. </p>
    
</div>
 
</article>
</body>
</html>