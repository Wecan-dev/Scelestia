    $(document).ready(function () {
        setTimeout(function () {
          $('.elipse').fadeOut(300);
        }, 3000)
      });


$('.multiple-card').slick({
  autoplay:true,
  autoplaySpeed: 6000,
  speed: 500,
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 4,
  arrows: false,
  dots:false,
  responsive: [
  {
    breakpoint: 700,
    settings: {
      arrows: false,
      dots: false,
      slidesToShow: 1,
      slidesToScroll: 1
    }
  },
  {
    breakpoint: 1024,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 3,
    }
  }
  ]
});



$('.multiple-team').slick({
  autoplay: true,
  autoplaySpeed: 6000,
  speed: 500,
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3,
  arrows: true,
  dots:false,
  responsive: [
  {
    breakpoint: 700,
    settings: {
      arrows: true,
      slidesToShow: 1,
      slidesToScroll: 1
    }
  },
  {
    breakpoint: 1024,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2,
    }
  }
  ]
});


(function ($) {
    "use strict";

    /*[ Load page ]
    ===========================================================*/
    $(".animsition").animsition({
        inClass: 'fade-in',
        outClass: 'fade-out',
        inDuration: 2000,
        outDuration: 800,
        linkElement: '.animsition-link',
        loading: true,
        loadingParentElement: 'html',
        loadingClass: 'animsition-loading-1',
        loadingInner: '<div data-loader="ball-scale"></div>',
        timeout: false,
        timeoutCountdown: 5000,
        onLoadEvent: true,
        browser: [ 'animation-duration', '-webkit-animation-duration'],
        overlay : false,
        overlayClass : 'animsition-overlay-slide',
        overlayParentElement : 'html',
        transition: function(url){ window.location.href = url; }
    });

    /*[ Back to top ]
    ===========================================================*/
    var windowH = $(window).height()/2;

    $(window).on('scroll',function(){
      if ($(this).scrollTop() > windowH) {
        $("#myBtn").css('display','flex');
      } else {
        $("#myBtn").css('display','none');
      }
    });

    $('#myBtn').on("click", function(){
      $('html, body').animate({scrollTop: 0}, 300);
    });



     /*[ Fixed Header ]
     ===========================================================*/
     var posWrapHeader = $('.topbar').height();
     var header = $('.container-menu-header');

     $(window).on('scroll',function(){

      if($(this).scrollTop() >= posWrapHeader) {
        $('.header1').addClass('fixed-header');
        $(header).css('top',-posWrapHeader); 

      }  
      else {
        var x = - $(this).scrollTop(); 
        $(header).css('top',x); 
        $('.header1').removeClass('fixed-header');
      } 

      if($(this).scrollTop() >= 200 && $(window).width() > 992) {
        $('.fixed-header2').addClass('show-fixed-header2');
        $('.header2').css('visibility','hidden'); 
        $('.header2').find('.header-dropdown').removeClass("show-header-dropdown");

      }  
      else {
        $('.fixed-header2').removeClass('show-fixed-header2');
        $('.header2').css('visibility','visible'); 
        $('.fixed-header2').find('.header-dropdown').removeClass("show-header-dropdown");
      } 

    });

    /*[ Show menu mobile ]
    ===========================================================*/
    $('.btn-show-menu-mobile').on('click', function(){
      $(this).toggleClass('is-active');
      $('.wrap-side-menu').slideToggle();
    });

    var arrowMainMenu = $('.arrow-main-menu');

    for(var i=0; i<arrowMainMenu.length; i++){
      $(arrowMainMenu[i]).on('click', function(){
        $(this).parent().find('.sub-menu').slideToggle();
        $(this).toggleClass('turn-arrow');
      })
    }

    $(window).resize(function(){
      if($(window).width() >= 992){
        if($('.wrap-side-menu').css('display') == 'block'){
          $('.wrap-side-menu').css('display','none');
          $('.btn-show-menu-mobile').toggleClass('is-active');
        }
        if($('.sub-menu').css('display') == 'block'){
          $('.sub-menu').css('display','none');
          $('.arrow-main-menu').removeClass('turn-arrow');
        }
      }
    });


    /*[ remove top noti ]
    ===========================================================*/
    $('.btn-romove-top-noti').on('click', function(){
      $(this).parent().remove();
    })


    /*[ Block2 button wishlist ]
    ===========================================================*/
    $('.block2-btn-addwishlist').on('click', function(e){
      e.preventDefault();
      $(this).addClass('block2-btn-towishlist');
      $(this).removeClass('block2-btn-addwishlist');
      $(this).off('click');
    });

    $(".item-menu-mobile").on( "click", function() {
      $('.wrap-side-menu').hide(); //oculto mediante id

      $('.wrap-side-menu').css('display','none');
      $('.btn-show-menu-mobile').toggleClass('is-active');

    });



    jQuery(document).ready(function($) {
      var galleryItems = $('.cd-gallery').children('li');

      galleryItems.each(function(){
        var container = $(this);

        // preview image hover effect - desktop only
        container.on('mouseover', '.move-right, .move-left', function(event){
          hoverItem($(this), true);
        });
        container.on('mouseleave', '.move-right, .move-left', function(event){
          hoverItem($(this), false);
        });

        // update slider when user clicks on the preview images
        container.on('click', '.move-right, .move-left', function(event){
          event.preventDefault();
          if ( $(this).hasClass('move-right') ) {
            var selectedPosition = container.find('.cd-item-wrapper .selected').index() + 1;
            nextSlide(container);
          } else {
            var selectedPosition = container.find('.cd-item-wrapper .selected').index() - 1;
            prevSlide(container);
          }
        });
      });


      function hoverItem(item, bool) {
        ( item.hasClass('move-right') )
        ? item.toggleClass('hover', bool).siblings('.selected, .move-left').toggleClass('focus-on-right', bool)
        : item.toggleClass('hover', bool).siblings('.selected, .move-right').toggleClass('focus-on-left', bool);
      }

      function nextSlide(container, dots, n){
        var visibleSlide = container.find('.cd-item-wrapper .selected');
        if(typeof n === 'undefined') n = visibleSlide.index() + 1;
        visibleSlide.removeClass('selected');
        container.find('.cd-item-wrapper li').eq(n).addClass('selected').removeClass('move-right hover').prevAll().removeClass('move-right move-left focus-on-right').addClass('hide-left').end().prev().removeClass('hide-left').addClass('move-left').end().next().addClass('move-right');
      }

      function prevSlide(container, dots, n){
        var visibleSlide = container.find('.cd-item-wrapper .selected');
        if(typeof n === 'undefined') n = visibleSlide.index() - 1;
        visibleSlide.removeClass('selected focus-on-left');
        container.find('.cd-item-wrapper li').eq(n).addClass('selected').removeClass('move-left hide-left hover').nextAll().removeClass('hide-left move-right move-left focus-on-left').end().next().addClass('move-right').end().prev().removeClass('hide-left').addClass('move-left');
      }

    });
  })(jQuery);

  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    dots: true,
    asNavFor: '.slider-nav'
  });
  $('.slider-nav').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    arrows: true,
    centerMode: false,
    focusOnSelect: true
  });




  jQuery('.multiple-items').slick({
    dots: true,
    autoplay: true,
    dots: true,
    slidesToShow: 4,
    slidesToScroll: 4,
    customPaging : function(slider, i) {
      var thumb = jQuery(slider.$slides[i]).data();
            // return '<a>'+(i+1)+'</a>'; // <-- old
            return '<a>'+('0'+(i+1)).slice(-2)+'</a>'; // <-- new
          },
       responsive: [
  {
    breakpoint: 700,
    settings: {
      arrows: false,
      dots: false,
      slidesToShow: 1,
      slidesToScroll: 1
    }
  },
  {
    breakpoint: 1024,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2,
    }
  }
  ]

        });
 jQuery('.multiple-items2').slick({
    autoplay: true,
    dots: false,
    slidesToShow: 4,
    slidesToScroll: 4,
       responsive: [
  {
    breakpoint: 700,
    settings: {
      arrows: false,
      dots: false,
      slidesToShow: 1,
      slidesToScroll: 1
    }
  },
  {
    breakpoint: 1024,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2,
    }
  }
  ]

        });
