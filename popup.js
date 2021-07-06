
var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
    overLay = document.getElementById('overlay'),
    popup = document.getElementById('popup'),
    BtnCerrarPopup = document.getElementById('btn-cerrar-popup');

    btnAbrirPopup.addEventListener('click', function(){
        overLay.classList.add('active');
        popup.classList.add('active');
    });
    
    BtnCerrarPopup.addEventListener('click',function(){
        overLay.classList.remove('active');
        popup.classList.remove('active');
    });
    
