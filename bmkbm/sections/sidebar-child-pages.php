<?php
// this arg is included in the referring file
// $child_args = array(
//   'separator'           => '',
//   'style'               => 'list',
//   'title_li'            => '',
//   'use_desc_for_title'  => 1,
//   'depth'							  => 1,
//   'child_of' => $post->ID
// );
?>
<div class="sidebar--section">
  <h5><?php the_title(); ?></h5>
  <div class="links-container">
    <?php wp_list_pages($child_args); ?>
  </div>
</div>
