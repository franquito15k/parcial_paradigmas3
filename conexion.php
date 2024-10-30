<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parcial_paradigmas3";

// Crear conexión
$con = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($con->connect_error) {
    die("Conexión fallida: " . $con->connect_error);
}
?>