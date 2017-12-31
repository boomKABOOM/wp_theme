<?php /* Template Name: Home Page Template */ get_header(); ?>
<main>
<div class="wrapper slider" style="background:linear-gradient(rgba(255,255,255,.2), rgba(255,255,255,.8)), url(<?php
  if(get_field('bg_image')){
    the_field('bg_image');
  } else {
    echo ($themeRoot.'images/img-main1.jpg');
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
            <h4>Your business, but with an...</h4>
            <h3>Rx BOOM</h3>
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
    echo ($themeRoot.'images/img-main2.jpg');
  }
?>) top right no-repeat; background-size:45%; border-top:1px solid #333;">
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

          if( have_rows('after_content_links') ){
            while ( have_rows('after_content_links') ){
              the_row();
              ?>
              <small><a href="<?php the_sub_field('link'); ?>" class="btn btn-outline-primary text-small mt-2"><?php the_sub_field('text'); ?></a></small>
            <?php
            }
          } else {
          ?>
          <a href="/contact" class="btn btn-outline-primary">Learn More</a>
        <?php } ?>
        </article>
      </div>
    </div>
  </div>
</div>

<?php include('sections/our-therapies.php'); ?>

<?php include('sections/cta-block.php'); ?>


</main>


<?php get_footer(); ?>
