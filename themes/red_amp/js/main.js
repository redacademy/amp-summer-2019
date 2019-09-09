(function($) {
  console.log('testing');

  $('.main-carousel').flickity({
    // options
    cellAlign: 'left',
    contain: true
  });



  $('.button-arrow-amp-community').on('click', function(){
    $('.front-page-amp-community-logos').toggleClass('is-open');
    $('.front-page-button-arrow').toggleClass('turn-arrow');
  });










})(jQuery);
