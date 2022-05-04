<?php


$conexion=mysql_connect("localhost", "root", "1234", "login_register_db") ;

if($conexion){
    echo 'Conectado exitosamenteala Base de Datos';
}else{
    echo 'No se ha podido conectarala Base de Datos';
}

?>