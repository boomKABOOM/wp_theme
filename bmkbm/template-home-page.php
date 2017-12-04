<?php /* Template Name: Home Page Template */ get_header(); ?>
<main>
<div class="wrapper slider" style="background:linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url(<?php
  if(get_field('bg_image')){
    the_field('bg_image');
  } else {
    echo ($themeRoot.'/images/img-main1.jpg');
  }
?>) bottom left no-repeat; background-size:cover;">
  <div class="slide">
    <div class="container slowfade">
      <div class="row slide--content">
        <div class="col-12 col-md-8 offset-0 offset-md-2 text-center slide-up inactive">
          <?php
            if(get_field('home_intro_content')){
              the_field('home_intro_content');
            } else {
            ?>
            <h4>Your business, but with a...</h4>
            <h3>Rx Boom</h3>
            <h4>Your small practice deserves a big digital presence.</h4>
            <?php
            }
          ?>
          <?php
          if( have_rows('btns') ):
            while ( have_rows('btns') ) : the_row();
            ?>
            <a href="<?php the_sub_field('btn_link'); ?>" class="btn btn-outline-primary"><?php the_sub_field('btn_text'); ?></a>

            <?php
            endwhile;
          endif;
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="wrapper home-page-styles bg-img-half" style="background:url(<?php
  if(has_post_thumbnail()){
    the_post_thumbnail_url();
  } else {
    echo ($themeRoot.'/images/img-main2.jpg');
  }
?>) top right no-repeat; background-size:45%;">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <article>
          <h3><?php the_field('section_header'); ?></h3>
          <?php
          if (have_posts()):
            while (have_posts()) : the_post();
              the_content();
            endwhile;
          endif;
          ?>
          <a href="/our-clinic/" class="btn btn-outline-primary">Learn More</a>
        </article>
      </div>
    </div>
  </div>
</div>

<?php include('sections/our-therapies.php'); ?>

<?php include('sections/cta-block.php'); ?>

<?php
if(get_field('add_related_content')){
  include('sections/posts-or-pages-custom.php');
} else {
  include('sections/posts-recent.php');
}
?>
</main>

<?php include('sections/testimonials.php'); ?>

<div class="bg-offwhite-grad"></div>
<?php include('sections/email-signup.php'); ?>

<?php get_footer(); ?>
