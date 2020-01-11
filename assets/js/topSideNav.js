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