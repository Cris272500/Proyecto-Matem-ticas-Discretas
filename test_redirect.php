<?php
// Valor que deseas pasar a la cabecera
$valor = "mi_valor";

// Usar concatenación para construir la URL de redirección
$urlRedireccion = "test_obtener_valor.php?variable=" . $valor;

// Redirigir a la página que obtendrá el valor
header("Location: " . $urlRedireccion);
exit();
?>
