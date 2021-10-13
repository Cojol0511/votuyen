jQuery(function ($) {
  $(document).ready(function () {
    $("a[data-navUrl]").each(function () {
      if ($(this).data("navurl") == current_slug) {
        $(this).addClass("current-page");
      }
    });
  });

  $(document).ready(function () {
    window.onscroll = function () {
      myFunction();
    };
    var header = document.getElementById("header");
    var toTop = document.getElementById("bottom_to_top");
    console.log(toTop.style);
    function myFunction() {
      console.log(this.scrollY);
      if (this.scrollY > 100) {
        toTop.style.bottom = "30px";
      } else {
        toTop.style.bottom = "-100px";
      }

      if (this.oldScroll > this.scrollY) {
        header.style.top = "0";
      } else {
        if (this.scrollY == 0) {
          header.style.top = "0";
        } else {
          if (this.scrollY > 135) {
            header.style.top = "-160px";
          }
        }
      }
      this.oldScroll = this.scrollY;
    }
  });
  if ($(".owl-carousel").length) {
    $(".owl-carousel").each(function () {
      var owl = $(".owl-carousel");

      console.log($(this).data("carousel-items"));
      $(this).owlCarousel({
        margin: $(this).data("margin"),
        autoplayTimeout: $(this).data("autotime"),
        smartSpeed: $(this).data("speed"),
        autoHeight: $(this).data("autoheight"),
        autoplay: $(this).data("autoplay"),
        items: $(this).data("carousel-items"),
        nav: $(this).data("nav"),
        dots: $(this).data("dots"),
        center: $(this).data("center"),
        loop: $(this).data("loop"),
        responsive: {
          0: {
            items: $(this).data("mobile"),
          },
          768: {
            items: $(this).data("tablet"),
            margin: $(this).data("margintb"),
          },
          992: {
            items: $(this).data("desktop-small"),
            margin: $(this).data("margintb"),
          },
          1680: {
            items: $(this).data("desktop"),
            margin: $(this).data("margintb"),
          },
        },
      });
    });
  }
  $(document).ready(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        $("#goTop").fadeIn();
      } else {
        $("#goTop").fadeOut();
      }
    });
    $("#goTop").click(function () {
      $("html, body").animate({ scrollTop: 0 }, 600);
      return false;
    });
  });
});
