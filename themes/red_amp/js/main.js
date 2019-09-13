(function ($) {

  console.log('updated');
  const tabletBreakpoint = 760;

  $('.main-carousel').flickity({
    // options
    wrapAround: true,
  });

  let index = $('.container-carousel').length;
  let i;
  for (i = 0; i < index; i++) {
    $('#workspace-carousel-' + i).flickity({
      // options
      cellAlign: 'center',
      contain: true,
      wrapAround: false,
    });
  }

  //  Function for open and close the amp community in front page
  $('.button-arrow-amp-community').on('click', function () {
    $('.front-page-amp-community-logos').toggleClass('is-open');
    $('.front-page-button-arrow').toggleClass('turn-arrow');
  });
  // end of amp community function from front pageXOffset


  //Function to open and close the pop up for the Book a Tour



  $(document).on('gform_page_loaded', function () {
    // code to be trigger when next/previous page is loaded
    let $prevInput = $('#gform_previous_button_1').prop('value');
    if ($prevInput === 'Previous') {
      console.log(1);
      $('#gform_previous_button_1').before('<i class="prev-button-arrow fas fa-less-than"></i>');
    }
  });




  const $bookButton = $('.book-tour-popup');
  const $bookForm = $('.book-tour-form-modal'); // TODO add form class here
  const $bookIsOn = 'is-active';
  const $bookCloseX = $('.close-book-tour');




  if (window.innerWidth >= tabletBreakpoint) {
    setupGravityModal();
  }

  function setupGravityModal() {
    $bookButton.on('click', function (event) {
      // console.log('open the modal');
      event.preventDefault();
      $bookForm.addClass($bookIsOn);

    });

    $bookCloseX.on('click', function (event) {
      event.preventDefault();
      $bookForm.removeClass($bookIsOn);

    });

    // end of function for book a tour button

  }



  $('.button-arrow').on('click', function (event) {
    event.preventDefault();
    const $href = $(event.currentTarget).attr('data-scrollto'); // value = #goto
    console.log($($href).offset().top);
    console.log('test');
    $('body,html').animate({
      scrollTop: $($href).offset().top
    });
  });

  $('.mobile-back-to-top').on('click', function (event) {
    event.preventDefault();
    const $href = $(event.currentTarget).attr('data-scrollto'); // value = #goto
    console.log($($href).offset().top);
    console.log('test2');
    $('body,html').animate({
      scrollTop: $($href).offset().top
    });
  });

  //mobile nav menu in header

//   if (($(window).width()) < 761){
//   $('.menu-item-has-children').prepend('<a href="#" class="toggle-submenu"><i class="fas fa-angle-down"></i></a>');
  
// }

  $('.menu-item-has-children').on('click', function(event){
    event.preventDefault();
    $(event.currentTarget).find('.sub-menu').toggleClass('mobile-sub-menu');
  });

  const $hamburguerMenu = $('.hamburguer');
  const $closeHamburguer = $('.cross-close');
  const $mainMenu = $('.menu-menu-1-container');

  $hamburguerMenu.on('click', function() {
    $mainMenu.addClass('is-menu-active');
    $hamburguerMenu.addClass('remove-icon');
    $closeHamburguer.removeClass('remove-icon');
    console.log('HambButton');
  });

  $closeHamburguer.on('click', function() {
    $mainMenu.removeClass('is-menu-active');
    $hamburguerMenu.removeClass('remove-icon');
    $closeHamburguer.addClass('remove-icon');
    console.log('Xbutton');
  });



})(jQuery);
