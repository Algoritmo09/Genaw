<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/Style.css">
</head>
<body class="actualizar">
    <header class="actualizar">
        Actualizar estudiante
    </header>
<?php
require "config/conex.php";

$id_estudiante = $_POST["id_estudiante"];

$sql = "SELECT id, pnombre, snombre, papellido, sapellido, f_nacimiento, genero, direccion, 
telefono, email, grado_inscribir, pn_acudiente, sn_acudiente, pa_acudiente, sa_acudiente, relacion_estudiante, 
telefono_acudiente, email_acudiente, direccion_acudiente 
FROM estudiantes 
WHERE id = ".$id_estudiante."";

foreach($mensajero->query($sql)as $row)
{
    $id = $row["id"];
    $pnombre = $row["pnombre"];
    $snombre = $row["snombre"];
    $papellido = $row["papellido"];
    $sapellido = $row["sapellido"];
    $f_nacimiento = $row["f_nacimiento"];
    $genero = $row["genero"];
    $direccion = $row["direccion"];
    $telefono = $row["telefono"];
    $email = $row["email"];
    $grado_inscribir = $row["grado_inscribir"];
    $pn_acudiente = $row["pn_acudiente"];
    $sn_acudiente = $row["sn_acudiente"];
    $pa_acudiente = $row["pa_acudiente"];
    $sa_acudiente = $row["sa_acudiente"];
    $relacion_estudiante = $row["relacion_estudiante"];
    $telefono_acudiente = $row["telefono_acudiente"];
    $email_acudiente = $row["email_acudiente"];
    $direccion_acudiente = $row["direccion_acudiente"];
}

print "
<form class='actualizar' action='recibir_actualizar_estudiante.php' method='post'>
Primer nombre:
<input type='text' name='txt_pnombre' value='".$pnombre."' required><br>
Segundo nombre:
<input type='text' name='txt_snombre' value='".$snombre."'><br>
Primer apellido:
<input type='text' name='txt_papelliodo' value='".$papellido."' required><br>
Segundo apellido:
<input type='text' name='txt_sapellido' value='".$sapellido."'><br>
Fecha de nacimiento:
<input type='date' name='txt_f_nacimiento' value='".$f_nacimiento."' required><br>
Género:
<input type='radio' id='masculino' name='txt_genero' value='Masculino' required>
<label for='masculino'>Masculino</label>
<input type='radio' id='femenino' name='txt_genero' value='Femenino'>
<label for='femenino'>Femenino</label>
<input type='radio' id='otro' name='txt_genero' value='Otro'>
<label for='otro'>Otro</label><br><br>
Dirección:
<input type='text' name='txt_direccion' value='".$direccion."' required><br>
Teléfono:
<input type='text' name='txt_telefono' value='".$telefono."' required><br>
Correo electrónico:
<input type='email' name='txt_email' value='".$email."' required><br>
Grado a inscribir:
<input type='number' name='txt_grado_inscribir' value='".$grado_inscribir."' required><br>
Primer nombre del acudiente:
<input type='text' name='txt_pn_acudiente' value='".$pn_acudiente."' required><br>
Segundo nombre del acudiente:
<input type='text' name='txt_sn_acudiente' value='".$sn_acudiente."'><br>
Primer apellido del acudiente:
<input type='text' name='txt_pa_acudiente' value='".$pa_acudiente."' required><br>
Segundo apellido del acudiente:
<input type='text' name='txt_sa_acudiente' value='".$sa_acudiente."'><br>
Relación con el estudiante:
<input type='text' name='txt_relacion_estudiante' value='".$relacion_estudiante."' required><br>
Teléfono del acudiente:
<input type='text' name='txt_telefono_acudiente' value='".$telefono_acudiente."' required><br>
Correo electrónico del acudiente:
<input type='email' name='txt_email_acudiente' value='".$email_acudiente."' required><br>
Dirección del acudiente:
<input type='text' name='txt_direccion_acudiente' value='".$direccion_acudiente."' required><br>

<input type='hidden' name='id_estudiante' value='".$id_estudiante."' required><br>
<input type='submit'  value='Actualizar'>
</form>
";
?>
<a href="admin.php"><Button>Volver</Button></a>
</body>
</html>
