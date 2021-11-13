$(document).ready(function () {
  "use strict";

  // fixed header
  $(window).scroll(function () {
   let scroll = $(window).scrollTop();

   if (scroll >= 2) {
     $("header .navbar.main-nav").addClass("fixed");
   } else {
     $("header .navbar.main-nav").removeClass("fixed");
   }
  });

  //main slider owl
  $('.main-slider-carousel').owlCarousel({
    center: true,
    loop: true,
    margin: 2,
    nav: true,
    rtl: true,
    dots: false,
    lazyLoad: true,
    navText: ["<i class='bi bi-arrow-left'></i>", "<i class='bi bi-arrow-right'></i>"],
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 1,
      },
      
      992: {
        items: 3,
      }
    }
  });
});