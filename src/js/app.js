document.addEventListener("DOMContentLoaded", ()=>{
    evenListeners();
    darkModePreferencias();
})

function evenListeners(){
    
const mobileMenu = document.querySelector('.mobile-menu');
const darkMode = document.querySelector('.dark-mode-boton');

mobileMenu.addEventListener('click', navegacionResponsive);
darkMode.addEventListener('click', modoOscuro);



}

function navegacionResponsive(){
  const navegacion = document.querySelector('.navegacion');
 if(navegacion.classList.contains('mostrar')){
    navegacion.classList.remove('mostrar');
 }else{
    navegacion.classList.add('mostrar');
 }
}

function modoOscuro(){
    document.body.classList.toggle('dark-mode');
  
}

//dark-mode con preferencias del sistema
function darkModePreferencias(){

   const preferencias = window.matchMedia('(prefers-color-scheme: dark)');

  console.log(preferencias);
   if(preferencias.matches){
    document.body.classList.add('dark-mode');
   }else{
    document.body.classList.remove('dark-mode');
   }

   preferencias.addEventListener('change', ()=>{
    if(preferencias.matches){
        document.body.classList.add('dark-mode');
       }else{
        document.body.classList.remove('dark-mode');
       }
   })
}

