<div class="wrapper dark" style="background:linear-gradient(to right, rgba(0, 0, 0, 0.95), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.2) ), url(<?php if(get_field('cta_bg_image')){
  the_field('cta_bg_image');
} else {
  echo $themeRoot.'images/img-main3.jpg';
}?>) no-repeat; background-size:cover; background-position:0 0;">
  <div class="container">
    <div class="row p-2 cta-content">
      <div class="col-12 p-3">
        <div class="row">
          <div class="col-12 pt-3">
            <h2>
              <?php
              if(get_field('cta_intro')){
                the_field('cta_intro');
              } else {
                echo 'Cheers to a wonderful year!';
              } ?>
            </h2>
            <h3 class="cta-title">
              <?php
              if(get_field('cta_title')){
                the_field('cta_title');
              } else {
                echo 'Special Holiday Offer.';
              } ?>
            </h3>
          </div>
          <div class="col-12 col-sm-6">
            <h4>
              <?php
              if(get_field('cta_text')){
                the_field('cta_text');
              } else {
                echo "boomKABOOM studio is a brand and design consultancy located in Austin, TX and serving clients around the world. We are dedicated to empowering clients with the brand identity, digital presence, and printed collateral needed to market their small practice simply and effectively.";
              } ?>
            </h4>
          </div>
        </div>

        <?php
        if( have_rows('cta_buttons') ):
          while ( have_rows('cta_buttons') ) : the_row();
          ?>
          <a href="<?php the_sub_field('link'); ?>" class="btn btn-outline-primary "><?php the_sub_field('text'); ?></a>

          <?php
          endwhile;
        else:
          echo '<a href="/contact/" class="btn btn-outline-primary">Let\'s Get Started.</a>';
        endif;
        ?>
      </div>
    </div>
  </div>
</div>
