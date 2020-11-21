window.onscroll = function () {
  var nav = document.getElementById("navbar");
  var menu = document.getElementById("container-menu");
  if (window.pageYOffset === 0) {
    nav.classList.remove("scroll");
  } else {
    nav.classList.add("scroll");
    menu.classList.remove("show");
  }
};
