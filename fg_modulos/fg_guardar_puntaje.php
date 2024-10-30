<?php
session_start();
include '../conexion.php';

if (!isset($_SESSION['id'])) {
    echo "Error: Usuario no autenticado.";
    exit;
}

if (isset($_POST['puntaje'])) {
    $puntaje = intval($_POST['puntaje']);
    $id_usuario = $_SESSION['id'];

    $sql = "INSERT INTO puntajes (id, puntaje) VALUES ('$id_usuario', '$puntaje')";
    if (mysqli_query($con, $sql)) {
        echo "Puntaje guardado exitosamente.";
    } else {
        echo "Error al guardar el puntaje: " . mysqli_error($con);
    }
} else {
    echo "Error: Puntaje no recibido.";
}
?>