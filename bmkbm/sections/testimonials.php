<link rel="stylesheet" type="text/css" href="<?php echo $themeRoot; ?>/include/vendors/slick/slick.css"/>
<script src="<?php echo $themeRoot; ?>/include/vendors/slick/slick.js" type="text/javascript" charset="utf-8"></script>

<div class="wrapper bg-offwhite pt-0">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-4 text-center text-sm-left">
        <h2>Testimonials</h2>
        <h3>Physical Therapy Success Stories</h3>
        <div id="test-dotnav"></div>
      </div>
      <div class="col-12 col-sm-8" style="flex">
        <div class="testimonials-container" id="testimonials">
          <div class="testimonial">
            <div class="text">
              Barb has been awesome and fully understands my issue. She has been encouraging when I have been discouraged at times. She explains my problems and how to help them very well. I highly recommend to any woman having issues with pelvic floor tension to see Barb!
            </div>
            <div class="author">
              - a patient receiving treatment for women’s health issues
            </div>
          </div>
          <div class="testimonial">
            <div class="text">
              I have found physical therapy treatment at Robinet Physical Therapy to exceed my expectations. My visits went very well and I was treated with courtesy and respect on all levels. I would highly recommend Robinet PT to my family and friends.
            </div>
            <div class="author">
              - recent patient
            </div>
          </div>
          <div class="testimonial">
            <div class="text">
              Jason allows me to continue my normal active life. With his assistance, I can continue to run and bike, staying loose.
            </div>
            <div class="author">
              - local runner
            </div>
          </div>
          <div class="testimonial">
            <div class="text">
              I’ve never had therapy before so I didn’t know what to expect. Now I do. What a great service you provide! My knee is getting stronger every day!
            </div>
            <div class="author">
              – a patient who underwent total knee replacement
            </div>
          </div>
          <div class="testimonial">
            <div class="text">
              Very special for me! Jason helped me a lot! Thank God!
            </div>
            <div class="author">
              – local patient
            </div>
          </div>
          <div class="testimonial">
            <div class="text">
              Jason is awesome! After being told by my surgeon that I would never be able to elevate on my toe, Jason has since helped me to exceed expectations and will help me to succeed in playing Division II college basketball.
            </div>
            <div class="author">
              – current college basketball player
            </div>
          </div>
          <div class="testimonial">
            <div class="text">
              Robinet PT has helped me to continue to run as pain-free as possible. Without Jason working with me, I would not have had as much success in my running career as I have had in the past.
            </div>
            <div class="author">
              – college scholarship runner
            </div>
          </div>
          <div class="testimonial">
            <div class="text">
              When I first came to Jason, I couldn’t run 5 miles without pain. Now I’m training for my fourth Ironman. He opened up a whole new athletic world for me.
            </div>
            <div class="author">
              – past patient
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
  $('#testimonials').slick({
    autoplay: true,
    autoplaySpeed: 5000,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    appendDots: '#test-dotnav'
  });
});

</script>
