<?php
  if (!(is_page_template( 'template-home-page.php')) && !(is_page_template( 'template-contact-page.php') && !(is_page_template( 'template-contact-page.php')))){

?>

  <div class="site-overlay inactive" id="email-modal">
    <div class="modal-box email-capture">
      <div id="close-overlay">X</div>
      <div class="form dark">
        <div class="title">
          <h2>Receive our monthly email newsletter</h2>
          <h3>Sign Up. Read. Be Your Best</h3>
        </div>

        <!-- Begin MailChimp Signup Form -->
        <form action="https://robinetpt.us14.list-manage.com/subscribe/post?u=62af9762b7dd199b7492d5ef3&amp;id=b9b9e90b73" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

          <div class="text-center">
            <div style="display:inline-block;">
              <input type="email" style="width:350px;" placeholder="Your email address*" value="" name="EMAIL" class="required email" id="mce-EMAIL">
            	<div id="mce-responses" class="clear">
            		<div class="response" id="mce-error-response" style="display:none"></div>
            		<div class="response" id="mce-success-response" style="display:none"></div>
            	</div>
            </div>
            <div style="display:inline-block;">
              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_62af9762b7dd199b7492d5ef3_b9b9e90b73" tabindex="-1" value=""></div>
              <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
            </div>
          </div>
        </form>


        <!--End mc_embed_signup-->

      </div>
    </div>
  </div>
  <script>
  $(document).ready(function(){
    // check cookie
    var visited = $.cookie("visited");

    if (visited == null) {
      console.log($.cookie("visited"));
      $('#email-modal').removeClass('inactive');
      //$('#email-modal').appendTo('body');
    }


  $('#close-overlay, #nf-field-10').click(function(){
    $('#email-modal').addClass('inactive');
  });



  $(document).keyup(function(e) {
    if (e.keyCode == 27) {
      $('#email-modal').addClass('inactive');
    }
  });


  // set cookie
  $.cookie('visited', 'yes', { expires: 30, path: '/' });

  });
  </script>

<?php } ?>
