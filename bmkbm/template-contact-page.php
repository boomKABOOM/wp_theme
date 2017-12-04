<?php /* Template Name: Contact Template */ get_header(); ?>
<?php if (have_posts()):
while (have_posts()) : the_post(); ?>

<div class="wrapper img-header dark" style="background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(<?php
  if (has_post_thumbnail()) {
  	the_post_thumbnail_url('full');
  } else {
    echo $themeRoot.'images/img-main1.jpg';
  }
?>) left no-repeat; background-size:cover;">
  <div class="container" style="padding:12em 0 5em 0;">
    <h3 class="page-title"><?php the_title(); ?></h3>
  </div>
</div>

<div class="wrapper bg-offwhite">
  <div class="container">
		<div class="text-center section-links" id="quicklinks">
			<h3>I would like to:</h3>
			<a href="#form" class="active">Request an Appt</a> | <a href="/providers-portal">Register as a Provider</a> | <a href="#form">Contact the Office</a>
		</div>
    <div class="row form bg-white" id="page-content">
      <div class="col-12 col-sm-6 pr-0 pr-sm-3" id="form-content">
        <div class="links-container form" id="form">
          <h3>Request an Appointment</h3>
    			<?php echo do_shortcode('[ninja_form id=3]'); ?>
    		</div>
      </div>
      <div class="col-12 col-sm-6 text-center" id="the-content">
				<?php the_content(); ?>
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

<?php include('sections/cta-block.php'); ?>

<?php include('sections/email-signup.php'); ?>

<?php get_footer(); ?>
