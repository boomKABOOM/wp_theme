<div class="wrapper dark" style="background:linear-gradient(to right,  rgba(64, 115, 144, 0.85), rgba(255, 255, 255, 0.5)), url(<?php if(get_field('cta_bg_image')){
  the_field('cta_bg_image');
} else {
  echo $themeRoot.'images/img-main3.jpg';
}?>) no-repeat; background-size:cover; background-position:0 0; border-top:1px solid #333;">
  <div class="container">
    <div class="row p-2 cta-content">
      <div class="col-12 p-3">
        <div class="row">
          <div class="col-12 col-sm-6">
              <?php
              if(get_field('cta_content')){
                the_field('cta_content');
              } else { ?>
                <h2>CUSTOMIZE YOUR WEBSITE TODAY.</h2>
                <h3>Start your NY in style.</h3>
                <p>boomKABOOM studio is a brand and design consultancy located in Austin, TX and serving clients around the world. We are dedicated to empowering clients with the brand identity, digital presence, and printed collateral needed to market their small practice simply and effectively.</p>
              <?php } ?>
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
