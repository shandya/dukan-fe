$(function() {

  let sliderMain = $('#slider-main')
  if (sliderMain) {
    sliderMain.slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      autoplay: true,
      autoplaySpeed: 6000,
    });    
  }
});