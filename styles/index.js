const burgerBtn = document.getElementById('burgerBtn');

burgerBtn.addEventListener("click", function() {
    mobileNav.classList.toggle('navigation');
  }, false);


const submenus = document.getElementsByClassName('submenu');



for(let i = 0; i < submenus.length;i++){
submenus[i].addEventListener("click" , function() {
    submenus[i].classList.toggle('sub');
},false);}

