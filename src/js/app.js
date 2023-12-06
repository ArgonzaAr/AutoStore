document.addEventListener('DOMContentLoaded', function(){
    eventListeners();
    darkmode();
});

function darkmode(){
    const botonDarkMode = document.querySelector('.dark-mode-button');
    const defaultDarkMode = window.matchMedia('(prefers-color-scheme: dark)');

    if(defaultDarkMode.matches){
        document.body.classList.add('dark-mode');
    }else{
        document.body.classList.remove('dark-mode');
    }

    defaultDarkMode.addEventListener('change', function(){
        if(defaultDarkMode.matches){
            document.body.classList.add('dark-mode');
        }else{
            document.body.classList.remove('dark-mode');
        }
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
