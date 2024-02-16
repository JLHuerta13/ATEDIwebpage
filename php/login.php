<?php
// Datos de conexión a la base de datos (reemplaza con tus propios datos)
$servername = "localhost"; // Nombre del servidor
$username = "root"; // Nombre de usuario de la base de datos
$password = ""; // Contraseña de la base de datosC
$dbname = "usuarios_login"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

$sql = "SELECT correo, palabra_secreta FROM usuarios";

# Nota: no estamos haciendo validaciones
$correo = $_POST["correo"];
$palabra_secreta = $_POST["palabra_secreta"];

# Luego de haber obtenido los valores, ya podemos comprobar
# Incluimos a las funciones, mira funciones.php
include_once "funciones.php";
$logueadoConExito = login($correo, $palabra_secreta);
if ($logueadoConExito) {
    # Redirigir a secreta
    header("Location: secreta.php");
    # Y salir
    exit;
} else {
    # Si no, entonces indicarlo
    echo "Usuario o contraseña incorrecta";
}