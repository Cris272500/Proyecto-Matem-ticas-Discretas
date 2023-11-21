<?php
    if (isset($_POST['btn_logout'])){
        session_start();

        // Destruir todas las variables de sesión
        $_SESSION = array();

        // Borrar la cookie de sesión si está presente
        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time() - 42000, '/');
        }

        // Destruir la sesión
        session_destroy();

        // Redirigir a la página de inicio de sesión o a donde prefieras
        header("Location: index.php");
        exit;
    }
?>
