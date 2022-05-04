<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <main>
    <div class="contenedor"> 
            <div class="caja_trasera">
                <div class="caja_login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>inicia secion para acceder a nuestros beneficios</p>
                    <button id="iniciar">Inicia Sesion</button>
                </div>
                
                    <div class="caja_registro">
                        <h3>¿Ya te registraste?</h3>
                        <p>registrate para acceder a nuestros beneficios</p>
                        <button id="registro">registrate</button>
                    </div>
            </div>
    
        <div class = "contenedor_login">
            <form action=""class = "formulario_login">
                <h2>inicia sesion</h2>
                <input type="text"placeholder="correo electronico">
                <input type="contraseña"placeholder ="contraseña">
                <button>entrar</button>
            </form>
            <form action="" class ="formulario_registro">
                <h2>registrarse</h2>
                <input type="text"placeholder="nombre completo">
                <input type="text"placeholder="correo electronico">
                <input type="text"placeholder = "usuario">
                <input type="password"placeholder = "contraseña">
                <button>registrarse</button>
            </form>
        </div>
            
    </div>
    </main>
    <script src="script.js"></script>
</body>
</html>