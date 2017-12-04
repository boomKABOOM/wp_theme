<?php
while (have_posts()) : the_post();
  if(is_home()){
    echo '<div class="col-12 col-md-6">';
    include('sections/post-grid-item.php');
    echo '</div>';
  } else if(is_category()){
    echo '<div class="col-12">';
    include('sections/post-list-item.php');
    echo '</div>';
    wp_reset_postdata();
    echo '<hr/>';
  } else{
    echo '<div class="col-12">';
    include('sections/post-list-item.php');
    echo '</div>';
  }
  wp_reset_postdata();
endwhile;
?>
