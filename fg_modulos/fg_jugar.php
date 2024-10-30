<?php
if (!isset($_SESSION['id'])) {
    echo "<script>alert('Debes iniciar sesión para jugar.'); window.location='index.php?modulo=fg_login';</script>";
    exit;
}
?>

<section>
    <form id="formJuego">
        <label for="wordText">Ingrese la palabra a adivinar:</label>
        <input type="text" id="wordText" name="wordText" placeholder="Escribe la palabra a adivinar">
        <button type="button" onclick="iniciarJuego()">Iniciar Juego</button>
    </form>
    <div id="juego" style="display: none;">
        <h2>Intenta adivinar la palabra</h2>
        <div id="palabraOculta"></div>
        <p>Vidas restantes: <span id="vidas">6</span></p>
        <label for="letra">Ingresa una letra:</label>
        <input type="text" id="letra" maxlength="1">
        <button type="button" onclick="adivinar()">Adivinar</button>
        <p id="mensaje"></p>
    </div>
</section>