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
                <h2>Cheers to a Wonderful Year!</h2>
                <h3>Special Holiday Offer.</h3>
                <p>'Tis the season of gratitude... and giving. As a special thank you for a wonderful year, BoomKABOOM studio is offering complimentary on-site photography OR a small practice media kit with the purchase of a new website. But hurry, the offer ends January 18, 2018.</p>
              <?php } ?>
          </div>
          <div class="col-12">
            <?php
            if( have_rows('cta_buttons') ):
              while ( have_rows('cta_buttons') ) : the_row();
              ?>
              <a href="<?php the_sub_field('link'); ?>" class="btn btn-outline-primary text-small"><?php the_sub_field('text'); ?></a>

              <?php
              endwhile;
            else:
              echo '<a href="/holiday-2017" class="btn btn-outline-primary text-small">Learn more, book now.</a>';
            endif;
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
