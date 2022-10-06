$(function() {

  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();

      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
      });
    });
  });

  let sliderCategories = $('#slider-categories');
  if (sliderCategories) {
    sliderCategories.slick({
      infinite: true,
      slidesToShow: 9,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1199,
          settings: 
          {
            slidesToShow: 8,
          },
        },
        {
          breakpoint: 991,
          settings: 
          {
            slidesToShow: 6,
          },
        },
        {
          breakpoint: 767,
          settings: "unslick",
        }
      ]
    });     
  }

 
  let sliderFacts = $('#slider-facts');
  if (sliderFacts) {
    sliderFacts.slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      // autoplay: true,
      // autoplaySpeed: 6000,
      mobileFirst: true,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
          }
        },
      ]
    });     
  }

  let sliderTestimonials = $('#slider-testimonials');
  if (sliderTestimonials) {
    sliderTestimonials.slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 6000,
      mobileFirst: true,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
          }
        },
      ]
    });     
  }  

  // let sliderChosenProducts = $('#slider-chosen-products');
  // if (sliderChosenProducts) {
  //   sliderChosenProducts.slick({
  //     infinite: true,
  //     slidesToShow: 8,
  //     slidesToScroll: 1
  //   });     
  // }
  
  let sliderApprovedProducts = $('#slider-approved-products');
  if (sliderApprovedProducts) {
    sliderApprovedProducts.slick({
      infinite: false,
      slidesToShow: 2,
      slidesToScroll: 2,
      arrow: true,
      swipe: false,
      mobileFirst: true,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 5,
          }
        },
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 6,
            slidesToScroll: 6,
          }
        }
      ]
    }).on('beforeChange', function(event, slick, currentSlide, nextSlide){
      let slideToShow;

      if($(window).width() >= 1200) {
        slideToShow = 6
      } else if ($(window).width() >= 992) {
        slideToShow = 5
      } else if ($(window).width() >= 768) {
        slideToShow = 4
      } else {
        slideToShow = 2
      }

      if ((currentSlide >= 0) && (nextSlide >= slideToShow)) {
        $('.approved-products-banner').addClass('hidden')
      } else {
        $('.approved-products-banner').removeClass('hidden')
      }
    });     
  }

  let sliderProductInnovation = $('#slider-product-innovation');
  if (sliderProductInnovation) {
    sliderProductInnovation.slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 6000,
      mobileFirst: true,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 4,
          }
        }
      ]
    });     
  } 

  let sliderInnovationHighlight = $('#slider-innovation-highlight');
  if (sliderInnovationHighlight) {
    sliderInnovationHighlight.slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true
    });     
  }


  // let sliderProductTags = $('#list-product-tags');
  // if (sliderProductTags) {
  //   sliderProductTags.slick({
  //     slidesToShow: 1,
  //     slidesToScroll: 1,
  //     variableWidth: true,
  //     infinite: false,
  //     dots: false,
  //     arrows: false
  //   });     
  // } 
});