<?php

function conexion(){
    $user="root";
    $pass="";
    $server="localhost";
    $db="login_register_db";
    $con=mysqli_query($server,$user,$pass) or die ("Error al conectarala base de datos".mysql_error());
mysqli_select_db($db,$con);
return $con;

}
//$conexion=mysqli_connect("localhost", "root", "1234", "login_register_db") ;

/*if($conexion){
    echo 'Conectado exitosamenteala Base de Datos';
}else{
    echo 'No se ha podido conectarala Base de Datos';
}
*/
?>