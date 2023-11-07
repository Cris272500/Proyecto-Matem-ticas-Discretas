
<?php
if (isset($_POST['contenido'])) {
    $contenidoH3 = $_POST['contenido'];
    echo $contenidoH3;
} else {
    echo "No se ha enviado ningún contenido.";
}
