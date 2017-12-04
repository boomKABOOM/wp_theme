<?php if(is_page() && $post->post_parent ){ //has a parent ?>
<div class="breadcrumb">

  <?php
  $sep = ' &raquo; ';

  echo '<a href="'. site_url() .'">Home</a>';
  echo $sep;

  $ancestors = get_ancestors($id, 'page', 'post_type');
  $ancestors = array_reverse($ancestors);

  $x = 0;
  while($x < count($ancestors)) {
    $post = get_post($ancestors[$x]);
    echo '<a href="'. get_permalink($ancestors[$x]) .'">'. get_the_title($ancestors[$x]) .'</a>';
    $x++;
    echo $sep;
  }

  wp_reset_postdata();
  echo '<span>'. get_the_title() .'</span>';

  ?>

</div>
<?php } ?>
