<?php

include 'conexion.php';


$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

"INSERT INTO usuarios (nombre, correo, usuario, contrasena)
VALUES ('$nombre', '$correo', '$usuario', '$contrasena')";

$ejecutar = mysqli_query ($conexion, $query);

if($ejecutar){
    echo '
        <script>
            alert("Usuario almacenado exitosamente");
            window.location="index.php";
        </script>';
    }else{
        echo'
            <script>
                alert("Inténtalo de nuevo, usuario no almacenado");
                window.location="../index.php";
            </script>';  
    }
    mysqli_close($conexion);

?>