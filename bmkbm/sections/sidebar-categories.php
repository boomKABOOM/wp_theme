<div class="sidebar--section">
  <h5>Topics</h5>
  <?php
  $cat_args = array(
    'separator'           => '',
    'hierarchical'	      => false,
    'style'               => 'list',
    'title_li'            => '',
    'use_desc_for_title'  => 1,
  );
  ?>
  <div class="open-container">
    <?php wp_list_categories($cat_args); ?>
  </div>
</div>
