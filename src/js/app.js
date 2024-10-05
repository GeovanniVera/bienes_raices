// function eventlistener will be up when all the page has been charged
document.addEventListener('DOMContentLoaded',function(){
    eventListeners();
    changeDarkMode();
});

function eventListeners(){
    // function navigationResponsive will be up when the user put in the click in mobile-menu button
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click',navigationResponsive);
}

// function navigationResponsive will add or will remove class show if is need
function navigationResponsive(){
    const navegacion = document.querySelector('.navigation-bar');
    navegacion.classList.toggle('show');
}

// Function changes the page in dark mode
function changeDarkMode(){
    //this code  review os preferences mode 
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        document.body.classList.toggle('dark-mode');
    }
    //this code  review changes in os preferences mode 
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
        const newColorScheme = event.matches ? "dark" : "light";
        if(newColorScheme==='dark'){
            document.body.classList.add('dark-mode');
        }else{
            document.body.classList.remove('dark-mode');

        }
    });

    // 
    const darkModeButton = document.querySelector('.dark-mode-btn');
    darkModeButton.addEventListener('click',function(){
        document.body.classList.toggle('dark-mode');
    })
}
