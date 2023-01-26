(function($) {
  "use strict";
  var a, t;
  $("#current_date").length && (document.getElementById("current_date").innerHTML = ["Бүтэн сайн", "Даваа", "Мягмар", "Лхагва", "Пүрэв", "Баасан", "Хагас сайн"][(a = new Date).getDay()] + " , " + ["1 сар", "2 сар", "3 сар", "4 сар", "5 сар", "6 сар", "7 сар", "8 сар", "9 сар", "10 сар", "11 сар", "12 сар"][a.getMonth()] + " " + a.getDate() + " , " + a.getFullYear()), (-1 != (t = navigator.userAgent.toLowerCase()).indexOf("msie") || -1 != t.indexOf("trident")) && e("body").addClass("ie");
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '821044639064174',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v3.2'
    });
  };
  (function(d, s, id) {
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) return;
   js = d.createElement(s); js.id = id;
   js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
   fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk'));
    "use strict";
    $('a.fbshare').click(function(e){
            e.preventDefault();
            var winWidth = 520;
            var winHeight = 350;
            var loc = $(this).attr('href');
            var title  = $(this).attr('title');
            var descr  = $(this).data('description');
            var image  = $(this).data('image');
            var winTop = (screen.height / 2) - (winHeight / 2);
            var winLeft = (screen.width / 2) - (winWidth / 2);
            //window.open('http://www.facebook.com/sharer.php?s=100&p[title]=' + title + '&p[summary]=' + descr + '&p[url]=' + loc + '&p[images][0]=' + image, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
            FB.ui({
                method: 'share',
                display: 'popup',
                href: loc,
            }, function(response){});
        });
        $('a.twshare').click(function(e){
              e.preventDefault();
              var loc = $(this).attr('href');
              var title  = $(this).attr('title');
              window.open('http://twitter.com/share?url=' + loc + '&text=' + title + '&', 'twitterwindow', 'height=450, width=550, top='+($(window).height()/2 - 225) +', left='+$(window).width()/2 +', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
        });
  // meanmenu
  $("#mobile-menu").meanmenu({
    meanMenuContainer: ".mobile-menu",
    meanScreenWidth: "992"
  });

  // info - bar
  $(".info-bar").on("click", function() {
    $(".extra-info").addClass("info-open");
  });

  $(".close-icon").on("click", function() {
    $(".extra-info").removeClass("info-open");
  });

  $(window).on("scroll", function() {
    var scroll = $(window).scrollTop();
    if (scroll < 245) {
      $(".header-sticky").removeClass("sticky");
    } else {
      $(".header-sticky").addClass("sticky");
    }
  });

  // mainSlider
  function mainSlider() {
    var BasicSlider = $(".slider-active");
    BasicSlider.on("init", function(e, slick) {
      var $firstAnimatingElements = $(".single-slider:first-child").find(
        "[data-animation]"
      );
      doAnimations($firstAnimatingElements);
    });
    BasicSlider.on("beforeChange", function(e, slick, currentSlide, nextSlide) {
      var $animatingElements = $(
        '.single-slider[data-slick-index="' + nextSlide + '"]'
      ).find("[data-animation]");
      doAnimations($animatingElements);
    });
    BasicSlider.slick({
      autoplay: false,
      autoplaySpeed: 10000,
      dots: false,
      fade: true,
      arrows: true,
      prevArrow:
        '<button type="button" class="slick-prev"> <i class="fas fa-long-arrow-alt-left"></i> </button>',
      nextArrow:
        '<button type="button" class="slick-next"><i class="fas fa-long-arrow-alt-right"></i></button>',
      responsive: [
        { breakpoint: 767, settings: { dots: false, arrows: false } }
      ]
    });

    function doAnimations(elements) {
      var animationEndEvents =
        "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";
      elements.each(function() {
        var $this = $(this);
        var $animationDelay = $this.data("delay");
        var $animationType = "animated " + $this.data("animation");
        $this.css({
          "animation-delay": $animationDelay,
          "-webkit-animation-delay": $animationDelay
        });
        $this.addClass($animationType).one(animationEndEvents, function() {
          $this.removeClass($animationType);
        });
      });
    }
  }
  mainSlider();

  $(".slider-active-stage").slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    centerPadding: "400px",
    prevArrow:
      '<button type="button" class="slick-prev"> <i class="fas fa-long-arrow-alt-left"></i> </button>',
    nextArrow:
      '<button type="button" class="slick-next"><i class="fas fa-long-arrow-alt-right"></i></button>',
    centerMode: true,
    responsive: [
      {
        breakpoint: 1400,
        settings: {
          infinite: true,
          dots: false,
          centerPadding: "200px"
        }
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          centerPadding: "0px"
        }
      },
      {
        breakpoint: 767,
        settings: {
          centerPadding: "0px"
        }
      },
      {
        breakpoint: 550,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerPadding: "0px"
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  // owlCarousel
  $(".owl-carousels").owlCarousel({
    loop: true,
    margin: 0,
    items: 1,
    navText: [
      '<i class="fa fa-angle-left"></i>',
      '<i class="fa fa-angle-right"></i>'
    ],
    nav: true,
    dots: false,
    responsive: {
      0: {
        items: 1
      },
      767: {
        items: 3
      },
      992: {
        items: 5
      }
    }
  });

  // owlCarousel
  $(".post-sm-gallery").owlCarousel({
    loop: true,
    margin: 20,
    items: 3,
    navText: [
      '<i class="fa fa-angle-left"></i>',
      '<i class="fa fa-angle-right"></i>'
    ],
    nav: true,
    dots: false,
    responsive: {
      0: {
        items: 2
      },
      767: {
        items: 3
      },
      992: {
        items: 2
      },
      1200: {
        items: 3
      }
    }
  });
  // owlCarousel
  $(".gallery-active").owlCarousel({
    loop: true,
    margin: 0,
    items: 1,
    navText: [
      '<i class="fa fa-angle-left"></i>',
      '<i class="fa fa-angle-right"></i>'
    ],
    nav: true,
    dots: false,
    responsive: {
      0: {
        items: 1
      },
      767: {
        items: 1
      },
      992: {
        items: 1
      }
    }
  });

  // owlCarousel
  $(".cat-gallery").owlCarousel({
    loop: true,
    margin: 0,
    items: 1,
    navText: [
      '<i class="fa fa-angle-left"></i>',
      '<i class="fa fa-angle-right"></i>'
    ],
    nav: true,
    dots: false,
    responsive: {
      0: {
        items: 1
      },
      767: {
        items: 1
      },
      992: {
        items: 1
      }
    }
  });

  // owlCarousel
  $(".breaking__ticker-active").owlCarousel({
    loop: true,
    margin: 0,
    autoplay: false,
    items: 1,
    navText: [
      '<i class="fa fa-angle-left"></i>',
      '<i class="fa fa-angle-right"></i>'
    ],
    nav: true,
    dots: false,
    animateOut: "slideOutDown",
    animateIn: "flipInX",
    responsive: {
      0: {
        items: 1
      },
      767: {
        items: 1
      },
      992: {
        items: 1
      }
    }
  });
  // owlCarousel
  $(".instagram-active").owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    items: 6,
    navText: [
      '<i class="fa fa-angle-left"></i>',
      '<i class="fa fa-angle-right"></i>'
    ],
    nav: false,
    dots: false,
    // animateOut: 'fadeInOutUp',
    animateIn: "slideInUp",
    responsive: {
      0: {
        items: 1
      },
      767: {
        items: 4
      },
      992: {
        items: 6
      }
    }
  });

  /* magnificPopup img view */
  $(".popup-image").magnificPopup({
    type: "image",
    gallery: {
      enabled: true
    }
  });

  /* magnificPopup video view */
  $(".popup-video").magnificPopup({
    type: "iframe"
  });

  // isotop
  $(".grid").imagesLoaded(function() {
    // init Isotope
    var $grid = $(".grid").isotope({
      itemSelector: ".grid-item",
      percentPosition: true,
      masonry: {
        // use outer width of grid-sizer for columnWidth
        columnWidth: ".grid-item"
      }
    });

    // filter items on button click
    $(".portfolio-menu").on("click", "button", function() {
      var filterValue = $(this).attr("data-filter");
      $grid.isotope({ filter: filterValue });
    });
  });

  //for menu active class
  $(".portfolio-menu button").on("click", function(event) {
    $(this)
      .siblings(".active")
      .removeClass("active");
    $(this).addClass("active");
    event.preventDefault();
  });

  // scrollToTop
  $.scrollUp({
    scrollName: "scrollUp", // Element ID
    topDistance: "300", // Distance from top before showing element (px)
    topSpeed: 300, // Speed back to top (ms)
    animation: "fade", // Fade, slide, none
    animationInSpeed: 200, // Animation in speed (ms)
    animationOutSpeed: 200, // Animation out speed (ms)
    scrollText: '<i class="fas fa-level-up-alt"></i>', // Text for element
    activeOverlay: false // Set CSS color to display scrollUp active point, e.g '#00FFFF'
  });

  // WOW active
  new WOW().init();



})(jQuery);


