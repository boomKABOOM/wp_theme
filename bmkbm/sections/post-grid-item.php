<?php
$themeRoot = "/wp-content/themes/bmkbm/";
$item_link = get_permalink();
$link_target = '_self';
?>

<article id="post-<?php the_ID(); ?>" class="post-grid-item">
  <div class="date"><?php echo get_the_date('M d, Y'); ?></div>
  <a class="image" href="<?php echo $item_link; ?>" target="<?php echo $link_target; ?>" style="background:url(<?php if ( has_post_thumbnail() ) {
    	the_post_thumbnail_url('medium_large');
    } else{
      echo($themeRoot . 'images/img-main1.jpg');
    }
    ?>) no-repeat top center;">&nbsp;</a>
  <div class="content">
    <div class="category">
      <?php the_category(' | '); ?>
    </div>
    <a class="title" href="<?php echo $item_link; ?>"  target="<?php echo $link_target; ?>">
      <h3><?php
        $title_text = get_the_title();
        echo wp_trim_words( $title_text , '9' );
       ?></h3>
    </a>

    <div class="link">
      <a href="<?php echo $item_link; ?>"  target="<?php echo $link_target; ?>" class="btn btn-outline-primary btn-orange">Read More</a>
    </div>
  </div>
</article>
