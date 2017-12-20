<?php /* Template Name: Contact Template */ get_header(); ?>
<?php if (have_posts()):
while (have_posts()) : the_post(); ?>

<div class="wrapper img-header drk default-page bg-contact-form" style="background:linear-gradient(to top,  rgba(64, 115, 144, 0.85), rgba(255, 255, 255, 0.5)), url(<?php
  if (has_post_thumbnail()) {
  	the_post_thumbnail_url('full');
  } else {
    echo $themeRoot.'images/img-main1.jpg';
  }
?>) left no-repeat; background-size:cover;">
  <div class="container">
    <div class="row form pt-5 pb-5">
      <div class="col-12 col-sm-8 offset-0 offset-sm-2 pr-0 pr-sm-3 text-center" id="form-content">
        <h3 class="pt-5 pb-5"><?php the_title(); ?></h3>

        <div class="links-container form text-center" id="form">
    			<?php echo do_shortcode('[ninja_form id=3]'); ?>
    		</div>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
  $('#quicklinks a').hover(function(){
    $('#quicklinks a').each(function(){
      $(this).removeClass('active');
    });
  });
  if($(document).width() < 576){
    $('#form-content').appendTo('#page-content');
  } else {
    $('#form-content').prependTo('#page-content');
  }
});
</script>

<?php endwhile; endif; ?>

<?php include('sections/stuck-nav-function.php'); ?>

<?php get_footer(); ?>
