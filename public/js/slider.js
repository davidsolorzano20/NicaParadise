/**
 * Created by luis on 09-25-16.
 */
$(function ($) {
  $(window).load(function() {
    $('.vegas-slide').vegas({
      delay: 6000,
      timer: false,
      shuffle: true,
      firstTransition: 'zoomOut',
      firstTransitionDuration: 3000,
      transitionDuration: 2000,
      slides: [
        { src: "../slider/1.jpg"},
        { src: "../slider/2.jpg" },
        { src: "../slider/3.jpg" },
        { src: "../slider/4.jpg" },
        { src: "../slider/5.jpg" },
        { src: "../slider/6.jpg" },
        { src: "../slider/7.jpg" },
      ],
      transition: [ 'zoomOut', 'fade','swirlRight', 'swirlLeft' ],
      animation:['random'],
    });
  });

})(window.jQuery);