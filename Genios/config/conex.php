<?php
$dataBase = "mysql:dbname=proyecto;host=127.0.0.1";
$user = "root";
$pass = "";

try {
    $mensajero = new PDO($dataBase, $user, $pass);
}
catch (Exception $e) {
    die("Error Al Conectar Con La Base De Datos conex");
}

?>