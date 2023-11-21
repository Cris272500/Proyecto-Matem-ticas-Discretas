<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar contenido de enlace</title>
</head>
<body>

    <!-- Enlace que se modificará -->
    <a href="https://music.youtube.com/" id="miEnlace">Abrir Enlace</a>

    <!-- Botón que cambiará el contenido del enlace y desactivará el enlace -->
    <button id="miBoton" onclick="cambiarContenidoYDesactivar()">Cambiar Enlace</button>

    <script>
        function cambiarContenidoYDesactivar() {
            // Obtener el enlace por su ID
            var enlace = document.getElementById('miEnlace');

            // Cambiar el contenido del enlace
            enlace.innerHTML = 'Contenido cambiado';

            // Desactivar el enlace (eliminar el atributo 'href')
            enlace.removeAttribute('href');

            // También puedes desactivar el enlace cambiando su estilo para que no parezca un enlace
            // enlace.style.pointerEvents = 'none';
        }
    </script>

</body>
</html>
