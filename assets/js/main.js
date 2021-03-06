jQuery(function ($) {
  $(document).ready(function () {
    $('form.wpcf7-form').submit(function () {
      setTimeout(function () {
        let successTxt = $('form.wpcf7-form .wpcf7-response-output').text()
        if (successTxt != '') {
          location.href = success_url
        }
      }, 1500);
    })

    // mobile menu
    var mbMenu = document.getElementById("mb-menu");
    $("i.mb-menu").click(function () {
      if (mbMenu.style.width == "100%") {
        mbMenu.style.width = "0";
        $("#mb-menu .nav")[0].style.left = "-100px";
        $(this).toggleClass("fa-times fa-bars");
        $(this).css("transform", " rotate(0)");
      } else {
        mbMenu.style.width = "100%";
        $("#mb-menu .nav")[0].style.left = "0";
        $(this).toggleClass("fa-bars fa-times");
        $(this).css("transform", " rotate(180deg)");
      }
    });

    // active current page
    $("a[data-navUrl]").each(function () {
      if ($(this).data("navurl") == current_slug) {
        $(this).addClass("current-page fw-bold");
      }
    });
    if (
      current_slug == "remote-control" ||
      current_slug == "transceiver" ||
      current_slug == "wireless-system" ||
      current_slug == "smart-gate"
    ) {
      $(".hRight ul li:nth-child(2) a").addClass("current-page fw-bold");
      $(".fRight ul li:nth-child(2) a").addClass("current-page fw-bold");
    }
    // scroll effect header , bottomToTop , Btn-call
    window.onscroll = function () {
      myFunction();
    };
    var header = document.getElementById("header");
    var toTop = document.getElementById("bottom_to_top");
    var callMe = document.getElementById("call_me");
    // console.log(toTop.style);
    function myFunction() {
      // console.log(this.scrollY);
      if (this.scrollY > 100) {
        toTop.style.bottom = "30px";
        callMe.style.left = "30px";
      } else {
        toTop.style.bottom = "-100px";
        callMe.style.left = "-100px";
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

    // owlcarosel
    if ($(".owl-carousel").length) {
      $(".owl-carousel").each(function () {
        var owl = $(".owl-carousel");
        $(this).owlCarousel({
          margin: $(this).data("margin"),
          autoplayTimeout: $(this).data("autotime"),
          smartSpeed: $(this).data("speed"),
          autoHeight: $(this).data("autoheight"),
          autoplay: $(this).data("autoplay"),
          // autoplay: true,
          items: $(this).data("carousel-items"),
          nav: $(this).data("nav"),
          dots: $(this).data("dots"),
          center: $(this).data("center"),
          loop: $(this).data("loop"),
          mouseDrag: $(this).data("drag"),
          responsive: {
            0: {
              items: $(this).data("mobile"),
              autoplay: true,
              autoplayTimeout: 3000

            },
            768: {
              items: $(this).data("tablet"),
              margin: $(this).data("margintb"),
              autoplay: true,
              autoplayTimeout: 3000

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

    if ($(".pagenavi .current").text() == "1") {
      $(".pagenavi").prepend('<a class="prev-fake"><</a>');
    }
  });
});
