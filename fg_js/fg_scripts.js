let palabra = '';
let palabraOculta = [];
let vidas = 6;
let letrasAdivinadas = [];
let puntaje = 100;

function iniciarJuego() {
    palabra = document.getElementById('wordText').value.toUpperCase();
    palabraOculta = Array(palabra.length).fill('_');
    vidas = 6;
    letrasAdivinadas = [];
    puntaje = 100;
    document.getElementById('palabraOculta').innerText = palabraOculta.join(' ');
    document.getElementById('vidas').innerText = vidas;
    document.getElementById('juego').style.display = 'block';
    document.getElementById('formJuego').style.display = 'none';
    document.getElementById('mensaje').innerText = '';
}

function adivinar() {
    const letra = document.getElementById('letra').value.toUpperCase();
    document.getElementById('letra').value = '';

    if (letrasAdivinadas.includes(letra)) {
        document.getElementById('mensaje').innerText = 'Ya has adivinado esa letra.';
        return;
    }

    letrasAdivinadas.push(letra);

    if (palabra.includes(letra)) {
        for (let i = 0; i < palabra.length; i++) {
            if (palabra[i] === letra) {
                palabraOculta[i] = letra;
            }
        }
    } else {
        vidas--;
        puntaje -= 10;
    }

    document.getElementById('palabraOculta').innerText = palabraOculta.join(' ');
    document.getElementById('vidas').innerText = vidas;

    if (vidas === 0) {
        document.getElementById('mensaje').innerText = 'Has perdido. La palabra era: ' + palabra;
        if (confirm('Has perdido. La palabra era: ' + palabra + '. ¿Quieres volver al menú principal?')) {
            enviarPuntaje(0);
            resetJuego();
        }
    } else if (!palabraOculta.includes('_')) {
        document.getElementById('mensaje').innerText = '¡Felicidades! Has adivinado la palabra.';
        if (confirm('¡Felicidades! Has adivinado la palabra. ¿Quieres volver al menú principal?')) {
            enviarPuntaje(puntaje);
            resetJuego();
        }
    } else {
        document.getElementById('mensaje').innerText = '';
    }
}

function resetJuego() {
    document.getElementById('juego').style.display = 'none';
    document.getElementById('formJuego').style.display = 'block';
    document.getElementById('wordText').value = '';
}

function enviarPuntaje(puntaje) {
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'modulos/fg_guardar_puntaje.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send('puntaje=' + puntaje);
}