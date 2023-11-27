<?php
require "config/conex.php";

$codigo_rec = $_POST["codigo_txt"];
$password_rec = $_POST["password_txt"];
$ban = 0;


$sql = "SELECT id_admi, codigo, password, id_rol FROM administradores WHERE codigo = '$codigo_rec' and password = '$password_rec'";
foreach ($mensajero->query($sql) as $row) {
    $id_admi = $row["id_admi"];
    $codigo_a = $row["codigo"];
    $password_a = $row["password"];
    $id_rol = $row["id_rol"];

    if ($codigo_rec == $codigo_a && $password_rec == $password_a) {
        $ban = 1;
        break; 
    }
}


if ($ban != 1) {
    $sql = "SELECT id_profe, codigo, password, id_rol FROM profesores WHERE codigo = '$codigo_rec' and password = '$password_rec'";
    foreach ($mensajero->query($sql) as $row) {
        $id_profe = $row["id_profe"];
        $codigo_p = $row["codigo"];
        $password_p = $row["password"];
        $id_rol = $row["id_rol"];

        if ($codigo_rec == $codigo_p && $password_rec == $password_p) {
            $ban = 1;
            break;
        }
    }
}


if ($ban != 1) {
    $sql = "SELECT id, codigo, password, id_rol FROM estudiantes WHERE codigo = '$codigo_rec' and password = '$password_rec'";
    foreach ($mensajero->query($sql) as $row) {
        $id_estudiante = $row["id"];
        $codigo_e = $row["codigo"];
        $password_e = $row["password"];
        $id_rol = $row["id_rol"];

        if ($codigo_rec == $codigo_e && $password_rec == $password_e) {
            $ban = 1;
            break;
        }
    }
}

if ($ban == 1) {
    if ($id_rol == 1) {
        header('Location: admin.php');
    } elseif ($id_rol == 2) {
        header('Location: profesor.php');
    } elseif ($id_rol == 3) {
        header('Location: estudiante.php');
    } else {
        echo "Rol no reconocido";
    }
} else {
    die("Lo sentimos, prohibido entrar");
}
?>
