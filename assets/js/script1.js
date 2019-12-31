var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slide-header");
    var dots = document.getElementsByClassName("indicator");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

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
    stickNav();
}

const topNav = document.querySelector('.top-nav');


