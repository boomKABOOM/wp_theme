<?php include('sections/login-modal.php'); ?>
<?php $themeRoot = "/wp-content/themes/bmkbm/"; ?>

<footer>
  <div class="wrapper footer-block bg-drk-grad">
    <div class="container">
      <div class="row">
        <div class="col-6 col-sm-3 p-3">
          <div class="content-subheading">
            <strong>Be<br/>Your<br/>Best.</strong>
          </div>
          <div class="social-links">
            <a href=""><i class="icons8-facebook"></i></a>
            <a href=""><i class="icons8-twitter-filled"></i></a>
            <a href=""><i class="icons8-instagram-filled"></i></a>
            <a href=""><i class="icons8-yelp-filled"></i></a>
          </div>
          <small><h5>Move Beyond Pain.</h5></small>
        </div>
        <div class="col-6 col-sm-2 p-3 color-ltgray">
          <h5>Clinic</h5>
          <?php footer_nav_1(); ?>
        </div>
        <div class="col-6 col-sm-2 p-3 color-ltgray">
          <h5>The Team</h5>
          <?php footer_nav_2(); ?>
        </div>
        <div class="col-6 col-sm-3 p-3  color-ltgray">
          <h5>Specialties</h5>
          <?php footer_articles_nav(); ?>
        </div>
        <div class="col-6 col-sm-2 p-3  color-ltgray">
          <h5>Location</h5>
           <a href="https://goo.gl/maps/WuYmYFdYjAN2" target="_blank">11561 Edgerton Ave NE,<br/>
           Rockford, MI 49341</a>
           <a href="tel:(616) 866-2727">(616) 866-2727</a>
           <br/>
           <h5>Hours</h5>
           M - F 9am - 6pm</br/>
        </div>
      </div>
    </div>
  </div>
  <div class="wrapper copyright-block bg-offwhite">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-6 text-center text-sm-left">
          &copy; 2017 Robinet Physical Therapy
        </div>
        <div class="col-12 col-sm-6 text-center text-sm-right">
          <?php footer_copyright_nav(); ?>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php include('sections/email-capture.php'); ?>

<script src="<?php echo $themeRoot; ?>/include/js/script.js"></script>

<?php wp_footer(); ?>

</body>
</html>
