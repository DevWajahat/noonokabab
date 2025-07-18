 <div class="footer">
   <div class="container-fluid">
     <div class="col-12">
       <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 set-justify">
         <p class="copyright-color">© Copyright <strong><script>
               document.write(new Date().getFullYear())
             </script> Noon O Kabab</strong> All rights Reserved</p>
         <p class="copyright-color">Designed & Developed by <strong><a href="https://webdesignglory.com/" target="_blank">Web Design Glory.</a></strong></p>
       </div>
     </div>
   </div>
 </div>
 </div>
 <script src="{{ asset("assets/admin/vendor/global/global.min.js") }}" type="text/javascript"></script>
 <script src="{{ asset("assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js") }}" type="text/javascript"></script>
 <script src="{{ asset("assets/admin/vendor/chart.js/Chart.bundle.min.js") }}" type="text/javascript"></script>
 <script src="{{ asset("assets/admin/vendor/owl-carousel/owl.carousel.css") }}" type="text/javascript"></script>
 <script src="{{ asset("assets/admin/vendor/peity/jquery.peity.min.js") }}" type="text/javascript"></script>
 <script src="{{ asset("assets/admin/js/dashboard/dashboard-1.js") }}" type="text/javascript"></script>
 <script src="{{ asset("assets/admin/vendor/datatables/js/jquery.dataTables.min.js") }}" type="text/javascript"></script>
 <script src="{{ asset("assets/admin/js/plugins-init/datatables.init.js") }}" type="text/javascript"></script>
 <script src="{{ asset("assets/admin/js/custom.min.js") }}" type="text/javascript"></script>
 <script src="{{ asset("assets/admin/js/deznav-init.js") }}" type="text/javascript"></script>
 <script src="{{ asset("assets/admin/js/demo.js") }}" type="text/javascript"></script>
 <script src="{{ asset("assets/admin/js/styleSwitcher.js") }}" type="text/javascript"></script>

 <script>
   function carouselReview() {
     function checkDirection() {
       var phpClassName = document
         .getElementsByTagName("php")[0]
         .getAttribute("class");
       if (phpClassName == "rtl") {
         return true;
       } else {
         return false;
       }
     }
     jQuery(".testimonial-one").owlCarousel({
       loop: true,
       autoplay: true,
       margin: 15,
       nav: false,
       dots: false,
       left: true,
       rtl: checkDirection(),
       navText: ["", ""],
       responsive: {
         0: {
           items: 1,
         },
         800: {
           items: 2,
         },
         991: {
           items: 2,
         },

         1200: {
           items: 2,
         },
         1600: {
           items: 2,
         },
       },
     });
     jQuery(".testimonial-two").owlCarousel({
       loop: true,
       autoplay: true,
       margin: 15,
       nav: false,
       dots: true,
       left: true,
       rtl: checkDirection(),
       navText: ["", ""],
       responsive: {
         0: {
           items: 1,
         },
         600: {
           items: 2,
         },
         991: {
           items: 3,
         },

         1200: {
           items: 3,
         },
         1600: {
           items: 4,
         },
       },
     });
   }
   jQuery(window).on("load", function() {
     setTimeout(function() {
       carouselReview();
     }, 1000);
   });
 </script>


 </body>
 </php>
