<?php
//'providers-portal' is id 41 on local & 23 on live
if($post->post_parent == 41 || $post->post_parent == 23){
  if (!(is_user_logged_in())){
?>

<div class="site-overlay inactive" id="login-modal">
  <div class="modal-box">
    <div class="form">
      <div class="title">
        <h2>Action Required</h2>
        <h3>Provider Login</h3>
      </div>

      <?php echo apply_filters( 'the_content','[wppb-login]'); ?>
      <a href="/providers-register">
      <input type="button" class="btn btn-outline-primary" value="Register as a Provider" /></a>

    </div>
  </div>
</div>
<script>
$(document).ready(function(){
  $('#login-modal').removeClass('inactive');
  $('#wppb-submit').attr('class','btn btn-outline-primary')
});
</script>

<?php
  }
}
?>
