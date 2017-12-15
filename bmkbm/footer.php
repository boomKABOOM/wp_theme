<?php include('sections/login-modal.php'); ?>
<?php $themeRoot = "/wp-content/themes/bmkbm/"; ?>

<footer>
  <div class="wrapper footer-block bg-offwhite" style="border-top:1px solid #333;">
    <div class="container">
      <div class="row">
        <div class="col-6 col-sm-6 p-3">
          <div class="content-subheading">
            <strong>Your<br/>Business,<br/>With an<br/>Rx BOOM.</strong>
          </div>
        </div>
        <div class="col-6 col-sm-2 p-3 color-ltgray">
          <?php footer_nav_1(); ?>
        </div>
        <div class="col-6 col-sm-2 p-3 color-ltgray">
          <?php footer_nav_2(); ?>
        </div>
        <div class="col-6 col-sm-2 p-3  color-ltgray">
          <?php footer_articles_nav(); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="wrapper copyright-block">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-6 text-center text-sm-left">
          &copy; <?php echo date("Y"); ?> <?php echo get_bloginfo( 'name' ); ?>
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
