<?php
require "config/conex.php";

$pnombre = $_POST["txt_pnombre"];
$snombre = $_POST["txt_snombre"];
$papelliodo = $_POST["txt_papellido"];
$sapellido = $_POST["txt_sapellido"];
$f_nacimiento = $_POST["txt_f_nacimiento"];
$genero = $_POST["txt_genero"];
$direccion = $_POST["txt_direccion"];
$telefono = $_POST["txt_telefono"];
$email = $_POST["txt_email"];
$grado_inscribir = $_POST["txt_grado_inscribir"];
$pn_acudiente = $_POST["txt_pn_acudiente"];
$sn_acudiente = $_POST["txt_sn_acudiente"];
$pa_acudiente = $_POST["txt_pa_acudiente"];
$sa_acudiente = $_POST["txt_sa_acudiente"];
$relacion_estudiante = $_POST["txt_relacion_estudiante"];
$telefono_acudiente = $_POST["txt_telefono_acudiente"];
$email_acudiente = $_POST["txt_email_acudiente"];
$direccion_acudiente = $_POST["txt_direccion_acudiente"];

$sql="INSERT INTO estudiantes
(pnombre, snombre, papellido, sapellido, f_nacimiento, genero, direccion, telefono, email, grado_inscribir, pn_acudiente, sn_acudiente, pa_acudiente, sa_acudiente, relacion_estudiante, telefono_acudiente, email_acudiente, direccion_acudiente) 
VALUES ('".$pnombre."','".$snombre."','".$papelliodo."','".$sapellido."','".$f_nacimiento."','".$genero."','".$direccion."','".$telefono."','".$email."',".$grado_inscribir.",'".$pn_acudiente."','".$sn_acudiente."','".$pa_acudiente."','".$sa_acudiente."','".$relacion_estudiante."','".$telefono_acudiente."','".$email_acudiente."','".$direccion_acudiente."')";

if($mensajero->query($sql)){
    $mensajero->query("SET @count = 0");
    $mensajero->query("UPDATE `estudiantes` SET `estudiantes`.`id` = @count:= @count + 1");
    $mensajero->query("ALTER TABLE `estudiantes` AUTO_INCREMENT = 1");

    echo "<script>
    alert('Estudiante registrado con éxito!');
    window.location.href='index.php'
    </script>";
}else
{
    echo "Error";
}
echo "<br>";
?>
