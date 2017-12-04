<?php /* Template Name: Provider Portal Template */ get_header(); ?>
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

      <?php if(is_user_logged_in()){ ?>

      <div class="col-12 col-sm-8 col-md-9">
        <!-- article -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php the_content(); ?>
        </article>
        <!-- /article -->
      </div>
      <div class="col-12 col-sm-4 col-md-3 sidebar">
        <?php get_sidebar(); ?>
      </div>

    <?php } else { ?>
      <div class="col-12 col-sm-8">
        <?php include('sections/restricted-providers.php'); ?>
      </div>
      <div class="col-12 col-sm-4 sidebar">
        <h3>Login</h3>
        <div class="form bg-white" style="margin:0 0 1em 0;">
          <?php echo apply_filters( 'the_content','[wppb-login]'); ?>
        </div>
        <?php get_sidebar(); ?>
      </div>
    <?php } ?>
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
