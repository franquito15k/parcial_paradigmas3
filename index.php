<?php
include 'conexion.php';

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcial Paradigmas</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <h1>Parcial Paradigmas</h1>
    </header>
    <div class="container">
        <aside>
            <h2>Menú</h2>
            <nav>
                <ul>
                    <li><a href="index.php?modulo=index">Enlace 1</a></li>
                    <li><a href="index.php?modulo=cualquiermodulo">Enlace 2</a></li>
                    <li><a href="index.php?modulo=cualquiermodulo">Enlace 3</a></li>
                </ul>
            </nav>
        </aside>
        <main>
            <h2>Contenido Principal</h2>
            <?php
            if (isset($_GET['modulo'])) {
                $modulo = $_GET['modulo'];
            } else {
                $modulo = 'index';
            }

            $archivo = 'modulos/' . $modulo . '.php';
            if (file_exists($archivo)) {
                include $archivo;
            } else {
                echo '<h2 style="color: red;">ERROR... no se encontro un modulo</h2>';
            }
            ?>
        </main>
    </div>
    <footer>
        <p>&copy; 2023 Parcial Paradigmas</p>
    </footer>

    <script src="/js/scripts.js"></script>
</body>

</html>