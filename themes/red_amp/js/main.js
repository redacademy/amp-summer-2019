(function($) {
  console.log('updated test');
  const tabletBreakpoint = 760;

  /*ABOUT PAGE MOBILE CAROUSEL */

  $('.mobile-about-carousel').flickity({
    // options
    wrapAround: true,
    cellAlign: 'center'
  });

  let index = $('.container-carousel').length;
  let i;
  for (i = 0; i < index; i++) {
    $('meet_the_team' + i).flickity({
      // options
      cellAlign: 'center',
      contain: true,
      wrapAround: false
    });
  }

  /*FRONT PAGE CAROUSEL */

  $('.main-carousel').flickity({
    // options
    wrapAround: true
  });

  index = $('.container-carousel').length;
  for (i = 0; i < index; i++) {
    $('#workspace-carousel-' + i).flickity({
      // options
      cellAlign: 'center',
      contain: true,
      wrapAround: false
    });
  }

  //  Function for open and close the amp community in front page
  $('.button-arrow-amp-community').on('click', function() {
    $('.front-page-amp-community-logos').toggleClass('is-open');
    $('.front-page-button-arrow').toggleClass('turn-arrow');
  });

  $('.button-arrow-amp-workspace').on('click', function(event){
    event.preventDefault();
    $('.workspace-icons-flex-two').find('.workspace-icon-flex-two').toggleClass('workspace-icon-flex-two-open');
    console.log('is this working?');

    $('.workspace-icons').find('.workspace-icon-flex-three').toggleClass('workspace-icon-flex-three-open');

    // if you are getting errors try using an if statement e.g. 
    // if($('.workspace-icons-flex-two').length){
    //   console.log('workspace icons flex two exists');
    // }
  });




  //Function to open and close the pop up for the Book a Tour

  $(document).on('gform_page_loaded', function() {
    // code to be trigger when next/previous page is loaded
    let $prevInput = $('#gform_previous_button_1').prop('value');
    if ($prevInput === 'Previous') {
      console.log(1);
      $('#gform_previous_button_1').before(
        '<i class="prev-button-arrow fas fa-less-than"></i>'
      );
    }
  });

  const $bookButton = $('.book-tour-popup');
  const $bookForm = $('.book-tour-form-modal-outer-wrapper'); // TODO add form class here
  const $bookIsOn = 'is-active';
  const $bookCloseX = $('.close-book-tour');

  if (window.innerWidth >= tabletBreakpoint) {
    setupGravityModal();
  }

  function setupGravityModal() {
    $bookButton.on('click', function(event) {
      // console.log('open the modal');
      event.preventDefault();
      $bookForm.addClass($bookIsOn);
    });

    $bookCloseX.on('click', function(event) {
      event.preventDefault();
      $bookForm.removeClass($bookIsOn);
    });

    // end of function for book a tour button
  }

  $('.button-arrow').on('click', function(event) {
    event.preventDefault();
    const $href = $(event.currentTarget).attr('data-scrollto'); // value = #goto
    console.log($($href).offset().top);
    console.log('test');
    $('body,html').animate({
      scrollTop: $($href).offset().top
    });
  });

  $('.mobile-back-to-top').on('click', function(event) {
    event.preventDefault();
    const $href = $(event.currentTarget).attr('data-scrollto'); 
    console.log($($href).offset().top);
    console.log('test2');
    $('body,html').animate({
      scrollTop: $($href).offset().top
    });
  });



  //mobile nav menu in header
  $('.menu-item-has-children').prepend('<a href="#" class="mobile-menu-arrow"><i class="fas fa-angle-down"></i></a>');
    $('.mobile-menu-arrow').on('click', function (event) {
    event.preventDefault();
    $('.menu-item-has-children').find('.sub-menu').toggleClass('mobile-sub-menu');
  });

  const $hamburguerMenu = $('.hamburguer');
  const $closeHamburguer = $('.cross-close');
  const $mainMenu = $('.menu-menu-1-container');

  if ($(window).width() > 760) {
    $hamburguerMenu.addClass('display-nothing');
    $closeHamburguer.addClass('display-nothing');
    console.log('desktop');
  }


  $hamburguerMenu.on('click', function () {
    $mainMenu.addClass('is-menu-active');
    $hamburguerMenu.addClass('remove-icon');
    $closeHamburguer.removeClass('remove-icon');
    console.log('HambButton');
    $('body').css('overflow','hidden');
    $('#background-mobile').addClass('background-mobile-opacity-on');
    $('#site-navigation').css('position','initial');
  });

  $closeHamburguer.on('click', function () {
    $mainMenu.removeClass('is-menu-active');
    $hamburguerMenu.removeClass('remove-icon');
    $closeHamburguer.addClass('remove-icon');
    console.log('Xbutton');
    $('body').css('overflow','visible');
    $('#background-mobile').removeClass('background-mobile-opacity-on');
    $('#site-navigation').css('position','relative');
  });



})(jQuery);
