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

<script src="<?php echo $themeRoot; ?>/include/js/script.js"></script>

<?php wp_footer(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-77383163-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-77383163-1');
</script>
<!-- Start of Async Drift Code -->
<script>
!function() {
  var t;
  if (t = window.driftt = window.drift = window.driftt || [], !t.init) return t.invoked ? void (window.console && console.error && console.error("Drift snippet included twice.")) : (t.invoked = !0,
  t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
  t.factory = function(e) {
    return function() {
      var n;
      return n = Array.prototype.slice.call(arguments), n.unshift(e), t.push(n), t;
    };
  }, t.methods.forEach(function(e) {
    t[e] = t.factory(e);
  }), t.load = function(t) {
    var e, n, o, i;
    e = 3e5, i = Math.ceil(new Date() / e) * e, o = document.createElement("script"),
    o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + i + "/" + t + ".js",
    n = document.getElementsByTagName("script")[0], n.parentNode.insertBefore(o, n);
  });
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('538re4eb69ve');
</script>
<!-- End of Async Drift Code -->
<script type='text/javascript' src='https://boomkaboom.com/wp-includes/js/wp-embed.min.js?ver=4.9.1'></script>

</body>
</html>
