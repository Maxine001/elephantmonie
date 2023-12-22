
$(document).ready(function () {
   
  const sideMenu = document.querySelector("aside");
  const menuBtn = document.querySelector("#menu-btn");
  const closeBtn = document.querySelector('#close-btn');
  $(menuBtn).click(function (){
    sideMenu.style.display = 'block';
  });
  $(closeBtn).click(function(){
     sideMenu.style.display = 'none';
  });



  const themeToggler = document.querySelector('.theme-toggler');
  $(themeToggler).click(function () {
     document.body.classList.toggle('dark-theme-variables');
  });//themetoggle button
});