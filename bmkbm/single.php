<?php get_header(); ?>

<div class="wrapper">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-8 col-md-9">
        <!-- article -->
        <article id="post-<?php the_ID(); ?>" class="post-single-item">
          <h2>
            <?php the_category(' | '); ?>
          </h2>
          <h1><?php the_title(); ?></h1>
          <div class="row">
            <div class="col-12">
              <?php
              if(get_field('this_is_an_event')){
                if(get_field('event_date')){
                  echo('
                  <div class="event-date">
                    <strong>EVENT DATE</strong>: '.get_field('event_date').
                  '</div>');
                } else {
                  echo get_the_date('M d, Y');
                }
                if(get_field('event_title')){
                  echo('
                  <div class="event-title">
                    <strong>EVENT TITLE</strong>: '. get_field('event_title').
                  '</div>');
                }
                if(get_field('event_location')){
                  echo('
                  <div class="event-location">
                    <strong>EVENT LOCATION</strong>: '. get_field('event_location').
                  '</div>');
                }
              } else {
                echo ('<div class="date">');
                echo (get_the_date('M d, Y'));
                echo ('</div>');
              }
            ?>
            </div>
            <div class="col-12">
              <div class="author">by: <?php echo get_the_author(); ?></div>
            </div>
          </div>

          <?php include('sections/social-share.php'); ?>

          <a class="image" href="<?php echo get_permalink(); ?>"> <img src="<?php if ( has_post_thumbnail() ) {
            	the_post_thumbnail_url('large');
            } else{
              echo($themeRoot . 'images/img-main1.jpg');
            }
            ?>" /></a>
          <?php
          //providers have special access. check to see if these posts are for their eyes only
          $category = get_the_category();
          $cat_slug = $category[0]->slug;
          $cat_parent_id = $category[0]->category_parent;

          if($cat_parent_id){ // restricted access to posts of certain categories
            $cat_parent_slug = get_category_parents($cat_parent_id, false, '', true, false);
            if($cat_parent_slug == 'providers-only'){
              if(is_user_logged_in()){
                the_content();
              } else {
                include('sections/restricted-providers.php');
              }
            } else {
              the_content();
            }
          } else {
            the_content();
          }
          ?>
        </article>
        <!-- /article -->

        <div class="row">
          <div class="col-6">
            <strong>PREVIOUS</strong><br/>
            <?php previous_post_link(); ?>
          </div>
          <div class="col-6 text-right">
            <strong>NEXT</strong><br/>
            <?php next_post_link(); ?>
          </div>
        </div>

      </div>
      <div class="col-12 col-sm-4 col-md-3 sidebar">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?php include('sections/stuck-nav-function.php'); ?>
<?php get_footer(); ?>
