document.addEventListener('DOMContentLoaded', function() {
    // Se ejecuta cuando el documento HTML se ha cargado completamente.
    eventListeners();

    darkMode();
});

function darkMode(){

    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');

    if(prefiereDarkMode.matches){
        document.body.classList.add('dark-mode');
    }else{
        document.body.classList.remove('dark-mode');
    }

    prefiereDarkMode.addEventListener('change', function(){
        if(prefiereDarkMode.matches){
            document.body.classList.add('dark-mode');
        }else{
            document.body.classList.remove('dark-mode');
        }
    });
    
    const botonDarlMode = document.querySelector('.dark-mode-boton');

    botonDarlMode.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode');
    });
}
  
function eventListeners() {
// Obtiene el elemento `.mobile-menu` del DOM.
    const mobileMenu = document.querySelector('.mobile-menu');
  
    // Adjunta un evento de escucha al elemento `.mobile-menu`.
    // El evento es `click`.
    mobileMenu.addEventListener('click', navegacionResponsive);
  }
  
function navegacionResponsive() {
    // Obtiene el elemento `.navegacion` del DOM.
    const navegacion = document.querySelector('.navegacion');
  
    // Comprueba si el elemento tiene la clase `mostrar`.
    if (navegacion.classList.contains('mostrar')) {
      // Si el elemento tiene la clase `mostrar`, la función la elimina.
      navegacion.classList.remove('mostrar');
    } else {
      // Si el elemento no tiene la clase `mostrar`, la función la agrega.
      navegacion.classList.add('mostrar');
    }
}