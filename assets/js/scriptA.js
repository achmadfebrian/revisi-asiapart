

// sidenav
const sideNav = document.querySelector('.side-nav');
const topNavMenu = document.querySelector('.menu-top-nav');
const closedSideNav = document.querySelector('.closed-side-nav');


topNavMenu.addEventListener("click", function () {
    sideNav.style.left = "0px";
})

closedSideNav.addEventListener("click", function () {
    sideNav.style.left = "-300px";
})

window.onscroll = function () {
    stickyNav();
}

const topNav = document.querySelector('.top-nav');

const sticky = topNav.offsetTop;

function stickyNav() {
    if (window.pageYOffset >= sticky) {

        topNav.classList.remove("bg-transparent");
        topNav.classList.add("sticky", "fade-slider", "bg-white");

    } else {
        topNav.classList.add("bg-transparent");
        topNav.classList.remove("sticky", "fade-slider", "bg-white");
    }
}

$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 2000,
        dots: false,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
});

var slideUpWrapText = document.querySelector('.home-about .wrap-text');
var slideUpImg = document.querySelector('.home-about .wrap-img-about');

window.addEventListener('scroll', function () {
    if (window.pageYOffset > 600) {
        slideUpWrapText.style.top = '100px';
        slideUpWrapText.style.opacity = 1;
    }

    if (window.pageYOffset > 800) {
        slideUpImg.style.right = '200px';
        slideUpImg.style.opacity = 1;
    }
});




