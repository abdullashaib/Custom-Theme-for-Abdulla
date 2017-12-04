<?php
/**
 *
Template Name: Member Page
Description: This is the page where all users will be directed to this page

*/


get_header(); ?>

<div class="row">
    <div class="col-md-8">

<?php

if(is_user_logged_in()) {

  if( current_user_can('administrator')) { 
    echo " You are admin";
  } else if( current_user_can('subscriber')) {
    echo " You are subscriber";
  }
  
} else {

  echo "You don't have access to this page";
  
}

?>
    </div>
    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>