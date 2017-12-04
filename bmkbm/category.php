<?php get_header(); ?>

<div class="wrapper category-wrapper bg-offwhite">
  <div class="container">
    <div class="page-title category-title full-only">
      <h2>Robinet PT Blog</h2>
      <h1><?php echo single_cat_title(); ?></h1>
      <?php echo category_description(); ?>
    </div>
  </div>
</div>
<div class="wrapper content-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-8 col-md-9 p-5 pr-sm-5">
        <div class="row">
          <?php get_template_part('loop'); ?>

        </div>
        <?php get_template_part('pagination'); ?>
      </div>
      <div class="col-12 col-sm-4 col-md-3 sidebar">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?php include('sections/cta-block.php'); ?>
<?php include('sections/email-signup.php'); ?>
<?php include('sections/stuck-nav-function.php'); ?>
<?php get_footer(); ?>
