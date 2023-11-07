<?php
// Verifica si se pasó el parámetro "variable" en la URL
if (isset($_GET['variable'])) {
    // Obtiene el valor de "variable" de la URL
    $valor = $_GET['variable'];

    // Imprime el valor
    echo "El valor de la variable es: " . $valor;
} else {
    echo "El parámetro 'variable' no se ha proporcionado en la URL.";
}
?>
