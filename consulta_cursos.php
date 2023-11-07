<?php
if (isset($_POST['submit'])) {
    $titulo = $_POST['titulo'];
    
    $urlRedireccion = "course_details.php?variable=" . $titulo;

    header("Location: " . $urlRedireccion);
    exit();
}
