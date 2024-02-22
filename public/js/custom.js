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
        center: new google.maps.LatLng(),
        zoom: 18,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}



var a =  documet.getElementById("signup");
var b =  documet.getElementById("signin");

function login(){
    a.style.left = "4px";
    b.style.right = "-520px";
}
function signup() {
    a.style.left = "-510px";
    b.style.right = "5px";
}


	/* Preloader
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
	
	setTimeout(function () {
		$('.loader_bg').fadeToggle();
	}, 1500);
	

    // Add a click event listener to the menu toggle button
document.addEventListener('DOMContentLoaded', function () {
    // Get the menu toggle button
    var navbartoggler = document.querySelector('.navbar-toggler');
    // Get the target menu
    var navbarMenu = document.querySelector('navbarSupportedContent' + navbartoggler.dataset.target);

    // Add a click event listener to the menu toggle button
    navbartoggler.addEventListener('click', function () {
        // Toggle the 'is-active' class on both the menu toggle button and the menu itself
        navbartoggler.classList.toggle('is-active');
        navbarMenu.classList.toggle('is-active');
    });
}); 