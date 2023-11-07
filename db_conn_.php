<?php
$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "code_solvers_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn){
    echo("Coneccion fallida");
    exit();
}