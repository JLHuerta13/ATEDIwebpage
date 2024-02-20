<?php
# Si no entiendes el código, primero mira a login.php

# Iniciar sesión para usar $_SESSION
session_start();

# Y ahora leer si NO hay algo llamado correo en la sesión,
# usando empty (vacío, ¿está vacío?)
# Recomiendo: https://parzibyte.me/blog/2018/08/09/isset-vs-empty-en-php/
if (empty($_SESSION["correo"])) {
    # Lo redireccionamos al formulario de inicio de sesión
    header("Location: ../html/login.html");
    # Y salimos del script
    exit();
}


# Podemos recuperar datos de la sesión
echo "<h1>Subir Archivo</h1>";
echo "<p>iniciaste sesion con el correo : <strong>" . $_SESSION["correo"] . "</strong> </p>";

 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir archivos</title>
    <link rel="stylesheet" type="text/css" href="../css/subir.css">
</head>

<body>
    
    <form class="post" action="subir.php" method="post" enctype="multipart/form-data">
        
        <h4>Categoria</h4>
        <input name="Categoria" type ="text"  placeholder="pelicula,libro,etc">
        
        <h4>Descripción</h4>
        <input name="Descripcion" type ="text"  placeholder="Describe el archivo">
        <h4><h4>
        <label class="custom-file-upload">    
        <input type="file" name="archivo" />
        </label>
        <button type="submit">Subir</button>
        <h4></h4>
    </form>

        <a href="logout.php">Cerrar sesión</a>
   
</body>
     
</html>


