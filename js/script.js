let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onclick = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};
 
//swiper 
var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  var swiper = new Swiper(".reviews-slider", {
    loop:true,
    spaceBetween:20,
    autoHeight:true,
    grabCursor:true,
    breakpoints: {
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });
  const logregBox=document.querySelector('logreg-box');
  const loginLink=document.querySelector('login-link');
  const registerLink=document.querySelector('register-link');
  
  loginLink.addEventListener('click', () => {
    logregBox.classList.remove('active');
  });

  registerLink.addEventListener('click', () => {
    logregBox.classList.add('active');
  });