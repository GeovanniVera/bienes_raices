document.addEventListener('DOMContentLoaded',function(){
    eventListeners();
});

function eventListeners(){
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click',navegacionResponsive);
}

function navegacionResponsive(){
    const navegacion = document.querySelector('.navigation-bar');
    navegacion.classList.toggle('show');
}

