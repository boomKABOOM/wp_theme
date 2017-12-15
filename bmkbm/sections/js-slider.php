<?php
if( have_rows('add_a_slider') ){
  while ( have_rows('add_a_slider') ){ the_row();
  $images = get_sub_field('images');
  $size = 'full';
?>
<div class="js-slider">
<?php
  foreach( $images as $image ){ ?>
    <div class="slide">
      <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
    </div>
  <?php } //end foreach ?>
</div>
<?php } //endwhile
} //endif
?>

<script>
$(document).ready(function(){
  $('.js-slider').each(function(){
    $(this).slick({
      autoplay: true,
      autoplaySpeed: 3500,
      dots: true,
      arrows: false,
      infinite: true,
      centerMode: true,
      centerPadding: '0',
      slidesToShow: 3,
      slidesToScroll: 1,
      responsive: [{
        breakpoint: 768,
          settings: {
            slidesToShow: 1
          }
        }]
    });
  });
});
</script>
