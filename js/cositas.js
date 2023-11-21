// Funcion que se encarga de desactivar el href siempre y cuando sea distinto de log in
function cambiarContenidoYDesactivar() {
    var enlace = document.getElementById('enlace_name');
    var texto_enlace = enlace.textContent.trim().toLowerCase();
    //console.log(texto_enlace);
    // Verificamos si el contenido actual es distinto a log in para desactivarlo
    if (texto_enlace !== 'log in') {
        enlace.removeAttribute('href');
        //console.log("href eliminado");
    }
}

function cambiarContenido(){
    var enlace = document.getElementById('enlace_name');
    var texto_enlace = enlace.textContent.trim().toLowerCase();

    // eliminando accesibilidad para que entre al link
    console.log("Hola");
    texto_enlace.removeAttribute('href');

}

// Para indicarle a un <a> que le dimos click a un boton invisible
function clickBoton() {
    // Obtener la etiqueta y el botón por su ID
    var etiqueta = document.getElementById('etiqueta');
    var boton = document.getElementById('miBoton');

    // Agregar un evento de clic a la etiqueta
    etiqueta.addEventListener('click', function () {
        // Simular un clic en el botón
        boton.click();
    });

    // Agregar un evento de clic al botón
    boton.addEventListener('click', function () {
        // Imprimir un mensaje en la consola
        console.log('Se hizo clic en el botón');
        // También puedes imprimir un mensaje en la página
        alert('¡Se hizo clic en el botón!');
    });
}
//window.onload = clickBoton();