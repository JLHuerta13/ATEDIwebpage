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
echo "<br>Sé que tu correo es: <strong>" . $_SESSION["correo"] . "</strong>";

 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir archivos</title>
</head>

<body>
    
    <form action="subir.php" method="post" enctype="multipart/form-data">
        
        
        <br><br>
        Archivo:
        <input type="file" name="archivo" />

        <button type="submit">Subir</button>
        <h3>Categoria</h3>
        <input name="Categoria"  placeholder="pelicula,libro,etc">
        
        <h3>Descripcion</h3>
        <input name="Descripcion"  placeholder="Describe el archivo">

    </form>

</body>

</html>

<a href="logout.php">Cerrar sesión</a>