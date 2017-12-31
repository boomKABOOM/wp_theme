<?php get_header(); ?>

<?php if (have_posts()):
while (have_posts()) : the_post(); ?>
<section>
<div class="wrapper img-header drk default-page" style="background:linear-gradient(to top,  rgba(64, 115, 144, 0.85), rgba(255, 255, 255, 0.5)), url(<?php
  if (has_post_thumbnail()) {
  	the_post_thumbnail_url('full');
  } else {
    echo $themeRoot.'images/img-main1.jpg';
  }
?>) left no-repeat; background-size:cover;">
  <div class="container slowfade" style="padding:6em 0 4em 0;">
    <?php if(!(get_field('remove_title_subtitle'))){ ?>

      <div class="page-title">
        <h2><?php
          if(get_field('page_intro')){
            the_field('page_intro');
          } else {
            echo get_the_title(wp_get_post_parent_id( $post_ID ));
          }
        ?></h2>
        <h1><?php
        if(get_field('page_title')){
          the_field('page_title');
        } else {
          the_title();
        }
        ?></h1>
      </div>

    <?php } ?>

  </div>
</div>

<div class="wrapper content-wrapper">
  <div class="container has-sidebar">
    <div class="row">
      <div class="col-12 col-sm-8 pr-5 pt-5 pb-5 pr-sm-5">
        <?php include('sections/breadcrumb.php'); ?>
        <!-- article -->
        <article id="post-<?php the_ID(); ?>">
          <?php

              the_content();

            if( have_rows('after_content_links') ):
              while ( have_rows('after_content_links') ) : the_row();
              ?>
              <small><a href="<?php the_sub_field('link'); ?>" class="btn btn-outline-primary text-small mt-2"><?php the_sub_field('text'); ?></a></small>

              <?php
              endwhile;
            endif;
          ?>
        </article>
        <!-- /article -->
      </div>
      <div class="col-12 col-sm-4 sidebar">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?php endwhile; endif; ?>
</section>

<?php include('sections/cta-block.php'); ?>
<?php include('sections/stuck-nav-function.php'); ?>
<?php get_footer(); ?>
