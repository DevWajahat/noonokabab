const tabs = document.querySelectorAll("[data-tab-target]");
const tabContents = document.querySelectorAll("[data-tab-content]");

tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    const target = document.querySelector(tab.dataset.tabTarget);
    tabContents.forEach((tabContent) => {
      tabContent.classList.remove("active");
    });
    tabs.forEach((tab) => {
      tab.classList.remove("active");
    });
    tab.classList.add("active");
    target.classList.add("active");
  });
});

// $('.element').each(function() {
//     $(this).mouseover(function() {
//         console.log(this, "hello")
//         $(this).addClass('active');
//       $('.stage').children('.element').not('.active').addClass('inactive');
//     });

//     $(this).mouseleave(function() {
//         $(this).removeClass('active');
//         $('.stage').children('.element').not('.active').removeClass('inactive');
//     });
// });

$(document).ready(function () {
  $(".btn-cross").click(function () {
    var index = $(this).data("index");
    $(".element").removeClass("active");
    $(".element").eq(index).addClass("active");
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const buttons = document.querySelectorAll(".slid-btn");
  const elements = document.querySelectorAll(".element");

  buttons.forEach((button) => {
    button.addEventListener("click", function () {
      const groupIndex = this.getAttribute("data-group");

      // Remove active class from all elements
      elements.forEach((element) => {
        element.classList.remove("active");
      });

      // Add active class to the element with matching data-group
      elements.forEach((element) => {
        if (element.getAttribute("data-group") === groupIndex) {
          element.classList.add("active");
        }
      });
    });
  });
});

$(".menu-btn i").click(function () {
  $(".pick-tab-btn ul").toggleClass("active");
});

$(".hero-banner").slick({
  dots: true,
  infinite: true,
  speed: 300,
  autoplay: true,
  autoplaySpeed: 3000,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    // {
    //   breakpoint: 1024,
    //   settings: {
    //     slidesToShow: 3,
    //     slidesToScroll: 3,
    //     infinite: true,
    //     dots: true
    //   }
    // },
    // {
    //   breakpoint: 600,
    //   settings: {
    //     slidesToShow: 2,
    //     slidesToScroll: 2
    //   }
    // },
    // {
    //   breakpoint: 480,
    //   settings: {
    //     slidesToShow: 1,
    //     slidesToScroll: 1
    //   }
    // }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ],
});

$(".d-slider").slick({
  dots: false,
  infinite: false,
  speed: 300,
  autoplay: true,
  autoplaySpeed: 3000,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1026,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    // {
    //   breakpoint: 480,
    //   settings: {
    //     slidesToShow: 1,
    //     slidesToScroll: 1
    //   }
    // }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ],
});








