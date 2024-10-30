<?php
session_start();
include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Ahorcado</title>
    <link rel="stylesheet" href="fg_css/fg_styles.css">
</head>

<body>
    <nav id="header_nav">
        <ul>
            <li><a href="index.php?modulo=fg_jugar">Jugar</a></li>
            <li><a href="index.php?modulo=fg_registro">Registrar</a></li>
            <li><a href="index.php?modulo=fg_login">Login</a></li>
            <li><a href="index.php?modulo=fg_tabla_resul">Tablas</a></li>
        </ul>
    </nav>
    
    <div class="container">
        <header>
            <h1>El Ahorcado</h1>
            <?php
            if (!empty($_SESSION['nombre_usuario'])) {
                echo '<h2>Bienvenido: ' . $_SESSION['nombre_usuario'] . '</h2>';
                echo '' . $_SESSION['id'];
                echo '<a href="index.php?modulo=fg_login&salir=true">Cerrar Sesión</a>';
            }
            ?>
        </header>

        <main>
            <?php
            if (isset($_GET['modulo'])) {
                $modulo = $_GET['modulo'];
            } else {
                $modulo = 'index'; // Valor predeterminado
            }

            $archivo = 'fg_modulos/' . $modulo . '.php';
            if (file_exists($archivo)) {
                include $archivo;
            } 
            ?>
        </main>

    </div>
    <footer>
        <p>&copy; 2023 Parcial Paradigmas</p>
    </footer>
    <script src="fg_js/fg_scripts.js"></script>

</body>

</html>