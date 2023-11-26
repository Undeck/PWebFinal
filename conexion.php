<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "web";

$conexion = new mysqli($server, $user, $pass, $db);
if ($conexion->connect_errno) {
    die("Conexion fallida" . $conexion->connect_errno0);
} else{
    echo"conectado";
}


?>