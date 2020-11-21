window.onscroll = function () {
  var nav = document.getElementById("navbar");
  var menu = document.getElementById("container-menu");
  var menuIcon = document.getElementById("menu-burger");
  // 
  var logoBl = document.getElementById('logo-black'); 
  var logoWh = document.getElementById('logo-white'); 
  if (window.pageYOffset === 0) {
    nav.classList.remove("scroll");
    logoBl.classList.remove("view-now");
    logoWh.classList.add("view-now");
  } else {
    nav.classList.add("scroll");
    logoBl.classList.add("view-now");
    logoWh.classList.add("hidden");
    logoWh.classList.remove("view-now");
    menu.classList.remove("show");
    menuIcon.classList.remove("open") 
  }
};
