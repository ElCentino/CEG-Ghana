$(document).ready(function() {

    const imageBrightness = 20;

      const images = ['image/ce1.jpg', 'image/ce2.jpg', 'image/ce3.jpg', 'image/ce4.jpg'];
      let currentImageIndex = 3;

      $(".img-fader").css("filter", `brightness(${imageBrightness}%)`);

      const slider = setInterval(function () {

        if (currentImageIndex >= images.length) {
          currentImageIndex = 0;
        }

        $(".img-fader").fadeOut('1500', function () {
          $(this).fadeIn('slow');
          $(this).attr("src", images[currentImageIndex++]);
          $(this).css("filter", `brightness(${imageBrightness}%)`);
        });

      }, 5000);

    $(".locations-area-list li, .locator-nav").on('click', function() {
      let currentThis = $(this).attr("data-location");
      $(this).addClass("location-active");
      $(".locations-area-list li").not(this).removeClass("location-active");
      setTimeout(() => {
          $(".main-nav").slideUp();
      }, 1000);

      $(".maps").fadeOut(function() {
        $(this).fadeIn();
        $(".maps").attr("src", currentThis);
      });
    });

    const slideToggler = slideToggle();

    $(".toggle-btn").on('click', function() {
      if(slideToggler() == true) {
        $(".maps").slideDown();
      } else {
        $(".maps").slideUp();
      }
    });

    var subsequent = 500;

    $(window).on('scroll', function() {
      
      if($(this).scrollTop()) {
          $(".main-nav").addClass("black");
          $(".top-contact-info").slideUp();
          $(".nav-black-hide").addClass("nav-logo").css("padding-top", "28px");
          $(".nav-logo-img").fadeOut();
          $(".nav-black-hide").fadeIn();
      } else {

          $(".top-contact-info").slideDown(function() {
            $(".main-nav").removeClass("black");
          });
          
          $(".nav-black-hide").fadeOut(function() {
            $(".nav-black-hide").removeClass("nav-logo");
            $(".nav-logo-img").fadeIn();
            $(".black").css("border-bottom", "none");
          });

          $(".black").css("border-bottom", "none");
      }

        var element_position = $('.maps').offset().top;

        var y_scroll_pos = window.pageYOffset;
        var scroll_pos_test = element_position;

        if(y_scroll_pos > scroll_pos_test - 300) {
          $(".black").css("border-bottom", "6px solid var(--cyan)");
          $(".main-nav").slideUp();
        }else {
            if($(window).scrollTop()) {
                $(".black").css("border-bottom", "6px solid var(--redish)"); 
            } else {
                $(".black").css("border-bottom", "none");
            }
          $(".main-nav").slideDown();
          $(".locator-nav").removeClass("location-active");
        }

        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
          $(".main-nav").slideDown();
        }
     
    });

    $(window).on('resize', function() {
      if(window.outerWidth < 1200) {
        $(".nav-black-hide").addClass("nav-logo").css("padding-top", "28px");
        $(".nav-logo-img").fadeOut();
        $(".nav-black-hide").fadeIn();
      } else {
        $(".nav-black-hide").removeClass("nav-logo");
        $(".nav-black-hide").fadeOut();
        $(".nav-logo-img").fadeIn();
      }
    });
    
    function slideToggle() {
      var up = true;

      return function () {
        up = !up;
        return up;
      }
    }
});