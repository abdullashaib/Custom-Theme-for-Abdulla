<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 *
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body>

<article class="body_wrapper">

<div class="container content_body">

<nav class="navbar navbar-default">
         
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>        
  </div>
  <!-- Collection of nav links and other content for toggling -->
  <div id="navbarCollapse" class="collapse navbar-collapse">
    <img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/abdulla-40px.png" />
    <ul class="nav navbar-nav">
      <li><a href="<?php echo get_page_link(4); ?>">Home</a></li>
      <li><a href="<?php echo get_page_link(19); ?>">Skills</a></li>
      <li><a href="<?php echo get_page_link(27); ?>">Services</a></li>
      <li><a href="<?php echo get_page_link(25); ?>">Portfolio</a></li>
      <li><a href="<?php echo get_page_link(13); ?>">Contact</a></li>
    </ul>        
    <ul class="nav navbar-nav navbar-right">
      <li><?php get_search_form(); ?></li>
    </ul>      
  </div>
</nav>



<?php $postid = get_the_ID(); //echo $postid?>



