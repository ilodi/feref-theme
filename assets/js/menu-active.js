function activeMenu() {
    var menuIcon = document.getElementById("menu-burger");
    var menuMobile = document.getElementById("container-menu");
  
    if (menuIcon.classList) { 
      menuIcon.classList.toggle("open");
      menuMobile.classList.toggle("show");
    } else {
      var classes = menuIcon.className.split(" ");
      var i = classes.indexOf("open");
  
  
      var classesMenu = menuMobile.className.split(" ");
      var x = classesMenu.indexOf("show");
  
    }
  
  
  }
  
  