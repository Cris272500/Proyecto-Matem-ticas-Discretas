<?php

    session_start();

    if (isset($_POST['login_submit'])){
        include "db_conn_.php";
        
        $email = $_POST['correo'];
        $password = $_POST['password'];

        $sql = "SELECT id FROM usuarios WHERE correo = '$email'";
        $result = mysqli_query($conn, $sql);
        //$result = mysqli_query($conn, "SELECT * FROM usuarios WHERE correo='$email' AND contrasena='$password' ") or die("Error de consulta");
        $row = mysqli_fetch_assoc($result);

        if(is_array($row) && !empty($row)){
            $_SESSION['valid'] = $row['correo'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['nombre'];
            $_SESSION['password'] = $row['contrasena'];

        }

        if (isset($_SESSION['valid'])){
            $id = $_SESSION['id'];
            header("Location: index.php?user=$id");
        }
    }else{
        header("Location: index.php?user=$id");
    }

?>