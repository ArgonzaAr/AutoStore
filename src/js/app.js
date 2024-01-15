document.addEventListener('DOMContentLoaded', function(){
    eventListeners();
    darkmode();
});

function darkmode(){
    const botonDarkMode = document.querySelector('.dark-mode-button');
    const defaultDarkMode = window.matchMedia('(prefers-color-scheme: dark)');

    if(defaultDarkMode.matches){
        document.body.classList.toggle('dark-mode'); 
    }

    defaultDarkMode.addEventListener('change', function(){
        document.body.classList.toggle('dark-mode'); 
    });
    botonDarkMode.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode'); 
    });
}

function eventListeners(){
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive(){
    const navegacion = document.querySelector('.navegacion');
    navegacion.classList.toggle('mostrar');
}
