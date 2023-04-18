let btBurger = document.getElementById('burger');
let mainMenu = document.getElementById('main-menu');
let closeMainMenu = document.getElementById('croix');

btBurger.addEventListener('click',function(){
    mainMenu.classList.toggle('active');
    
});

closeMainMenu.addEventListener('click',function(){
     mainMenu.classList.toggle('active');
    
});