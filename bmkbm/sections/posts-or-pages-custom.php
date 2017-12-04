<div class="wrapper bg-offwhite posts-wrapper double-diag--down--dark">
  <div class="container">
    <div class="text-center">
      <h2>
          <?php if (get_field('section_heading')){
            the_field('section_heading');
          } ?><br/>
        </h2>
        <h3>
          <?php if (get_field('section_subheading')){
            the_field('section_subheading');
          }
          ?>
      </h3>
    </div>
    <div class="row">
      <div class="col-12"></div>
    </div>
    <div class="row <?php
    //write classes that will hide content
    $content_options = get_field('content_options');

    if(!(in_array('date', $content_options))){
      echo 'hide-date ';
    }

    if(!(in_array('excerpt', $content_options))){
      echo 'hide-excerpt ';
    }

    if(!(in_array('categories', $content_options))){
      echo 'hide-categories ';
    } ?>">
      <?php
      if( have_rows('posts_or_pages') ):
        while ( have_rows('posts_or_pages') ) : the_row();
          if(get_field('layout_options') == 2){
            echo '<div class="col-12 col-md-6">';
          } elseif(get_field('layout_options') == 3){
            echo '<div class="col-12 col-md-4">';
          } elseif(get_field('layout_options') == 4){
            echo '<div class="col-12 col-md-3">';
          } elseif(get_field('layout_options') == 'auto'){
            echo '<div class="col-12 col-md-auto">';
          }
            $post = get_sub_field('post_or_page');
            $link_type = get_sub_field('link_type');
            $link = get_sub_field('link');
            $media_object = get_sub_field('media_object');
            setup_postdata( $post, $link_type, $link, $media_object );
            include('post-grid-item.php');
            wp_reset_postdata();
          echo '</div>';
        endwhile;
      else :
      endif;
      ?>
    </div>
  </div>
</div>
