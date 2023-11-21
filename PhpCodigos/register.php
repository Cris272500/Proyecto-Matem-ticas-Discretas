<?php

if (isset($_POST['submit'])){
    // Incluimos la base de datos
    include "db_conn_.php";

    $nombre = $_POST['nombre_usuario'];
    $correo = $_POST['correo'];
    $password = $_POST['contraseña'];
    $confirm_password = $_POST['confirm_contraseña'];

    // Validando errores
    $err = "";

    // Validando que el correo que proporciono es valido
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $err = "El correo electrónico no es válido";
        header("Location: index.php?error=$err");
        exit;
    }

    // Validando que sino introdujo algo en los inputs
    if (!(isset($_POST['nombre_usuario']) || isset($_POST['correo']) || isset($_POST['contraseña']) || 
    isset($_POST['confirm_contraseña']))){
        $err = "Por favor, llene los campos";
        header("Location: index.php?error=$err");
    }else{
        // Verificando si el correo ya existe
        $verify_correo = mysqli_query($conn, "SELECT correo FROM usuarios WHERE correo = '$correo'");
        if (mysqli_num_rows($verify_correo) != 0){
            $err = "Correo ya existente";
            header("Location: index.php?error=$err");
         }else{
            // Validando que la contraseña al menos sea de 8 caracteres
            if (strlen($password) != 8){
                $err = "La contraseña debe ser de al menos 8 caracteres";
                header("Location: index.php?error=$err");
                exit;
            }
            // Si las contraseñas no son iguales
            if ($password != $confirm_password){
                $err = "Las contraseñas no coinciden";
                header("Location: index.php?error=$err");
                exit;
            }

            // Si todo ocurrio con perfeccion, insertar datos a la base de datos
            $sql = "INSERT INTO usuarios(nombre, correo, contrasena)
                    VALUES('$nombre', '$correo', '$password')";
            mysqli_query($conn, $sql);
            header("Location: blog.php");

         }
    }

}else{
    header("Location: index.php");
}