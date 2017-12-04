<?php get_header(); ?>

<div class="wrapper img-header dark" style="background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(<?php echo $themeRoot.'images/img-main1.jpg'; ?>) left no-repeat; background-size:cover;">
  <div class="container" style="padding:12em 0 5em 0;">
    <div class="row">
      <div class="col-12 text-center">
        <h2>hmm...</h2>
      </div>
    </div>
  </div>
</div>

<div class="wrapper content-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-8 col-md-9">
        <!-- article -->
        <article>
					<h1>Well this is awkward.</h1>

					<p>Not really sure what happened, but we'll try to get it fixed ASAP. In the mean time, please consider the following:</p>
					<ol>
							<li>Try navigating starting from our <strong><a href="<?php echo home_url(); ?>"><?php _e( 'home page', 'html5blank' ); ?></a></strong> to find what you are looking for.</li>
							<li>Contact us and let us know if you are still having technical difficulty.</li>
					</ol>
        </article>
        <!-- /article -->
      </div>
      <div class="col-12 col-sm-4 col-md-3 sidebar">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
