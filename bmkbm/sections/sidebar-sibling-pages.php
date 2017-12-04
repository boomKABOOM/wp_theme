<?php
$sib_args = array( //get siblings
  'separator'           => '',
  'style'               => 'list',
  'title_li'            => '',
  'use_desc_for_title'  => 1,
  'depth'							  => 1,
  'child_of' => $post->post_parent,
  'exclude' => $post->ID
);
?>

<div class="sidebar--section">
  <h5><?php echo get_the_title($post->post_parent); ?></h5>
  <div class="links-container">
    <?php wp_list_pages($sib_args); ?>
  </div>
</div>
