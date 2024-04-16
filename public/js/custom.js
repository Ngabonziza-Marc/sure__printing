// to get current year
    function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();


//  owl carousel script
$(".owl-carousel").owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    navText: [],
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        1000: {
            items: 2
        }
    }
});

//    end owl carousel script 



/** google_map js **/
function myMap() {
    var mapProp = {
        center: new google.maps.LatLng(-1.93997923415026, 30.05881317420612),
        zoom: 18,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
    
}
document.addEventListener('DOMContentLoaded', function() {
    // Get the menu toggle button and the navigation menu
    var menuBtn = document.getElementById('menu-btn');
    var navMenu = document.getElementById('navbarSupportedContent');

    // Add click event listener to the menu toggle button
    menuBtn.addEventListener('click', function() {
      // Toggle the 'show' class on the navigation menu to control its visibility
      navMenu.classList.toggle('show');
    });
  });
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{your-app-id}',
      cookie     : true,
      xfbml      : true,
      version    : '{api-version}'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));


         //displaying greeting message

         setTimeout(function() {
            $('.alert').fadeOut('slow');
           }, 5000); 
         //end od greetings
