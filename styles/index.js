const burgerBtn = document.getElementById('burgerBtn');

burgerBtn.addEventListener("click", function() {
    mobileNav.classList.toggle('navigation');
  }, false);


const submenus = document.getElementsByClassName('submenu');



for(let i = 0; i < submenus.length;i++){
submenus[i].addEventListener("click" , function() {
    submenus[i].classList.toggle('sub');
},false);}

const fullscreen = document.getElementsByClassName('fullscreen')[0];

if (window.matchMedia("(orientation: portrait)").matches) {
    fullscreen.removeAttribute("autoplay");
    fullscreen.removeAttribute("loop");
    fullscreen.setAttribute("preload","none");
}