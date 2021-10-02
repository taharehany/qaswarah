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

  // toast notification
  let toastTrigger = $('.fav-btn');
  let toastAdding = $('#addFavToast');
  let toastRemoving = $('#removeFavToast');
  toastTrigger.on('click', function () {
    $(this).toggleClass("added").find("i").toggleClass("bi-heart bi-heart-fill")

    if (toastTrigger && $(this).hasClass("added")) {
      let toast = new bootstrap.Toast(toastAdding)
      toast.show();
    } else {
        let toast = new bootstrap.Toast(toastRemoving)
        toast.show();
    }
  });

  //validate form
  (function () {
    let forms = document.querySelectorAll('.needs-validation')

    //Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
  })();

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