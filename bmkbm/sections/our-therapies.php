<div class="wrapper bg-offwhite double-diag--up">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2>Physical Therapy Services</h2>
        <h3>Learn more about our specialties.</h3>

        <div class="after-content-links">
          <a href="/therapies/rehab-recovery-pt/" class="box-item">
            <div class="title">
              <div class="image">
                <img src="<?php echo $themeRoot; ?>/images/icon-weights.png" />
              </div>
              <h2>Rehab and Recovery PT</h2>
            </div>
            Build or regain strength to alleviate muscular, skeletal/joint or nervous system pain, injuries or dysfunction.
          </a>
          <a href="/therapies/pelvic-health-healing-pt/" class="box-item">
            <div class="title">
              <div class="image">
                <img src="<?php echo $themeRoot; ?>/images/icon-geartalk.png" />
              </div>
              <h2>Pelvic Health and Healing PT</h2>
            </div>
            We help you minimize pelvic pain and the effects of injuries or dysfunction with a focus on the pelvic floor.
          </a>
          <a href="/therapies/prehab-elite-emerging-athletes/" class="box-item">
            <div class="title">
              <div class="image">
                <img src="<?php echo $themeRoot; ?>/images/icon-shoe.png" />
              </div>
              <h2>Prehab™ for Athletes</h2>
            </div>
            We champion elite and emerging athletes by fine tuning their physiological potential through sports therapy.
          </a>
          <a href="/therapies/prehab-for-the-workplace/" class="box-item">
            <div class="title">
              <div class="image">
                <img src="<?php echo $themeRoot; ?>/images/icon-hardhat.png" />
              </div>
              <h2>Prehab™ for the Workplace</h2>
            </div>
            We advocate your health, safety and peak performance in the workplace through the biomechanics of sports therapy.
          </a>
        </div>

      </div>
    </div>
    <div class="row pt-5 mt-5 mb-5">
      <div class="col-12 col-sm-7">
        <?php if(get_field('video_script')){
          echo '<div style="box-shadow:0 0 25px rgba(0,0,0,.5);">';
          the_field('video_script');
          echo '</div>';
        } else { ?>
          <img style="box-shadow:0 0 25px rgba(0,0,0,.5);" src="<?php echo $themeRoot; ?>/images/img1.jpg" />
        <?php } ?>
      </div>
      <div class="col-12 col-sm-5 pl-5 pt-5" style="align-self: center;">
        <?php if(get_field('video_text_content')){
          the_field('video_text_content');
        } else { ?>
          <h2>More stuff</h2>
          <h3>Video Stuff, Bro</h3>
          <p>We advocate your health, safety and peak performance in the workplace through the biomechanics of sports therapy.</p>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
