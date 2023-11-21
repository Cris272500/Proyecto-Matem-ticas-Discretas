<?php

    session_start();

    if (isset($_POST['login_submit'])){
        include "db_conn_.php";
        
        $email = $_POST['correo'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM usuarios WHERE correo = '$email' AND contrasena = '$password' ";
        $result = mysqli_query($conn, $sql);
        //$result = mysqli_query($conn, "SELECT * FROM usuarios WHERE correo='$email' AND contrasena='$password' ") or die("Error de consulta");
        //$row = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_assoc($result)){
                $_SESSION['valid'] = $row['correo'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['nombre'];
                $_SESSION['password'] = $row['contrasena'];
            }
        }
        if (isset($_SESSION['valid'])){
            $id = $_SESSION['id'];
            header("Location: index.php?user=$id");
        }
    }else{
        header("Location: index.php");
    }

?>