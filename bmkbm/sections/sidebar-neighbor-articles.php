<div class="sidebar--section">
  <h5><?php include('get-primary-category.php');  ?></h5>
  <div class="links-container">
  <?php
  $query = new WP_Query(
    array(
      'post_type' => 'post',
      'cat' => $wpseo_primary_term
    )
  );
  $posts = $query->posts;

  foreach($posts as $post) {
    ?>
    <li class="cat-item">
      <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
    </li>
    <?php
  }
  ?>
  </div>
</div>
