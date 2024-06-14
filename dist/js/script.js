const NAVBAR = document.querySelector("#navbar-menu");
const TOGGLE = document.querySelector("#humburger-menu");
const PROFILE = document.querySelector("#profile-content");
const PROFILE_HERO = document.querySelector("#profile-hero");

// humburger menu
TOGGLE.addEventListener("click", function () {
  NAVBAR.classList.toggle("navbarPos");
  TOGGLE.classList.toggle("hamburger-active");
  PROFILE.classList.toggle("profile-active");
});

// jika humburger menu aktif dan yang diklik selain element di navbar dan humburger menu maka hapus humburger aktif
document.addEventListener("click", function (e) {
  if (!TOGGLE.contains(e.target) && !NAVBAR.contains(e.target)) {
    NAVBAR.classList.remove("navbarPos");
    TOGGLE.classList.remove("hamburger-active");
    PROFILE.classList.remove("profile-active");
  }
});

// Navbar fixed
window.onscroll = function () {
  const HEADER = document.querySelector("header");
  const fixedNav = HEADER.offsetTop;

  if (window.pageYOffset > fixedNav) {
    HEADER.style.opacity = 100;
    TOGGLE.classList.add("onscroll-navbar");
    PROFILE_HERO.classList.add("onscroll-navbar");
    NAVBAR.classList.add("onscroll-navbar");
  } else {
    HEADER.style.opacity = 0;
    NAVBAR.classList.remove("navbarPos");
    NAVBAR.classList.remove("onscroll-navbar");
    TOGGLE.classList.remove("hamburger-active");
    PROFILE.classList.remove("profile-active");
    TOGGLE.classList.remove("onscroll-navbar");
    PROFILE_HERO.classList.remove("onscroll-navbar");
  }
};
