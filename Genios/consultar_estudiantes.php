<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/Style.css">
</head>
<body class="consultar">

<form method="post" action="">
    <label for="genero">Filtrar por Género:</label>
    <select name="genero" id="genero">
        <option value="">Todos</option>
        <option value="Femenino">Femenino</option>
        <option value="Masculino">Masculino</option>
        
    </select>

    <label for="grado">Filtrar por Grado:</label>
    <select name="grado" id="grado">
        <option value="">Todos</option>
        <?php
           
            for ($i = 1; $i <= 10; $i++) {
                echo "<option value='$i'>$i</option>";
            }
        ?>
    </select>

    <input type="submit" value="Filtrar">
</form>

<?php
require "config/conex.php";


$sql = "SELECT `id`, `pnombre`, `snombre`, `papellido`, `sapellido`, `f_nacimiento`, `genero`, `direccion`, `telefono`, `email`, `grado_inscribir`, `pn_acudiente`, `sn_acudiente`, `pa_acudiente`, `sa_acudiente`, `relacion_estudiante`, `telefono_acudiente`, `email_acudiente`, `direccion_acudiente`, `codigo`, `password`, `id_rol` FROM `estudiantes`";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filtroGenero = isset($_POST["genero"]) ? $_POST["genero"] : null;
    $filtroGrado = isset($_POST["grado"]) ? $_POST["grado"] : null;

    
    $condiciones = array();
    if ($filtroGenero) {
        $condiciones[] = "`genero` = '$filtroGenero'";
    }
    if ($filtroGrado) {
        $condiciones[] = "`grado_inscribir` = '$filtroGrado'";
    }

    if (!empty($condiciones)) {
        $sql .= " WHERE " . implode(" AND ", $condiciones);
    }
}

print "
<center>
<table class='consultar'>
<tr class='consultar'>
<td><center>Código</center></td>
<td><center>Nombre</center></td>
<td><center>Fecha de nacimiento</center></td>
<td><center>Género</center></td>
<td><center>Dirección</center></td>
<td><center>Teléfono</center></td>
<td><center>Email</center></td>
<td><center>Grado a inscribir</center></td>
<td><center>Nombre del acudiente</center></td>
<td><center>Relación con el estudiante</center></td>
<td><center>Teléfono del acudiente</center></td>
<td><center>Email del acudiente</center></td>
<td><center>Dirección del acudiente</center></td>
<td><center>Password</center></td>
<td><center>Codigo</center></td>
<td><center>ID Rol</center></td>
</tr>
";

foreach ($mensajero->query($sql) as $row) {
    print "
    <tr class='consultar'>
    <td>".$row["id"]."</td>
    <td>".$row["pnombre"]." ".$row["snombre"]." ".$row["papellido"]." ".$row["sapellido"]."</td>
    <td>".$row["f_nacimiento"]."</td>
    <td>".$row["genero"]."</td>
    <td>".$row["direccion"]."</td>
    <td>".$row["telefono"]."</td>
    <td>".$row["email"]."</td>
    <td>".$row["grado_inscribir"]."</td>
    <td>".$row["pn_acudiente"]." ".$row["sn_acudiente"]." ".$row["pa_acudiente"]." ".$row["sa_acudiente"]."</td>
    <td>".$row["relacion_estudiante"]."</td>
    <td>".$row["telefono_acudiente"]."</td>
    <td>".$row["email_acudiente"]."</td>
    <td>".$row["direccion_acudiente"]."</td>
    <td>".$row["password"]."</td>
    <td>".$row["codigo"]."</td>
    <td>".$row["id_rol"]."</td>
    </tr>
    </center>";
}

print "</table>";

echo "<br>";
echo "<a href='admin.php' class='consultar'>Volver</a>";

?>

</body>
</html>
