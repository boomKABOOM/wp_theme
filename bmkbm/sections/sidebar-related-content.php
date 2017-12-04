<?php
if(get_field('add_related_content')){
  echo('<div class="sidebar--section">');
  if (get_field('section_heading')){
    echo('<h5>'.get_field('section_heading').'</h5>');
  } else {
    echo('<h5>Related Content</h5>');
  }
  if( have_rows('posts_or_pages') ):
    echo('<div class="links-container">');
    while ( have_rows('posts_or_pages') ) : the_row();
      $post = get_sub_field('post_or_page');
      $link_type = get_sub_field('link_type');
      $link = get_sub_field('link');
      $media_object = get_sub_field('media_object');
      setup_postdata( $post, $link_type, $link, $media_object );

      $item_link = get_permalink();
      $link_target = '_self';

      if($link_type == 'external'){
        $item_link = $link;
        $link_target = '_blank';
      } elseif ($link_type == 'download') {
        $item_link = $media_object;
        $link_target = '_blank';
      } else {
        //stay default
      }

      $title_text = get_the_title();

      echo('<li><a href="'.$item_link.'" target="'.$link_target.'">'.wp_trim_words( $title_text , '7' ).'</a></li>');

      wp_reset_postdata();
    endwhile;
    echo('</div>');
  echo('</div>');
  endif;
}
?>
