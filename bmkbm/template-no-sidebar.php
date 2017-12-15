<?php /* Template Name: No Sidebar Template */ get_header(); ?>
<?php if (have_posts()):
while (have_posts()) : the_post(); ?>

<div class="wrapper bg-drkblue dark">
  <div class="container slowfade" style="padding:5em 0 2em 0;">
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
    <?php
      if(get_field('intro_text_block')){
        echo '<div class="intro-text">';
        the_field('intro_text_block');
        echo '</div>';
      }
    ?>

  </div>
</div>

<div class="wrapper">
  <div class="container">
    <div class="row">

      <div class="col-12">
        <!-- article -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php
            the_content();

            if(get_field('second_content_block_1')){
              the_field('second_content_block_1');
            }

          ?>
        </article>
        <!-- /article -->
      </div>
    </div>
  </div>
</div>

<div class="wrapper bg-lt-grad second-content-section">
  <div class="container">
    <div class="row">



      <div class="col-12">
        <?php if(get_field('second_content_block_2')){
          the_field('second_content_block_2');
        } else {
        ?>
        <h3>After</h3>
        <?php } ?>
        <?php include('sections/js-slider.php'); ?>
      </div>
    </div>

    <?php if(get_field('second_content_block_3')){ ?>
      <div class="row">
        <div class="col-12">
          <?php the_field('second_content_block_3'); ?>
        </div>
      </div>
    <?php } ?>

  </div>
</div>

<?php endwhile; endif; ?>

<?php include('sections/cta-block.php'); ?>
<?php include('sections/stuck-nav-function.php'); ?>

<?php get_footer(); ?>
