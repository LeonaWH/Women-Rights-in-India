'use strict';
(function($) {
  $('document').ready(function() {

    /* Current Facts Slider */
    if ('.ct-js-current-facts__slider'.length) {
      $('.ct-js-current-facts__slider').slick({
        arrows: true,
        slidesToShow: 4,
        autoplay: false,
        prevArrow: '<button type="button" class="slick-arrow slick-arrow--prev">' + '<img src="https://www.solodev.com/assets/statistics-slider/arrow-prev.jpg" />' + '</button>',
        nextArrow: '<button type="button" class="slick-arrow slick-arrow--next">' + '<img src="https://www.solodev.com/assets/statistics-slider/arrow-next.jpg" />' + '</button>',
        responsive: [
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 2
            }
          }, {
            breakpoint: 767,
            settings: {
              slidesToShow: 2
            }
          }, {
            breakpoint: 479,
            settings: {
              slidesToShow: 1
            }
          }
        ]
      });
    }

  });

})(jQuery);