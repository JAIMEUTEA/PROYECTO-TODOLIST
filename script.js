
document.getElementById("iniciar").addEventListener("click",INCIARSESION);
document.getElementById("registro").addEventListener("click", REGISTRO);

window.addEventListener("resize",anchoPagina);

var contenedor_login = document.querySelector(".contenedor_login");
var formulario_login = document.querySelector(".formulario_login");
var formulario_registro = document.querySelector(".formulario_registro");
var caja_trasera_login = document.querySelector(".caja_login");
var caja_trasera_registro = document.querySelector(".caja_registro");

function anchoPagina(){
    if(window.innerWidth>850){
        caja_trasera_login.style.display="block";
        caja_trasera_registro.style.display="block";
    }else{
        caja_trasera_registro.style.display="block";
        caja_trasera_registro.opacity="1";
        caja_trasera_login.style.display="none";
        formulario_login.style.display="block";
        formulario_registro.style.display="none";
        contenedor_login.style.left="0px";
    }
}

function INCIARSESION(){

    if(window.innerWidth>850){
        formulario_registro.style.display="none";
        contenedor_login.style.left="10px";
        formulario_login.style.display="block";
        caja_trasera_registro.style.opacity="1";
        caja_trasera_login.style.opacity="0";
    }else{
        formulario_registro.style.display="none";
        contenedor_login.style.left="0px";
        formulario_login.style.display="block";
        caja_trasera_registro.style.display="block";
        caja_trasera_login.style.display="none";
    }
    }

function REGISTRO(){
    if(window.innerWidth>850){
        formulario_registro.style.display="block";
        contenedor_login.style.left="410px";
        formulario_login.style.display="none";
        caja_trasera_registro.style.opacity="0";
        caja_trasera_login.style.opacity="1";
    }else{
        formulario_registro.style.display="block";
        contenedor_login.style.left="0px";
        formulario_login.style.display="none";
        caja_trasera_registro.style.display="none";
        caja_trasera_login.style.display="block";
        caja_trasera_login.style.opacity="1";
    }
}  

