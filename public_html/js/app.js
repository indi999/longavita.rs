//======== ZURB FOUNDATION ========================

    // ======== ORBIT JS  ============
     $(document).foundation({
                  orbit: { 
                      pause_on_hover: false,
                      slide_number: false
                  }
    });
    // ============ Accordion for Cenovnik
    //reflow after page load
      $(document).foundation('accordion', 'reflow');

      //animate open/close
      $(".accordion dd").on("click", "a:eq(0)", function (event) {
          var dd_parent = $(this).parent();

          if(dd_parent.hasClass('active')) {
              $(".accordion dd div.content:visible").slideToggle("normal");
          } else {
            $(".accordion dd div.content:visible").slideToggle("normal");
            $(this).parent().find(".content").slideToggle("normal");
          }
        //return false;
      });



// ============ CUSTOM APP JS SETTINGS =============

// =============== Mobile menu 3 top bar =============
// mobile menu
    //Toggle mobile menu & search
    $('.toggle-nav').click(function() {
        console.log('toggle nav');
        $('.mobile-nav').slideToggle(200);
        $('.mobile-search').slideUp(200);
      });
      //Close navigation on anchor tap
        $('a').click(function() {
        console.log('close nav');
        $('.mobile-nav').slideUp(200);
        $('.mobile-search').slideUp(200);
      }); 

      $('.toggle-search').click(function() {
        console.log('toggle search');
        $('.mobile-search').slideToggle(200);
        $('.mobile-nav').slideUp(200);
      });

      //Mobile menu accordion toggle for sub pages
      $('.mobile-nav > ul > li.menu-item-has-children').append('<div class="accordion-toggle"><div class="fa fa-angle-down"></div></div>');
      $('.mobile-nav .accordion-toggle').click(function() {
        $(this).parent().find('> ul').slideToggle(200);
        $(this).toggleClass('toggle-background');
        $(this).find('.fa').toggleClass('toggle-rotate');
      });



// ============ SLIDER =============================


// ========== GOOGLE MAPS ===========
function initialize() {
      var mapOptions = {

        center: new google.maps.LatLng(43.319050,21.936284),
        zoom: 18,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  }

function loadScript() {
      var script = document.createElement('script');
      script.type = 'text/javascript';
      script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&callback=initialize';
      document.body.appendChild(script);
  }
window.onload = loadScript;

// ===== Arrow Scroll to Top =========== 
$(window).scroll(function() {
        if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
            $('#return-to-top').fadeIn(200);    // Fade in the arrow
        } else {
            $('#return-to-top').fadeOut(200);   // Else fade out the arrow
        }
    });
    $('#return-to-top').click(function() {      // When arrow is clicked
        $('body,html').animate({
            scrollTop : 0                       // Scroll to top of body
        }, 500);
    });

// ================= TABLEs ========================
 $(document).ready(function() {
    $('#example').DataTable();
} );   
