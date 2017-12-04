<?php
$share_url = get_permalink();
$share_title = get_the_title();
$share_text = get_the_title();
?>

<div class="social-links">
  <strong>Share</strong>
  <a href="https://www.facebook.com/sharer.php?u=<?php echo $share_url; ?>" target="_blank"><i class="icons8-facebook"></i></a>
  <a href="https://twitter.com/share?text=<?php echo $share_title; ?>&url=<?php echo $share_url; ?>" target="_blank"><i class="icons8-twitter-filled"></i></a>
</div>
