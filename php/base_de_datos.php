<?php
function obtenerBaseDeDatos()
{
    // Nota: rellena con tus credenciales
    $nombre_base_de_datos = "usuarios_login";
    $usuario = "root";
    $contraseña = "";
    try {

        $base_de_datos = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario, $contraseña);
        $base_de_datos->query("set names utf8;");
        $base_de_datos->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base_de_datos->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        return $base_de_datos;
    } catch (Exception $e) {
        # Nota: ¡en la vida real no imprimas errores!
        # echo "Error obteniendo BD: " . $e->getMessage();
        return null;
    }
    
}
/*
Solo copia esta parte en mysql y ejecuta primero html/registro.html y luego cuando registre un usuario, ejecuta html/login.html

CREATE DATABASE IF NOT EXISTS usuarios_login;
USE usuarios_login;

CREATE TABLE IF NOT EXISTS usuarios(
    id bigint unsigned not null auto_increment,
    correo varchar(255) not null unique, 
    palabra_secreta varchar(255) not null,
    primary key(id)
);

*/