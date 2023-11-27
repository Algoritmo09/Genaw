<?php
require "config/conex.php";

$id_estudiante = $_POST["id_estudiante"];
$pnombre = $_POST["txt_pnombre"];
$snombre = $_POST["txt_snombre"];
$papellido = $_POST["txt_papellido"];
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

$sql="UPDATE estudiantes 
SET pnombre='".$pnombre."',
snombre='".$snombre."',
papellido='".$papellido."',
sapellido='".$sapellido."',
f_nacimiento='".$f_nacimiento."',
genero='".$genero."',
direccion='".$direccion."',
telefono='".$telefono."',
email='".$email."',
grado_inscribir=".$grado_inscribir.",
pn_acudiente='".$pn_acudiente."',
sn_acudiente='".$sn_acudiente."',
pa_acudiente='".$pa_acudiente."',
sa_acudiente='".$sa_acudiente."',
relacion_estudiante='".$relacion_estudiante."',
telefono_acudiente='".$telefono_acudiente."',
email_acudiente='".$email_acudiente."',
direccion_acudiente='".$direccion_acudiente."'
WHERE id=".$id_estudiante."";

if ($mensajero->query($sql))
{
    echo "<script>
    alert('INFORMACIÓN ACTUALIZADA');
    window.location.href='consultar_estudiantes.php'
    </script>";
}else
{
    echo "Error al actualizar";
}
?>
