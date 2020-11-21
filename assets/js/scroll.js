window.onscroll = function () {
  var nav = document.getElementById("navbar");
  var menu = document.getElementById("container-menu");
  var menuIcon = document.getElementById("menu-burger");
  if (window.pageYOffset === 0) {
    nav.classList.remove("scroll");
  } else {
    nav.classList.add("scroll");
    menu.classList.remove("show");
    menuIcon.classList.remove("open") 
  }
};
