<?php /* Template Name: No Sidebar Template */ get_header(); ?>
<?php if (have_posts()):
while (have_posts()) : the_post(); ?>

<div class="wrapper img-header dark" style="background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(<?php
  if (has_post_thumbnail()) {
  	the_post_thumbnail_url('full');
  } else {
    echo $themeRoot.'images/img-main1.jpg';
  }
?>) left no-repeat; background-size:cover;">
  <div class="container" style="padding:5em 0;">
    <div class="row">
      <div class="col-12 text-center">
        <h1><?php
        if(get_field('page_title')){
          the_field('page_title');
        } else {
          the_title();
        }
        ?></h1>
      </div>
    </div>
  </div>
</div>


<div class="wrapper content-wrapper">
  <div class="container">
    <div class="row">

      <div class="col-12">
        <!-- article -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php
          //'providers-portal' is id 41
          if($post->post_parent == 41){
            if (is_user_logged_in()){
              the_content();
            }
          } else{
            the_content();
          }
          ?>
        </article>
        <!-- /article -->
      </div>
    </div>
  </div>
</div>

<?php endwhile; endif; ?>

<?php
  if(get_field('add_related_content')){
    include('sections/posts-or-pages-custom.php');
  }
?>
<?php include('sections/cta-block.php'); ?>
<?php include('sections/email-signup.php'); ?>
<?php include('sections/stuck-nav-function.php'); ?>
<?php get_footer(); ?>
