<?php
$themeRoot = "/wp-content/themes/bmkbm/";
?>
<article id="post-<?php the_ID(); ?>" class="post-list-item">
  <h4>
    <?php the_category(' | '); ?>
  </h4>
  <a class="title" href="<?php echo get_permalink(); ?>">
    <h3><?php the_title(); ?></h3>
  </a>

  <div class="row">
    <div class="col-6">
      <div class="date"><?php echo get_the_date('M d, Y'); ?></div>
    </div>
    <div class="col-6 text-right">
      <div class="author"><?php echo get_the_author(); ?></div>
    </div>
  </div>

  <?php include('social-share.php'); ?>

  <a class="image" href="<?php echo get_permalink(); ?>"> <img src="<?php if ( has_post_thumbnail() ) {
    	the_post_thumbnail_url('medium_large');
    } else{
      echo($themeRoot . 'images/img-main1.jpg');
    }
    ?>" /></a>
  <div class="text">
    <?php
      $post_content = get_the_content();
      echo wp_trim_words( $post_content , '35' );
     ?>
  </div>

  <div class="link">
    <a href="<?php echo get_permalink(); ?>">Read More</a>
  </div>
</article>
