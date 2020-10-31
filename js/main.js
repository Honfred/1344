$(function() {
  //slick slider init
  $('.js-topslider').slick({
    speed: 600,
    dots: true,
    arrows: false
  });

  //fancybox init
  $('[data-fancybox]').fancybox({
    buttons: [
      "zoom",
      "close"
    ],
  });
});