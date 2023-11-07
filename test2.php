<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo de Obtener Contenido de h3</title>
</head>
<body>
    <h3 name="presentacion">Fundamentos de <br>Números Reales</h3>
    <button id="mostrarContenido">Mostrar Contenido</button>
    <p id="contenidoMostrado"></p>
</body>
<script>
    document.getElementById("mostrarContenido").addEventListener("click", function() {
        var contenidoH3 = document.querySelector("h3[name='presentacion']").textContent;
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "procesar.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                document.getElementById("contenidoMostrado").textContent = xhr.responseText;
            }
        };
        xhr.send("contenido=" + contenidoH3);
    });
</script>
</html>
