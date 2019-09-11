(function($) {
  console.log('testing');

  $('.main-carousel').flickity({
    // options
    wrapAround: true,
  });

  let index = $('.container-carousel').length;
  let i;
  for (i=0; i<index; i++ ){
    $('#workspace-carousel-'+i).flickity({
      // options
      cellAlign: 'center',
      contain: true,
      wrapAround: false,
    });
  }


  $('.button-arrow-amp-community').on('click', function(){
    $('.front-page-amp-community-logos').toggleClass('is-open');
    $('.front-page-button-arrow').toggleClass('turn-arrow');
  });










})(jQuery);
